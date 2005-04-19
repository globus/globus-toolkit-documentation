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

<?php if ($SITE_CONTENT["GLOBUS"]) { ?>
    <p>
       The <b>Globus Alliance</b> section of this website includes a 
       <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."projects.php"; ?>">list of 
       e-Science/e-Business projects</a> in which our members participate. 
       It also includes many 
       <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/papers.php"; ?>">research papers</a> 
       that describe how Grid software has been used to enable science.
       The <b>Grid Software</b> section describes many of the 
       <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]; ?>">individual Grid software 
       components</a> that we have used.</p>
<?php } ?>
    <p>
       This section of the website describes how we and our partners overcame
       specific challenges in Grid projects using a combination of Grid software
       components and application code.  Each solution is presented in the context
       of a specific Grid project.  These solutions can be reused or treated 
       as roadmaps to ease the work of developing new applications.</p>

    <h2>Security Challenges</h2>

    <ul>
      <li><b>Registering Users For The Earth System Grid</b><br>
        The challenge: Add a simple user registration interface to your Grid application
        so that users need only a simple ID/password combination to "sign in."
        At the same time, make certain that the application uses "strong"
        Grid security internally. 
      </li>
    </ul>

    <h2>Monitoring/Managability Challenges</h2>

    <ul>
      <li><b><a href="system_monitoring/">A Monitoring System For The 
             Earth System Grid</a></b><br>
        The challenge: Monitor critical system components, notifying system administrators 
        when services fail and recording availability of the services over time 
        for later analysis.
        <a class="learnmore" href="system_monitoring/">Learn how...</a>
      </li>
    </ul>

    <h2>Data Challenges</h2>

    <ul>
      <li><b><a href="tgcp/">Moving Data Fast On The TeraGrid</a></b><br>
        The challenge: Give your users a way to transfer files between sites on a wide area 
        network that utilizes the maximum capacity of a 10-30 Gb/s network 
        connection when transfering either a large file or a set of small 
        files. This mechanism <em>must not</em> require users to learn the 
        details about service configurations, networks, or system architecture.
        <a class="learnmore" href="tgcp/">Learn how...</a>
      </li>

      <li><b><a  href="ldr/">Making Copies For The Laser Interferometer 
             Gravitational Wave Observatory</a></b><br>
        The challenge: Replicate large datasets on servers in several locations 
        to improve access times for local users in each place, keeping track of 
        where the replicas are and ensuring that each replica site has all 
        of the necessary files.
        <a class="learnmore" href="ldr/">Learn how...</a>
      </li>

      <li><b>Balancing Computation And Storage For The Sloan Digital Sky Survey</b><br>
        The challenge: Provide analyzed data on demand using a combination of analysis "recipes," 
        results or partial results from previous analyses, replicas of these 
        results, and a limited set of computation and storage facilities.
      </li>
    </ul>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
