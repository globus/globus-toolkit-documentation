<?php
$title = "Grid Solutions - Data Replication for LIGO (Architecture)";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">Constructing the Lightweight Data Replicator</h1>

<p>A Data Grid is a set of geographically distributed sites, institutions, or groups that have a common need to store and access specific data items. In order to provide reasonable performance to users, the Data Grid may need to replicate data items at several sites. LDR's purpose is to make it easy for Data Grid administrators to manage replicas, the replication process, and access mechanisms within a Data Grid.</p>

<p>Each site in an LDR-based Data Grid takes on a combination of three different roles: publisher, provider, and subscriber. A site acting as a publisher provides information about available files and where they are located (via URLs), as well as information about the files themselves (metadata such as the creation time, size, and contents). A site acting as a provider provides files that can be accessed by users and replicated at other sites. A site acting as a subscriber maintains replicas of data obtained from a provider. A Data Grid must have at least one site acting as a publisher, at least one acting as a provider, and at least one acting as a subscriber. Again, an individual site can serve as any combination of publisher, provider, or subscriber.</p>

<p>LDR uses a metadata database to store information about what files exist and information about the files such as size or creation time. Metadata is replicated across sites so that all sites in the Data Grid are aware of all available data. Using metadata queries, Data Grid administrators define collections of files to be replicated.</p>

<p>LDR assumes a very general model for "storage." The details of any particular storage system can be coded and made available to LDR via a very simple API. The "storage system" must be able to accept a file for ingestion and return a URL for the ingested file. This URL is then published in the local LRC. LDR does not need to know the details of how the file is ingested or how the URL is generated. </p>

<p>LDR uses the Globus Replica Location Service (RLS) to store information about what files are located where. RLS is itself a distributed system: each site runs a Local Replica Catalog (LRC) to store information about the data maintained at the local site and a Replica Location Index (RLI) that aggregates information from all of the sites. Hence, each site has both a local and a global view of the data.</p>

<p>LDR uses a simple priority queue for scheduling data transfers. The local RLI is used to identify a site that has a source file, and the LRC at that site is then queried to obtain the URL of the file. LDR regularly refreshes the queue based on need lists and the current state of the LRCs and RLIs.</p>

<p>LDR is designed to maximize the quantity of data replicated at the expense of the reliability of any single file being transferred. Put another way, LDR tries to replicate as much data as it can without regard to the success of any single file transfer. LDR is designed for bulk replication of data, as opposed to replicating smaller sets of files for just-in-time computing.</p>

<p>LDR uses the GridFTP protocol to transfer data between sites. LDR attempts to transfer as many files as possible between two sites and can simultaneously transfer data between multiple sites at the same time. Failed transfers are not instantly retried. Instead, LDR moves on to the next transfer. Files that do not transfer successfully are simply rescheduled until the transfer completes successfully.</p>

<p>The components described above are all reusable "middleware" available in open source form for use in many systems and applications. The following components, which form the coordination subsystem for LDR, are specific to LDR. They are written in Python and are implemented as server "daemons" that run at LDR sites. Different daemons will run at different sites; the daemons that run at a particular site are determined by the roles that site plays in the Data Grid (publisher, provider, subscriber).</p>

<p>An LDRMaster daemon is responsible for launching other necessary LDR daemons and watching over them. The rest of the daemons are as follows.</p>

<ul>
<li>LDRMetadataServer, a GSI-SOAP server that makes metadata published at a site available to other LDR instances</li>
<li>LDRMetadataUpdate, a GSI-SOAP client that updates a LDR instance with new metadata as it is published at a remote LDR site</li>
<li>LDRSchedule, which schedules (queues) transfers</li>
<li>LDRTransfer, which spawns agents for each source site to replicate or transfer files from source locations</li>
<li>LDRdataFindServer, which allows clients to query the metadata and replica location catalogs to discover data or files</li>
</ul>

<p>Each daemon is independent of the others, and each can be stopped and restarted without needing to coordinate with other daemons.</p>


</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
