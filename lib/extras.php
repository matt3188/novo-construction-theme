<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Config\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * NOVO Construction functions
 */

// Switch off admin bar on the frontend
show_admin_bar( false );

// Add class to Contact 7 Form
function your_custom_form_class_attr( $class ) {
  $class .= ' form stacked-form';
  return $class;
}
add_filter( 'wpcf7_form_class_attr', __NAMESPACE__ . '\\your_custom_form_class_attr' );

/**
 * If user isn't admin hide the themes and widgets menu
 */
function hide_menu() {
  global $menu;
  if ( wp_get_current_user()->ID != 1 ) {
    unset($menu[25]); // Removed comments
    remove_submenu_page( 'themes.php', 'themes.php' ); // hide the theme selection submenu
    remove_submenu_page( 'themes.php', 'widgets.php' ); // hide the widgets submenu
  }
}

add_action('admin_head', __NAMESPACE__ . '\\hide_menu');
