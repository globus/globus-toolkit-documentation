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


<h2>Software and Service Deployment</h2>

<p>The deployment for the TeraGrid Copy (TGCP) solution involved installing 
GridFTP services at each site, installing the RFT service, and installing the 
client tools (globus-url-copy, RFT client, and tgcp script) on each system 
that users log in to or run jobs on.</p>

<h3>GridFTP Services</h3>

<p>In general, TeraGrid sites that provide data services are expected to have at 
least one GridFTP 
service that provides access to the data systems available at that site. Compute 
systems are also expected to have a GridFTP service that can move files into or 
out of the system. For a site that has more than one storage system, more than 
one compute system, or some of both, the site can choose how to provide GridFTP
access to those systems, so long as each system is covered in some way. Local
(unshared) filesystems on compute nodes or other systems generally do not have 
GridFTP services providing remote access to them; in these cases, a local GridFTP
client must be used to move data to or from the filesystems.</p>

<p>Different TeraGrid sites have chosen different ways to provide GridFTP access to 
their shared filesystems. At the Argonne National Laboratory site, for example,
<span class="comment">[...]</span></p>

<h3>RFT Service</h3>

<p>Each site that intends to let users move data to/from their storage system using
TGCP must provide a GridFTP service that can access their storage systems. The RFT
service is quite different, in that only one RFT service is needed to enable TGCP 
users across the entire TeraGrid. As long as an RFT service is accessible anywhere
on the network and the RFT service has access to the GridFTP services at each site,
the tgcp client tool will be able to use the RFT service to manage transfers.</p>

<p>At the time of this writing, TeraGrid had one RFT service deployed at one 
TeraGrid site. The tgcp client tool deployed at every site was configured to use
this RFT service to manage transfers where the user requested RFT support.</p>

<p>It is very likely that more TeraGrid sites will deploy RFT servers locally and
change their tgcp configruation files to use the local RFT service rather than a
centralized one. This will improve performance slightly (perhaps not noticably),
but more importantly it will eliminate dependency on a single site's RFT service
for all tgcp users. If one site's RFT service fails, only users at
that site will have difficulty using the RFT capability in tgcp.</p>

<p>A further step toward robustness, not yet in TeraGrid's plan, would be to use
one or more 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."monitoring/index-service.php"; ?>">index services</a> 
to register available RFT services so that 
the tgcp script could query the index service to locate an available RFT service 
rather than depending
on a static configuration file. This would allow
system administrators to add and remove RFT services without disrupting tgcp
users anywhere. As long as one RFT server is registered with one index service that
tgcp knows about, tgcp will be able to work everywhere. Redundant index services
would provide an additional layer of availablity and robustness.</p>

<h3>Client Tools</h3>

<p><span class="comment">[add a bit about where client tools are installed]</span></p>

<h2>Configuration Issues</h2>

<h3>GridFTP Service Configuration Issues</h3>

<p>The number of striped GridFTP server nodes required to fully use the 10-30 Gb/s 
network for transfers depends on the bandwidth of the network links used on the 
nodes and the performance of the nodes themselves (processor, disk I/O, and competing 
use). For example, one node with a 1 Gb/s network interface card may not be able 
to use a full Gb/s of network bandwidth because of limitations in its disk I/O 
performance.</p>

<p><span class="comment">[argonne's configuration]</span></p>

<h3>TGCP Client Configuration Issues</h3>

<p><span class="comment">[add info on how we fill out the tgcp translation & 
bandwidth product files]</span></p>

</div>

<? include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
