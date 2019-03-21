<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/favicon.png" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<div class="wrapper-parallax">
			<header id="header" role="banner" class="header">

		<!-- 			<div id="search">
					<?php  /* get_search_form(); */ ?>
					</div> -->
				<div class="center">
					<div class="bloco-flex">
						<div class="logo"> 
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/images/logo-imobiliaria-campos.png"></a>
						</div>

						<div id="nav-icon2">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>

						<nav class="menu-principal"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
					</div>
				</div>
			</header>

			<div class="bug-fix-fixed"></div>
