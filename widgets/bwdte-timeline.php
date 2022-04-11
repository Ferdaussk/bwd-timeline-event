<?php
namespace Creativetimeline\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDTETimeline extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BWDTimelineEvent', 'bwd-timeline-event' );
	}

	public function get_title() {
		return esc_html__( 'BWD Timeline Event', 'elementor' );
	}

	public function get_icon() {
		return 'bwdte-timeline-icon eicon-time-line';
	}

	public function get_categories() {
		return [ 'bwd-timeline-event-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-timeline-event-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdte_timeline_content_section',
			[
				'label' => esc_html__( 'Timeline Content', 'bwd-timeline-event' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdte_style_selection',
			[
				'label' => esc_html__( 'Timeline Styles', 'bwd-timeline-event' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-timeline-event' ),
					'style2' => esc_html__( 'Style 2', 'bwd-timeline-event' ),
					'style3' => esc_html__( 'Style 3', 'bwd-timeline-event' ),
					'style4' => esc_html__( 'Style 4', 'bwd-timeline-event' ),
					'style5' => esc_html__( 'Style 5', 'bwd-timeline-event' ),
					'style6' => esc_html__( 'Style 6', 'bwd-timeline-event' ),
					'style7' => esc_html__( 'Style 7', 'bwd-timeline-event' ),
					'style8' => esc_html__( 'Style 8', 'bwd-timeline-event' ),
					'style9' => esc_html__( 'Style 9', 'bwd-timeline-event' ),
					'style10' => esc_html__( 'Style 10', 'bwd-timeline-event' ),
					'style11' => esc_html__( 'Style 11', 'bwd-timeline-event' ),
					'style12' => esc_html__( 'Style 12', 'bwd-timeline-event' ),
					'style13' => esc_html__( 'Style 13', 'bwd-timeline-event' ),
					'style14' => esc_html__( 'Style 14', 'bwd-timeline-event' ),
					'style15' => esc_html__( 'Style 15', 'bwd-timeline-event' ),
					'style16' => esc_html__( 'Style 16', 'bwd-timeline-event' ),
					'style17' => esc_html__( 'Style 17', 'bwd-timeline-event' ),
					'style18' => esc_html__( 'Style 18', 'bwd-timeline-event' ),
					'style19' => esc_html__( 'Style 19', 'bwd-timeline-event' ),
					'style20' => esc_html__( 'Style 20', 'bwd-timeline-event' ),
					'style21' => esc_html__( 'Style 21', 'bwd-timeline-event' ),
					'style22' => esc_html__( 'Style 22', 'bwd-timeline-event' ),
					'style23' => esc_html__( 'Style 23', 'bwd-timeline-event' ),
					'style24' => esc_html__( 'Style 24', 'bwd-timeline-event' ),
					'style25' => esc_html__( 'Style 25', 'bwd-timeline-event' ),
					'style26' => esc_html__( 'Style 26', 'bwd-timeline-event' ),
					'style27' => esc_html__( 'Style 27', 'bwd-timeline-event' ),
					'style28' => esc_html__( 'Style 28', 'bwd-timeline-event' ),
					'style29' => esc_html__( 'Style 29', 'bwd-timeline-event' ),
					'style30' => esc_html__( 'Style 30', 'bwd-timeline-event' ),
					'style31' => esc_html__( 'Style 31', 'bwd-timeline-event' ),
					'style32' => esc_html__( 'Style 32', 'bwd-timeline-event' ),
					'style33' => esc_html__( 'Style 33', 'bwd-timeline-event' ),
					'style34' => esc_html__( 'Style 34', 'bwd-timeline-event' ),
					'style35' => esc_html__( 'Style 35', 'bwd-timeline-event' ),
					'style36' => esc_html__( 'Style 36', 'bwd-timeline-event' ),
					'style37' => esc_html__( 'Style 37', 'bwd-timeline-event' ),
					'style38' => esc_html__( 'Style 38', 'bwd-timeline-event' ),
					'style39' => esc_html__( 'Style 39', 'bwd-timeline-event' ),
					'style40' => esc_html__( 'Style 40', 'bwd-timeline-event' ),
					'style41' => esc_html__( 'Style 41', 'bwd-timeline-event' ),
					'style42' => esc_html__( 'Style 42', 'bwd-timeline-event' ),
					'style43' => esc_html__( 'Style 43', 'bwd-timeline-event' ),
					'style44' => esc_html__( 'Style 44', 'bwd-timeline-event' ),
					'style45' => esc_html__( 'Style 45', 'bwd-timeline-event' ),
					'style46' => esc_html__( 'Style 46', 'bwd-timeline-event' ),
					'style47' => esc_html__( 'Style 47', 'bwd-timeline-event' ),
					'style48' => esc_html__( 'Style 48', 'bwd-timeline-event' ),
					'style49' => esc_html__( 'Style 49', 'bwd-timeline-event' ),
					'style50' => esc_html__( 'Style 50', 'bwd-timeline-event' ),
					'style51' => esc_html__( 'Style 51', 'bwd-timeline-event' ),
					'style52' => esc_html__( 'Style 52', 'bwd-timeline-event' ),
					'style53' => esc_html__( 'Style 53', 'bwd-timeline-event' ),
					'style54' => esc_html__( 'Style 54', 'bwd-timeline-event' ),
					'style55' => esc_html__( 'Style 55', 'bwd-timeline-event' ),
					'style56' => esc_html__( 'Style 56', 'bwd-timeline-event' ),
					'style57' => esc_html__( 'Style 57', 'bwd-timeline-event' ),
					'style58' => esc_html__( 'Style 58', 'bwd-timeline-event' ),
					'style59' => esc_html__( 'Style 59', 'bwd-timeline-event' ),
					'style60' => esc_html__( 'Style 60', 'bwd-timeline-event' ),
					'style61' => esc_html__( 'Style 61', 'bwd-timeline-event' ),
					'style62' => esc_html__( 'Style 62', 'bwd-timeline-event' ),
					'style63' => esc_html__( 'Style 63', 'bwd-timeline-event' ),
					'style64' => esc_html__( 'Style 64', 'bwd-timeline-event' ),
					'style65' => esc_html__( 'Style 65', 'bwd-timeline-event' ),
					'style66' => esc_html__( 'Style 66', 'bwd-timeline-event' ),
					'style67' => esc_html__( 'Style 67', 'bwd-timeline-event' ),
					'style68' => esc_html__( 'Style 68', 'bwd-timeline-event' ),
					'style69' => esc_html__( 'Style 69', 'bwd-timeline-event' ),
					'style70' => esc_html__( 'Style 70', 'bwd-timeline-event' ),
					'style71' => esc_html__( 'Style 71', 'bwd-timeline-event' ),
					'style72' => esc_html__( 'Style 72', 'bwd-timeline-event' ),
					'customtext' => esc_html__( 'Custom Text', 'bwd-timeline-event' ),
				],
			]
		);
		$this->add_control(
			'bwdte_timeline_title_for_sale30',
			[
				'label' => esc_html__( 'Text', 'bwd-timeline-event' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('BEST WP DEVELOPER', 'bwd-timeline-event'),
				'condition' => [
					'bwdte_style_selection' => 'customtext',
				],
				'label_block' => true,
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<div class="bwd-timeline-two">
			<div class="bwd-progress-line">
			</div>
			<div class="bwd-timeline-item-container">
				<div class="bwd-timeline-item active">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-4.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">Feb 1990</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-6.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">Feb 1995</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-3.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">Feb 2000</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-7.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">jan 2005</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-8.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">jun 2010</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post_capetown_02-768x512.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">Feb 2015</div>
				</div>
			</div>
		</div> 
		<?php
	}

    protected function content_template() {
		?>
		<div class="bwd-timeline-two">
			<div class="bwd-progress-line">
			</div>
			<div class="bwd-timeline-item-container">
				<div class="bwd-timeline-item active">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-4.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">Feb 1990</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-6.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">Feb 1995</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-3.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">Feb 2000</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-7.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">jan 2005</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post-8.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">jun 2010</div>
				</div>
				<div class="bwd-timeline-item">
					<div class="bwd-timeline-img">
						<img src="img/travel-img/post_capetown_02-768x512.jpg" alt="timeline img">
					</div>
					<div class="bwd-timeline-item-content">
						<h3 class="bwd-timeline-title">timeline item heading</h3>
						<p class="bwd-timeline-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates voluptatem officia deserunt quo, nostrum quasi ratione illum suscipit reiciendis amet ex maiores placeat, officiis cumque, blanditiis quaerat error ad!</p>
					</div>
					<div class="bwd-timeline-date">Feb 2015</div>
				</div>
			</div>
		</div> 
		<?php
    }
}
