<?php
$title = "Grid Solutions - The TeraGrid Copy Solution (Deployment Details)";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">TeraGrid Copy Deployment</h1>

<p>TeraGrid currently includes nine resource provider sites, each of which provides
computation and data capabilities as well as other specialized capabilities. Each
site is administered by local system administrators, and the systems provided by the
sites are often shared with other infrastructure and application projects.</p>

<p>The deployment for the TeraGrid Copy (TGCP) solution involved installing 
GridFTP services at each site and enabling the striped configuration, installing
the RFT service, and installing the client tools (globus-url-copy, RFT client, and
tgcp script) on each system that users log in to or run jobs on.</p>

<p>The number of striped GridFTP server nodes required to fully use the 10-30 Gb/s 
network for transfers depends on the bandwidth of the network links used on the 
nodes and the performance of the nodes themselves (processor and disk I/O). For 
example, one node with a 10 Gb/s network interface card may not be able to use 10 
Gb/s of network bandwidth because of limitations in its disk I/O performance.</p>

</div>

<? include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
