<?php

	require_once( __DIR__ . '/Menus/PrimaryMenuWalker.php' );

// Désactiver l'éditeur Gutenberg de Wordpress
	add_filter( 'use_block_editor_for_post', '__return_false' );

// Activer les images pour les posts (articles, voyages, ...)
	add_theme_support( 'post-thumbnails' );

// Enregistrer un "type de ressource" (custom post type) pour les voyages
	register_post_type( 'trips', [
		'label'         => 'Voyages',
		'labels'        => [
			'name'          => 'Voyages',
			'singular_name' => 'Voyage',
		],
		'description'   => 'La ressource permettant de gérer les voyages qui ont été effectués.',
		'public'        => true,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-palmtree',
		'supports'      => [ 'title', 'editor', 'thumbnail' ],
		'rewrite'       => [ 'slug' => 'voyages' ],
	] );

// Récupérer les trips via une requête wordpress

	function dw_get_trips( $count ) {
		// Instancier l'objet WP_Query
		$trips = new WP_Query( [
			'post_type'     => 'trips',
			'orderby'       => 'date',
			'order'         => 'DESC',
			'post_per_page' => $count,
		] );

		// Retourne l'objet WP_Query
		return $trips;
	}

	// Enregistrer les menus de navigations

	register_nav_menu( 'primary', 'Emplacement de la navigation principale de haut page' );
	register_nav_menu( 'footer', 'Emplacement de la navigation principale de pied page' );