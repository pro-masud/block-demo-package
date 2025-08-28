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

		if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
			wp_register_block_types_from_metadata_collection( DEMO_ADDONS_PATH . 'blocks/build', DEMO_ADDONS_PATH . 'blocks/build/blocks-manifest.php' );

			return;
		}

		if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
			wp_register_block_metadata_collection( DEMO_ADDONS_PATH . 'blocks/build', DEMO_ADDONS_PATH . 'blocks/build/blocks-manifest.php' );
		}

		$block_files = require DEMO_ADDONS_PATH . 'blocks/build/blocks-manifest.php';
		if ( ! empty( $block_files ) ) {
			foreach ( array_keys( $block_files ) as $block_config ) {
				register_block_type( DEMO_ADDONS_PATH . "blocks/build/{$block_config}" );
			}
		}
	}
}