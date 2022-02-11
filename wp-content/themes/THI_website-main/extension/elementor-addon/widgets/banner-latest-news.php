<?php

use Elementor\Group_Control_Typography;
use Elementor\Utils;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class THIWebsite_Elementor_Banner_Latest_News extends Widget_Base {

    public function get_categories() {
        return array( 'mytheme' );
    }

    public function get_name() {
        return 'THIWebsite-banner-latest-news';
    }

    public function get_title() {
        return esc_html__( 'Banner Latest News', 'THIWebsite' );
    }

    public function get_icon() {
        return 'eicon-text-area';
    }

    protected function register_controls() {

        // Banner Section
        $this->start_controls_section(
            'banner_section',
            [
                'label' => __( 'Banner', 'THIWebsite' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'banner_image',
            [
                'label' => esc_html__( 'Choose Image', 'THIWebsite' ),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .element-banner-latest-news .banner__right' => 'background-image: url({{URL}})',
                ],
            ]
        );

        $this->add_responsive_control(
            'banner_height',
            [
                'type' => Controls_Manager::SLIDER,
                'label' => esc_html__( 'Height', 'THIWebsite' ),
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                    ],
                ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
                'desktop_default' => [
                    'size' => 628,
                    'unit' => 'px',
                ],
                'tablet_default' => [
                    'size' => '',
                    'unit' => 'px',
                ],
                'mobile_default' => [
                    'size' => '',
                    'unit' => 'px',
                ],
            ]
        );

        $this->end_controls_section();

        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'THIWebsite' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'content_heading',
            [
                'label'         =>  esc_html__( 'Heading', 'THIWebsite' ),
                'type'          =>  Controls_Manager::TEXT,
                'default'       =>  esc_html__( 'Heading', 'THIWebsite' ),
                'label_block'   =>  true
            ]
        );

        $this->add_control(
            'content_description',
            [
                'label' => esc_html__( 'Description', 'THIWebsite' ),
                'type' => Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__( 'Default description', 'THIWebsite' ),
                'placeholder' => esc_html__( 'Type your description here', 'THIWebsite' ),
            ]
        );

        $this->end_controls_section();

        // News Section
        $this->start_controls_section(
            'news_section',
            [
                'label' => __( 'News', 'THIWebsite' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'news_heading',
            [
                'label'         =>  esc_html__( 'Heading News', 'THIWebsite' ),
                'type'          =>  Controls_Manager::TEXT,
                'default'       =>  esc_html__( 'Latest News', 'THIWebsite' ),
                'label_block'   =>  true
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        // Query
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
        );

        $query = new WP_Query( $args );
        ?>

        <div class="element-banner-latest-news">
            <div class="banner">
                <div class="banner__left"></div>

                <div class="banner__right"></div>

                <div class="content d-flex flex-column justify-content-center">
                    <div class="content__box">
                        <h2 class="content__heading">
                            <?php echo esc_html( $settings['content_heading'] ); ?>
                        </h2>

                        <div class="content__desc">
                            <?php echo esc_html( $settings['content_description'] ); ?>
                        </div>
                    </div>
                </div>
            </div>


            <?php if ( $query->have_posts() ) : ?>

            <div class="latest-news">
                <div class="latest-news__box">
                    <div class="entry-content">
                        <h4 class="heading">
                            <?php echo esc_html( $settings['news_heading'] ); ?>
                        </h4>

                        <div class="content">
                            <?php while ( $query->have_posts() ): $query->the_post(); ?>

                                <h3 class="post-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <p class="post-date">
                                    <?php echo get_the_date(); ?>
                                </p>

                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif; ?>
        </div>

        <?php

    }

}