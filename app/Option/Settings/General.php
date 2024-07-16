<?php 

CSF::createSection( BISY_OPTION_KEY, array(
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'General','bisy'),
        'fields' => array(

            array(
                'id'         => 'general_blog_title',
                'type'       => 'text',
                'title'      => esc_html__( 'Blog Title', 'bisy' ),
                'desc'       => esc_html__( 'Set global blog title', 'bisy' ),
               
            ),

            array(
                'id'      => 'breadcrumb_enable',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Breadcrumb', 'bisy' ),
                'default' => true
            ), 

            array(
                'id'         => 'general_breadcrumb_limit',
                'type'       => 'number',
                'title'      => esc_html__( 'Breadcrumb limit', 'bisy' ),
                'desc'       => esc_html__( 'Set the breadcrump text limit', 'bisy' ),
                'default'    => '50',
               
                
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Contact form', 'bisy' ),
            ),

            array(
                'id'      => 'contact_form_enable',
                'type'    => 'switcher',
                'title'   => esc_html__( 'PopUp Contact', 'bisy' ),
                'default' => true
            ),
           
            array(
                'id'          => 'contact_form_shortcode',
                'type'        => 'select',
                'title'       => esc_html__( 'Select Contact Shortcode', 'bisy' ),
                'options'     => bisy_get_contact_forms_seven_list(),
                
              ),

        )
    ) ); 