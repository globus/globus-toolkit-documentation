<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 69

$title = "Globus: Grid Software - GridAnt";
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

<h1 class="first">GridAnt</h1>

<p>
<img src='GRIDANT-1.jpg' style='float: right; margin-left: 0.3em;'>
<img src='GRIDANT-2.jpg' style='float: right; clear: right; margin-left: 0.3em;'>
GridAnt is a user-controllable, grid-enabled workflow engine. It uses Java Ant for workflow execution and Java CoG and GT services to interface to system services.
</p>

<?
$software = "<a href='http://www-unix.globus.org/cog/projects/gridant/'>GridAnt</a>";
$developer = "Platform Computing";
$distros = "Platform Globus Toolkit<br />Download from SourceForge.net";
$contact = "<a href='mailto:gcsf-discuss@sourcefourge.net'>gcsf-discuss@sourceforge.net</a><br />(must be <a href='http://lists.sourceforge.net/lists/listinfo/gcsf-discuss'>subscribed</a> before posting)";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../computation-components.php"><< Components for Grid Computation</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>