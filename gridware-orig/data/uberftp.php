<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 75

$title = "Globus: Grid Software - UberFTP";
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

<h1 class="first">UberFTP</h1>

<p>
UberFTP is an interactive (text-prompt) client for <a href='gridftp.php'>GridFTP</a>. It supports more features than NCFTP, such as parallelism and third-party transfers.
</p>

<?
$software = "<a href='http://dims.ncsa.uiuc.edu/set/uberftp/'>UberFTP</a>";
$developer = "NCSA";
$distros = "NMI-R5M<br />Download from NCSA";
$contact = "<a href='mailto:gridftp@ncsa.uiuc.edu'>gridftp@ncsa.uiuc.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>