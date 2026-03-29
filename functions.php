<?php
/**
 * Child Theme Functions
 *
 * @package child-horological-monograph
 */

/**
 * Register custom blocks from the /blocks directory.
 */
function chm_register_custom_blocks() {
    $blocks_path = get_stylesheet_directory() . '/blocks/';
    
    if ( ! is_dir( $blocks_path ) ) {
        return;
    }

    $blocks = scandir( $blocks_path );

    foreach ( $blocks as $block_name ) {
        if ( $block_name === '.' || $block_name === '..' ) {
            continue;
        }

        $block_dir = $blocks_path . $block_name;

        if ( is_dir( $block_dir ) && file_exists( $block_dir . '/block.json' ) ) {
            register_block_type_from_metadata( $block_dir );
        }
    }
}
add_action( 'init', 'chm_register_custom_blocks' );

/**
 * Enqueue theme styles.
 */
function chm_enqueue_styles() {
    // Parent theme styles.
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Child theme styles.
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ), wp_get_theme()->get( 'Version' ) );

    // Header styles.
    wp_enqueue_style( 'chm-header-style', get_stylesheet_directory_uri() . '/assets/css/header.css', array( 'child-style' ), wp_get_theme()->get( 'Version' ) );

    // Footer styles.
    wp_enqueue_style( 'chm-footer-style', get_stylesheet_directory_uri() . '/assets/css/footer.css', array( 'child-style' ), wp_get_theme()->get( 'Version' ) );

    // Animations script.
    wp_enqueue_script( 'chm-animations', get_stylesheet_directory_uri() . '/assets/js/animations.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'chm_enqueue_styles', 20 );

/**
 * Enqueue editor styles for Google Fonts.
 */
function chm_editor_styles() {
    add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'chm_editor_styles' );
