<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 82

$title = "Globus: Grid Software - NeST";
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
NeST is a grid-optimized storage appliance with multiprotocol (pluggable) access mechanisms and a pluggable (flexible) storage system layer. NeST supports reservations and issues ClassAds for use with Condor matchmaking. It can also manage groups. NeST has an easy, "no futz" installation and can be run at user level.
</p>

<p>
NeST supports the creation of I/O communities, allowing the combination of the jobs-to-date and data-to-jobs strategies. It works very well with Condor and Condor applications. Users can build their own NeSTs.
</p>

<p align='center'><img src='NEST-1.png' alt='NeST' /></p>

<?
$software = "<a href='http://www.cs.wisc.edu/condor/nest/'>NeST</a>";
$developer = "The Condor Project";
$distros = "Download from the Condor Project";
$contact = "<a href='mailto:nest-discuss@cs.wisc.edu'>nest-discuss@cs.wisc.edu</a><br />(must be <a href='http://lists.cs.wisc.edu/mailman/listinfo/nest-discuss'>subscribed</a> before posting)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>