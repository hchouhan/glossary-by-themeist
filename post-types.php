<?php

add_action( 'init', 'themeist_register_glossary_post_types' );

function themeist_register_glossary_post_types() {

	/* Plugin post type. */
	register_post_type( 'glossary',
		array(
			'public' => 		true,
			'publicly_queryable' =>	true,
			'show_in_nav_menus' =>	true,
			'show_in_admin_bar' => 	true,
			'exclude_from_search' =>	false,
			'hierarchical' => 		false,
			'show_ui' => true,
			'menu_icon' => 'dashicons-list-view',

			'has_archive' =>		 'glossary',
			'query_var' => 		'glossary',
			'capability_type' => 	'post',
			'menu_position' => 		5,

			'exclude_from_search' => false,
			'menu_position' => 5,
			'labels' => array(
				'name' => __( 'Glossary' ),
				'singular_name' => __( 'Term' ),
				'menu_name' => 		'Glossary',
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New Term' ),
				'edit' => __( 'Edit Glossary' ),
				'edit_item' => __( 'Edit Term' ),
				'new_item' => __( 'New Term' ),
				'view' => __( 'View Glossary' ),
				'view_item' => __( 'View Term' ),
				'search_items' => __( 'Search Glossary' ),
				'not_found' => __( 'No Terms found' ),
				'not_found_in_trash' => __( 'No Term found in Trash' ),
				'parent_item_colon' =>	null,
				'all_items' =>		'All Terms'
			),

			// this sets where the Themes section lives and contains a tag to insert the Platform in URL below
			// this can be any depth e.g. glossary/%theme_platform%
			'rewrite' => array(
				//'slug' => 			'themes/%theme_platform%',
				'slug' => 			'glossary',
				'with_front' => 		false,
				'feeds' =>		true,
			),

			'supports' => array(
				'title',
				'editor',
				//'excerpt',
				//'thumbnail',
				//'custom-fields'
			)

		)
	);
}

?>