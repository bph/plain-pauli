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