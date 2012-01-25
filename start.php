<?php
 
    function cgp_theme_init() {
        //elgg_extend_view('css/elgg', 'cgp_theme/css');
    }
 
    elgg_register_event_handler('init', 'system', 'cgp_theme_init');
?>
