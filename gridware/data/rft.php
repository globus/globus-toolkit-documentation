<?php

$title = "Grid Ecosystem - Reliable File Transfer (RFT) Service";
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

<h1 class="first">Reliable File Transfer (RFT) Service</h1>

<p>
The Reliable File Transfer (RFT) service is an OGSA service that offers the capability of requesting file transfers 
in "disconnected" mode, where the client requests the transfer and then turns over responsiblity for managing it 
to the RFT service. The client can monitor the status of the transfer or simply wait for a completion notification.
</p>

<p>
The RFT service supports transfers between GridFTP and FTP services. In addition to individual files, RFT can also
transfer the entire contents of directories.
</p>

<p>
The RFT service uses a persistent database to record transfer requests and the status of transfers in progress. 
If the RFT service fails for some reason, it will resume any incomplete transfers when it is restarted, and it 
will restart each transfer at the point where the status was last recorded rather than restarting at the beginning
of the transfer.
</p>

<?
$software = "<a href='http://www-unix.globus.org/toolkit/docs/3.2/rft/'>RFT</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www-unix.globus.org/toolkit/'>Globus Toolkit 3.2</a><br />
            <a href='http://collab.nsf-middleware.org/Lists/NMIR6/AllItems.aspx'>NMI-R6</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
