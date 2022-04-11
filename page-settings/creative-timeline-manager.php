<?php
namespace Creativetimeline\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdte_timeline_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdte_timeline_register_document_controls' ] );
	}

	public function bwdte_timeline_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Timeline', 'bwd-timeline-event' ) );
	}

	public function bwdte_timeline_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdte_timeline_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwd-timeline-event' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdte_timeline_text',
			[
				'label' => esc_html__( 'Title', 'bwd-timeline-event' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwd-timeline-event' ),
			]
		);

		$document->end_controls_section();
	}
}
