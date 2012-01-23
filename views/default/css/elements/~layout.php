/* overides */
body {
	background-image: 	url(<?php echo $vars['url']; ?>mod/theme_cgpalumni/graphics/background_pic.jpg);
	background-repeat: 	repeat-x;
	background-color:	#DBB428;	
}

#layout_canvas {
	margin-bottom:			0px;
	padding:				0 20px 10px 20px;
	min-height: 			360px;
	-webkit-border-radius: 	0px; 
	-moz-border-radius: 	0px;
	background: 			white;
	border-bottom:			0px solid #cccccc;
	border-right:			0px solid #cccccc;
}

#two_column_left_sidebar,
#two_column_left_sidebar_maincontent {
	background:				#DBB428;
	border-bottom:			1px solid #cccccc;
	border-right:			1px solid #cccccc;
}

#login-box a:link,
#login-box a:active,
#login-box a:visited {
	color:				#666666;
}

#login-box a:hover {
	color:				#000000;
	text-decoration:	none;
}

#owner_block_submenu li a:link,
#owner_block_submenu li a:visited,
#owner_block_submenu li a:active {
	color:				#ffffff;	
}

#owner_block_submenu li.selected a:link,
#owner_block_submenu li.selected a:visited,
#owner_block_submenu li.selected a:active {
	color:				#CB9A33;	
	background-color:	#ffffff;
}

#two_column_left_sidebar_maincontent h2 {	
	color:				#000000;
	}
	


/* css overrides for UserProfile */
a.toggle_customise_edit_panel:link,
a.toggle_customise_edit_panel:visited,
a.toggle_customise_edit_panel:active {
	color: #8C6F06;
	border-color:#8C6F06;
	text-align:	center;
	font-weight: bold;
}

a.toggle_customise_edit_panel:hover {
	color: #ffffff;
	border-color:#8C6F06;
	text-decoration:underline;
	background-color: #8C6F06;
	font-weight: bold;
}



.collapsable_box_header h1,
.collapsable_box_header a:link,
.collapsable_box_header a:active {
	color:#000;
	}


/* indy layout css */
#layout_topCorner {
	background: 			url(<?php echo $vars['url']; ?>mod/theme_cgpalumni/graphics/layout_top_content.gif);
	background-repeat: 		no-repeat;
	width:					990px;
	height:					20px;
}

#layout_bottomCorner {
	background: 			url(<?php echo $vars['url']; ?>mod/theme_cgpalumni/graphics/layout_bottom_content.gif);
	background-repeat: 		no-repeat;
	width:					990px;
	height:					26px;
	border:					0px solid black;
	-webkit-border-radius: 	0px; 
	-moz-border-radius: 	0px;
}
#elgg_topbar {
	margin-bottom:	30px;
}

#nonTopbarspacer {
	height:			50px;
}

#fufooteralign {
	background-color:white; 
	height:			30px;
	margin-top:		15px;
	padding:		10px 10px 30px 10px;
	}
	
#copyrightCGP {
	position: 		absolute;
	left:			50%;	
	width:			970px;
	border:			0px solid black;
	margin-left:	-480px;
}

#copyrightCGP,
#copyrightCGP a:link,
#copyrightCGP a:active,
#copyrightCGP a:visited {
	color: 			#666666;
	font-size:		11px;
	text-decoration:none;
}

#copyrightCGP a:hover {
	color: 			#000000;
	font-size:		11px;
	text-decoration:none;
}

/* FU Header */ 
	#headerIdentityWrapper {
		height: 			70px;
		margin:				0 0 0 0;
		padding:			6px 10px 0 20px;
	}
	

.skip, .info {
	position: absolute;
	left: -1000px;
	top: -1000px;
	width: 0;
	height: 0;
	overflow: hidden;
	display: inline;
}

hr.divider {
	display: none;
}	

#baseHeaderNavigation {
	margin:   				-42px 0 0 430px;
	float:					left;
}

#baseHeader {
	width:					1000px;
}

#baseHeaderNavigation ul {
	list-style-type: 	none;
	margin:			 	0 0 0 0;
	padding: 			0 0 0 0;
	color:				#666666;
	font-size:			11px;
	}
#baseHeaderNavigation li {
	float:				left;
	border-right:		1px solid #666666;
	padding-right: 		6px;
	padding-left: 		6px;
}
#baseHeaderNavigation a:link{
	color:				#666666;
	font-size:			11px;
}
#baseHeaderNavigation a:visited {
	color:				#666666;
	font-size:			11px;
}
/*.collapsable_box_header {
	color: #666666;
	font-size: 100px;
}*/
