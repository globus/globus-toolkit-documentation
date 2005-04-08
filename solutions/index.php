<?php

$title = "Globus: Solutions for Grid Applications";
$section = "section-5";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<!-- <div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="home">
<!-- content STARTS here -->

    <h1 class="first">Solutions for Grid Systems And Applications</h1>

    <p>Although every Grid application is unique, there are some challenges
       that are common to many applications. Because these challenges come up often,
       and because they can appear daunting at first, we have documented
       instances where we and our partners have solved specific challenges using 
       Grid software.</p>

    <p>
<?php if ($SITE_CONTENT["GLOBUS"]) { ?>
       The <b>Globus Alliance</b> section of this website includes a 
       <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."projects.php"; ?>">list of 
       e-Science/e-Business projects</a> in which our members participate. 
       The <b>Grid Software</b> section describes many of the 
       <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]; ?>">individual Grid software 
       components</a> that we have used.
<?php } ?>
       This section of the website describes how we and our partners used 
       Grid software to overcome specific challenges in Grid projects.
       These solutions can be reused or used as roadmaps to ease the work of 
       developing new applications.</p>

    <h2>Security Challenges</h2>

    <ul>
      <li>
        Add a simple user registration interface to your Grid application
        so that users need only a simple ID/password combination to "sign in."
        At the same time, make certain that the application uses "strong"
        Grid security internally.
      </li>
    </ul>

    <h2>Monitoring/Managability Challenges</h2>

    <ul>
      <li>
        <a href="esg-monitoring/">Monitor critical system components, notifying 
        system administrators when services fail and recording availability of 
        the services over time for later analysis.</a>
      </li>
    </ul>

    <h2>Data Challenges</h2>

    <ul>
      <li>
        <a href="striped-gridftp/">Use the maximum capacity of a 10-30 Gb/s wide area network connection 
        when transfering either a large file or a set of small files.</a>
      </li>

      <li>
        <a href="tgcp/">Give your users a simple tool for transfering 
        files between sites on a wide area network that takes advantage of your
        sophisticated data movement facilities and networks without your users 
        needing to know how they work.</a>
      </li>

      <li>
        <a href="ldr/">Replicate large datasets on servers in several locations 
        to improve access times for local users in each place, keeping track of 
        where the replicas are and ensuring that each replica site has all 
        of the necessary files.</a>
      </li>

      <li>
        Provide analyzed data on demand using a combination of analysis "recipes," 
        results or partial results from previous analyses, replicas of these 
        results, and a limited set of computation and storage facilities.
      </li>
    </ul>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
