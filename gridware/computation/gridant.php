<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 69

$title = "Grid Ecosystem - GridAnt";
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


<h1 class="first">GridAnt</h1>

<p>
GridAnt is a simple, yet surprisingly powerful, user-controllable Grid-enabled workflow engine. 
It uses Java Ant to execute workflows specified by the user, and it uses Globus Toolkit services 
and their Java client interfaces to make use of Grid resources when executing tasks.
</p>

<?
$software = "<a href='http://www-unix.globus.org/cog/projects/gridant/'>GridAnt</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "Available via remote CVS. See the GridAnt manual for details.";
$contact = "<a href='mailto:gregor@mcs.anl.gov'>gregor@mcs.anl.gov</a> ";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p>
<img src='GRIDANT-1.jpg'><img src='GRIDANT-2.jpg'>
</p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
