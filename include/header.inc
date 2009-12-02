<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
<link href="/css/main.css" rel="stylesheet" type="text/css" />
<link href="/css/common.css" rel="stylesheet" type="text/css" />
<link href="/css/subhome.css" rel="stylesheet" type="text/css" />
<title><?=$title; ?></title>
<script>
<!--
function GlobusSubmit()
{
var f=document.GlobusSearchForm;
f.action="http://www.google.com/custom";
if (f.elements[0].checked) {
f.q.value = f.qinit.value + " -inurl:mail_archive " ;
} else {
 f.q.value = f.qinit.value + " inurl:mail_archive " ;
 }
}
-->
</script>
<script type="text/javascript" src="<?=$SITE_PATHS['WEB_ROOT']?>js/common.js"></script>
</head>

<body>
<div id="pagename">
&nbsp;
</div>
<div id="header">
  <img id="logo" src="<?=$SITE_PATHS["WEB_ROOT"];?>img/header/logo.png" />
  <ul id="menu">
    <li id="nav_home_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_home" href="/">Home</a></div><div class="nav_right">&nbsp;</div></li>
    <li id="nav_about_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_about" href="/alliance/">About Globus</a></div><div class="nav_right">&nbsp;</div></li>
    <li id="nav_toolkit_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_toolkit" href="/toolkit/">Globus Toolkit</a></div><div class="nav_right">&nbsp;</div></li>
    <li id=""><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_dev" href="<?=$SITE_PATHS["WEB_DEV_GLOBUS"]; ?>">dev.globus</a></div><div class="nav_right">&nbsp;</div></li>
    <li id="nav_org_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_org" href="/service/">Globus.org Service</a></div><div class="nav_right" style="margin-right: 0px;">&nbsp;</div></li>
  </ul>

</div>
<?php 
	$subnav_inc = findFileInPath(dirname($_SERVER["SCRIPT_FILENAME"]),"subnav.inc");
	if(strlen($subnav_inc))
	{
		include($subnav_inc); 
	}
?>

<div id="outer_wrapper">
	<div id="wrapper">
    	<div id="container">
		 	<div id="breadcrumbs"><?php globus_current_location(); ?>
  	   				<div id="searchform" style="float: right;margin-right: 10px; margin-top: 0px;font-size: smaller;">	  
				         <form method="GET" name="GlobusSearchForm"  onSubmit="GlobusSubmit()">
				         <input type="radio" name="domain" value="nomail"checked>&nbsp;Website&nbsp;
				         <input type="radio" name="domain" value="mail">&nbsp;Email Lists&nbsp;
				         Search:&nbsp;<input style="border: 1px solid #888; color: #444; type="text" name="qinit" size="15"  maxlength="200" value="" />
				         <input type="hidden" name="cof" VALUE="S:http://www.globus.org/;VLC:#cccccc;AH:center;BGC:#ffffff;LH:76;LC:#003390;L:http://www.globus.org/img/globusalliance-nourl.gif;ALC:#003390;LW:170;T:#000000;AWFID:fb67b77f3237ebb9;">
				         <input type="hidden" name="domains" value="www.globus.org">
				             <br />
				         <input type="hidden" name="sitesearch" value="www.globus.org">
				         <input type="hidden" name="q" value="">
				         </form>
		         	</div>		 	
		 	
		 	</div>   	
			<div id="content">

