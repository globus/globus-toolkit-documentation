<?php

// 2004-11-01, robinett: created, copied information from Ecosystem-1.6.ppt, slide 88

$title = "Grid Ecosystem - PACMAN";
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


<h1 class="first">PACMAN</h1>

<p>
Given the same set of software packages, system administrators at ten sites are likely to come up with <em>at least</em>
ten different ways to install and configure the software.  In Grid settings--where users expect a seamless experience
regardless of which systems they are using at any given time--this can present a genuine challenge.</p>

<p>PACMAN (PACkage MANager) is a software distribution tool that makes it considerably easier to deploy a custom 
distribution of one or many packages onto many systems with consistent installation and configuration settings.
PACMAN offers features for obtaining, installing, and updating software distributions from one or more "master"
sites.</p>

<p>
PACMAN uses a "caching" paradigm, in which the architects of a deployment install and configure software on a set of
"caches." Once a cache is established, others can replicate the installation on their own systems by issuing a 
PACMAN client command.  Caches include configuration information, aiding in maintaining common configuration 
settings.  PACMAN also provides an easy mechanism to update sites when changes are made in the cache.
</p>

<p>PACMAN supports a number of popular packaging systems, including the venerable "tar.gz" format, GPT, and 
RedHat's RPM.
</p>

<?
$software = "<a href='http://physics.bu.edu/~youssef/pacman/'>PACMAN</a>";
$developer = "<a href='http://physics.bu.edu/'>Boston University (Physics Dept.)</a>";
$distros = "Download from <a href='http://physics.bu.edu/~youssef/pacman/'>Boston University</a>";
$contact = "<a href='mailto:youssef@bu.edu'>youssef@bu.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
