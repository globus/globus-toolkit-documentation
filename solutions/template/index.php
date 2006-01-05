<?php
$title = "Grid Solutions - [name of solution]";
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

<h1 class="first">[name of solution]</h1>

<div style="float: right; margin-left: 10px; margin-bottom: 10px;">
<img border=0 src="solutions-image-sample.gif" width=400 height=300>
</div>
<p>
[Write a brief description of what the science project is doing (about a paragraph).]
</p>

<h2>The Challenge</h2>

<p>
[Include information about the specific challenge in the science project's work that is motivating this solution (what was limiting them from doing what they wanted to do).]</p>

<!-- commented out as it's a bit clunky for demonstration purposes
<div id="solutions-sidebar" style="float: right; margin-right: 1em">
<h2>More Information</h2>
<ul>
<li><a href="architecture.php">Architecture of [the solution]</a></li>
<li><a href="resources.php">Software availability</a></li>
<li><a href="deployment.php">Deployment details</a></li>
<li><a href="#">[helpful external links]</a></li>
</ul>
</div>
 -->

<h2>The Solution</h2>

<p>
[Write about how this solution meets the challenge.]
</p>

<h2>Results</h2>

<p>
[When available, provide preliminary results from the solution's use in the science project.]
</p>

<h2>Detailed Information</h2>

<p>The following links provide more detail about [the solution].</p>

<p>[Note: The detailed information provided on related pages might be different
  depending on the solution and the information that's readily available. In
  some cases, deployment details aren't very important but there might be implementation
  issues that turned out to be interesting. Or perhaps there are related papers,
  etc.]</p>

<ul>
<li><a href="architecture.php">Architecture of [the solution - click for template]</a></li>
<li><a href="resources.php">Software availability [click for template]</a></li>
<li><a href="deployment.php">Deployment details [click for template]</a></li>
<li>[include any helpful external links]</li>

</ul>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
