<?php
/**
 * Plugin Name: Demo Block
 * Description: Custom Gutenberg blocks for WordPress.
 * Version: 1.0.0
 * Author: Masud Rana
 * Author URI: https://masudrana.com
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: demo-block
 * 
 * */ 

namespace Promasud\DemoBlock;

if( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! class_exists( DemoAddons::class ) && is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

class_exists( DemoAddons::class ) && DemoAddons::instance()->init();