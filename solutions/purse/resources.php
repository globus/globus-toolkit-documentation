<?php
$title = "Grid Solutions - Registering Users for ESG (Resources)";
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

<h1 class="first">Registering Users for ESG - Resources</h1>

<p>
PURSE builds on components of the Globus Toolkit, but it also includes 
components that are not yet part of the Toolkit.  This page provides information 
about where and how you can access the tools used in this implementation.
</p>

<p>
If you intend to try PURSE out or reuse it in your project, we encourage you
to use the integrated package available below. This will install 3.2 versions
of the Globus Toolkit components rather than 4.0 versions. The 4.0 versions of
Simple CA and Myproxy should work just as well but PURSE has not yet been tested
with them.
</p>

<table class="boxed">
<tr>
<td class="tablekey">Simple CA</td>
<td>Simple CA is available in the Globus Toolkit 4.0:<br>
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/security/simpleca/"; ?>">http://www.globus.org/toolkit/docs/4.0/security/simpleca/</a></td>
</tr>
<tr>
<td class="tablekey">MyProxy</td>
<td>MyProxy is available in the Globus Toolkit 4.0:<br>
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/security/myproxy/"; ?>">http://www.globus.org/toolkit/docs/4.0/security/myproxy/</a></td>
</tr>
<tr>
<td class="tablekey">PURSE</td>    
<td>PURSE is available as an integrated package from the NSF Middleware 
    Initiative's GRIDS Center:<br>
<a href="http://www.grids-center.org/solutions/purse/">http://www.grids-center.org/solutions/purse/</a></td>
</tr>
</table>

<p></p>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
