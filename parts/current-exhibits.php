<hr />

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

$postslist = get_posts($args); ?>

<?php foreach ($postslist as $post) : 

	setup_postdata($post); 

	$title = sanitize_title($post->post_title);	

	?>

	<div class="exhibit">
		<?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
		<h3><a href="#<?php echo $title; ?>"><?php the_title(); ?></a></h3>
		<?php $excerpt = get_field('excerpt'); ?>
		<?php if ( $excerpt !== '' ) echo wpautop($excerpt); ?>
	</div>


<?php endforeach; ?>


<?php foreach ($postslist as $post) : 

	setup_postdata($post); 

	$title = sanitize_title($post->post_title);	

	?>

	<hr name="<?php echo $title; ?>" id="<?php echo $title; ?>" />

	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>

<?php endforeach; ?>