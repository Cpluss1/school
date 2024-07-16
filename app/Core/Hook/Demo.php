<?php
namespace Bisy\Core\Hook;

/**
 * demo import.
 */
class Demo
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register()
	{
	
       add_filter( 'fw:ext:backups-demo:demos', [$this,'backups_demos'] );
       add_action('fw:ext:backups:tasks:success',[$this,'after_succeess_restore_demo']);
	}
	
    function backups_demos( $demos ) {
        
        $demo_content_installer	 = 'http://wp.quomodosoft.com/bisy/demo-content';

        $demos_array			 = array(
            'default'			 => array(
                    'title'			 => esc_html__( 'Demo', 'bisy' ),
                    'screenshot'	 => esc_url( $demo_content_installer ) . '/screenshot.png',
                    'preview_link'	 => esc_url( 'https://themeforest.net/user/bisy/portfolio' ),
            ),
            
        );

        $download_url			 = esc_url( $demo_content_installer ) . '/download.php';
        
        foreach ( $demos_array as $id => $data ) {
            $demo		 = new \FW_Ext_Backups_Demo( $id, 'piecemeal', array(
                'url'		 => $download_url,
                'file_id'	 => $id,
            ) );
            $demo->set_title( $data[ 'title' ] );
            $demo->set_screenshot( $data[ 'screenshot' ] );
            $demo->set_preview_link( $data[ 'preview_link' ] );
            $demos[ $demo->get_id() ] = $demo;
            unset( $demo );
        }

        return $demos;
    }

    function after_succeess_restore_demo($obj) {

        if(method_exists($obj, 'get_id')){
            // this tables data will be export and import
            $bisy_tables = ['users','usermeta'];
            
            global $wp_filesystem;
            require_once ( ABSPATH . '/wp-admin/includes/file.php' );
            WP_Filesystem();
        
            $id    = $obj->get_id();
            $title = $obj->get_title();
            
            // content backup after success action
            if($id == 'full-backup' || $id=='content-backup') {
                
                $demo_file_path    = BISY_THEME_DIR.'/app/Core/Hook/demo.txt';
                $bisy_demo_data = bisy_demo_data_export($bisy_tables);
                $content           = $wp_filesystem->put_contents( $demo_file_path, $bisy_demo_data);
            
            }
    
            // after demo install success action
            if($id=='demo-content-install'){
                
                     $remote_demo_file = 'https://wp.quomodosoft.com/bisy/demo-content/demo.txt';
                    if ( bisy_remote_file_exists($remote_demo_file) ) {
                        
                        $request = bisy_get_remote_demo_data($remote_demo_file);
                        if( !is_wp_error( $request ) ) {
                            $body        = wp_remote_retrieve_body( $request );
                            $return_data = bisy_demo_content_unserialize($body);
                        }
    
                        if(is_array($return_data) && count($return_data)){
                            bisy_database_table_data_import($return_data);
                        }
                        
                    }		
            } 
    
        }
        
        return $obj;
    }


}








