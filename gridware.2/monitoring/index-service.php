<?php

$title = "Grid Ecosystem: Monitoring and Discovery - Globus Index Service";
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

<h1 class="first">Globus Index Service</h1>

<p>
The Globus Index Service is a component of the Globus Toolkit. It is an OGSA-compliant Web service that
serves as a collection point for status information from other OGSA Web services.
</p>

<p>
The Globus Index service creates and manages dynamic service data via Service Data Provider programs. 
This provides a point of inquiry regarding the characteristics of a physical system in a Grid.
</p>

<p> 
The Index Service also aggregates status information from other Grid services, providing a "collection point"
for information from many services in a Grid that allows clients or agents to "discover" services
that come and go dynamically on the Grid.
</p>

<p>
The Index Service also registers Grid service instances using the OGSI ServiceGroup port type.
</p>

<?
$software = "<a href='http://www.globus.org/toolkit/'>Globus Index Service</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www.globus.org/toolkit/'>Globus Toolkit 3.2</a><br /><a href='http://www.nsf-middleware.org/NMIR5/'>NMI-R5</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p style="clear: left;"><a href="../monitoring-components.php"><< Components for Grid Monitoring and Discovery</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
