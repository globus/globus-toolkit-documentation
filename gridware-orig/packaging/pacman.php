<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 88

$title = "Globus: Grid Software - PACMAN";
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

<h1 class="first">PACMAN</h1>

<p>
PACMAN is a package manager, facilitating obtaining, installing, and updating software distributions. The use of the "caching" paradigm allows distributors to provide distributions to users. Caches can include configuration information, aiding in maintaining common configuration settings, and they allow users to easily get the latest software for a distribution. PACMAN is largely agnostic about other packaging mechanisms (tar.gz, GPT, RPM). PACMAN is used in virtual organizations to maintain a common software base across institutions & sites.
</p>

<?
$software = "<a href='http://physics.bu.edu/~youssef/pacman/'>PACMAN</a>";
$developer = "Boston University";
$distros = "Download from Boston University";
$contact = "<a href='mailto:youssef@bu.edu'>youssef@bu.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../packaging-tools-and-dist.php"><< Tools for Software Packaging and Distribution</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>