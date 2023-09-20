jQuery(document).ready(function($) {
    $('.js-example-basic-multiple').select2();
    $('.aff_header_logo_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.aff_header_logo_img').attr('src', attachment.url);
            $('.aff_header_logo_img_url').val(attachment.url);
        })
        .open();
    });   

    $('.aff_sticky_logo_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.aff_sticky_logo_img').attr('src', attachment.url);
            $('.aff_sticky_logo_img_url').val(attachment.url);
        })
        .open();
    }); 

    $('.aff_favicon_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.aff_favicon_img').attr('src', attachment.url);
            $('.aff_favicon_img_url').val(attachment.url);
        })
        .open();
    }); 

    $('.aff_footer_logo_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.aff_footer_logo_img').attr('src', attachment.url);
            $('.aff_footer_logo_img_url').val(attachment.url);
        })
        .open();
    });

    $('.hero_bg_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.hero_bg_img').attr('src', attachment.url);
            $('.hero_bg_img_url').val(attachment.url);
        })
        .open();
    });

        $('.hero_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.hero_img').attr('src', attachment.url);
            $('.hero_img_url').val(attachment.url);
        })
        .open();
    });
});
