<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 90

$title = "Grid Ecosystem - NSF Middleware Initiative (NMI)";
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


<h1 class="first">NSF Middleware Initiative (NMI)</h1>

<p>Please note, the NMI has since been closed. We're keeping this information for historical purposes.</p>

<p>
The National Science Foundation's NMI program aims to develop, improve, and deploy a suite of reusable software
components for use in national-scale "cyberinfrastructure" (aka "e-Science" or distributed collaboration) projects.
An important element of this mission is the production of a software distribution that contains all of the NMI
components produced to date and others that have proven useful in science projects.  This software distribution,
also known as "NMI", includes many of the components in the Grid Ecosystem described on this website.  
</p>

<p>
The NMI distributions provide binary (precompiled) distributions for popular platforms.  Software that is included
in the NMI distributions also benefits from the NMI program's efforts to improve software testing, documentation, 
and technical support.
</p>

<p>
Recent NMI distributions have included the following components and others: APST, Condor, CPM, DataCutter, 
DataCutter STORM, Globus Toolkit, GPT, Gridconfig, GridPort, GridSolve, GSI OpenSSH, Inca, KX.509/KCA, Look, 
MPICH-G2, MyProxy, Network Weather Service, OpenSAML, PERMIS, PyGlobus, Shibboleth, SRB Client, UberFTP, 
and WebISO (Web Initial Sign-on).
</p>
<!--
<?
$software = "<a href='http://www.nsf-middleware.org'>NMI</a>";
$developer = "<a href='http://www.nsf-middleware.org/'>NSF Middleware Initiative</a>";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR7/AllItems.aspx'>NMI-R7</a>";
$contact = "<a href='mailto:support@grids-center.org'>support@grids-center.org</a>";

app_info($software, $developer, $distros, $contact);

?>
-->
<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
