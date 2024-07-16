<?php 

    // Blog a top-tab
    CSF::createSection( BISY_OPTION_KEY, array(
        'id'    => 'blog_tab', // Set a unique slug-like ID
        'title'  => esc_html__( 'Blog', 'bisy' ),
        'icon'     => 'fa fa-book',
    ) ); 
    // Blog
    CSF::createSection( BISY_OPTION_KEY, array(
        'parent' => 'blog_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'General', 'bisy' ),
        'fields' => array(
          
            array(
                'id'          => 'blog_sidebar',
                'type'        => 'select',
                'title'       => esc_html__('Blog Sidebar', 'bisy'),
                'placeholder' => 'Select an option',
                'options'     => array(
                    '1' => esc_html__('No sidebar', 'bisy'),
                    '2' => esc_html__('Left Sidebar', 'bisy'),
                    '3' => esc_html__('Right Sidebar', 'bisy'),
                ),
                'default'     => '3'
              ),
 
            array(
                'id'      => 'blog_box_shadow',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Box Shadow', 'bisy' ),
                'default' => true
            ),

            array(
                'id'      => 'blog_box_shadow_hover',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Hover Box Shadow', 'bisy' ),
                'default' => true
            ),

            array(
                'id'          => 'blog_post_border_radious',
                'type'        => 'slider',
                'title'       => esc_html__( 'Blog Post Border Radius', 'bisy' ),
                'min'         => 0,
                'max'         => 300,
                'step'        => 1,
                'unit'        => 'px',
                'output_mode' => 'border-radius',
                'output'      => ' .blog .post-item-1'
              ),
              
            
            array(
                'id'      => 'blog_grid',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Box grid / Two Column', 'bisy' ),
                'default' => false
            ),

            array(
                'id'      => 'blog_author',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author', 'bisy' ),
                'default' => true
            ), 
            
            array(
                'id'      => 'blog_author_image',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author image', 'bisy' ),
                'default' => false
            ), 

            array(
                'id'      => 'blog_date',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Date', 'bisy' ),
                'default' => true
            ),
            
            array(
                'id'      => 'blog_comment',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Comment', 'bisy' ),
                'default' => true
            ),
            
            array(
                'id'      => 'blog_category',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Category', 'bisy' ),
                'default' => true
            ),
            
            array(
                'id'      => 'blog_readmore',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Readmore', 'bisy' ),
                'default' => true
            ), 
            array(
                'id'      => 'blog_readmore_text',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog Readmore Text', 'bisy' ),
                'default' => esc_html__( 'Read More', 'bisy' ),
            ),
          
            array(
                'id'      => 'blog_post_nav',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Navigation', 'bisy' ),
                'default' => true
            ),

            array(
            'id'          => 'blog_post_nav_alignment',
            'type'        => 'select',
            'title'   => esc_html__( 'Navigation Alignment', 'bisy' ),
            'placeholder' => 'Select an option',
            'options'     => array(
                'justify-content-start'  => esc_html__( 'Left', 'bisy' ),
                'justify-content-center' => esc_html__( 'Center', 'bisy' ),
                'justify-content-end'    => esc_html__( 'Right', 'bisy' ),
            ),
            'default'     => 'justify-content-start'
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog & Page Default Options', 'bisy' ),
            ),
            
            array(
                'id'      => 'blog_excerpt',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Excerpt', 'bisy' ),
                'default' => true
            ),
            array(
                'id'      => 'blog_excerpt_word',
                'type'    => 'number',
                'title'   => esc_html__( 'Blog Excerpt Word', 'bisy' ),
                'desc'    => esc_html__( 'Set the words that how many words you want to show in every blog post item.', 'bisy' ),
                'default' => '30',
            ),
       

        )
    ) ); 
    CSF::createSection( BISY_OPTION_KEY, array(
        'parent' => 'blog_tab', // The slug id of the parent section  
        'title'  => esc_html__('Blog Style','bisy'),
        'icon'   => 'fa fa-image',
        'fields' => array(

            array(
                'id'      => 'blog_post_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Blog List Background', 'bisy' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'bisy' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                   
                ),
                'output' => '.post .post-item-1'
            ),
          
            array(
                'id'          => 'blog_post__padding',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Post Padding', 'bisy' ),
                'output'      => '.post .post-item-1',
                'output_mode' => 'padding', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),

            array(
                'id'          => 'blog_post__margin',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Post Margin', 'bisy' ),
                'output'      => '.post .post-item-1',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),
            
            array(
                'id'          => 'blog_post_meta_margin',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Meta Margin', 'bisy' ),
                'output'      => '.post .b-post-details .bp-meta',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),

            array(
                'id'          => 'blog_post_meta_padding',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Meta Item Margin', 'bisy' ),
                'output'      => '.post .b-post-details .bp-meta a',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),

            array(
                'id'          => 'blog_post_title_margin',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Title Margin', 'bisy' ),
                'output'      => '.blog .b-post-details h3',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),
           

            array(
                'id'          => 'blog_post_content_margin',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Content Margin', 'bisy' ),
                'output'      => '.post .b-post-details p',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),

            array(
                'id'          => 'blog_post_readmore_margin',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Reamore Margin', 'bisy' ),
                'output'      => '.post .b-post-details .read-more',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),

        )
    ) );
     // Sidebar Style
    CSF::createSection( BISY_OPTION_KEY, array(
        'parent' => 'blog_tab', // The slug id of the parent section  
        'title'  => esc_html__('Sidebar Style','bisy'),
        'icon'   => 'fa fa-image',
        'fields' => array(

            array(
                'id'      => 'news__sidebars_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Sidebar Background', 'bisy' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'bisy' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                   
                ),
                'output' => '.blog-sidebar .widget'
            ),
          
            array(
                'id'          => 'news_blog_sidebars_padding',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Sidebar Padding', 'bisy' ),
                'output'      => '.blog-sidebar .widget ',
                'output_mode' => 'padding', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),

            array(
                'id'          => 'news_blog_sidebars_margin',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Sidebar margin', 'bisy' ),
                'output'      => '.blog-sidebar .widget ',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),
        

         
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Text & Link Color', 'bisy' ),
            ),
            array(
                'id'      => 'news__sidebars_widget_title_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Widget Title Color', 'bisy' ),
                'desc'    => esc_html__( 'Set Sideabr widget title color form here.', 'bisy' ),
                'output' => '.blog-sidebar .widget .widget-title'
            ),
            array(
                'id'      => 'news__sidebars_widget_content_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Widget content Color', 'bisy' ),
                'desc'    => esc_html__( 'Set footer widget content color form here.', 'bisy' ),
                'output' => '.blog-sidebar select , .blog-sidebar .tagcloud a,.blog-sidebar ul li a.rsswidget,.blog-sidebar .widget,.blog-sidebar ul li a,.blog-sidebar .widget ul li a.url'
            ),
            array(
                'id'     => 'sidebar_border_color',
                'type'   => 'border',
                'title'  => esc_html__( 'Border Color', 'bisy' ),
                'output' => '.blog-sidebar ul li'
            ),
        

            array(
                'id'          => 'news_blog_sidebars_title_margin',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Widget Title Margin', 'bisy' ),
                'output'      => '.blog-sidebar .widget .widget-title',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                'unit'      => 'px',
                ),
            ),
       
            array(
                'id'      => 'sidebars_link_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Sideber links color', 'bisy' ),
                'desc'    => esc_html__( 'Set the Sidebar area link color', 'bisy' ),
                'output' => '.blog-sidebar .single-blog-post a .blog-sidebar .tagcloud a, .blog-sidebar .widget a, .blog-sidebar .widget ul li a.url,.blog-sidebar .widget ul li a.rsswidget'
            ),

            array(
                'id'      => 'sidebar_link_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Sidebar links Hover color', 'bisy' ),
                'desc'    => esc_html__( 'Set the footer area link hover color', 'bisy' ),
                'output' => '.blog-sidebar .single-blog-post a:hover, .blog-sidebar .tagcloud a:hover, .blog-sidebar .widget a:hover, .blog-sidebar .widget ul li a.url:hover,.blog-sidebar .widget ul li a.rsswidget:hover'
            ),

        )
    ) );