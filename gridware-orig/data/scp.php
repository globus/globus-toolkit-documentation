<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 75

$title = "Globus: Grid Software - GSI-SCP/SFTP";
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

<h1 class="first">GSI-SCP/SFTP</h1>

<p>
GSI-OpenSSH is a version of OpenSSH that supports Grid authentication. Programs include remote terminal (gsi-ssh), remote copy (gsi-scp), and secure FTP (gsi-sftp). These programs are more familiar to many users than GridFTP, though they don't take advantage of GridFTP's capabilities (parallelism, partial files, third-party transfers, etc.).
</p>

<?
$software = "<a href='http://grid.ncsa.uiuc.edu/ssh/'>GSI-SCP/SFTP</a>";
$developer = "Patch to OpenSSH by NCSA";
$distros = "NMI-R5M<br />Download from NCSA";
$contact = "<a href='mailto:gsi-openssh@globus.org'>gsi-openssh@globus.org</a><br />(must be subscribed before posting)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>