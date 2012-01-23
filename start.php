<?php

function yourplugin_init() {
 elgg_extend_view('css/elgg', 'cgp_theme/css');
}
 
register_elgg_event_handler('init', 'system', 'cgp_theme_init');


?>