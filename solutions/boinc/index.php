<?php
$title = "Grid Ecosystem - Client scripting for BOINC applications.";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>

<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">Client scripting for BOINC applications with GRAM4</h1>

<p><strong>Einstein@Home</strong> is a BOINC application that uses your computer's idle time to search for spinning neutron stars (also called pulsars) using data from the LIGO and GEO gravitational wave detectors. Einstein@Home is a World Year of Physics 2005 project supported by the American Physical Society (APS) and by a number of international organizations.</p>
<p>The AstroGrid-D project developed a grid-enabled framework around Einstein@Home, using the Globus 4 toolkit as a standard Grid middleware.   An automated mechanism continuously submits jobs to available resources and maintains their status using the <strong>globusrun-ws</strong> command line client.</p>
<p>Since October 2007, the GEO600 grid application has been running in production mode on a large number of supercomputers, clusters, and PCs within the German D-Grid.</p>
<p>Web Site: <a href="http://cashmere.aip.de:8080/gridsphere/gridsphere/guest/32/r/">http://cashmere.aip.de:8080/gridsphere/gridsphere/guest/32/r/</a></p>
<p>Since January 2008, the GEO600 grid application is being used to run Einstein@Home on the Open Science Grid (coined E@OSG).</p>
<p>Web Site: <a href="https://www.lsc-group.phys.uwm.edu/daswg/projects/OSG-LIGO.html">https://www.lsc-group.phys.uwm.edu/daswg/projects/OSG-LIGO.html</a></p>
<h2>Benefit</h2>
<p>The main benefit GRAM4 provides this E@Home grid application is a set of command line client programs that handle  job submission and monitoring to the remote OSG compute resources for all E@Home activity.  Without GRAM4, the client would have to deal with several different mechanisms to submit and monitor jobs on the various OSG resources, which would make the client more complex and thus more costly to develop and more likely to have errors.</p>
<blockquote>
<p>&quot;We found that GRAM4 provides a very clean interface in terms of the job description RSL. It uses a well defined format which made it easy to template. The job description language used by GRAM4 also supports third-party file transfers<br />
  from remote storage resources that differ from the job submission host.  This allowed us to integrate large storage resources into our scenario.</p>
<p>Minimizing software dependencies and hardware requirements of our application allowed us to take advantage of a wide range of resources.  By providing our own generic deployment infrastructure, we by-passed the slow process of requesting infrastructure changes in a heterogeneous environment with many authorities such as D-Grid. Our concept to deploy and run grid applications in D-Grid proved to be successful when we started to utilize resources in the OSG within a very short time after access was granted to us.&quot; - <strong>Robert Engel</strong>, AstroGrid, Max-Planck-Institute for Gravitational Physics, Potsdam, Germany</p>
</blockquote>
<h2>Results</h2>
<p>Since October 2007, the E@Home grid application has sustained a throughput of several 1000 jobs per day on D-Grid and is currently averaging roughly 8000 jobs per day.</p>
<p>The E@OSG effort has been running since January 2008.   It is currently averaging between 1000 and 2000 jobs per day on OSG.</p>
<p>The overall effort from the project &quot;AEI eScience group, for the German Grid (D-Grid), and the Open Science Grid (OSG)&quot;<br />
  currently ranks as the #1 BOINC project in the world:<br />
  <a href="http://www.boincsynergy.com/stats/boinc-individual.php?cpid=7ed0c45997dffcf265f79758a969d5bb">http://www.boincsynergy.com/stats/boinc-individual.php?cpid=7ed0c45997dffcf265f79758a969d5bb</a></p>
<p>Since Nov 2008, the E@OSG BOINC effort is being tracked separately here: <a href="http://boincstats.com/stats/user_graph.php?pr=einstein&amp;id=282952">http://boincstats.com/stats/user_graph.php?pr=einstein&amp;id=282952</a></p>
<h2>Now You Try...</h2>
<p>You can find details about accessing and using the code <a href="http://www.ligo.caltech.edu/~bdaudert/E@OSG/E@OSG_doc/deployment.html">here</a>.</p>


<p></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
