<?php 
/* --------------------------------------------------
   Funções do thema
   -------------------------------------------------- */

   // Register Custom Post Type
function imoveis() {

	$labels = array(
		'name'                  => _x( 'Imóveis', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Imóvel', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Imóveis', 'text_domain' ),
		'name_admin_bar'        => __( 'Imóveis', 'text_domain' ),
		'archives'              => __( 'Imóveis', 'text_domain' ),
		'parent_item_colon'     => __( 'Item Pai', 'text_domain' ),
		'all_items'             => __( 'Todos os imóveis', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar imóvel', 'text_domain' ),
		'add_new'               => __( 'Adicionar', 'text_domain' ),
		'new_item'              => __( 'Novo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Atualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'search_items'          => __( 'Pesquisar', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não encontrado', 'text_domain' ),
		'featured_image'        => __( 'Imagem destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Definir Imagem', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagem', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagem como destaque', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir artigo', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Carregar', 'text_domain' ),
		'items_list'            => __( 'Listar', 'text_domain' ),
		'items_list_navigation' => __( 'Navegar', 'text_domain' ),
		'filter_items_list'     => __( 'Listar de filtros', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'imoveis',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Imóvel', 'text_domain' ),
		'description'           => __( 'Cadastro de imóveis', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'page-attributes', ),
		'taxonomies'            => array('taxonomy_tipo_imoveis', 'taxonomy_bairro_imoveis', 'taxonomy_cidade_imoveis' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type_imoveis', $args );

}
add_action( 'init', 'imoveis', 0 );


function taxonomy_tipo_imoveis() {

	$labels = array(
		'name'                       => _x( 'Tipos', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tipo', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Tipos', 'text_domain' ),
		'all_items'                  => __( 'Todas os tipos', 'text_domain' ),
		'parent_item'                => __( 'Item pai', 'text_domain' ),
		'parent_item_colon'          => __( 'Item pai:', 'text_domain' ),
		'new_item_name'              => __( 'Novo', 'text_domain' ),
		'add_new_item'               => __( 'Adicionar novo', 'text_domain' ),
		'edit_item'                  => __( 'Editar', 'text_domain' ),
		'update_item'                => __( 'Atualizar', 'text_domain' ),
		'view_item'                  => __( 'Ver', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar itens com vírgulas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Adicionar / Remover Itens', 'text_domain' ),
		'choose_from_most_used'      => __( 'Escolha a mais usada', 'text_domain' ),
		'popular_items'              => __( 'Itens Populares', 'text_domain' ),
		'search_items'               => __( 'Pesquisar', 'text_domain' ),
		'not_found'                  => __( 'Não encontrado', 'text_domain' ),
		'no_terms'                   => __( 'Nenhum item', 'text_domain' ),
		'items_list'                 => __( 'Lista de Itens', 'text_domain' ),
		'items_list_navigation'      => __( 'Navegar', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'tipos',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'taxonomy_tipo_imoveis', array( 'post_type_imoveis' ), $args );

}
add_action( 'init', 'taxonomy_tipo_imoveis', 0 );

// Registrando categoria personalizada Bairro
function taxonomy_bairro_imoveis() {

	$labels = array(
		'name'                       => _x( 'Bairros', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Bairro', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Bairros', 'text_domain' ),
		'all_items'                  => __( 'Todas os bairros', 'text_domain' ),
		'parent_item'                => __( 'Item pai', 'text_domain' ),
		'parent_item_colon'          => __( 'Item pai:', 'text_domain' ),
		'new_item_name'              => __( 'Novo', 'text_domain' ),
		'add_new_item'               => __( 'Adicionar novo', 'text_domain' ),
		'edit_item'                  => __( 'Editar', 'text_domain' ),
		'update_item'                => __( 'Atualizar', 'text_domain' ),
		'view_item'                  => __( 'Ver', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar itens com vírgulas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Adicionar / Remover Itens', 'text_domain' ),
		'choose_from_most_used'      => __( 'Escolha a mais usada', 'text_domain' ),
		'popular_items'              => __( 'Itens Populares', 'text_domain' ),
		'search_items'               => __( 'Pesquisar', 'text_domain' ),
		'not_found'                  => __( 'Não encontrado', 'text_domain' ),
		'no_terms'                   => __( 'Nenhum item', 'text_domain' ),
		'items_list'                 => __( 'Lista de Itens', 'text_domain' ),
		'items_list_navigation'      => __( 'Navegar', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'bairros',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'taxonomy_bairro_imoveis', array( 'post_type_imoveis' ), $args );

}
add_action( 'init', 'taxonomy_bairro_imoveis', 0 );

// Registrando categoria personalizada Cidade
function taxonomy_cidade_imoveis() {

	$labels = array(
		'name'                       => _x( 'Cidades', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Cidade', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Cidades', 'text_domain' ),
		'all_items'                  => __( 'Todas as cidades', 'text_domain' ),
		'parent_item'                => __( 'Item pai', 'text_domain' ),
		'parent_item_colon'          => __( 'Item pai:', 'text_domain' ),
		'new_item_name'              => __( 'Novo', 'text_domain' ),
		'add_new_item'               => __( 'Adicionar novo', 'text_domain' ),
		'edit_item'                  => __( 'Editar', 'text_domain' ),
		'update_item'                => __( 'Atualizar', 'text_domain' ),
		'view_item'                  => __( 'Ver', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar itens com vírgulas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Adicionar / Remover Itens', 'text_domain' ),
		'choose_from_most_used'      => __( 'Escolha a mais usada', 'text_domain' ),
		'popular_items'              => __( 'Itens Populares', 'text_domain' ),
		'search_items'               => __( 'Pesquisar', 'text_domain' ),
		'not_found'                  => __( 'Não encontrado', 'text_domain' ),
		'no_terms'                   => __( 'Nenhum item', 'text_domain' ),
		'items_list'                 => __( 'Lista de Itens', 'text_domain' ),
		'items_list_navigation'      => __( 'Navegar', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'cidades',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'taxonomy_cidade_imoveis', array( 'post_type_imoveis' ), $args );

}
add_action( 'init', 'taxonomy_cidade_imoveis', 0 );


// Registrando categoria personalizada Cidade
function tag_codigo_imoveis() {

	$labels = array(
		'name'                       => _x( 'Códigos', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Código', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Código', 'text_domain' ),
		'all_items'                  => __( 'Todos os códigos', 'text_domain' ),
		'parent_item'                => __( 'Item pai', 'text_domain' ),
		'parent_item_colon'          => __( 'Item pai:', 'text_domain' ),
		'new_item_name'              => __( 'Novo', 'text_domain' ),
		'add_new_item'               => __( 'Adicionar novo', 'text_domain' ),
		'edit_item'                  => __( 'Editar', 'text_domain' ),
		'update_item'                => __( 'Atualizar', 'text_domain' ),
		'view_item'                  => __( 'Ver', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar itens com vírgulas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Adicionar / Remover Itens', 'text_domain' ),
		'choose_from_most_used'      => __( 'Escolha a mais usada', 'text_domain' ),
		'popular_items'              => __( 'Itens Populares', 'text_domain' ),
		'search_items'               => __( 'Pesquisar', 'text_domain' ),
		'not_found'                  => __( 'Não encontrado', 'text_domain' ),
		'no_terms'                   => __( 'Nenhum item', 'text_domain' ),
		'items_list'                 => __( 'Lista de Itens', 'text_domain' ),
		'items_list_navigation'      => __( 'Navegar', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'codigo',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'tag_codigo_imoveis', array( 'post_type_imoveis' ), $args );

}
add_action( 'init', 'tag_codigo_imoveis', 0 );


/**
 * Extend WordPress search to include custom fields
 *
 * http://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
   
    if ( is_search() ) {
        $where = preg_replace(
        	//"/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            //"(".$wpdb->postmeta.".CAST(meta_value AS DECIMAL(10,2)) <= AND meta_key = 'preco_imovel')", $where );

            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;

}
add_filter( 'posts_where', 'cf_search_where' );


/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

