<?php
$title = "Grid Ecosystem - Pegasus";
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

<h1 class="first">Pegasus Workflow Transformation</h1>

<p>
Pegasus converts abstract workflow (workflow that doesn't refer to specific filenames in specific 
storage systems) into concrete workflow (workflow that names specific files on specific systems). 
Pegasus accepts user requests that refer to files or data in terms of application-specific 
metadata (e.g., "average daily rainfall at site X for the years 1990 through 2004").
</p>

<p align=center><img src='Pegasus-1.jpg'></p>

<p>Pegasus uses the 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/mcs.php"; ?>">Metadata Catalog Service (MCS)</a> to 
convert these metadata specifications into logical data sources.  (Logical sources are filenames or 
database table names without information about which storage system or database server contains the 
file or table.) Pegasus then obtains a transformation (abstract workflow) from the 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/chimera.php"; ?>">Chimera</a> virtual data catalog 
to determine how to produce the file (either retrieve it from a server if it already exists or else 
run a series of analysis steps to produce it).  Pegasus uses the 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/rls.php"; ?>">Globus Replica Location Service (RLS)</a> 
to locate physical files or database tables as needed.  Pegasus then delivers concrete workflow (with 
all data locations specified) to 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/condor-g.php"; ?>">DAGman and Condor-G</a>, which 
execute the entire workflow on available Grid resources.  The resulting new replication and derivation 
data can then be optionally stored in the RLS service and the Chimera virtual data catalog.
</p>

<?
$software = "<a href='http://pegasus.isi.edu'>Pegasus</a>";
$developer = "<a href='http://www.griphyn.org/'>GriPhyN Project</a>";
$distros = "<a href='http://www.griphyn.org/vdt/'>Virtual Data Toolkit (VDT)</a>";
$contact = "<a href='mailto:deelman@isi.edu'>deelman@isi.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
