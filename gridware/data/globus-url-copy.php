<?php
$title = "Grid Ecosystem - globus-url-copy";
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

<h1 class="first">globus-url-copy</h1>

<p>
The globus-url-copy tool provides a command-line client for requesting transfers to, from,
or between GridFTP servers. This simple command-line interface can be used manually, included
in shell scripts, or invoked by applications. It is not interactive, so each invocation
requests a single transfer (though that transfer might include multiple files in a directory).
</p>

<p>
The globus-url-copy tool supports many of the advanced capabilities of GridFTP servers, including:
</p>

<ul>
<li>Grid security, including data channel(s)</li>
<li>HTTP, FTP, GridFTP</li>
<li>Server-to-server transfers</li>
<li>Subdirectory transfers and lists of transfers</li>
<li>Multiple parallel data channels</li>
<li>TCP tuning parameters</li>
<li>Retry parameters</li>
<li>Transfer status output</li>
</ul>

<p>
The globus-url-copy command leaves configuration settings and the selection of servers up to the
user.  In complex systems with many servers and networks that require different tuning
parameters, a wrapper that supplies these details given simple source/destination requests may
be helpful.  See the material covering 
<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]."tgcp/"; ?>">TeraGrid's TGCP Tool</a> in the 
<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Solutions</a> section of this website
for an example of this technique.
</p>

<?
$software = "<a href='http://www-unix.globus.org/toolkit/docs/3.2/gridftp/'>globus-url-copy</a>";
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
