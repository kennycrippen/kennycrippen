<?php get_header(); // Load the header.php template. ?>

<div id="content">

<?php while ( have_posts() ) : the_post(); ?>
	<?php
		if ( has_post_thumbnail() ) {
		  the_post_thumbnail( 'blog-featured' );
		}
	 ?>
	<h1 class="page-title blog-title"><?php the_title();?></h1>
	<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

</div><!-- #content -->

<?php get_footer(); // Load the footer.php template. ?>
