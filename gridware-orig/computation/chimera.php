<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 71

$title = "Globus: Grid Software - Chimera";
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

<h1 class="first">Chimera "Virtual Data"</h1>

<p>
<img src='CHIMERA-1.jpg' style='float: right; margin-left: 0.3em;'>
Chimera captures both logical and physical steps in a data analysis process, including transformations (logical) and derivations (physical). It builds a catalog, which allows introspection of analysis. Results can be used to "replay" analysis, with generation of DAG (via Pegasus) and execution on the Grid.
</p>

<?
$software = "<a href='http://www.griphyn.org/chimera/'>Chimera</a>";
$developer = "GriPhyN Project";
$distros = "Virtual Data Toolkit (VDT)";
$contact = "<a href='mailto:chimera-support@griphyn.org'>chimera-support@griphyn.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../computation-components.php"><< Components for Grid Computation</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>