<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 91

$title = "Globus: Grid Software - NPACKage";
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


<h1 class="first">NPACKage</h1>

<p>
NPACkage is a custom distribution created for NPACI sites. It includes all NMI components, plus SRB, DataCutter, Ganglia, APST, LaPACK for Clusters (LFC), and Network Weather Service. NPACKage uses PACMAN for distribution and installation.
</p>

<?
$software = "<a href='http://npackage.npaci.edu'>NPACKage</a>";
$developer = "NPACI";
$distros = "Download from NPACKage";
$contact = "+1 858-534-5100";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
