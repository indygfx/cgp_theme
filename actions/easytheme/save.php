<?php

action_gatekeeper();

/**
 * Saves global plugin settings.
 *
 * This action can be overriden for a specific plugin by creating the
 * settings/<plugin_id>/save action in that plugin.
 *
 * @uses array $_REQUEST['params']    A set of key/value pairs to save to the ElggPlugin entity
 * @uses int   $_REQUEST['plugin_id'] The ID of the plugin
 *
 * @package Elgg.Core
 * @subpackage Plugins.Settings
 */



$params = get_input('params');
$plugin_id = get_input('plugin_id');
$plugin = elgg_get_plugin_from_id($plugin_id);

if (!($plugin instanceof ElggPlugin)) {
	register_error(elgg_echo('plugins:settings:save:fail', array($plugin_id)));
	forward(REFERER);
}

$plugin_name = $plugin->getManifest()->getName();

$result = false;



//this bit sets the settings...

	foreach ($params as $k => $v) {
   	$result = $plugin->setSetting($k, $v);
		if (!$result) {
			register_error(elgg_echo('plugins:settings:save:fail', array($plugin_name)));
			forward(REFERER);
			exit;
		}
	}
	
	
// does directory exist

    $dirname = "easytheme"; 
    $filename = elgg_get_data_path() . "{$dirname}/"; 
    
    if (!file_exists($filename)) { 
         mkdir(elgg_get_data_path() . "{$dirname}", 0777); 
        
    }  	
	

$etcolor1 = elgg_get_plugin_setting('etcolor1','easytheme');
$etcolor2 =  elgg_get_plugin_setting('etcolor2','easytheme');
$et_bkimg = 'url(\'<?php echo $vars[\'url\']; ?>mod/easytheme/graphics/bkgr.gif\')';
$et_headimg = 'url(\'<?php echo $vars[\'url\']; ?>mod/easytheme/graphics/headimg.jpg\')';
$etpgwidth = elgg_get_plugin_setting('etpgwidth','easytheme');
$etfooth =  elgg_get_plugin_setting('etfooth','easytheme');
$etfootbk =  elgg_get_plugin_setting('etfootbk','easytheme');
$etfootlink = elgg_get_plugin_setting('etfootlink','easytheme');
$etfoothov = elgg_get_plugin_setting('etfoothov','easytheme');
$etfoottext = elgg_get_plugin_setting('etfoottext','easytheme');
$etsearch = elgg_get_plugin_setting('etsearch','easytheme');
$etheadh = elgg_get_plugin_setting('etheadh','easytheme');
$etmenu = elgg_get_plugin_setting('etmenu','easytheme');
$etintro = elgg_get_plugin_setting('etintro','easytheme');

//this bit writes the file...
$file = elgg_get_data_path() . "easytheme/cssinc.php";
$fileHandle = fopen($file, 'w') or die("Error opening file");
 
$data = "body{background: $et_bkimg;}

.elgg-button-submit {
	color: white;
	text-shadow: 1px 1px 0px black;
	text-decoration: none;
	border: 1px solid #000;
	background: $etcolor2 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
}

.elgg-button-submit:hover {
	border-color: #000;
	text-decoration: none;
	color: white;
	background:  $etcolor1 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
}

.elgg-breadcrumbs > li > a:hover {
	color: $etcolor1;
	text-decoration: underline;
}

.elgg-menu-site-more > li > a:hover {
	background: $etcolor1; 
	color: white;
}

.elgg-menu-page a:hover {
	background-color:  $etcolor1; 
	color: white;
	text-decoration: none;
}

.elgg-menu-owner-block li a:hover {
	background-color:  $etcolor1; 
	color: white;
	text-decoration: none;
}

a {
	color:  $etcolor2;
}

h1, h2, h3, h4, h5, h6 {
	font-weight: bold;
	color:  $etcolor1; 
}

.elgg-heading-basic {
	color:$etcolor1;
	font-size: 1.2em;
	font-weight: bold;
}

.elgg-loud {
	color:  $etcolor1; 
}



.elgg-menu-page li.elgg-state-selected > a {
	background-color:  $etcolor1; 
	color: white;
}

.elgg-heading-site, .elgg-heading-site:hover {
	font-size: 2em;
	line-height: 1.4em;
	color: #000;
	font-style: italic;
	font-family: Georgia, times, serif;
	text-shadow: 1px 2px 4px #333333;
	text-decoration: none;
    background:#fff;
	padding:20px;
	padding-left:15px;
}

.elgg-page-default .elgg-page-header  .elgg-inner {
	width: $etpgwidth;
	height:  $etheadh;
    background: $et_headimg;
}

.elgg-page-default {
	width: $etpgwidth;
	margin: 0px auto; 
	border-right: 1px solid black;
    background: #ffffff;
    border-left: 1px solid black;
	-moz-box-shadow: 0 0 10px #888;
	-webkit-box-shadow: 0 0 10px#888;
	box-shadow: 0 0 10px #181a2f;
}

.elgg-heading-site, .elgg-heading-site:hover {
	-webkit-border-bottom-right-radius: 24px;
	-moz-border-bottom-right-radius: 24px;
	border-bottom-right-radius: 24px;
	opacity: 0.6;
	-ms-filter:\"progid:DXImageTransform.Microsoft.Alpha(Opacity=60)\";
    filter: alpha(opacity=60);
}

.elgg-page-footer {height: $etfooth;
}

.elgg-page-footer {
    color: $etfoottext; 
    background: $etfootbk;   
}
.elgg-page-footer a:link {
	color: $etfootlink;
}
      
.elgg-page-footer a:hover {
	color: $etfoothov;
}
#login-dropdown {
	position: absolute;
	top: 10px;
	right: 0;
	z-index: 100;  
	margin-right: 10px;          
}


.elgg-menu-item-report-this{
    margin-left: 10px;
	margin-top: 5px;
}




.elgg-page-default {
	min-width: $etpgwidth;
}

.elgg-page-default .elgg-page-body > .elgg-inner {
	width: $etpgwidth;
	margin: 0 auto;
        
	
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: $etpgwidth; 
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
	
}

.elgg-page-header .elgg-search {
    margin-top: $etsearch;
	margin-bottom: 2px;
    margin-right: 5px;
	height: 23px;
	position: absolute;
	right: 0;
       
}
.elgg-menu-site-default{
	background: $etmenu; 
	padding-top:5px; 
	width:990px;
}";


fwrite($fileHandle, $data);
 
fclose($fileHandle); // close the file since we're done

if (empty($etintro)) {
	}
	else{
//this bit writes the file...
$file2 = elgg_get_data_path() . "easytheme/intro.php";
$fileHandle = fopen($file2, 'w') or die("Error opening file");
 
$data = $etintro;
fwrite($fileHandle, $data);
 
fclose($fileHandle);

elgg_unset_plugin_setting ('etintro','easytheme');

}

system_message(elgg_echo('plugins:settings:save:ok', array($plugin_name)));
forward(REFERER);
