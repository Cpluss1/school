<?php
/*************************************
/*******  Load More Course Grid  ********
**************************************/


function bisy_post_ajax_loading_cb(){  
    
    $paged           = isset($_REQUEST['paged'])?$_REQUEST['paged']:1;
    $course_order_by = 'DESC';
    
    $args            = array( 
		'post_type'      => LP_COURSE_CPT,
		'orderby'        => 'modified',
		'order'          => $course_order_by,
		'posts_per_page' => LP()->settings->get('learn_press_archive_course_limit'),
		'paged'          => $paged
    );
   
    // Optional argument
    if(isset($_REQUEST['settings'])){

        $settings =  $_REQUEST["settings"]; 
       
        //search 

        if( isset($settings['s']) && $settings['s'] !='') {
            $args['s'] = $settings['s'];
        }
    
        // order by
        if( isset($settings['order_by']) ) {

            $post_in =  bisy_course_popular_ids();

            if($settings['order_by'] == 'alphabetical'){
                $args['orderby'] = 'title';
                $args['order']   = 'ASC';
            }elseif($settings['order_by'] == 'newly-published'){
                $args['orderby'] = 'post_date';
                $args['order']   = 'DESC';
            
            }elseif($settings['order_by']=='feature'){
                $args['meta_query'] = array(
                    array(
                        'key' => '_lp_featured',
                        'value' =>  'yes',
                    )
                );
            }elseif($settings['order_by'] == 'popularity' && is_array($post_in)){
                $args['post__in'] = $post_in;
                $args['orderby']  = 'post__in';
            }elseif($settings['order_by'] == 'low_to_high'){
                $args['meta_key'] = '_lp_price';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'ASC';
            }elseif($settings['order_by'] == 'high_low'){
                $args['meta_key'] = '_lp_price';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'DESC';
            }
            
       } // end sort
    }
    
 
    $allpostloding = new WP_Query($args);
  
    while($allpostloding->have_posts()){ $allpostloding->the_post(); 
      get_template_part( 'learnpress/content-course', 'archive-grid' );    
    }

    wp_reset_postdata();
    wp_die();
}

add_action( 'wp_ajax_nopriv_bisy_course_post_ajax_loading', 'bisy_post_ajax_loading_cb' );
add_action( 'wp_ajax_bisy_course_post_ajax_loading', 'bisy_post_ajax_loading_cb' );


/*************************************
/*******  Load More Course List  ********
**************************************/


function bisy_course_list_ajax_loading_cb(){  
    
    $paged           = isset($_REQUEST['paged'])?$_REQUEST['paged']:1;
    $course_order_by = 'DESC';
    
    $args            = array( 
		'post_type'      => LP_COURSE_CPT,
		'orderby'        => 'modified',
		'order'          => $course_order_by,
		'posts_per_page' => LP()->settings->get('learn_press_archive_course_limit'),
		'paged'          => $paged
    );
        
    // Optional argument
    if(isset($_REQUEST['settings'])){

        $settings =  $_REQUEST["settings"]; 
       
        //search 

        if( isset($settings['s']) && $settings['s'] !='') {
            $args['s'] = $settings['s'];
        }
    
        // order by
        if( isset($settings['order_by']) ) {

            $post_in =  bisy_course_popular_ids();

            if($settings['order_by'] == 'alphabetical'){
                $args['orderby'] = 'title';
                $args['order']   = 'ASC';
            }elseif($settings['order_by'] == 'newly-published'){
                $args['orderby'] = 'post_date';
                $args['order']   = 'DESC';
            
            }elseif($settings['order_by']=='feature'){
                $args['meta_query'] = array(
                    array(
                        'key' => '_lp_featured',
                        'value' =>  'yes',
                    )
                );
            }elseif($settings['order_by'] == 'popularity' && is_array($post_in)){
                $args['post__in'] = $post_in;
                $args['orderby']  = 'post__in';
            }elseif($settings['order_by'] == 'low_to_high'){
                $args['meta_key'] = '_lp_price';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'ASC';
            }elseif($settings['order_by'] == 'high_low'){
                $args['meta_key'] = '_lp_price';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'DESC';
            }
            
       } // end sort
    }

    $allpostloding = new WP_Query($args);
  
    while($allpostloding->have_posts()){ $allpostloding->the_post(); 
      get_template_part( 'learnpress/content-course', 'archive-list' );    
    }

    wp_reset_postdata();
    wp_die();
}

add_action( 'wp_ajax_nopriv_bisy_course_list_post_ajax_loading', 'bisy_course_list_ajax_loading_cb' );
add_action( 'wp_ajax_bisy_course_list_post_ajax_loading', 'bisy_course_list_ajax_loading_cb' );

