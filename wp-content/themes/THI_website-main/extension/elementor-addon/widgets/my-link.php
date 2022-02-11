<?php

use Elementor\Group_Control_Typography;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class THIWebsite_Elementor_Addon_My_Link extends Widget_Base {

	public function get_categories() {
		return array( 'mytheme' );
	}

	public function get_name() {
		return 'THIWebsite-my-link';
	}

	public function get_title() {
		return esc_html__( 'My Link', 'THIWebsite' );
	}

	public function get_icon() {
		return 'eicon-link';
	}

	protected function register_controls() {

		// Content heading
		$this->start_controls_section(
			'content_text',
			[
				'label' => esc_html__( 'Content', 'THIWebsite' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'text',
			[
				'label'         =>  esc_html__( 'Text', 'THIWebsite' ),
				'type'          =>  Controls_Manager::TEXT,
				'default'       =>  esc_html__( 'Text', 'THIWebsite' ),
				'label_block'   =>  true
			]
		);

		$this->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', 'plugin-name' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'THIWebsite' ),
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => false,
					'custom_attributes' => '',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		?>

		<div class="element-my-link">
			<?php
			if ( ! empty( $settings['link']['url'] ) ) :
				$this->add_link_attributes( 'link', $settings['link'] );
			?>
				<a class="link-add-on" <?php echo $this->get_render_attribute_string( 'link' ); ?>>
					<?php echo esc_html( $settings['text'] ); ?>
				</a>
			<?php endif; ?>
		</div>

		<?php

	}

	protected function content_template() {

	?>

		<div class="element-my-link">
			<# if ( '' !== settings.link.url ) {#>
				<a class="link-add-on" href="{{ settings.link.url }}">
					{{{ settings.text }}}
				</a>
			<# } #>
		</div>

	<?php
	}

}