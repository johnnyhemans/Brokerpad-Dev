<?php
  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');

  // Theme Support
  function wpb_theme_setup(){
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
  }

  add_action('after_setup_theme','wpb_theme_setup');
  //Widget Locations
  function wpb_init_widgets($id){
    register_sidebar(array(
      'name' => 'Box1',
      'id' => 'box1',
      'before_widget' => '<div class="box">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));

    register_sidebar(array(
      'name' => 'Box2',
      'id' => 'box2',
      'before_widget' => '<div class="box">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));

    register_sidebar(array(
      'name' => 'Box3',
      'id' => 'box3',
      'before_widget' => '<div class="box">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));

    register_sidebar(array(
      'name' => 'Box4',
      'id' => 'box4',
      'before_widget' => '<div class="box">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));

    register_sidebar(array(
      'name' => 'Box5',
      'id' => 'box5',
      'before_widget' => '<div class="box">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));

    register_sidebar(array(
      'name' => 'Box6',
      'id' => 'box6',
      'before_widget' => '<div class="box">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));
  }

  add_action('widgets_init', 'wpb_init_widgets');

  // Customizer File
  require get_template_directory(). '/inc/customizer.php';
?>
