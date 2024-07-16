<?php 
    // Blog
     // footer a top-tab
     CSF::createSection( BISY_OPTION_KEY, array(
        'id'    => 'banner_tab', // Set a unique slug-like ID
        'title'  => esc_html__( 'Banner', 'bisy' ),
        'icon'     => 'fa fa-cog',
    ) );
    CSF::createSection( BISY_OPTION_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Content Settings', 'bisy' ),
        'fields' => array(
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Banner', 'bisy' ),
            ),
         
            array(
                'id'      => 'blog_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Banner Show', 'bisy' ),
                'default' => true
            ),

            
            array(
                'id'      => 'blog_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Breadcrumb', 'bisy' ),
                'default' => true
            ),
            
            array(
                'id'      => 'banner_blog_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog title', 'bisy' ),
                
            ), 

            array(

                'id'      => 'banner_blog_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'bisy' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'bisy' ),
                'output' => '.blog-banner .page-banner'
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Post / Details', 'bisy' ),
            ),
         
            array(
                'id'      => 'blog_single_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Banner Show', 'bisy' ),
                'default' => true
            ),

            
            array(
                'id'      => 'blog_single_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Post Breadcrumb', 'bisy' ),
                'default' => false
            ),
            
            array(

                'id'      => 'banner_single_blog_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'bisy' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'bisy' ),
                'output' => '.blog-banner .page-banner.single-p-banner'
            ),


            
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Banner', 'bisy' ),
            ),
            
            array(

                'id'      => 'page_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Banner Show ', 'bisy' ),
                'default' => true
            ),
            
            array(
                'id'      => 'page_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Breadcrumb', 'bisy' ),
                'default' => true
            ),
            
            array(

                'id'      => 'banner_page_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Page Title', 'bisy' ),
                'default' => ''
            ), 

            array(

                'id'      => 'banner_page_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'bisy' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'bisy' ),
                'output' => '.page-banner-section .page-banner'
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Course Banner', 'bisy' ),
            ),
            
            array(

                'id'      => 'page_course_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Course Banner Show ', 'bisy' ),
                'default' => true
            ),
            
            array(
                'id'      => 'page_course_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Course Breadcrumb', 'bisy' ),
                'default' => true
            ),
            
            array(

                'id'      => 'banner_page_course_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Course Title', 'bisy' ),
                'default' => ''
            ), 

            array(

                'id'      => 'banner_page_course_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'bisy' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'bisy' ),
                'output' => '.single-lp_course .page-banner-section .page-banner'
            ),
  
       
        )
    ) ); 
    CSF::createSection( BISY_OPTION_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Style', 'bisy' ),
        'fields' => array(
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Banner', 'bisy' ),
            ),

            array(
                'id'    => 'banner_blog_title_color',
                'type'  => 'color',
                'title' => esc_html__( 'Title Color', 'bisy' ),
                'output' => '.blog-banner .banner-title'
            ),

            array(
                'id'     => 'banner_blog_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Breadcrumb Color', 'bisy' ),
                'output' => '.blog-banner .page-title-content nav ol li,.blog-banner .page-title-content .breadcrumb li a',
                'output_important' => true
            ),

            array(
                'id'     => 'banner_blog_breadcrumb_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Icon Color', 'bisy' ),
                'output' => '.blog-banner .page-title-content .breadcrumb li i',
                'output_important' => true
            ),

            array(
                'id'               => 'banner_blog_breadcrumb_icon_color',
                'type'             => 'color',
                'output_mode'      => 'background-color',
                'title'            => esc_html__( 'Backround Cirlce Color', 'bisy' ),
                'output'           => '.blog-banner .page-title-bg::before,.blog-banner .page-title-bg .shape-1,.blog-banner .page-title-bg .shape-2,.blog-banner .page-title-bg .shape-3,.blog-banner .page-title-bg .shape-4,.blog-banner .page-title-bg::after',
                'output_important' => true
            ),

           
            array(
                'id'                    => 'banner_blog_image_overlay',
                'type'                  => 'background',
                'title'                 => esc_html__( 'Overlay Color', 'bisy' ),
                'background_gradient'   => true,
                'background_image'      => false,
                'background_origin'     => true,
                'background_clip'       => true,
                'background_blend_mode' => true,
                'output'                => '.blog-banner .page-banner:after',
                'default'               => array(
                
                  'background-gradient-direction' => 'to bottom',
                  'background-size'               => 'cover',
                  'background-position'           => 'center center',
                  'background-repeat'             => 'repeat',
                )
              ),

            array(
                'id'    => 'banner_blog_image_opacity',
                'type'  => 'slider',
                'title' => esc_html__( 'Overlay Opacity', 'bisy' ),
                'min'     => 0,
                'max'     => 1,
                'step'    => 0.1
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Post', 'bisy' ),
            ),

            array(
                'id'    => 'banner_post_title_color',
                'type'  => 'color',
                'title' => esc_html__( 'Title Color', 'bisy' ),
                'output' => '.single-p-banner .banner-title'
            ),

            array(
                'id'     => 'banner_post_category_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Category Color', 'bisy' ),
                'output' => '.single-p-banner .post-cate'
            ),
            
            array(
                'id'     => 'banner_post_meta__color',
                'type'   => 'color',
                'title'  => esc_html__( 'Meta Color', 'bisy' ),
                'output' => '.single-p-banner .bp-meta a'
            ),

            array(
                'id'     => 'banner_post_meta_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Meta Color Icon', 'bisy' ),
                'output' => '.single-p-banner .bp-meta a i'
            ),

            array(
                'id'     => 'banner_post_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb ', 'bisy' ),
                'output' => '.single-p-banner .breadcrumb li a, .single-p-banner .breadcrumb li'
            ),
            
            array(
                'id'          => 'banner_post_breadcrumb_dot_color',
                'type'        => 'color',
                'output_mode' => 'background-color',
                'title'       => esc_html__( 'Breadcrumb Dot Color', 'bisy' ),
                'output'      => '.single-p-banner .breadcrumb li span'
            ),

            array(
                'id'    => 'banner_post_breadcrumb_hover_color',
                'type'  => 'color',
                'title' => esc_html__( 'Breadcrumb Hover', 'bisy' ),
                'output' => '.single-p-banner .breadcrumb li a:hover'
            ),

            array(
                'id'                    => 'banner_post_image_overlay',
                'type'                  => 'background',
                'title'                 => esc_html__( 'Overlay Color', 'bisy' ),
                'background_gradient'   => true,
                'background_image'      => false,
                'background_origin'     => true,
                'background_clip'       => true,
                'background_blend_mode' => true,
                'output'                => '.blog-banner .single-p-banner:after',
                'default'               => array(
                
                  'background-gradient-direction' => 'to bottom',
                  'background-size'               => 'cover',
                  'background-position'           => 'center center',
                  'background-repeat'             => 'repeat',
                )
              ),

            array(
                'id'          => 'banner_post_image_opacity',
                'type'        => 'slider',
                'title'       => esc_html__( 'Overlay Opacity', 'bisy' ),
                'min'         => 0,
                'max'         => 1,
                'step'        => 0.1,
                'unit'        => ' ',
                'output_mode' => 'opacity',
                'output'      => '.blog-banner .single-p-banner:after'
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Banner', 'bisy' ),
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
                'id'               => 'banner_page_breadcrumb_hover_color',
                'type'             => 'color',
                'title'            => esc_html__( 'Breadcrumb Hover Color', 'bisy' ),
                'output'           => '.page .page-banner .breadcrumb li a:hover',
                'output_important' => true
            ),

            array(
                'id'          => 'banner_page_breadcrumb_dot_color',
                'type'        => 'color',
                'output_mode' => 'background-color',
                'title'       => esc_html__( 'Breadcrumb Dot Color', 'bisy' ),
                'output'      => '.page .breadcrumb span'
            ),

            array(
                'id'                    => 'banner_page_image_overlay',
                'type'                  => 'background',
                'title'                 => esc_html__( 'Overlay Color', 'bisy' ),
                'background_gradient'   => true,
                'background_image'      => false,
                'background_origin'     => true,
                'background_clip'       => true,
                'background_blend_mode' => true,
                'output'                => '.page .page-banner:after',
                'default'               => array(
                
                  'background-gradient-direction' => 'to bottom',
                  'background-size'               => 'cover',
                  'background-position'           => 'center center',
                  'background-repeat'             => 'repeat',
                )
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
                'type'    => 'subheading',
                'content' => esc_html__( 'Course Banner', 'bisy' ),
            ),
       
            array(
                'id'     => 'banner_course_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Course Title Color', 'bisy' ),
                'output' => '.single-lp_course .page-banner .banner-title'
            ),

            array(
                'id'               => 'banner_course_breadcrumb_color',
                'type'             => 'color',
                'title'            => esc_html__( 'Course Breadcrumb Color', 'bisy' ),
                'output'           => '.single-lp_course .page-banner .breadcrumb li a,.single-lp_course .page-banner .breadcrumb li,.single-lp_course .page-banner .breadcrumb',
                'output_important' => true
            ),

            array(
                'id'               => 'banner_course_breadcrumb_hover_color',
                'type'             => 'color',
                'title'            => esc_html__( 'Breadcrumb Hover Color', 'bisy' ),
                'output'           => '.single-lp_course .page-banner .breadcrumb li a:hover',
                'output_important' => true
            ),

            array(
                'id'          => 'banner_post_breadcrumb_dot_color',
                'type'        => 'color',
                'output_mode' => 'background-color',
                'title'       => esc_html__( 'Breadcrumb Dot Color', 'bisy' ),
                'output'      => '.single-lp_course .breadcrumb span'
            ),
  
            array(
                'id'                    => 'banner_course_image_overlay',
                'type'                  => 'background',
                'title'                 => esc_html__( 'Overlay Color', 'bisy' ),
                'background_gradient'   => true,
                'background_image'      => false,
                'background_origin'     => true,
                'background_clip'       => true,
                'background_blend_mode' => true,
                'output'                => '.single-lp_course .page-banner:after',
                'default'               => array(
                
                  'background-gradient-direction' => 'to bottom',
                  'background-size'               => 'cover',
                  'background-position'           => 'center center',
                  'background-repeat'             => 'repeat',
                )
              ),

            array(
                'id'    => 'banner_course_image_opacity',
                'type'  => 'slider',
                'title' => esc_html__( 'Overlay Opacity', 'bisy' ),
                'min'     => 0,
                'max'     => 1,
                'step'    => 0.1,
                'unit'        => ' ',
                'output_mode' => 'opacity',
                'output'      => '.single-lp_course .page-banner:after'
            ),

            
       
        )
    ) ); 