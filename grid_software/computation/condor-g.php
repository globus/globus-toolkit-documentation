<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 67

$title = "Grid Ecosystem - Condor-G and DAGman";
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


<h1 class="first">Condor-G and DAGman</h1>

<p>
Condor-G is a client tool that can manage the execution of a set of related tasks on Grid-accessible 
computation resources. Condor-G allows the user to specify a set of tasks to be run and any relationships
or dependencies between tasks.  It then goes about executing the tasks using available resources. Condor-G
provides a very nice client interface to the Condor and GRAM computation services.
</p>

<p>
DAGman is a related tool that allows users to specify a directed acyclic graph (DAG) of tasks to be 
executed with (potentially) complex relationships and dependencies. DAGman optimizes the ordering of
task execution and works with Condor-G to execute the tasks in an optimal sequence using available Grid
compute resources. The most complicated DAGs are typically produced by computer programs that plan
a set of tasks based on high-level user requests. DAGman provides a key element of powerful data
processing systems like the Virtual Data System.
</p>

<?
$software = "<a href='http://www.cs.wisc.edu/condor/'>Condor-G and DAGman</a>";
$developer = "<a href='http://www.cs.wisc.edu/condor/'>The Condor Project</a>";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR7/AllItems.aspx'>NMI-R7</a><br />
           <a href='http://www.cs.wisc.edu/condor/'>Download from the Condor Project</a>";
$contact = "<a href='mailto:condor-users@cs.wisc.edu'>condor-users@cs.wisc.edu</a><br />(must be <a href='http://lists
.cs.wisc.edu/mailman/listinfo/condor-users'>subscribed</a> before posting)";


// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
