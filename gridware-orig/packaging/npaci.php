<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 92

$title = "Globus: Grid Software - NPACI Rocks";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../packaging-tools-and-dist.php"><< Tools for Software Packaging and Distribution</a></p>

<h1 class="first">NPACI Rocks</h1>

<p>
Rocks is primarily a software distribution for Linux clusters. It includes the OS, common tools, and cluster-specific tools. It is very easy to install and requires very little systems expertise to get up and running. Rocks is homogenous (for those who like that), and extras can be added as "rolls." It includes a Grid Roll (not to be confused with the Grid Engine Roll) and all of the NMI software (a very easy way to get this stuff installed on your cluster!).
</p>

<?
$software = "<a href='http://www.rocksclusters.org'>NPACI Rocks</a>";
$developer = "NPACI";
$distros = "Download from NPACKage";
$contact = "<a href='mailto:npaci-rocks-discussion@sdsc.edu'>npaci-rocks-discussion@sdsc.edu</a><br />(must be subscribed to post)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../packaging-tools-and-dist.php"><< Tools for Software Packaging and Distribution</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>