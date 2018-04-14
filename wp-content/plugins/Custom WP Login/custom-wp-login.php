<?php 

/*
Plugin Name:  Custom WP Login
Description:  Custom WP Login
Version:      1.0
Author:       Nenad Manoilov
Author URI:   https://manoilov.me/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  nvcwp
Domain Path:  /languages
*/

function cwpl_login_stylesheet() {
    // load stylesheet

    wp_enqueue_style( 'cwpl-custom-stylesheet', plugin_dir_url(__FILE__) . 'login-styles.css' );
}

add_action('login_enqueue_scripts', 'cwpl_login_stylesheet');