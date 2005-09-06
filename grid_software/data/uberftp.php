<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 75

$title = "Grid Ecosystem - UberFTP";
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


<h1 class="first">UberFTP</h1>

<p>
UberFTP is an interactive (text-based) client for <a href='gridftp.php'>GridFTP</a>. The basic GridFTP client
(globus-url-copy, distributed with the Globus Toolkit) is not interactive and allows only one file transfer
at a time. UberFTP provides an interactive tools that works much like the popular NCFTP tool.
</p>

<p>
UberFTP supports several of GridFTP's powerful extensions, including parallel transfers and third-party 
(server to server) transfers.
</p>

<?
$software = "<a href='http://dims.ncsa.uiuc.edu/set/uberftp/'>UberFTP</a>";
$developer = "<a href='http://www.ncsa.uiuc.edu/'>NCSA</a>";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR7/AllItems.aspx'>NMI-R7</a><br />
            Download from <a href='http://dims.ncsa.uiuc.edu/set/uberftp/'>NCSA</a>";
$contact = "<a href='mailto:gridftp@ncsa.uiuc.edu'>gridftp@ncsa.uiuc.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
