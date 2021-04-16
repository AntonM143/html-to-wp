<?php
/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );




/* Lägger till stöd för olika delar */
add_theme_support("post-thumbnails");
add_theme_support("menus");
add_theme_support("widgets");

/* Registrerar Widgets */
  register_sidebar([
    'name' => 'Sido meny',
    'Description' => 'widget för Sido meny',
    'id' => 'sido-meny',
    'after' => ' <ul>'
    ]);
    register_sidebar([
      'name' => 'Kort om oss meny till undersida',
      'Description' => 'widget för Kort om oss som finns på undersidorna',
      'id' => 'om-oss-footer',
      'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-4">',
      'after_widget' => '</div>',
      'before_title' => '<h4>',
      'after_title' => '</h4>',
      
    ]);
  register_sidebar([
    'name' => 'Kontaktuppgifter meny till undersida',
    'Description' => 'widget för Kontaktuppgifter som finns på undersidorna',
    'id' => 'kontakt-footer',
    'before_widget' => '<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
    
  ]);
/* Registrerar Widgets */

/* Registrerar Menyer */
function register_menu(){
    register_nav_menu('footermenu','placeras i footer menu');
    register_nav_menu('headmenu','Huvudmenyn');
    register_nav_menu('sidemenu', 'placeras i side menu');
    register_nav_menu('sideCategory', 'Sido Kategorin');
    register_nav_menu('toStart', 'till start knappen');
    register_nav_menu('Kategori', 'Kategori på bloggsidan');
    register_nav_menu('social-menu', 'Social media menu'
   );
    
}
add_action('after_setup_theme', 'register_menu');
/* Registrerar Menyer */




/* Länkar till js och css filer */
function min_css_js_funk (){
  
  wp_enqueue_script('temaJquery', get_template_directory_uri(). '/js/jquery.js', [], false, true);
  wp_enqueue_script('temaScript', get_template_directory_uri(). '/js/script.js', [], false, true);
  wp_enqueue_style('temaStil', get_template_directory_uri(). '/style.css');
  wp_enqueue_style('temaStil-bootstrap', get_template_directory_uri(). '/css/bootstrap.css');
  wp_enqueue_style('temaStil-font-awesome', get_template_directory_uri(). '/css/font-awesome.css');
  
}

  add_action('wp_enqueue_scripts', 'min_css_js_funk');
/* Länkar till js och css filer */
?>
