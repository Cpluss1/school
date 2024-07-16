<?php 

   // backup option
   CSF::createSection( BISY_OPTION_KEY, array(
           
    'title'  => esc_html__( 'Backup Options', 'bisy' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(
        array(
            'id'    => 'backup_options',
            'type'  => 'backup',
            'title' => esc_html__( 'Backup Your All Options', 'bisy' ),
            'desc'  => esc_html__( 'If you want to take backup your option you can backup here.', 'bisy' ),
        ),
    ),
) );