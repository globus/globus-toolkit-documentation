<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/monitoring-components.html

$title = "Globus: Grid Software - Monitoring Components";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<h1 class="first">Componenets for Grid Monitoring and Discovery</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#mechanisms">Basic Monitoring and Discovery Mechanisms</a></li>
<li><a href="#components">Specialized Monitoring and Discovery Components</a></li>
</ol>

<p>
Grid systems and applications are usually intended to be "persistent," meaning that they are expected to be available to users on an ongoing basis as much of the time as possible.  While specific parts of the infrastructure (computational elements, storage systems, instruments and telepresence sites, etc.) may be taken offline or added to the system on a dynamic basis, the system or application as a whole should remain available as much as possible, adapting gracefully to the changing availability of infrastructure elements.
</p>

<p>
This model of availability creates requirements for <em>monitoring</em> and <em>discovering</em> infrastructure elements and services.  The OGSA architecture and the Globus Toolkit provide a core architecture and an implementation (respectively) for publishing, locating, and subscribing to information.  The Grid community has developed several specialized systems for system monitoring that are useful both as stand-alone mechanisms and as elements within the OGSA architecture.
</p>

<p><strong><a name="mechanisms">Basic Monitoring and Discovery Mechanisms</a></strong></p>

<p>
The OGSA architecture and the Globus Toolkit provide a core architecture and an implementation (respectively) for publishing, locating, and subscribing to information.
</p>

<ul>
<li><strong>WS Core Monitoring Features</strong> -  </li>
<li><strong>Specific Information Providers</strong> - </li>
<li><strong>Index Service</strong> - </li>
<li><strong>Archiver Service</strong> - </li>
</ul>

<p><strong><a name="components">Specialized Monitoring and Discovery Components</a></strong></p>

<p>
The Grid community has developed several specialized systems for system monitoring that are useful both as stand-alone mechanisms and as elements within the OGSA architecture.
</p>

<ul>
<li><strong><a href="monitoring/ganglia.php">Ganglia Cluster Toolkit</a></strong> - A toolkit for monitoring clusters and hierarchical aggregations of clusters</li>
<li><strong><a href="monitoring/inca.php">Inca</a></strong> - A generic framework for the automated testing, verification, and monitoring of service-level agreements</li>
<li><strong><a href="monitoring/big-brother.php">Big Brother</a></strong> - A scripting framework for producing web-based system status displays</li>
<li><strong><a href="monitoring/esg-monitoring.php">Earth System Grid Monitoring Tools</a></strong> - A set of tools for monitoring Grid services, sounding alarms if services fail, and archiving system status data for subsequent analysis</li>
<li><strong><a href='monitoring/monalisa.php'>MonALISA</a></strong> - A system-wide, distributed monitoring tool.</li>
<li><strong><a href='monitoring/rgma.php'>R-GMA</a></strong> - An alternative to the GT Indexing Services</li>
</ul>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
