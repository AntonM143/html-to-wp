<?php

add_theme_support("post-thumbnails");
add_theme_support("menus");

/* add_action( 'init', 'wpb_custom_new_menu' );
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
 */
function register_menu(){
    register_nav_menu('footermenu','placeras i footer menu');
    register_nav_menu('headmenu','Huvudmenyn');
    register_nav_menu('sidemenu', 'placeras i side menu');
    register_nav_menu('sideCategory', 'Sido Kategorin');
    register_nav_menu('toStart', 'till start knappen');
    register_nav_menu('Kategori', 'Kategori på bloggsidan');
    
}

add_action('after_setup_theme', 'register_menu');



add_action('wp_enqueue_scripts', 'min_css_js_funk');

function min_css_js_funk (){

  wp_enqueue_script('temaScript', get_template_directory_uri(). '/js/script.js', [], false, true);
  wp_enqueue_script('temaJquery', get_template_directory_uri(). '/js/jquery.js', [], false, true);
  wp_enqueue_style('temaStil', get_template_directory_uri(). '/style.css');
  wp_enqueue_style('temaStil-bootstrap', get_template_directory_uri(). '/css/bootstrap.css');
  wp_enqueue_style('temaStil-font-awesome', get_template_directory_uri(). '/css/font-awesome.css');

}
?>
