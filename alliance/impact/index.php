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
<td width="50%"><?php include("arterialtree.inc"); ?></td>
<td width="50%"><?php include("leadimpact.inc"); ?></td>
</tr>
<tr>
<td width="50%"><?php include("scec-1.inc"); ?></td>
<td width="50%"><?php include("ag-fusion.inc"); ?></td>
</tr>
<tr>
<td width="50%"><?php include("scec-2.inc"); ?></td>
<td width="50%"><?php include("isabel.inc"); ?></td>
</tr>
<tr>
<td width="50%"><?php include("gravitywaves.inc"); ?></td>
<td width="50%"><?php include("sea-climate.inc"); ?></td>
</tr>
</table>


</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
