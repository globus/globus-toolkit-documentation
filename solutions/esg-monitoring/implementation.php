<?php
$title = "Grid Solutions - ESG Monitoring System (Implementation Details)";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>

<div id="main">

<h1 class="first">ESG Monitoring System Implementation Details</h1>

<p>
The following is a high-level overview of how to set up a monitoring framework using MDS components:
</p>

<ol>
<li>Set up an Index Service and configure it to publish data from the tests
listed on the Globus Toolkit website:<br>
http://www-unix.globus.org/toolkit/docs/3.2/installation/install_config_index.html 
<li>Set up hierarchy (Index Services aggregating other Index Services.)
<li>Set up the Archive Service and subscribe to the correct Index Service. 
(link to directions coming soon)
<li>Configure the Trigger Service with conditions and action scripts for this service.
<li>Write Visualizers (ESG, Archive, Details, explained below), using XSL stylesheets to format and display the data.
<li>Set up the WSDB and install Visualizers using the instructions on the Globus Toolkit website:<br>
http://www-unix.globus.org/toolkit/docs/3.2/infosvcs/ws/developer/sbrowser.html
</ol>

<h2>Required Software</h2>

<ul>
<li>Globus Toolkit 3.2<br>
http://www-unix.globus.org/toolkit/downloads/
<li>the Archive Service package<br>
(coming soon)
<li>the Trigger Service package<br>
(coming soon)
<li>the Web Service Data Browser<br>
http://gtr.globus.org/article.php?story=20030723143444410
</ul>

<h2>ESG Implementation</h2>

<p>
The following details are specific to deploying the monitoring framework for ESG:
</p>

<ol>
<li>All components are installed on dc-user.isi.edu (CGT machines) using a single Index Service.
<li>Status of services is available on this web page:<br>
http://dc-user.isi.edu:40080/monitor.html  
<li>The Trigger Service sends an email when a broken service is detected.
<li>The following data is captured:
<ol>
<li>Status (whether the server is up or down)
<li>Percentage of uptime
<li>Time when the service was last seen alive
<li>Time when the service failed
</ol>
</ol>

<h2>Intended Future Implementation</h2>

<ul>
<li>Displaying archived data in more interesting and meaningful ways
<li>Deploying the system on a production ESG node
<li>Extending the scope of monitoring to cover other services such as SRM and GridFTP
</ul>


</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
