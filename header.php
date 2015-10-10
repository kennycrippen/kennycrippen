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
<link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/css/foundation.css" />
<link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/css/normalize.css" type="text/css" media="all" />
	<!--[if !IE]>-->
	<link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="<?php  echo get_template_directory_uri(); ?>/css/iphone.css" />
	<link rel="stylesheet" media="only screen and (device-width: 768px)" href="<?php  echo get_template_directory_uri(); ?>/css/ipad.css" />
	<!--<![endif]-->
<!-- Tell WP this is the header -->
<?php  wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/custom.modernizr.js"></script>
</head>
<body <?php  body_class($class); ?>>
	<div id="container">
		<div id="header">
			<div class="row">
			<div class="header-inner large-12">
			<a href="<?php  bloginfo('url'); ?>">
				<img width="135" class="logo" alt="" src="<?php  echo get_template_directory_uri(); ?>/images/kenny_logo_ret.png" />
			</a>
			</div><!-- .header-inner -->
			</div><!-- .row -->
		</div><!-- #header -->
		<div id="main">
