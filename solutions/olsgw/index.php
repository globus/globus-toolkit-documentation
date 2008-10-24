<?php
$title = "Grid Ecosystem - Open Life Science Gateway and GRAM";
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

<h1 class="first">Open Life Science Gateway and GRAM</h1>

<p>
Open Life Science Gateway (OLSGW) integrates a group of bio-informatics applications and data collections into a portal so that life scientists can easily access the resources of the TeraGrid to submit their Genome-related analysis programs via GRAM and manage the Peta-bytes of datasets via GridFTP. It provides the Life Science community with an easy-to-use web-service interface, which has the similar look and feel to bioinformatics web environments that have been available to the community for years. Therefore biologists with no prior experience of Grid computing can easily use this gateway environment to run their analysis programs and compose computational workflow scripts without the challenges of a sharp learning curve.</p>
<ul>
  <li>TG08 paper detailing the design and implementation: <a href="http://www.teragrid.org/events/teragrid08/Papers/papers/24.pdf">http://www.teragrid.org/events/teragrid08/Papers/papers/24.pdf</a></li>
  <li>OLSGW portal: <a href="http://lsgw.uc.teragrid.org:8080/gridsphere/gridsphere">http://lsgw.uc.teragrid.org:8080/gridsphere/gridsphere</a></li>
</ul>
<p><strong>NOTE:</strong> A good design decision described in the TG08 OLSGW paper is the internal job queue that is used to throttle overall job submission as well as control which TG resource is used for each job.  As with most any software, there are limitations, so the amount of overall activity should be controlled in the gateway.  It is important to throttle to ensure reliability of both the client (Gateway) and service (GRAM service + TG compute resource).</p>
<h2>Benefit</h2>
<p>The main benefit GRAM provides the OLSGW is a single client-side API that handles the job submission and monitoring to the remote TeraGrid compute resources for all of the OLSGW users.  Without GRAM, the client would have to deal with several different mechanisms to submit and monitor jobs on the various TeraGrid resources, which would make the client more complex and thus more costly to develop and more likely to have errors.  OLSGW uses the Java Cog Kit and submits both GRAM2 and GRAM4 jobs.  GRAM4 has proven to be more scalable than GRAM2, thus GRAM4 is the preferred service for submitting remote job on TeraGrid.  Currently, OLSGW submits jobs to three TG resources:</p>
<ol>
 <li>Purdue's Steel managed by PBS</li>
 <li>UC/ANL's DTF managed by PBS</li>
 <li>TACC's Lonestar managed by LSF</li>
</ol>

<h2>Results</h2>
<p>Over a 6 month period (Apr - Oct 2008), OLSGW submitted ~15K jobs to TeraGrid resources.  Roughly half were submitted via GRAM4 and half via GRAM2.  The largest number of jobs submitted in one day was 3557.</p>

<h2>Now You Try...</h2>
<p>To get started creating a TeraGrid Science Gateway, see the documentation and tutorials <a href="http://staging.teragrid.org/gateways/library.php">here</a>.</p>


<p></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
