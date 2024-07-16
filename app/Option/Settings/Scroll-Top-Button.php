<?php 

  // scroll
  CSF::createSection( BISY_OPTION_KEY, array(
    'title'  => esc_html__( 'Scroll Top Button', 'bisy' ),
    'icon'   => 'fa fa-arrow-up',
    'fields' => array(
        array(
            'id'      => 'enable_scroll_top',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Scroll Top', 'bisy' ),
            'desc'    => esc_html__( 'If you want to enable or disable scroll to top button you can set ( YES / NO )', 'bisy' ),
            'default' => true,
        ),
      
    ),
    
) ); 