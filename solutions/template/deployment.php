<?php
$title = "Grid Solutions - [name of solution] (Deployment Details)";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">[name of solution] (Deployment Details)</h1>

<p>[This is the page where you can put the finer details of how this solution was deployed and implemented 
so that other users can use the solution for their own needs. The following is a rough outline to get you
started but you should tailor it to the specific solution.]</p>


<h2>Software and Service Deployment</h2>

<p>[Describe software and services used. Include download links.]</p>

<h2>Configuration Issues</h2>

<p>[Make sure you include any configuration issues for each software/tool.]</p>

<h2>Implementation Details</h2>

<p>[Provide any other information necessary to get the solution up and running.]</p>

</div>

<? include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
