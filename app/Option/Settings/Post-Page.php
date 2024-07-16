<?php 
 

 // Post Page
CSF::createSection( BISY_OPTION_KEY, array(
    'icon'   => 'fa fa-book',
    'title' => esc_html__( 'Post & Page', 'bisy' ),
    'fields' => array(

        array(
          'type'    => 'subheading',
          'content' => esc_html__( 'Post Setting', 'bisy' ),
        ),

        array(
            'id'      => 'single_post_thumnnail',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post Thumbnail', 'bisy' ),
            'desc'    => esc_html__( 'If you want to enable or disable post Thumbnail Image you can set ( YES / NO )', 'bisy' ),
            'default' => true,
        ),
        array(
            'id'      => 'single_post_tags',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post tags', 'bisy' ),
            'desc'    => esc_html__( 'If you want to enable or disable post tags you can set ( YES / NO )', 'bisy' ),
            'default' => true,
        ),
        array(
            'id'      => 'single_post_category',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post Category', 'bisy' ),
            'desc'    => esc_html__( 'If you want to enable or disable post Category you can set ( YES / NO )', 'bisy' ),
            'default' => true,
        ),

        array(
            'id'      => 'blog_single_author_box',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Author About', 'bisy' ),
            'default' => false
        ),

      
    ),
) );

CSF::createSection( BISY_OPTION_KEY, array(
    'icon'   => 'fa fa-book',
    'title' => esc_html__( '404', 'bisy' ),
    'fields' => array(

          array(
            'type'    => 'subheading',
            'content' => esc_html__( '404 Error Page Setting', 'bisy' ),
          ),
         
          array(
            'id'         => 'error_title',
            'type'       => 'text',
            'title'      => esc_html__( '404 Error Page Text', 'bisy' ),
            'desc'       => esc_html__( 'Set your 404 error title.', 'bisy' ),
            'default'    => esc_html__( 'Oooops! ', 'bisy' )
          ),

          array(
              'id'         => 'error_text',
              'type'       => 'text',
              'title'      => esc_html__( '404 Error Page description', 'bisy' ),
              'desc'       => esc_html__( 'Set your 404 error description.', 'bisy' ),
              'default'    => esc_html__( 'We have something broken.', 'bisy' )
          ),
  
          array(
              'id'      => 'enable_404_return_home_button',
              'type'    => 'switcher',
              'title'   => esc_html__( 'Enable 404 Home Button', 'bisy' ),
              'desc'    => esc_html__( 'If you want to enable or disable home page button you can set ( YES / NO )', 'bisy' ),
              'default' => true,
          ),

          array(
            'id'      => 'enable_contact_button',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Contact Button', 'bisy' ),
            'desc'    => esc_html__( 'If you want to enable or disable contact button you can set ( YES / NO )', 'bisy' ),
            'default' => false,
          ),

          array(
            'id'         => 'error_404_contact_button_url',
            'type'       => 'text',
            'title'      => esc_html__( 'Contact Button Url', 'bisy' ),
            'desc'       => esc_html__( 'Set your 404 contact button url', 'bisy' ),
            'default'    => ''
          ),

          array(

                'id'      => 'error_404_page_bg_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'bisy' ),
                'desc'    => esc_html__( 'Upload main Image width 1920px and height 1080px.', 'bisy' ),
                'output' => ' .error404 .section-404'
         ),

         array(
            'id'      => 'error_404_image',
            'type'    => 'upload',
            'title'   => esc_html__( 'Upload Image', 'bisy' ),
            'desc'    => esc_html__( 'Upload 404 image width 706px and height 431px.', 'bisy' ),
            'default' => '',
            
        ),
  
          array(
              'id'      => 'enable_404_header',
              'type'    => 'switcher',
              'title'   => esc_html__( 'Enable 404 Header', 'bisy' ),
              'desc'    => esc_html__( 'If you want to enable or disable 404 page header you can set ( YES / NO )', 'bisy' ),
              'default' => false,
          ),
          
          array(
              'id'      => 'enable_404_footer',
              'type'    => 'switcher',
              'title'   => esc_html__( 'Enable 404 footer', 'bisy' ),
              'desc'    => esc_html__( 'If you want to enable or disable 404 page footer you can set ( YES / NO )', 'bisy' ),
              'default' => false,
          ),

          array(
              'id'      => 'error_enable_main_container',
              'type'    => 'switcher',
              'title'   => esc_html__( 'Blog Container', 'bisy' ),
              'desc'    => esc_html__( 'If you want to enable or disable 404 page footer you can set ( YES / NO )', 'bisy' ),
              'default' => false,
          ),

    ),
    ) );