<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 85

$title = "Grid Ecosystem - Open Grid Collaboration Environment (OGCE)";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">


<h1 class="first">OGCE - Open Grid Computing Environment</h1>

<p>
<img src='OGCE-1.jpg' alt='OGCE' style='float: right; margin-left: 0.3em;'>
OGCE extends <a href="chef.php">CHEF/Sakai</a> to include support for Grid services like
<a href="../security/myproxy.php">MyProxy</a>, GridPort, <a href="../computation/gram.php">GRAM</a>, 
<a href="../data/gridftp.php">GridFTP</a>, <a href="../monitoring/index-service.php">Index Services</a>, etc.), 
and Java CoG components. It provides a "quick start" for building Grid-enabled portals.
</p>

<?
$software = "<a href='http://www.collab-ogce.org/nmi/index.jsp'>OGCE</a>";
$developer = "<a href='http://www.collab-ogce.org/'>OGCE Project</a>";
$distros = "Download from <a href='http://www.collab-ogce.org/nmi/portal/user/anon/js_pane/P-fc75d5fd4f-10003'>OGCE</a>";
$contact = "<a href='mailto:discuss@ogce.org'>discuss@ogce.org</a><br />(must be subscribed before posting messages, see OGCE page for information)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
