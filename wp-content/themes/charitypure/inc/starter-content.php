<?php
/**
 * Charity Pure Starter Content
 *
 * @package Charity Pure
 * @since Charity Pure 4.0.2
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `charitypure_starter_content` filter before returning.
 *
 * @since Charity Pure 4.0.2
 * @return array a filtered array of args for the starter_content.
 */
function charitypure_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets'    => array(
			// Place one core-defined widgets in the first footer widget area.
			'sidebar-1' => array(
				'text_about',
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'      => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => __( 'Home', 'charitypure' ),
				'template'     => 'gutenberg-fullwidth.php',
				'post_content' => join(
					'',
					array(
						'<!-- wp:cover {"url":"' . get_theme_file_uri() . '/assets/images/charity-bg.jpg' . '","id":7,"dimRatio":60,"customOverlayColor":"#575656","minHeight":750,"align":"full"} -->', // phpcs:ignore
						'<div class="wp-block-cover alignfull has-background-dim-60 has-background-dim" style="background-image:url(' . get_theme_file_uri() . '/assets/images/charity-bg.jpg' . ');background-color:#575656;min-height:750px">', // phpcs:ignore
						'<div class="wp-block-cover__inner-container">',
						'<!-- wp:spacer -->',
						'<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>',
						'<!-- /wp:spacer -->',
						'<!-- wp:columns -->',
						'<div class="wp-block-columns">',
						'<!-- wp:column {"width":41.8} -->',
						'<div class="wp-block-column" style="flex-basis:41.8%">',
						'<!-- wp:heading {"level":1,"textColor":"button-hover-text-color"} -->',
						'<h1 class="has-button-hover-text-color-color has-text-color">WE LOVE WHAT WE DO</h1>',
						'<!-- /wp:heading -->',
						'<!-- wp:paragraph -->',
						'<p>Lorem<strong> </strong>Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>',
						'<!-- /wp:paragraph -->',
						'<!-- wp:buttons -->',
						'<div class="wp-block-buttons">',
						'<!-- wp:button {"backgroundColor":"button-hover-text-color","textColor":"responsive-container-background-color","borderRadius":8,"className":"is-style-fill"} -->',
						'<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-text-color has-responsive-container-background-color-color has-background has-button-hover-text-color-background-color" style="border-radius:8px">Donate Now</a></div>',
						'<!-- /wp:button --></div>',
						'<!-- /wp:buttons --></div>',
						'<!-- /wp:column -->',
						'<!-- wp:column -->',
						'<div class="wp-block-column"></div>',
						'<!-- /wp:column --></div>',
						'<!-- /wp:columns -->',
						'<!-- wp:spacer -->',
						'<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>',
						'<!-- /wp:spacer --></div></div>',
						'<!-- /wp:cover -->',
						'<!-- wp:spacer -->',
						'<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>',
						'<!-- /wp:spacer -->',
						'<!-- wp:columns {"verticalAlignment":"center"} -->',
						'<div class="wp-block-columns are-vertically-aligned-center">',
						'<!-- wp:column {"verticalAlignment":"center"} -->',
						'<div class="wp-block-column is-vertically-aligned-center">',
						'<!-- wp:image {"align":"left","id":17,"sizeSlug":"large"} -->',
						'<div class="wp-block-image"><figure class="alignleft size-large"><img src="' . get_theme_file_uri() . '/assets/images/charity1.jpg" alt="" class="wp-image-17"/></figure></div>',
						'<!-- /wp:image --></div>',
						'<!-- /wp:column -->',
						'<!-- wp:column {"verticalAlignment":"center"} -->',
						'<div class="wp-block-column is-vertically-aligned-center">',
						'<!-- wp:heading --><h2>About Us</h2><!-- /wp:heading -->',
						'<!-- wp:paragraph -->',
						'<p>Lorem<strong> </strong>Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>',
						'<!-- /wp:paragraph -->',
						'<!-- wp:buttons -->',
						'<div class="wp-block-buttons">',
						'<!-- wp:button {"borderRadius":8} -->',
						'<div class="wp-block-button"><a class="wp-block-button__link" style="border-radius:8px">Read More</a></div>',
						'<!-- /wp:button --></div>',
						'<!-- /wp:buttons --></div>',
						'<!-- /wp:column --></div>',
						'<!-- /wp:columns -->',
						'<!-- wp:spacer -->',
						'<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>',
						'<!-- /wp:spacer -->',
						'<!-- wp:columns -->',
						'<div class="wp-block-columns">',
						'<!-- wp:column -->',
						'<div class="wp-block-column">',
						'<!-- wp:image {"id":23,"sizeSlug":"large"} -->',
						'<figure class="wp-block-image size-large"><img src="' . get_theme_file_uri() . '/assets/images/charity4.jpg" alt="" class="wp-image-23"/></figure>',
						'<!-- /wp:image -->',
						'<!-- wp:heading {"align":"center"} -->',
						'<h2 class="has-text-align-center">Animal</h2>',
						'<!-- /wp:heading -->',
						'<!-- wp:paragraph {"align":"center"} -->',
						'<p class="has-text-align-center">LoremIpsum is simply dummy text of the printing and typesetting industry. </p>',
						'<!-- /wp:paragraph --></div>',
						'<!-- /wp:column -->',
						'<!-- wp:column -->',
						'<div class="wp-block-column">',
						'<!-- wp:image {"id":24,"sizeSlug":"large"} -->',
						'<figure class="wp-block-image size-large"><img src="' . get_theme_file_uri() . '/assets/images/charity5.jpg"" alt="" class="wp-image-24"/></figure>',
						'<!-- /wp:image -->',
						'<!-- wp:heading {"align":"center"} -->',
						'<h2 class="has-text-align-center">Education</h2>',
						'<!-- /wp:heading -->',
						'<!-- wp:paragraph {"align":"center"} -->',
						'<p class="has-text-align-center">LoremIpsum is simply dummy text of the printing and typesetting industry.</p>',
						'<!-- /wp:paragraph --></div>',
						'<!-- /wp:column -->',
						'<!-- wp:column -->',
						'<div class="wp-block-column">',
						'<!-- wp:image {"id":25,"sizeSlug":"large"} -->',
						'<figure class="wp-block-image size-large"><img src="' . get_theme_file_uri() . '/assets/images/charity6.jpg" alt="" class="wp-image-25"/></figure>',
						'<!-- /wp:image -->',
						'<!-- wp:heading {"align":"center"} -->',
						'<h2 class="has-text-align-center">Health</h2>',
						'<!-- /wp:heading -->',
						'<!-- wp:paragraph {"align":"center"} -->',
						'<p class="has-text-align-center">LoremIpsum is simply dummy text of the printing and typesetting industry.</p>',
						'<!-- /wp:paragraph --></div>',
						'<!-- /wp:column --></div>',
						'<!-- /wp:columns -->',
						'<!-- wp:spacer -->',
						'<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>',
						'<!-- /wp:spacer -->',
						'<!-- wp:cover {"url":"' . get_theme_file_uri() . '/assets/images/charitybg1.jpg' . '","id":28,"align":"full"} -->', // phpcs:ignore
						'<div class="wp-block-cover alignfull has-background-dim" style="background-image:url(' . get_theme_file_uri() . '/assets/images/charitybg1.jpg' . ')">', // phpcs:ignore
						'<div class="wp-block-cover__inner-container">',
						'<!-- wp:spacer -->',
						'<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>',
						'<!-- /wp:spacer -->',
						'<!-- wp:heading {"align":"center","level":1,"textColor":"button-hover-text-color"} -->',
						'<h1 class="has-button-hover-text-color-color has-text-color has-text-align-center">HOW COULD YOU HELP ?</h1>',
						'<!-- /wp:heading -->',
						'<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->',
						'<p class="has-text-align-center has-normal-font-size">Lorem<strong> </strong>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>',
						'<!-- /wp:paragraph -->',
						'<!-- wp:buttons {"align":"center"} -->',
						'<div class="wp-block-buttons aligncenter">',
						'<!-- wp:button {"borderRadius":8} -->',
						'<div class="wp-block-button"><a class="wp-block-button__link" style="border-radius:8px">Donate Now</a></div>',
						'<!-- /wp:button --></div>',
						'<!-- /wp:buttons -->',
						'<!-- wp:spacer -->',
						'<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>',
						'<!-- /wp:spacer --></div></div>',
						'<!-- /wp:cover -->',
						'<!-- wp:cover {"overlayColor":"responsive-container-background-color","align":"full"} -->',
						'<div class="wp-block-cover alignfull has-responsive-container-background-color-background-color has-background-dim">',
						'<div class="wp-block-cover__inner-container">',
						'<!-- wp:columns -->',
						'<div class="wp-block-columns">',
						'<!-- wp:column -->',
						'<div class="wp-block-column">',
						'<!-- wp:heading {"textColor":"button-hover-text-color"} -->',
						'<h2 class="has-button-hover-text-color-color has-text-color">Charity-Pure</h2>',
						'<!-- /wp:heading -->',
						'<!-- wp:paragraph -->',
						'<p>LoremIpsum is simply dummy text of the printing and typesetting industry.</p>',
						'<!-- /wp:paragraph --></div>',
						'<!-- /wp:column -->',
						'<!-- wp:column -->',
						'<div class="wp-block-column">',
						'<!-- wp:heading {"textColor":"button-hover-text-color"} -->',
						'<h2 class="has-button-hover-text-color-color has-text-color">Follow Us</h2>',
						'<!-- /wp:heading -->',
						'<!-- wp:social-links -->',
						'<ul class="wp-block-social-links">',
						'<!-- wp:social-link {"url":"#","service":"facebook"} /-->',
						'<!-- wp:social-link {"url":"#","service":"twitter"} /-->',
						'<!-- wp:social-link {"url":"#","service":"instagram"} /-->',
						'<!-- wp:social-link {"url":"#","service":"linkedin"} /-->',
						'<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>',
						'<!-- /wp:social-links --></div>',
						'<!-- /wp:column -->',
						'<!-- wp:column -->',
						'<div class="wp-block-column">',
						'<!-- wp:heading {"textColor":"button-hover-text-color"} -->',
						'<h2 class="has-button-hover-text-color-color has-text-color">Contact Us</h2>',
						'<!-- /wp:heading -->',
						'<!-- wp:list -->',
						'<ul><li>+123 456 7890</li><li>123, Main Street, Anytown, ST 12345</li></ul>',
						'<!-- /wp:list --></div>',
						'<!-- /wp:column --></div>',
						'<!-- /wp:columns -->',
						'<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->',
						'<p class="has-text-align-center has-large-font-size"></p>',
						'<!-- /wp:paragraph --></div></div>',
						'<!-- /wp:cover -->',
					)
				),
			),
			'about',
			'blog',
			'services',
			'contact',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'    => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'  => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => __( 'Primary', 'charitypure' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_services',
					'page_contact',
				),
			),
		),

		// Custom setting.
		'theme_mods' => array(
			'responsive_hide_tagline'            => 1,
			'responsive_header_background_color' => '#ffffff',
			'responsive_header_site_title_color' => '#000000',
		),
	);

	/**
	 * Filters Charity Pure array of starter content.
	 *
	 * @since Charity Pure 1.0
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'charitypure_starter_content', $starter_content );

}
