<?php

// 2004-10-13, robinett: changed links to *.php

$title = "Globus: Grid Software Used By The Globus Alliance";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">
<!-- content STARTS here -->

	<h1 class="first">Software Components for Grid Systems And Applications</h1>

<p>Software is a vital part of Grid projects, and the Globus Alliance uses a 
    variety of software tools in the projects that we support. Every new Grid 
    project has a unique set of requirements that must be met by a unique 
    combination of software components.</p>
    
    <p>This section of our website provides a description of the role that software plays in
    Grid projects and descriptions of many of the software tools that the Globus Alliance has
    used successfully with our colleagues in ambitious Grid applications.
    You may choose from the following areas, which 
    are reflected in the navigational submenu to the left.</p>

    <blockquote><b><a href="ecology.php">Overview</a></b> describes the Globus Alliance's general approach to using software
    components in Grid projects and applications.</blockquote>
    
    <blockquote><b><a href="role-of-gt.php">Role of the Globus Toolkit</a></b> explains the special role that the Globus Toolkit<sup>&reg;</sup>
    plays in Grid projects and why the Globus Alliance uses it in this way.</b></blockquote>
    
    <blockquote><b><a href="security-components.php">Security</a></b> describes a number of useful software tools for meeting the
    security requirements in Grid systems.</blockquote>
    
    <blockquote><b><a href="monitoring-components.php">Monitoring and Discovery</a></b> describes software components that can provide
    monitoring and discovery features in Grid systems.</blockquote>
    
    <blockquote><b><a href="computation-components.php">Computation</a></b> describes software tools that can be used to manage 
    computational tasks in Grid applications.</blockquote>
    
    <blockquote><b><a href="data-components.php">Data</a></b> describes software tools that can be used to manage data and
    datasets in data-intensive applications.</blockquote>
    
    <blockquote><b><a href="collaboration-components.php">Collaboration</a></b> describes software for facilitating and encouraging
    collaboration in distributed projects.</blockquote>
    
    <blockquote><b><a href="packaging-tools-and-dist.php">Packaging and Distribution</a></b> describes tools for helping to create integrated
    software distributions for use in Grid projects.</b></blockquote>

<!-- content ENDS here -->

</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
