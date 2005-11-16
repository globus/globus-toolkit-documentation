<?php
$title = "Grid Solutions - The TeraGrid Copy Solution (Resources)";
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

<h1 class="first">TeraGrid Copy Resources</h1>

<p>
The TeraGrid Copy (TGCP) solution builds on components of the Globus Toolkit,
but it also includes components that are not yet part of the Toolkit.  This page 
provides information about where and how you can access the tools used in this 
implementation.
</p>

<table class="boxed">
<tr>
<td class="tablekey">GridFTP</td>
<td>A GridFTP service that supports the striped configuration and its 
    related tools are available in the Globus Toolkit 4.0:<br>
<a href="http://www.globus.org/toolkit/docs/4.0/data/gridftp/">http://www.globus.org/toolkit/docs/4.0/data/gridftp/</a></td>
</tr>
<tr>
<td class="tablekey">Reliable File Transfer (RFT) Service</td>
<td>The RFT service and related client tools are available in the Globus Toolkit 4.0:
<a href="http://www.globus.org/toolkit/docs/4.0/data/rft/">http://www.globus.org/toolkit/docs/4.0/data/rft/</a></td>
</tr>
<tr>
<td class="tablekey">TGCP</td>    
<td>The TGCP script is stored in the TeraGrid's CVS software repository, which is
not currently accessible to the public. It can be made available on request.
Contact <a href="mailto:help@teragrid.org">help@teragrid.org</a> to inquire about availability.</td>
</tr>
</table>

<p></p>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
