<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 71

$title = "Grid Ecosystem - Chimera";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../computation-components.php"><< Components for Grid Computation</a></p>

<h1 class="first">Chimera "Virtual Data"</h1>

<p>
<img src='CHIMERA-1.jpg' style='float: right; margin-left: 0.3em;'>
Chimera captures both logical and physical steps in a data analysis process. The logical steps in an analysis
(the steps to be taken without specific data filenames, executable filenames, or computation nodes) are stored as
"transformations."  The phyisical steps for actual analysis runs (with specific filesnames and compute systems 
included) are stored as "derivations."  Transformations and derivations are stored in a "virtual data catalog,"
where they can be retrieved later for retrospective inspection of the analysis process or for "replaying"
(repeating) an analysis.</p>

<p>
With a virtual data catalog available, scientists can strike a balance between storing the data produced
by analyses and storing just the steps that were used to produce the data so that it can be recreated if it is
ever actually needed again.
</p>

<?
$software = "<a href='http://www.griphyn.org/chimera/'>Chimera</a>";
$developer = "<a href='http://www.griphyn.org/'>GriPhyN Project</a>";
$distros = "<a href='http://www.griphyn.org/vdt/'>Virtual Data Toolkit (VDT)</a>";
$contact = "<a href='mailto:chimera-support@griphyn.org'>chimera-support@griphyn.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../computation-components.php"><< Components for Grid Computation</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
