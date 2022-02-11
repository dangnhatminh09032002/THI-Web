<?php

use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class THIWebsite_Elementor_Addon_Timeline_Slider extends Widget_Base {

	public function get_categories() {
		return array( 'mytheme' );
	}

	public function get_name() {
		return 'THIWebsite-timeline-slider';
	}

	public function get_title() {
		return esc_html__( 'Timeline Slider', 'THIWebsite' );
	}

	public function get_icon() {
		return 'eicon-time-line';
	}

	public function get_script_depends() {
		return ['THIWebsite-elementor-custom'];
	}

	protected function register_controls() {

		// Timeline Section
		$this->start_controls_section(
			'timeline_section',
			[
				'label' => __( 'Timeline', 'THIWebsite' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'list_period', [
				'label' => esc_html__( 'Period', 'THIWebsite' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => 2017,
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'list_content', [
				'label' => esc_html__( 'Content', 'THIWebsite' ),
				'type' => Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'THIWebsite' ),
				'show_label' => false,
			]
		);

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Repeater Timeline', 'THIWebsite' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_period' => 2017,
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'THIWebsite' ),
					],
					[
						'list_period' => 2018,
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'THIWebsite' ),
					],
					[
						'list_period' => 2019,
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'THIWebsite' ),
					],
					[
						'list_period' => 2020,
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'THIWebsite' ),
					],
					[
						'list_period' => 2021,
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'THIWebsite' ),
					],
				],
				'title_field' => '{{{ list_period }}}',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
	?>

        <div class="element-timeline-horizontal ">
            <div class="timeline-content-horizontal content">
	            <?php foreach ( $settings['list'] as $item ) : ?>

                    <div class="timeline-item">
                        <div class="timeline-item__period">
				            <?php echo esc_html( $item['list_period'] ); ?>
                        </div>

                        <div class="timeline-item__content">
				            <?php echo wp_kses_post( $item['list_content'] ); ?>
                        </div>
                    </div>

	            <?php endforeach; ?>
            </div>
        </div>

	<?php

	}

}