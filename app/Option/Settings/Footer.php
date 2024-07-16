<?php 
        
        // footer a top-tab
        CSF::createSection( BISY_OPTION_KEY, array(
            'id'    => 'footer_tab',                         // Set a unique slug-like ID
            'title' => esc_html__( 'Footer', 'bisy' ),
            'icon'  => 'fa fa-cog',
        ) ); 

        // Footer
        CSF::createSection( BISY_OPTION_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Footer Color & Background', 'bisy' ),
            'icon'   => 'fa fa-paint-brush',
            'fields' => array(
                array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Settings', 'bisy' ),
                ),

                
               
                array(
                    'id'      => 'footer_style',
                    'type'    => 'image_select',
                    'title'   => esc_html__( 'Footer Style', 'bisy' ),
                    'desc'    => esc_html__( 'Select the Footer style which you want to show on your website.', 'bisy' ),
                    'options' => array(
                        'style1'       => BISY_IMG. '/admin/footer/style1.png',
                    
                       
                    ),
                    'default' => 'style1',
                ),
              
              
                array(
                    'id'      => 'footer_bg',
                    'type'    => 'background',
                    'title'   => esc_html__( 'Footer Background ', 'bisy' ),
                    'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'bisy' ),
                    'default' => array(
                        'image'      => '',
                        'repeat'     => 'no-repeat',
                        'position'   => 'center center',
                        'attachment' => 'scroll',
                        'size'       => 'cover',
                        'color'      => '#182044',
                    ),
                    'output' => '.footer-area',
                    'dependency' => array( 'footer_style', '==', 'style1' ),
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
                        'color'      => '#182044',
                    ),
                    'output' => '.footer-area',
                    
                ),
               

                array(
                    'id'          => 'news_footer_sidebars_margin',
                    'type'        => 'spacing',
                    'title'   => esc_html__( 'Footer Margin', 'bisy' ),
                    'output'      => '.footer-area',
                    'output_mode' => 'margin', // or margin, relative
                    'default'     => array(
                    'unit'      => 'px',
                    ),
                ),

                array(
                    'id'          => 'news_footer_sidebars_padding',
                    'type'        => 'spacing',
                    'title'   => esc_html__( 'Footer Padding', 'bisy' ),
                    'output'      => '.footer-area',
                    'output_mode' => 'padding', // or margin, relative
                    'default'     => array(
                    'unit'      => 'px',
                    ),
                ),
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Widget Title', 'bisy' ),
                ),
                array(
                    'id'          => 'news_footer_widget_title_sidebars_margin',
                    'type'        => 'spacing',
                    'title'   => esc_html__( 'Footer Widget Title Margin', 'bisy' ),
                    'output'      => '.footer-area .widget .widget-title',
                    'output_mode' => 'margin', // or margin, relative
                    'default'     => array(
                    'unit'      => 'px',
                    ),
                ),

                array(
                    'id'          => 'news_footer_widget_title_sidebars_padding',
                    'type'        => 'spacing',
                    'title'   => esc_html__( 'Footer Widget Title Padding', 'bisy' ),
                    'output'      => '.footer-area .widget .widget-title',
                    'output_mode' => 'padding', // or margin, relative
                    'default'     => array(
                    'unit'      => 'px',
                    ),
                ),
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Widget Content', 'bisy' ),
                ),
                array(
                    'id'          => 'news_footer_widget_sidebars_padding',
                    'type'        => 'spacing',
                    'title'   => esc_html__( 'Footer widget Padding', 'bisy' ),
                    'output'      => '.footer-area .widget',
                    'output_mode' => 'padding', // or margin, relative
                    'default'     => array(
                    'unit'      => 'px',
                    ),
                ),

                array(
                    'id'          => 'news_footer_widget_sidebars_margin',
                    'type'        => 'spacing',
                    'title'   => esc_html__( 'Footer widget Margin', 'bisy' ),
                    'output'      => '.footer-area .widget',
                    'output_mode' => 'margin', // or margin, relative
                    'default'     => array(
                    'unit'      => 'px',
                    ),
                ),
                
                array(
                    'id'     => 'footer_border_color',
                    'type'   => 'border',
                    'title'  => esc_html__( 'Border', 'bisy' ),
                    'output' => '.footer-area',
                  
                ),
             
                array(
                  'type'    => 'subheading',
                  'content' => esc_html__( 'Footer Text & Link Color', 'bisy' ),
                ),
                array(
                    'id'      => 'footer_widget_title_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Widget Title Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set footer widget title color form here.', 'bisy' ),
                    'output' => '.footer-area .widget .widget-title'
                ),
                array(
                    'id'      => 'footer_widget_content_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Widget content Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set footer widget content color form here.', 'bisy' ),
                    'output' => '.footer-area .widget, .footer-area .comment-author-link a.url, .footer-area .recentcomments,.footer-area .tagcloud a, .footer-area .widget_archive ul li a, .footer-area .widget_categories ul li a, .footer-area .widget_meta ul li a,footer .widget ul li,select option,.footer-area .widget_pages ul li a,.footer-area .widget_rss li .rss-date,.footer-area .widget_rss li cite,.footer-area .widget_nav_menu ul li a '
                ),
          
              
                array(
                    'id'      => 'footer_link_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Footer links color', 'bisy' ),
                    'desc'    => esc_html__( 'Set the footer area link color', 'bisy' ),
                    'output' => '.quomodo-body-innner-content .footer-area .single-blog-post a ,.quomodo-body-innner-content .footer-area .tagcloud a,.quomodo-body-innner-content .footer-area .widget a,.quomodo-body-innner-content .footer-area .widget ul li a.url, .quomodo-body-innner-content .footer-area .widget ul li a.rsswidget'
                ),

                array(
                    'id'      => 'footer_link_hover',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Footer links Hover color', 'bisy' ),
                    'desc'    => esc_html__( 'Set the footer area link hover color', 'bisy' ),
                    'output'  => '.quomodo-body-innner-content .footer-area .single-blog-post a:hover,.quomodo-body-innner-content .footer-area .tagcloud a:hover, .quomodo-body-innner-content .footer-area .widget a:hover, .quomodo-body-innner-content .footer-area .widget ul li a.url:hover,.quomodo-body-innner-content .footer-area .widget ul li a.rsswidget:hover'
                ),

                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Copyright & Back Button', 'bisy' ),
                ),

                array(
                    'id'      => 'copyright_padding_top',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Copyright Padding top', 'bisy' ),
                    'min'     => 0,
                    'max'     => 300,
                    'step'    => 1,
                    'unit'    => 'px',
                        
                ),

                array(
                    'id'      => 'copyright_padding_bottom',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Copyright Padding Bottom', 'bisy' ),
                    'min'     => 0,
                    'max'     => 300,
                    'step'    => 1,
                    'unit'    => 'px',
                ),

                array(
                    'id'      => 'copyright_margin_top',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Copyright margin top', 'bisy' ),
                    'min'     => 0,
                    'max'     => 300,
                    'step'    => 1,
                    'unit'    => 'px',
                        
                ),

                array(
                    'id'      => 'footer_copyright_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Copyright Text Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set footer copyright text color form here.', 'bisy' ),
                    'output'  => '.footer-area .copyright p'
                ),

                array(
                    'id'      => 'footer_copyright_link_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Copyright Link Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set footer copyright link color form here.', 'bisy' ),
                    'output'  => '.footer-area .copyright p a'
                ),

                array(
                    'id'                    => 'copyright_background_color',
                    'type'                  => 'background',
                    'title'                 => esc_html__( 'Copyright Background', 'bisy' ),
                    'background_gradient'   => true,
                    'background_origin'     => true,
                    'background_clip'       => true,
                    'background_blend_mode' => true,
                    'default'               => array(
                      'background-color'              => '',
                      'background-gradient-color'     => '',
                      'background-gradient-direction' => 'to bottom',
                      'background-size'               => 'cover',
                      'background-position'           => 'center center',
                      'background-repeat'             => 'repeat',
                    ),
                    'output' => '.footer-area .copyright'
                  ),

                array(
                    'id'     => 'footer_copyright_border',
                    'type'   => 'border',
                    'title'   => esc_html__( 'Copyright Border', 'bisy' ),
                    'output'  => '.footer-area .copyright'
                  ),
                // back button
                array(
                    'id'      => 'footer_back_top_button',
                    'type'    => 'switcher',
                    'title'   => esc_html__( 'Enable Back to Button', 'bisy' ),
                    'default' => true
                ), 
                array(
                    'id'     => 'footer_copyright_back_button',
                    'type'   => 'border',
                    'title'  => esc_html__( 'Back Button Border', 'bisy' ),
                    'output' => '.back-to-top'
                ),
                array(
                    'id'      => 'footer_copyright_back_button_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Back Button Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set footer Back Button icon color form here.', 'bisy' ),
                    'output' => '#back-to-top',
                    'output_mode' => 'background-color'
                ),
                array(
                    'id'      => 'footer_copyright_icon_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Back Button Icon Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set footer Back Button icon color form here.', 'bisy' ),
                    'output' => '#back-to-top i'
                ),
                  
            ),

        ) );
 
          // Topbar
        CSF::createSection( BISY_OPTION_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Topbar', 'bisy' ),
            'icon'   => 'fa fa-envelope',
            'fields' => array(
                
                array(
                    'id'      => 'topbar_enable',
                    'type'    => 'switcher',
                    'title'   => esc_html__( 'Topbar Enable', 'bisy' ),
                    'default' => false
                ), 

                array(
                    'id'        => 'footer_topbar_layout',
                    'type'      => 'image_select',
                    'title'   => esc_html__( 'Layout', 'bisy' ),
                    'options'   => array(

                      'layout-1' => BISY_IMG.'/admin/footer/topbar.png',
                      'layout-2' => BISY_IMG.'/admin/footer/topbar-mailchimp.png',
                      
                     
                    ),
                    'default'   => 'layout-1'
                  ),

                  array(
                    'id'          => 'footer_call_to_action_permited_pages',
                    'type'        => 'select',
                    'title'       => esc_html__( 'Permitted Pages', 'bisy' ),
                    'chosen'      => true,
                    'multiple'    => true,
                    'placeholder' => esc_html__('Select pages','bisy'),
                    'options'     => array(
                        'all'   => esc_html__( 'All', 'bisy' ),
                        'post'  => esc_html__( 'Post', 'bisy' ),
                        'page'  => esc_html__( 'Page', 'bisy' ),
                        'lms'   => esc_html__( 'LMS', 'bisy' ),
                        'event' => esc_html__( 'Event', 'bisy' ),
                        'blog'  => esc_html__( 'Blog List', 'bisy' ),
                    ),
                    'default' => 'all'
                  ),
               
                array(
                    'id'         => 'footer_topbar_heading_line_one',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Heading line 1', 'bisy' ),
                    'desc'       => esc_html__( 'Set Heading title line one.', 'bisy' ),
                    'default'    => esc_html__( 'Join instantly with $0 down ad get your', 'bisy' ),
                    'dependency' => array( 'topbar_enable', '==', 'true' ),
                ),

                array(
                    'id'         => 'footer_mail_shortcode',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Mail shortcode', 'bisy' ),
                    'desc'       => esc_html__( 'Set newslatter form shortcode', 'bisy' ),
                    'dependency' => array( 'footer_topbar_layout', '==', 'layout-2' ),
                ),

                array(
                    'id'      => 'footer_topbar_image',
                    'type'    => 'media',
                    'title'   => esc_html__( 'Image Icon', 'bisy' ),
                    'library' => 'image',
                  ),

                array(
                    'id'      => 'topbar_contact_button',
                    'type'    => 'switcher',
                    'title'   => esc_html__( 'Button Enable', 'bisy' ),
                    'default' => true,
                    'dependency' => array( 'topbar_enable', '==', 'true' ),
                ), 
                array(
                    'id'         => 'footer_button_text',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Button text', 'bisy' ),
                    'desc'       => esc_html__( 'Set the Button text.', 'bisy' ),
                  
                   
                ),
                array(
                    'id'         => 'footer_button_link',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Button url', 'bisy' ),
                    'desc'       => esc_html__( 'Set the Button url.', 'bisy' ),
                    'default'    => '#',
                   
                ),
               
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Topbar Style Section', 'bisy' ),
                ),
                
                array(
                    'id'    => 'topbar_2_background_image',
                    'type'  => 'background',
                    'title' => esc_html__( 'Topbar Background', 'bisy' ),
                    'output' => '.footer-area .cta-wrapper, .footer-area .cta-mailchimp'
                  ),
                 
                array(
                    'id'      => 'footer_topbar_title_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Heading Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set footer Top bar title color form here.', 'bisy' ),
                    'output' => '.footer-area .cta-wrapper h3, .footer-area .cta-mailchimp h3'
                ),

                array(
                    'id'      => 'footer_topbar_button_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Button Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set footer Top bar content color form here.', 'bisy' ),
                    'output' => '.footer-area .cta-wrapper .bisylms-btn',
                    'dependency' => array( 'footer_topbar_layout', '==', 'layout-1' ),
                ),

                array(
                    'id'          => 'footer_top_bar_button_bg_color',
                    'type'        => 'color',
                    'title'       => esc_html__( 'Button Background Color', 'bisy' ),
                    'desc'        => esc_html__( 'Set footer Button bgcolor form here.', 'bisy' ),
                    'output'      => ' .footer-area .cta-wrapper .bisylms-btn',
                    'output_mode' => 'background-color',
                    'dependency'  => array( 'footer_topbar_layout', '==', 'layout-1' ),
                ),
               
            ),

        ) );
    
       
        // copyright
        CSF::createSection( BISY_OPTION_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Footer Copyright', 'bisy' ),
            'icon'   => 'fa fa-copyright',
            'fields' => array(
                array(
                    'id'       => 'copyright_text',
                    'type'     => 'wp_editor',
                    'title'    => esc_html__( 'Footer Copyright', 'bisy' ),
                    'desc'     => esc_html__( 'Set the footer copyright text','bisy' ),
                    'settings' => array(
                        'textarea_rows' => 10,
                        'tinymce'       => true,
                        'media_buttons' => false,
                      ),
                      'default' => 'Copryright &copy; QuomodoTheme All Right Reserved.',
                ),
      
            ),

        ) ); 