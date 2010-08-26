<?php

// 2004-10-18, robinett: created, copied information from www.globus.org/gridware/security/voms.html

$title = "Grid Ecosystem - VOMS";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">


<h1 class="first">VOMS: Virtual Organization Membership Service</h1>

<p>
<img border="0" src="VOMS-1.jpg" align="right" style="float: right; margin-left: 0.3em">
VOMS is a system for managing authorization data within multi-institutional collaborations. VOMS provides a database of user roles and capabilities and a set of tools for accessing and manipulating the database and using the database contents to generate Grid credentials for users when needed.
</p>

<p>
The VOMS database contains authorization data that defines specific capabilities and general roles for specific users. A suite of administrative tools allow administrators to assign roles to users and manipulate capability information. A command-line tool (voms-proxy-init) allows users to generate a local proxy credential based on the contents of the VOMS database. This credential includes the basic authentication information that standardGrid proxy credentials contain, but it also includes role and capability information from the VOMS server. Standard Grid applications can use the credential without using the VOMS data, whereas VOMS-aware applications can use the VOMS data to make authentication decisions regarding user requests.
</p>

<p>
VOMS allows distributed collaborations to centrally manage user roles and capabilities. The VOMS user credentials provide additional role and capability data to application service providers that can then be used to make more fully-informed authorization decisions.
</p>

<?
$software = "<a href='http://edg-wp2.web.cern.ch/edg-wp2/security/voms/voms.html'>VOMS</a>";
$developer = "<a href='http://eu-datagrid.web.cern.ch/eu-datagrid/'>European DataGrid Project</a>";
$distros = "Download from the <a href='http://edg-wp2.web.cern.ch/edg-wp2/security/voms/voms.html'>DataGrid Project</a>";
$contact = "<a href='mailto:sec-grid@infn.org'>sec-grid@infn.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
