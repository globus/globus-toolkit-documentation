<?php

$title = "Globus - Impact";

$section = "section-2";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">Examples of the Globus Alliance's Impact</h1>

<p>The Globus Alliance and the Globus Toolkit have enabled many exciting new
scientific and business applications. The images here showcase just a few of the
advances that have been helped by Globus technology.</p>

<table>
<tr>
<td><?php include("isabel.inc"); ?></td>
<td><?php include("leadimpact.inc"); ?></td>
</tr>
<tr>
<td><?php include("gravitywaves.inc"); ?></td>
<td><br></td>
</tr>
</table>


</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
