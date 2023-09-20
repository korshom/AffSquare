jQuery(document).ready(function($) {
    $('.website_logo_upload').click(function(e) {
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
            $('.website_logo').attr('src', attachment.url);
            $('.website_logo_url').val(attachment.url);
        })
        .open();
    }); 
    $('.footer_website_logo_upload').click(function(e) {
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
            $('.footer_website_logo').attr('src', attachment.url);
            $('.footer_website_logo_url').val(attachment.url);
        })
        .open();
    }); 
});
