<?php 

function sdheadless_menus() {

	$locations = array(
		'header'  => __( 'Header Menu', 'sdheadless' ),
		'footer'   => __( 'Footer Menu', 'sdheadless' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'sdheadless_menus' );

