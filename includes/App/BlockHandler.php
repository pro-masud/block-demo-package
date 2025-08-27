<?php 
namespace Promasud\DemoBlock\App;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class BlockHandler {
    use \Promasud\DemoBlock\App\Traits\Singleton;
	public function init() {
		add_action( 'init', [$this, 'register_blocks'] );
	}

	public function register_blocks() {
		register_block_type( DEMO_ADDONS_PATH . 'blocks/build/heading' );
	}
}