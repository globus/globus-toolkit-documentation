<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/computation-components.html

$title = "Globus: Grid Software - Computation Components";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<h1 class="first">Componenets for Grid Computation</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#mechanisms">Basic Computation Mechanisms</a>
<li><a href="#workflow">Components for Workflow Management</a>
<li><a href="#metascheduling">Components for Metascheduling</a>
<li><a href="#virtualdata">Components for Virtual Data</a>
</ol>

<p>
All these tools aid in computation and processing. Workflow manage organize and cooredinate teask execution within complicated applications and often coordinate data movement and task execution. Metaschedulers optimize the use of distributed compute pools while virtual data tools manage the trade-off between data storage and processing power.
</p>

<p><strong><a name="mechanisms" class="title">Basic Computation Mechanisms</a></strong><p>

<ul>
<li><strong><a href='computation/gram.php'>GRAM</a></strong> -  The Globus Toolkit's GRAM service, client interfaces, and tools have supported much of the Grid's success to date in large-scale distributed computation. In its simplest form, GRAM provides a uniform interface for submitting and controlling jobs on heterogeneous Grid computation elements.</li>
<li><strong><a href='computation/condor.php'>Condor</a></strong> -  Condor helps manage the many workflow challenges of Grid applications. While similar to distributed batch processing systems it has several interesting twists that make it unique.</li>
</ul>

<p><strong><a name="workflow" class="title">Components for Workflow Management</a></strong><p>

<p>Workflow Managers organize and coordinate task execution within a complicated application, and they often coordinate data movement and task execution.
</p>

<ul>
<li><strong><a href='computation/condor-g.php'>Condor-G, DAGman</a></strong> - [one-sentence description, see above?]</li>
<li><strong><a href='computation/netsolve.php'>NetSolve/GridSolve</a></strong> - NetSolve/GridSolve is an RPC-based library for executing solver code on Grid resources.</li>
<li><strong><a href='computation/gridant.php'>GridAnt</a></strong> - GridAnt is a user-controllable, grid-enabled workflow engine based on Java Ant.</li>
</ul>

<p><strong><a name="metascheduling" class="title">Components for Metascheduling</a></strong><p>

<p>Metaschedulers optimize use of distributed compute pools.</p>

<ul>
<li><strong><a href='computation/csf.php'>Platform CSF</a></strong> - [one-sentence description - important to point out that there are many of these, and we're just using CSF as a representative example.  what are other really good implementations?]</li>
</ul>

<p><strong><a name="virtualdata" class="title">Components for Virtual Data</a></strong><p>

<p>Virtual data tools help manage the trade-off between data storage and processing power</p>

<ul>
<li><strong><a href='computation/chimera.php'>Chimera</a></strong> - Chimera captures the steps in a data analysis process and catalogs it.</li>
<li><strong><a href='computation/pegasus.php'>Pegasus</a></strong> - Pegasus converts abstract workflows into concrete workflows using Chimera and Condor.</li>
</ul>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
