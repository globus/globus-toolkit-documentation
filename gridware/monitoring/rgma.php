<?php

// 2004-10-20, robinett: created, copied information from Ecosystem-1.6.ppt, slide 64

$title = "Grid Ecosystem - R-GMA";
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


<h1 class="first">R-GMA</h1>

<p>
<img border="0" src="RGMA-1.jpg" style="float: right; margin-left: 0.3em">
R-GMA is an alternative to the Globus Toolkit Index Service that takes a relational database approach. It is based 
closely on the GGF Grid Monitoring Architecture (GMA) and can be used with Globus Toolkit information providers.</p>

<p>
R-GMA utilizes a producer/consumer architecture, complete with matchmaking, agents, static and stream data, and 
support for hierarchy. It was developed by the European DataGrid project and is currently used on many European Grids.
</p>

<?
$software = "<a href='http://www.r-gma.org/'>R-GMA</a>";
$developer = "<a href='http://www.eu-datagrid.org'>The DataGrid Project</a>";
$distros = "Download from the <a href='http://web.datagrid.cnr.it/pls/portal30/GRID.DYN_SOFTWARE.show'>DataGrid Project</a>";
$contact = "<a href='mailto:s.m.fisher@rl.ac.uk'>s.m.fisher@rl.ac.uk</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
