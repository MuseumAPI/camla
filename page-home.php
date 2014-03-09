<?php 
/* Template Name: Home */ 
?>

<?php get_header(); ?>

<div id ="home-left">
	
<?php echo do_shortcode('[wooslider slide_page="homepage" slider_type="slides" limit="20"]'); ?>

</div>

<div id="home-right">
	<h3 class="postHeader">News</h3>



	<?php 
	$args = array(
	  'category_name'     => 'news',
	  'posts_per_page' => -1
	);
	
	
	query_posts($args); ?>

	  <?php while (have_posts()) : the_post(); ?>
		<div class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
		</div>
	  <?php endwhile;?>


<div align="center" style="padding-top: 10px; "><a href="/membership/"><img src="http://www.camla.org.s142798.gridserver.com/wp-content/uploads/2013/05/join.gif" alt="Join" width="81" height="60" /></a></div>

<hr />

</div>


<?php get_footer(); ?>