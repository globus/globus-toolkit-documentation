<?php

// 2004-10-18, robinett: created, copied information from www.globus.org/gridware/security/ganglia.html

$title = "Grid Ecosystem - Ganglia Cluster Toolkit";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once($SITE_PATHS["SERV_INC"].'header.inc'); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">


<h1 class="first">Ganglia Cluster Toolkit</h1>

<p>
Ganglia is a toolkit for monitoring clusters and hierarchical aggregations of clusters. Ganglia collects system status information and makes it available via a web interface. Ganglia status can be subscribed to and aggregated across multiple systems.
</p>

<p>
Ganglia is highly appropriate in Grid infrastructure deployment efforts that need to monitor the status and utilization of their cluster resources.  Ganglia may also be useful in Grid applications that need to monitor the status and utilization of the resources on which they run for optimization purposes.
</p>

<p>
Integrating Ganglia with MDS services results in status information provided in the proposed standard GLUE schema, popular in international Grid collaborations. In this configuration, Web service interfaces can be used to query, search, and subscribe to the data provided by Ganglia.
</p>

<p align='center'><img border="0" src="Ganglia-1.jpg" /></p>

<?

$software = "<a href='http://ganglia.sourceforge.net/'>Ganglia Cluster Toolkit</a>";
$developer = "<a href='http://www.millennium.berkeley.edu/'>UC Berkeley Millenium Project</a>";
$distros = "<a href='http://rocks.npaci.edu/'>NPACI Rocks</a><br /><a href='http://ganglia.sourceforge.net/downloads.php'>Download from SourceForge</a>";
$contact = "<a href='mailto:ganglia-developers@lists.sourceforge.net'>ganglia-developers@lists.sourceforge.net</a><br />(must be <a href='http://ganglia.sourceforge.net/'>subscribed</a> before posting)";

app_info($software, $developer, $distros, $contact);

?>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
