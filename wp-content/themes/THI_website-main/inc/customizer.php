<?php

function social_media( $wp_customize ){
    //Settings
    $wp_customize->add_setting( 'facebook', array( 'default' => 'https://www.facebook.com/groups/freelanceitviet' ) );
    $wp_customize->add_setting( 'linkedin', array( 'default' => 'https://jp.linkedin.com/company/goldman-sachs' ) );
    $wp_customize->add_setting( 'twitter', array( 'default' => '' ) );

    //Sections
    $wp_customize->add_section(
        'social-media',
        array(
            'title' => __( 'THI Social Media', '_s' ),
            'priority' => 30,
            'description' => __( 'Enter the URL to your accounts for each social media for the icon to appear in the footer.', '_s' )
        )
    );

    //Controls
    //Facebook
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'facebook',
            array(
                'label' => __( 'THI Facebook', '_s' ),
                'section' => 'social-media',
                'settings' => 'facebook'
            )
        )
    );
    //Linkedin
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'linkedin',
            array(
                'label' => __( 'THI Linkedin', '_s' ),
                'section' => 'social-media',
                'settings' => 'linkedin'
            )
        )
    );
    //Twitter
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'twitter',
            array(
                'label' => __( 'THI Twitter', '_s' ),
                'section' => 'social-media',
                'settings' => 'twitter'
            )
        )
    );
}
add_action('customize_register', 'social_media');

?>