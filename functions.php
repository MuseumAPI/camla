<?php

function theme_scripts_method() {

	// Remove Unnecessary Code
	// http://www.themelab.com/2010/07/11/remove-code-wordpress-header/
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link');

	//JS
	$uijs = get_template_directory_uri() . '/js/ui.js';
	wp_register_script('uijs',$uijs);
	wp_enqueue_script( 'uijs');	

    $defaultstyle = get_bloginfo('stylesheet_url'); 
    wp_register_style('defaultstyle',$defaultstyle);
    wp_enqueue_style( 'defaultstyle');

	$printcss = get_template_directory_uri() . '/css/print.css';
    wp_register_style('printcss',$printcss, array(),'','print');
    wp_enqueue_style( 'printcss');

	if ( is_page('visit') ) :
		$hidejs = get_template_directory_uri() . '/js/hide.js';
		wp_register_script('hidejs',$hidejs);
		wp_enqueue_script( 'hidejs');
	endif;

	if ( is_page('membership') ) :
		$membershipjs = get_template_directory_uri() . '/js/membership.js';
		wp_register_script('membershipjs',$membershipjs);
		wp_enqueue_script( 'membershipjs');
	endif;

	/* Wooslider Customizations */
	wp_dequeue_style('wooslider-flexslider');
	wp_dequeue_style('wooslider-common');

	$camflexslider = get_template_directory_uri() . '/css/flexslider.css';
    wp_register_style('cam-flexslider',$camflexslider);
    wp_enqueue_style( 'cam-flexslider');
	
	$camcommon = get_template_directory_uri() . '/css/style.css';
    wp_register_style('cam-common',$camcommon);
    wp_enqueue_style( 'cam-common');



}

add_action('wp_enqueue_scripts', 'theme_scripts_method');



// Sidebars
// http://justintadlock.com/archives/2010/11/08/sidebars-in-wordpress

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	register_sidebar(
		array(
			'id' => 'sidenav',
			'name' => __( 'Side Navigation' ),
			'before_widget' => '<div id="%1$s" class="sidenav %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);

}


add_action('init', 'register_custom_menu');
function register_custom_menu() {
	register_nav_menu('quicklinks', __('Quick Links'));

	register_nav_menu('education', __('Education'));
	register_nav_menu('events', __('Events'));
	register_nav_menu('exhibitions', __('Exhibitions'));
	register_nav_menu('media', __('Media'));
	register_nav_menu('membership', __('Membership'));
	register_nav_menu('the-museum', __('The Museum'));
	register_nav_menu('visit', __('Visit'));
	
}

// Excerpt tweaks
function new_excerpt_length($length) {
	return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more( $more ) {
		return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );



// Includes

require_once( 'functions/columns.php' );



?>