/**
 * NexaFusion functions and definitions
 *
 * @package NexaFusion
 */

if ( ! function_exists( 'nexafusion_setup' ) ) :
	function nexafusion_setup() {
		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		// Register menus
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'nexafusion' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'nexafusion_setup' );

/**
 * Enqueue scripts and styles.
 */
function nexafusion_scripts() {
	wp_enqueue_style( 'nexafusion-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'nexafusion_scripts' );
