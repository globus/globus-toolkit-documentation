<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 81

$title = "Grid Ecosystem - Replica Location Service (RLS)";
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

<h1 class="first">Replica Location Service (RLS)</h1>

<p>
The Replica Location Service (RLS) provides a framework for tracking the physical locations of data
that has been replicated. At its simplest, RLS maps logical names (which don't include specific
pathnames or storage system information) to physical names (which do include storage system addresses
and specific pathnames).
</p>

<p>
Replication of data items can reduce access latency, improve data locality, and increase robustness, 
scalability and performance for distributed applications.  An RLS typically does not operate in isolation, 
but functions as one component of a data grid architecture. RLS is intended to be used in conjunction with
other components like the <a href="rft.php">Reliable File Transfer</a> service, <a href="gridftp.php">GridFTP</a>, 
the <a href="mcs.php">Metadata Catalog Service</a>, and reliable replication and workflow management services.
</p>

<p>
The current RLS implementation has the following features.
</p>

<ul>
<li>Local Replica Catalogs (LRCs) maintain mappings between logical file names and any associated physical file names on the local storage system(s). LRCs support strong consistency requirements.</li>

<li>Replica Location Indices (RLIs) provide indices of the contents of several LRCs with relaxed consistency requirements. 
Each RLI contains a set of mappings from logical file names to LRCs. A variety of index structures can be defined with 
different performance characteristics by varying the number of RLIs and the amount of redundancy and partitioning among them.</li>

<li>LRCs send information about their state to RLIs using soft state protocols. State information in the RLIs times out and must be periodically refreshed by soft state updates. </li>

<li>Optional "Bloom Filter" compression can be employed to summarize the contents of the LRC before sending a soft state 
update to one or more RLIs. </li>

<li>The current RLS implementation maintains static information about the LRCs and RLIs participating in the distributed system. As new implementations of the RLS are developed, they will use OGSA mechanisms for registration of services and for service lifetime management.</li>
</ul>

<p>
RLS was developed by the Globus Alliance and the DataGrid Project.  It replaces earlier components in the 
Globus Toolkit 2.x.
</p>

<?
$software = "<a href='http://www-unix.globus.org/toolkit/docs/3.2/rls/'>RLS</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a> and the 
<a href='http://www.eu-datagrid.org/'>DataGrid Project</a>";
$distros = "<a href='http://www-unix.globus.org/toolkit/'>Globus Toolkit 3.2</a><br />
            <a href='http://www.nsf-middleware.org/NMIR5/'>NMI-R5</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
