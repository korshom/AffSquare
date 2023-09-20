<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="keywords" content="<?php bloginfo('name'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <link rel="shortcut icon" href="<?=get_option('mas_favicon_img')?>" type="image/x-icon" />
    <title>
        <?php wp_title('|','true','right');?>
        <?php bloginfo('name');?>
    </title>
        <?php wp_head();?>
</head>

<body>
    <!-- preloader -->
    <div class="egns-preloader">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="circle-border">
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <svg width="180px" height="150px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet"
                            style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);">
                            <path stroke="#D90A2C" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                            <path id="outline-bg" opacity="0.05" fill="none" stroke="#959595" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ========== header============= -->

    <header class="header-area style-1">
        <div class="header-logo">
            <a href="<?php bloginfo('url');?>">
                <img src="<?=get_option('website_logo_unique');?>" alt="<?php bloginfo('name')?>">
            </a>
        </div>
        <div class="main-nav">
            <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                <div class="mobile-logo-wrap ">
                    <a href="<?php bloginfo('url');?>">
                        <img src="<?=get_option('website_logo_unique');?>" alt="<?php bloginfo('name')?>">
                    </a>
                </div>
                <div class="menu-close-btn">
                    <i class="bi bi-x-lg text-white"></i>
                </div>
            </div>
            <?php aff_menu();?>
        </div>
        <div class="nav-right d-flex align-items-center gap-5">
            <?php if (!empty(get_option('aff_email'))) : ?>
            <div class="hotline d-xxl-flex d-none">
                <div class="hotline-icon">
                   <img src="<?=aff_URL;?>assets/img/svgexport-3.svg">
                </div>
                <div class="hotline-info">
                    <span>Messge Us</span>
                    <h6><a href="mailto:<?=get_option('aff_email');?>"><?=get_option('aff_email');?></a></h6>
                </div>
            </div>
            <?php endif;?>
            <div class="eg-btn btn--primary header-btn">
                <a href="#">SIGN IN</a>
            </div>
        </div>
    </header>

<!-- ========== header end============= -->