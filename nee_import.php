<?php
/**
 * @package Nee Import
 * @version 1.0.0
 */
/*
Plugin Name: Nee Import
Plugin URI: 
Description: post imports
Author:  Naeem Shah
Version: 1.0.0
Author URI: 
*/

if ( !function_exists( 'add_action' ) ) 
	die('Hi there!  I\'m just a plugin, not much I can do when called directly.');

define( 'NEEIMPORT_VERSION', '1.0.0' );
define( 'NEEIMPORT__MINIMUM_WP_VERSION', '3.2' );
define( 'NEEIMPORT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'NEEIMPORT__SLUG', 'nee_imp' );




include NEEIMPORT__PLUGIN_DIR."/load.php";

 Nee\Load::load_plugin();
$p = new Nee\admin();