<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 86

$title = "Globus: Grid Software - Access Grid";
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

<h1 class="first">Access Grid</h1>

<p>
<div style='float: right; margin-left: 0.3em;'>
<img src='ACCESSGRID-1.jpg' alt='Access Grid Image 1' />
<img src='ACCESSGRID-2.jpg' alt='Access Grid Image 2' style='position: relative;float: left; top: -3em; left: 4em; z-index: 10;' />
</div>
Access Grid provides seamless group-to-group collaboration spaces for groups that are not co-located. Immersive audio (sounds like "everyone is here") and multiple multicast video streams (multipoint "everyone sees everyone") are used to create a compelling experience. Other video sources can be integrated into the space. Display walls are common but not required. "Virtual spaces" (like channels) allow people to find each other. Ideally, groups can work together without thinking about the technology. Of course Access Grid is increasingly Grid-enabled.
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