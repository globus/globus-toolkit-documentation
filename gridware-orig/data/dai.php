<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 78

$title = "Globus: Grid Software - OGSA-DAI";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../data-components.php"><< Components for Grid Data Management</a></p>

<h1 class="first">OGSA-DAI</h1>

<p>
OGSA-DAI provides an OGSA interface for accessing XML and relational data stores and implements the GCF DAIS WG standard (in progress).
</p>

<?
$software = "<a href='http://www.ogsadai.org.uk'>OGSA-DAI</a>";
$developer = "UK eScience";
$distros = "Download from OGSA-DAI";
$contact = "<a href='mailto:support@ogsadai.org.uk'>support@ogsadai.org.uk</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>