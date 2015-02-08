<?php
// This file is part of Moodle - http://moodle.org/
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
 * Theme Flexibase language file.
 *
 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @parents    Bootstrap, Cerulean
 * @copyright  2014 Bas Brands - et al per those themes
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['choosereadme'] = '
<p>flexibase is based on the Bootstrap3 parent theme (bootstrap), child theme (Cerulean) and the bootswatch Spacelab</p>
<p>However, it uses flexbox layouts for the main layout component areas, rather than bootstrap grids in order to provide an easy way for admins to manage a wide variety of layouts on their site through the theme settings pages, without needing to customise any code.</p>
';

$string['configtitle'] = 'FlexiBase';

$string['logo'] = 'Logo';
$string['logodesc'] = 'Please upload your custom logo here if you want to add it to the header.<br>
If the height of your logo is more than 75px add the following CSS rule to the Custom CSS box below.<br>
a.logo {height: 100px;} or whatever height in pixels the logo is.';

$string['pluginname'] = 'FlexiBase';
$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';

// Regions
$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';

$string['region-side-mainpost'] = 'Main Content Right';
$string['region-side-mainpre'] = 'Main Content Left';
$string['region-side-maintop'] = 'Main Content Top';
$string['region-side-mainbottom'] = 'Main Content Bottom';
$string['region-side-top'] = 'Top';
$string['region-side-bottom'] = 'Bottom';

// Settings
// Readme.
$string['readme_title'] = 'FlexiBase read-me';
$string['readme_desc'] = 'Please {$a->url} containing more information about the FlexiBase theme.';
$string['readme_click'] = 'click for README.txt';
// General.
$string['genericsettings'] = 'General';
$string['generalheadingsub'] = 'General settings';
$string['generalheadingdesc'] = 'Configure the general settings for the theme here.';
// Layouts
$string['layoutheading'] = 'Layout';
$string['layoutheadingsub'] = 'Set the layouts used by pages in your site';
$string['layoutdesc'] = '<p>There are 5 layouts available for your site pages:</p>
<p><img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout1&amp;component=theme" alt="Pre and Post Layout" title="Pre and Post layout">  <img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout2&amp;component=theme" alt="Two Pre Layout" title="Two Pre layout"/>  <img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout3&amp;component=theme" alt="Two Pre Layout" title="Two Pre layout"/>  <img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout4&amp;component=theme" alt="Two Pre Layout" title="Two Pre layout"/>  <img style=margin:2px;" src ="../theme/image.php?theme=flexibase&amp;image=settings/layout5&amp;component=theme" alt="Two Pre Layout" title="Two Pre layout"/></p>
<p>There are also additional block regions at the top and bottom and within the main content area, giving enormous flexibility without the need to set layout files in the code. These are available on all the page types below and can be used (or not) as required.<br>All layouts are designed to be RTL compatible and responsive.<br></p>';
$string['defaultlayout'] = 'Default';
$string['defaultlayoutdesc'] = 'SideBar layout for default pages';
$string['courseslayout'] = 'Courses';
$string['courseslayoutdesc'] = 'SideBar layout for course pages';
$string['frontpagelayout'] = 'Front Page';
$string['frontpagelayoutdesc'] = 'SideBar layout for the front page';
$string['myhomelayout'] = 'My Home';
$string['myhomelayoutdesc'] = 'SideBar layout for the My Home dashboard page';
// Alerts.
$string['alertsheading'] = 'User alerts';
$string['alertsheadingsub'] = 'Display important messages to your users on the front page';
$string['alertsdesc'] = 'This will display an alert (or multiple) in three different styles to your users on the Moodle frontpage. Please remember to disable these when no longer needed.';
$string['enablealert'] = 'Enable alerts';
$string['enablealertdesc'] = 'Enable or disable alerts';
$string['alert1'] = 'First alert';
$string['alert2'] = 'Second alert';
$string['alert3'] = 'Third alert';
$string['alertinfodesc'] = 'Enter the settings for your alert.';
$string['alerttitle'] = 'Title';
$string['alerttitledesc'] = 'Main title/heading for your alert.';
$string['alerttype'] = 'Level';
$string['alerttypedesc'] = 'Set the appropriate alert level/type to best inform your users.';
$string['alerttext'] = 'Alert text';
$string['alerttextdesc'] = 'What is the text you wish to display in your alert.';
$string['alert_info'] = 'Information';
$string['alert_warning'] = 'Warning';
$string['alert_general'] = 'Announcement';
// Carousel.
$string['carouselheading'] = 'Carousel Slideshow';
$string['carouselheadingsub'] = 'Set images and captions for the frontpage carousel';
$string['carouseldesc'] = 'Set upto 8 images, with title, caption and link url for the front page carousel.';
$string['toggleslideshow'] = 'Toggle Carousel display';
$string['toggleslideshowdesc'] = 'Choose if you wish to hide or show the carousel.';
$string['numberofslides'] = 'Number of slides';
$string['numberofslides_desc'] = 'Number of slides on the carousel.';
$string['hideonphone'] = 'Hide carousel on mobiles';
$string['hideonphonedesc'] = 'Choose if you wish to disable slide show on mobiles.';
$string['hideontablet'] = 'Hide carousel on tablets';
$string['hideontabletdesc'] = 'Choose if you wish to disable the carousel on tablets.';
$string['alwaysdisplay'] = 'Always show';
$string['displaybeforelogin'] = 'Show before login only';
$string['displayafterlogin'] = 'Show after login only';
$string['dontdisplay'] = 'Never show';
$string['readmore'] = 'Read more';
$string['slideno'] = 'Slide {$a->slide}';
$string['slidenodesc'] = 'Enter the settings for slide {$a->slide}.';
$string['slidetitle'] = 'Slide title';
$string['slidetitledesc'] = 'Enter a descriptive title for your slide';
$string['noslidetitle'] = 'No title for slide {$a->slide}';
$string['slideimage'] = 'Slide image';
$string['slideimagedesc'] = 'Image works best if it is transparent.';
$string['slidecaption'] = 'Slide caption';
$string['slidecaptiondesc'] = 'Enter the caption text to use for the slide';
$string['slideurl'] = 'Slide link';
$string['slideurldesc'] = 'Enter the target destination of the slide\'s image link';


// Regions
$string['preandpost'] = 'Pre and Post sidebars';
$string['twopre'] = 'Two sidebars - Pre';
$string['twopost'] = 'Two sidebars - Post';
$string['singlepre'] = 'Single sidebar - Pre';
$string['singlepost'] = 'Single sidebar - Post';







// Colours
$string['colorheading'] = 'Colour';
$string['colorheadingsub'] = 'Set the colours used in your theme';
$string['colordesc'] = 'Here you can find various settings to change many of the colours found in this theme.';

