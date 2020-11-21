<?php
  function registerMenuLocations() {
    register_nav_menus(array(
      'header-nav' => 'Header Menu',
      'footer-nav' => 'Footer Menu',
    ));
  }

  function loadFiles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script( 'main-js', get_theme_file_uri('/js/main.js', NULL, '1.0', true));
  }
  
  add_action('init', 'registerMenuLocations');
  add_action('wp_enqueue_scripts', 'loadFiles');
