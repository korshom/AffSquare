<?php 
add_action( 'init', 'aff_custom_post_types' );
function aff_custom_post_types() {

$cpts = [
    array(
        'single'        => 'Team',
        'plural'        => 'Team',
        'cptname'       => 'team',
        'icon'          => 'dashicons-groups',
        'supports'      => ["title","thumbnail"],
        'show_in_menu'  => true,
        'position'      => 6
        ),
 ];

 foreach ($cpts as $cpt) {

     $labels = array(
        'name'                  => _x( $cpt['single'], 'Post Type General Name', 'aff' ),
        'singular_name'         => _x( $cpt['single'], 'Post Type Singular Name', 'aff' ),
        'menu_name'             => __( $cpt['plural'], 'aff' ),
        'all_items'             => __( 'All '.$cpt['plural'], 'aff' ),
        'add_new_item'          => __( 'Add New '.$cpt['single'] , 'aff' ),
        'add_new'               => __( 'Add New', 'aff' ),
        'new_item'              => __( 'New '.$cpt['single'], 'aff' ),
        'edit_item'             => __( 'Edit '.$cpt['single'], 'aff' ),
        'update_item'           => __( 'Update '.$cpt['single'], 'aff' ),
        'view_item'             => __( 'View '.$cpt['single'], 'aff' ),
        'search_items'          => __( 'Search '.$cpt['plural'], 'aff' ),
        'not_found'             => __( 'Not found', 'aff' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'aff' ),
        'featured_image'        => __( 'Featured Image', 'aff' ),
        'set_featured_image'    => __( 'Set featured image', 'aff' ),
        'remove_featured_image' => __( 'Remove featured image', 'aff' ),
        'use_featured_image'    => __( 'Use as featured image', 'aff' ),
      );

      $args = array(
        'label'                 => __( $cpt['plural'], 'aff' ),
        'description'           => __( $cpt['plural'].' Description', 'aff' ),
        'labels'                => $labels,
        'supports'              => $cpt['supports'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          =>$cpt['show_in_menu'],
        'menu_position'         => $cpt['position'],
        'menu_icon'             => $cpt['icon'],
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,    
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
      );
    // Register Custom Post Type>
    register_post_type( $cpt['cptname'], $args );
    }   
}

/* create my custom menu pages */
function aff_register_custom_menu_pages() {
    add_menu_page(
        'website options',
        'AffSquare Options',
        'manage_options',
        'content-area',
        'main_content_area_callback',
        get_option('aff_favicon'),
        2
    );
     add_submenu_page(
        'content-area',
        'Home Page options',
        'Home Page Options',
        'manage_options',
        'home-page-content',
        'home_content_area_callback'
    );    
}

add_action( 'admin_menu', 'aff_register_custom_menu_pages' );
require_once ( aff_ROOT . 'affsquare_options/theme_options.php');
require_once ( aff_ROOT . 'affsquare_options/home_page_options.php');
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        body{
            background:get_option('aff_primaryColor')!important; 
        }
        #login h1 a, .login h1 a {
            background-image: url(<?=get_option('website_logo_unique'); ?>);
            width: 100%;
            height: 100px;
            background-size: contain;
            margin: 0 auto;
        }
        .login form{
            background: rgba(3, 3, 4, .9)!important;
            border-radius: .5rem;
        }
        .login label{
            font-weight: 600!important;
            color: #fff!important;
        }
        .wp-core-ui p .button {
            background: rgba(3, 3, 4, .9)!important;
            border-color: rgba(3, 3, 4, .9)!important;
        }
        .wp-core-ui p .button:hover{
            background-color: get_option('aff_secondaryColor') !important;
            border-color: get_option('aff_secondaryColor') !important;
            color: #fff;
        }
        #reg_passmail{color:#fff;}
    </style>
<?php }

