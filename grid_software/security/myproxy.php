<?php

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/security/ws-aa.html

$title = "Grid Ecosystem - MyProxy";
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


<h1 class="first">MyProxy</h1>

<p>
<img border="0" src="MyProxy-1.jpg" style="float: right; margin-left: 0.3em;" />
MyProxy is a remote service that stores user credentials. Either users or Grid administrators can store user credentials in the MyProxy service, and then users can &quot;sign in&quot; (obtain a proxy credential) on any system on the network.
</p>

<p>
MyProxy greatly simplifies certificate management, because it provides an easy-to-use mechanism for user &quot;sign in&quot; without requiring users to manage their own certificate files. When combined with a CA service that automatically populates the MyProxy service with certificates (see <a href="purse.html">PURSE</a>), Grid users have the benefit of a simple &quot;ID/password&quot; sign-on procedure combined with sophisticated security throughout the system.
</p>

<p>
MyProxy provides a command-line interface that allows users to obtain Grid proxy credentials on their local systems. This interface asks the user for an ID and password, which are used to authenticate to the MyProxy service so that the user's credential can be accessed to generate the local proxy.
</p>

<p>
MyProxy also provides an interface for integrating with web portals. This interface allows web portal developers to build MyProxy into their protal's interface so that users can enter their ID and password into the portal's interface.  The portal can then obtain a proxy credential on the user's behalf and use the proxy to access other Grid services (computation, data, remote instruments) to satisfy user requests.
</p>

<?
$software = "<a href='http://grid.ncsa.uiuc.edu/myproxy/'>MyProxy</a>";
$developer = "<a href='http://www.ncsa.uiuc.edu/'>National Center for Supercomputing Applications</a>";
$distros = "<a href='http://www.globus.org/toolkit/'>Globus Toolkit 4.0</a><br>
<a href='http://collab.nsf-middleware.org/Lists/NMIR7/AllItems.aspx'>NMI-R7</a>";
$contact = "<a href='mailto:myproxy-users@ncsa.uiuc.edu'>myproxy-users@ncsa.uiuc.edu</a><br />(must be <a href='http://grid.ncsa.uiuc.edu/myproxy/'>subscribed</a> before posting messages)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
