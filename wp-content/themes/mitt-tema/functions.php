<?php

add_theme_support("post-thumbnails");
add_theme_support("menus");
add_theme_support("widgets");

  register_sidebar([
    'name' => 'test',
    'Description' => 'demo widget',
    'id' => 'test-id'
  ]);
  register_sidebar([
    'name' => 'Sido meny',
    'Description' => 'widget för Sido meny',
    'id' => 'sido-meny'
  ]);
  register_sidebar([
    'name' => 'meny till undersida',
    'Description' => 'widget för meny som finns på undersidorna',
    'id' => 'undersida-sidebar'
  ]);

function register_menu(){
    register_nav_menu('footermenu','placeras i footer menu');
    register_nav_menu('headmenu','Huvudmenyn');
    register_nav_menu('sidemenu', 'placeras i side menu');
    register_nav_menu('sideCategory', 'Sido Kategorin');
    register_nav_menu('toStart', 'till start knappen');
    register_nav_menu('Kategori', 'Kategori på bloggsidan');
    
}

add_action('after_setup_theme', 'register_menu');




function min_css_js_funk (){
  
  wp_enqueue_script('temaScript', get_template_directory_uri(). '/js/script.js', [], false, true);
  wp_enqueue_script('temaJquery', get_template_directory_uri(). '/js/jquery.js', [], false, true);
  wp_enqueue_style('temaStil', get_template_directory_uri(). '/style.css');
  wp_enqueue_style('temaStil-bootstrap', get_template_directory_uri(). '/css/bootstrap.css');
  wp_enqueue_style('temaStil-font-awesome', get_template_directory_uri(). '/css/font-awesome.css');
  
}

  add_action('wp_enqueue_scripts', 'min_css_js_funk');
?>
