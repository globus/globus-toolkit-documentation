<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 68

$title = "Grid Ecosystem - NetSolve/GridSolve";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../computation-components.php"><< Components for Grid Computation</a></p>

<h1 class="first">NetSolve/GridSolve</h1>

<p>
<img src='NETSOLVE-1.jpg' style='float: right; margin-left: 0.3em;'>
NetSolve/GridSolve is an RPC-based library for executing solver code on Grid resources. It uses a client/agent/server architecture, with a very simple client model. It is integrated with a wide variety of development environments (MATLAB, Octave, C, FORTRAN, etc.) and supports many types of compute resources and authentication systems. The server runs in user space, and the agent handles Grid complexity.
</p>

<?
$software = "<a href='http://icl.cs.utk.edu/netsolve/'>NetSolve/GridSolve</a>";
$developer = "<a href='http://icl.cs.utk.edu/'>Innovative Computing Laboratory</a>";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR6/AllItems.aspx'>NMI-R6</a><br />
          <a href='http://icl.cs.utk.edu/netsolve/'>Download from ICL</a>";
$contact = "<a href='mailto:netsolve@cs.utk.edu'>netsolve@cs.utk.edu</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../computation-components.php"><< Components for Grid Computation</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
