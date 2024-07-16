<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

   
    // Set a unique slug-like ID
    $course_prefix = 'bisy_lp_course_options';
  
    
    // Create a metabox for post
    CSF::createMetabox( $course_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'lp_course',

    ) );
  

    // Icon section
    CSF::createSection( $course_prefix, array(
      'title'     => 'Course Settings',
      
      'fields' => array(
  
        array(
            'id'    => 'course_icon',
            'type'  => 'media',
            'title' => esc_html__('Course Icon','bisy'),
        ),

        array(
          'id'    => 'course_image',
          'type'  => 'media',
          'title' => esc_html__('Course image','bisy'),
      ),

        array(
          'id'      => 'course_free_price',
          'type'    => 'text',
          'title'   => esc_html__( 'Free Course Price', 'bisy' ),
          'desc'    => esc_html__( 'Enter Free Course Price', 'bisy' ),
        ),

        array(
          'id'      => 'course_language',
          'type'    => 'text',
          'title'   => esc_html__( 'Languages', 'bisy' ),
          'default'   => esc_html__( 'English', 'bisy' ),
          'desc'    => esc_html__( 'Enter Language list with comma', 'bisy' ),
        ),

        array(
          'id'    => 'course_deedline',
          'type'  => 'date',
          'title' => esc_html__('Deadline','bisy'),
        ),

        array(
          'id'          => 'course_instructors',
          'type'        => 'select',
          'title'       => esc_html__('Select Co Instructor','bisy'),
          'chosen'      => true,
          'multiple'    => true,
          'placeholder' => esc_html__('Select an instructor','bisy'),
          'options'     => bisy_co_instructor()
          
        ),

  
      )
    ) );

  
  
  }
  