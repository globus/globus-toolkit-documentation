<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 74

$title = "Globus: Grid Software - GridFTP";
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

<h1 class="first">GridFTP</h1>

<p>
GridFTP is a high-performance, secure, reliable data transfer protocol optimized for high-bandwidth wide-area networks. It is based upon FTP, with the addition of well-designed extensions. GridFTP uses basic Grid security (control and data channels). Features include multiple data channels for parallel transfers, partial file transfers, third-party (direct server-to-server) transfers, reusable data channels, and command pipelining. GridFTP is a GCF recommendation for GFD.20.
</p>

<?
$software = "<a href='http://www-unix.globus.org/toolkit/docs/3.2/gridftp/'>GridFTP</a>";
$developer = "The Globus Alliance";
$distros = "Globus Toolkit 3.2<br />NMI-R5";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>