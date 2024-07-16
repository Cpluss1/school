<?php
namespace Bisy\Custom;

/**
 * Extras.
 */
class Extras
{
	/**
     * register default hooks and actions for WordPress
     * @return
     */
	public function register()
	{
		add_filter( 'body_class', array( $this, 'body_class' ) );
	    add_action( 'wp_head', array( $this, 'pingback_header' )  );
	}

	public function body_class( $classes )
	{
       
		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}
		
		if ( is_active_sidebar( 'sidebar-1' ) ) {
		  $classes[] = 'sidebar-active';
		}else{
			$classes[] = 'sidebar-inactive';
		}

		$course_layout = bisy_option('learnpress_course_layout','layout-1');

		if(isset($_REQUEST['course_layout'])){
			$classes[] = $_REQUEST['course_layout'];
		}
		
	
	    return $classes;
	
	}

	public function pingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
	}
}


