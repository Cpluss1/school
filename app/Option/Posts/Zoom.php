<?php
//bisy-zoom-meeting
if( class_exists( 'CSF' ) ) {
    $course_prefix = 'bisy_zoom_options';
  
    
    // Create a metabox for zoom
    CSF::createMetabox( $course_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'bisy-zoom-meeting',

    ) );

    CSF::createSection( $course_prefix, array(
        'title'     => 'Zoom Settings',
        
        'fields' => array(
    
        
          array(
            'id'    => 'start_date',
            'type'  => 'date',
            'title' => esc_html__('Start Date','bisy'),
            'settings' => array(
                'dateFormat'      => 'mm/dd/yy',
              )
            
          ),

          array(

            'id'    => 'start_time',
            'type'  => 'time',
            'title'  =>  esc_html__( 'Time', 'bisy'),
        
          ),
  
          array(
            'id'          => 'meeting_type',
            'type'        => 'select',
            'title'       => esc_html__('Meetings Type','bisy'),
            'placeholder' => esc_html__('Select ','bisy'),
            'options'     => [
                'meetings' => esc_html__('Meetings','bisy'),
                //'webiner' => esc_html__('Webiner','bisy')
            ]
            
          ),
  
    
        )
      ) );
}