<?php
/*
Plugin Name:  NVC WP Basic Plugin
Description:  NVC WP Basic WordPress Plugin
Version:      1.0
Author:       Nenad Manoilov
Author URI:   https://manoilov.me/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  nvcwp
Domain Path:  /languages
*/

// remove default dashboard meta boxes

function nvcwp_basic_plugin() {
    remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_action('welcome_panel', 'wp_welcome_panel');
}

add_action( 'admin_init', 'nvcwp_basic_plugin' );

