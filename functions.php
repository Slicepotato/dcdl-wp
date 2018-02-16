<?php
  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  function site_widgets() {
    register_sidebar(
      array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      )
    );
    register_sidebar(
      array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      )
    );
    register_sidebar(
      array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      )
    );
    register_sidebar(
      array(
        'name' => 'Footer Sidebar 4',
        'id' => 'footer-sidebar-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      )
    );
  }
  add_action( 'widgets_init', 'site_widgets' );

/*
  function dynamic_sidebar() {
    register_sidebar(
      array(
        'name' => 'Widget Area 1',
        'id' => 'widget-area-1',
        'description' => 'Appears in the Sidebar area',
        'before_widget' => '<article id="%1$s" class="widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      )
    );
    register_sidebar(
      array(
        'name' => 'Widget Area 2',
        'id' => 'widget-area-2',
        'description' => 'Appears in the Sidebar area',
        'before_widget' => '<article id="%1$s" class="widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      )
    );
  }
  add_action( 'widgets_init', 'dynamic_sidebar' );
  */

  function site_logo() {
    register_sidebar(
      array(
        'name' => 'Logo Container',
        'id' => 'logo',
        'description' => 'Site logo container',
        'before_widget' => '<a href="/" id="logo" class="%2$s">',
        'after_widget' => '</a>',
      )
    );
  }
  add_action( 'widgets_init', 'site_logo' );

  function theme_js() {
      wp_enqueue_script( 'dcdl_theme_js', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
  }
  add_action('wp_enqueue_scripts', 'theme_js');
?>
