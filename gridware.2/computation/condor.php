<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 67

$title = "Grid Ecosystem - Condor";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../computation-components.php"><< Components for Grid Computation</a></p>

<h1 class="first">Condor</h1>

<p>
The Condor resource manager provides a basic mechanism for computation resources to be made available for
use by applications and other system elements. While similar in principle to other local schedulers or queueing
systems, it includes a set of features that allow it to be used in unique and useful ways.
</p>

<p>Condor's resource manager can be configured to make the resource available for remote use only when it is
not otherwise occupied with local tasks.  This allows pools of Condor-managed resources to be put to work when
they otherwise would be idle.  Condor's ClassAd feature allows a "matchmaking" algorithm to match requests for
resources with available resources in a highly flexible manner. Condor also provides checkpointing and job 
migration features.  
</p>

<p>
Condor's "flocking" mechanism allows multiple Condor pools to be linked together so that job requests received 
by one pool can be executed on another pool.  Condor can be used in "glide-in" mode, where a "master job" is 
submitted to a system and when the job runs, the Condor service is started and Condor tasks can be submitted 
to it as long as the master job runs.
</p>

<p>
Condor is often run in conjunction with GRAM services.  A GRAM service can provide the standard GRAM interface to
a Condor pool (accepting job requests that are then executed on the pool). Or, compute resources that provide
a GRAM interface can be added to a Condor pool so that Condor jobs can be executed on them.
</p>


<?
$software = "<a href='http://www.cs.wisc.edu/condor/'>Condor</a>";
$developer = "<a href='http://www.cs.wisc.edu/condor/'>The Condor Project</a>";
$distros = "<a href='http://www.nsf-middleware.org/NMIR5/'>NMI-R5</a><br />
           <a href='http://www.cs.wisc.edu/condor/'>Download from the Condor Project</a>";
$contact = "<a href='mailto:condor-users@cs.wisc.edu'>condor-users@cs.wisc.edu</a><br />(must be <a href='http://lists.cs.wisc.edu/mailman/listinfo/condor-users'>subscribed</a> before posting)";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../computation-components.php"><< Components for Grid Computation</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
