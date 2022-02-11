<?php
    /*
     * Method process option
     * # option 1: config font
     * # option 2: process config theme
    */
    if( !is_admin() ):

        add_action( 'wp_head','THIWebsite_config_theme' );

        function THIWebsite_config_theme() {

            if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) :

                    global $THIWebsite_options;
                    $THIWebsite_favicon = $THIWebsite_options['THIWebsite_opt_favicon_upload']['url'];

                    if( $THIWebsite_favicon != '' ) :

                        echo '<link rel="shortcut icon" href="' . esc_url( $THIWebsite_favicon ) . '" type="image/x-icon" />';

                    endif;

            endif;
        }

        // Method add custom css, Css custom add here
        // Inline css add here
        /**
         * Enqueues front-end CSS for the custom css.
         *
         * @see wp_add_inline_style()
         */

        add_action( 'wp_enqueue_scripts', 'THIWebsite_custom_css', 99 );

        function THIWebsite_custom_css() {

            global $THIWebsite_options;

            $THIWebsite_typo_selecter_1   =   $THIWebsite_options['THIWebsite_opt_custom_typography_1_selector'];

            $THIWebsite_typo1_font_family   =   $THIWebsite_options['THIWebsite_opt_custom_typography_1']['font-family'];

            $THIWebsite_css_style = '';

            if ( $THIWebsite_typo1_font_family != '' ) :
                $THIWebsite_css_style .= ' '.esc_attr( $THIWebsite_typo_selecter_1 ).' { font-family: '.balanceTags( $THIWebsite_typo1_font_family, true ).' }';
            endif;

            if ( $THIWebsite_css_style != '' ) :
                wp_add_inline_style( 'THIWebsite-style', $THIWebsite_css_style );
            endif;

        }

    endif;
