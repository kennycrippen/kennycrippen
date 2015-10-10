<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php
	bloginfo('name');
	wp_title('|');
	?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width" />
<link rel="icon" type="image/png" href="<?php  echo get_template_directory_uri(); ?>/images/favicon.png" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />

<!-- Tell WP this is the header -->
<?php  wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/custom.modernizr.js"></script>
<!-- Typekit -->
<script src="https://use.typekit.net/dsx4odl.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body <?php body_class($class); ?>>
	<div id="container">
		<div id="header">
			<div class="row">
			<div class="header-inner large-12">
			<a class="logo-container" href="<?php bloginfo('url'); ?>">
				<img width="100" height="110" class="logo" alt="" src="<?php echo get_template_directory_uri(); ?>/images/svg/logo.svg" />
			</a>
			</div><!-- .header-inner -->
			</div><!-- .row -->
		</div><!-- #header -->
		<div id="main">
