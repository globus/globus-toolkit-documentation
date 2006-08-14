<?php

// 2004-10-18, robinett: created, copied information from www.globus.org/gridware/security/voms.html

$title = "Grid Ecosystem - KX.509 and KCA";
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


<h1 class="first">KX.509 and KCA</h1>

<p>
Institutions that already have a Kerberos realm can use KX.509 and KCA to provide local users with Grid proxy certificates without operating a conventional Certificate Authority. When users authenticate with the Kerberos system, they obtain Grid proxy certificates in addition to their Kerberos tickets. These users can then use Grid tools and applications without an additional authentication procedure.
</p>

<p>
The KCA component is a Kerberized certification service. It issues proxy certificates based on a Kerberos authentication. The KX.509 component is a Kerberized client that generates and stores proxy certificates with help from KCA.
</p>

<p>
Unlike <a href="myproxy.php">MyProxy</a>, KX.509 and KCA create credentials for users, so remote sites must be configured to trust the local KCA service's certification authority.
</p>

<?
$software = "<a href='http://www.citi.umich.edu/projects/kerb_pki/'>KX.509 and KCA</a>";
$developer = "<a href='http://www.citi.umich.edu/'>Center for Information Technology Integration</a>,<br />The University of Michigan";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR7/AllItems.aspx'>NMI-R7</a><br />
            <a href='http://www.citi.umich.edu/projects/kerb_pki/'>Download from University of Michigan</a>";
$contact = "";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
