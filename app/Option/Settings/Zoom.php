<?php 

   CSF::createSection( BISY_OPTION_KEY, array(
           
    'title'  => esc_html__( 'Zoom', 'bisy' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(
        array(
            'id'    => 'zoom_token',
            'type'  => 'textarea',
            'title' => esc_html__( 'JWT Access Token', 'bisy' ),
            'desc'  => __( ' 1.
             <a href="https://marketplace.zoom.us/develop/create" > Create Account zoom app to get token </a>
             And 2. <a href="https://prnt.sc/13mp3kn" > Install JWT extension </a> 3.  <a href="https://prnt.sc/13mp719"> copy Token </a>
            ', 'bisy' ),
        ),
    ),
) );