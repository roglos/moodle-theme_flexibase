<?php
        global $CFG, $COURSE;
        if (empty($CFG->courseoverviewfileslimit)) {
            return array();
        }
        require_once($CFG->libdir. '/filestorage/file_storage.php');
        require_once($CFG->dirroot. '/course/lib.php');
        $fs = get_file_storage();
        $context = context_course::instance($COURSE->id);
        $files = $fs->get_area_files($context->id, 'course', 'overviewfiles', false, 'filename', false);
        if (count($files)) {
            $overviewfilesoptions = course_overviewfiles_options($COURSE->id);
            $acceptedtypes = $overviewfilesoptions['accepted_types'];
            if ($acceptedtypes !== '*') {
                // Filter only files with allowed extensions.
                require_once($CFG->libdir. '/filelib.php');
                foreach ($files as $key => $file) {
                    if (!file_extension_in_typegroup($file->get_filename(), $acceptedtypes)) {
                        unset($files[$key]);
                    }
                }
            }
            if (count($files) > $CFG->courseoverviewfileslimit) {
                // Return no more than $CFG->courseoverviewfileslimit files.
                $files = array_slice($files, 0, $CFG->courseoverviewfileslimit, true);
            }
        }


        // Display course overview files.
        $courseimage = '';
        foreach ($files as $file) {
            $isimage = $file->is_valid_image();
            if ($isimage) {
				$courseimage = file_encode_url("$CFG->wwwroot/pluginfile.php",
                    '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                    $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
            }
        }
        // Default image.
        if ($courseimage == '') {
            $courseimage = $PAGE->theme->setting_file_url('courseimagedefaultheader', 'courseimagedefaultheader');
        }
        
$headerimagetype=(empty($PAGE->theme->settings->courseimageheader)) ? 1 : $PAGE->theme->settings->courseimageheader;

$moodleheaderclass='';
$headerimage='';
$courseheaderclass='';
if ($PAGE->pagelayout=='course') {
	if ($headerimagetype == 1) {
		if ($courseimage) {
			$moodleheaderclass='withimage';
			$headerimage=$courseimage;
		}
	}
	if ($headerimagetype == 2) {
		if ($courseimage) {
			$courseheaderclass='withimage';
		}
	}
}
