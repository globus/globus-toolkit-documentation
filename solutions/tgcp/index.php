<?php
$title = "Grid Ecosystem - TGCP";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>

<div id="main">

<h1 class="first">TGCP (TeraGrid Copy) Tool</h1>


<p>
TGCP is a command-line tool developed for TeraGrid systems that simplifies data transfer requests by
end users and TeraGrid applications.  TGCP offers a simple interface to users, but it makes use of 
preconfigured information to translate simple requests into complicated ones that make full use of 
TeraGrid's sophisticated file transfer capabilities. In this way, TeraGrid users have the benefit of
powerful data movement tools without having to learn their sophisticated interfaces.
</p>

<p>
TGCP uses a configuration file maintained by system administrators to translate source/destination
transfer requests into commands that are executed.  This translation may include selecting the
transfer tool itself, setting network parameters (like buffer sizes or the number of data streams 
to use), or selecting appropriate servers for the transfer (such as dedicated "data mover" servers).  
</p>

<p>
When the system changes due to scheduled maintenance or upgrades, system administrators can change the 
configuration settings for TGCP so that TGCP users automatically avoid unavailable services or use
new capabilities that weren't previously available.
</p>

<p>
As configured on TeraGrid systems, TGCP automatically chooses between the Unix "cp" command, standard
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/gridftp.php"; ?>">GridFTP</a> transfers (using 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/globus-url-copy.php"; ?>">globus-url-copy</a>), a 
<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/rft.php"; ?>">Reliable File Transfer (RFT)</a> service, and 
<a href="../striped-gridftp/">Striped GridFTP</a> transfers (using multiple dedicated data mover nodes on TeraGrid clusters). TGCP also
selects appropriate network buffer and window sizes based on the source and destination of the 
transfer request and current network topology.
</p>

<p>Key benefits:</p>

<ul>
<li>Simple user interface
<li>Extensible configuration
<li>Users get the benefit of sophisticated system capabilities without the penalty of having to learn the
system details
<li>Configuration can be changed dynamically by administrators
<li>Administrators can move users to/from specific services without users needing to know about it
</ul>

<?

$software = "TGCP";
$developer = "<a href='http://www.teragrid.org/'>TeraGrid</a>";
$distros = "TGCP is not yet included in any known distribution, but it can be made available on request.";
$contact = "<a href='mailto:help@teragrid.org'>help@teragrid.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
