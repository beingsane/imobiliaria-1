<?php 
/* --------------------------------------------------
   Funções de assets
   -------------------------------------------------- */
// Carrega Scripts, CSS e Google Font no header.php
function header_scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		
		// Estilos CSS
		wp_register_style('style', get_template_directory_uri() . '/dist/style/main.css', array(), '1.0', 'all');
		wp_enqueue_style('style');

		wp_register_style('styleSlick', get_template_directory_uri() . '/dist/style/slick.css', array(), '1.0', 'all');
		wp_enqueue_style('styleSlick');
	
		wp_register_style('modalCss', get_template_directory_uri() . '/dist/style/jquery.modal.css', array(), '1.0', 'all');
		wp_enqueue_style('modalCss');

		// Google Fonts
		wp_register_style('dosis', '//fonts.googleapis.com/css?family=Dosis:300,400,500,600,700', array(), '1.0', 'all');
		wp_enqueue_style( 'dosis');

		wp_register_style('openSans', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700', array(), '1.0', 'all');
		wp_enqueue_style( 'openSans');

		// Maps
		wp_register_script('maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyBqype0fUJWmqRK7wKoSgFxJNmfHbSqQDg', array(), '1.0', 'all');
		wp_enqueue_script( 'maps');

		// Jquery

		wp_register_script('jquery', '//code.jquery.com/jquery-3.1.1.min.js', array(), '3.1.1');
		wp_enqueue_script('jquery');

		wp_register_script('jqueryAjax', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '3.1.1');
		wp_enqueue_script('jqueryAjax');

		wp_register_script('modalJs', get_template_directory_uri() . '/dist/js/jquery.modal.js', array(), '1.4', 'all');
		wp_enqueue_script('modalJs');
	}

}
add_action('wp_enqueue_scripts', 'header_scripts');


// Carrega Script, CSS  no footer.php
function footer_scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

		wp_register_script('main', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0', 'all');
		wp_enqueue_script('main');

		wp_register_script('mascaraInput', get_template_directory_uri() . '/dist/js/jquery.maskedinput.js', array(), '1.4', 'all');
		wp_enqueue_script('mascaraInput');

		wp_register_script('slick', get_template_directory_uri() . '/dist/js/slick.js', array(), '1.4', 'all');
		wp_enqueue_script('slick');
	}
}
add_action('wp_footer', 'footer_scripts');