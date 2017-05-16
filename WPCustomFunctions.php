<?php

/**
 * @package WPCustomFunctions
 * @version 1.0
 */
/*
Plugin Name: Custom Functions
Description: Custom functions for wordpress
Author: Ellen Langelaar
Version: 1.0
Author URI: http://www.ellenlangelaar.nl
*/

// Creating a span block
function get_block($class, $name = null) {
  $content = $name == null ? $class : $name;
  return '<table> <tbody><tr><td class="span-block"><span class="'.$class.'-this">'.$content.'</span></td><td>';
}
// Do span block
function do_block_start() {
  return get_block("do");
}
// Do not span block
function do_not_block_start() {
  return get_block("do", "do not");
}
// Avoid span block
function avoid_block_start() {
  return get_block("avoid");
}
// Advice span block
function advice_block_start() {
  return get_block("advice");
}
// End of span block
function block_end() {
  return '</td></tr></tbody></table>';
}
// Add the short codes for the span blocks
add_shortcode('do_block_start', 'do_block_start');
add_shortcode('dont_block_start', 'do_not_block_start');
add_shortcode('avoid_block_start', 'avoid_block_start');
add_shortcode('advice_block_start', 'advice_block_start');
add_shortcode('block_end', 'block_end');

// Add style sheet to editor
function wpdocs_theme_add_editor_styles() {
  add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


?>