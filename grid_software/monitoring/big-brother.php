<?php

// 2004-10-20, robinett: created, copied information from www.globus.org/gridware/monitoring/big-brother.html

$title = "Grid Ecosystem - Big Brother";
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


<h1 class="first">Big Brother</h1>

<p>
Big Brother provides a scripting framework for producing web-based system status displays. Arbitrary scripts can be "plugged in" and executed across many systems, with results displayed on a single page. BB can serve as a nice front-end to MDS or other monitoring systems.
</p>

<p align='center'><img border="0" src="BigBro-1.jpg" /></p>

<?
$software = "<a href='http://www.bb4.org/'>Big Brother</a>";
$developer = "<a href='http://www.quest.com/'>Quest Software</a>";
$distros = "<a href='http://www.bb4.org/download.html'>Download from Quest Software</a>";
$contact = "<a href='mailto:bb@bb4.org'>bb@bb4.org</a><br />(must be <a href='http://www.bb4.org/support.html'>subscribed</a> before posting";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
