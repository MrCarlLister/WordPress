<?php

// REMOVE NODES
add_action( 'admin_bar_menu', 'remove_nodes', 999 );
function remove_nodes( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

// REMOVE DASHBOARD WIDGETS
function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}
 
// add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

