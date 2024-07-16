<?php 
  	
		function bisy_filter_courses_by_attributes($query){
			global $wp_query;

			if(!defined('LP_COURSE_CPT')){
			  return $query;	
			}	

		   if ( ! $query->is_main_query() ) {
			   return $query;
		   }
          
		   if ( ! is_post_type_archive( LP_COURSE_CPT ) ) {
			   return $query;
		   }
           		
		   return $query;
		  
		}
       
		add_filter( 'pre_get_posts', 'bisy_filter_courses_by_attributes', 1001 , 1 );
	
		 //course archive template file load
		
        function bisy_page_template( $template ){

			
			$category = get_queried_object(); 
           
			if (!function_exists('learn_press_is_course_archive')) {
			   return $template;	
			}
			 
			if (  learn_press_is_course_archive() || (isset($category->taxonomy) && $category->taxonomy=='bisy-skill-label') ) {
				
				if(file_exists(BISY_THEME_DIR.'/course-archive.php')){
						
					return BISY_THEME_DIR . '/course-archive.php';
				}
			}
			
			
			return $template;
			
		} 

		add_filter( 'template_include', 'bisy_page_template', 999 );
		add_filter( 'template_include', 'bisy_learn_press_page_single_template', 1200 );
		add_filter( 'learn_press_get_template', 'bisy_breadcrumb_defaults', 1200,5 );
		
		function bisy_breadcrumb_defaults($located,$template_name,$args,$template_path,	$default_path){
           
			if($template_name == 'global/breadcrumb.php'){
				
				return locate_template( array( 'template-parts/banner/content-banner-course.php' ) );
			}
			if($template_name == 'profile/dashboard/latest-courses.php'){
				return locate_template( array( 'learnpress/profile/dashboard/latest-courses.php' ) );	
			}
	
			if($template_name == 'profile/dashboard/featured-courses.php'){
				return locate_template( array( 'learnpress/profile/dashboard/featured-courses.php' ) );	
			}
			if($template_name == 'content-course.php'){
				
				return locate_template( array( 'learnpress/content-course.php' ) );
			}

			return $located;
		}
        
		function bisy_learn_press_page_single_template( $template ){
			
			 if(is_singular( 'lp_course' ) && '' == get_query_var( 'item-type' ))
			 {
				$new_template = locate_template( array( 'single-lp_course.php' ) );

				if ( '' != $new_template ) {
				   return $new_template ;
				}
				
			 }
         	
			return $template;
			
		}

	       		
		function bisy_filter_archive($args){

			if (!function_exists('learn_press_is_course_archive')) {
				return $template;	
			}

           // search
		   if(isset($_REQUEST['ref']) && $_REQUEST['ref'] == 'course'){
			   $args['s'] = sanitize_text_field($_REQUEST['s']);
		   }
		   
		   $post_in =  bisy_course_popular_ids();
          // sort
		   if( isset($_REQUEST['orderBy']) ) {

			    if($_REQUEST['orderBy']=='alphabetical'){
					$args['orderby'] = 'title';
					$args['order']   = 'ASC';
				}elseif($_REQUEST['orderBy']=='newly-published'){
					$args['orderby'] = 'post_date';
					$args['order']   = 'DESC';
				
				}elseif($_REQUEST['orderBy']=='feature'){
					$args['meta_query'] = array(
						array(
							'key' => '_lp_featured',
							'value' =>  'yes',
						)
					);
				}elseif($_REQUEST['orderBy']=='popularity' && is_array($post_in)){
					$args['post__in'] = $post_in;
					$args['orderby']  = 'post__in';
				}elseif($_REQUEST['orderBy']=='low_to_high'){
					$args['meta_key'] = '_lp_price';
					$args['orderby']  = 'meta_value_num';
					$args['order']    = 'ASC';
				}elseif($_REQUEST['orderBy']=='high_low'){
					$args['meta_key'] = '_lp_price';
					$args['orderby']  = 'meta_value_num';
					$args['order']    = 'DESC';
				}
				
		   } // end sort
           // price filter
		   if( isset( $_REQUEST['course-price-filter'] ) ) {

				if( $_REQUEST[ 'course-price-filter' ] == 'premium' ) {
					$args['meta_key'] = '_lp_price';
					$args['orderby']  = 'meta_value_num';
					$args['order']    = 'DESC';
				}

				if( $_REQUEST[ 'course-price-filter' ] == 'free' ) {
					$args['order']    = 'DESC';
					$args['meta_query'] = array(
						array(
							'key' => '_lp_price',
							'compare' => 'NOT EXISTS',
							'value' => '' // This is ignored, but is necessary...
						)
					);
				}
	
		   } // end price filter

		   

		   //filter 
		   $category = get_queried_object(); 
           if (  learn_press_is_course_archive() || (isset($category->taxonomy) && $category->taxonomy=='bisy-skill-label') ) {
			 
	
              if(isset($category->taxonomy) && $category->taxonomy=='course_category'){
				
				 $args['tax_query'] = array(
					array(
						'taxonomy' => 'course_category',
						'field'    => 'term_id',
						'terms'    => array($category->term_id),
					),
				);   
			  }elseif(isset($category->taxonomy) && $category->taxonomy=='bisy-skill-label'){
                
				$args['tax_query'] = array(
					array(
						'taxonomy' => 'bisy-skill-label',
						'field'    => 'term_id',
						'terms'    => array($category->term_id),
					),
				);  

			  }
		   }
		   
		   if(isset($_REQUEST['course_layout'])){

				$course_layout = $_REQUEST['course_layout'];

				if($course_layout == 'layout-2'){
				   $learnpress_course_layout_2_tags = bisy_option('learnpress_course_layout_2_tags');
				  
				   if($learnpress_course_layout_2_tags !=''){
						$args['tax_query'] = array(
							array(
								'taxonomy' => 'course_tag',
								'field'    => 'term_id',
								'terms'    => $learnpress_course_layout_2_tags,
							),
					  	);
				   }
				}

				if($course_layout == 'layout-3'){
					$learnpress_course_layout_3_tags = bisy_option('learnpress_course_layout_3_tags');
				   
					if($learnpress_course_layout_3_tags !=''){
						 $args['tax_query'] = array(
							 array(
								 'taxonomy' => 'course_tag',
								 'field'    => 'term_id',
								 'terms'    => $learnpress_course_layout_3_tags,
							 ),
						   );
					}
				 }

				 if($course_layout == 'layout-1'){
					$learnpress_course_layout_1_tags = bisy_option('learnpress_course_layout_1_tags');
				   
					if($learnpress_course_layout_1_tags !=''){
						 $args['tax_query'] = array(
							 array(
								 'taxonomy' => 'course_tag',
								 'field'    => 'term_id',
								 'terms'    => $learnpress_course_layout_1_tags,
							 ),
						   );
					}
				 }
			 }


			 
			 
		  
	      return $args;		
		}

		add_filter('bisy_archive_post_args','bisy_filter_archive',99);
	  
        function bisy_press_back_to_course_button() {
			$courses_link = learn_press_get_page_link( 'courses' );
			if ( ! $courses_link ) {
				return;
			}
			?>
	
			<a href="<?php echo esc_url(learn_press_get_page_link( 'courses' )); ?>"><?php esc_html__( 'Back to course', 'bisy' ); ?></a>
			<?php
		}

	 	add_action( 'bisy/after-checkout-form', 'bisy_press_back_to_course_button' );
        add_action( 'bisy/after-empty-cart-message', 'bisy_press_back_to_course_button' );

		add_filter( 'body_class', 'bisy_body_class', 10, 2 );

		function bisy_body_class( $wp_classes, $extra_classes ) {

            if(is_author()){
				$to_remove = array('author');
				$filter_class = array_diff($wp_classes, $to_remove);
			   
				return $filter_class;
			}
			return $wp_classes;
			
		}

		add_action('learn-press/profile/dashboard-summary', 'bisy_profile_dashboard'); 
		
		function bisy_profile_dashboard(){
		    $profile       = LP_Global::profile();
		    $user          = $profile->get_user();
		    $desc = get_the_author_meta( 'description', $user->get_id());
		  
		 
		}
      

