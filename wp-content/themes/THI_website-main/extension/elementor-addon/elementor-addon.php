<?php
// Register Category Elementor Addon
function THIWebsite_register_category_elementor_addon( $elements_manager ) {

	$elements_manager->add_category(
		'mytheme',
		[
			'title' => esc_html__( 'My Them', 'plugin-name' ),
			'icon' => 'icon-goes-here',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'THIWebsite_register_category_elementor_addon' );

// Register Widgets Elementor Addon
function THIWebsite_register_widget_elementor_addon( $widgets_manager ) {

	// include add on
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/about-text.php' );
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/text-grid.php' );
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/post-carousel.php' );
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/post-grid.php' );
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/slides.php' );
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/testimonial-slider.php' );
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/banner-latest-news.php' );
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/my-link.php' );
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/slash.php' );
	require get_parent_theme_file_path( '/extension/elementor-addon/widgets/timeline-slider.php' );

	// register add on
	$widgets_manager->register( new \THIWebsite_Elementor_Addon_About_Text() );
	$widgets_manager->register( new \THIWebsite_Elementor_Addon_Text_Grid() );
	$widgets_manager->register( new \THIWebsite_Elementor_Addon_Post_Carousel() );
	$widgets_manager->register( new \THIWebsite_Elementor_Addon_Post_Grid() );
	$widgets_manager->register( new \THIWebsite_Elementor_Addon_Slides() );
	$widgets_manager->register( new \THIWebsite_Elementor_Addon_Testimonial_Slider() );
	$widgets_manager->register( new \THIWebsite_Elementor_Banner_Latest_News() );
	$widgets_manager->register( new \THIWebsite_Elementor_Addon_My_Link() );
	$widgets_manager->register( new \THIWebsite_Elementor_Addon_Slash() );
	$widgets_manager->register( new \THIWebsite_Elementor_Addon_Timeline_Slider() );

}
add_action( 'elementor/widgets/register', 'THIWebsite_register_widget_elementor_addon' );

// Register Script Elementor Addon
function THIWebsite_register_script_elementor_addon() {
	wp_register_script( 'THIWebsite-elementor-custom', get_theme_file_uri( '/assets/js/elementor-custom.js' ), array(), '1.0.0', true );
}
add_action( 'elementor/frontend/after_enqueue_styles', 'THIWebsite_register_script_elementor_addon' );