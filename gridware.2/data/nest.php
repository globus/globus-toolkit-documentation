<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 82

$title = "Grid Ecosystem - NeST";
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

<h1 class="first">NeST</h1>

<p>
NeST is a Grid-optimized storage appliance with multiprotocol (pluggable) access mechanisms and a 
pluggable storage system layer. NeST supports reservations and issues ClassAds for use with 
<a href="../computation/condor.php">Condor</a> matchmaking. It also supports group-basd access
control mechanisms. NeST has an easy, "no futz" installation and can be run by unpriviledged 
users.
</p>

<p>
NeST supports the creation of "I/O communities," allowing applications to combine the benefits of moving
jobs to where the data is located and moving data to where jobs are running.  NeST is integrated with 
Condor and Condor applications. NeST services can be built by individual users for providing access to 
data on loca systems, or NeST services can be started up when jobs are run on remote system to provide 
access to data on the system for sharing with related jobs.
</p>

<p align='center'><img src='NEST-1.png' alt='NeST' /></p>

<?
$software = "<a href='http://www.cs.wisc.edu/condor/nest/'>NeST</a>";
$developer = "<a href='http://www.cs.wisc.edu/condor/'>The Condor Project</a>";
$distros = "Download from <a href='http://www.cs.wisc.edu/condor/'>the Condor Project</a>";
$contact = "<a href='mailto:nest-discuss@cs.wisc.edu'>nest-discuss@cs.wisc.edu</a><br />(must be <a href='http://lists.cs.wisc.edu/mailman/listinfo/nest-discuss'>subscribed</a> before posting)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
