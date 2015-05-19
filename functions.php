<?php

// Includes

require_once( 'functions/columns.php' );
require_once( 'functions/enqueue.php' );


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






?>