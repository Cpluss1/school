<?php 
  
   // Learnpress
   CSF::createSection( BISY_OPTION_KEY, array(
    'id'    => 'learnpress_course_parent', // Set a unique slug-like ID
    'title'  => esc_html__( 'Learnpress Course', 'bisy' ),
    'icon'     => 'fa fa-book',
) );

  
   CSF::createSection( BISY_OPTION_KEY, array(
    'parent' => 'learnpress_course_parent', // The slug id of the parent section     
    'title'  => esc_html__( 'General', 'bisy' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(

            array(
                'id'          => 'learnpress_course_layout',
                'type'        => 'select',
                'title'       => esc_html__('Course Layout', 'bisy'),
                'placeholder' => esc_html__('Select an option','bisy'),
                'options'     => array(
                    'layout-1' => esc_html__('Layout 1', 'bisy'),
                    'layout-2' => esc_html__('Layout 2', 'bisy'),
                    'layout-3' => esc_html__('Layout 3', 'bisy'),
                ),
                'default'     => 'layout-1'
            ),

            array(
              'id'         => 'course_layout_category_limit',
              'type'       => 'text',
              'title'      => esc_html__( 'Course Archive Layout Category', 'bisy' ),
              'desc'       => esc_html__( 'Course Archive Layout Category', 'bisy' ),
              'default'    => 6,
          
          ),

            array(
              'id'          => 'learnpress_course_layout_2_tags',
              'type'        => 'select',
              'title'       => esc_html__('Course Layout 2 tags Filter', 'bisy'),
              'placeholder' => esc_html__('Select an option','bisy'),
              'options'     => bisy_get_course_category('course_tag'),
              'default'     => '',
              'chosen'      => true,
              'multiple'    => true,
              'dependency' => array( 'learnpress_course_layout', '==', 'layout-2' ),
            ),

            array(
              'id'          => 'learnpress_course_layout_1_tags',
              'type'        => 'select',
              'title'       => esc_html__('Course Layout 1 tags Filter', 'bisy'),
              'placeholder' => esc_html__('Select an option','bisy'),
              'options'     => bisy_get_course_category('course_tag'),
              'default'     => '',
              'chosen'      => true,
              'multiple'    => true,
              'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
            ),

            array(
              'id'          => 'learnpress_course_layout_3_tags',
              'type'        => 'select',
              'title'       => esc_html__('Course Layout 2 Tags Filter', 'bisy'),
              'placeholder' => esc_html__('Select an option','bisy'),
              'options'     => bisy_get_course_category('course_tag'),
              'default'     => '',
              'chosen'      => true,
              'multiple'    => true,
              'dependency' => array( 'learnpress_course_layout', '==', 'layout-3' ),
            ),
            
            array(
              'id'          => 'learnpress_course_3_image_type',
              'type'        => 'select',
              'title'       => esc_html__('Course Grid Image Type', 'bisy'),
              'placeholder' => esc_html__('Select an option','bisy'),
              'options' => [
                'feature'  => esc_html__( 'Feature Image', 'bisy' ),
                'course' => esc_html__( 'Course Image', 'bisy' ),
                'icon' => esc_html__( 'Icon Image', 'bisy' ),
              ],
              'default'     => 'feature',
             
              'dependency' => array( 'learnpress_course_layout', '==', 'layout-3' ),
            ),

            array(

              'id'          => 'learnpress_course_list_3_image_type',
              'type'        => 'select',
              'title'       => esc_html__('Course List Image Type', 'bisy'),
              'placeholder' => esc_html__('Select an option','bisy'),
              'options' => [
                'feature'  => esc_html__( 'Feature Image', 'bisy' ),
                'course' => esc_html__( 'Course Image', 'bisy' ),
                'icon' => esc_html__( 'Icon Image', 'bisy' ),
            
              ],

              'default'     => 'feature',
             
              'dependency' => array( 'learnpress_course_layout', '==', 'layout-3' ),
            ),

            array(
              'id'          => 'learnpress_course_2_image_type',
              'type'        => 'select',
              'title'       => esc_html__('Course Grid Image Type', 'bisy'),
              'placeholder' => esc_html__('Select an option','bisy'),
              'options' => [
                'feature'  => esc_html__( 'Feature Image', 'bisy' ),
                'course' => esc_html__( 'Course Image', 'bisy' ),
                'icon' => esc_html__( 'Icon Image', 'bisy' ),
            
              ],
              'default'     => 'feature',
             
              'dependency' => array( 'learnpress_course_layout', '==', 'layout-2' ),
            ),

            array(

              'id'          => 'learnpress_course_list_2_image_type',
              'type'        => 'select',
              'title'       => esc_html__('Course List Image Type', 'bisy'),
              'placeholder' => esc_html__('Select an option','bisy'),
              'options' => [
                'feature'  => esc_html__( 'Feature Image', 'bisy' ),
                'course' => esc_html__( 'Course Image', 'bisy' ),
                'icon' => esc_html__( 'Icon Image', 'bisy' ),
            
              ],

              'default'     => 'feature',
             
              'dependency' => array( 'learnpress_course_layout', '==', 'layout-2' ),
            ),
 

            array(

              'id'          => 'learnpress_course_1_image_type',
              'type'        => 'select',
              'title'       => esc_html__('Course Grid Image Type', 'bisy'),
              'placeholder' => esc_html__('Select an option','bisy'),
              'options' => [
                'feature'  => esc_html__( 'Feature Image', 'bisy' ),
                'course' => esc_html__( 'Course Image', 'bisy' ),
                'icon' => esc_html__( 'Icon Image', 'bisy' ),
            
              ],

              'default'     => 'feature',
             
              'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
            ),

            array(

              'id'          => 'learnpress_course_list_1_image_type',
              'type'        => 'select',
              'title'       => esc_html__('Course List Image Type', 'bisy'),
              'placeholder' => esc_html__('Select an option','bisy'),
              'options' => [
                'feature'  => esc_html__( 'Feature Image', 'bisy' ),
                'course' => esc_html__( 'Course Image', 'bisy' ),
                'icon' => esc_html__( 'Icon Image', 'bisy' ),
            
              ],

              'default'     => 'feature',
             
              'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
            ),

            array(
              'id'      => 'course_post_nav',
              'type'    => 'switcher',
              'title'   => esc_html__( 'Pagination Enable', 'bisy' ),
              'desc'    => esc_html__( 'If you want to enable or disable Pagination you can set ( YES / NO )', 'bisy' ),
              'default' => true,
          ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Cta', 'bisy' ),
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
            ),

            array(
                'id'      => 'learnpress_cta_enable',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable', 'bisy' ),
                'default' => true,
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
            ), 

            array(
                'id'         => 'learnpress_cta_heading',
                'type'       => 'text',
                'title'      => esc_html__( 'Heading line 1', 'bisy' ),
                'desc'       => esc_html__( 'Set Heading title line.', 'bisy' ),
                'default'    => esc_html__( 'Join instantly with $0 down ad get your', 'bisy' ),
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
            ),

            array(
                'id'         => 'learnpress_cta_content',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Heading line 1', 'bisy' ),
                'desc'       => esc_html__( 'Set Heading title line one.', 'bisy' ),
                'default'    => esc_html__( 'Join instantly with $0 down ad get your', 'bisy' ),
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
            ),

            array(
                'id'      => 'learnpress_cta_button',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Button Enable', 'bisy' ),
                'default' => true,
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
            ), 

            array(
                'id'         => 'learnpress_cta_button_text',
                'type'       => 'text',
                'title'      => esc_html__( 'Button text', 'bisy' ),
                'desc'       => esc_html__( 'Set the Button text.', 'bisy' ),
                'default'    => esc_html__( 'Explore', 'bisy' ),
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
               
            ),
    
            array(
                'id'         => 'learnpress_cta_button_link',
                'type'       => 'text',
                'title'      => esc_html__( 'Button url', 'bisy' ),
                'desc'       => esc_html__( 'Set the Button url.', 'bisy' ),
                'default'    => '#',
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
            ),

            array(
                'id'                    => 'learnpress_cta_background',
                'type'                  => 'background',
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
                'title'                 => esc_html__( 'Background', 'bisy' ),
                'background_gradient'   => true,
                'background_image'      => true,
                'background_origin'     => true,
                'background_clip'       => true,
                'background_blend_mode' => true,
                'output'                => '.post-type-archive-lp_course .cta-section-2',
                'default'               => array(
                
                  'background-gradient-direction' => 'to bottom',
                  'background-size'               => 'cover',
                  'background-position'           => 'center center',
                  'background-repeat'             => 'repeat',
                )
              ),

              array(
                'id'      => 'learnpress_cta_title_color',
                'type'    => 'color',
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
                'title'   => esc_html__( 'Heading Color', 'bisy' ),
                'desc'    => esc_html__( 'Set footer cta  title color form here.', 'bisy' ),
                'output' => '.cta-section-2 .sec-title'
             ),

             array(
                'id'          => 'learnpress_cta_title_padding',
                'type'        => 'spacing',
                'title'       => esc_html__( 'Padding', 'bisy' ),
                'output'      => '.cta-section-2 .sec-title',
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                 
                  'unit'      => 'px',
                ),
              ),

             array(
                'id'      => 'learnpress_cta_content_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Content Color', 'bisy' ),
                'desc'    => esc_html__( 'Set footer cta  title color form here.', 'bisy' ),
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
                'output' => '.cta-section-2 p'
             ),
             array(
                'id'          => 'learnpress_cta_content_padding',
                'type'        => 'spacing',
                'title'       => esc_html__( 'Padding', 'bisy' ),
                'output'      => '.cta-section-2 p',
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
                'output_mode' => 'padding', // or margin, relative
                'default'     => array(
                 
                  'unit'      => 'px',
                ),
              ),
              array(
                'id'    => 'learnpress_cta_button_bg_color',
                'type'  => 'background',
                'title' => esc_html__( 'Button Background', 'bisy' ),
                'output' => '.cta-section-2 .bisylms-btn',
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
              ),

              array(
                'id'    => 'learnpress_cta_button_color',
                'type'  => 'color',
                'title' => esc_html__( 'Button color', 'bisy' ),
                'output' => '.cta-section-2 .bisylms-btn',
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
              ),
              array(
                'id'          => 'learnpress_cta_content_padding',
                'type'        => 'spacing',
                'title'       => esc_html__( 'Padding', 'bisy' ),
                'dependency' => array( 'learnpress_course_layout', '==', 'layout-1' ),
                'output'      => '.cta-section-2 .bisylms-btn',
                'output_mode' => 'margin', // or margin, relative
                'default'     => array(
                 
                  'unit'      => 'px',
                ),
              ),
    ),
) );