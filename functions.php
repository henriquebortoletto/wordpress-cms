<?php

remove_action( 'wp_head', 'rsd_link'                                );
remove_action( 'wp_head', 'wlwmanifest_link'                        );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0              );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0  );
remove_action( 'wp_head', 'feed_links_extra', 3                     );
remove_action( 'wp_head', 'wp_generator'                            );
remove_action( 'wp_head', 'print_emoji_detection_script', 7         );
remove_action( 'admin_print_styles', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles'              );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

if ( !function_exists( 'bikcraft_register_menu' ) ) {
	function bikcraft_register_menu() {
		register_nav_menu( 'menu-principal', __( 'Menu Principal' ));
	}
}

if ( !function_exists( 'bikcraft_custom_sizes' ) ) {
	function bikcraft_custom_sizes() {
		add_image_size( 'large', 1400, 380, true );
		add_image_size( 'medium', 768, 380, true );
	}
}

if ( !function_exists( 'bikcraft_custom_post_type_products' ) ) {
	function bikcraft_custom_post_type_products() {
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
				'title', 'editor', 'page_attributes', 'posts-formats'
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
				'search_items' => 'Procurar Produto',
				'not_found' => 'Nenhum Produto Encontrado',
				'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
			]
		]);
	}
}

if ( !function_exists( 'bikcraft_scripts' ) ) {
	function bikcraft_scripts() {
		wp_register_script( 'simple-slide',    get_template_directory_uri() . '/js/libs/simple-slide.js', [], '1.0.0', true );
		wp_register_script( 'simple-anime',    get_template_directory_uri() . '/js/libs/simple-anime.js', [], '1.0.0', true );
		wp_register_script( 'simple-form',     get_template_directory_uri() . '/js/libs/simple-form.js',  [], '1.0.0', true );
		wp_register_script( 'bikcraft-script', get_template_directory_uri() . '/js/script.js', [
			'simple-slide',
			'simple-anime',
			'simple-form'
		], "1.0.0", true );
		wp_enqueue_script( 'bikcraft-script' );
	}
}

if ( !function_exists( 'bikcraft_styles' )) {
	function bikcraft_styles() {
		wp_register_style( 'bikcraft-style', get_template_directory_uri() . '/css/style.css', [], '1.0.0', false);
		wp_enqueue_style( 'bikcraft-style' );
	}
}

add_action( 'init', 'bikcraft_register_menu' 						 );
add_action( 'after_setup_theme', 'bikcraft_custom_sizes' );
add_action( 'init', 'bikcraft_custom_post_type_products' );
add_action( 'wp_enqueue_scripts', 'bikcraft_scripts' 		 );
add_action( 'wp_enqueue_scripts', 'bikcraft_styles'      );
