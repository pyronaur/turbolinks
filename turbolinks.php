<?php
/*
Plugin Name: Turbolinks
Plugin URI:  https://justnorris.com/turbolinks
Description: Speed up your site with Turbolinks
Version:     1.0.0
Author:      justnorris
Author URI:  https://justnorris.com
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

define( 'TURBOLINKS_SCRIPT_VERSION', '5.0.3' );
define( 'TURBOLINKS_PATH', realpath( plugin_dir_path( __FILE__ ) ) . '/' );


function turbolinks_setup() {

	wp_register_script( 'turbolinks', plugin_dir_url( __FILE__ ) . '/js/turbolinks.js', NULL, TURBOLINKS_SCRIPT_VERSION, true );
	wp_enqueue_script( 'turbolinks' );

}

add_action( 'init', 'turbolinks_setup' );
