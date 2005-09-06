<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 89

$title = "Grid Ecosystem - Grid Packaging Tools (GPT)";
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


<h1 class="first">Grid Packaging Tools (GPT)</h1>

<p>
GPT is a portable software packaging system that keeps track of the software installed on a system and manages
dependencies between packages.  GPT adds metadata to standard tar.gz files, putting more "intelligence" into the 
build/install/config/uninstall process. GPT uses the Perl language, so it is portable to a wide range of systems.
</p>

<p>
GPT can install binary distributions (precompiled for a specific processor and operating system) or source distributions
(where the software is compiled from source code when it is installed).  GPT also supports dependency management, 
relocatable installations (multiple installs), setup (configuration) awareness, and support for bundles 
(aggregation of packages). 
</p>

<?
$software = "<a href='http://www.ncsa.uiuc.edu/Divisions/ACES/GPT/'>Grid Packaging Tools (GPT)</a>";
$developer = "<a href='http://www.ncsa.uiuc.edu/'>NCSA</a>";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR7/AllItems.aspx'>NMI-R7</a><br />
            <a href='http://www.ncsa.uiuc.edu/Divisions/ACES/GPT/'>Download from NCSA</a>";
$contact = "<a href='mailto:mbletzin@ncsa.uiuc.edu'>mbletzin@ncsa.uiuc.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
