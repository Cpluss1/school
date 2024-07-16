<?php 
$header_footer_url = admin_url( 'edit.php?post_type=qheader-footer' );
// Elementor Header section
CSF::createSection( BISY_OPTION_KEY , array(
    'title'  => esc_html__('Elementor Header Footer','bisy'),
    'icon'   => 'far fa-building',
    'fields' => array(

       // elementor header footer
        array(
          'id'    => 'builder_header_layout',
          'type'  => 'switcher',
          'title' => 'Header Enable',
        ),  

        array(
          'id'         => 'builder_header_layout_style',
          'type'       => 'Select',
          'dependency' => array( 'builder_header_layout', '==', 'true' ),
          'title'      => esc_html__('Header','bisy'),
          'options'    => bisy_header_footer_templates('header'),
          'desc'       => esc_html__('Create Footer from','bisy'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','bisy').'</a>',
        ),

        array(
          'id'    => 'builder_footer_layout',
          'type'  => 'switcher',
          'title' => 'Footer Enable',
        ), 
        
        array(
          'id'         => 'builder_footer_layout_style',
          'type'       => 'Select',
          'title'      => esc_html__('Footer','bisy'),
          'options'    => bisy_header_footer_templates('footer'),
          'dependency' => array( 'builder_footer_layout', '==', 'true' ),
          'desc'       => esc_html__('Create Footer from','bisy'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','bisy').'</a>',
        ),

    )
    
  ) );