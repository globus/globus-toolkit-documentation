<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 78

$title = "Grid Ecosystem - OGSA-DAI";
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


<h1 class="first">OGSA-DAI</h1>

<p>
OGSA-DAI provides an OGSA interface for accessing XML and relational data stores and implements recent versions of the 
GGF DAIS WG standard.
</p>

<p>
<img src="OGSA-DAI-1.gif">
</p>

<p>
OGSA-DAI provides a service group registry that can be used to identify database services that offer
specific data tables. This is useful when databases are replicated or when the particulars of where
data is located change on a dynamic basis.
</p>

<p>
Once a specific database service is identified, an OGSA-DAI data service factory can be used to establish
a database service instance that the client can then connect to directly to perform operations on the data 
of interest.  The data service factory ensures that the database service itself is well managed. The database service
then receives and responds directly to client transactions.
</p>

<p>
All of the above operations are conducted using Grid authentication.
</p>

<?
$software = "<a href='http://www.ogsadai.org.uk'>OGSA-DAI</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a> &amp; 
              <a href='http://www.rcuk.ac.uk/escience/'>UK eScience Grid Core Project</a>";
$distros = "<a href='http://www-unix.globus.org/toolkit/'>Globus Toolkit 3.2</a><br>
            <a href='http://www.ogsadai.org.uk/releases/ogsadai.php'>Download from OGSA-DAI</a>";
$contact = "<a href='mailto:support@ogsadai.org.uk'>support@ogsadai.org.uk</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
