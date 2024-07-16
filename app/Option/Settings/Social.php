<?php 

    // social
    CSF::createSection( BISY_OPTION_KEY, array(
        'title'  => esc_html__( 'Social', 'bisy' ),
        'icon'   => 'fa fa-share-alt',
        'fields' => array(
            array(
                'id'      => 'enable_blog_social',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Blog Social Share', 'bisy' ),
                'desc'    => esc_html__( 'Set the Blog social share hide or not.', 'bisy' ),
                'default' => false,
            ),
            array(
                'id'      => 'enable_course_social',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Course Social Share', 'bisy' ),
                'desc'    => esc_html__( 'Set the Course social share hide or not.', 'bisy' ),
                'default' => false,
            ),
            array(
                'id'           => 'social_share',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Bookmark', 'bisy' ),
                'button_title' => esc_html__( 'Add New Bookmark', 'bisy' ),
                'desc'         => esc_html__( 'Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'bisy' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'bisy' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'bisy' ),
                        'default' => 'fa fa-facebook'
                    ),

                   
                    array(
                        'id'          => 'social_type',
                        'type'        => 'select',
                        'title'       => 'Select',
                        'placeholder' => esc_html__( 'Select an type' , 'bisy' ),
                        'options'     => bisy_social_share_list(),
                        
                      ),
                ),
            ),

            array(
                'id'           => 'social_link',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Link', 'bisy' ),
                'button_title' => esc_html__( 'Add New Bookmark', 'bisy' ),
                'desc'         => esc_html__( 'Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'bisy' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'bisy' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'bisy' ),
                        'default' => 'fa fa-facebook'
                    ),

                    array(
                        'id'      => 'bookmark_url',
                        'type'    => 'text',
                        'title'   => esc_html__( 'Profile Url', 'bisy' ),
                        'desc'    => esc_html__( 'Type the social profile url lik http://facebook.com/yourpage. also you can add (facebook, twitter, linkedin, youtube etc.)', 'bisy' ),
                        'default' => 'http://facebook.com/quomodosoft'
                    ),
                   
                ),
            ),


            array(
                'id'         => 'social_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Color', 'bisy' ),
                'desc'       => esc_html__( 'Set the footer social bookmark color from here.', 'bisy' ),
                'output'     => '.ab-social a'
                
            ),

            array(
                'id'         => 'social_hover_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Hover Color', 'bisy' ),
                'desc'       => esc_html__( 'Set the footer social bookmark hover color from here.', 'bisy' ),
                'output'     => '.ab-social a:hover'
               
            ),

        ),

    ) );