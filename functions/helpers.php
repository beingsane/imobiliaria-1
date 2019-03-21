<?php
/* --------------------------------------------------
   Funções de otimização
   -------------------------------------------------- */

// Remove Barra Admin no Front-End
function my_function_admin_bar() { return false; }
add_filter( "show_admin_bar" , "my_function_admin_bar");


// Registra Menus
function register_menu() {
	register_nav_menu('header-menu', ('Header Menu') );
	register_nav_menu('footer-menu', ('Footer Menu') );
	register_nav_menu('sidebar-menu', ('Sidebar Menu') );
	register_nav_menu('extra-menu', ('Extra Menu') );
}
add_action( 'init', 'register_menu' );


// Remove 'sujeira' do header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles'    , 'print_emoji_styles');
remove_action('admin_print_styles' , 'print_emoji_styles');


// Remove Pingback XMLRPC
// Se for usar comentarios ou alguma aplicacao externa para este site, tem que remover esta função
add_filter( 'xmlrpc_methods', 'Remove_Pingback_Method' );
function Remove_Pingback_Method( $methods ) {
	unset( $methods['pingback.ping'] );
	unset( $methods['pingback.extensions.getPingbacks'] );
	return $methods;
}

// Adiciona os slugs no body
function add_slug_to_body_class($classes) {
	global $post;
	if (is_home()) {
		$key = array_search('blog', $classes);
		if ($key > -1) {
			unset($classes[$key]);
		}
	} elseif (is_page()) {
		$classes[] = sanitize_html_class($post->post_name);
	} elseif (is_singular()) {
		$classes[] = sanitize_html_class($post->post_name);
	}

	return $classes;
}
add_filter('body_class', 'add_slug_to_body_class');


// adiciona o htmlshim se for ie 9-
function add_ie_html5_shim () {
	echo '<!--[if lt IE 9]>';
	echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');


// cria os elementos html5 caso seja ie
function add_ie_html5 () {
	echo '<!--[if IE]>';
	echo '<script>';
	echo 'document.createElement("header");';
	echo 'document.createElement("main");';
	echo 'document.createElement("nav");';
	echo 'document.createElement("footer");';
	echo 'document.createElement("article");';
	echo 'document.createElement("section");';
	echo 'document.createElement("figcaption");';
	echo 'document.createElement("figure");';
	echo 'document.createElement("time");';
	echo '</script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5');


// Troca o as pecto da tela de login
function custom_login_logo() {
	echo '
		<style type="text/css">
			.login h1 a {
				background: url("'.get_bloginfo('template_directory').'/dist/images/logo-imobiliaria-campos.png") 50% 50% no-repeat;
				width: 100%;
			}
		</style>';
}
add_action('login_head', 'custom_login_logo');


//	Tamanho máximo de inserção de conteúdo Impede de user colocoar imagem grande e quebra de layout
if (!isset($content_width)) {
	$content_width = 960;
}

// Adiciona suporte a thumbnails
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	/*
		add_image_size('thumbnail', 170, 212, array( 'center', 'center' ));
		add_image_size('medium', 280, 169, true);
		add_image_size('large', 960, 999999, true);
	*/
	add_image_size('image-vitrine', 400, 300, true);
	add_image_size('image-banner', 1120, 300, true);
	add_image_size('image-fancy', 600, 600, true);


	/* RSS feed */
	add_theme_support('automatic-feed-links');
}
