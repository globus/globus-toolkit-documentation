<?php

// 2004-10-20, robinett: created, copied information from Ecosystem-1.6.ppt, slide 63

$title = "Globus: Grid Software - MonALISA";
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
MonALISA supports system-wide, distributed monitoring with triggers for alerts. It provides Java/JINI and Web services with intergration into Ganglia, queuing systems, and so on. Client interfaces include Web and WAP. Flexible registration and proxy mechanisms are implemented, complete with support for look-ups and firewalls.
</p>

<?
$software = "MonALISA";
$developer = "CACR, California Institute of Technology";
$distros = "Virtual Data Toolkit (VDT)<br />Download from <a href='http://monalisa.cacr.caltech.edu'>CACR</a>";
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