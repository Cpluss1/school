<?php 

/* post view count 
* function to display number of posts.
*/
// ::::::::::::::::::::::::::::
function bisy_get_postview($postID){

   $count_key = 'bisy_post_views_count';
   $count     = get_post_meta($postID, $count_key, true);

   if($count==''){
       return "0";
   }

   return $count;
}

function bisy_google_fonts_url($font_families	 = []) {
	$fonts_url		 = '';
	/*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
    */
	if ( $font_families && 'off' !== _x( 'on', 'Google font: on or off', 'bisy' ) ) { 
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) )
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
   
	return esc_url_raw( $fonts_url );
}

// function to count views.
function bisy_set_postview($postID=null) {

   if( is_null($postID) ){
      $postID = get_the_ID();
   }   

   $count_key = 'bisy_post_views_count';
   $count     = get_post_meta($postID, $count_key, true);

   if( $count=='' ){

       $count = 0;
       delete_post_meta( $postID, $count_key );
       add_post_meta( $postID, $count_key, '0' );
  
      }else{
  
         $count++;
         update_post_meta($postID, $count_key, $count);
         
   }

}

/* return the specific value from theme options  */
if(!function_exists('bisy_option')){

   function bisy_option( $option = '', $default = '' , $parent = 'bisy_settings') {
      
      if( class_exists( 'CSF' ) ){
         $options = get_option( $parent ); 
         return ( isset( $options[$option] ) ) ? $options[$option] : $default;
      }
      
      return $default;
   }
} 

// return the specific value from metabox
// ----------------------------------------------------------------------------------------
if(!function_exists('bisy_meta_option')){

   function bisy_meta_option( $postid, $key, $default_value = '', $parent_key = '' ) {
      
      $post_key = 'bisy_post_options';
      // page meta
      if(is_singular( 'page' )){
         $post_key = 'bisy_page_options';
      }
       // post meta
      if(is_singular('post')){
         $post_key = 'bisy_post_options';
      }
      // custom post meta

      if(is_singular('lp_course')){
         $post_key = 'bisy_lp_course_options';
      }

      if(is_singular('bisy-events')){
         $post_key = 'bisy_events_options';
      }

      
      if($parent_key !=''){
         $post_key = $parent_key;
      }

 
      if( class_exists( 'CSF' ) ){
         $options = get_post_meta( $postid , $post_key, true );
         return ( isset( $options[$key] ) ) ? $options[$key] : $default_value; 
         
      }
      
      return $default_value;
   }
}


// return the specific value from term/ taxomony metabox
// ----------------------------------------------------------------------------------------
if( !function_exists('bisy_term_option')):

function bisy_term_option( $termid, $key, $default_value = '', $taxomony = 'category') {
   
   if ( defined( 'FW' ) ) {
		$value = fw_get_db_term_option($termid, $taxomony, $key);
	}
   
   return (!isset($value) || $value == '') ? $default_value :  $value;
}

endif;

// get theme setting option

if( !function_exists('bisy_user_meta_option')):
   function bisy_carbon_option( $key, $default_value = '', $method = 'option' ) {
       
       if ( defined( 'QTRP' ) ) {
           switch ( $method ) {
               case 'settings':
                   $value = carbon_get_theme_option( $key );
                   break;
               case 'option':
                   $value = carbon_get_theme_option( $key );
                   break;
               default:
                   $value = '';
                   break;
           }
           return (!isset($value) || $value == '') ? $default_value :  $value;
       }
       return $default_value;
   }
endif;

// get theme post ,page meta option
if( !function_exists('bisy_user_meta_option')): 
   function bisy_carbon_meta_option( $postid, $key, $default_value = '' ) {
       if ( defined( 'QTRP' ) ) {
           $value = carbon_get_post_meta($postid, $key);
       }
       return (!isset($value) || $value == '') ? $default_value :  $value;
   }
endif;

// get user meta option
if( !function_exists('bisy_user_meta_option')): 
   function bisy_user_meta_option( $user_id, $key, $default_value = '' ) {
       if ( defined( 'QTRP' ) ) {
           $value = carbon_get_user_meta($user_id, $key);
       }
       return (!isset($value) || $value == '') ? $default_value :  $value;
   }
endif;

// get comment meta option
if( !function_exists('bisy_comment_meta_option')): 
   function bisy_comment_meta_option( $comment_id, $key, $default_value = '' ) {

       if ( defined( 'QTRP' ) ) {
           $value = carbon_get_comment_meta($comment_id, $key);
       }
       return (!isset($value) || $value == '') ? $default_value :  $value;

   }
endif;

