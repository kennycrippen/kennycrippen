<?php  get_header();// Load the header.php template.  ?>
<div class="row">
<div id="content">
<?php 
	
	if (have_posts()) :
	while (have_posts()) :
	the_post();
	?>
<?php
	$projectlongname  = get_field('project_long_name');
	$contributors     = get_field('contributors');
	$skills           = get_field('skills');
	?>
<div class="fade-delay-fast">
<div class="back-home">
	<a href="http://www.kennycrippen.com#recentprojects"><img alt="Back Home Button" width="30" src="<?php  echo get_template_directory_uri(); ?>/images/close-x.png" /></a>
</div>
<div class="clear"></div>
<h1 class="project-long-name"><?php  echo $projectlongname; ?></h1>
<div class="underscore-top"></div>
<p class="project-blurb"><?php  the_content(); ?></p>
<div class="underscore-bottom"></div>
<div class="flexslider">
<ul class="slides">
	<?php  if(get_field('project_slider')): ?>
		<?php  while(has_sub_field('project_slider')): ?>
			<li><img src="<?php  the_sub_field('project_slider_image'); ?>" /></li>
		<?php  endwhile; ?>
	<?php  endif; ?>
</ul>
</div><!-- .flexslider -->
<div class="large-4 columns nopadding empty">&nbsp;</div>
<div class="large-5 columns nopadding contributors">
	<div class="contributors-content">
		<?php  echo $contributors; ?>
	</div>
</div>
<div class="large-3 columns nopadding skills">
	<div class="skills-content">
		<?php  echo $skills; ?>
	</div>
</div>
<?php  endwhile; ?>
<?php  endif; ?>
</div><!-- .fade-delay -->
</div><!-- #content -->
</div><!-- .row -->
<?php  get_footer();// Load the footer.php template.  ?>