<?php
$title = "Grid Ecosystem - Shibboleth";
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


<h1 class="first">Shibboleth</h1>

<p>
<img align="right" border=0 src="Shibboleth-1.jpg" style="float: right; margin-left: 0.3em" />
Shibboleth provides a set of network services that support a federated authorization and 
authentication model. Designed with universities, corporations, and government agencies in mind,
Shibboleth allows organizations to participate in the authentication and authorization of
their individual members (e.g., faculty, students, emplyees) when those members use services
provided by external agencies (e.g., commercial or government services).
</p>

<p>
Shibboleth makes use of local authentication systems at "home institutions" (the organization
where an individual user works or goes to school) in cooperation with local Shibboleth services to inform
remote services of the validity of requests by local users to use the services.
</p>

<p>Shibboleth services on remote web servers intercept user requests and (if the
user is not recognized as a known user) work with the user to determine their home
institution. They then interact with the home institution's Shibboleth services to 
obtain a "handle" for the user that contains any identification information that the
home institution chooses to make available as well as "attributes" that describe
the role(s) that the user has in the institution.  This information is used by the remote
service to determine whether to give the user access to the service or not.
</p>

<p>Originally geared for Web browser-based services, Shibboleth is currently being extended to
support services that use other interfaces, such as Web services and WSRF interfaces.</p>

<p>Key benefits:</p>

<ul>
<li>Relieves remote service providers from having to manage user lists for every institution that
uses their services</li>
<li>Allows "home institutions" to protect the identities of their users from remote service providers</li>
<li>Leverages existing authentication systems at home institutions</li>
<li>Flexible, distributed architecture supports a variety of usage scenarios</li>
</ul>

<?

$software = "<a href='http://shibboleth.internet2.edu/'>Shibboleth</a>";
$developer = "<a href='http://www.internet2.org/'>Internet2</a>";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR6/AllItems.aspx'>NMI-R6</a><br>
            Download from the <a href='http://shibboleth.internet2.edu/'>Shibboleth</a> website";
$contact = "<a href='mailto:shibboleth-users@internet2.org'>shibboleth-users@internet2.org</a><br>
            (must be <a href='http://shibboleth.internet2.edu/shib-misc.html#mailinglist'>subscribed</a> before sending mail)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
