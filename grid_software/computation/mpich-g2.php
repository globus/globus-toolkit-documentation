<?php
$title = "Grid Ecosystem - MPICH-G2";
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


<h1 class="first">MPICH-G2</h1>

<p>
<img src='MPICH-G2.jpg' style='float: right; margin-left: 0.3em;'>
MPICH-G2 is a Grid-enabled implementation of the popular MPI (Message Passing Interface) 
framework. MPI is especially useful for problems that can be broken up into several
processes running in parallel, with information exchanged between the processes as needed.
The MPI programming environment handles the details of starting and shutting down 
processes, coordinating execution (supporting barriers and other IPC metaphors), and 
passing data between the processes.
</p>

<p>
MPICH-G2 uses Grid capabilities for starting processes on remote systems, for staging
executables and data to remote systems, and for security. MPICH-G2 also selects 
the appropriate communication method (high-performance local interconnect, Internet
protocol, etc.) depending on whether messages are being passed between local or remote
systems.
</p>

<p>
MPICH-G2 implements the MPI v1.1 specification.
</p>

<?
$software = "<a href='http://www3.niu.edu/mpi/'>MPICH-G2</a>";
$developer = "<a href='http://www.niu.edu/'>Northern Illinois University</a> and 
              <a href='http://www.mcs.anl.gov/'>Argonne National Laboratory</a>";
$distros = "Download from the <a href='http://www-unix.mcs.anl.gov/mpi/mpich/'>MPICH website</a>";
$contact = "<a href='mailto:mpich-g@globus.org'>mpich-g@globus.org</a><br>
            (must be <a href='http://dev.globus.org/wiki/Mailing_Lists#Subscribing_to_a_mailing_list'>subscribed</a> before posting to the list)";


// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
