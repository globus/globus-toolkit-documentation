<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 80

$title = "Globus: Grid Software - Striped GridFTP";
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
The Striped GridFTP Service is a distributed GridFTP service that runs on a storage cluster. Every node of the cluser is used to transfer data into/out of the cluster while the head node coordinates transfers. Multiple NICs/internal busses lead to very high performance, maximizing the use of Gbit+ WANs.
</p>

<?
$software = "Striped GridFTP";
$developer = "The Globus Alliance";
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