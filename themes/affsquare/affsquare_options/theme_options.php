<?php 
function main_content_area_callback(){
    $wp_editor_settings = array( 
    'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), 
    'textarea_rows'=> 5,
    'drag_drop_upload'=> true,
    'wpautop' => false,
    'media_buttons'=> true,
    'class'=>'form-control'
);    
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ):
    foreach ( $_POST as $key => $value ):
        if ( in_array( $key ,['footer_content'] ) 
            )
            $value = stripcslashes($value);
        update_option( $key , $value );
    endforeach;
endif;
?>

<div class="container-fluid text-start padding-right-4">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center site-title"><span>General Settings</span></h1>
			</header>
		</div>
		<br/>
		<div class="d-flex align-items-start p-0 m-0">
			<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logos</button>
				<button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">Colors</button>
				<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact</button>
				<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media</button>
				<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Footer</button>
			</div>
			<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
				<form class="form-horizontal form_back p-5 rounded" method="post" action="#">
				    <div class="tab-content" id="v-pills-tabContent">
				        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
							<div class="form-group">
							  	<label for="aff_header_logo_img" class="col-sm-12 text-start  control-label text-white">Header Logo</label>
							  	<div class="col-sm-12 text-start ">
							    	<input class="aff_header_logo_img_url site_half" type="text" name="aff_header_logo_img" size="60" value="<?= get_option('aff_header_logo_img'); ?>">
							    	<a href="#" class="aff_header_logo_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('aff_header_logo_img'))): ?>
							    	<img class="img-fluid bg-dark img-thumbnail w-25 mt-2 aff_header_logo_img" src="<?= get_option('aff_header_logo_img'); ?>" height="100" style="max-width:100%" />

							    	<?php endif ?>
							  	</div>
							</div>
							<div class="form-group">
							  	<label for="aff_sticky_logo_img" class="col-sm-12 text-start  control-label text-white">Sticky Logo</label>
							  	<div class="col-sm-12 text-start ">
							    	<input class="aff_sticky_logo_img_url site_half" type="text" name="aff_sticky_logo_img" size="60" value="<?= get_option('aff_sticky_logo_img'); ?>">
							    	<a href="#" class="aff_sticky_logo_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('aff_sticky_logo_img'))): ?>
							    	<img class="img-fluid bg-dark img-thumbnail w-25 mt-2 aff_sticky_logo_img" src="<?= get_option('aff_sticky_logo_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>
							<div class="form-group">
							  	<label for="aff_favicon_img" class="col-sm-12 text-start  control-label text-white">Favicon Logo</label>
							  	<div class="col-sm-12 text-start ">
							    	<input class="aff_favicon_img_url site_half" type="text" name="aff_favicon_img" size="60" value="<?= get_option('aff_favicon_img'); ?>">
							    	<a href="#" class="aff_favicon_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('aff_favicon_img'))): ?>
							    	<img class="img-fluid img-thumbnail w-25 mt-2 aff_favicon_img" src="<?= get_option('aff_favicon_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>
				        </div>
				        <div class="tab-pane fade" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">
							<div class="form-group">
								<label for="aff_primaryColor" class="col-sm-12 text-start  control-label text-white">Primary Color</label>
								<div class="col-sm-12 text-start d-flex align-items-center justify-content-start">
									<input type="color" class="form-control aff-color" id="aff_primaryColor" name="aff_primaryColor" value="<?= get_option('aff_primaryColor'); ?>">
									<div class="text-white ms-2"><?= get_option('aff_primaryColor'); ?></div>
								</div>
							</div>	

							<div class="form-group">
								<label for="aff_secondaryColor" class="col-sm-12 text-start  control-label text-white">Secondary Color</label>
								<div class="col-sm-12 text-start d-flex align-items-center justify-content-start">
									<input type="color" class="form-control aff-color" id="aff_secondaryColor" name="aff_secondaryColor" value="<?= get_option('aff_secondaryColor'); ?>">
									<div class="text-white ms-2"><?= get_option('aff_secondaryColor'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="aff_thirdColor" class="col-sm-12 text-start  control-label text-white">Third Color</label>
								<div class="col-sm-12 text-start d-flex align-items-center justify-content-start">
									<input type="color" class="form-control aff-color" id="aff_thirdColor" name="aff_thirdColor" value="<?= get_option('aff_thirdColor'); ?>">
									<div class="text-white ms-2"><?= get_option('aff_thirdColor'); ?></div>
								</div>
							</div>
					    </div>
				        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
							<div class="form-group">
								<label for="aff_phone" class="col-sm-12 text-start  control-label text-white">Phone Number</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="aff_phone" name="aff_phone" value="<?= get_option('aff_phone'); ?>">
								</div>
							</div>		
							<div class="form-group">
								<label for="aff_email" class="col-sm-12 text-start  control-label text-white">E-mali Address</label>
								<div class="col-sm-12 text-start ">
									<input type="email" class="form-control text-start" id="aff_email" name="aff_email" value="<?= get_option('aff_email'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="aff_location" class="col-sm-12 text-start  control-label text-white">Location</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control text-start" id="aff_location" name="aff_location" value="<?= get_option('aff_location'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="aff_map" class="col-sm-12 text-start  control-label text-white">Google Map</label>
								<div class="col-sm-12 text-start ">
  									<textarea id="aff_map" name="aff_map" class="form-control" rows="3"><?= get_option('aff_map'); ?></textarea>
								</div>
							</div>
					    </div>	      
						<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
							<div class="form-group">
								<label for="aff_facebook" class="col-sm-12 text-start  control-label text-white">Facebook</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="aff_facebook" name="aff_facebook" value="<?= get_option('aff_facebook'); ?>">
								</div>
							</div>
							
							<div class="form-group">
								<label for="aff_twitter" class="col-sm-12 text-start  control-label text-white">Twitter</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="aff_twitter" name="aff_twitter" value="<?= get_option('aff_twitter'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="aff_instagram" class="col-sm-12 text-start  control-label text-white">Instagram</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="aff_instagram" name="aff_instagram" value="<?= get_option('aff_instagram'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="aff_linkedin" class="col-sm-12 text-start  control-label text-white">Linked In</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="aff_linkedin" name="aff_linkedin" value="<?= get_option('aff_linkedin'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="aff_youtube" class="col-sm-12 text-start  control-label text-white">Youtube</label>
								<div class="col-sm-12 text-start ">
									<input type="text" class="form-control" id="aff_youtube" name="aff_youtube" value="<?= get_option('aff_youtube'); ?>">
								</div>
							</div>
						</div>

						<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">							
							<div class="form-group">
							  	<label for="aff_footer_logo_img" class="col-sm-12 text-start  control-label text-white">Header Logo</label>
							  	<div class="col-sm-12 text-start ">
							    	<input class="aff_footer_logo_img_url site_half" type="text" name="aff_footer_logo_img" size="60" value="<?= get_option('aff_footer_logo_img'); ?>">
							    	<a href="#" class="aff_footer_logo_img_upload btn btn-info">Choose</a>
							    	<?php if (!empty(get_option('aff_footer_logo_img'))): ?>
							    	<img class="img-fluid img-thumbnail w-25 mt-2 aff_footer_logo_img bg-dark" src="<?= get_option('aff_footer_logo_img'); ?>" height="100" style="max-width:100%" />
							    	<?php endif ?>
							  	</div>
							</div>
							<div class="form-group text-start">
                                <label for="footer_content" class="col-sm-6 control-label text-white">Footer Content</label>
                                <div class="col-sm-12 text-start ">
  									<textarea id="footer_content" name="footer_content" class="form-control" rows="3"><?= get_option('footer_content'); ?></textarea>
								</div>
                            </div>
				        </div>
				 	</div>
 					<div class="form-group">
 						<div class="col-sm-12">
 						<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="aff_save" value="Save Settings">
 						</div>
 					</div>
 				</form>
			</div>
		</div>
	</div>
</div><!-- /container -->
<?php
}