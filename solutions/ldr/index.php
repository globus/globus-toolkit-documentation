<?php
$title = "Grid Ecosystem - Lightweight Data Replicator (LDR)";
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

<h1 class="first">Lightweight Data Replicator (LDR)</h1>

<p>
The Lightweight Data Replicator (LDR) was developed for use in the LIGO (Laser Interferometer 
Gravitational Wave Observatory) scientific collaboration.  The LIGO collaboration needs to maintain 
replicas of large datasets in multiple locations so that scientists in different regions can 
access the datasets using local copies as often as possible. LIGO datasets are 50 Gb or larger, and 
the LIGO collaboration targets several sites (more than 2, less than 100) for these datasets. Manual 
copies and existing tools such as rsync were not satisfactory for this purpose, based on the requirements
listed below.
</p>

<p><b>Requirements:</b></p>

<ul>
<li>High-bandwidth network links (10+ Gb/s) are utilized efficiently.</li>
<li>Datasets can be queried using application-level terms (metdata).</li>
<li>Replicas (copies) can be located via database queries.</li>
<li>Data transfer endpoints are authenticated using "strong" security.</li>
</ul>

<p>
LDR combines the 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/pre-ws-aa.php"; ?>">Grid Security Infrastructure (GSI)</a>, 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/gridftp.php"; ?>">GridFTP</a>, 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/rls.php"; ?>">Globus Replica Location Service (RLS)</a>, and
<a href="http://dsd.lbl.gov/gtg/projects/pyGlobus/">PyGlobus</a>, with customized Python daemon code 
to provide a solution that meets the requirements above.  The developers plan to integrate the 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/mcs.php"; ?>">Metadata Catalog Service (MCS)</a> in the future.
</p>

<?

$software = "<a href='http://www.lsc-group.phys.uwm.edu/LDR/'>Lightweight Data Replicator</a>";
$developer = "<a href='http://www.griphyn.org/'>GriPhyN</a>, <a href='http://www.ivdgl.org/'>iVDGL</a>";
$distros = "Download from <a href='http://www.lsc-group.phys.uwm.edu/LDR/doc/install.html'>Univ. of 
Wisconsin - Milwaukee";
$contact = "<a href='mailto:ldr-discuss@gravity.phys.uwm.edu'>ldr-discuss@gravity.phys.uwm.edu</a><br>
(must be <a href='http://www.lsc-group.phys.uwm.edu/mailman/listinfo/ldr-discuss'>subscribed</a> 
before posting messages)</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
