<?php

// 2004-10-18, robinett: created, copied information from www.globus.org/gridware/security/voms.html

$title = "Grid Ecosystem - PKINIT";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">


<h1 class="first">PKINIT</h1>

<p>
PKINIT is a mechanism for allowing users to use Grid certificates to authenticate to a Kerberos realm. The PKINIT specification is currently under development in the IETF's Kerberos Working Group.  For applications or services hosted on systems that use Kerberized services (like AFS), PKINIT allows remote Grid users to obtain the necessary local Kerberos tickets to use the site's local facilities properly. PKINIT replaces the Kerberos "klog" command and uses the user's Grid certificate to eliminate the need for a Kerberos passphrase.
</p>

<p>
One implementation of PKINIT currently in use for Grid purposes is a PKINIT patch to the Heimdal Kerberos toolkit.
</p>

<?
$software = "<a href='http://meta.cesnet.cz/cms/opencms/en/docs/software/devel/PKINIT.html'>PKINIT</a>";
$developer = "<a href='http://meta.cesnet.cz/cms/opencms/en/about/meta.html'>MetaCentrum Project</a>";
$distros = "<a href='http://people.su.se/~lha/patches/heimdal/pkinit/'>PKINIT patch</a> to the <a href='http://www.pdc.kth.se/heimdal/'>Heimdal Kerberos</a> implementation";
$contact = "<a href='mailto:kouril@ics.muni.cz'>Daniel Kouril &lt;kouril@ics.muni.cz&gt;</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
