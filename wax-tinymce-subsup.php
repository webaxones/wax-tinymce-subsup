<?php
/*
  Plugin Name: WAX Tinymce SubSup
  Plugin URI: https://www.webaxones.com
  Description: Add Subscript and Superscript buttons to tinymce editor
  Author: Webaxones
  Author URI: https://www.webaxones.com
  Version: 1.0
 */

// don't load directly
if ( !defined( 'ABSPATH' ) )
	die('-1');


/**
 *  Add in 2 core buttons that's disabled by default : Subscript and Superscript
 *  
 *  @param   array  $buttons  The array of buttons
 *  @return  array  $buttons  The modified array of buttons
 */

 function wax_tinymce_subsup($buttons) {	

  $buttons[] = 'superscript';
  $buttons[] = 'subscript';

  return $buttons;
}
add_filter('mce_buttons_2', 'wax_tinymce_subsup');