// get nav meta option
function bisy_nav_menu_item_meta_option( $menu_id, $key, $default_value = '' ) {
	if ( defined( 'QTRP' ) ) {
		$value = carbon_get_nav_menu_item_meta($menu_id, $key);
	}
	return (!isset($value) || $value == '') ? $default_value :  $value;
}

// get category ,taxonomy meta option
function bisy_carbon_term_meta_option( $term_id,  $option_id, $default_value = null ) {
	if ( defined( 'QTRP' ) ) {
		$value = carbon_get_term_meta($term_id, $option_id );
	}
	return (!isset($value) || $value == '') ? $default_value :  $value;
}

// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function bisy_kses( $raw ) {

	$allowed_tags = array(
		'a'								 => array(
			'class'	 => array(),
			'href'	 => array(),
			'rel'	 => array(),
			'title'	 => array(),
			'target'	 => array(),
      ),
      'option' => array(
         'value'	 => array(),
		
      ),
		'abbr'							 => array(
			'title' => array(),
		),
		'b'								 => array(),
		'blockquote'					 => array(
			'cite' => array(),
		),
		'cite'							 => array(
			'title' => array(),
		),
		'code'							 => array(),
		'del'							 => array(
			'datetime'	 => array(),
			'title'		 => array(),
		),
		'dd'							 => array(),
		'div'							 => array(
			'class'	 => array(),
			'title'	 => array(),
			'style'	 => array(),
		),
		'dl'							 => array(),
		'dt'							 => array(),
		'em'							 => array(),
		'h1'							 => array(),
		'h2'							 => array(),
		'h3'							 => array(),
		'h4'							 => array(),
		'h5'							 => array(),
		'h6'							 => array(),
		'i'								 => array(
			'class' => array(),
		),
		'img'							 => array(
			'alt'	 => array(),
			'class'	 => array(),
			'height' => array(),
			'src'	 => array(),
			'width'	 => array(),
		),
		'li'							 => array(
			'class' => array(),
		),
		'ol'							 => array(
			'class' => array(),
		),
		'p'								 => array(
			'class' => array(),
		),
		'q'								 => array(
			'cite'	 => array(),
			'title'	 => array(),
		),
		'span'							 => array(
			'class'	 => array(),
			'title'	 => array(),
			'style'	 => array(),
		),
		'iframe'						 => array(
			'width'			 => array(),
			'height'		 => array(),
			'scrolling'		 => array(),
			'frameborder'	 => array(),
			'allow'			 => array(),
			'src'			 => array(),
		),
		'strike'						 => array(),
		'br'							 => array(),
		'strong'						 => array(),
		'data-wow-duration'				 => array(),
		'data-wow-delay'				 => array(),
		'data-wallpaper-options'		 => array(),
		'data-stellar-background-ratio'	 => array(),
		'ul'							 => array(
			'class' => array(),
		),
	);

	if ( function_exists( 'wp_kses' ) ) { // WP is here
		$allowed = wp_kses( $raw, $allowed_tags );
	} else {
		$allowed = $raw;
	}

	return $allowed;
}


function bisy_get_excerpt($count = 100 ) {
 
   $count = bisy_desc_limit($count);
  
   $bisy_blog_read_more_text = esc_html__('Readmore','bisy');
  
   $excerpt = get_the_excerpt();
   $excerpt = esc_html($excerpt);
   $words   = str_word_count($excerpt, 2);
   $pos     = array_keys($words);

   if(count($words)>$count){
      $excerpt = substr($excerpt, 0, $pos[$count]); 
   }
 
   $excerpt = wp_kses_post($excerpt);
 
   return $excerpt;

}

 function bisy_desc_limit($default){

      if(!is_single() && !is_page()) {
        
         if(bisy_option('bisy_categry_post_desc_lenght') ){
            return bisy_option('bisy_categry_post_desc_lenght');
         }else{
            return $default;
         }
      }else{
         return $default;
	  }
	  
   }

   // related post by tags
   
function bisy_related_posts_by_tags( $post_id = '', $feature_image = false ) {
    
   try{
       
         if($post_id==''){
            $post_id = get_the_ID();
         }
        
         $related_count = bisy_option('blog_related_post_number',3);
    
         $tags      = wp_get_post_tags($post_id);
         $term_tags = wp_list_pluck($tags,'term_id');
         $args = array(
   
            'tag__in'             => $term_tags,
            'post__not_in'        => array($post_id),
            'posts_per_page'      => $related_count,
            'ignore_sticky_posts' => 1,

         );
         
         if($feature_image){
            $args["meta_query"] = array(
               array(
                  'key'     => '_thumbnail_id',
                  'compare' => 'EXISTS'
               ),
            );
         }
         
       return new WP_Query($args);
 
    } catch(Exception $e) {
     
    return new WP_Query( [] ); 
 
   }
 
 }

