<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 70

$title = "Globus: Grid Software - Platform CSF";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../computation-components.php"><< Components for Grid Computation</a></p>

<h1 class="first">Platform CSF</h1>

<p>
<img src='CSF-1.png' style='float: right; margin-left: 0.3em;'>
Platform CSF is an open source implementation of the OGSA-based metascheduler for VOs. It supports the emerging WS-Agreement spec and GT GRAM. It also uses the GT Index Service. Platform CSF fills in gaps in the existing resource management picture and is integrated with Platform LSF and Platform Multicluster. It is anticipated for inclusion in the GT 4.0 release. 
</p>

<?
$software = "<a href='http://www.platform.com/products/globus/'>Platform CSF</a>";
$developer = "Platform Computing";
$distros = "Platform Globus Toolkit<br />Download from SourceForge.net";
$contact = "<a href='mailto:gcsf-discuss@sourcefourge.net'>gcsf-discuss@sourceforge.net</a><br />(must be <a href='http://lists.sourceforge.net/lists/listinfo/gcsf-discuss'>subscribed</a> before posting)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../computation-components.php"><< Components for Grid Computation</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>