<?php

// 2004-10-18, robinett: created, copied information from www.globus.org/gridware/security/voms.html

$title = "Grid Ecosystem - Pre-Web Services Authentication and Authorization";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../security-components.php"><< Components for Grid Security</a></p>

<h1 class="first">Pre-Web Services Authentication and Authorization</h1>

<p>
The Globus Toolkit's Pre-Web Services Authentication and Authorization component contains libraries and tools supporting authentication and authorization for non-Web services components. This includes support for various authorization modes, such as host, self, identity, gridmap and custom, as well as a SSL-based GSS-API implementation for authentication and delegation of rights.
</p>

<p>
This component provides the basis for the security capabilities in all pre-Web Services components of the Globus Toolkit, and many other non-Web Services components in the Grid community.
</p>

<p>
Prior to the Globus Toolkit 3.0, this component was the primary implementation of the Grid Security Infrastructure (GSI). The Web services components in the Globus Toolkit 3.0 and later versions added another (Web services-based) implementation of the GSI.
</p>

<?
$software = "<a href='http://www-unix.globus.org/toolkit/docs/3.2/gsi/index.html'>Pre-Web Services Authentication and Authorization</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www-unix.globus.org/toolkit/'>Globus Toolkiit 3.2</a><br />
            <a href='http://collab.nsf-middleware.org/Lists/NMIR6/AllItems.aspx'>NMI-R6</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../security-components.php"><< Components for Grid Security</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
