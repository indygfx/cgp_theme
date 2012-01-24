<?php
/**
 * Custom Index CSS
 *
 */
$etmod = elgg_get_plugin_setting('etmod','cgp_theme');
?>

/*******************************
	Custom Index
********************************/

.custom-index {
	padding: 20px;
        padding-top: 10px;
}



.elgg-module-featured {
	border: 1px solid <?php echo $etmod; ?>;
	
	
}
.elgg-module-featured  .elgg-head {
	padding: 5px;
	background-color: <?php echo $etmod; ?>;
}

.custom-index .elgg-content {
	width:400px;
}

.et-module-message {
	
	border: 1px solid <?php echo $etmod; ?>;
	padding: 15px;
	margin-bottom: 20px;
	min-height: 260px;
        height:auto !important; 
        height: 260px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	
}
