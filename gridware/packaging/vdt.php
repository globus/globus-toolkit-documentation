<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 93

$title = "Grid Ecosystem - Virtual Data Toolkit (VDT)";
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

<h1 class="first">Virtual Data Toolkit (VDT)</h1>

<p>
The Virtual Data Toolkit is a Grid software distribution focused on the needs of the NSF-funded GriPhyN and iVDGL 
projects, both of which are focused on physics and astronomy applications. Ease of use (and installation) is a key
goal of the VDT effort. VDT includes a number of experimental software tools in use by the physics and astronomy
communities, particularly those that support the "virtual data" concept.
</p>

<p>
VDT includes Globus Toolkit & Condor, Condor-G, Virtual Data Tools (Chimera, Pegasus, RLS), and a variety of
system-level utilities (GSI-OpenSSH, UberFTP, MonaLisa, MyProxy, KX.509, etc.). VDT uses 
<a href="pacman.php">PACMAN</a> for distribution, installation, and configuration. VDT is deployed on Grid3, 
a distributed system comprised of 28 major U.S. sites that supports scientific applications on a continuous
basis.
</p>

<?
$software = "<a href='http://www.cs.wisc.edu/vdt/'>VDT</a>";
$developer = "<a href='http://www.griphyn.org/'>GriPhyN Project</a>";
$distros = "<a href='http://www.cs.wisc.edu/vdt/'>Download from VDT</a>";
$contact = "<a href='mailto:vdt-support@ivdgl.org'>vdt-support@ivdgl.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../packaging-tools-and-dist.php"><< Tools for Software Packaging and Distribution</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
