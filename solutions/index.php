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
       that are common to many applications. To meet these common needs, we
       have identified a number of "integrated solutions" that illustrate how to
       overcome specific application challenges using Grid software.</p>

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

    <ul>
      <li>
        <strong><a href="purse/">PURSE</a></strong> 
        combines several Grid security components and a Web portal to provide 
        an easy way for new users to sign up to use Grid applications on the 
        Web. Using a Web browser and email, users can establish a sign-on for 
        their application and then use sophisticated Grid-enabled software with 
        high-quality security.
      </li>

      <li>
        <strong><a href="vomrs/">VOMRS</a></strong> 
        combines security components from the Physics community to provide a Web-based registration 
        form for people who already have Grid credentials. VOMRS also includes a group membership 
        capability that can be used by the application to make authorization decisions.
      </li>

      <li>
        The <strong><a href="esg-monitoring/">ESG Monitoring System</a></strong> 
        links system monitoring tools together to provide a service that keeps track 
        of the critical components that make up the Earth System Grid (ESG), notifies system 
        administrators if a critical service fails, and records availability of the services over time
        for later analysis.
      </li>

      <li>
        The TeraGrid project's <strong><a href="tgcp/">TGCP Tool</a></strong> 
        simplifies TeraGrid's sophisticated data services for users by giving them a simple file transfer
        command that fills in the details about network protocols and parameters, server names, etc.
        in order to get the fastest transfer based on their request.
      </li>

      <li>
        The <strong><a href="ldr/">Lightweight Data Replicator</a></strong> 
        combines data management tools to create an easy-to-use tool for system managers to create
        replicas of large datasets on multiple servers while keeeping track of where the replicas
        are and ensuring that each replica site has all of the necessary files.
      </li>

      <li>
        <strong><a href="pegasus/">Pegasus</a></strong> 
        combines data management and virtual data tools into a powerful data processing system.
        Pegasus accepts application-level requests for data and uses a metadata catalog, a virtual
        data catalog, a workflow engine, and Grid data and computation services to provide the
        requested data with minimal processing.
      </li>

      <li>
        <strong><a href="striped-gridftp/">Striped GridFTP Servers</a></strong> provide a data 
        transfer capability that can use high-bandwidth wide area network connections (10-30Gbps) 
        to their maximum capacity.
      </li>
    </ul>

<!-- content ENDS here -->

</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
