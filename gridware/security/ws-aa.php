<?php

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/security/ws-aa.html

$title = "Grid Ecosystem - Web Services Authentication and Authorization";
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

<h1 class="first">Web Services Authentication and Authorization</h1>

<p>
The Globus Toolkit's Web Services Authentication and Authorization component contains Java classes and libraries supporting authentication and authorization for GT WS components. This includes functionality such as X.509 based authentication and message protection, GSI SecureConversation based authentication and message protection and an authorization framework including various authorization mechanisms.
</p>

<p>
This component provides the basis for the security capabilities in all Web services components of the Globus Toolkit and many other Web services components in the Grid community.
</p>

<p>
Introduced in the Globus Toolkit version 3.0, this component provides a second implementation of the Grid Security Infrastructure (GSI) that complements the existing pre-Web services implementation.
</p>

<?

$software = "<a href='http://www-unix.globus.org/toolkit/docs/3.2/gsi/index.html'>Web Services Authentication and Authorization</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www-unix.globus.org/toolkit/'>Globus Toolkiit 3.2</a><br />
            <a href='http://collab.nsf-middleware.org/Lists/NMIR6/AllItems.aspx'>NMI-R6</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p>
<a href="../security-components.php"><< Components for Grid Security</a>
</p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
