<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 72

$title = "Globus: Grid Software - Pegasus";
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

<h1 class="first">Pegasus Workflow Transformation</h1>

<p>
Pegasus converts abstrat workflow (AW) into concrete workflow (CW). It uses metadata to convert user requests to logical data sources. It then obtains AW from <a href='chimera.php'>Chimera</a> and uses replication data to locat physical files. Pegasus then delivers CW to DAGman, executes using <a href='condor.php'>Condor</a>, and publishes new replication and derivation data in RLS and Chimera (optional).
</p>

<?
$software = "<a href='http://pegasus.isi.edu'>Pegasus</a>";
$developer = "GriPhyN Project";
$distros = "Virtual Data Toolkit (VDT)";
$contact = "<a href='mailto:deelman@isi.edu'>deelman@isi.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../computation-components.php"><< Components for Grid Computation</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>