<?php
$title = "Grid Solutions - ESG Monitoring System (Architecture)";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>

<div id="main">

<h1 class="first">ESG Monitoring System Architecture</h1>

<p>
The ESG monitoring system was constructed by integrating four MDS components--Index 
Service, Web Service Data Browser, Archive Service, and Trigger Service--with 
ESG-specific information providers and action scripts, as illustrated in the 
following figure:
</p>
	
<p>
Figure 1: MDS components in the monitoring framework
</p>

<h2>Index Service</h2>

<p>
The MDS3 Index Service obtains and caches information about other services, 
and allows clients to query and/or subscribe to that data. The Index Service 
collects service data from various resources, which it publishes as one big 
piece of service data. Other services can query for service data elements or 
subscribe to be notified when they change. Multiple indexes can be used to 
obtain scalability to large numbers of services and to configure the system 
so that it can tolerate failures (i.e. have multiple collectors of data.)
</p>

<p>
The ESG monitoring system uses the Index Service to collect and publish 
information about the current status of ESG services.
</p>

<h2>Information Providers</h2>

<p>
In MDS3, Information Providers (also referred to in GT3 as Service Data 
Providers) gather and generate data for use by Grid service instances.  The 
data is generated in the form of XML objects, which become the value of a 
Service Data Element (SDE) emitted as either a Java output stream or a 
memory-bound Java DOM (Document Object Model) representation.
</p>

<p>
The ESG monitoring system uses information providers to run a query against 
a service and, depending on the results, judge whether it's up or down. 
These are very simple shell scripts that can be written by system administrators 
and do not involve any configuration. They run periodically on the same machine 
as the Index Service, wrap the results of these tests in XML, and then publish 
the resulting XML in the Index Service as service data.
</p>

<h2>Archive Service</h2>

<p>
The new Archive Service is designed to store and allow time-based queries on 
Index Service data. The ESG monitoring system uses the Archive Service to 
enable historical queries about component behavior.
</p>

<h2>Web Service Data Browser</h2>

<p>
The Web Service Data Browser (WebSDB) is a customizable display client for 
service data exposed by grid services. In the ESG monitoring system, the WSDB 
is used to allow users to query both the Index Service and the Archive Service 
(see below) to determine the current and past status, respectively, of ESG 
components.
</p>

<h2>Trigger Service</h2>

<p>
The Trigger Service provides functionality such as an email gateway to let 
system administrators know when services fail (the email IDs of the recepients 
are generated when the XSLT is performed.) An action script may be a simple 
shell script or a wrapper around other applications such as a grid service 
clients or mail clients. It is configured with a set of Xpath conditions and, 
for each condition, an action to be performed when the condition is satisfied 
plus an optional XSLT stylesheet. The following briefly describes the process:
</p>

<ol>
<li>The Trigger Service subscribes to the Index Service. 
<li>Each time a notification is received, the Trigger Service checks each 
    Xpath condition against the service data in the email.
<li>If any condition is met, the Trigger Service runs a specified action 
    script, with the product of the XLST transformation applied to the matching 
    XML.
</ol>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
