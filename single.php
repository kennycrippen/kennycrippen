<?php get_header(); // Load the header.php template. ?>

<div id="content">

<?php while ( have_posts() ) : the_post(); ?>
	<h1 class="page-title"><?php the_title();?></h1>
	<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

</div><!-- #content -->

<?php get_footer(); // Load the footer.php template. ?>
