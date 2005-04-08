<?php

$title = "Grid Software";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">

	<h1 class="first">Software Components for Grid Systems And Applications</h1>

    <p>Software is a vital part of Grid projects.  The open source community has 
       produced a wide variety of Grid software components. Understanding the 
       capabilities of each component, the strengths and weaknesses of each, and 
       the types of problems that are currently covered (or not covered) by these 
       components can be a bewildering challenge for new Grid projects.  Moreover, 
       each new Grid project has a unique set of requirements that must be met by 
       a unique combination of software components.</p>

<?php if ($SITE_CONTENT["GLOBUS"]) { ?>
    <p>Globus Alliance members have experience using Grid software components in 
       a variety of ambitious and successful projects.  The <b>Globus Alliance</b> 
       section of this website contains a 
       <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."projects.php"; ?>">list of 
       e-Science/e-Business projects</a> in which our members participate, and the 
       <b>Grid Solutions</b> section describes how we 
       <a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">used Grid software to overcome 
       challenges</a> in these projects.  This section of our website explains
       the role that software plays in Grid projects and describes many of the 
       software tools that we and our partners have used successfully.</p>
<?php } ?> 

<?php if ($SITE_CONTENT["GRIDS"]) { ?>
    <p>GRIDS Center team members have gained experience with using software components in a number 
    of successful Grid projects.  This section of our website provides a description of the role 
    that software plays in Grid projects and descriptions of many of the software tools that GRIDS 
    Center members and our partners have used successfully in ambitious Grid applications.
    You may choose from the following areas.</p>
<?php } ?> 

    

<?php if ($SITE_CONTENT["GLOBUS"]) { ?>
    <blockquote><b><a href="ecology.php">An Ecosystem of Grid Components</a></b> 
    describes the Globus Alliance's general approach to using software components in 
    Grid projects and applications.</blockquote>
    
    <blockquote><b><a href="role-of-gt.php">Role of the Globus Toolkit</a></b> 
    explains the special role that the Globus<sup>&reg;</sup> Toolkit plays in 
    Grid projects and why we use it this way.</b></blockquote>
<?php } ?> 

<?php if ($SITE_CONTENT["GRIDS"]) { ?>
    <blockquote><b><a href="ecology.php">An Ecosystem of Grid Components</a></b> 
    describes the GRIDS Center's general approach to using software components in 
    Grid projects and applications.</blockquote>
<?php } ?> 

    <blockquote><b><a href="security/">Security</a></b> describes a number of useful software 
    tools for meeting the security requirements in Grid systems.</blockquote>
    
    <blockquote><b><a href="monitoring/">Monitoring and Discovery</a></b> describes software 
    components that can provide monitoring and discovery features in Grid systems.</blockquote>
    
    <blockquote><b><a href="computation/">Computation</a></b> describes software tools that can 
    be used to manage computational tasks in Grid applications.</blockquote>
    
    <blockquote><b><a href="data/">Data</a></b> describes software tools that can be used to 
    manage data and datasets in data-intensive applications.</blockquote>
    
    <blockquote><b><a href="collaboration/">Collaboration</a></b> describes software for 
    facilitating and encouraging collaboration in distributed projects.</blockquote>
    
    <blockquote><b><a href="packaging/">Packaging and Distribution</a></b> describes tools 
    for helping to create integrated software distributions for use in Grid projects.</b></blockquote>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
