<?php
// ADDING NAVIGATION
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {
        register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
    } endif;

require_once('wp_bootstrap_navwalker.php');

// ADDING FEATURED IMAGE
add_theme_support( 'post-thumbnails' );

// ADDING SIDEBAR
if(function_exists('register_sidebars'))
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'description' => "Right Sidebar",
        'before_widget' => '<div id="" class="">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="">',
        'after_title' => '</h2>',
    ));

// THE EXCERPT: WORD LIMIT

function excerpt_baseexcerpt($limit) {
  $excerpt_baseexcerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt_baseexcerpt)>=$limit) {
    array_pop($excerpt_baseexcerpt);
    $excerpt_baseexcerpt = implode(" ",$excerpt_baseexcerpt). '...' . '<br><a href="' . get_permalink( get_the_ID() ) . '">' . __( 'View Details', 'your-text-domain' ) . '</a>';
  } else {
    $excerpt_baseexcerpt = implode(" ",$excerpt_baseexcerpt);
  }
  $excerpt_baseexcerpt = preg_replace('`[[^]]*]`','',$excerpt_baseexcerpt);
  return $excerpt_baseexcerpt;
}
?>