<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 92

$title = "Grid Ecosystem - Rocks";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">


<h1 class="first">Rocks</h1>

<p>
Rocks is a software distribution for setting up and operating Linux clusters. It includes the operating system as well
as cluster-specific management tools. The goal of the Rocks effort is to make setting up and maintaining clusters 
extremely easy.
</p>

<p>
In order to make the setup and maintenance processes as easy as possible, Rocks provides a largely homogenous
configuration for all clusters based on Rocks. Local "extras" can be added as "rolls:" add-on distributions that
are applied after the base distribution is installed.  Users of Rocks are encouraged to treat the system software
on their clusters as "soft state", meaning that it is preferable to wipe the software clean and reinstall it
from scratch than to try to debug problems or maintain consistency between nodes in other ways.
</p>

<p>
The Rocks system includes a "Grid" roll (not to be confused with the "SGE" or "Sun Grid Engine" roll).  The Grid
roll includes all of the <a href="nmi.php">NMI</a> software, so Rocks provides a very simple way to set up a new cluster with the
complete NMI software suite installed and configured.
</p>

<?
$software = "<a href='http://www.rocksclusters.org'>Rocks</a>";
$developer = "<a href='http://www.sdsc.edu/'>SDSC</a>";
$distros = "<a href='http://www.rocksclusters.org'>Download from SDSC</a>";
$contact = "<a href='mailto:npaci-rocks-discussion@sdsc.edu'>npaci-rocks-discussion@sdsc.edu</a><br />(must be subscribed to post)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
