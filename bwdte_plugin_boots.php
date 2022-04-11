<?php
namespace Creativetimeline;

use Creativetimeline\PageSettings\Page_Settings;
define( "BWDTE_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDTE_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class ClassBWDTETimeline {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdte_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdte_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdte_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdte_the_timeline_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdte-timeline.php' );
	}

	public function bwdte_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\BWDTETimeline() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/creative-timeline-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdte_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwd-timeline-event-category',
			[
				'title' => esc_html__( 'BWD Timeline Event', 'bwd-timeline-event' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdte_all_assets_for_the_public(){
		wp_enqueue_script( 'tbt_timeline_the_main_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/main.js', array('jquery'), '1.0', true );
		$all_css_js_file = array(
            'bwdte_timeline_font_main_css' => array('bwdte_path_define'=>BWDTE_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),
            'bwdte_timeline_style_css' => array('bwdte_path_define'=>BWDTE_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdte_path_define'], null, '1.0', 'all');
        }
	}
	public function bwdte_all_assets_for_elementor_editor_admin(){
		// wp_enqueue_script( 'tbt_timeline_the_main_js_elementor', plugin_dir_url( __FILE__ ) . 'assets/public/js/main.js', array('jquery'), '1.0', true );
		$all_css_js_file = array(
            'bwdte_timeline_admin_icon_css' => array('bwdte_path_admin_define'=>BWDTE_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
            'bwdte_timeline_admin_main_js' => array('bwdte_path_admin_define'=>BWDTE_ASFSK_ASSETS_ADMIN_DIR_FILE . '/js/main.js'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdte_path_admin_define'], null, '1.0', 'all');
            wp_enqueue_script( $handle, $fileinfo['bwdte_path_admin_define'], ['jquery'], '1.0', true);
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdte_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdte_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdte_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdte_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdte_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassBWDTETimeline::instance();