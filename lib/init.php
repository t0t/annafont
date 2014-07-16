<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'general-menu' => __('General', 'roots'),
    'pintura-menu' => __('Pintura', 'roots'),
    'otros-menu' => __('Otros', 'roots'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
    add_image_size('fotogrande', 420, 402, true);
    add_image_size('portadatienda', 430, 350, true);
    add_image_size('slider', 450, 250, true);
    add_image_size('thumbsportada', 150, 150, true);
    add_image_size('thumbspie', 94, 235, true);
    add_image_size('subcontainer', 120, 120, true);
    add_image_size('thumbsactividades', 170, 170, true);
    add_image_size('gegants', 190, 9999, true);
    add_image_size('portadafotos', 422, 192, true);
    add_image_size('galeria', 435, 150, true);
  // set_post_thumbnail_size(150, 150, false);
  // add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');
