<?php
$title = "Grid Solutions - The TeraGrid Copy Solution (Architecture)";
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

<h1 class="first">TeraGrid Copy Architecture</h1>

<p>The architecture for the TeraGrid Copy (TGCP) solution includes three main
   components: the 
   <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/gridftp.php"; ?>">GridFTP service</a>
   (which can be configured in either striped or non-striped configurations), the 
   <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/rft.php"; ?>">RFT service</a>, 
   and the tgcp shell script.  The tgcp script uses the 
   <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/globus-url-copy.php"; ?>">globus-url-copy</a>
   and RFT client tools. (See the <a href="resources.php">Resources</a> section 
   for details on availability of each of these components.</p>

<h2>Striped GridFTP Servers</h2>

<p>In order to fully utilize TeraGrid's high-bandwidth network connections,
   TGCP uses the striped configuration of the 
   <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/gridftp.php"; ?>">Globus 
   Toolkit 4.0 GridFTP service</a>.
   In this configuration, the GridFTP service runs on several nodes of a 
   cluster and the data to be transfered is partitioned among the nodes, each
   node using its network interface to transfer its part of the data. This 
   configuration is illustrated in Figure 1. Note that each node may use several
   parallel streams in order to attain the maximum performance of its own 
   connection to the wide area network.</p>

<table>
<tr>
<td><img src="striping-fig.gif" width=300 height=201></td>
<td>Figure 1. The GridFTP server in striped configuration uses multiple nodes
to fully utilize the network for individual transfers.</td>
</tr>
</table>

<h2>The tgcp Shell Script and globus-url-copy Command</h2>

<p>The tgcp shell script provides the user interface for the TGCP solution.
   This shell script first uses a set of configuration files to determine the
   best strategy for performing the requested transfer, and then invokes
   either the GridFTP client tool 
   (<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/globus-url-copy.php"; ?>">globus-url-copy</a>) 
   or the RFT client tool.</p>

<p>The tgcp shell script uses two configuration files to translate the user's
   simple specification of source and destination into potentially complicated
   data movement requests. The first configuration file is a set of translation
   rules that translate the source and destination specifications into service
   instances and paths that are known to those services. During this translation,
   the hostname may be changed to use a "designated transfer service" for the
   host that was originally specified (or the local system). A port number may
   also be substituted. The
   second configuration file is a set of network parameters that are used to
   optimize the TCP buffer size based on where the source and destination are
   on the network. Both of these configuration files are managed by the 
   administrator of the system where tgcp is executed, but TeraGrid maintains a
   repository of rules and network properties to guide adminstrators in their
   configurations.</p>

<p>When the tgcp command is invoked without the "-rft" option, one of two
   methods is selected.  These two methods are illustrated in Figure 2. 
   In method A, the tgcp translation rules result in
   both source and destination endpoints being on systems other than the local
   system. In this
   case, tgcp invokes globus-url-copy and uses a "third-party transfer" request
   to initiate a transfer directly from the source GridFTP service to the 
   destination GridFTP service. The TCP buffer size and parallelism
   will be set appropriately based on the tgcp configuration file.
   The transfer may employ striping on either or both servers depending on the
   tgcp translation rules and user preference.</p>

<table>
<tr>
<td><img src="no-rft-fig.gif" width=225 height=270></td>
<td>Figure 2. The tgcp script can use the globus-url-copy tool in either 
third-party transfer mode (A) or in conventional GridFTP client mode (B).</td>
</tr>
</table>

<p> In method B, the tgcp translation rules result in either the source or the
   destination being in a local filesystem.  In this case, tgcp will invoke 
   globus-url-copy and transfer the file directly to or from the
   other system's GridFTP server. The appropriate TCP buffer size will be
   used and parallel streams may be used to optimize network performance based
   on the contents of the tgcp configuration file and the location of the source 
   and destination endpoints.</p>

<h2>The Reliable File Transfer (RFT) Service</h2>

<p>When the tgcp command is invoked with the "-rft" option, the 
   <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/rft.php"; ?>">RFT service</a>
   will be used to manage the transfer. This adds additional reliability to the
   transfer request and ensures that the transfer completes eventually, even if
   multiple system components fail during the transfer.  This is illustrated in 
   Figure 3.</p>

<table>
<tr>
<td><img src="rft-fig.gif" width=275 height=180></td>
<td>Figure 3. The RFT service manages third-party transfers and recovers from
system failures using a persistent database to keep track of requests and
transfer status.</td>
</tr>
</table>

<p>The RFT service manages a queue of transfer requests and several ongoing requests.
   The queue and the status of each ongoing transfer is stored in a persistent 
   database. If a transfer fails due to GridFTP server failure, the RFT service
   will restart it when the servers are fixed. If the RFT service itself fails, 
   the database is used to recover transfer request information and complete the 
   transfers when the service is restarted.</p>

<h2>A Note on Security</h2>

<p>The RFT service uses the Grid Security Infrastructure (GSI) <i>delegation</i>
capability to authenticate GridFTP transfer requests on behalf of the user. When
the GridFTP service receives a transfer request from the RFT service, that request 
is authenticated using the user's credentials.  The GridFTP service can therefore 
make appropriate authorization decisions exactly as if the user had connected 
directly to the service rather than going through the RFT service.</p>

<p>The exact authentication
process works as follows.  The RFT client tool uses the user's Grid proxy certificate 
to authenticate to the RFT service.  During this authentication, the RFT service 
requests a <i>delegated user proxy</i>.  This proxy is essentially the same as the
user's original proxy, but it is available to the RFT service for use on the user's
behalf.  The RFT service uses the delegated user proxy to authenticate to the GridFTP 
services involved in the transfer. From the GridFTP service's perspective, the
delegated user proxy is essentially the same as the user's original proxy, so it
treats the RFT service's request as it would treat a direct request from the user..</p>

</div>

<? include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
