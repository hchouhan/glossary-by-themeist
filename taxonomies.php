<?php

//add_action( 'init', 'themeist_register_glossary_taxonomies' );

function themeist_register_glossary_taxonomies() {

	/* Theme Platform taxonomy. */
	register_taxonomy(
		'glossary_category',
		array( 
			'glossary' 
		),
		array(
			'public' => true,
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'hierarchical' => false,
			'query_var' => true,

			'labels' => array(
				'name' => __( 'Glossary Type' ),
				'singular_name' => __( 'Glossary Type' ),
				'search_items' => __( 'Search Glossary Type' ),
				'popular_items' => __( 'Popular Glossary Type' ),
				'all_items' => __( 'All Glossary Types' ),
				'parent_item' => __( 'Parent Glossary Type' ),
				'parent_item_colon' => __( 'Parent Glossary Type:' ),
				'edit_item' => __( 'Edit Glossary Type' ),
				'update_item' => __( 'Update Glossary Type' ),
				'add_new_item' => __( 'Add New Glossary Type' ),
				'new_item_name' => __( 'New Glossary Type' ),
			),

			// this sets the taxonomy view URL (must have category base i.e. /platform)
			// this can be any depth e.g. themeist.co/glossary/platform
			'rewrite' => array(
				'with_front' => 		false,
				'slug' => 			'glossary'
			),
		)
	);	

}


?>