<?php
$title = "Grid Ecosystem - Ninf-G";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">


<h1 class="first">Ninf-G</h1>

<p>
<img src='Ninf-G.jpg' style='float: right; margin-left: 0.3em;'>
Ninf-G is a Grid-enabled RPC (remote procedure call) implementation that allows existing 
libraries to be used as RPC calls rather than local calls.
</p>

<p>
Given a known Application Programmer Interface (API), Ninf-G can interpose itself between 
the library and the calling application, allowing the library code to be run on a remote 
system, potentially in parallel with other systems, while the application runs locally.
Neither the library nor the calling application need to be changed.  Ninf-G can even be
used with precompiled libraries for which the source code is not available.
</p>

<p>
Ninf-G is most useful in cases where the library provides a computationally-intensive
service where the application would benefit if the computation were performed on a 
remote system.  Useful scenarios include: when several computations are needed and can 
be performed in parallel, or when the user interface allows the user to do other things
while the computation is performed. In both of these cases, the calling application
would be modified to invoke the library call (using Ninf-G) in a separate process or
thread so that the application can proceed while the library call is executed remotely.
</p>

<?
$software = "<a href='http://ninf.apgrid.org/'>Ninf-G</a>";
$developer = "<a href='http://www.aist.go.jp/index_en.html'>National Institute of Advanced Industrial Science and Technology (Japan)</a>";
$distros = "<a href='http://ninf.apgrid.org/packages/welcome.shtml'>Download from the Condor Project</a>";
$contact = "<a href='mailto:ninf@apgrid.org'>ninf@apgrid.org</a>";


// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
