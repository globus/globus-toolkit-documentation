<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 64

$title = "Globus: Grid Software - GRAM";
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

<h1 class="first">GRAM - Basic Job Submission and Control Service</h1>

<p>
GRAM is a uniform service interface for remote job submission and control. It included file staging, I/O manangement, and various reliability features. GRAM supports basic Grid security mechanisms and is available in both Pre-WS and WS "flavors."
</p>

<p>
It is important to understand that GRAM is <em>not</em> a scheduler. There is no scheduling or metascheduling/brokering. In fact, it is often used as a front-end to schedulers or to simplify metaschedulers/brokers.
</p>

<?
$software = "<a href='http://www-unix.globus.org/toolkit/docs/3.2/gram/'>GRAM</a>";
$developer = "The Globus Alliance";
$distros = "Globus Toolkit 3.2<br />NMI-R5";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../computation-components.php"><< Components for Grid Computation</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>