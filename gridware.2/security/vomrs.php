<?php

// 2004-10-18, robinett: created, copied information from www.globus.org/gridware/security/voms.html

$title = "Grid Ecosystem - VOMRS";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../security-components.php"><< Components for Grid Security</a></p>

<h1 class="first">VOMRS - Virtual Organization Management Registration Service</h1>

<p>
Developed within the high-energy physics community, VOMRS extends the existing VOMS system to include an easy-to-use interface for users to register with the system and request sign-in credentials. Although very similar to the PURSE system, VOMRS's further integration with the VOMS system adds authorization features in addition to basic user registration.
</p>

<p align='center'><img border="0" src="VOMRS-1.jpg" /></p>

<p>
Like PURSE, VOMRS provides an easy-to-use web interface for soliciting basic data from users, including a desired ID/password combination. Unlike PURSE, VOMS does not issue Gird credentials: users must already have Grid credentials from some other source. VOMRS is used to register users and associate their Grid credential with an authorized account in the application. VOMS's registration interface also asks the user to identify the institution to which they belong and the type of access they desire so that VOMS-based authorization data can be added. Requests are forwarded by email to an administrator, validated by an institutional representative, and the administrator uses administrative functions in the web portal to process requests. Users receive email notification when their accounts are ready for use.
</p>

<p>
When an account is created using VOMRS, the user data is stored in the VOMS database, which is used to automatically generate VOMS credentials for the user when they sign in.  These credentials include authorization information in addition to the authentication information in the user's original credentials. (See VOMS for more information.)
</p>

<?
$software = "<a href='http://computing.fnal.gov/docs/products/vomrs/'>VOMRS</a>";
$developer = "<a href='http://www.fnal.gov/'>Fermi National Laboratory</a>";
$distros = "<a href='http://computing.fnal.gov/docs/products/vomrs/'>Download from Fermi National Laboratory</a><br />See examples at <a href='http://www.uscms.org/s&c/VO/cms_vo_home.html'>USCMS</a>";
$contact = "<a href='mailto:helpdesk@fnal.gov'>helpdesk@fnal.gov</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../security-components.php"><< Components for Grid Security</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
