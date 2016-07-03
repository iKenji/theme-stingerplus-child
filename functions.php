<?php
if ( !defined( 'ABSPATH' ) ) {
exit;
}

if (locate_template('/st-kanri.php') !== '') {
require_once locate_template('/st-kanri.php');
}

if (locate_template('/st-theme-customization.php') !== '') {
require_once locate_template('/st-theme-customization.php');
}

if (locate_template('/st-widgets.php') !== '') {
require_once locate_template('/st-widgets.php');
}


/* カスタム */
if (locate_template('/../stingerplus/st-font.php') !== '') {
require_once locate_template('/st-font.php');
}
if (locate_template('/analyticstracking.php') !== '') {
require_once locate_template('/analyticstracking.php');
}

if (locate_template('/st-font.php') !== '') {
require_once locate_template('/st-font.php');
}
if (locate_template('/analyticstracking.php') !== '') {
require_once locate_template('/analyticstracking.php');
}

/* ここまで */
