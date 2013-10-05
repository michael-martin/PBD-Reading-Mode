<?php
/**
 * Plugin Name: PBD Reading Mode
 * Plugin URI: http://www.problogdesign.com/
 * Description: Adds a distraction-free way to view your blog posts, using <a href="http://www.jacklmoore.com/colorbox">Colorbox</a> by Jack Moore.
 * Version: 0.1
 * Author: Pro Blog Design
 * Author URI: http://www.problogdesign.com/
 * License: GPLv2/MIT
 *
 *
 * Colorbox was written by Jack Moore and is licensed under the MIT license.
 * - http://www.jacklmoore.com/colorbox
 * - https://twitter.com/jacklmoore
 */
 
 /**
  * Queue Reading Mode scripts and styles.
  */
 function pbd_rm_scripts() {
 	if(is_single() ) :
 		// JS
 		wp_enqueue_script(
 			'colorbox',
 			plugin_dir_url( __FILE__ ) . 'colorbox/jquery.colorbox-min.js',
 			array('jquery'),
 			'1.4.31',
 			true
 		);
 		
 		wp_enqueue_script(
 			'pbd-reading-mode',
 			plugin_dir_url( __FILE__ ) . 'js/pbd-reading-mode.js',
 			array('jquery', 'colorbox'),
 			'0.1',
 			true
 		);
 		
 		// CSS
 		wp_enqueue_style(
 			'colorbox',
 			plugin_dir_url( __FILE__ ) . 'colorbox/colorbox.css',
 			array(),
 			'1.3.19'
 		);
 		
 		wp_enqueue_style(
 			'pbd-reading-mode',
 			plugin_dir_url( __FILE__ ) . 'css/pbd-reading-mode.css',
 			array(),
 			'0.1'
 		);
 	endif;
 }
 add_action('wp_enqueue_scripts', 'pbd_rm_scripts');
 
 /**
  * On single posts, it wraps the content in div.
  */
 function pbd_rm_content_filter($content) {
 	if(is_single() ) {
 		$content = '<div class="rm-content">'. $content .'</div>';
 	}
 	
 	return $content;
 }
 add_filter('the_content', 'pbd_rm_content_filter');
 
 ?>