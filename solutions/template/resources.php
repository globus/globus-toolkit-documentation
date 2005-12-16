<?php
$title = "Grid Solutions - [name of solution] (Resources)";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">[name of solution] (Resources)</h1>

<p>
[Describe the resources that make up the solution.]
</p>

<table class="boxed">
<tr>
<td class="tablekey">[name of software]</td>
<td>[Description of software]:<br>
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/security/"; ?>">[link to software]</a></td>
</tr>
<tr>
<td class="tablekey">[name of software]</td>
<td>[Description of software]:<br>
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/data/gridftp/"; ?>">[link to software]</a></td>
</tr>
<tr>
<td class="tablekey">[name of software]</td>
<td>[Description of software]:
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/data/rls/"; ?>">[link to software]</a></td>
</tr>
</table>

<p></p>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
