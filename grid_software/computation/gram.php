<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 64

$title = "Grid Ecosystem - GRAM";
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


<h1 class="first">GRAM - Basic Job Submission and Control Service</h1>

<p>
GRAM is a uniform service interface for remote job submission and control. It includes the ability to
stage files (entire directory trees of files if necessary) into and out of a compute resource prior to and after
job execution, remote I/O redirection, job status monitoring, and job signaling (stop, restart, kill, etc.).  
GRAM also supports features for reliabile job execution including two-stage commits and grid credential refreshing
for long-running jobs.  GRAM supports basic Grid security mechanisms and can map from Grid-wide identities to
local accounts for accounting purposes. Two versions of the GRAM service are available: one that uses Web services
interfaces and one that pre-dates the use of Web services in Grids.
</p>

<p>
It is important to understand that GRAM is <em>not</em> a scheduler. There is no scheduling or 
metascheduling/brokering. GRAM is often used a front-end to schedulers (allowing Grid systems to submit jobs
to the local schedulers).  It can also be used to simplify the development of metaschedulers and brokers by
providing a uniform interface to many heterogeneous compute resources that otherwise would require the 
metascheduler to support many submission interfaces.
</p>

<?
$software = "<a href='http://www-unix.globus.org/toolkit/docs/3.2/gram/'>GRAM</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www-unix.globus.org/toolkit/'>Globus Toolkit 3.2</a><br />
           <a href='http://collab.nsf-middleware.org/Lists/NMIR6/AllItems.aspx'>NMI-R6</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
