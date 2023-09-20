<?php 
function home_content_area_callback() {

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ):
        foreach ( $_POST as $key => $value ):

            if ( in_array( $key ,[] ) 
                )
                $value = stripcslashes($value);

            update_option( $key , $value );
        endforeach;
        if(!isset($_POST['hero_hide'])) delete_option('hero_hide') ;
        if(!isset($_POST['team_hide'])) delete_option('team_hide') ;
    endif; 
?>
 <div class="container-fluid text-start padding-right-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center site-title"><span><?php _e('Home Page Settings', 'affsquare'); ?></span></h1>
            </header>
        </div>
        <br/>
        <div class="d-flex align-items-start p-0 m-0">
            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true"><?php _e('hero Section','affsquare') ?></button>
                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false"><?php _e('Team Section','affsquare') ?></button>

            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
                <form method="POST" class = "form-horizontal form_back p-5 rounded">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'hero_hide'; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                	<?php _e('Hide Section','affsquare') ?>
                                </label>
                            </div>

                            <div class="form-group">
                                <?php $name = 'hero_bg_img' ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('hero Background Image','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                                    <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','affsquare') ?></a>
                                    <?php if (!empty(get_option($name))): ?>
                                    <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                                    <?php endif ?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <?php $name = 'hero_small_title'; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Hero Small Title','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <?php $name = 'hero_title'; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Hero Title','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>

                            <div class="form-group text-start">
                                <?php $name = 'hero_content'; ?>
                                <label for="<?=$name;?>" class="col-sm-6 control-label text-white">
                                    <?php _e('Hero Content','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <textarea id="<?=$name;?>" name="<?=$name;?>" class="form-control" rows="3">
                                        <?= get_option( $name ); ?>    
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <?php $name = 'hero_link_txt'; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Hero Link Text','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <?php $name = 'hero_link_url'; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Hero Link URL','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>


                            <div class="form-group">
                                <?php $name = 'hero_img' ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('hero Image','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                                    <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','affsquare') ?></a>
                                    <?php if (!empty(get_option($name))): ?>
                                    <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                                    <?php endif ?>
                                </div>
                            </div>
                            
                        </div>

                        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
                            <div class="form-group text-start">                  
                                <div class="inline-block">
                                    <?php $name = 'team_hide'; ?>
                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>
                                </div>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Hide Section','affsquare') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <?php $name = 'team_small_title'; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Team Small Title','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php $name = 'team_title'; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Team Title','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                                </div>
                            </div>

                            <div class="form-group text-start">
                                <?php $name = 'team_content'; ?>
                                <label for="<?=$name;?>" class="col-sm-6 control-label text-white">
                                    <?php _e('Team Content','affsquare') ?>
                                </label>
                                <div class="col-sm-12 text-start ">
                                    <textarea id="<?=$name;?>" name="<?=$name;?>" class="form-control" rows="3">
                                        <?= get_option( $name ); ?>    
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <?php $name = 'team_posts[]'; $team = aff_get_team(-1); if($team->have_posts()) :?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose team','affsquare') ?></label>
                                <div class="col-sm-12 text-start multiSelect_field">
                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">
                                        <option value = ''><?php _e('Choose team','affsquare') ?></option>
                                        <?php while($team->have_posts()) : $team->the_post();?>
                                        <?php
                                            $team_options = get_option('team_posts');
                                           if (!empty($team_options)) {
                                                $selected_post = ( in_array(get_the_ID(), $team_options) ) ? 'selected' :  '';
                                            }
                                        ?>
                                        <option value="<?= get_the_ID() ?>"  <?= $selected_post; ?> ><?php the_title(); ?>
                                        </option>
                                        <?php endwhile; wp_reset_query();?>
                                    </select>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>


                    </div>
                    <div class="form-group">

                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="affsquare_save_<?=$lang?>" value="<?php _e('Save Settings', 'affsquare') ?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->
<?php
}
