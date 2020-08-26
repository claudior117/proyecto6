<?php
/**
 * Charity Pure functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package charitypure
 */

require_once get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Enqueue scripts and styles.
 */
function charitypure_scripts() {

	$parent_style = 'responsive-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/core/css/style.css' );
	wp_enqueue_style( 'charitypure-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'charitypure_scripts', 99 );

/**
 * Function to register multiple checkboxes option
 */
function charitypure_customize_controls() {
	require_once get_stylesheet_directory() . '/inc/customizer.php';
}
add_action( 'customize_register', 'charitypure_customize_controls', 0 );

/**
 * This function overrides customizer defaults of Responsive theme
 *
 * @param array $theme_options Theme Options.
 *
 * @return mixed
 */
function charitypure_override_theme_defaults( $theme_options ) {
	$theme_options['background_color']              = '#ffffff';
	$theme_options['header_background']             = '#000000';
	$theme_options['header_active_menu_background'] = 'rgba(255,255,255,0)';
	$theme_options['header_menu_link']              = 'rgba(0,0,0,0.5)';
	$theme_options['header_menu_link_hover']        = '#000000';
	$theme_options['header_site_title']             = '#ffffff';
	$theme_options['header_text']                   = '#000000';

	$theme_options['blog_entry_title_alignment'] = 'center';
	$theme_options['blog_entry_meta_alignment']  = 'center';
	$theme_options['logo_padding']               = '0';

	return $theme_options;
}

add_filter( 'responsive_theme_defaults', 'charitypure_override_theme_defaults', 10, 1 );


/**
 * This function overrides theme option defaults of Responsive theme
 *
 * @param mixed $theme_options options value.
 *
 * @return mixed
 */
function charitypure_override_option_defaults( $theme_options ) {
	$theme_options['breadcrumb'] = 1;

	return $theme_options;
}

add_filter( 'responsive_option_defaults', 'charitypure_override_option_defaults', 10, 1 );

/**
 * This function overrides responsive_theme_footer_link defaults value of Responsive theme
 *
 * @return mixed
 */
function charitypure_override_theme_footer_link() {

	return esc_url( 'https://cyberchimps.com/charitypure-lite/' );
}

add_filter( 'responsive_theme_footer_link', 'charitypure_override_theme_footer_link', 10, 1 );


/**
 * This function overrides responsive_theme_footer_link_text defaults value of Responsive theme
 *
 * @return mixed
 */
function charitypure_override_theme_footer_link_text() {

	return esc_html__( ' | Powered by Charitypure Theme', 'charitypure' );
}

add_filter( 'responsive_theme_footer_link_text', 'charitypure_override_theme_footer_link_text', 10, 1 );



/**
 * Outputs the custom styles for the theme.
 *
 * @return void
 */
function charitypure_customizer_styles() {
	$background_color = get_theme_mod( 'charitypure_header_background_color', 'rgba(255, 255, 255, 0.7)' );

	$custom_css = "
    .site-header .container{
        background-color: $background_color;
    }
";

	wp_add_inline_style( 'charitypure-style', apply_filters( 'responsive_head_css', $custom_css ) );

}

add_action( 'wp_enqueue_scripts', 'charitypure_customizer_styles', 99 );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook
 */
function charitypure_theme_support() {
	/*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
	if ( is_customize_preview() ) {
		require __DIR__ . '/inc/starter-content.php';
		add_theme_support( 'starter-content', charitypure_get_starter_content() );
	}

}

add_action( 'after_setup_theme', 'charitypure_theme_support', 20 );


/**
 * [charitypure_remove_responsive_theme_ask_for_review description].
 *
 * @return void [description]
 */
function charitypure_remove_responsive_theme_ask_for_review() {
	remove_action( 'admin_notices', 'Responsive\Admin\\responsive_ask_for_review_notice' );
	remove_action( 'admin_init', 'Responsive\Admin\\responsive_theme_notice_dismissed' );
	remove_action( 'admin_init', 'Responsive\Admin\\responsive_theme_notice_change_timeout' );
}
add_action( 'init', 'charitypure_remove_responsive_theme_ask_for_review' );

/**
 * Add Ask For Review Admin Notice.
 */
function charitypure_ask_for_review_notice() {

	if ( isset( $_GET['page'] ) && 'responsive' === $_GET['page'] ) {
		return;
	}

	if ( false === get_option( 'charitypure-theme-old-setup' ) ) {
		set_transient( 'charitypure_theme_ask_review_flag', true, MONTH_IN_SECONDS );
		update_option( 'charitypure-theme-old-setup', true );
	} elseif ( false === get_transient( 'charitypure_theme_ask_review_flag' ) && false === get_option( 'charitypure_theme_review_notice_dismissed' ) ) {

		$image_path = get_stylesheet_directory_uri() . '/assets/images/logo_charity.png';
		echo sprintf(
			'<div class="notice notice-warning ask-for-review-notice">
             					<div class="notice-image">
									<img src="%1$s" class="custom-logo" alt="Charity Pure" itemprop="logo">
								</div>
								<div class="notice-content">
									<div class="notice-heading">
										%3$s
									</div>
									%4$s<br />
									<div class="responsive-review-notice-container">
										<a href="%2$s" class="responsive-notice-close responsive-review-notice button-primary" target="_blank">
										%5$s
										</a>
										<span class="dashicons dashicons-calendar"></span>
										<a href="?charitypure-theme-review-notice-change-timeout=true" data-repeat-notice-after="60" class="responsive-notice-close responsive-review-notice">
										%6$s
										</a>
										<span class="dashicons dashicons-smiley"></span>
										<a href="?charitypure-theme-review-notice-dismissed=true" class="responsive-notice-close responsive-review-notice">
										%7$s
										</a>
									</div>
								</div>
								<div>
									<a href="?charitypure-theme-review-notice-dismissed=true">Dismiss</a>

								</div>
         					</div>',
			esc_url( $image_path ),
			'https://wordpress.org/support/theme/charitypure/reviews/#new-post',
			__( 'Hi! Thanks for using the Charity Pure theme.', 'charitypure' ),
			__( 'Can you please do us a favor and give us a 5-star rating? Your feedback keeps us motivated and helps us grow the Charity Pure community.', 'charitypure' ),
			__( 'Ok, you deserve it', 'charitypure' ),
			__( 'Nope, maybe later', 'charitypure' ),
			__( 'I already did', 'charitypure' )
		);
		do_action( 'tag_review' );
	}

}
add_action( 'admin_notices', 'charitypure_ask_for_review_notice' );


/**
 * Removed Ask For Review Admin Notice when dismissed.
 */
function charitypure_theme_notice_dismissed() {
	if ( isset( $_GET['charitypure-theme-review-notice-dismissed'] ) ) {
		update_option( 'charitypure_theme_review_notice_dismissed', true );
		wp_safe_redirect( remove_query_arg( array( 'charitypure-theme-review-notice-dismissed' ), wp_get_referer() ) );
	}
}
add_action( 'admin_init', 'charitypure_theme_notice_dismissed' );

/**
 * Removed Ask For Review Admin Notice when dismissed.
 */
function charitypure_theme_notice_change_timeout() {
	if ( isset( $_GET['charitypure-theme-review-notice-change-timeout'] ) ) {
		set_transient( 'charitypure_theme_ask_review_flag', true, DAY_IN_SECONDS );
		wp_safe_redirect( remove_query_arg( array( 'charitypure-theme-review-notice-change-timeout' ), wp_get_referer() ) );
	}
}
add_action( 'admin_init', 'charitypure_theme_notice_change_timeout' );
