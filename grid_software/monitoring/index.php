<?
$title = "Grid Ecosystem - Monitoring and Discovery";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<!-- <div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div> -->

<div id="main">

<h1 class="first">Components for Grid Monitoring and Discovery</h1>

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

<p>
<strong>Related solutions:</strong>
The <strong><a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Solutions</a></strong> section 
of this website provides examples of these components being used in scientific projects. See 
especially the <strong><a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]."system_monitoring/"; ?>">ESG 
System Monitoring</a></strong> solution.
</p>

<p><strong><a name="mechanisms" class="title">Basic Monitoring and Discovery Mechanisms</a></strong></p>

<p>
The OGSA architecture and the Globus Toolkit provide a core architecture and an implementation (respectively) for publishing, locating, and subscribing to information.
</p>

<ul>
<li><strong><a href="ws-core.php">WS Core Monitoring Features</a></strong> - Uniform 
mechanisms for obtaining status details from Web services and for subscribing to properties of interest</li>
<li><strong><a href="index-service.php">Globus Index Service</a></strong> - A collection point 
for status information from other services on a Grid</li>
</ul>

<p><strong><a name="components" class="title">Specialized Monitoring and Discovery Components</a></strong></p>

<p>
The Grid community has developed several specialized systems for system monitoring that are useful both as stand-alone mechanisms and as elements within the OGSA architecture.
</p>

<ul>
<li><strong><a href="trigger-service.php">Globus Trigger Service</a></strong> - A service that monitors WSRF resource properties and, when
preconfigured patterns are matched, triggers actions</li>
<li><strong><a href="ganglia.php">Ganglia Cluster Toolkit</a></strong> - A toolkit that specializes in collecting monitoring data from clusters and hierarchical aggregations of clusters</li>
<li><strong><a href="inca.php">Inca</a></strong> - A generic framework for automated testing, verification, and monitoring of service-level agreements</li>
<!-- <li><strong><a href="big-brother.php">Big Brother</a></strong> - A scripting framework for producing web-based system status displays</li> -->
<li><strong><a href='monalisa.php'>MonALISA</a></strong> - A distributed monitoring tool that features proxy services to enable use with firewalls and a wide variety of client interfaces including JINI and WAP</li>
<!-- <li><strong><a href='rgma.php'>R-GMA</a></strong> - An alternative to the Globus Index Service that uses RDBMS technology and emphasizes the GGF producer/consumer architecture</li> -->
</ul>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
