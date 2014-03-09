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
			<div id="top">             
				<div id="header">
					<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.gif" alt="logo" border="none" id="logo"/></a>
					
					<div class="webicons">
						<a href="http://www.flickr.com/photos/camla_org/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flickr_icon_s.gif" alt="CAM flickr" /></a>
						<a href="http://twitter.com/camlaorg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_s.gif" alt="CAM twitter" /></a>
						<a href="http://www.facebook.com/chineseamericanmuseum"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook_s.gif" alt="CAM facebook" /></a><br />
					</div>

					<form class="searchForm" action="http://www.google.com/cse" id="cse-search-box"><div>
						<input type="hidden" name="cx" value="013220055791597984794:ejj90dhzyla" />
	    				<input type="hidden" name="ie" value="UTF-8" />
	    				<input type="text" name="q" size="20" value="Search"/>
					</div></form>

					<div class="maillist"></div>

					<?php wp_nav_menu( array('theme_location' => 'quicklinks' )); ?>

					<span class="maillist"><a href="http://visitor.constantcontact.com/d.jsp?m=1102633929224&amp;p=oi" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail_sm.jpg" alt="Join our mail list" width="140" height="21" /></a></span>
					
				</div>

				<div id="menu">
					<ul class="nav">
						<li class="button">
							<div class="parent num1">
								<a href='/mission-and-history/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloudgreen.gif" class="navImage" alt="menu background" />The Museum</a>											

								<div class="dropdown"><?php wp_nav_menu( array('theme_location' => 'the-museum' )); ?></div>

							</div>
						</li>

						<li class="button">
							<div class="parent num2">
								<a href='/visit/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloudgreen.gif" class="navImage" alt="menu background" />Visit</a>											

								<div class="dropdown"><?php wp_nav_menu( array('theme_location' => 'visit' )); ?></div>

							</div>
						</li>

						<li class="button">
							<div class="parent num3">
								<a href='/current-exhibits/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloudgreen.gif" class="navImage" alt="menu background" />Exhibitions</a>											

								<div class="dropdown"><?php wp_nav_menu( array('theme_location' => 'exhibitions' )); ?></div>

							</div>
						</li>

						<li class="button">
							<div class="parent num4">
								<a href='/calendar/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloudgreen.gif" class="navImage" alt="menu background" />Events</a>											

								<div class="dropdown"><?php wp_nav_menu( array('theme_location' => 'events' )); ?></div>

							</div>
						</li>

						<li class="button">
							<div class="parent num5">
								<a href='/education/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloudgreen.gif" class="navImage" alt="menu background" />Education</a>											

								<div class="dropdown"><?php wp_nav_menu( array('theme_location' => 'education' )); ?></div>

							</div>
						</li>

						<li class="button">
							<div class="parent num6">
								<a href='/membership/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloudgreen.gif" class="navImage" alt="menu background" />Support CAM</a>

								<div class="dropdown"><?php wp_nav_menu( array('theme_location' => 'membership' )); ?></div>

							</div>
						</li>


						<li class="button">
							<div class="parent num7">
								<a href='/press/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cloudgreen.gif" class="navImage" alt="menu background" />Media/Press</a>											

								<div class="dropdown"><?php wp_nav_menu( array('theme_location' => 'media' )); ?></div>

							</div>
						</li>

					</ul>

				</div>
			</div>
			
			<div id="content">