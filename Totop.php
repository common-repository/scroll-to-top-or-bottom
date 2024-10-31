<?php 
/*
Plugin Name: Smooth Scroll To Top or Bottom
Description: Small tiny plugin for scroll to top and bottom of your web page
Plugin URI: http://www.ontorok.com/scroll-to-top-and-bottom/
Author: shishir
Author URI: http://ontorok.com
Version: 1.0.1
License: GPL2
Text Domain: ontorok

*/

/*

    Copyright (C) 2014  ifte  ifte.hsn2013@gmail.com

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
  

    /**
	 * Proper way to enqueue scripts and styles
	 */
	function ok_toTop_scripts() {
		wp_enqueue_script( 'jquery' ); 
        wp_enqueue_script( 'ok-toTop-js', plugin_dir_url( __FILE__ ). 'js/jquery.totop.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'ok-toTopScript-js', plugin_dir_url( __FILE__ ). 'js/toTopScript.js', array('jquery'), '1.0', true );
		wp_enqueue_style( 'ok-toTop-style', plugin_dir_url( __FILE__ ).'css/totop.css',array(), '1.0.5' );
		
	}

	add_action( 'wp_enqueue_scripts', 'ok_toTop_scripts' );


function toTop_addDiv(){
    ?>
    <div id="totopscroller"> </div>
<?php }


add_action('wp_footer', 'toTop_addDiv');
 ?>