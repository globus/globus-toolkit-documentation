<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 79

$title = "Globus: Grid Software - MCS";
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

<h1 class="first">MCS - Metadata Catalog Service</h1>

<p>
MCS is a stand-alone metadata catalog service with an OGSA service interface. It stores system-defined and user-defined attributes for logical files/objects and supports manipulation and query of the data. MCS is integrated with OGSA-DAI, which provides metadata storage and basic Grid authentication mechanisms.
</p>

<?
$software = "<a href='http://www.isi.edu/~deelman/MCS/'>MCS</a>";
$developer = "The Globus Alliance";
$distros = "Download from ISI";
$contact = "<a href='mailto:mcs@mailman.isi.edu'>mcs@mailman.isi.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>