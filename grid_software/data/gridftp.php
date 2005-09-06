<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 74

$title = "Grid Ecosystem - GridFTP";
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


<h1 class="first">GridFTP</h1>

<p>
GridFTP is a high-performance, secure, reliable data transfer protocol optimized for high-bandwidth wide-area 
networks. It is based upon the Internet FTP protocol, and it implements extensions for high-performance operation
that were either already specified in the FTP specification but not commonly implemented or that were proposed as
extensions by our team.  The current GridFTP protocol specification is now a "proposed recommendation" document in 
the Global Grid Forum (GFD-R-P.020).</p>

<p>
GridFTP uses basic Grid security on both control (command) and data channels. Other features include multiple data 
channels for parallel transfers, partial file transfers, third-party (direct server-to-server) transfers, reusable 
data channels, and command pipelining.
</p>

<?
$software = "<a href='http://www.globus.org/toolkit/docs/4.0/data/gridftp/'>GridFTP</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www.globus.org/toolkit/'>Globus Toolkit 4.0</a><br />
            <a href='http://collab.nsf-middleware.org/Lists/NMIR7/AllItems.aspx'>NMI-R7</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
