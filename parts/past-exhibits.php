<?php

global $post;

$args = array(
	'orderby' => 'menu_order', // Allows users to set order of subpages
	'order' => 'DESC',
	'post_parent' => $post->ID,
	'post_type' => 'page',
	'numberposts'     => -1,
	'post_status' => 'publish'
);  

$years = get_posts($args); 
$counter = 0; 

?>

<?php foreach ($years as $post) : ?>
		<?php $counter ++; ?>

	<h1><?php the_title(); ?></h1>

	<?php
	
	$args = array(
		'orderby' => 'menu_order', // Allows users to set order of subpages
		'order' => 'DESC',
		'post_parent' => $post->ID,
		'post_type' => 'page',
		'numberposts'     => -1,
		'post_status' => 'publish'
	);  

	$exhibits = get_posts($args); 
	
	if ( count($exhibits) > 0 ) :
		
	?>

		<?php foreach ($exhibits as $post) : ?>

			<?php $title = sanitize_title($post->post_title); ?>

			<div class="exhibit">
				<?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
				<h3><a href="#<?php echo $title; ?>"><?php the_title(); ?></a></h3>
				<?php $excerpt = get_field('excerpt'); ?>
				<?php if ( $excerpt !== '' ) echo wpautop($excerpt); ?>
			</div>

		<?php endforeach; ?>

	<?php else : ?>

		<p>Information forthcoming</p>

	<?php endif; ?>

	<?php if ( $counter < count($years) ) : ?>
		<hr />
	<?php endif; ?>

<?php endforeach; ?>


<?php

$offsiteargs = array(
  'name' => 'off-site-exhibitions',
  'post_type' => 'page',
  'post_status' => 'publish',
  'posts_per_page' => 1
);  

$offsite = get_posts($offsiteargs); ?>

<?php foreach ($offsite as $post) : ?>

	<?php setup_postdata($post); ?>

	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>

<?php endforeach; ?>




<?php foreach ($years as $post) : ?>

	<?php
	
	$args = array(
		'orderby' => 'menu_order', // Allows users to set order of subpages
		'order' => 'DESC',
		'post_parent' => $post->ID,
		'post_type' => 'page',
		'numberposts'     => -1,
		'post_status' => 'publish'
	);  

	$exhibits = get_posts($args); ?>

	<?php foreach ($exhibits as $post) : ?>
		
		<?php setup_postdata($post); ?>

		<?php $title = sanitize_title($post->post_title); ?>

		<hr name="<?php echo $title; ?>" id="<?php echo $title; ?>" />

		<h3><?php the_title(); ?></h3>

		<?php the_content(); ?>

		

	<?php endforeach; ?>

<?php endforeach; ?>