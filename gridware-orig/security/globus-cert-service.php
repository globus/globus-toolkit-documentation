<?php

// 2004-10-18, robinett: created, copied information from www.globus.org/gridware/security/voms.html

$title = "Globus: Grid Software - Globus Certificate Service";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"]. "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../security-components.php"><< Components for Grid Security</a></p>

<h1 class="first">Globus Certificate Service</h1>

<p>
The Globus Certificate Service is an online service that issues low-quality GSI certificates for people who want to experiment with Grid components that require certificates but do not have any other means of acquiring certificates.  Certificates from the Globus Certificate Service are intended solely for experimentation and testing. Care should be taken when using certificates issued by it. These certificates are not to be used on production systems.
</p>

<p>
The Globus Certificate Service is not a true Certificate Authority (CA).  For example, it does not revoke or reissue certificates. It also doesn't perform any verification of the identities of the people to whom it issues certificates. The service itself is not especially secure, so it would not be appropriate to send sensitive data to it as part of a certificate request.
</p>

<?
$software = "<a href='http://gcs.globus.org:8080/gcs/index.html'>Globus Certificate Service</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "This code is not part of any known distribution, but may be made available on request.";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../security-components.php"><< Components for Grid Security</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>