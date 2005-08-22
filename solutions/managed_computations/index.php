<?php
$title = "Grid Solutions - Managed Computations";
$section = "section-managed";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!-- <div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">The Managed Computation and its Application to EGEE and OSG Requirements</h1>


<h3>Abstract</h3>

<div id="solutions-sidebar" style="float: right; margin-right: 1em">
<h2>More Information</h2>
<ul>
<li><a href="http://public.eu-egee.org/">About EGEE</a></li>
<li><a href="http://www.opensciencegrid.org/">About OSG</a></li>
</ul>
</div>

<p>
An important model of Grid operation is one in which a virtual
organization (VO) negotiates an allocation from a resource provider and
then disperses that allocation across its members according to VO
policy. Implementing this model requires the ability for a VO to deploy
and operate its one resource management strategy. In this white paper,
we argue that an approach in which VO management functions are mapped
into the creation and operation of managed computations provides a
simple yet flexible solution to the VO resource management problem in
general, and EGEE's VO computation management problems in particular. We
present the basic architectural framework, describe an initial
implementation based on existing components and present performance
results.
</p>

<p>
<a href="EGEE RM DRAFT.pdf"><b>Full Paper</b> (draft)</a>
</p>

<p>
<a href="configuration_guide.php">Configuration Guide</a>
</p>

<p>
<a href="simple_managed_service_experiment.pdf">Simple Managed Service Experiment</a>
</p>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
