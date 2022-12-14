<?php
class VcJsbResults extends WPBakeryShortCode {
function __construct() {
    add_action( 'init', array( $this, 'create_shortcode' ), 999 );            
    add_shortcode( 'vc_jsb_results', array( $this, 'render_shortcode' ) );
}        
public function create_shortcode() {
    // Stop all if VC is not enabled
    if ( !defined( 'WPB_VC_VERSION' ) ) {
        return;
    }        
    // Map blockquote with vc_map()
    vc_map( array(
        'name'          => __('Results', 'jsbmedia'),
        'base'          => 'vc_jsb_results',
        'description'  	=> __( '', 'jsbmedia' ),
        'category'      => __( 'JSB media', 'jsbmedia'),                
        'params' => array(   
            array(
                'type'          => 'textarea',
                'heading'       => __( 'Number in circle', 'jsbmedia' ),
                'param_name'    => 'title_number',
                'value'             => __( '', 'jsbmedia' ),
                'description'   => __( 'Enter title number EX: <b>250K</b>', 'jsbmedia' ),
                'admin_label'         =>true
            ),
            array(
                'type'          => 'textarea',
                'heading'       => __( 'Title text', 'jsbmedia' ),
                'param_name'    => 'title_txt',
                'value'             => __( '', 'jsbmedia' ),
                'description'   => __( 'Enter title text.', 'jsbmedia' ),
            ),
            array(
                'type'          => 'dropdown',
                'heading'       => __( 'Size', 'jsbmedia' ),
                'param_name'    => 'size',
                'value'      => array(
                    esc_html__( 'Big', 'jsbmedia' )  => '46',
                    esc_html__( 'Normal', 'jsbmedia' ) => '28',
                    esc_html__( 'Small', 'jsbmedia' ) => '22',
                ),
                'description'   => __( 'Enter title text.', 'jsbmedia' ),
            ),
             
        ),
    ));             
}
public function render_shortcode( $atts, $content, $tag ) {
    $atts = shortcode_atts(array(
        'title_number'   => '',
        'title_txt'   => '',
        'description'      => '',
        'extra_class'       => '',
        'element_id'        => '',
        'jsb_image'        => '',
        'size'        => '',
    ), $atts);
    $output = '';
    //Content 
    $content            = wpb_js_remove_wpautop($content, true);
    $quote_author       = esc_html($atts['quote_author']);
    //Cite Link
    $blockquote_source  = vc_build_link( $atts['blockquote_cite'] );
    $blockquote_title   = esc_html($blockquote_source["title"]);
    $blockquote_url     = esc_url( $blockquote_source['url'] );
    //Class and Id
    $extra_class        = esc_attr($atts['extra_class']);
    $element_id         = esc_attr($atts['element_id']);
    $image         = wp_get_attachment_image_src($atts['jsb_image'],'large');
    $title_number         = esc_attr($atts['title_number']);
    $title_txt         = esc_attr($atts['title_txt']);
    $desc         = esc_attr($atts['description']);
    $size         = $atts['size'];
    $output .= '
    <div class="childrow">
    <div class="card-cs-oter">
            <div class="card-cs">
                <div class="title_nmbr title_nmbr_'.$size.'">'.$title_number.'</div>
                <div class="desc">'.str_replace( "<br />\n", "\n", $title_txt ).'</div>
            </div>
            </div>
            </div>
';
    return $output;                  
}
}
new VcJsbResults();