<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 80

$title = "Grid Ecosystem - Striped GridFTP";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../data-components.php"><< Components for Grid Data Management</a></p>

<h1 class="first">Striped GridFTP Service</h1>

<p>
<img src='STRIPEDFTP-1.png' alt='Striped GridFTP' style='float: right; margin-left: 0.3em;' />
The Striped GridFTP Service is a distributed GridFTP service that runs on a storage cluster. 
Every node of the cluser (or combinations of nodes) can be used to transfer data into/out of 
the cluster while one or more head nodes coordinate transfers.
</p>

<p>
When multiple nodes (each with its own NIC and internal bus) are used for a transfer, the resulting
transfer can maximize the use of Gbit+ WANs. Transfer rates of up to 80% of theoretical capacity 
have been measured on 30 Gbps cross-country links.
</p>

<?
$software = "Striped GridFTP";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "Software can be made available upon request";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
