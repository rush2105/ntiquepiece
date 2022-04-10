<?php
/*

Included all theme required functions

@package Ntiquepiece

*/

// A normal function to display print_r with <pre> tag

function pre_print( $data ){
	if(!empty ($data)){
		echo '<pre>';
       		print_r($data);
		echo '</pre>';
		wp_die();
	}
}

function nticpiece_include_styles_n_scripts(){
   wp_enqueue_style('main-style',get_template_directory_uri() . '/assets/css/main-style.css', ['stylesheet'] ,true);
   wp_enqueue_style('stylesheet',get_stylesheet_uri() ,[],true);
   wp_enqueue_script('main-js',get_template_directory_uri() . '/assets/js/app.js', [], false,true);
}

add_action('wp_enqueue_scripts','nticpiece_include_styles_n_scripts');