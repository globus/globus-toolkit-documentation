<?php

// 2004-10-20, robinett: created, copied information from www.globus.org/gridware/monitoring/inca.html

$title = "Grid Ecosystem - Inca";
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

<h1 class="first">Inca</h1>

<p>
<img border="0" src="INCA-2.jpg" style="float: right; margin-left: 0.3em">
Inca is a generic framework for the automated testing, verification, and monitoring of service-level agreements. Inca is currently being used by the TeraGrid project to verify software installations and to monitor service availability.
</p>

<p>
Inca is especially useful to Grid system deployment activities where there is a need to verify that software and operating systems have been deployed and configured in compliance with agreed-upon specifications.  For example, specific versions of specific software packages have been installed, configuration settings are as expected, system settings are in a predefined state, services are running on expected ports, etc.
</p>

<p>
Inca provides a very simple "reporter" API, allowing existing test scripts (unit tests, status tools) to be integrated. It provides great flexibility in how tests are executed, and supports hierarchical controllers.  It provides hierarchical status monitoring by grouping tests into logical sets, allowing many levels of detail and summarization. Several query/display tools are provided.
</p>

<p align="center" style="clear: right;"><img border="0" src="INCA-1.gif" /></p>
<?
$software = "<a href='http://tech.teragrid.org/inca/'>Inca</a>";
$developer = "<a href='http://www.teragrid.org/'>TeraGrid Project</a>";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR6/AllItems.aspx'>NMI-R6</a><br />
            <a href='http://tech.teragrid.org/inca/www/downloads.html'>Download from TeraGrid</a>";
$contact = "<a href='mailto:kericson@sdsc.edu'>kericson@sdsc.edu</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p style="clear: left;"><a href="../monitoring-components.php"><< Components for Grid Monitoring and Discovery</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