function bisy_related_posts_by_sticky(  ) {
	
    if(!is_category()){
      return new WP_Query( [] ); 
    }

   try{
      
       $term = get_queried_object();
       $args = [
      
            'post_type'           => 'post',
            'post__in'            => get_option( 'sticky_posts' ),
            'posts_per_page'      => 10,
            'ignore_sticky_posts' => 1,
            'tax_query' => array(
               array (
                  'taxonomy' => 'category',
                  'field' => 'slug',
                  'terms' => $term->slug,
               )
         ),

       ];
   
 
       return new WP_Query($args);
 
    } catch(Exception $e) {
 
    return new WP_Query( [] ); 
 
   }
 
 }

 function bisy_src( $key, $default_value = '', $input_as_attachment = false ) { // for src
   
   if ( $input_as_attachment == true ) {
		$attachment = $key;
	} else {
      $attachment = bisy_option( $key );
     
	}

	if ( isset( $attachment[ 'url' ] ) && !empty( $attachment ) ) {
		return $attachment[ 'url' ];
	}

	return $default_value;
}

if ( ! function_exists( 'bisy_ad' ) ) :

function bisy_ad($key, $default){
	
   $ad = bisy_option($key, ['ad_link' => '', 'ad_html' => '']);
   
	if($ad['ad_link'] != '' || $ad['ad_link'] != '' || isset($ad['ad_image']) || $ad['ad_html'] != ''){
		if($ad['ad_html'] != ''){
			echo bisy_return($ad['ad_html']);
		}else{
			if(isset($ad['ad_image'])){
				
				$img_url = $ad['ad_image'];
				if(!isset($img_url['url'])){
				  return;
				}
			}
			?>
			<a href="<?php echo esc_url($ad['ad_link']); ?>" target="_blank">
				<img src="<?php echo esc_url($ad['ad_image']['url']); ?>" alt="<?php echo esc_attr('Bisy ads', 'bisy'); ?>">
			</a>
			<?php
		}
	}
}

endif;



if(!function_exists('bisy_social_share_list')):
function bisy_social_share_list(){

   $data = array(
      ''              => '---',
      'facebook'      => 'facebook',
      'twitter'       => 'twitter',
      'linkedin'      => 'linkedin',
      'pinterest'     => 'pinterest ',
      'digg'          => 'digg',
      'tumblr'        => 'tumblr',
      'blogger'       => 'blogger',
      'reddit'        => 'reddit',
      'delicious'     => 'delicious',
      'flipboard'     => 'flipboard',
      'vkontakte'     => 'vkontakte',
      'odnoklassniki' => 'odnoklassniki',
      'moimir'        => 'moimir',
      'livejournal'   => 'livejournal',
      'blogger'       => 'blogger',
      'evernote'      => 'evernote',
      'flipboard'     => 'flipboard',
      'mix'           => 'mix',
      'meneame'       => 'meneame',
      'pocket'        => 'pocket',
      'surfingbird'   => 'surfingbird ',
      'liveinternet'  => 'liveinternet',
      'buffer'        => 'buffer',
      'instapaper'    => 'instapaper',
      'xing'          => 'xing',
      'wordpres'      => 'wordpres',
      'baidu'         => 'baidu',
      'renren'        => 'renren',
      'weibo'         => 'weibo',
    
     
   );

   return $data;
}
endif;


if( !function_exists('bisy_get_fb_share_count') ):

   function bisy_get_fb_share_count($post_id = null){
      
      $cache_key    = 'bisy_fb_share_' . $post_id;
      $url          = get_permalink( $post_id );
      $access_token = bisy_get_fb_secret_key();
     
      $api_url      = 'https://graph.facebook.com/v3.0/?id=' . urlencode( $url ) . '&fields=engagement&access_token=' . $access_token;
      $json_return  = wp_remote_get( $api_url );
      $responseBody = wp_remote_retrieve_body( $json_return );
      $result       = json_decode( $responseBody );
     
      if ( is_object( $result ) && ! is_wp_error( $result ) ) {
         
         if(isset($result->engagement)){
            $fb_share = $result->engagement;
            if(isset($fb_share->share_count)){
               return $fb_share;
            }
         }   
       
      }

      return false;
      
   }

endif;

