<?php

function theme_scripts_method() {

	$version = "a";

	// Remove Unnecessary Code
	// http://www.themelab.com/2010/07/11/remove-code-wordpress-header/
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link');

	//JS

	$layoutjs = get_template_directory_uri() . '/js/layout.js';
	wp_register_script('layoutjs',$layoutjs, false, $version);

	$uijs = get_template_directory_uri() . '/js/ui.js';
	wp_register_script('uijs',$uijs);

	$membershipjs = get_template_directory_uri() . '/js/membership.js';
	wp_register_script('membershipjs',$membershipjs);

	
	// CSS

    $defaultstyle = get_bloginfo('stylesheet_url'); 
    wp_register_style('defaultstyle',$defaultstyle);

	$printcss = get_template_directory_uri() . '/css/print.css';
    wp_register_style('printcss',$printcss, array(),'','print');

	$camflexslider = get_template_directory_uri() . '/css/flexslider.css';
    wp_register_style('cam-flexslider',$camflexslider);

	$camcommon = get_template_directory_uri() . '/css/style.css';
    wp_register_style('cam-common',$camcommon);


	// Okay go

	wp_enqueue_script("jquery");
	wp_enqueue_script( 'layoutjs');	

	wp_enqueue_script( 'uijs');	

    wp_enqueue_style( 'defaultstyle');

    wp_enqueue_style( 'printcss');


	/* Wooslider Customizations */
	wp_dequeue_style('wooslider-flexslider');
	wp_dequeue_style('wooslider-common');
    wp_enqueue_style( 'cam-flexslider');
    wp_enqueue_style( 'cam-common');


}

add_action('wp_print_styles', 'theme_scripts_method');



// Override Gravity Forms styles
function enqueue_custom_script(){

	$version = "b";

	wp_dequeue_style( 'gforms_formsmain_css' );

	$cam_formsmain = get_template_directory_uri() . '/css/gforms-formsmain.css';
	wp_register_style('cam_formsmain',$cam_formsmain, false, $version);
	wp_enqueue_style( 'cam_formsmain');	

}
add_action("gform_enqueue_scripts", "enqueue_custom_script", 10, 2);


?>