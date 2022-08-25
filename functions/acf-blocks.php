<?php

// https://www.advancedcustomfields.com/resources/acf_register_block_type/
// Custom icons: https://developer.wordpress.org/resource/dashicons/
// Register ACF Blocks
function sdheadless_register_acf_block_types()
{
    acf_register_block_type([
        'name'            => 'Hero',
        'title'           => __('Hero'),
        'description'     => __('Hero block'),
        'render_template' => dirname(__file__) . '/blocks/Hero/Hero.php',
        'category'        => 'sd-blocks',
        'icon'            => '',
    ],);
}
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'sdheadless_register_acf_block_types');
}
