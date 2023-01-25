<?php 
if ( ! function_exists( 'transcript_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function transcript_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'transcript_theme_support' );

/*------------------------------------------------
Enqueue styles
-------------------------------------------------*/

if ( ! function_exists( 'transcript_styles' ) ) :


function transcript_styles(){
// Register stylesheet
wp_enqueue_style('transcript_main_styles', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
wp_enqueue_style('transcript_block_styles', get_template_directory_uri() . '/assets/css/blocks.css');
}

endif;
add_action( 'wp_enqueue_scripts', 'transcript_styles' );
?>