<?php
// //Fonction qui enregistre le menu de navigation
// function register_theme_menus() {
//     register_nav_menus( 
//       array(
//         'menu-header-1' => __( 'Header 1' ),
//         'menu-footer-1' => __( 'Footer 1' ),
//       )
//     );
//   };
//   add_action( 'init', 'register_theme_menus' );


  //Suppression de l'éditeur Gutenberg
  // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);


if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
  acf_add_options_sub_page('Header');
  acf_add_options_sub_page('Footer');
}
