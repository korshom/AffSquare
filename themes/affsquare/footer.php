<!-- =============== Footer-action-section start =============== -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-item">
                        <a href="<?php bloginfo('url');?>">
                            <img src="<?=get_option('footer_website_logo_unique');?>" alt="<?php bloginfo('name')?>">
                        </a>
                        <?php if (!empty(get_option('footer_content'))) : ?>
                        <p>
                            <?=get_option('footer_content');?>
                        </p>
                        <?php endif;?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
                    <div class="footer-item">
                        <h5>Quick Links</h5>
                        <ul class="footer-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Advertiser</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-item">
                        <h5>Contact Us</h5>
                        <ul class="address-list">
                            <?php if (!empty(get_option('aff_location'))) : ?>
                            <li>
                                <img src="<?=aff_URL?>assets/img/svgexport-5.svg">
                                <a href="#"><?=get_option('aff_location');?></a>
                            </li>
                            <?php endif;?>
                            <?php if (!empty(get_option('aff_phone'))) : ?>
                            <li>
                                <img src="<?=aff_URL?>assets/img/svgexport-6.svg">
                                <a href="tel:+<?=get_option('aff_phone');?>">+<?=get_option('aff_phone');?></a>
                            </li>
                            <?php endif;?>
                            <?php if (!empty(get_option('aff_email'))) : ?>
                            <li>
                                <img src="<?=aff_URL?>assets/img/svgexport-7.svg">
                                <a href="mailto:<?=get_option('aff_email');?>"><?=get_option('aff_email');?></a>
                            </li>
                            <?php endif;?>
                        </ul>
                        <?php 
                            $aff_facebook     = get_option('aff_facebook');
                            $aff_twitter      = get_option('aff_twitter');
                            $aff_instagram    = get_option('aff_instagram');
                            $aff_youtube      = get_option('aff_youtube');
                            $aff_linkedin     = get_option('aff_linkedin');
                            if (!empty($aff_facebook) || !empty($aff_twitter) || !empty($aff_instagram) || !empty($aff_youtube) || !empty($aff_linkedin)) : 
                        ?>
                        <ul class="footer-social gap-3">
                            <?php if (!empty($aff_facebook)) :?>
                            <li><a href="<?=$aff_facebook;?>"><i class='bx bxl-facebook'></i></a></li>
                            <?php endif;?>
                            <?php if (!empty($aff_twitter)) :?>
                            <li><a href="<?=$aff_twitter;?>"><i class='bx bxl-twitter'></i></a></li>
                            <?php endif;?>
                            <?php if (!empty($aff_instagram)) :?>
                            <li><a href="<?=$aff_instagram;?>"><i class='bx bxl-instagram'></i></a></li>
                            <?php endif;?>
                            <?php if (!empty($aff_youtube)) :?>
                            <li><a href="<?=$aff_youtube;?>"><i class='bx bxl-youtube'></i></a></li>
                            <?php endif;?>

                            <?php if (!empty($aff_linkedin)) :?>
                            <li><a href="<?=$aff_linkedin;?>"><i class='bx bxl-linkedin'></i></a></li>
                            <?php endif;?>
                        </ul>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex align-items-center g-3">
                <div class="col-lg-12 d-flex justify-content-center">
                    <p>All rights reserved Copyrights ©  <?= date("Y"); ?> <a href="<?php bloginfo('url');?>" class="egns-lab"><?php bloginfo('name');?></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =============== Footer-action-section end =============== -->
<!-- js file link -->
<?php wp_footer();?>
</body>
</html>