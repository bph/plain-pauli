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
        array( 'core/image' ),
        array(
            'name'         => 'red-border',
            'label'        => __( 'Red Border', 'plain-pauli' ),
            'style_data'=> array(
                            'border' => array(
                            'color' => '#cf2e2e',
                             'style' => 'solid',
                             'width' => '4px',
                             'radius' => '15px'
                            ),
			            'shadow' => array(
                            'var(--wp--preset--shadow--sharp)'
                        )
                        )

                    )
              )
            )
        );
}
add_action( 'init', 'my_custom_block_styles' );