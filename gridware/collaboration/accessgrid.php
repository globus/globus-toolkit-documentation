<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 86

$title = "Grid Ecosystem - Access Grid";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../collaboration-components.php"><< Components for Grid Collaboration</a></p>

<h1 class="first">Access Grid</h1>

<img src='ACCESSGRID-1.jpg' alt='Access Grid Image 1' style='float: right; margin-left: 0.3em;' />
<img src='ACCESSGRID-2.jpg' alt='Access Grid Image 2' style='float: right; margin-left: 0.3em;' />

<p>
The Access Grid provides seamless virtual collaboration spaces for teams that are not co-located. 
Immersive audio (sounds like "everyone is here") and multiple multicast video streams 
("everyone sees everyone") are used to create a compelling experience of virtual co-location. 
Other video sources (including shared applications) can be integrated into the space. Display 
walls are common but not required. "Virtual spaces" (similar to channels but organized more like
a virtual building) allow people to find each other.
</p>

<p>
The Access Grid uses Grid authentication for establishing private meeting spaces and can be
integrated with OGSA services.
</p>

<?
$software = "<a href='http://www.accessgrid.org/'>Access Grid</a>";
$developer = "<a href='http://www-unix.mcs.anl.gov/fl/'>Argonne Futures Laboratory</a>";
$distros = "Download from the <a href='http://www-unix.mcs.anl.gov/fl/research/accessgrid/'>Futures Laboratory</a>";
$contact = "<a href='mailto:ag-users@mcs.anl.gov'>ag-users@mcs.anl.gov</a> 
            (must be <a href='http://www-unix.mcs.anl.gov/fl/research/accessgrid/about/maillist.html'>subscribed</a> before posting to the list)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../collaboration-components.php"><< Components for Grid Collaboration</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
