<?php

// 2004-10-20, robinett: created, copied information from Ecosystem-1.6.ppt, slide 64

$title = "Globus: Grid Software - R-GMA";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../monitoring-components.php"><< Components for Grid Monitoring and Discovery</a></p>

<h1 class="first">R-GMA</h1>

<p>
R-GMA is an alternative to the GT Indexing Services which takes a relational database approach. It is based closely on the GCF Grid Monitoring Architecture (CMA) and can be used with GT Pre-WS information providers. R-GMC utilizs a producer/consumer architecture, complete with matchmaking, agents, static and stream data, and support for hierarchy. It is used on most EU Grids.
</p>

<?
$software = "<a href='http://www.r-gma.org/'>R-GMA</a>";
$developer = "European DataGrid Project";
$distros = "Download from the DataGrid Project";
$contact = "<a href='mailto:s.m.fisher@rl.ac.uk'>s.m.fisher@rl.ac.uk</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../monitoring-components.php"><< Components for Grid Monitoring and Discovery</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>