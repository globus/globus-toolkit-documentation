<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 79

$title = "Grid Ecosystem - MCS";
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
MCS is a stand-alone metadata catalog service with an OGSA service interface. The metadata catalog 
associates application-specific descriptions with data files, tables, or objects.  These descriptions,
which are encoded in structured ways defined by "schema" or community standards, make it easier for users 
and applications to locate data relevant to specific problems.
</p>

<p>
For example, a data file containing a series of numbers could have associated metadata that reveals 
that the numbers are temperature readings, and further that those readings were taken at a particular 
field site. The metadata might also encode the fact that the numbers in the first column of each line 
are timestamps and the numbers in the second column are temperature readings measured in Kelvin units.
A climate scientist who needs the temperature readings for that field station can search the metadata 
catalog and find the reference to this data file and the information about how to interpret the 
contents of the file.
</p>

<p>
MCS is integrated with <a href="dai.php">OGSA-DAI</a>, which provides metadata storage and basic Grid 
authentication mechanisms.  When MCS is used with OGSA-DAI, Grid authentication is used to authorize 
accesses and manipulation of the metadata.  MCS is frequently used in conjunction with the 
<a href="rls.php">RLS</a> component, which translates logical filenames into physical locations in 
specific storage systems.
</p>

<?php
$software = "<a href='http://www.isi.edu/~deelman/MCS/'>MCS</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www.isi.edu/~deelman/MCS/'>Download from ISI</a>";
$contact = "<a href='mailto:mcs@mailman.isi.edu'>mcs@mailman.isi.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
