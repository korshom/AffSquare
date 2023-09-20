<?php

function aff_admin_scripts_styles($hook) {
    wp_enqueue_style( 'aff-admin-main', aff_URL . 'assets/admin/css/main-style.css');

    //var_dump($hook);

    $aff_pages = ['toplevel_page_content-area',
        'affsquare-options_page_home-page-content',
        'post-new.php','post.php','edit-tags.php'
    ];

    if( in_array($hook, $aff_pages) ) {
        wp_enqueue_style('aff-admin-bootsrtap-css',aff_URL.'assets/admin/css/bootstrap.min.css');
        wp_enqueue_style('aff-admin-jquery-ui-css',aff_URL.'assets/admin/css/jquery-ui.css');
        wp_enqueue_style('aff-admin-choose_cat-css',aff_URL.'assets/admin/css/choose-cat.css');
        wp_enqueue_style('aff-admin-style-css',aff_URL. 'assets/admin/css/style.css');
        wp_enqueue_script('aff-admin-jquery-js',aff_URL.'assets/js/jquery.js', array() ,false, true );
        wp_enqueue_script('aff-admin-popper-js',aff_URL.'assets/admin/js/popper.min.js', array() ,false, true );
        wp_enqueue_script( 'aff-admin-bootsrtap-js', aff_URL.'assets/admin/js/bootstrap.bundle.min.js', array() ,false, true );
        wp_enqueue_script('aff-choose_cat-js',aff_URL.'assets/admin/js/choose_cat.js', array() ,false, true ); 
        wp_enqueue_script('aff-admin-script-js',aff_URL.'assets/admin/js/script.js', array() ,false, true );
        if(function_exists( 'wp_enqueue_media' )){
            wp_enqueue_media();
        }else{
            wp_enqueue_style('thickbox');
            wp_enqueue_script('media-upload');
            wp_enqueue_script('thickbox');
        }
    }



    $primaryColor     = get_option('aff_primaryColor');
    if (empty($primaryColor)) {
        $primaryColor = '#000';
    }
    $secondaryColor   = get_option('aff_secondaryColor');
    if (empty($secondaryColor)) {
        $secondaryColor = '#222';
    }
    $thirdColor       = get_option('aff_thirdColor');
    if (empty($thirdColor)) {
        $thirdColor = '#ccc';
    }

    $googleFontUrl    = get_option('aff_font_url');
    $googleFontName   = get_option('aff_font_name');
    $custom_css = 
    "
        @import url('{$googleFontUrl}');
        :root {
           --primaryColor      : {$primaryColor};
           --secondaryColor    : {$secondaryColor};
           --thirdColor        : {$thirdColor};
           --aff-font          :'{$googleFontName}',sans-serif;
        }
    ";
    wp_add_inline_style('aff-style-css', $custom_css);
    wp_add_inline_style('aff-admin-main', $custom_css);
}

add_action('admin_enqueue_scripts', 'aff_admin_scripts_styles');

function aff_scripts_styles() {

    wp_enqueue_style( 'aff-animate-css', aff_URL . 'assets/css/animate.css');
    
    wp_enqueue_style( 'aff-bootstrap-css', aff_URL . 'assets/css/bootstrap.min.css');
    wp_enqueue_style( 'aff-boxicons-css', aff_URL . 'assets/css/boxicons.min.css');
    wp_enqueue_style( 'aff-jquery-ui-css', aff_URL . 'assets/css/jquery-ui.css');
    wp_enqueue_style( 'aff-style-css', aff_URL . 'assets/css/style.css');

    wp_enqueue_script( 'aff-jquery-js', aff_URL .'assets/js/jquery-3.6.0.min.js', array() ,false, true );
    wp_enqueue_script( 'aff-jquery-ui-js', aff_URL .'assets/js/jquery-ui.js', array() ,false, true );
    wp_enqueue_script( 'aff-bootstrap-js', aff_URL .'assets/js/bootstrap.bundle.min.js', array() ,false, true );
    wp_enqueue_script( 'aff-wow-js', aff_URL .'assets/js/wow.min.js', array() ,false, true );
    wp_enqueue_script( 'aff-main-js', aff_URL .'assets/js/main.js', array() ,false, true );
        $primaryColor         = get_option('aff_primaryColor');
        $secondaryColor       = get_option('aff_secondaryColor');
        $thirdColor           = get_option('aff_thirdColor');
        $googleFontUrl        = get_option('aff_font_url');
        $googleFontName       = get_option('aff_font_name');
        $custom_css = 
            "
                @import url('{$googleFontUrl}');
                :root {
                   --primaryColor         : {$primaryColor};
                   --secondaryColor       : {$secondaryColor};
                   --thirdColor           : {$thirdColor};
                   --white                : #ffffff;
                   --aff-font             :'{$googleFontName}',sans-serif;
                }
            ";
    wp_add_inline_style('aff-style-css', $custom_css);
}
add_action( 'wp_enqueue_scripts', 'aff_scripts_styles' );



