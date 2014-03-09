<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php 
			wp_title( '&mdash;', true, 'right' );
			bloginfo( 'name' ); 
			$site_description = get_bloginfo( 'description', 'display' );

			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' &mdash; ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
			?></title>

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

		<?php wp_head(); ?>

	</head>

	<body>
		<div id="wrapperTop"></div>
		<div id="wrapperMiddle">
			<div id="top"></div>
			<div id="content">