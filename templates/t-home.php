<?php
 /*
Template Name: Home Page
*/ ?>
<?php  get_header();// Load the header.php template.  ?>
<div class="row">
<div id="content">
<div class="about">
	<div class="kenny">
		<img class="kenny-bw" alt="Kenny Drawing Black and White" src="<?php  echo get_template_directory_uri(); ?>/images/kenny_bw.png" />
		<img class="kenny-color" alt="Kenny Drawing Color" src="<?php  echo get_template_directory_uri(); ?>/images/kenny_color.png" />
	</div>
	<div class="fade-delay">
		<h1 class="home-h1">WELL, HELLO.</h1>
		<div class="underscore-top"></div>
		<p class="hm-about">I design and build websites in the wonderful city of Portland, Oregon. I am currently freelancing full time. A few exciting technologies I&#8217;m currently enjoying are Sass, jQuery, Bootstrap, Grunt, Git and WordPress. If you&#8217;re interested in hiring me for a freelance project or full time position feel free to call me up at 503&#8209;863&#8209;9697, check out my <a href="<?php  echo get_template_directory_uri(); ?>/kennycrippen-cv.pdf" target="_blank">r&eacute;sum&eacute;</a> or send me an <a href="mailto:hello@kennycrippen.com">email</a>.</p>
		<div class="underscore-bottom"></div>
		<div class="social">
			<a href="http://www.instagram.com/kennycrippen" target="_blank"><img width="21" alt="Instagram Icon" src="<?php  echo get_template_directory_uri(); ?>/images/icon/ig.png" /></a>
			<a href="http://dribbble.com/kennycrippen" target="_blank"><img width="21" alt="Dribbble Icon" src="<?php  echo get_template_directory_uri(); ?>/images/icon/drib.png" /></a>
			<a href="http://twitter.com/kennycrippen" target="_blank"><img width="21" alt="Twitter Icon" src="<?php  echo get_template_directory_uri(); ?>/images/icon/twitter.png" /></a>
			<a href="http://www.linkedin.com/in/kennycrippen/" target="_blank"><img width="21" alt="LinkedIn Icon" src="<?php  echo get_template_directory_uri(); ?>/images/icon/in.png" /></a>
			<a href="<?php  echo get_template_directory_uri(); ?>/kennycrippen-cv.pdf" target="_blank"><img width="21" alt="R&eacute;sum&eacute; Icon" src="<?php  echo get_template_directory_uri(); ?>/images/icon/resume.png" /></a>
			<a href="mailto:hello@kennycrippen.com"><img class="last" width="21" alt="Email Icon" src="<?php  echo get_template_directory_uri(); ?>/images/icon/email.png" /></a>
		</div>
	</div>
</div>
<?php
	$query = new WP_Query();
	$query->query(array('post_type'                 => 'project','posts_per_page'            => -1,));
	$post_count = $query->post_count;
	$count = 1;
	?>
<div class="fade-delay">
<a id="recentprojects"></a>
<h1 class="home-h1">RECENT PROJECTS</h1>
<div class="underscore-top"></div>
<div class="home-projects">
<?php

	if ($query->have_posts()) :
	while ($query->have_posts()) :
	$query->the_post();
	?>
	<div class="large-4 column">
		<a href="<?php  the_permalink(); ?>">
			<div class="home-project-image"><div><?php  the_post_thumbnail(); ?></div><div class="home-project-hover"></div></div>
		</a>
		<p class="home-project-title"><?php  the_title(); ?></p>
	</div>
<?php  endwhile; ?>
<?php  endif; ?>
</div>
</div>
</div><!-- #content -->
</div><!-- .row -->
<?php  get_footer();// Load the footer.php template.  ?>
