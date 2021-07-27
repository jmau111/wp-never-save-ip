<?php
/**
 * Plugin Name: WP Never save IP
 * Description: prevent WordPress from saving IP of commentators
 * Author: Julien Maury
 * Author URI: https://www.julien-maury.dev
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
if ( ! function_exists( 'add_filter' ) ) {
    die( '~ what are you trying to do ? ~');
}

add_filter( 'pre_comment_user_ip', '__return_empty_string' );