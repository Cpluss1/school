<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    
    // Set a unique slug-like ID
    $bisy_profile_options = 'bisy_profile_options';

    
    // Create profile options
    CSF::createProfileOptions( $bisy_profile_options, array(
      'data_type' => 'unserialize', // The type of the database save options. `serialize` or `unserialize`
    ) );
    
    // Create a section
    CSF::createSection( $bisy_profile_options, array(
      'fields' => array(

        
      )
    ) );



}
