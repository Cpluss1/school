<?php
namespace Bisy\Core\Hook;
require_once BISY_THEME_DIR . '/app/Plugins/class-tgm-plugin-activation.php';
/**
 * Tags.
 */
class RequiredPlugins {
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register() {

        add_action( 'tgmpa_register', [$this, 'register_required_plugins'] );

    }

    public function register_required_plugins() {
        //required plugins

        $plugins = array(

            array(
                'name'     => esc_html__( 'Elementor', 'bisy' ),
                'slug'     => 'elementor',
                'required' => true,
            ),

            array(
                'name'     => esc_html__( 'Element Ready', 'bisy' ),
                'slug'     => 'element-ready-lite',
                'required' => true,
            ),

            array(
                'name'     => esc_html__( 'Contact form 7', 'bisy' ),
                'slug'     => 'contact-form-7',
                'required' => true,
            ),
            array(
                'name'     => esc_html__( 'Mailchimp', 'bisy' ),
                'slug'     => 'mailchimp-for-wp',
                'required' => true,
            ),

            array(
                'name'     => esc_html__( 'Unyson', 'bisy' ),
                'slug'     => 'unyson',
                'required' => true,
            ),

            array(
                'name'     => esc_html__( 'Classic editor', 'bisy' ),
                'slug'     => 'classic-editor',
                'required' => true,
            ),

            array(
                'name'     => esc_html__( 'LearnPress', 'bisy' ),
                'slug'     => 'learnpress',
                'required' => true,
            ),

            array(
                'name'     => esc_html__( 'LearnPress Review', 'bisy' ),
                'slug'     => 'learnpress-course-review',
                'required' => true,
            ),

            array(
                'name'     => esc_html__( 'LearnPress Offline Payment', 'bisy' ),
                'slug'     => 'learnpress-offline-payment',
                'required' => true,
            ),

            array(
                'name'     => esc_html__( 'WooCommerce', 'bisy' ),
                'slug'     => 'woocommerce',
                'required' => false,
            ),

            array(
                'name'     => esc_html__( 'Bisy Essentials', 'bisy' ),
                'slug'     => 'bisy-essential',
                'required' => true,
                'source'   => get_template_directory() . '/app/Plugins/archive/bisy-essential.zip', // The plugin source.
            ),
        );

        $config = array(
            'id'           => 'bisy',                   // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                       // Default absolute path to bundled plugins.
            'menu'         => 'bisy-install-plugins',   // Menu slug.
            'parent_slug'  => 'themes.php',             // Parent menu slug.
            'capability'   => 'edit_theme_options',     // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
            'has_notices'  => true,                     // Show admin notices or not.
            'dismissable'  => true,                     // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                       // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => true,                     // Automatically activate plugins after installation or not.
            'message'      => '',                       // Message to output right before the plugins table.
        );

        tgmpa( $plugins, $config );
    }

}
