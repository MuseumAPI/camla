<?php 
/* Template Name: New Home */ 
?>

<?php get_header(); ?>

<div class="home">

<div class="home-slideshow">	
<?php echo do_shortcode('[wooslider slide_page="new-homepage" slider_type="slides" limit="20"]'); ?>
</div>

<div class="rightcolumn">

<div class="home-support">
<h2>Support CAM</h2>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile;?>

	<ul>
		<li><a href="http://camla.org/membership/">Join</a></li>
		<li><a href="http://camla.org/giving-opportunities/">Donate</a></li>
	</ul>
</div>

<div class="home-news">
	<h2>What’s New</h2>

	<?php 
	$args = array(
	  'category_name' => 'news',
	  'posts_per_page' => -1
	);
	
	
	query_posts($args); ?>

	  <?php while (have_posts()) : the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php the_content(); ?>
	  <?php endwhile;?>

</div>

</div>

<div class="home-exhibitions">
<h2>Current Exhibitions</h2>

<?php

$page_slug = 'current-exhibits';

$exhibitslink = get_permalink( get_page_by_path( $page_slug ) );

$exhibitspage = get_page_by_path($page_slug);

$exhibitionargs = array(
	'orderby' => 'menu_order', // Allows users to set order of subpages
	'order' => 'DESC',
	'post_parent' => $exhibitspage->ID,
	'post_type' => 'page',
	'numberposts'     => -1,
	'post_status' => 'publish'
);  

$exhibitions = get_posts($exhibitionargs); ?>

<?php foreach ($exhibitions as $post) : 

	setup_postdata($post); 

	$title = sanitize_title($post->post_title);	

	?>

	<div class="home-exhibit">
		<?php if ( has_post_thumbnail() ) : ?>
			<a class="thumbnail" href="<?php echo $exhibitslink . "#" . $title; ?>"><?php the_post_thumbnail(); ?></a>
		<?php endif; ?>
		<h3><a href="<?php echo $exhibitslink . "#" . $title; ?>"><?php the_title(); ?></a></h3>
		<?php $readdates = get_field('excerpt'); ?>
		<?php if ( $readdates !== '' ) echo wpautop($readdates); ?>
		<?php $thisexcerpt = get_the_excerpt(); ?>
		<p><?php echo $thisexcerpt; ?> <a href="<?php echo $exhibitslink . "#" . $title; ?>">Read&nbsp;more</a></p>
	</div>


<?php endforeach; ?>

</div>

<div class="home-video">

	<div class="description">
		<h2>CAM Videos</h2>

		<?php $category = get_category_by_slug('videos'); ?>
		<?php echo category_description($category->term_id) ?>

		<p class="watchmore"><a href="http://www.youtube.com/user/CAMLAeducation" target="_blank">Watch more on Youtube...</a></p>

	</div>

	<div class="video">

		<?php 
		$args = array(
		  'category_name' => 'videos',
			'orderby' => 'rand',
		  'posts_per_page' => 1
		);

		query_posts($args); ?>

		  <?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		  <?php endwhile;?>

	</div>
</div>

</div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>