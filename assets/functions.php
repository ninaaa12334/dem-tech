<?php
if (!defined('ABSPATH')) exit;

/** Load theme stylesheet */
function demtech_assets() {
  wp_enqueue_style(
    'demtech-style',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'demtech_assets');

/** Theme setup */
function demtech_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  register_nav_menus([
    'primary' => __('Primary Menu', 'demtech'),
  ]);
}
add_action('after_setup_theme', 'demtech_setup');

/** Custom Post Type: Reports */
function demtech_register_reports_cpt() {
  register_post_type('reports', [
    'labels' => [
      'name' => __('Reports', 'demtech'),
      'singular_name' => __('Report', 'demtech'),
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'reports'],
    'menu_icon' => 'dashicons-media-document',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'show_in_rest' => true,
  ]);
}
add_action('init', 'demtech_register_reports_cpt');
