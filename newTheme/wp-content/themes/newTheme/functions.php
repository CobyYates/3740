<?php

//remove visual editor
add_filter( 'user_can_richedit' , '__return_false', 50 );

	/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

//	function wpdocs_excerpt_more($more) {
//		return '<a href="'.get_the_permalink().'" rel="nofollow" class="read-more">Read More...</a>';
//	}
//	add_filter( 'excerpt_more', 'wpdocs_excerpt_more')


?>