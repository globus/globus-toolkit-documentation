<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 85

$title = "Globus: Grid Software - OGCE";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../collaboration-components.php"><< Components for Grid Collaboration</a></p>

<h1 class="first">OGCE - Open Grid Computing Environment</h1>

<p>
<img src='OGCE-1.jpg' alt='OGCE' style='float: right; margin-left: 0.3em;'>
OGCE extends CHEF/Sakai to include support for Grid services, such as MyProxy, GridPort, GT services (GRAM, GridFTP, MDS, etc.), and Java CoG. It provides a "quick start" for building Grid-enabled portals.
</p>

<?
$software = "<a href='http://www.collab-ogce.org/nmi/index.jsp'>OGCE</a>";
$developer = "OGCE Project";
$distros = "OGCE will be distributed with NMI releases.";
$contact = "<a href='mailto:discuss@ogce.org'>discuss@ogce.org</a><br />(must be subscribed before posting messages, see OGCE page for information)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../collaboration-components.php"><< Components for Grid Collaboration</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>