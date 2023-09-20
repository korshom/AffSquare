<?php
/**
 * Plugin Name: Aff Square Logo
 * Plugin URI: https://affsquare.com/
 * Description: This add-on is to create a logo image for the site
 * Version: 1.0
 * Author: Aff Square
 * Author URI: https://affsquare.com/
 */

if(! function_exists('websiteLogoPage')){


	function websiteLogoPage() {
	add_menu_page(

        'Logo',

        'Logo',

        'manage_options',

        'website_logo',

        'rednerWebsiteLogo',

        'dashicons-format-image',

        15

    );
}
add_action('admin_menu', 'websiteLogoPage');
}

if(! function_exists('rednerWebsiteLogo')){


	function rednerWebsiteLogo(){

		wp_enqueue_style('thickbox');
		wp_enqueue_script('thickbox');
		wp_enqueue_script( 'media-upload'); 

		$logo_url	        =	get_option('website_logo_unique');
		$footer_logo_url	=	get_option('footer_website_logo_unique');

		// Form
		$renderLogo	=	"<div class='wrap'><h2>Website Logo</h2>";

		if($_POST['is_web_logo'] == 'is_web_logo' && $_POST['is_footer_web_logo'] == 'is_footer_web_logo'){

			$renderLogo	.=	"<div id='setting-error-settings_updated' class='updated settings-error hide_settings'>
							<p><strong>Settings saved.</strong></p></div>";
		}
		?>
		<div class="container text-start p-5">
		    <div class="row">
		        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
		            <!-- Top Navigation -->
		            <header class="codrops-header">
		                <h1 class="text-center site-title"><span>Website Logo</span></h1>
		            </header>
		        </div>
		        <br/>
		        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
					<form class="form-horizontal form_back p-5 rounded" method='post'>
						<table class='form-table'>
							<tbody>
								<tr>
									<th scope='row'><label for='blogname'>Header Logo</label></th>
									<td>
										<div class="form-group">
			                                <label for="website_logo" class="col-sm-12 text-start control-label">
			                                    Header Logo
			                                </label>
			                                <div class="col-sm-12 text-start ">
												<input name="website_logo" id="website_logo" value="<?=$logo_url;?>" size="60" class="regular-text site_half website_logo_url" type="text">
												<a href="#" title="Choose Image" class="website_logo_upload btn btn-info">Upload</a>
											</div>
			                            </div>
									</td>
								</tr>
								<tr>
									<th scope='row'><label for='blogname'>Logo Image</label></th>
									<td>
										<?php if (!empty($logo_url)): ?>
							            	<img class="img-fluid img-thumbnail w-25 mt-2 <?=$logo_url ?>" src="<?= $logo_url;?>" height="100" style="max-width:100%" />
							            <?php endif ?>
									</td>
								</tr>

								<tr>
									<th scope='row'><label for='blogname'>Footer Logo</label></th>
									<td>
										<div class="form-group">
			                                <label for="footer_website_logo" class="col-sm-12 text-start control-label">
			                                    Footer Logo
			                                </label>
			                                <div class="col-sm-12 text-start ">
												<input name="footer_website_logo" id="footer_website_logo" value="<?=$footer_logo_url;?>" size="60" class="regular-text site_half footer_website_logo_url" type="text">
												<a href="#" title="Choose Image" class="footer_website_logo_upload btn btn-info">Upload</a>
											</div>
			                            </div>
									</td>
								</tr>
								<tr>
									<th scope='row'><label for='blogname'>Footer Logo Image</label></th>
									<td>
										<?php if (!empty($footer_logo_url)): ?>
							            	<img class="img-fluid img-thumbnail w-25 mt-2 <?=$footer_logo_url;?>" src="<?=$footer_logo_url;?>" height="100" style="max-width:100%" />
							            <?php endif ?>
									</td>
								</tr>
							</tbody>
						</table>
						<input type='hidden' name='is_web_logo' value='is_web_logo'>
						<input type='hidden' name='is_footer_web_logo' value='is_footer_web_logo'>
						<div class="form-group">
                        	<div class="col-sm-12">
								<input name='submit' id='submit' class='btn btn-default btn-block btn-lg w-100 mt-3 site_save_route' value='Save Changes' type='submit'>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php
		wp_enqueue_style('bootstrap',plugins_url( '/css/bootstrap.min.css' , __FILE__ ));
		wp_enqueue_style('style',plugins_url( '/css/style.css' , __FILE__ ));

		wp_enqueue_media();
		wp_enqueue_script('web',plugins_url( '/js/web.js' , __FILE__ ));

	}
}

if(! function_exists('saveWebsiteLogo')){

	function saveWebsiteLogo(){

		if($_POST['is_web_logo']){
			$logo_url	=	sanitize_text_field($_POST['website_logo']);
			update_option('website_logo_unique', $logo_url);
		}
		if($_POST['is_footer_web_logo']){
			$logo_url	=	sanitize_text_field($_POST['footer_website_logo']);
			update_option('footer_website_logo_unique', $logo_url);
		}
	}
}
// Hooks
add_action('admin_menu', 'websiteLogoPage');
add_action('admin_init', 'saveWebsiteLogo');
?>