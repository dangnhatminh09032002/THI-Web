<?php

use Elementor\Group_Control_Typography;
use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class THIWebsite_Elementor_Addon_Text_Grid extends Widget_Base {

	public function get_categories() {
		return array( 'mytheme' );
	}

	public function get_name() {
		return 'THIWebsite-text-grid';
	}

	public function get_title() {
		return esc_html__( 'Text Grid', 'THIWebsite' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	protected function register_controls() {

		// Content heading
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'THIWebsite' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'column',
			[
				'label'     =>  esc_html__( 'Column', 'THIWebsite' ),
				'type'      =>  Controls_Manager::SELECT,
				'default'   =>  4,
				'options'   =>  [
					1   =>  esc_html__( '1 Column', 'THIWebsite' ),
					2   =>  esc_html__( '2 Column', 'THIWebsite' ),
					3   =>  esc_html__( '3 Column', 'THIWebsite' ),
					4   =>  esc_html__( '4 Column', 'THIWebsite' ),
				],
			]
		);

		$this->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'THIWebsite' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Title' , 'THIWebsite' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'sub_title', [
				'label' => esc_html__( 'Content', 'THIWebsite' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Sub title' , 'THIWebsite' ),
				'show_label' => true,
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		?>

		<div class="element-text-grid">
			<h2 class="heading">
				<?php echo wp_kses_post( $settings['title'] ); ?>
			</h2>

			<p>
				<?php echo wp_kses_post( $settings['sub_title'] ); ?>
			</p>
		</div>

		<?php

	}

}