<?php

$title = "Grid Ecosystem: Monitoring and Discovery - Globus Trigger Service";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../monitoring-components.php"><< Components for Grid Monitoring and Discovery</a></p>

<h1 class="first">Globus Trigger Service</h1>

<p>
The Globus Trigger Service uses basic OGSA service monitoring capabilities to take actions when
specific system conditions occur.  This can be used to construct email notifications that let system 
administrators know when services fail.
</p>

<p>
The Trigger Service subscribes to an 
<a href="index-service.php">Index Service</a> or another source of 
<a href="ws-core.php">OGSI or WSRF monitoring information</a>.
The Trigger Service is configured with a set of Xpath
conditions and, for each contition, an action script that should be run when the condition is
satisfied, plus an optional XSLT stylesheet.  Each time a notification is received, the Trigger 
Service checks each Xpath condition against the notification data.  If any of the Xpath conditions 
are is met, the Trigger Service runs the corresponding action scripts with the product of the 
XLST transformation applied to the matching XML.
</p>

<p>
An action script can be a simple shell script or a wrapper around other applications such as 
a grid service client or email client.
</p>

<?
$software = "<a href='http://www-unix.globus.org/toolkit/docs/development/3.9.4/info/trigger/'>Globus Trigger Service</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www-unix.globus.org/toolkit/'>Globus Toolkit 3.9 (and 4.0)</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p style="clear: left;"><a href="../monitoring-components.php"><< Components for Grid Monitoring and Discovery</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
