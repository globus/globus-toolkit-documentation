<?php

$title = "Grid Ecosystem: Monitoring and Discovery - WS Core Monitoring Features";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">


<h1 class="first">WS Core Monitoring Features</h1>

<p>
The Globus Toolkit contains Java, C/C++, and Python implementations of the OGSI (GT 3.x) and WSRF/WSN (GT 4.x) specifications, each of which is
called "WS Core".  Each WS Core implementation allows software developers to create Web services that provide OGSA
features in addition to any other capabilities they offer.  The Service Data feature of OGSI and the Resource 
Properties and notification features of WSRF/WSN provide a basis for monitoring and discovering Grid services.
</p>

<p>
WS Core provides a uniform interface for obtaining status and configuration information from Web services. 
Service developers determine what information should be available from their service and how
the associated information is provided via these interfaces.  WS Core also provides a subscription and 
notification capability that allows clients to "subscribe" to information available from Web services and 
be notified when any of the associated information changes.
</p>

<p>
Together, these uniform inquiry and subscription/notification features provide the basis for powerful system and 
application monitoring capabilities.
</p>


<?
$software = "<a href='http://www.globus.org/toolkit/'>WS Core</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www.globus.org/toolkit/'>Globus Toolkit 3.2</a><br />
            <a href='http://collab.nsf-middleware.org/Lists/NMIR6/AllItems.aspx'>NMI-R6</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
