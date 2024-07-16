<?php 


   $header_footer_url = admin_url( 'edit.php?post_type=qheader-footer' );
  // Control core classes for avoid errors
  if( class_exists( 'CSF' ) ) {

      //
      // Set a unique slug-like ID
      $post_prefix = 'bisy_page_options';
    
      //
      // Create a metabox for post
      CSF::createMetabox( $post_prefix, array(
        'title'  => esc_html__('Settings','bisy'),
        'post_type' => 'page',
      ) );
    
      // Banner section
      CSF::createSection( $post_prefix, array(
        'title'  => esc_html__('Banner','bisy'),
        'fields' => array(

          array(
              'id'      => 'banner_page_title',
              'type'    => 'text',
              'title'   => esc_html__( 'Page Banner', 'bisy' ),
              
          ), 

        
          array(

            'id'      => 'banner_page_image',
            'type'    => 'background',
            'title'   => esc_html__( 'Upload Background', 'bisy' ),
            'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'bisy' ),
            'output' => '.page .page-banner-section .page-banner'
          ),


          array(

            'id'      => 'banner_page_overlay_color',
            'type'    => 'background',
            'title'   => esc_html__( 'Overlay Color', 'bisy' ),
            'output' => '.page .page-banner:after',
            'background_gradient'   => true,
            'background_image'      => false,
            'background_origin'     => true,
            'background_clip'       => true,
            'background_blend_mode' => true,
          ),

            array(
              'id'    => 'banner_page_image_opacity',
              'type'  => 'slider',
              'title' => esc_html__( 'Overlay Opacity', 'bisy' ),
              'min'     => 0,
              'max'     => 1,
              'step'    => 0.1,
              'unit'        => ' ',
              'output_mode' => 'opacity',
              'output'      => '.page .page-banner:after'
          ),

            array(
              'id'     => 'banner_page_title_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Page Title Color', 'bisy' ),
              'output' => '.page .page-banner .banner-title'
            ),

            array(
                'id'     => 'banner_page_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Breadcrumb Color', 'bisy' ),
                'output' => ' .page .page-banner .breadcrumb li , .page .page-banner .breadcrumb li a, .page .page-banner .breadcrumb',
                'output_important' => true
            ),

            array(
              'id'          => 'banner_page_breadcrumb_dot_color',
              'type'        => 'color',
              'output_mode' => 'background-color',
              'title'       => esc_html__( 'Breadcrumb Dot Color', 'bisy' ),
              'output'      => '.page .breadcrumb span'
          ),

       
        )
      ) );
    
      //
      // Header section
      CSF::createSection( $post_prefix, array(
        'title'  => 'Header',
        'fields' => array(

             array(
                'id'      => 'header_style_override',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Override Header', 'bisy' ),
                'desc'    => esc_html__( 'If you want to override header style you can set ( YES / NO )', 'bisy' ),
                'default' => false,
            ),
       
            array(
              'id'      => 'header_style',
              'type'    => 'image_select',
              'title'   => esc_html__( 'Header Style', 'bisy' ),
              'desc'    => esc_html__( 'Select the header style which you want to show on your website.', 'bisy' ),
              'options' => array(
                'style1' => BISY_IMG. '/admin/header/header-1.png',
                'style2' => BISY_IMG. '/admin/header/header-2.png',
                'style3' => BISY_IMG. '/admin/header/header-3.png',
              
              ),
              'default' => 'style1',
              'dependency' => array( 'header_style_override', '==', 'true' ),
            ),

            array(
              'id'    => 'header_logo',
              'type'  => 'media',
              'title' => esc_html__('Header Logo','bisy'),
          ),
            
            array(
                'id'      => 'enable_button_override',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable cta button', 'bisy' ),
                'desc'    => esc_html__( 'If you want to override Button option you can set ( YES / NO )', 'bisy' ),
                'default' => false,
              ),


              array(
                  'id'      => 'cta_btn_background',
                  'type'    => 'background',
                  'title'   => esc_html__( 'btn background color', 'bisy' ),
                  'desc'    => esc_html__( 'Set the cta button background form here.', 'bisy' ),
                  'default' => array(
                      'image'      => '',
                      'repeat'     => 'repeat',
                      'position'   => 'center center',
                      'attachment' => 'scroll',
                      'size'       => '',
                      'color'      => '',
                  ),
                  'output_important'=> true,
                  'output' =>'.page .header-03 .join-btn',
                  'dependency' => array( 'header_style', '==', 'style3' ),
              ),   
              
              array(
                'id'      => 'header_button_box_shadow',
                'type'    => 'color',
                'title'   => esc_html__( 'Shadow Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the shadow color by color picker', 'bisy' ),
                'default' => '',
              ),


              array(
                'id'      => 'catecories_dropdown_background',
                'type'    => 'background',
                'title'   => esc_html__( 'catecories dropdown color', 'bisy' ),
                'desc'    => esc_html__( 'Set the catecories dropdown background form here.', 'bisy' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => '',
                    'color'      => '',
                ),
                'output_important'=> true,
                'output' =>'.page .catecories-box',
                'dependency' => array( 'header_style', '==', 'style3' ),
              ),
                array(
                    'id'      => 'catecories_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Catecories Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set the catecories color by color picker', 'bisy' ),
                    'default' => '',
                    'output'  => '.page .catecories-box select, .page .catecories-box::after'
                ),

                array(
                    'id'      => 'user_background',
                    'type'    => 'background',
                    'title'   => esc_html__( 'user background color', 'bisy' ),
                    'desc'    => esc_html__( 'Set the user background form here.', 'bisy' ),
                    'default' => array(
                        'image'      => '',
                        'repeat'     => 'repeat',
                        'position'   => 'center center',
                        'attachment' => 'scroll',
                        'size'       => '',
                        'color'      => '',
                    ),
                    'output_important'=> true,
                    'output' =>'.page .header-03 .user-btn',
                    'dependency' => array( 'header_style', '==', 'style3' ),
                ),
                array(
                    'id'      => 'user_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'user Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set the user color by color picker', 'bisy' ),
                    'default' => '',
                    'output'  => '.page .header-03 .user-btn'
                ),              
                array(
                  'id'      => 'header_user_box_shadow',
                  'type'    => 'color',
                  'title'   => esc_html__( 'user Shadow Color', 'bisy' ),
                  'desc'    => esc_html__( 'Set the user shadow color by color picker', 'bisy' ),
                  'default' => '',
                ),
             

             array(
                  'id'      => 'logo',
                  'type'    => 'upload',
                  'title'   => esc_html__( 'Upload Main Logo', 'bisy' ),
                  'desc'    => esc_html__( 'Upload main logo width 180px and height 65px.', 'bisy' ),
                  'default' => '',
                  'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'bisy' ),
             ),

             array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Background', 'bisy' ),
            ),

            array(
                'id'      => 'menu_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Background', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu background form here.', 'bisy' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => '',
                    'color'      => '',
                ),
                'output_important'=> true,
                'output' =>'.page header'
            ),
         
            array(
                'id'      => 'sticky_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Sticky Background', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu sticky background form here.', 'bisy' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => '',
                    'color'      => '',
                ),
                'output_important'=> true,
                'output' =>'.page header.fix-header'
            ),
         
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Color', 'bisy' ),
            ),

            array(
                'id'      => 'menu_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu color by color picker', 'bisy' ),
                'default' => '',
                'output'  => '.page header .navbar-expand-lg .navbar-nav li > a'
            ),
            array(
                'id'      => 'menu_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Hover Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu hover color by color picker', 'bisy' ),
                'default' => '',
               
                'output'  => '.page header .navbar-expand-lg .navbar-nav li:hover > a'
            ),
            array(
              'id'      => 'menu_underline_color',
              'type'    => 'background',
              'title'   => esc_html__( 'Menu Underline Color', 'bisy' ),
              'desc'    => esc_html__( 'Set the menu Underline color form here.', 'bisy' ),
              'default' => array(
                  'image'      => '',
                  'repeat'     => 'repeat',
                  'position'   => 'center center',
                  'attachment' => 'scroll',
                  'size'       => '',
                  'color'      => '',
              ),
              'output_important'=> true,
              'output' =>'.page .header-03 .navbar-expand-lg .navbar-nav li a::after'
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Sticky Color', 'bisy' ),
            ),

            array(
                'id'      => 'menu_sticky_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Sticky Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu sticky color by color picker', 'bisy' ),
                'default' => '',
                'output'  => ' .page header.fix-header .navbar-expand-lg .navbar-nav li > a',
               
            ),
            array(
                'id'      => 'menu_sticky_hover_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Sticky Hover Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu sticky hover color by color picker', 'bisy' ),
                'default' => '',
                'output'  => ' .page header.fix-header .navbar-expand-lg .navbar-nav li > a:hover'
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Dropdown Color & Hover', 'bisy' ),
            ),
            array(
                'id'      => 'menu_dropdown_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu dropdown color by color picker', 'bisy' ),
                'default' => '',
                'output'  => '.page header .navbar-expand-lg .navbar-nav li .sub-menu a',
                'output_important' => true
            ),
            array(
                'id'      => 'menu_dropdown_hover__text_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Hover Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu dropdown hover color by color picker', 'bisy' ),
                'default' => '',
                'output'  => '.page header .navbar-expand-lg .navbar-nav li .sub-menu a:hover',
                'output_important' => true
            ),
            array(
                'id'      => 'menu_dropdown_hover_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Hover bgColor', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu dropdown hover color by color picker', 'bisy' ),
                'default' => '',
                'output_mode' => 'background-color',
                'output'  => '.page .navbar-expand-lg .navbar-nav li .sub-menu a:hover',
                'output_important' => true
            ),

            array(
                'id'      => 'menu_dropdown_hover_background',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Background Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the dropdown background color by color picker', 'bisy' ),
                'default' => '',
                'output_mode' => 'background-color',
                'output'  => '.page header .navbar-expand-lg .navbar-nav li .sub-menu a',
                'output_important' => true
            ), 

        )
      ) );

   

       // Elementor Header section
       CSF::createSection( $post_prefix, array(
        'title'  => esc_html__('Elementor Header Footer','bisy'),
        'fields' => array(
    
           // elementor header footer
          array(
            'id'      => 'builder_header_layout_style',
            'type'    => 'Select',
            'title'   => esc_html__('Header','bisy'),
            'options' => bisy_header_footer_templates('header'),
            'desc'    => esc_html__('Create Header from','bisy'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','bisy').'</a>',
          ),

          array(
            'id'      => 'builder_footer_layout_style',
            'type'    => 'Select',
            'title'   => esc_html__('Footer','bisy'),
            'options' => bisy_header_footer_templates('footer'),
            'desc'    => esc_html__('Create Footer from','bisy'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','bisy').'</a>',
          ),


    
        )
      ) );
      // newslatter
      CSF::createSection( $post_prefix, array(
        'title'  => esc_html__('Footer','bisy'),
        'fields' => array(

                array(
                  'id'      => 'newslatter_enable',
                  'type'    => 'switcher',
                  'title'   => esc_html__( 'Enable Newslatter', 'bisy' ),
                  'desc'    => esc_html__( 'If you want to override Newslatter Settings  you can set ( YES / NO )', 'bisy' ),
                  'default' => true,
                ),
                
                 
                array(
                  'id'      => 'override_footer',
                  'type'    => 'switcher',
                  'title'   => esc_html__( 'Override Footer style', 'bisy' ),
                  'desc'    => esc_html__( 'If you want to override Footer  Settings  you can set ( YES / NO )', 'bisy' ),
                  'default' => false,
                ),



              array(
                'id'      => 'footer_copyright__bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Footer Background ', 'bisy' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'bisy' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                    'color'      => '',
                ),
                'output' => '.page .footer-area',
               
              ),

              array(
                  'id'          => 'footer_sidebars_padding',
                  'type'        => 'spacing',
                  'title'   => esc_html__( 'Footer Padding', 'bisy' ),
                  'output'      => '.page .footer-area',
                  'output_mode' => 'padding', // or margin, relative
                  'default'     => array(
                  'unit'      => 'px',
                  ),
              ),

              array(
                'id'          => 'footer_sidebars_margin',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Footer Margin', 'bisy' ),
                'output'      => '.page .footer-area',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                'unit'      => 'px',
                ),
            ),
            
              array(
                'id'        => 'footer_topbar_layout',
                'type'      => 'image_select',
                'title'   => esc_html__( 'Footer Topbar Layout', 'bisy' ),
                'options'   => array(

                  'layout-1' => BISY_IMG.'/admin/footer/topbar.png',
                  'layout-2' => BISY_IMG.'/admin/footer/topbar-mailchimp.png',
                  
                 
                ),
                'default'   => 'layout-1'
              ),

              array(
                'id'    => 'topbar_2_background_image',
                'type'  => 'background',
                'title' => esc_html__( 'Topbar Background', 'bisy' ),
                'output' => '.page .footer-area .cta-wrapper,.page .footer-area .cta-mailchimp'
              ),
             
            array(
                'id'      => 'footer_topbar_title_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Heading Color', 'bisy' ),
                'desc'    => esc_html__( 'Set footer Top bar title color form here.', 'bisy' ),
                'output' => '.page .footer-area .cta-wrapper h3, .page .footer-area .cta-mailchimp h3'
            ),

            array(
                'id'      => 'footer_topbar_button_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Button Color', 'bisy' ),
                'desc'    => esc_html__( 'Set footer Top bar content color form here.', 'bisy' ),
                'output' => '.page .footer-area .cta-wrapper .bisylms-btn',
                'dependency' => array( 'footer_topbar_layout', '==', 'layout-1' ),
            ),

         
        )
      ) );
      /*-----------------------------------
          CUSTOM CSS SECTION
      ------------------------------------*/
      CSF::createSection( $post_prefix,
        array(
          'title'  => esc_html__( 'Custom CSS', 'bisy' ),
              'parent' => 'Page_Meta_Tab',
          'fields' => array(
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Page Custom Css', 'bisy' ),
            ),
                  array(
                      'id'       => 'page_cs_css',
                      'type'     => 'code_editor',
                      'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in this page.', 'bisy' ),
                      'settings' => array(
                          'mode'        => 'css',
                          'theme'       => 'dracula',
                          'tabSize'     => 4,
                          'smartIndent' => true,
                          'autocorrect' => true,
                      ),
                  ),
          )
        )
      );
  }