<?php
namespace Bisy\Core;

/**
 * Sidebar.
 */
class Footer
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'widgets_init', array( $this, 'widgets_init' ) );
    }

    /*
    *    Define the sidebar
    */
    public function widgets_init()
    {
       
        register_sidebar(
            array(
                'name'          => esc_html__('Footer One', 'bisy'),
                'id'            => 'footer-one',
                'description'   => esc_html__('Footer one Widget.', 'bisy'),
                'before_widget' => '<div id="%1$s" class="widget footer-1-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__('Footer Two', 'bisy'),
                'id'            => 'footer-two',
                'description'   => esc_html__('Footer  widget.', 'bisy'),
                'before_widget' => '<div id="%1$s" class="widget footer-2-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__('Footer Three', 'bisy'),
                'id'            => 'footer-three',
                'description'   => esc_html__('Footer widget.', 'bisy'),
                'before_widget' => '<div id="%1$s" class="widget footer-3-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
        
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Four', 'bisy'),
                'id'            => 'footer-four',
                'description'   => esc_html__('Footer widget.', 'bisy'),
                'before_widget' => '<div id="%1$s" class="widget footer-4-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

      

      
      
    }
}
