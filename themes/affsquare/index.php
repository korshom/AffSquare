<?php get_header(); if (get_option('hero_hide') != '1')  : ?>
<!-- ========== banner1-area start============= -->
<div class="banner-section1" style="background-image:url('<?=get_option('hero_bg_img');?>')">
	<?php 
		$aff_facebook     = get_option('aff_facebook');
		$aff_twitter      = get_option('aff_twitter');
		$aff_instagram    = get_option('aff_instagram');
		$aff_youtube      = get_option('aff_youtube');
		$aff_linkedin     = get_option('aff_linkedin');
		if (!empty($aff_facebook) || !empty($aff_twitter) || !empty($aff_instagram) || !empty($aff_youtube) || !empty($aff_linkedin)) : 
	?>
    <ul class="banner-social gap-5">
    	<?php if (!empty($aff_facebook)) :?>
    	<li><a href="<?=$aff_facebook;?>">Facebook</a></li>
    	<?php endif;?>
    	<?php if (!empty($aff_twitter)) :?>
    	<li><a href="<?=$aff_twitter;?>">Twitter</a></li>
    	<?php endif;?>
    	<?php if (!empty($aff_instagram)) :?>
    	<li><a href="<?=$aff_instagram;?>">Instagram</a></li>
    	<?php endif;?>
    	<?php if (!empty($aff_youtube)) :?>
    	<li><a href="<?=$aff_youtube;?>">Youtube</a></li>
    	<?php endif;?>
    	<?php if (!empty($aff_linkedin)) :?>
    	<li><a href="<?=$aff_linkedin;?>">Linkedin</a></li>
    	<?php endif;?>
    </ul>
	<?php endif;?>
    <img src="<?=aff_URL;?>assets/img/banner-rain.png" class="banner-rain" alt="<?php bloginfo('name');?>">
    <img src="<?=aff_URL;?>assets/img/banner-spring1.png" class="banner-spring1" alt="<?php bloginfo('name');?>">
    <img src="<?=aff_URL;?>assets/img/banner-spring2.png" class="banner-spring2" alt="<?php bloginfo('name');?>">
    <img src="<?=aff_URL;?>assets/img/banner-spring3.png" class="banner-spring3" alt="<?php bloginfo('name');?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner-content wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                	<?php if (!empty(get_option('hero_small_title'))) : ?>
                    <span><?=get_option('hero_small_title');?></span>
                	<?php endif;?>
                	<?php if (!empty(get_option('hero_title'))) : ?>
                    <h1><?=get_option('hero_title');?></h1>
                    <?php endif;?>
                    <?php if (!empty(get_option('hero_content'))) : ?>
                    <p>
	                    <?=get_option('hero_content');?>
	                </p>
	                <?php endif;?>
	                <?php if (!empty(get_option('hero_link_txt')) && !empty(get_option('hero_link_url'))) : ?>
                    <div class="button-group gap-5">
                        <a href="<?=get_option('hero_link_url');?>" class="eg-btn btn--primary btn--lg"><?=get_option('hero_link_txt') ?></a>
                    </div>
                	<?php endif;?>
                </div>
            </div>

            <div class="col-lg-5 position-relative">
            	<?php if (!empty(get_option('hero_img'))) : ?>
                <div class="solar-vector-area wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">
                     <img src="<?=get_option('hero_img');?>" class="img-fluid banner1-v1" alt="<?=get_option('hero_title');?>">
                </div>
            	<?php endif;?>
            </div>
        </div>
    </div>
</div>
<!-- ===============  banner1-area end=============== -->
<?php endif;?>
<?php 
	if (get_option('team_hide') != '1')  :
	$second = .2;
	$team = aff_get_team_with_select_team(-1, get_option('team_posts'));
	if($team->have_posts()) : 
?>
<!-- =============== team-section start  =============== -->
<div class="team-section pt-50 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="section-title3 primary3 text-cener">
                	<?php if (!empty(get_option('team_small_title'))) : ?>
                    <span>-<?=get_option('team_small_title');?>-</span>
                	<?php endif;?>
                    <?php if (!empty(get_option('team_title'))) : ?>
                    <h1><?=get_option('team_title');?></h1>
                    <?php endif;?>
                    <?php if (!empty(get_option('team_content'))) : ?>
                    <p>
	                    <?=get_option('team_content');?>
	                </p>
	                <?php endif;?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-start g-4 position-relative">
            <img src="<?=aff_URL;?>assets/img/portfolio-vctor.png" alt="<?=get_option('team_title');?>" class="portfolio-vector img-fluid"> 
            <?php 
            	while ( $team->have_posts() ) : $team->the_post(); $team_id = get_the_ID();
        		$member_position      = get_post_meta( $team_id, 'member_position', true );
			    $member_facebook      = get_post_meta( $team_id, 'member_facebook', true );
			    $member_twitter       = get_post_meta( $team_id, 'member_twitter', true );
			    $member_instagram     = get_post_meta( $team_id, 'member_instagram', true );
			    $member_linkedin      = get_post_meta( $team_id, 'member_linkedin', true );
            ?>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="single-team1 style-2 hover-border1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="<?=$second;?>s">
                    <div class="team-image">
                        <img src="<?php the_post_thumbnail_url($team_id, 'team-size');?>" alt="<?php the_title();?>">
                        <?php if (!empty($member_facebook) && !empty($member_twitter) && !empty($member_instagram) && !empty($member_linkedin)) :?>
                        <div class="social-area gap-3">
                            <ul class="social-links d-flex justify-content-center align-items-center flex-column gap-3">
                            	<?php if (!empty($member_facebook)): ?>
                            	<li><a href="<?=$member_facebook;?>"><i class='bx bxl-facebook'></i></a></li>
                            	<?php endif;?>
                                <?php if (!empty($member_twitter)): ?>
                            	<li><a href="<?=$member_twitter;?>"><i class='bx bxl-twitter'></i></a></li>
                            	<?php endif;?>
                            	<?php if (!empty($member_instagram)): ?>
                            	<li><a href="<?=$member_instagram;?>"><i class='bx bxl-instagram'></i></a></li>
                            	<?php endif;?>
                            	<?php if (!empty($member_linkedin)): ?>
                            	<li><a href="<?=$member_linkedin;?>"><i class='bx bxl-linkedin'></i></a></li>
                            	<?php endif;?>
                            </ul>
                            <div class="social-plus"><i class='bx bx-plus'></i></div>
                        </div>
                    	<?php endif;?>
                        <svg viewBox="0 0 430 195" xmlns="http://www.w3.org/2000/svg">
                            <path d="M160.378 64.0315C43.5811 57 15.7702 14.7334 3.40949e-05 0.000915527L4.53134e-05 195.001L430 195L430 157.164C378.284 73 297.179 72.2673 160.378 64.0315Z"/>
                        </svg>
                        <div class="team-content">
                            <h4 class="name"><?php the_title()?></h4>
                            <?php if (!empty($member_position)): ?>
                            <p class="designation"><?=$member_position;?></p>
                        <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $second = $second + .1; endwhile; wp_reset_query();?>
        </div>
    </div>
</div>
<!-- =============== team-section end  =============== -->
<?php endif; endif;?>
<?php get_footer();?>