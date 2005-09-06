<?php
$title = "Grid Ecosystem - GRAM Scheduler Plugins";
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


<h1 class="first">GRAM Scheduler Plugins</h1>

<p>
The Globus <a href="gram.php">GRAM</a> 
service provides a basic interface for submitting jobs to remote
resources, staging files and I/O, and managing jobs during execution. By itself, GRAM
provides a very nice, secure way to run code on remote systems.
</p> 

<p>
On many systems, users are expected to submit their job requests to a queueing system or scheduler, 
which runs jobs in order of priority based on a variety of factors and may even
distribute jobs to other systems (as is commonly the case in compute clusters).
</p>

<p>
The GRAM service includes a plugin interface that allows it to interface with local 
schedulers and queueing systems so that jobs submitted to the GRAM service are 
automatically given to the local scheduler or queueing system.
</p>

<p>
A number of schedulers either have GRAM support built-in, or have plugins that
interface to an available GRAM service. These include:
</p>

<ul>
<li><a href="http://www.cs.wisc.edu/condor/">Condor</a></li>
<li><a href="http://www.openpbs.org/">OpenPBS</a></li>
<li><a href="http://www.clusterresources.com/products/torque/">Torque</a></li>
<li><a href="http://www.pbspro.com/">PBSPro</a></li>
<li><a href="http://gridengine.sunsource.net/">Sun Grid Engine</a> and 
<a href="http://www.sun.com/software/gridware/">N1 Grid Engine</a></li>
<li><a href="http://www.platform.com/products/LSFfamily/">Platform LSF</a></li>
</ul>

<p>
Condor has many interesting scheduling features, including a scavenger mode, the ability to form 
"pools" of otherwise unrelated systems, and a matchmaking model for matching requests to available 
services. OpenPBS, Torque, and PBSPro are all variants of the PBS Portable Batch System. (Torque 
and PBSPro are commercial products.)  Sun Grid Engine is available as a free open source tool or 
as a commercial product. Platform LSF is a commercial product line that scales across a wide range 
of needs.
</p>

<?
$software = "<a href='http://www.globus.org/toolkit/docs/4.0/execution/'>GRAM Scheduler Plugins</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR7/AllItems.aspx'>NMI-R7</a><br />
           <a href='http://www-unix.globus.org/toolkit/'>Globus Toolkit 4.0</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a><br />
            (must be <a href='http://www.globus.org/about/subscriptions.html'>subscribed</a> before posting)";


// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
