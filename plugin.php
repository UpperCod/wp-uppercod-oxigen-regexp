<?php namespace UpperCodShortCodeData;

/**
 * Plugin Name:       UpperCod - Oxygen RegExp.
 * Plugin URI:        http://github.com/uppercod/wp-uppercod-oxygen-regexp
 * Description:       Modify expressions to invoke custom tag and custom classes
 * Version:           1.0.0
 * Requires PHP:      7.2
 * Author:            UpperCod
 * Author URI:        http://github.com/uppercod
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

defined("ABSPATH") || exit;

add_action("oxygen_enqueue_iframe_scripts", function () {
    wp_enqueue_script("oxygen-regexp", plugin_dir_url(__FILE__) . "iframe.js", ["oxygen-aos"], null, true);
});
