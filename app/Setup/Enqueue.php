<?php
namespace Bisy\Setup;

/**
 * Enqueue.
 */
class Enqueue 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register() 
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_enqueue_scripts',  array( $this, 'admin_enqueue_scripts' )  );
	    
	}
   
    public function admin_enqueue_scripts(){
		wp_enqueue_script('jquery-repeater-min', BISY_JS . '/jquery.repeater.min.js', array('jquery'), BISY_VERSION, false);
		wp_enqueue_script('bisy-admin', BISY_JS . '/admin.js', array('jquery'), BISY_VERSION, true);
		
		$bisy_data = [
			
			'widget_update' => esc_html__( 'Already updated', 'bisy' )
	    ];
	   
	   wp_localize_script( 'bisy-admin', 'bisy_obj', $bisy_data);
	}
	public function enqueue_scripts() 
	{
		

    	// stylesheets
		// ::::::::::::::::::::::::::::::::::::::::::
		if ( !is_admin() ) {
			// wp_enqueue_style() $handle, $src, $deps, $version

			// 3rd party css
			wp_enqueue_style( 'bisy-fonts', bisy_google_fonts_url(['Open Sans:300,300i,400,400i,500,600,600i,700,700i,800,900']), null, BISY_VERSION );		
			
			wp_enqueue_style( 'bootstrap', BISY_CSS . '/bootstrap.css', null, BISY_VERSION );
			wp_enqueue_style( 'fontawesome', BISY_CSS . '/font-awesome.min.css', null, BISY_VERSION );
			wp_enqueue_style( 'elegant-icons', BISY_CSS . '/elegant-icons.css', null, BISY_VERSION );
			wp_enqueue_style( 'themify-icons', BISY_CSS . '/themify-icons.css', null, BISY_VERSION );
			wp_enqueue_style( 'animate', BISY_CSS . '/animate.css', null, BISY_VERSION );
			wp_enqueue_style( 'owl-carousel', BISY_CSS . '/owl.carousel.min.css', null, BISY_VERSION );
			wp_enqueue_style( 'owl-theme-default', BISY_CSS . '/owl.theme.default.min.css', null, BISY_VERSION );
			wp_enqueue_style( 'slick', BISY_CSS . '/slick.css', null, BISY_VERSION );
			wp_enqueue_style( 'lightcase', BISY_CSS . '/lightcase.css', null, BISY_VERSION );
			wp_enqueue_style( 'magnific-popup', BISY_CSS . '/magnific-popup.css', null, BISY_VERSION );
			// theme css
			wp_enqueue_style( 'bisy-preset', BISY_CSS . '/preset.css', null, BISY_VERSION );
			wp_enqueue_style( 'bisy-style', BISY_CSS . '/theme.css', null, BISY_VERSION );
			wp_enqueue_style( 'bisy-blog', BISY_CSS . '/blog.css', null, BISY_VERSION );
			wp_enqueue_style( 'bisy-responsive', BISY_CSS . '/responsive.css', null, BISY_VERSION );
			

		}

		// javascripts
		// :::::::::::::::::::::::::::::::::::::::::::::::
		if ( !is_admin() ) {
			
			// 3rd party scripts
				
			wp_enqueue_script( 'bootstrap', BISY_JS . '/bootstrap.min.js', array( 'jquery' ), BISY_VERSION, true );
			wp_enqueue_script( 'appear', BISY_JS . '/jquery.appear.js', array( 'jquery' ), BISY_VERSION, true );
			wp_enqueue_script( 'owl-carousel', BISY_JS . '/owl.carousel.min.js', array( 'jquery' ), BISY_VERSION, true );
			wp_enqueue_script( 'slick', BISY_JS . '/slick.js', array( 'jquery' ), BISY_VERSION, true );
			wp_enqueue_script( 'lightcase', BISY_JS . '/lightcase.js', array( 'jquery' ), BISY_VERSION, true );
			wp_enqueue_script( 'jquery-plugin', BISY_JS . '/jquery.plugin.min.js', array( 'jquery' ), BISY_VERSION, true );
			wp_enqueue_script( 'jquery-countdown', BISY_JS . '/jquery.countdown.min.js', array( 'jquery','jquery-plugin' ), BISY_VERSION, true );
			wp_enqueue_script( 'jquery-easing', BISY_JS . '/jquery.easing.1.3.js', array( 'jquery' ), BISY_VERSION, true );
			wp_enqueue_script( 'jquery-shuffle', BISY_JS . '/jquery.shuffle.min.js', array( 'jquery' ), BISY_VERSION, true );
			wp_enqueue_script( 'goodshare', BISY_JS . '/goodshare.min.js', array( 'jquery' ), BISY_VERSION, true );
			wp_enqueue_script('jquery-repeater-min', BISY_JS . '/jquery.repeater.min.js', array('jquery'), BISY_VERSION, false);
			wp_enqueue_script( 'magnific-popup', BISY_JS . '/jquery.magnific-popup.min.js', array( 'jquery' ), BISY_VERSION, true );
			
			// theme scripts
			wp_enqueue_script( 'bisy-skip-link-focus-fix', BISY_JS . '/skip-link-focus-fix.js', array( ), BISY_VERSION, true );
			wp_enqueue_script( 'bisy-script', BISY_JS . '/theme.js', array( 'jquery','bootstrap','appear','owl-carousel','slick','lightcase','jquery-countdown','jquery-easing','jquery-shuffle','goodshare','bisy-skip-link-focus-fix','jquery-repeater-min','magnific-popup' ), BISY_VERSION, true );
		
			$bisy_data = [
				 'ajax_url' => admin_url( 'admin-ajax.php' ),
				 'loadmore_text' => esc_html__( 'Loading More Posts...', 'bisy' )
			];
			
			wp_localize_script( 'bisy-script', 'bisy_obj', $bisy_data);
			// Load WordPress Comment js
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		    	wp_enqueue_script( 'comment-reply' );
			}

		}
    }
}
