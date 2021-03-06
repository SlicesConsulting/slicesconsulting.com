<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

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
  if (Setup\display_sidebar()) {
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


// Register Custom Post Type
function custom_post_type() {

  $labels = array(
    'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Testimonial', 'text_domain' ),
    'name_admin_bar'        => __( 'Testimonial', 'text_domain' ),
    'archives'              => __( 'Testimonial Archives', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Testimonial:', 'text_domain' ),
    'all_items'             => __( 'All Testimonials', 'text_domain' ),
    'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
    'add_new'               => __( 'Add New Testimonial', 'text_domain' ),
    'new_item'              => __( 'New Testimonial', 'text_domain' ),
    'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
    'update_item'           => __( 'Update Testimonial', 'text_domain' ),
    'view_item'             => __( 'View Testimonial', 'text_domain' ),
    'search_items'          => __( 'Search Testimonial', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into Testimonial', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'text_domain' ),
    'items_list'            => __( 'Testimonials list', 'text_domain' ),
    'items_list_navigation' => __( 'Testimonials list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter Testimonials list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Testimonial', 'text_domain' ),
    'description'           => __( 'Client testimonials', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-thumbs-up',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'testimonial', $args );

}
add_action( 'init', __NAMESPACE__ . '\\custom_post_type', 0 );