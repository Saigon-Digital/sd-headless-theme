<?php

// Move Yoast to bottom
function sdheadless_move_yoast_to_bottom_post_editor() {
    return 'low';
}

add_filter('wpseo_metabox_prio', 'sdheadless_move_yoast_to_bottom_post_editor');

// Register custom Gutenberg Category
add_filter( 'block_categories_all' , function( $categories ) {

    // Adding a new category.
	$categories[] = array(
		'slug'  => 'sd-blocks',
		'title' => 'SD Blocks'
	);

	return $categories;
} );