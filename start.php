<?php
elgg_register_event_handler('init', 'system', 'cgp_theme_init');

function cgp_theme_init() {
	        elgg_extend_view('css/elgg', 'cgp_theme/css');
		elgg_unregister_menu_item('topbar', 'elgg_logo');
                elgg_extend_view('css/admin', 'cgp_theme/admin'); 


		$base = elgg_get_plugins_path() . 'cgp_theme/actions/cgp_theme';
		elgg_register_action('cgp_theme/settings/save', "$base/save.php", 'admin');


}
?>
