<?php

// Frontend
function mcacolumnset_shortcode($atts){
	if ( !is_feed() ) :

		extract( shortcode_atts( array(
			'count' => '',
		), $atts ) );

		if ( $count == "4" ) {
			$label = "columns-four";
		} elseif  ( $count == "3" ) {
			$label = "columns-three";			
		} elseif  ( $count == "2" ) {
			$label = "columns-two";			
		} else {
			$label = "columns";			
		}

		return '</div></div><div class="' . $label . '"><div class="column firstcolumn">';
	endif;
}
add_shortcode( 'columnset', 'mcacolumnset_shortcode' );


function mcacolumns_shortcode(){
	if ( !is_feed() ) :
		return '</div><div class="column">';
	endif;
}
add_shortcode( 'column', 'mcacolumns_shortcode' );


function mcacolumns_wrapper($content){

		global $post;

	if ( !is_feed() ) :
		$meta = get_field('columncount');

		if ( $meta['count'] == 2 ) {
			$wrapper = '<div class="columns-two">';
		} elseif ( $meta['count'] == 3 ) {
			$wrapper = '<div class="columns-three">';
		} elseif ( $meta['count'] == 4 ) {
			$wrapper = '<div class="columns-four">';
		} else {
			$wrapper = '<div class="columns">';
		}
		
		$wrapper .= '<div class="column firstcolumn">' . $content . '</div></div>';

	    return $wrapper;
	else:
		return $content;
	endif;

}
add_filter( 'the_content', 'mcacolumns_wrapper' );


?>
