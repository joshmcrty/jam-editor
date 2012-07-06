<?php
/*
Plugin Name: JAM Rich Text Editor
Plugin URI: http://joshmccarty.com
Description: This modifies the rich text editor to encourage best practices in web typography by removing certain direct-formatting buttons and options and adding some others.
Version: 1.0
Author: Josh McCarty
Author URI: http://joshmccarty.com
License: GNU General Public License, version 2 (GPL).
*/

/*  Copyright 2012 Josh McCarty  (email : josh@joshmccarty.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! function_exists( 'jameditor_update_mce_typography_options' ) ) :

	function jameditor_update_mce_typography_options( $initArray ) {

		// Remove h1 from list of block formats
		$initArray[ 'theme_advanced_blockformats' ] = 'p, address, pre, code, h2, h3, h4, h5, h6';

		// Remove text color, underline, and alignment buttons
		$initArray[ 'theme_advanced_disable' ] = 'forecolor, underline, justifyleft, justifycenter, justifyright, justifyfull';

		// Add abbr button
		//$initArray[ 'theme_advanced_buttons2_add' ] = 'abbr';

		// Add additional CSS classes to wrap text in using a <span> element
		$initArray[ 'theme_advanced_buttons2_add' ] = 'styleselect';
		$initArray[ 'theme_advanced_styles' ] = 'Button = button; Pathway = pathway; Field = field';

		return $initArray;
	}
	add_filter( 'tiny_mce_before_init', 'jameditor_update_mce_typography_options' );

endif;
?>