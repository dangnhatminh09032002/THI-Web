<?php
/**
 * Register Sidebar
 */
add_action( 'widgets_init', 'THIWebsite_widgets_init');

function THIWebsite_widgets_init() {

	$THIWebsite_widgets_arr  =   array(

		'sidebar-main'    =>  array(
			'name'              =>  esc_html__( 'Sidebar Main', 'THIWebsite' ),
			'description'       =>  esc_html__( 'Display sidebar right or left on all page.', 'THIWebsite' )
		),

		'sidebar-footer'   =>  array(
			'name'              =>  esc_html__( 'Sidebar Footer', 'THIWebsite' ),
			'description'       =>  esc_html__('Display sidebar footer on all page.', 'THIWebsite' )
		),

	);

	foreach ( $THIWebsite_widgets_arr as $THIWebsite_widgets_id => $THIWebsite_widgets_value ) :

		register_sidebar( array(
			'name'          =>  esc_attr( $THIWebsite_widgets_value['name'] ),
			'id'            =>  esc_attr( $THIWebsite_widgets_id ),
			'description'   =>  esc_attr( $THIWebsite_widgets_value['description'] ),
			'before_widget' =>  '<section id="%1$s" class="widget %2$s">',
			'after_widget'  =>  '</section>',
			'before_title'  =>  '<h2 class="widget-title">',
			'after_title'   =>  '</h2>'
		));

	endforeach;

}