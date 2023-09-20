<?php  
define('aff_ROOT', get_stylesheet_directory().'/');
define('aff_URL', get_stylesheet_directory_uri() .'/');
define('aff_ADMIN', admin_url());
define('aff_BlogUrl', get_bloginfo('url'));

add_theme_support( 'post-thumbnails' );

require_once( aff_ROOT . '/lib/aff_enqueue_scripts.php' );
require_once( aff_ROOT . '/lib/aff_functions.php' );
require_once( aff_ROOT . '/lib/aff_theme_init.php' );
require_once( aff_ROOT . '/lib/aff_meta_fields.php' );
require_once( aff_ROOT . '/lib/wp_bootstrap_navwalker.php');

register_nav_menus();
add_action( 'after_setup_theme', 'aff_thumbnails' );

function aff_thumbnails() {
    add_theme_support('post-thumbnails');
    add_image_size( 'team-size', 270, 358,array('center','center') );
}
function aff_menu() {
wp_nav_menu( array(
    'menu'              => 'Main Menu',
    'container'         => '',
    'theme_location'    => 'main-menu',
    'menu_class'        => 'menu-list',
    'depth'             => 3,
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  )
 );
}

/*Remove Title TO Anchor Tag Menu*/
function my_menu_notitle( $menu ){
  	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );
}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

/*Add Footer Widget*/
function aff_widgets_init() {
register_sidebar( array(
    'name'          => 'First Sidebar Column',
    'id'            => 'first_sidebar',
    'before_widget' => '',
    'after_widget'  => '',
  ));
}
add_action( 'widgets_init', 'aff_widgets_init' );

function aff_second_widgets_init() {
register_sidebar( array(
    'name'          => 'Second Sidebar Column',
    'id'            => 'second_sidebar',
    'before_widget' => '',
    'after_widget'  => '',
  ));
}
add_action( 'widgets_init', 'aff_second_widgets_init' );

function change_footer_admin() {
  echo '<span id="footer-thankyou">Powered by <a href="https://affsquare.com/" target="_blank">Affsquare</a></span>';
}
add_filter('admin_footer_text', 'change_footer_admin');
