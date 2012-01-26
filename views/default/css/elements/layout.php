<?php

$tmplFld =  elgg_get_site_url()."mod/cgp_theme/graphics/";
?>

/* ***************************************
	PAGE LAYOUT Overrides
*************************************** */

.elgg-page-header  {
    height: 				80px;
    margin: 				0 auto 0 auto;;
    width: 					100%;
	background-repeat:		repeat-x;
}

.elgg-page-header .elgg-inner {
	width:					100%;
	background-image: 		url('<?php echo $tmplFld;?>top_background.png');
	background-repeat:		repeat-x;
	background-position:  	0 -6px;
	height:					80px;
}

.fuImg {
	display:				block;
	background-image:		url('<?php echo $tmplFld;?>fu_logo.gif');
	background-repeat:		no-repeat;	
	width:					225px;
	height:					63px;
	margin:					0 0 0 0;
	border:					0px solid blue;
}

#baseHeaderNavigation {
	width:					993px;
	margin:					-43px auto 0 auto;
	border:					0px solid red;
}

.elgg-page-header ul {
    color: 					#666666;
    font-size: 				11px;
    list-style-type: 		none;
    margin: 				0 0 0 0;
    padding: 				0 0 0 0;
	float:					right;
}

.elgg-page-header li {
    border-right: 			1px solid #666666;
    float: 					left;
    padding-left: 			6px;
    padding-right: 			6px;
	margin:					0 0 0 0;
}

.elgg-page-header ul {
    color: 					#666666;
    font-size: 				11px;
    list-style-type: 		none;
    margin: 				0;
    padding: 				0;
}

.elgg-page-header a:visited,
.elgg-page-header a:link {
    color: 					#666666;
    font-size: 				11px;
}

