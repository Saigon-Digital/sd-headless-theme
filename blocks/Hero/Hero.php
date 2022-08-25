<?php
$id = 'sd-block-hero' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

$className = 'sd-block-hero';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}
?>

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $className ); ?>">
    <div class="review-wrapper">
        <div class="review-title">Hero </div>
        <img src="<?php echo get_stylesheet_directory_uri() . '/blocks/Hero' ?>/Hero.jpg">
    </div>  
</div>
<style type="text/css">
        #<?php echo $id; ?> {
            padding: 20px;
            border-radius: 8px;
            font-size: 20px;
            text-align: center;
            text-transform: uppercase;
            font-weight: 700;
            background: #bae8e8;
            color: #2d334a;
        }
    </style>
</section>