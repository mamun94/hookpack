<?php
/*
Plugin Name: Hook Pack Plugins
Plugin URI: https://hookpack.com/
Description: WordPress Hook Lerning Session.
Version: 5.0.1
Requires at least: 5.0
Requires PHP: 5.2
Author: Automattic
Author URI: https://hookpack.com//wordpress-plugins/
License: GPLv2 or later
Text Domain: hookpack
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Including file
define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
include( MY_PLUGIN_PATH . 'includes/hook-page.php');
include( MY_PLUGIN_PATH . 'includes/shortcode-form-src.php');
