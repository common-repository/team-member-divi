<?php
/*
Plugin Name: Divi Team Member
Plugin URI:  https://wordpress.org/plugins/team-member-divi/
Description: Elegent Team member Plugin
Version:     1.0.1
Author:      Shourov
Author URI:  https://www.facebook.com/sheikhshourovbd
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dteam-team-member
Domain Path: /languages

Divi Team Member is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Team Member is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Team Member. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'dteam_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function dteam_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/TeamMember.php';
}
add_action( 'divi_extensions_init', 'dteam_initialize_extension' );
endif;
