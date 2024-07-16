<?php

namespace Bisy\Setup;
use Bisy\Core\Hook\Bisy_Unyson_Google_Fonts;

/**
* Enqueue.
*/

class InlineStyle  {
    /**
    * register default hooks and actions for WordPress
    * @return
    */

    public function register()
    {
        add_action( 'wp_enqueue_scripts',  array( $this, 'dynamic_style' ) );
    }

    public function dynamic_style() {
       
        $unit                                = 'px';
        $preloader_bg                        = bisy_option('preloader_bg');
        $body_text_color                     = bisy_option('main_text_color');
        $sidebar_widget_title_margin_bottom  = bisy_option('sidebar_widget_title_margin_bottom');
        $sidebar_widget_title_margin_top     = bisy_option('sidebar_widget_title_margin_top');

        $copyright_padding_top               = bisy_option('copyright_padding_top');
        $copyright_padding_bottom            = bisy_option('copyright_padding_bottom');
        $copyright_margin_top                = bisy_option('copyright_margin_top');
        $footer_widget_content_bottom_margin = bisy_option('footer_widget_content_bottom_margin');
        // preloader
        $custom_css = '';
	
       // Banner page Overlay Color Opacity
       if(is_page()){

             $header_button_box_shadow= bisy_meta_option( get_the_ID(), 'header_button_box_shadow' );
             if($header_button_box_shadow !=''){
                $custom_css .="
                .page .header-03 .join-btn:hover{
                      box-shadow: 0px 14px 20px 0px $header_button_box_shadow;
                  }
              ";
             }


             $header_user_box_shadow= bisy_meta_option( get_the_ID(), 'header_user_box_shadow' );
             if($header_user_box_shadow !=''){
                $custom_css .="
                .page .header-03 .user-btn:hover{
                      box-shadow: 0px 14px 20px 0px $header_user_box_shadow;
                  }
              ";
             }

            $banner_page_image_opacity  = '';

            if(bisy_meta_option( get_the_ID(), 'banner_page_image_opacity' ) != ''){
                $banner_page_image_opacity =  bisy_meta_option( get_the_ID(), 'banner_page_image_opacity' );
            }elseif(bisy_option( 'banner_page_image_opacity' ) !=''){
              $banner_page_image_opacity =  bisy_option( 'banner_page_image_opacity' );
            }

             // opacity
            if($banner_page_image_opacity != ''){
                $custom_css .="
                .page-banner-section .page-banner{
                      opacity:$banner_page_image_opacity;
                  }
              ";
            }
          
          
       }else{
           
        
        $banner_blog_image_opacity  = '';

        if(bisy_option( 'banner_blog_image_opacity' ) !=''){
          $banner_blog_image_opacity =  bisy_option( 'banner_blog_image_opacity' );
        }

         // opacity
        if($banner_blog_image_opacity != ''){
            $custom_css .="
            .blog-banner .page-banner:after{
                  opacity:$banner_blog_image_opacity;
              }
          ";
        }  

       } 
       // page banner end

  
      
        // copyright
        if($copyright_margin_top != ''){
            $custom_css .="
            .footer-area .copyright{
                margin-top: $copyright_margin_top$unit
              }
          ";
        } 
        
        if($copyright_padding_top != ''){
            $custom_css .="
            .footer-area .copyright{
                padding-top: $copyright_padding_top$unit
              }
          ";
        }
        
        if($copyright_padding_bottom != ''){
            $custom_css .="
            .footer-area .copyright{
                  padding-bottom: $copyright_padding_bottom$unit;
              }
          ";
        }
        
        if($body_text_color != ''){
            $custom_css .="
            .btn-comments,.post.sticky .sticky-meta-featured, .bisylms-pagination li a{
                  background: $body_text_color;
              }
              
          ";
        } 

        /*----------------------------------
            CSS ALL DEVICE
        -----------------------------------*/
        if( bisy_option( 'custom_css' ) ){
            $custom_css .= bisy_option( 'custom_css' );
        }



        /*----------------------------------
            CSS IPAD DEVICE
        -----------------------------------*/
        if( bisy_option( 'custom_css_ipad' ) ){
            $custom_css.="
                @media (min-width: 1024px) and (max-width: 1400px) {
                    ".bisy_option( 'custom_css_ipad' )."
                }
            ";
        }
        /*----------------------------------
            CSS TABLET DEVICE
        -----------------------------------*/
        if( bisy_option( 'custom_css_tablet' ) ){
            $custom_css.="
                @media (min-width: 768px) and (max-width: 991px) {
                    ".bisy_option( 'custom_css_tablet' )."
                }
            ";
        }

        /*----------------------------------
            CSS MOBILE DEVICE
        -----------------------------------*/
        if( bisy_option( 'custom_css_mobile' ) ){
            $custom_css.="
                @media only screen and (max-width: 767px) {
                    ".bisy_option( 'custom_css_mobile' )."
                }
            ";
        }

        $page_cs_css =  bisy_meta_option( get_the_ID(), 'page_cs_css' );
        /*----------------------------------
            CSS ALL DEVICE PAGE CSS
        -----------------------------------*/
        if( $page_cs_css ){
            $custom_css .=  $page_cs_css;
        }
     
        wp_add_inline_style( 'bisy-style', $custom_css );
    }

}