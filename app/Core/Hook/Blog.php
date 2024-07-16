<?php
namespace Bisy\Core\Hook;

/**
 * Tags.
 */
class Blog
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register()
	{
		
		add_filter( 'comment_form_defaults', [$this,'add_submit_button_attr_class'] );
		add_filter( 'get_search_form', [$this,'search_form'] );
		
	}

	public function next_posts_link_attributes($attr){
		return 'class="page-link"';
	}
	
	public function previous_posts_link_attributes($attr){
		return 'class="page-link"';
	}

	public function search_form( $form ) {
      
		$form = '
			<form  method="get" action="' . esc_url( home_url( '/' ) ) . '" class="search-box">
			       
					<input name="s" type="search" placeholder="'.esc_attr__('Search here','bisy').'">
					<button type="submit"><i class="ti-search"></i></button>
				    
			</form>';
	   return $form;
	}

	public function add_submit_button_attr_class( $arg ) {
 
		$arg['class_submit'] = 'submit btn-comment btn btn-primary';

		return $arg;
	}

	
    // allow search post type
	function search_filter($query) {
	   
		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;
	}


}











