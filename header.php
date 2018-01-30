<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
		
	<body <?php body_class(); ?>>

<header class="header" role="banner">
<div class="title-bar" data-responsive-toggle="top-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="top-menu"></button>
    <div class="title-bar-title">&nbsp;Menu</div>
</div>

<div class="top-bar" id="top-menu">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text menu-home"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
        </ul>
    </div>
    <div class="top-bar-right">

    </div>
</div>
</header>
