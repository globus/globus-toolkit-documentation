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
    <li id="nav_org_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_org" href="/service/">Globus.org</a></div><div class="nav_right">&nbsp;</div></li>
    <li id="nav_toolkit_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_toolkit" href="/toolkit/">Globus Toolkit</a></div><div class="nav_right">&nbsp;</div></li>
    <li id=""><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_dev" href="<?=$SITE_PATHS["WEB_DEV_GLOBUS"]; ?>">dev.globus</a></div><div class="nav_right">&nbsp;</div></li>
    <li id="nav_about_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_about" href="/alliance/">About Globus</a></div><div class="nav_right" style="margin-right: 0px;">&nbsp;</div></li>
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
				        <form action="http://www.google.com/cse" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="017852682429607164232:btsxwxgrrkk" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="31" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script>
		         	</div>		 	
		 	
		 	</div>   	
			<div id="content">

