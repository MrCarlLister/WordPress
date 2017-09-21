<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// Remove support for functionality
require_once(get_template_directory().'/assets/functions/remove-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
// require_once(get_template_directory().'/assets/functions/comments.php'); 
 

// Adds support for multiple languages
// require_once(get_template_directory().'/assets/translation/translation.php'); 

// Remove 4.2 Emoji Support
require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php'); 

// Global options
require_once(get_template_directory().'/assets/functions/options.php');

// Functionality extensions
require_once(get_template_directory().'/assets/functions/functionality.php');




