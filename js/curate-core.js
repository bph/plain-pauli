/**
 * Unregister Image block styles.
 */
wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/image', [ 'rounded' ] );
} );

console.log('curate-core loaded')