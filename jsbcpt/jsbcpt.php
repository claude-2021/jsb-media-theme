<?php
function case_study_post_type() {
    register_post_type( 'Case Study',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'hierarchical'=>false,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'rewrite'   => array( 'slug' => 'casestudy' ),
            'menu_position' => 5,
            'menu_icon' => 'dashicons-editor-ul',
        // 'taxonomies' => array('cuisines', 'post_tag') // this is IMPORTANT
        )
    );
}
add_action( 'init', 'case_study_post_type' );