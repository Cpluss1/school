<?php 

   // header a top-tab
    CSF::createSection( BISY_OPTION_KEY, array(
        'id'    => 'header_tab', // Set a unique slug-like ID
        'title'   => esc_html__( 'Header', 'bisy' ),
        'icon'     => 'fa fa-home',
    ) ); 


    // Header
    CSF::createSection( BISY_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'   => esc_html__( 'Header', 'bisy' ),
        'icon'   => 'fa fa-credit-card',
        'fields' => array(
 
            
            array(
                'id'      => 'header_style',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Header Style', 'bisy' ),
                'desc'    => esc_html__( 'Select the header style which you want to show on your website.', 'bisy' ),
                'options' => array(
                    'style1' => BISY_IMG. '/admin/header/header-1.png',
                    'style2' => BISY_IMG. '/admin/header/header-2.png',
                    'style3' => BISY_IMG. '/admin/header/header-3.png',
           
                
                ),
                'default' => 'style1',
            ),

            array(
                'id'      => 'enable_header_topbar',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable TopBar', 'bisy' ),
                'desc'    => esc_html__( 'If you want to enable or disable topbar you can set ( YES / NO )', 'bisy' ),
                'default' => false,
                'dependency' => array( 'header_style', '==', 'style2' ),
            ),
            array(
                'id'      => 'enable_sticky_header',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Sticky Header', 'bisy' ),
                'desc'    => esc_html__( 'If you want to enable or disable sticky Header you can set ( YES / NO )', 'bisy' ),
                'default' => false,
               
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Contact info', 'bisy' ),
                'dependency' => array( 'header_style', '==', 'style2' ),
            ),

            array(
                'id'         => 'contact_email',
                'type'       => 'text',
                'title'      => esc_html__( 'Contact mail', 'bisy' ),
                'desc'       => esc_html__( 'Set contact mail.', 'bisy' ),
                'dependency' => array( 'header_style', '==', 'style2' ),
            ),

            array(
                'id'         => 'contact_phone',
                'type'       => 'text',
                'title'      => esc_html__( 'Contact phone', 'bisy' ),
                'desc'       => esc_html__( 'Set contact phone.', 'bisy' ),
                'dependency' => array( 'header_style', '==', 'style2' ),
            ),
    
            // search
            array(
                'id'      => 'enable_search',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable search', 'bisy' ),
                'desc'    => esc_html__( 'If you want to enable or disable search you can set ( YES / NO )', 'bisy' ),
                'default' => false,
            ),

            array(
                'id'      => 'enable_course_search',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Course search', 'bisy' ),
                'desc'    => esc_html__( 'If you want to enable or disable course search you can set ( YES / NO )', 'bisy' ),
                'default' => false,
            ),

            array(
                'id'      => 'enable_course_category',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable course Category', 'bisy' ),
                'desc'    => esc_html__( 'If you want to enable or disable course category you can set ( YES / NO )', 'bisy' ),
                'default' => true,
                'dependency' => array( 'header_style', '==', 'style3' ),
            ),

            //cta
            array(
                'id'      => 'enable_cta',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable CTA', 'bisy' ),
                'desc'    => esc_html__( 'If you want to enable or disable button you can set ( YES / NO )', 'bisy' ),
                'default' => false,
            ),
    
            array(
                'id'         => 'cta_text',
                'type'       => 'text',
                'title'      => esc_html__( 'Cta lebel', 'bisy' ),
                'desc'       => esc_html__( 'Set the Button text.', 'bisy' ),
                'default'    => esc_html__('Buy Now','bisy'),
                'dependency' => array( 'header_style', '==', 'style1' ),
            ),
            
            array(
                'id'         => 'cta_text2',
                'type'       => 'text',
                'title'      => esc_html__( 'Cta lebel', 'bisy' ),
                'desc'       => esc_html__( 'Set the Button text.', 'bisy' ),
                'default'    => esc_html__('Create a account','bisy'),
                'dependency' => array( 'header_style', '!=', 'style1' ),
            ),
    
            array(
                'id'         => 'cta_link',
                'type'       => 'text',
                'title'      => esc_html__( 'Cta url', 'bisy' ),
                'desc'       => esc_html__( 'Set the support url.', 'bisy' ),
                'default'    => '#',
                'dependency' => array( 'enable_cta', '==', 'true' ),
            ),

            array(
                'id'      => 'enable_user_account',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable User Account', 'bisy' ),
                'desc'    => esc_html__( 'If you want to enable or disable user account you can set ( YES / NO )', 'bisy' ),
                'default' => false,
            ),
         
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Button Styling', 'bisy' ),
            ),
              
            array(
                'id'     => 'button_one_text_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Button Color', 'bisy' ),
                'output' => '.header-area .header-nav .navigation .navbar .navbar-btn a.button-one',
                'output_important' => true,
            ),  

            array(
                'id'               => 'button_one_bg_color',
                'type'             => 'color',
                'output_important' => true,
                'title'            => esc_html__( 'Button Background Color', 'bisy' ),
                'output'           => '.header-area .header-nav .navigation .navbar .navbar-btn a.button-one',
                'output_mode'      => 'background-color'
            ),

            array(
                'id'     => 'button_one_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Button Border', 'bisy' ),
                'output' => '.header-area .header-nav .navigation .navbar .navbar-btn a.button-one'
            ),
            
           
        )
    ) );

    // Main menu
    CSF::createSection( BISY_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'      => esc_html__( 'Main Menu', 'bisy' ),
        'icon'   => 'fa fa-sitemap',
        'fields' => array(
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Background', 'bisy' ),
            ),

            array(
                'id'      => 'menu_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Background', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu background form here.', 'bisy' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => '',
                    'color'      => '',
                ),
                'output_important'=> true,
                'output' =>'header'
            ),
         
            array(
                'id'      => 'sticky_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Sticky Background', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu sticky background form here.', 'bisy' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => '',
                    'color'      => '',
                ),
                'output_important'=> true,
                'output' =>'header.fix-header'
            ),
         
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Color', 'bisy' ),
            ),

            array(
                'id'      => 'menu_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu color by color picker', 'bisy' ),
                'default' => '',
                'output'  => 'header .navbar-expand-lg .navbar-nav li > a',
                'output_important'=> true,
                
            ),
            array(
                'id'      => 'menu_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Hover Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu hover color by color picker', 'bisy' ),
                'default' => '',
               
                'output'  => 'header .navbar-expand-lg .navbar-nav li > a:hover',
                'output_important'=> true,
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Sticky Color', 'bisy' ),
            ),
            array(
                'id'      => 'menu_sticky_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Sticky Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu sticky color by color picker', 'bisy' ),
                'default' => '',
                'output'  => 'header.fix-header .navbar-expand-lg .navbar-nav li > a',
                'output_important'=> true,
            ),
            array(
                'id'      => 'menu_sticky_hover_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Sticky Hover Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu sticky hover color by color picker', 'bisy' ),
                'default' => '',
                'output'  => 'header.fix-header .navbar-expand-lg .navbar-nav li:hover > a',
                'output_important'=> true,
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Dropdown Color & Hover', 'bisy' ),
            ),
            array(
                'id'      => 'menu_dropdown_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu dropdown color by color picker', 'bisy' ),
              
                'output'  => 'header .navbar-expand-lg .navbar-nav li .sub-menu a',
                'output_important'=> true,
            ),
            array(
                'id'      => 'menu_dropdown_hover__text_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Hover Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu dropdown hover color by color picker', 'bisy' ),
                'default' => '',
                'output'  => '.navbar-expand-lg .navbar-nav li .sub-menu a:hover',
                'output_important'=> true,
            ),
            array(
                'id'      => 'menu_dropdown_hover_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Hover bgColor', 'bisy' ),
                'desc'    => esc_html__( 'Set the menu dropdown hover color by color picker', 'bisy' ),
                'default' => '',
                'output_mode' => 'background-color',
                'output'  => '.navbar-expand-lg .navbar-nav li .sub-menu a:hover ',
                'output_important'=> true,
            ),

            array(
                'id'      => 'menu_dropdown_h___background',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Background Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the dropdown background color by color picker', 'bisy' ),
                'default' => '',
                'output_mode' => 'background-color',
                'output'  => 'header .navbar-expand-lg .navbar-nav li .sub-menu a',
                'output_important'=> true,
            ),
            

        )
    ) );

    //
    // Mobile menu
    CSF::createSection( BISY_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'  => 'Mobile Menu',
        'icon'   => 'fa fa-mobile',
            'fields' => array(

                array(
                    'id'      => 'mobile_menu_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Menu Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set the menu color by color picker', 'bisy' ),
                    'output' => '.navbar-expand-lg .navbar-nav li a'
                   
                ),
                array(
                    'id'      => 'mobile_menu_hover',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Menu Active & Hover Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set the menu item active &hover color by color picker', 'bisy' ),
                    'output' => '.navbar-expand-lg .navbar-nav li a.active,.navbar-expand-lg .navbar-nav li:hover a'
                   
                   
                ),
                array(
                    'id'      => 'mobile_menu_hover_background',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Menu Active Background Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set the menu active background color by color picker', 'bisy' ),
                    'output' => '.navbar-expand-lg .navbar-nav li a.active,.navbar-expand-lg .navbar-nav li:hover a',
                    'output_mode' => 'background-color'
                   
                  
                ),
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Mobile Menu Hamberger Color & Background', 'bisy' ),
                ),
                array(
                    'id'      => 'mobile_menu_hamberger_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Menu Hambarger Background', 'bisy' ),
                    'desc'    => esc_html__( 'Set the menu hamberger background color by color picker', 'bisy' ),
                    'output' => '.navbar.navbar-expand-lg .navbar-toggler',
                    'output_mode' => 'background-color'
                  
                    
                ),
                array(
                    'id'      => 'mobile_sticky_menu_hamberger_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Sticky Menu Hambarger Color', 'bisy' ),
                    'desc'    => esc_html__( 'Set the menu hamberger color by color picker', 'bisy' ),
                    'output' => '.navbar.navbar-expand-lg .navbar-toggler',
                  
                ),
               
              
        
            )
    ) );

    
    // Logo section
    CSF::createSection( BISY_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'  => 'Logos',
        'icon'   => 'fa fa-file-image-o',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Main Image Logo', 'bisy' ),
            ),
            array(
                'id'      => 'logo',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload Main Logo', 'bisy' ),
                'desc'    => esc_html__( 'Upload main logo width 180px and height 65px.', 'bisy' ),
                'default' => '',
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'bisy' ),
            ),
            array(
                'id'      => 'dark_logo',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload Dark Logo', 'bisy' ),
                'desc'    => esc_html__( 'Upload Color logo width 180px and height 65px.', 'bisy' ),
                'default' => '',
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'bisy' ),
            ),
            array(
                'id'      => 'sticky_logo',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload Sticky Logo', 'bisy' ),
                'desc'    => esc_html__( 'Upload sticky logo width 180px and height 65px.', 'bisy' ),
                'default' => '',
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'bisy' ),
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Text Logo Color', 'bisy' ),
            ),
            array(
                'id'      => 'logo_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Text Logo Color', 'bisy' ),
                'desc'    => esc_html__( 'Set the text logo color by color picker.', 'bisy' ),
                'output' => '.logo-title a',
                'output_important'=> true,
            ),
           
           

        )
    ) );