<?php
namespace Nee;
class Load{
	public static function load_plugin(){

		//================ Files to include ==========

		include NEEIMPORT__PLUGIN_DIR."/inc/admin.php";

		//=========  Hooks ==============================
		add_action( 'admin_menu', array(__CLASS__,"menu_item") );

	}


	function menu_item(){
		add_menu_page( 'Nee Import', "Nee Import", 'manage_options',NEEIMPORT__SLUG, array("Nee\admin",'main_ui') );
		add_submenu_page( NEEIMPORT__SLUG, "Import Log","Import Log", 'manage_options', NEEIMPORT__SLUG."log",array("Nee\admin",'import_log_ui') );
    
	}
}

