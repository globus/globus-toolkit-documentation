<?php
$title = "Grid Ecosystem - Striped GridFTP";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>

<div id="main">

<h1 class="first">Striped GridFTP Service</h1>

<p>
<img src='STRIPEDFTP-1.png' alt='Striped GridFTP' style='float: right; margin-left: 0.3em;' />
Wide area networks (WANs) that provide 10+ Gb/s capacities are becoming more common in scientific
and commercial enterprises.  Even with Gb/s network interface cards, it is challenging to
utilize the full capacity of these networks for transfering data. Nevertheless, some
collaborative projects require such efficiency due to the size of data to be transfered (sometimes
reaching the petabyte scale). To fully utilize the network capacity in these scenarios requires
harnessing multiple network interface cards, multiple disk drives, and multiple internal busses.
</p>

<p>A Striped GridFTP Service is a 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/gridftp.php"; ?>">GridFTP server</a> that is 
configured to run in a distributed fashion on a storage cluster.  (The GridFTP server in the Globus
Toolkit 3.9 and later versions supports this capability.) Every node of the cluster can be 
used to transfer data into/out of the cluster while one or more "head nodes" coordinate the transfer.
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

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
