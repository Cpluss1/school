<?php 

   // backup option
   CSF::createSection( BISY_OPTION_KEY, array(
           
    'title'  => esc_html__( 'Style', 'bisy' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(
        array(
            'id'                    => 'body_bg_color',
            'type'                  => 'background',
            'title'                 => esc_html__( 'Body Background', 'bisy' ),
            'desc'                  => esc_html__( 'Set the body background color', 'bisy' ),
            'default'               => '',
            'background_image'      => true,
            'background_position'   => true,
            'background_repeat'     => true,
            'background_attachment' => true,
            'background_size'       => true,
            'output'                => 'body',
            
        ),
        
        array(
            'id'     => 'body_text_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Body Text Color', 'bisy' ),
            'desc'   => esc_html__( 'Set footer widgetbody content color form here.', 'bisy' ),
            'output' => 'body,.qomodo-post-navigation span,.qomodo-post-navigation i'
        ),
        array(
            'id'     => 'main_text_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Main Color', 'bisy' ),
            'desc'   => esc_html__( 'Set main color form here.', 'bisy' ),
            'output' => '.comment-form input[type="submit"], .logged-in-as a, .blog a.read-more ,.blog .bp-meta a, .blog .bp-meta a i'
        ),

        array(
            'id'     => 'title_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Title Color', 'bisy' ),
            'desc'   => esc_html__( 'Set blog title color form here.', 'bisy' ),
            'output' => '.single-post-navigation .title-with-link h3,.comments-title,.comments-area .comment-reply-title , .blog .single-post-area .quomodo-entry-title, .b-post-details h3 a '
        ),

        array(
            'id'     => 'body_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Body Font', 'bisy' ),
            'output' => 'body'
        ),

        array(
            'id'     => 'h1_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H1 Font', 'bisy' ),
            'output' => 'h1'
        ),

        array(
            'id'     => 'h2_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H2 Font', 'bisy' ),
            'output' => 'h2'
        ),

        array(
            'id'     => 'h3_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H3 Font', 'bisy' ),
            'output' => 'h3'
        ),

        array(
            'id'     => 'h4_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H4 Font', 'bisy' ),
            'output' => 'h4'
        ),
        array(
            'id'     => 'h5_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H5 Font', 'bisy' ),
            'output' => 'h5'
        ),
        array(
            'id'     => 'h6_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H6 Font', 'bisy' ),
            'output' => 'h6'
        ),
    ),
) );