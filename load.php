<?php
namespace Nee;
class Load{
	public static function load_plugin(){

		//================ Files to include ==========

		include NEEIMPORT__PLUGIN_DIR."/inc/admin.php";

		//=========  Hooks ==============================
		add_action( 'admin_menu', array(__CLASS__,"menu_item") );
		add_action('admin_enqueue_scripts', array(__CLASS__,'load_scripts'));

	}


	function menu_item(){
		wp_enqueue_media();
		add_menu_page( 'Nee Import', "Nee Import", 'manage_options',NEEIMPORT__SLUG, array("Nee\admin",'main_ui') );
		add_submenu_page( NEEIMPORT__SLUG, "Import Log","Import Log", 'manage_options', NEEIMPORT__SLUG."log",array("Nee\admin",'import_log_ui') );
    
	}

	function load_scripts(){
		wp_enqueue_style("nee_main_admin", NEEIMPORT__URI. "inc/assests/main_admin.css", array(), '1.0.0');
		wp_enqueue_style("semantic.mini.css", NEEIMPORT__URI. "inc/assests/semantic/semantic.min.css", array(), '1.0.0');
		wp_enqueue_script("semantic.mini.js", NEEIMPORT__URI. "inc/assests/semantic/semantic.mini.js", array("jquery"), '1.0.0');
		wp_enqueue_script("nee_admin_main.js", NEEIMPORT__URI. "inc/assests/js/admin_main.js", array("jquery"), '1.0.0');
	}
}

