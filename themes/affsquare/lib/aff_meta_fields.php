<?php 
/*********************************

Add Meta Box To programs

**********************************/

function aff_data_metabox() {

    add_meta_box( "team_extra", "Member Data" , "aff_team_data_callback", array('team'), "normal" );
}
add_action( 'add_meta_boxes', 'aff_data_metabox' );

function aff_team_data_callback($object, $box ){
    $member_position      = get_post_meta( $object->ID, 'member_position', true );
    $member_facebook      = get_post_meta( $object->ID, 'member_facebook', true );
    $member_twitter       = get_post_meta( $object->ID, 'member_twitter', true );
    $member_instagram     = get_post_meta( $object->ID, 'member_instagram', true );
    $member_linkedin      = get_post_meta( $object->ID, 'member_linkedin', true );
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="product-card card">
                <div class="card-header">
                    Job Title
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <label>
                                        Job Title
                                    </label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <input type="text"  name="member_position" class="form-control" value="<?=$member_position;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-card card">
                <div class="card-header">
                    Facebook Link
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                    <label>
                                        <span class="dashicons dashicons-facebook-alt"></span>
                                    </label>
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-11">
                                    <input type="text"  name="member_facebook" class="form-control" value="<?=$member_facebook;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        <div class="col-md-6">
            <div class="product-card card">
                <div class="card-header">
                    Twitter Link
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                    <label>
                                        <span class="dashicons dashicons-twitter-alt"></span>
                                    </label>
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-11">
                                    <input type="text"  name="member_twitter" class="form-control" value="<?=$member_twitter;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="product-card card">
                <div class="card-header">
                    Instagram Link
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                    <label>
                                        <span class="dashicons dashicons-instagram"></span>
                                    </label>
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-11">
                                    <input type="text"  name="member_instagram" class="form-control" value="<?=$member_instagram;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="product-card card">
                <div class="card-header">
                    Linked In Link
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                    <label>
                                        <span class="dashicons dashicons-linkedin"></span>
                                    </label>
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-11">
                                    <input type="text"  name="member_linkedin" class="form-control" value="<?=$member_linkedin;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_action( 'save_post', 'aff_save_custom_meta', 10, 2 );
function aff_save_custom_meta($post_id){
//var_dump($_POST);die();
    $keys = ['member_position','member_facebook','member_twitter','member_instagram','member_linkedin'];

    foreach ($keys as $key) {

       if( isset($_POST[$key]) ){
            update_post_meta($post_id, $key, $_POST[$key]);
        }
        else
            if ($_POST[$key] === '')  {
               delete_post_meta($post_id,$key);
                
            }elseif (in_array($key, []) && !$_POST[$key]){
                delete_post_meta($post_id,$key);
            }
    }

}
