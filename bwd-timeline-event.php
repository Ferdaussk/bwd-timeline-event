<?php
/**
 * Plugin Name: BWD Timeline Event
 * Description: BWD Timeline Event plugin with 110+ types of timeline design also flexible and responsive timeline for Elementor.
 * Plugin URI:  https://google.com
 * Version:     1.0
 * Author:      FERDAUS SK
 * Author URI:  https://google.com
 * Text Domain: bwd-timeline-event
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/class-tgm-plugin-activation.php';
final class FinalBWDTETimeline{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdte_init', array( $this, 'bwdte_loaded_textdomain' ) );
		// bwdte_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdte_init' ) );
	}

	public function bwdte_loaded_textdomain() {
		load_plugin_textdomain( 'bwd-timeline-event' );
	}

	public function bwdte_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// For tgm plugin activation
			add_action( 'tgmpa_register', [$this, 'bwdte_timeline_register_required_plugins'] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdte_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdte_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdte_plugin_boots.php' );
	}

	function bwdte_timeline_register_required_plugins() {
		$plugins = array(
			array(
				'name'        => esc_html__('Elementor', 'bwd-timeline-event'),
				'slug'        => 'elementor',
				'is_callable' => 'wpseo_init',
			),
		);

		$config = array(
			'id'           => 'bwd-timeline-event',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'parent_slug'  => 'plugins.php',
			'capability'   => 'manage_options',
			'has_notices'  => true,
			'dismissable'  => true,
			'dismiss_msg'  => '',
			'is_automatic' => false,
			'message'      => '',
		);
	
		tgmpa( $plugins, $config );
	}

	public function bwdte_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-timeline-event' ),
			'<strong>' . esc_html__( 'BWD Timeline Event', 'bwd-timeline-event' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'bwd-timeline-event' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-timeline-event') . '</p></div>', $message );
	}

	public function bwdte_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'bwd-timeline-event' ),
			'<strong>' . esc_html__( 'BWD Timeline Event', 'bwd-timeline-event' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'bwd-timeline-event' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'bwd-timeline-event') . '</p></div>', $message );
	}
}

// Instantiate bwd-timeline-event.
new FinalBWDTETimeline();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
