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

<h1 class="first">Lightweight Data Replicator System Architecture</h1>

<p>
<b>NOTE:</b> The design description below was copied verbatim from the 
<a href="http://www.lsc-group.phys.uwm.edu/LDR/design.html">Lightweight Data Replicator (LDR)</a>
website. It was written by the LDR developers.
</p>

<h2>High level design thoughts</h2>

<p>
A <i>DataGrid</i> is a set of geographically distributed sites,
institutions, or groups with each site offering Grid Services, and
where the set of sites has some collective need to share, distribute,
and replicate large sets
of data, files, or data files (if you prefer). LDR is designed to 
replicate data among the sites in a DataGrid.
</p>

<p>
The LDR installation at each site takes on any combintation of three
different roles. The roles are that of <i>publisher</i>,
<i>provider</i>, and <i>subscriber</i>. A LDR installation acting
as a publisher introduces into the DataGrid information 
about available files and where they are located
(via URLs), as well as information about the files themselves
(so-called metadata such as the creation time or size).
A LDR installation acting as a provider makes files available for
replication to other sites. A LDR installation acting as
a subscriber replicates data from a provider to itself.
</p>

<p>A DataGrid must have at least one LDR
installation acting as a publisher, at least one acting as a provider,
and at least one acting as a subscriber. Again, any single LDR
installation can be any combination of publisher, provider, and
subscriber.
</p>

<p>
LDR is designed to maximize the quantity of data replicated at the
expense of the reliability of any single file being transfered. Put
another way, LDR tries to replicate as much data as it can without
regard to the order in which files are replicated or the success of
any single file transfer. LDR is designed for bulk replication of
data, as opposed to replicating smaller sets of files 
for just-in-time computing.


<h2>Mid level design thoughts</h2>

<p>
Replicating data within a DataGrid requires...
<ul>
<li>...a mechanism for keeping track of what data exists within the
DataGrid. 

<p>
LDR uses
a metadata database to store information about what files exist
and information about the files such as size or creation time.
Metadata information itself is replicated from LDR instance to LDR
instance so that all sites in the DataGrid can be aware of what data
might be replicated.

<li>...a mechanism for keeping track of where data is. 

<p>
LDR uses
the Globus Replica Location Server (RLS) to store information about
what files are located where. Each RLS has two parts. The first is a
Local Replica Catalog (LRC) to store information about what data
exists locally. The second is a Replica Location Index (RLI) to store
information about what LRCs exists within the DataGrid and what files
each LRC knows about locally.

<li>...a mechanism for determining what files need to replicated from one
location to another.

<p>
A LDR administrator defines <i>collections</i> of desired files by 
SQL queries to be performed within the LDR metadata database. 

<li>...a mechanism for scheduling files to be replicated.

<p>
LDR uses a simple priority queue for scheduling.
The source locations are
determined by querying the local RLI to determine a LRC within the
DataGrid that knows about a file, and then directly querying the
remote LRC to determine the URL for the source.
If for some reason the state of
the queue is lost or becomes corrupt it is not a problem since LDR
regularily regenerates the queue based on need lists and the current
state of the LRCs and RLIs.

<li>...a mechanism for actually replicating files.

<p>
LDR uses the GridFTP protocol for transfer of files across a WAN. LDR
attempts to transfer as many files as possible between two sites and
can simultaneously transfer data between multiple sites at the same
time. Failed transfers are not instantly retried, but rather LDR moves
on to the next transfer. Files that do not transfer successfully
simply end up being rescheduled and another attempt made later.

<li>...a mechanism for storing replicated files.

<p>
LDR assumes a very general model for "storage". The details of any
particular storage system can be coded and made available to LDR via
a very simple API. A "storage" model is only required to accept a file
for ingestion and return a URL for the ingested file which is published
to the local LRC. The details of how the file is ingested or the URL
generated are not needed by LDR. 

</ul>

<h2>Low level design thoughts</h2>

<p>
A LDRMaster daemon is responsible for launching other necessary LDR
daemons and watching over them. The available (not all daemons are
necessary for every LDR installation)
daemons include
<ul>
<li><i>LDRMetadataServer</i>, a GSI-SOAP server that makes
metadata published at a site available to other LDR instances.
<li><i>LDRMetadataUpdate</i>, a GSI-SOAP client that updates
a LDR instance with new metadata as it is published at a
remote LDR site.
<li><i>LDRSchedule</i>, which schedules (queues) transfers.
<li><i>LDRTransfer</i>, which spawns agents for each source site to 
replicate or transfer files from source locations.
<li><i>LDRdataFindServer</i>, which allows clients to query
the metadata and replica location catalogs to discover data or
files
</ul>

<p>
Each daemon is independent of any other (apart from LDRMaster), and
each can be stopped and restarted without any need to coordinate.
</p>


</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
