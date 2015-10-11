<?php get_header(); // Load the header.php template. ?>

<div id="content">

<?php while ( have_posts() ) : the_post(); ?>
	<h1 class="page-title blog-title"><?php the_title();?></h1>
	<?php the_excerpt(); ?>
	<a class="button" href="<?php the_permalink(); ?>">Full post, please.</a>
<?php endwhile; // end of the loop. ?>

</div><!-- #content -->

<?php get_footer(); // Load the footer.php template. ?>
