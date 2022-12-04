<?php
class VcJjbActivities extends WPBakeryShortCode {
function __construct() {
    add_action( 'init', array( $this, 'create_shortcode' ), 999 );            
    add_shortcode( 'vc_jsb_activities', array( $this, 'render_shortcode' ) );
}        
public function create_shortcode() {
    // Stop all if VC is not enabled
    if ( !defined( 'WPB_VC_VERSION' ) ) {
        return;
    }        
    // Map blockquote with vc_map()
    vc_map( array(
        'name'          => __('Activity', 'jsbmedia'),
        'base'          => 'vc_jsb_activities',
        'description'  	=> __( '', 'jsbmedia' ),
        'category'      => __( 'JSB media', 'jsbmedia'),                
        'params' => array(
            array(
                "type" => "textarea_html",
                "holder" => "div",
                "class" => "",                     
                "heading" => __( "Title", 'jsbmedia' ),
                "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
                "value" => __( 'Title can add <span class="span2">color settings</span>', 'jsbmedia' ),
                "description" => __( "Enter Title.", 'jsbmedia' )
            ),    
            // array(
            //     "type" => "vc_link",
            //     "class" => "",
            //     "heading" => __( "Blockquote Cite", 'jsbmedia' ),
            //     "param_name" => "blockquote_cite",
            //     "description" => __( "Add Citiation Link and Source Name", 'jsbmedia' ),                                                
            // ),    
            array(
                'type'          => 'textarea',
                'heading'       => __( 'Description', 'jsbmedia' ),
                'param_name'    => 'description',
                'value'             => __( '', 'jsbmedia' ),
                'description'   => __( 'Enter description.', 'jsbmedia' ),
            ),
            array(
                'type'          => 'attach_image',
                'heading'       => __( 'Image', 'jsbmedia' ),
                'param_name'    => 'jsb_image',
                'value'             => __( '', 'jsbmedia' ),
                'description'   => __( 'Add image or icon.', 'jsbmedia' ),
            ),               
        ),
    ));             
}
public function render_shortcode( $atts, $content, $tag ) {
    $atts = shortcode_atts(array(
        'title'   => '',
        'description'      => '',
        'extra_class'       => '',
        'element_id'        => '',
        'jsb_image'        => ''
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
    $title         = esc_attr($atts['title']);
    $desc         = esc_attr($atts['description']);
    $output .= '
            <div class="card-cs">
                <div class="image"><img src="'.$image[0].'" /></div>
                <h2 class="title">'.strip_tags($content,'<span>').'</h2>
                <div class="desc">'.$desc.'</div>
            </div>
';
    return $output;                  
}
}
new VcJjbActivities();