<?php
// This file is part of The Bootstrap 3 Moodle theme
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Flexibase layout file.
 *
 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later */
?>

<footer id="page-footer">
    <?php
    global $course, $PAGE;

    $context = context_system::instance();
    if (has_capability('moodle/course:create', $context)) {?>
        <div id="region-creatorbtm" class="well">
            <?php
            if ($knownregionadminbottom) {
                echo '<h3>'.get_string('region-side-creatorbtm', 'theme_flexibase').'</h3>';
                echo $OUTPUT->blocks('side-creatorbtm', "sidecreatorbtm flexcontainer");
            }
            ?>
        </div>
    <?php
    }

    if (is_siteadmin()) {
    ?>
        <div id="region-adminbottom" class="well">
            <?php
            if ($knownregionadminbottom) {
                echo '<h3>'.get_string('region-side-adminbottom', 'theme_flexibase').'</h3>';
                echo $OUTPUT->blocks('side-adminbottom', "sideadminbottom flexcontainer");
            }
            ?>
        </div>
    <?php
    }
    ?>
    <div id="course-footer">
        <?php echo $OUTPUT->course_footer(); ?>
    </div>
    <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
    <?php
    echo $OUTPUT->login_info();
    echo $OUTPUT->home_link();
    echo $OUTPUT->standard_footer_html();
    ?>
    <script>Modernizr.addTest('flexbox', Modernizr.testAllProps('flex'));</script>
</footer>
<?php echo $OUTPUT->standard_end_of_body_html();