// get facebook api key
function bisy_get_fb_secret_key(){

   $facebook_api  = bisy_option('facebook_api');
  
   if( isset($facebook_api['app_id']) && isset($facebook_api['secret_code']) ){
     if($facebook_api['app_id'] !='' && $facebook_api['secret_code'] !=''){
        return $facebook_api['app_id'].'|'.$facebook_api['secret_code'];
     } 
   }
   // default key
   return '3190052791219248|8604c5a80339a8db79877944e852227b';
}


function bisy_lessThanfewMonth($date,$valid = 30) {
   $earlier = new DateTime($date);
   $later   = new DateTime();
   return $later->diff($earlier)->format("%a") > 30?esc_html__('Old Writter','bisy'):esc_html__('New Writter','bisy');
  
}


function bisy_is_footer_widget_active(){

   $footer_widget = false;

    if( 
        is_active_sidebar('footer-one') 
       || is_active_sidebar('footer-two') 
       || is_active_sidebar('footer-three') 
       || is_active_sidebar('footer-four') 
   
      ){

         $footer_widget = true;  
       }else{
         $footer_widget = false;
      }  
    
   return $footer_widget;    
}



// ad allowed pages
if(!function_exists('bisy_footer_allowed_pages')){

   function bisy_footer_allowed_pages($option=null){
      // show in all over blog
      if(is_null($option)){
         return true;
      }
      //filter
      $current_option = []; 
      if(is_category()){
         $current_option[]= 'category'; 
      }

     if(is_tag()){
      $current_option[]= 'tags'; 
     }

     if(is_archive()){
      $current_option[]= 'archive'; 
     }

     if(is_singular('post')){
      $current_option[]= 'post'; 
     }

     if(is_author()){
      $current_option[]= 'author'; 
     }
     
     if(is_search()){
      $current_option[]= 'search'; 
     }
     
     if(is_404()){
      $current_option[]= '404'; 
     }
    
     
     if(is_singular('page')){
      
       $current_option[]= 'page';  
     }

     if(is_main_query()){
         $page_for_posts = get_option( 'page_for_posts' );
         if(get_queried_object_id() == $page_for_posts){
            $current_option[]= 'blog'; 
         }
     }
    
     $found = array_intersect($option, $current_option);
    
     if(is_array($found) && count($found)){
        return true; 
     }   
     return false;

   } 
}

function bisy_get_available_month(){
   global $wpdb;
   $month_list = []; 

   try{
      $months = $wpdb->get_results("SELECT DISTINCT(MONTH(post_date)) as month FROM $wpdb->posts",ARRAY_A);
      foreach($months as $month ){
         $monthName = date_i18n('F', mktime(0, 0, 0, $month['month'], 10)); // March

         $month_list[$month['month']] = $monthName;
      }
   
      ksort($month_list);
    
      return $month_list; 
   } catch (Exception $e) {

      return $month_list; 
   }

}

function bisy_get_available_year(){

   global $wpdb;
   $year_list = []; 

   try{
      $years = $wpdb->get_results("SELECT DISTINCT(year(post_date)) as year FROM $wpdb->posts",ARRAY_A);
      foreach($years as $year ){
      
         $year_list[] = $year['year'];
      }
   
      sort($year_list);
     
      return $year_list; 
   } catch (Exception $e) {
      
      return $year_list; 
   }

}
 // footer cta
if(!function_exists('bisy_footer_cta_allowed_pages')){

   function bisy_footer_cta_allowed_pages($option=null){
      
      // show in all over blog
      if(is_null($option) || !is_array($option)){
         return true;
      }
      
      if(in_array('all',$option)){
         return true;
      }
      //filter
      $current_option = []; 
     

     if(is_singular('post')){
      $current_option[]= 'post'; 
     }

     if(is_author() || is_search() || is_tag() || is_category() || is_archive()){
      $current_option[]= 'blog'; 
     }
    
     if(is_singular('page')){
       $call_to_action_enable = bisy_meta_option( get_the_id(),'newslatter_enable',1 );
      
       if($call_to_action_enable){
         $current_option[] = 'page';  
       }else{
            $key = array_search('page', $current_option);
            if ($key !== false) {
               unset($current_option[$key]);
            }
       }
      
     }

     if(is_singular('quomodo-case')){
      $current_option[]= 'case';  
    }
    
    if(is_singular('lp_course')){
      
      $current_option[]= 'lms';  
    }

    if( function_exists('learn_press_is_course_archive') && learn_press_is_course_archive() ){
      $current_option[]= 'lms';  
    }
    
     if(is_main_query()){
         $page_for_posts = get_option( 'page_for_posts' );
         if(get_queried_object_id() == $page_for_posts){
            $current_option[]= 'blog'; 
         }
     }
    
     $found = array_intersect($option, $current_option);
    
     if(is_array($found) && count($found)){
        return true; 
     }   
     return false;

   } 
}

