<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 89

$title = "Globus: Grid Software - GPT";
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

<h1 class="first">Grid Packaging Tools - GPT</h1>

<p>
GPT is the packaging solution used for the Globus Toolkit, but it exists independently of that distribution. GPT adds metadata to tar.gz files, putting more "intelligence" into build/install/config. There are tools for both developers and users. The focus of GPT is multiplatform, tricky builds. It works on most Unix systems and with both source and binary packages. GPT has dependency management, relocatable installations (multiple installs), setup (config) awareness, and support for bundles (aggregation of packages). 
</p>

<?
$software = "<a href='http://www.ncsa.uiuc.edu/Divisions/ACES/GPT/'>GPT</a>";
$developer = "NCSA";
$distros = "NMI-R5<br />Download from NCSA";
$contact = "<a href='mailto:mbletzin@ncsa.uiuc.edu'>mbletzin@ncsa.uiuc.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../packaging-tools-and-dist.php"><< Tools for Software Packaging and Distribution</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>