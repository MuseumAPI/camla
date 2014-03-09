<?php 

$field = get_field('link');
if($field) wp_redirect(clean_url($field), 301);

get_header(); ?>

<div id="interior-left">
	
	<?php dynamic_sidebar( 'sidenav' ); ?>
	
</div>

<div id="interior-right"><div id="maintext"><div class="pageCopy">

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
		<h2><?php the_title(); ?></h2>
	
		<?php the_content(); ?>

	<?php endwhile; ?>

<?php else : ?>
	<p>Page not found.</p>
<?php endif; ?>

</div></div></div>


<?php get_footer(); ?>