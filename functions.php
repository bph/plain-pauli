<?php

function my_custom_block_styles() {
    wp_enqueue_style(
        'my-image-block-style',
        get_template_directory_uri() . '/my-image-block-style.css',
        array( 'wp-edit-blocks' ),
        '1.0'
    );
   

    register_block_style(
        'core/image',
        array(
            'name'         => 'purple-border',
            'label'        => __( 'Purple Border, slightly rounded', 'my-theme' ),
            'style_handle' => 'my-image-block-style'
        )
    );

    register_block_style(
        'core/image',
        array(
            'name'         => 'red-border',
            'label'        => __( 'Red Border', 'plain-pauli' ),
            'style_handle' => 'my-image-block-style'

        )
    );
}
add_action( 'init', 'my_custom_block_styles' );