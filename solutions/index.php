<?php

$title = "Globus: Solutions for Grid Applications";
$section = "section-5";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>

<div id="main">
<!-- content STARTS here -->

    <h1 class="first">Solutions for Grid Systems And Applications</h1>

    <p>Although every Grid application and system is unique, there are some things that
       they typically have in common. To meet these common needs, the Globus Alliance and
       the Grid community have identified a number of "integrated solutions" that combine
       components from the <a href="../gridware/">Grid Ecosystem</a> with specialized code. These solutions can be
       reused to ease the work of developing new applications and systems.</p>

    <blockquote>
    <b><a href="overview.html">Overview</a></b> describes the Globus Alliance's general approach to identifying and delivering solutions for common Grid requirements
    </blockquote>

    <blockquote>
    <b><a href="user-registration.html">User Registration</a></b> provides an easy-to-use system for using
      high-quality Grid security to authenticate users throughout your distributed Grid system without 
      requiring users to know anything about certificates. Users sign up to use your applications via a
      simple web registration form and never see Grid certificates. System administrators, however, can
      secure their systems via high-quality PKI security and manage local security issues autonomously.
    </blockquote>

    <blockquote>
    <b><a href="monitoring.html">System Monitoring</a></b> provides a useful system for monitoring the status
      of distributed system resources and generating email or pager alarms when things go wrong. A web
      interface provides ia summary of current system status plus status logs for individual components.
    </blockquote>

<!-- content ENDS here -->

</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
