<?php
class VcJjbHeader extends WPBakeryShortCode {
function __construct() {
    add_action( 'init', array( $this, 'create_shortcode' ), 999 );            
    add_shortcode( 'vc_jsb_header', array( $this, 'render_shortcode' ) );
}        
public function create_shortcode() {
    // Stop all if VC is not enabled
    if ( !defined( 'WPB_VC_VERSION' ) ) {
        return;
    }        
    // Map blockquote with vc_map()
    vc_map( array(
        'name'          => __('Case Study Header', 'jsbmedia'),
        'base'          => 'vc_jsb_header',
        'description'  	=> __( '', 'jsbmedia' ),
        'category'      => __( 'JSB media', 'jsbmedia'),                
        'params' => array(
            array(
                "type" => "textarea_html",
                "holder" => "div",
                "class" => "",                     
                "heading" => __( "Title", 'jsbmedia' ),
                "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
                "value" => __( 'Color1 <span class="span2">Color2</span>', 'jsbmedia' ),
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
    $output = '';
    $atts = (shortcode_atts(array(
        'title'   => '',
        'description'      => '',
        'extra_class'       => '',
        'element_id'        => '',
        'jsb_image'        => ''
    ), $atts));
    //Content 
    $content            = wpb_js_remove_wpautop($content, true);
    $image         = wp_get_attachment_image_src($atts['jsb_image'],'large');
    $title         = esc_attr($atts['title']);
    $desc         = esc_attr($atts['description']);
    $output .= '
    <section id="CaseStudyHeader">
        <div class="container" data-aos="fade-up">
            <div class="flex relative">
                <div class="">
                    <h2 class="span3">'.$content.'</h2>
                    <div class="desc">'.$desc.'</div>
                </div>
                <div class="image">
                    <img src="'.$image[0].'" />
                </div>
            </div>
        </div>
    </section>';
    return $output;                  
}
}
new VcJjbHeader();