<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 81

$title = "Globus: Grid Software - RLS";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../data-components.php"><< Components for Grid Data Management</a></p>

<h1 class="first">RLS - Replica Location Service</h1>

<p>
RLS is a distributed system for tracking replicated data. A consistent local state is maintained in Local Replica Catalogs (LRCs) while a collective state with relaxed consistency is maintained in Replica Location Indices (RLIs). Performance features include soft state maintenance of RLI state, compression of state updates, and membership and partitioning information maintenance.
</p>

<p>
Note: RLS was developed by the Globus Alliance and the DataGrid Project and replaces earlier components in the Globus Toolkit 2.x.
</p>

<?
$software = "<a href='http://www-unix.globus.org/toolkit/docs/3.2/rls/'>RLS</a>";
$developer = "The Globus Alliance";
$distros = "Globus Toolkit 3.2<br />NMI-R5";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../data-components.php"><< Components for Grid Data Management</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>