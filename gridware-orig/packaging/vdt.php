<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 93

$title = "Globus: Grid Software - VDT";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../packaging-tools-and-dist.php"><< Tools for Software Packaging and Distribution</a></p>

<h1 class="first">Virtual Data Toolkit - VDT</h1>

<p>
VDT is a Grid middleware distribution focused on the needs of the NSF-funded GriPhyN and iVDGL projects, both of which are focused on Physics and Astronomy applications. Ease of use (and installation) is key. VDT includes Globus Toolkit & Condor, Condor-G, Virtual Data Tools (Chimera, Pegasus, RLS), and Utilities (GSI-OpenSSH, UberFTP, MonaLisa, MyProxy, KX.509, etc.). It uses PACMAN for distribution, install, configuration. VDT is deployed on Grid3 (28 major U.S. sites).
</p>

<?
$software = "<a href='http://www.cs.wisc.edu/vdt/'>VDT</a>";
$developer = "GriPhyN Project";
$distros = "Download from VDT";
$contact = "<a href='mailto:vdt-support@ivdgl.org'>vdt-support@ivdgl.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../packaging-tools-and-dist.php"><< Tools for Software Packaging and Distribution</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>