<?php
$title = "Grid Ecosystem - GridWay";
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


<h1 class="first">GridWay</h1>

<img src='GridWay.gif' style='float: right; margin-left: 0.3em;'>

<p>
GridWay is a light-weight meta-scheduler that performs job execution management 
and resource brokering.  It allows unattended, reliable, and efficient execution of 
jobs, array jobs, or complex jobs on heterogeneous, dynamic and loosely-coupled 
Grids. GridWay performs all the job scheduling and submission steps transparently
to the end user and adapts job execution to changing Grid conditions 
by providing fault recovery mechanisms, dynamic scheduling, migration on-request 
and opportunistic migration.
</p>

<p>GridWay uses the <a href="gram.php">GRAM</a> interface on computation resources.  
It is able to simultaneously use both pre-WS and WS GRAM services.</p> 

<p>
The GridWay command line interface is similar to that found on Unix and resource 
management systems such as PBS or SGE. It allows users to submit, kill, migrate, 
monitor and synchronize jobs. The framework automatically detects when a job has 
failed and allows the user to abort, retry or migrate it to a new machine. It 
also includes <a href="http://www.drmaa.org/">DRMAA</a> GGF standard support to 
develop distributed applications. 
</p>

<?
$software = "<a href='http://www.gridway.org/'>GridWay</a>";
$developer = "<a href='http://asds.dacya.ucm.es/'>Distributed Systems Architecture Group (UCM)</a>";
$distros = "Download from <a href='http://www.gridway.org/'>GridWay Project Website</a>";
$contact = "<a href='http://www.gridway.org/forum/'>GridWay Forum</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
