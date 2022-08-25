<?php

// Register / hide blocks here
// Full list of Gutenberg blocks:
// https://github.com/WordPress/gutenberg/blob/trunk/lib/blocks.php

// Currently disabling blocks via Block Manager - allowed_block_types_all is not required now.


// function sdheadless_allowered_gutenberg_blocks()
// {

//     // Get widget blocks and registered by plugins blocks
//     $registered_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

//     // Widgets Blocks
//     unset($registered_blocks['core/calendar']);
//     unset($registered_blocks['core/legacy-widget']);
//     unset($registered_blocks['core/rss']);
//     unset($registered_blocks['core/search']);
//     unset($registered_blocks['core/tag-cloud']);
//     unset($registered_blocks['core/latest-comments']);
//     unset($registered_blocks['core/archives']);
//     unset($registered_blocks['core/categories']);
//     unset($registered_blocks['core/latest-posts']);
//     unset($registered_blocks['core/shortcode']);
//     unset($registered_blocks['core/social-links']);
//     unset($registered_blocks['core/html']);

//      // Disable Theme Blocks
//     unset($registered_blocks['core/term-description']);
//     unset($registered_blocks['core/query-title']);
//     unset($registered_blocks['core/author-biography']);
//     unset($registered_blocks['core/loginout']);
//     unset($registered_blocks['core/loginout']);
//     unset($registered_blocks['core/post-comments-form']);
//     unset($registered_blocks['core/comments-query-loop']);
//     unset($registered_blocks['core/post-comments-form']);
//     unset($registered_blocks['core/comments-pagination']);
//     unset($registered_blocks['core/comments-pagination-next']);
//     unset($registered_blocks['core/comments-pagination-numbers']);
//     unset($registered_blocks['core/comments-pagination-previous']);
//     unset($registered_blocks['core/comment-template']);
//     unset($registered_blocks['core/columnn']);
//     unset($registered_blocks['core/columns']);
//     unset($registered_blocks['core/comment-reply-link']);
//     unset($registered_blocks['core/comment-content']);
//     unset($registered_blocks['core/group']);
//     unset($registered_blocks['core/comment-edit-link']);
//     unset($registered_blocks['core/wp-block-column']);
//     unset($registered_blocks['core/avatar']);

//     // Theme widgets
//     unset($registered_blocks['core/site-tagline']);
//     unset($registered_blocks['core/query']);
//     unset($registered_blocks['core/site-title']);
//     unset($registered_blocks['core/site-logo']);
//     unset($registered_blocks['core/navigation']);
//     unset($registered_blocks['core/post-author-biography']);
//     unset($registered_blocks['core/read-more']);
//     unset($registered_blocks['core/post-navigation-link']);
//     unset($registered_blocks['core/post-terms']);
//     unset($registered_blocks['core/post-date']);
//     unset($registered_blocks['core/post-author']);
//     unset($registered_blocks['core/post-content']);
//     unset($registered_blocks['core/post-featured-image']);
//     unset($registered_blocks['core/post-excerpt']);
//     unset($registered_blocks['core/post-title']);
//     unset($registered_blocks['core/page-list']);


//     // Disable WooCommerce Blocks
//     unset($registered_blocks['woocommerce/handpicked-products']);
//     unset($registered_blocks['woocommerce/product-best-sellers']);
//     unset($registered_blocks['woocommerce/product-category']);
//     unset($registered_blocks['woocommerce/product-new']);
//     unset($registered_blocks['woocommerce/product-on-sale']);
//     unset($registered_blocks['woocommerce/product-top-rated']);
//     unset($registered_blocks['woocommerce/products-by-attribute']);
//     unset($registered_blocks['woocommerce/featured-product']);

//     // Now $registered_blocks contains only blocks registered by plugins, but we need keys only
//     $registered_blocks = array_keys($registered_blocks);

//     // Merge allowed core blocks with plugins blocks
//     return array_merge(array(
//         'core/image',
//         'core/paragraph',
//         'core/heading',
//         'core/list'
//     ), $registered_blocks);


// }
// add_filter('allowed_block_types', 'sdheadless_allowered_gutenberg_blocks');


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