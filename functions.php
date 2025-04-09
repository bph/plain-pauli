<?php

function my_style_red(){

    register_block_style(
        'core/image',
        array(
            'name'         => 'red-border',
            'label'        => __( 'Red Border', 'my-theme' )
        )
    );
}
add_action( 'init', 'my_style_red' );

/**
 * Now we work with JavaScript
 * - register block styles via JavaScript
 * - unregister core block styles via JavaScript
**/


function pauli_block_editor_scripts() {
	    wp_enqueue_script( 
            'pauli-editor', 
            get_theme_file_uri( '/js/curate-core.js' ), 
            array( 'wp-blocks', 'wp-dom' ), 
            wp_get_theme()->get( 'Version' ), true 
        );
        }
        
add_action( 'enqueue_block_editor_assets', 'pauli_block_editor_scripts' );