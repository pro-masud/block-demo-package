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
		// $block_files = require DEMO_ADDONS_PATH . 'blocks/build/blocks-manifest.php';

		// foreach ( array_keys( $block_files ) as $block_type ) {
		// 	register_block_type( DEMO_ADDONS_PATH . "blocks/build/${$block_type}");
		// }

		$block_files = require DEMO_ADDONS_PATH . 'blocks/build/blocks-manifest.php';
		// echo "<pre>";
		// var_dump($block_files); // Debugging line to check the contents of $block_files
		// echo "</pre>";

			foreach ( array_keys( $block_files ) as $block_config ) {
				register_block_type( DEMO_ADDONS_PATH . "blocks/build/{$block_config}");
			}
	}
}