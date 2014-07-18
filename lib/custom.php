<?php
/**
 * Custom functions
 */

//deactivate WordPress function
// remove_shortcode('gallery', 'gallery_shortcode');


/**
 * Custom WP gallery
 */
// add_shortcode('gallery', 'my_gallery_shortcode');    
// function my_gallery_shortcode($attr) {
//    echo "string";
// }



// Quitame los metaboxes que me sobran
function quita_metaboxes_inutiles() {
	remove_meta_box('postexcerpt' , 'page' , 'normal' ); 
	remove_meta_box('authordiv', 'page', 'normal');
	remove_meta_box('commentsdiv', 'page', 'normal');
	remove_meta_box('commentstatusdiv', 'page', 'normal');
	remove_meta_box('trackbacksdiv', 'page', 'normal');
	remove_meta_box('postexcerpt', 'page', 'normal');
	remove_meta_box('revisionsdiv', 'page', 'normal');
	remove_meta_box('postcustom', 'page', 'normal');
}
add_action( 'admin_menu' , 'quita_metaboxes_inutiles' );
