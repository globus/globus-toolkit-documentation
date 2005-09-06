<?php
$title = "Grid Ecosystem - DataCutter";
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


<h1 class="first">DataCutter</h1>

<p>
DataCutter provides a development and deployment framework for establishing data
"filter" services that operate on data "streams" between storage systems and user
applications. The filter services modify the data in the stream by performing
processing on it, resulting in a transformed stream that is presumably closer to
what the application needs. Typical use cases include "segmenting" data (removing
items that are not needed by the client) and transforming data using high-performance
computing resources located near the data (or between the data and the user).
</p>

<p>
DataCutter can use other Grid services.  For example, it can use GSI to authenticate
and/or encrypt data streams, GRAM to execute filter processes on high-performance
compute resources, and MDS to monitor and discover resources on which filters can be
run.
</p>

<?
$software = "<a href='http://bmi.osu.edu/areas_and_projects/datacutter.cfm'>DataCutter</a>";
$developer = "<a href='http://bmi.osu.edu/'>Ohio State University Dept. of Biomedical Informatics</a>";
$distros = "<a href='http://collab.nsf-middleware.org/Lists/NMIR7/AllItems.aspx'>NMI-R7</a>";
$contact = "(614) 292-4778";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
