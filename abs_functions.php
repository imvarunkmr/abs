<?php
/**
 * Functions required for various ABS features.
 *
 * Some of these functions are pluggable so that you can
 * override them with child themes if required.
 */

/**
 * Adds theme support for custom logo
 * As of WordPress 4.5+ *
 */
function abs_setup_logo() {
    add_theme_support( 'custom_logo' );
}
add_action( 'after_setup_theme', 'abs_setup_logo' );

/**
 * Output custom logo
 */
function abs_the_custom_logo() {
    // Maintain backward compatibility with older versions of WordPress
    if( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
}