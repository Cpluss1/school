<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $course_category_prefix = 'bisy_course_category_options';
  
    //
    // Create taxonomy options
    CSF::createTaxonomyOptions( $course_category_prefix, array(
      'taxonomy'  => 'course_category',
      'data_type' => 'unserialize', // The type of the database save options. `serialize` or `unserialize`
    ) );
      
      // Icon section
      CSF::createSection( $course_category_prefix, array(
      
        'priority'=> 'high',
        'fields' => array(

          array(
              'id'    => 'course_icon',
              'type'  => 'media',
              'title' => esc_html__('Course Icon','bisy'),
            ),

        )
      ) );
  
  
  }
  