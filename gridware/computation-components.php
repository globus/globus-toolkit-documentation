<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/computation-components.html

$title = "Grid Ecosystem - Computation";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<h1 class="first">Components for Grid Computation</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#mechanisms">Basic Computation Mechanisms</a>
<li><a href="#workflow">Components for Workflow Management</a>
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
The Globus Toolkit and Condor provide basic mechanisms for remote job submission and the related file staging and 
I/O requirements.  Other components in this area seem to fall into three major categories: workflow managers,
metascheduling (aka brokering), and virtual data.
</p>

<p><strong><a name="mechanisms" class="title">Basic Computation Mechanisms</a></strong><p>

<ul>
<li><strong><a href='computation/gram.php'>GRAM</a></strong> -  The Globus Toolkit's GRAM service, client interfaces, and tools have supported much of the Grid's success to date in large-scale distributed computation. In its simplest form, GRAM provides a uniform interface for submitting and controlling jobs on heterogeneous Grid computation elements.</li>
<li><strong><a href='computation/condor.php'>Condor</a></strong> -  The Condor resource manager provides another way to offer compute resources to remote users. Although similar in principle to traditional queueing systems, it has several interesting twists that make it unique.</li>
</ul>

<p><strong><a name="workflow" class="title">Components for Workflow Management</a></strong><p>

<p>Workflow Managers organize and coordinate task execution within a complicated application, and they often coordinate data movement and task execution.
</p>

<ul>
<li><strong><a href='computation/condor-g.php'>Condor-G, DAGman</a></strong> - Condor-G and DAGman can be used 
to execute complex workflows (consisting of multiple independent or related jobs) using Grid compute resources 
via GRAM or Condor.</li>
<li><strong><a href='computation/netsolve.php'>NetSolve/GridSolve</a></strong> - NetSolve/GridSolve is an RPC-based library for executing solver code on Grid resources.</li>
<li><strong><a href='computation/gridant.php'>GridAnt</a></strong> - GridAnt is a user-controllable, grid-enabled workflow engine based on Java Ant.</li>
</ul>

<p><strong><a name="metascheduling" class="title">Components for Metascheduling</a></strong><p>

<p>Metaschedulers optimize the use of distributed compute pools by accepting computation requests at a
central point and distributing these requests to available resources in order to meet utilization goals.</p>

<ul>
<li><strong><a href='computation/csf.php'>Platform CSF</a></strong> - The Community Scheduler Framework (CSF) is 
a set of modules that can be assembled to create a metascheduling system that accepts job requests and executes
them using available Grid compute services.
</ul>

<p><strong><a name="virtualdata" class="title">Components for Virtual Data</a></strong><p>

<p>Virtual data tools help manage the trade-off between the resources required to store data and the
resources required to (re)produce it.</p>

<ul>
<li><strong><a href='computation/chimera.php'>Chimera</a></strong> - Chimera captures the steps in a data analysis process and stores them in a catalog for later reuse.</li>
<li><strong><a href='computation/pegasus.php'>Pegasus</a></strong> - Pegasus converts abstract workflows into concrete workflows and executes them using Chimera and Condor tools.</li>
</ul>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
