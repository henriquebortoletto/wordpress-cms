<?php

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_styles', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

if ( !function_exists( 'custom_sizes' ) ) {
	function custom_sizes() {
		add_image_size( 'large', 1400, 380, true );
		add_image_size( 'medium', 768, 380, true );
	}
}

if ( !function_exists( 'custom_post_type_products' ) ) {
	function custom_post_type_products() {
		register_post_type( 'produtos', [
			'label' => 'Produtos',
			'description' => 'Produtos',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'menu_icon' => 'dashicons-cart',
			'rewrite' => [
				'slug' => 'produtos',
				'whith_front' => true
			],
			'query_var' => true,
			'supports' => [
				'title',
				'editor',
				'page_attributes',
				'posts-formats'
			],
			'labels' => [
				'name' => 'Produtos',
				'singular_name' => 'Produto',
				'menu_name' => 'Produtos',
				'add_new' => 'Adicionar Novo',
				'add_new_item' => 'Adicionar Novo Produto',
				'edit' => 'Editar',
				'edit_item' => 'Editar Produto',
				'new_item' => 'Novo Produto',
				'view' => 'Ver Produto',
				'view_item' => 'Ver Produto',
				'search_items' => 'Procurar Produtos',
				'not_found' => 'Nenhum Produto Encontrado',
				'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
			]
		]);
	}
}

add_action( 'after_setup_theme', 'custom_sizes' );
add_action( 'init', 'custom_post_type_products' );
