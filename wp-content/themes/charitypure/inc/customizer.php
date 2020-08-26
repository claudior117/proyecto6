<?php
/**
 * Theme options in customizer
 *
 * @package charitypure
 */

/**
 * Customizer options
 *
 * @param array $wp_customize Customizer options.
 */
function charitypure_lite_customizer_register( $wp_customize ) {
	$wp_customize->add_setting(
		'charitypure_header_background_color',
		array(
			'default'           => 'rgba(255, 255, 255, 0.7)',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'charitypure_header_background_color',
			array(
				'label'    => __( 'Header Container Color', 'charitypure' ),
				'section'  => 'responsive_header_colors',
				'settings' => 'charitypure_header_background_color',
			)
		)
	);
}
add_action( 'customize_register', 'charitypure_lite_customizer_register' );