function bisy_course_content(){
   
	global $post;
	setup_postdata($post);
	the_content();

}

function bisy_related_course_by_tags( $post_id = '', $related_count = 4, $feature_image = true ) {
    
	try{
		if($post_id==''){
		   $post_id = get_the_ID();
		}
		$tags  =  get_the_terms( get_the_id(), 'course_tag');

		if(!$tags) {
			return [];
		}
		
		$term_tags = wp_list_pluck($tags,'term_id');
		
		$args = array(
		   'post_type'           => 'lp_course',
		   'post__not_in'        => array($post_id),
		   'posts_per_page'      => $related_count,
		   'ignore_sticky_posts' => 1,
		   'tax_query'           => array(
			array(
				'taxonomy' => 'course_tag',
				'terms'    => $term_tags,
				'field'    => 'id',
				'operator' => 'IN'
			)
		  ),
		);
		if($feature_image){
		   $args["meta_query"] = array(
			  array(
				 'key'     => '_thumbnail_id',
				 'compare' => 'EXISTS'
			  ),
		   );
		}
  
		return get_posts($args);
  
	 } catch(Exception $e) {
  
	 return []; 
  
	}
  
  }


  
function bisy_demo_data_export($tables=['users','usermeta']){
	global $wpdb;
	$data = [];
	$tpl = [];
	$rows = [];
    if(is_array($tables)){
       foreach($tables as $name){
		  $columns = $wpdb->get_results( 'SHOW COLUMNS FROM '. $wpdb->prefix . esc_sql($name), ARRAY_A );
		  $rows_column = $wpdb->get_results( 'SELECT * FROM '. $wpdb->prefix . esc_sql($name), ARRAY_A  );
    	  $tpl[$name] = $wpdb->get_col('SHOW CREATE TABLE '. $wpdb->prefix . esc_sql($name), 1);
		  $rows[$name] = $rows_column;
	   }
	   $data['tables'] = $tpl;
	   $data['rows'] = $rows;
	}
    return json_encode($data);
}

function bisy_database_table_data_import($content=[],$tables=['users']){
	
	global $wpdb;
   
	if(is_array($content) && is_array($tables)){

		$user_table_exist = false;
		$user_table_exist = in_array('users',$tables); 

		if(!isset($content['rows'])){
			return false;
		} 	

		$tables_data = $content['rows'];	
		foreach($tables_data as $table_name => $table_row){
								
			if($user_table_exist && $table_name=='users'){

				bisy_update_user_table($table_row); 
		
			}elseif($user_table_exist && $table_name=='usermeta'){

				bisy_update_usermeta_table($table_row);
				
			}else{ } // for other customs tables
			
		}
	  
	}
}

function bisy_update_user_table($content){
	global $wpdb;
	
	if(!is_array($content)){
		return;
	}

	$table = $wpdb->prefix.'users';
	
	foreach($content as $row){
        $user_exist = get_userdata( $row['ID'] );  
		if( isset($row['ID']) && $row['ID']==1) {
		   continue; 
		}

		if($user_exist && user_can( $row['ID'], 'administrator' )){
           continue;
		}

        if(!$user_exist){
		   $wpdb->insert($table,$row); 
		}
	} 
   
}

function bisy_update_usermeta_table($content){
	
	global $wpdb;
	if(!is_array($content)){
		return;
	}
     
	$table = $wpdb->prefix.'usermeta';
	$umeta_id = $wpdb->get_results( 'SELECT umeta_id FROM '. $table, ARRAY_A );
	$usermeta_id =  wp_list_pluck($umeta_id,'umeta_id');

	foreach($content as $row){

		$user_exist = get_userdata( esc_sql($row['user_id']) ); 
		if( isset($row['ID']) && $row['user_id']==1) {
			continue; 
		 }
	 
		 if($user_exist && user_can( $row['user_id'], 'administrator' )){
			continue;
		}

		$column_exist = false;
		if(is_array($usermeta_id) && in_array($row['umeta_id'],$usermeta_id)){
			$column_exist = true;		
		}
	
	    if(!$column_exist){
		   $wpdb->insert($table,$row); 
		}

	} 
   
}

function bisy_demo_content_unserialize($content=''){
	
	$data = json_decode($content,true);
	if(is_array($data)){
	 return $data;
	}
	return [];	
}

function bisy_remote_file_exists( $url ) {
	$response = wp_remote_head( $url );
	return 200 === wp_remote_retrieve_response_code( $response );
}

function bisy_get_remote_demo_data($url=''){
	return wp_remote_get($url);
}


