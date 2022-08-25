<?php

// Register / hide blocks here
// Full list of Gutenberg blocks:
// https://github.com/WordPress/gutenberg/blob/trunk/lib/blocks.php

function sdheadless_allowered_gutenberg_blocks() {
	return array(
		'core/paragraph',
        'core/list',
        'core/image',
        'core/buttons',
        'core/quote',
        'core/spacer'
	);
}
add_filter( 'allowed_block_types', 'sdheadless_allowered_gutenberg_blocks' );


//  This filters the custom post types of ‘sponsors’, ‘news’ and ‘faqs’ to only allow the core Gutenberg blocks listed.
// function sdheadless_allowed_post_type_blocks( $allowed_block_types, $editor_context ) {

//     if ( 'sponsors' === $editor_context->post->post_type ) {
//         return array(
//             'core/paragraph',
//         );
//     }
 
//     if ( 'news' === $editor_context->post->post_type ) {
//         return array(
//             'core/paragraph',
//             'core/list',
//             'core/image',
//             'core/buttons',
//             'core/quote',
//         );
//     }
 
//     if ( 'faqs' === $editor_context->post->post_type ) {
//         return array(
//             'core/paragraph',
//             'core/list',
//             'core/image',
//             'core/buttons',
//         );
//     }
 
//     return $blocks;
// }
 
// add_filter( 'allowed_block_types_all', 'sdheadless_allowed_post_type_blocks', 10, 2 );