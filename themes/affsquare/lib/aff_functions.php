<?php
function aff_get_team($no){
    $args = array(
       'post_type'       => 'team',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}

function aff_get_team_with_select_team($no,$posts_in){
    $args = array(
       'post_type'       => 'team',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'ASC',
       'post__in'        =>  $posts_in,
    );
    return $posts = new WP_Query( $args );
}