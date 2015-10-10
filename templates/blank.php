<?php
/*
Template Name: Blank
*/
?>

<?php get_header(); // Load the header.php template. ?>

<div class="row">
<div id="content" class="blank">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<p><?php the_content(); ?></p>

<?php endwhile; ?>
<?php endif; ?>

</div>


</div><!-- #content -->
</div><!-- .row -->

<?php get_footer(); // Load the footer.php template. ?>