<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 75

$title = "Grid Ecosystem - GSI-OpenSSH, GSI-SCP, and GSI-SFTP";
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

<h1 class="first">GSI-OpenSSH, GSI-SCP, and GSI-SFTP</h1>

<p>
OpenSSH is a popular open source tool for remote login and file transfer to and from Unix systems.
Unlike earlier Internet tools (telnet, rlogin, rsh, rcp, etc.), OpenSSH uses public keys
to authenticate login and file transfer requests. The standard version of OpenSSH does not, however, 
support Grid authentication.</p>

<p>
GSI-OpenSSH is a version of OpenSSH that supports Grid authentication, allowing people who already
have Grid certificates to use these tools without establishing another set of keys. Services include 
remote login (gsi-ssh), remote copy (gsi-scp), and secure FTP (gsi-sftp).</p>

<p>
Although these programs do not provide the high-performance benefits of GridFTP servers and clients, 
they are are more familiar to many users and thus may be attractive to projects that are migrating
applications and users to Grid environments.
</p>

<p>
GSI-OpenSSH is implemented as a patch to the standard OpenSSH distribution.
</p>

<?
$software = "<a href='http://grid.ncsa.uiuc.edu/ssh/'>GSI-SCP/SFTP</a>";
$developer = "GSI patch by <a href='http://www.ncsa.uiuc.edu/'>NCSA</a>";
$distros = "<a href='ihttp://www.nsf-middleware.org/NMIR5/'>NMI-R5</a><br />
            <a href='http://www.nsf-middleware.org/NMIR5/'>Download from NCSA</a>";
$contact = "<a href='mailto:gsi-openssh@globus.org'>gsi-openssh@globus.org</a><br />(must be subscribed before posting)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
