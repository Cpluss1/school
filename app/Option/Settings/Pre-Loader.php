<?php 


        // pre-loader
        CSF::createSection( BISY_OPTION_KEY, array(
       
			'title'   => esc_html__( 'Preloader', 'bisy' ),
            'icon'   => 'fa fa-spinner',
		    'fields' => array(
				array(
				  'type'    => 'subheading',
				  'content' => esc_html__( 'Preloader Type', 'bisy' ),
				),
				array(
					'id'      => 'enable_preloader',
					'type'    => 'switcher',
					'title'   => esc_html__( 'Enable Preloader', 'bisy' ),
					'desc'    => esc_html__( 'If you want to enable or disable preloader you can set ( YES / NO )', 'bisy' ),
					'default' => true,
				),
				array(
					'id'      => 'prloader_style',
					'type'    => 'image_select',
					'title'   => esc_html__( 'Select Preloader Style', 'bisy' ),
					'desc'    => esc_html__( 'You can set specifc preloader style in every page form here.', 'bisy' ),
					'options' => array(
					
					),
					'default'    => 'style_22',
					'dependency' => array( 'enable_preloader', '==', 'true' ),
				),
				array(
				  'type'    => 'subheading',
				  'content' => esc_html__( 'Preloader Background & Color', 'bisy' ),
				),
				
				array(
					'id'      => 'preloader_bg',
					'type'    => 'background',
					'title'   => esc_html__( 'Preloader Background', 'bisy' ),
					'class'   => '.loaders-container',
					'output'  => 'body .preloader',
					'desc'    => esc_html__( 'Upload a new background image or select color to set the preloader background.', 'bisy' ),
					'default' => array(
						'image'      => '',
						'repeat'     => 'repeat',
						'position'   => 'center center',
						'attachment' => 'scroll',
						'size'       => '',
						'color'      => '#5838fc',
					),
				),
	
				array(
					'id'      => 'preloader_bg_icon',
					'type'    => 'background',
					'title'   => esc_html__( 'Preloader Icon Color', 'bisy' ),
					'output'  => 'body .preloader .plane,body #middle .plane',
					'default' => array(
						'image'      => false,
						'repeat'     => 'repeat',
						'position'   => 'center center',
						'attachment' => 'scroll',
						'size'       => '',
						'color'      => '#fff',
					),
				),

				array(
					'id'     => 'preloader_text_colors',
					'type'   => 'color',
					'title'  => esc_html__( 'Text Color', 'bisy' ),
					'output' => '.preloader p'
				),
				

		    ),
        ) ); 