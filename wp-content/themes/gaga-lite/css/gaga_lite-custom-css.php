<?php
    function gaga_lite_dynamic_styles () {
    $body_font_size = get_theme_mod('gaga-lite-body_font_size');
    $heading1= get_theme_mod('gaga-lite-heading_1_size');
    $heading2= get_theme_mod('gaga-lite-heading_2_size');
    $heading3= get_theme_mod('gaga-lite-heading_3_size');
    $heading4= get_theme_mod('gaga-lite-heading_4_size');
    $heading5= get_theme_mod('gaga-lite-heading_5_size');
    $heading6= get_theme_mod('gaga-lite-heading_6_size');
    
    if($body_font_size == ''){$body_font_size = '13';}
    
    if($heading1 == '' || $heading1 == 'default'){$heading1 = '24';}
    
    if($heading2 == '' || $heading2 == 'default'){$heading2 = '44';}
   
    if($heading3 == '' || $heading3 == 'default'){$heading3 = '18';}
    
    if($heading4 == '' || $heading4 == 'default'){$heading4 = '16';}
    
    if($heading5 == '' || $heading5 == 'default'){$heading5 = '12';}
    
    if($heading6 == '' || $heading6 == 'default'){$heading6 = '10';}
    
    $body_font_font = get_theme_mod('gaga-lite-body_font_font');
    if($body_font_font == ''){$body_font_font = 'Lato';}
    
    $heading1_font= get_theme_mod('gaga-lite-heading_1_font');
    if($heading1_font == ''){$heading1_font = 'Lato';}
    
    $heading2_font= get_theme_mod('gaga-lite-heading_2_font');
    if($heading2_font == ''){$heading2_font = 'Lato';}
    
    $heading3_font= get_theme_mod('gaga-lite-heading_3_font');
    if($heading3_font == ''){$heading3_font = 'Lato';}
    
    $heading4_font= get_theme_mod('gaga-lite-heading_4_font');
    if($heading4_font == ''){$heading4_font = 'Lato';}
    
    $heading5_font= get_theme_mod('gaga-lite-heading_5_font');
    if($heading5_font == ''){$heading5_font = 'Lato';}
    
    $heading6_font= get_theme_mod('gaga-lite-heading_6_font');
    if($heading6_font == ''){$heading6_font = 'Lato';}
    
    $skin_color = get_theme_mod('gaga-lite-skin_color');
    if($skin_color == ''){$skin_color = '#ed1b2f';}
                                            
    
   
if($body_font_font){
   wp_register_style('gaga-lite-body-font', '//fonts.googleapis.com/css?family='.sanitize_text_field($body_font_font));
           wp_enqueue_style( 'gaga-lite-body-font');
    }
    if($heading1_font){    
   wp_register_style('gaga-lite-heading1_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading1_font));
           wp_enqueue_style( 'gaga-lite-heading1_fon');
       }
 if($heading2_font){
   wp_register_style('gaga-lite-heading2_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading2_font));
           wp_enqueue_style( 'gaga-lite-heading2_font');
       
   }
   if($heading3_font){   
   wp_register_style('gaga-lite-heading3_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading3_font));
           wp_enqueue_style( 'gaga-lite-heading3_font');
       }
 
if($heading4_font){
   wp_register_style('gaga-lite-heading4_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading4_font));
           wp_enqueue_style( 'gaga-lite-heading4_font');
       
   }
if($heading5_font){
   wp_register_style('gaga-lite-heading5_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading5_font));
           wp_enqueue_style( 'gaga-lite-heading5_font');
      }
   if($heading6_font){

   wp_register_style('gaga-lite-heading6_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading6_font));
           wp_enqueue_style( 'gaga-lite-heading6_font');
           }           
       
  
   
   ?>
    
        <style>
            h1{
                font-size: <?php echo absint($heading1).'px !important'; ?>;
                font-family:<?php echo esc_attr($heading1_font).' !important'; ?>;
                 color:<?php echo esc_attr($skin_color).' !important'; ?>
            }
            h2{
                font-size: <?php echo absint($heading2).'px !important'; ?>;
                font-family:<?php echo esc_attr($heading2_font).'!important' ?>;
                color:<?php echo esc_attr($skin_color).' !important'; ?>
                 
            }
            h3{
                font-size: <?php echo absint($heading3).'px !important'; ?>;
                font-family:<?php echo esc_attr($heading3_font).'!important'; ?>;
                 color:<?php echo esc_attr($skin_color).' !important'; ?>
            }
            h4{
                font-size: <?php echo absint($heading4).'px !important'; ?>;
                font-family:<?php echo esc_attr($heading4_font).'!important'; ?>;
                 color:<?php echo esc_attr($skin_color).' !important'; ?>
            }
            h5{
                font-size: <?php echo absint($heading5).'px !important'; ?>;
                font-family:<?php echo esc_attr($heading5_font); ?>;
                 color:<?php echo esc_attr($skin_color).' !important'; ?>
            }
            h6{
                font-size: <?php echo absint($heading6).'px !important'; ?>;
                font-family:<?php echo esc_attr($heading6_font).'!important'; ?>;
                 color:<?php echo esc_attr($skin_color).' !important'; ?>
            }
            body{
                font-size: <?php echo absint($body_font_size).'px !important'; ?>;
                font-family:<?php echo esc_attr($body_font_font).'!important';?>;
                
            }
            .footer_widget_view .widget-title{
                color: #010101;
            }
                        
            .blog_read_more a, .team-post-wrap>a, a.view_all_latest, .portfolio_view_all a, .cta_btn_link a, input.wpcf7-submit, #plx_about_section .combine_content .buy a,.blog_latest_post a.read_more,hr.border,.blog-posts .main_like_comment span, .blog-posts-wrap-latest .sub_like_comment span,.nav-next a,.nav-previous a,.blog_read_more a, .team-post-wrap>a, a.view_all_latest, .portfolio_view_all a, .cta_btn_link a, input.wpcf7-submit, #respond .form-submit input,.testimonial_section .bx-wrapper .bx-pager.bx-default-pager a.active,.port_slide #slider-prev, .port_slide #slider-next,.inner .main_like_comment span,#toggle div,.inner .arcive_read_more a,.reply a,.comment-metadata .edit-link a,#plx_service_section .service-posts-wrap .service_image figure img,.archive_pagination a,.pricing_widget .sign_up_price:hover .pricing-position-outer,.pricing_widget .sign_up_price
            {
                background:<?php echo esc_attr($skin_color).' !important'; ?>
            }
                        
            .team-descr,.highlite,.aptf-tweet-content>a,.entry-footer a,.team_section .team-descr,.slider_area .gaga_lite_slider .bx-pager.bx-default-pager .bx-pager-item a.bx-pager-link.active,.widget-area li:hover a,span.gaga-pricing-plan-sub-text,.slider_area .gaga_lite_slider span.next-page a,.inner .arcive_read_more a:hover,.comment-metadata .edit-link a:hover,.reply a:hover,.main-navigation ul>li a:hover,.inner #respond .form-submit input:hover,.main-navigation .current a,#plx_about_section .combine_content .buy a:hover,.team-post-wrap>a:hover,.blog_latest_post a.read_more:hover,.blog_read_more a:hover,a.view_all_latest:hover,.portfolio_view_all a:hover,.cta_btn_link a:hover,input.wpcf7-submit:hover,.site-info a:hover,.logged-in-as a,.author a,.nav-links a:hover,.nav-previous a:hover:before, .nav-next a:hover:before, .archive_pagination a:hover:before,.comment-author b.fn,.comment-author .fn a,.comment-awaiting-moderation,.widget-area ul.sub-menu>li:hover a,.tagcloud a,.widget h1 a,.archive_pagination a:hover,.comment-respond h3 small a:hover,a.aptf-tweet-reply.aptf-tweet-action-reply,.pricing_widget .sign_up_price:hover,.pricing_widget .sign_up_price:hover .pricing-position-inner:before,strong,span.tags-links,.comment-content p a,.comment-content dl dd a,.comment-content table tbody tr td a,.entry-content a,#wp-calendar tr td a,.about-contents a,a.aptf-tweet-name,.aptf-tweet-content a,.aptf-tweet-content a
            {
                color: <?php echo esc_attr($skin_color).' !important'; ?>;
            }
                        
            #plx_service_section .service-posts-wrap:first-child, #plx_service_section .service-posts-wrap:nth-child(2),#plx_service_section .service-posts-wrap:nth-child(odd),.entry-header h1.entry-title a, h1.widget-title,#respond h3,.slider_area .gaga_lite_slider .bx-pager.bx-default-pager .bx-pager-item a.bx-pager-link.active,.widget-area li:hover,.comments-title,#toggle,.inner .arcive_read_more a:hover,.comment-metadata .edit-link a:hover,.reply a:hover,.inner #respond .form-submit input:hover,#plx_about_section .combine_content .buy a:hover,.team-post-wrap>a:hover,.blog_latest_post a.read_more:hover,.blog_read_more a:hover,.portfolio_view_all a:hover,.cta_btn_link a:hover,input.wpcf7-submit:hover,a.view_all_latest:hover,#plx_service_section .service-posts-wrap,#secondary .widget_search input.search-field,.nav-links a:hover,.widget-area li.menu-item-has-children:hover>a,.archive_pagination a:hover,.pricing_widget .sign_up_price:hover
            {
                border-color:<?php echo esc_attr($skin_color).' !important'; ?>;
            }
                        
            .main_footer
            {
                border-top-color:<?php echo esc_attr($skin_color).' !important'; ?>;
            }
                        
            .fill
            {
                fill:<?php echo esc_attr($skin_color).' !important'; ?>;
            }
            <?php   
            $color = get_theme_mod('gaga-lite-skin_color');
            if($color == ''){$color = '#ed1b2f';}
            $rgb = gaga_lite_hex2rgba(esc_attr($color));
            $rgba = gaga_lite_hex2rgba(esc_attr($color), 0.88);
            ?>
            .portfolio-positing:hover .portfolio_main
            {
                background:<?php echo esc_attr($rgba).' !important'; ?>
            }
                        
                #plx_service_section
            {
                background-color: white;
            }
                        
            <?php $pricing_bg_color = get_theme_mod('gaga-lite-pricing_bg_color');
                if($pricing_bg_color == ''){$pricing_bg_color = '#F5F5F5';}
             ?>
                          
            .widget_gaga_lite_pricing>a:hover .widget_footer,.widget_footer
            {
                background-color:<?php echo esc_attr($pricing_bg_color) ?> ;
            }
            <?php $skin_color1 = get_theme_mod('gaga-lite-skin_color');
                $rgb = gaga_lite_hex2rgba($skin_color1);
                $rgba1 = gaga_lite_hex2rgba($skin_color1, 0.7);
             ?>
                          
            .nav-previous a:hover:after, .nav-next a:hover:after, .archive_pagination a.prev:hover:after, .archive_pagination a.next:hover:after
            {
                background: <?php echo esc_attr($rgba1); ?> ;
            }
        </style>
    <?php
    /** font for body **/           
    $query_args = array(
        'family' => 'Lato:100,300,400,700,900'	
    );
    wp_register_style( 'gaga-font-default', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
    wp_enqueue_style('gaga-font-default');
}
add_action('wp_head', 'gaga_lite_dynamic_styles', 100);
?>