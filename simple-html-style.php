<?php
/**
 * @package simple-html-styleguide
 * @author Cameron Macintosh
 * @version 0.1
**/

/**

Plugin Name: Simple HTML Styleguide
Plugin URI: https://github.com/cambot/Simple-HTML-Styleguide
Description: Easily add HTML elements to visually validate themes under development.
Version: 0.1
Author: Cameron Macintosh

**/

defined( 'ABSPATH' ) or die( 'No script kiddies please!');

function simple_html_styleguide_shortcode( $atts, $content ) {
	$plugin_dir = plugin_dir_path(__FILE__);
	include($plugin_dir . 'partials/headings.html.php');
	include($plugin_dir . 'partials/lists.html.php');
}
add_shortcode('html-styleguide', 'simple_html_styleguide_shortcode');



