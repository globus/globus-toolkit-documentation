<?php

// 2004-10-20, robinett: created, copied information from Ecosystem-1.6.ppt, slide 63

$title = "Grid Ecosystem - MonALISA";
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

<h1 class="first">MonALISA</h1>

<p>
<img border="0" src="MONALISA-1.jpg" style="float: right; margin-left: 0.3em">
MonALISA provides a system monitoring framework based on Java JINI and Web services.  It has been integrated with
the Ganglia cluster toolkit and several other queueing systems, and it provides client interfaces in JINI, Web services,
Web browsers, and WAP. MonaLISA features flexible registration capabilities to provide lookup services and proxy 
mechanisms that ease use with firewalls.
</p>

<?
$software = "<a href='http://monalisa.cacr.caltech.edu'>MonALISA</a>";
$developer = "<a href='http://www.cacr.caltech.edu'>CACR, California Institute of Technology</a>";
$distros = "<a href='http://www.griphyn.org/vdt/'>Virtual Data Toolkit (VDT)</a><br />
           Download from <a href='http://monalisa.cacr.caltech.edu'>CACR</a>";
$contact = "<a href='mailto:support@monalisa.cern.ch'>support@monalisa.cern.ch</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../monitoring-components.php"><< Components for Grid Monitoring and Discovery</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
