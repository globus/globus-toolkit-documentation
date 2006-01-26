<?
$title = "Grid Ecosystem - Computation";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<!--<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div> -->

<div id="main">

<h1 class="first">Components for Grid Computation</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#mechanisms">Basic Computation Mechanisms</a>
<li><a href="#frameworks">Distributed Programming Frameworks</a>
<li><a href="#metascheduling">Components for Metascheduling</a>
<li><a href="#virtualdata">Components for Virtual Data</a>
</ol>

<p>
Support for distributed computation is one of the earliest areas of exploration in Grid computing, and many
tools have been developed in this area. Many more are needed to fill out this space, however, because there
are so many issues (accounting, "sandboxing", consistent runtime environments, etc.) involved in allowing people to run jobs or use services 
on a compute resource.
</p>

<p>
The Globus Toolkit's GRAM interface, combined with a local scheduler, provides a basic mechanism for 
remote job submission and the related file staging and I/O requirements.  Other components in this area seem 
to fall into three major categories: metascheduling (aka brokering), distributed programming frameworks, and 
virtual data.
</p>

<?php if ($SITE_CONTENT["GLOBUS"]) { ?>
<p>
<strong>Related solutions:</strong>
The <strong><a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Solutions</a></strong> 
section of this website provides examples of these components being used in 
scientific projects.
</p>
<?php } ?>

<p><strong><a name="mechanisms" class="title">Basic Computation Mechanisms</a></strong><p>

<ul>
<li><strong><a href='gram.php'>GRAM</a></strong> -  The Globus Toolkit's GRAM service, client interfaces, and tools have supported much of the Grid's success to date in large-scale distributed computation. In its simplest form, GRAM provides a uniform interface for submitting and controlling jobs on heterogeneous Grid computation elements.</li>
<li><strong><a href='gram-plugins.php'>GRAM Scheduler Plugins</a></strong> -  The GRAM service can
be used in conjunction with a scheduler to provide a managed computation service. These "plugins" provide the
critical interface between the GRAM service and several popular schedulers. </li>
</ul>

<p><strong><a name="frameworks" class="title">Distributed Programming Frameworks</a></strong><p>

<p>
These components provide programming support for developing distributed applications using three
familiar frameworks: RPC, message passing, and workflow.
</p>

<ul>
<li><strong><a href='netsolve.php'>NetSolve/GridSolve</a></strong> - NetSolve/GridSolve is an RPC-based library for executing solver code on Grid resources.</li>
<li><strong><a href='ninf-g.php'>Ninf-G</a></strong> - Ninf-G allows existing programming libraries to be used
in a distributed fashion on a Grid using the RPC framework.</li>
<li><strong><a href='mpich-g2.php'>MPICH-G2</a></strong> - MPICH-G2 is a Grid-enabled 
implementation of the popular MPI (Message Passing Interface) framework
<li><strong><a href='condor-g.php'>Condor-G, DAGman</a></strong> - Condor-G and DAGman can be used 
to execute complex workflows (consisting of multiple independent or related jobs) using Grid compute resources 
via GRAM or Condor.</li>
</ul>

<p><strong><a name="metascheduling" class="title">Components for Metascheduling</a></strong><p>

<p>Metaschedulers optimize the use of distributed compute pools by accepting computation requests at a
central point and distributing these requests to available resources in order to meet utilization goals.</p>

<ul>
<li><strong><a href='csf.php'>CSF</a></strong> - The Community Scheduler 
Framework (CSF) is a set of modules that can be assembled to create a metascheduling 
system that accepts job requests and executes them using available Grid compute services.</li>
<li><strong><a href="gridway.php">GridWay</a></strong> - GridWay is a lightweight 
metascheduler that performs job execution management and resource brokering.</li>
</ul>

<p><strong><a name="virtualdata" class="title">Components for Virtual Data</a></strong><p>

<p>Virtual data tools help manage the trade-off between the resources required to store data and the
resources required to (re)produce it.</p>

<ul>
<li><strong><a href='chimera.php'>Chimera</a></strong> - Chimera captures the steps in a data analysis process and stores them in a catalog for later reuse.</li>
</ul>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
