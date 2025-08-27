<?php
namespace Promasud\DemoBlock;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class DemoAddons {
	use \Promasud\DemoBlock\App\Traits\Singleton;
	public function init() {
		$this->define_constants();

		add_action( 'plugins_loaded', [$this, 'init_plugin'] );
	}

	public function define_constants() {
		define( 'DEMO_ADDONS_VERSION', defined( 'DEMO_ADDONS_DEV' ) ? time() : '1.0.0' );
		define( 'DEMO_ADDONS_PATH', \plugin_dir_path( __DIR__ ) );
		define( 'DEMO_ADDONS_URL', \plugin_dir_url( __DIR__ ) );
	}

	public function init_plugin() {
		$this->includes();
		$this->init_hooks();
	}

	public function includes() {
		App\BlockHandler::instance()->init();
	}

	public function init_hooks() {
		load_plugin_textdomain( 'demo-addons', false, DEMO_ADDONS_PATH . 'i18n/' );
	}
}