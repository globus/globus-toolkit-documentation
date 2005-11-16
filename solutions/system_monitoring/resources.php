<?php
$title = "Grid Solutions - ESG Monitoring System (Resources)";
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

<h1 class="first">ESG Monitoring System Resources</h1>

<p>
The Earth System Grid Monitoring System builds on components of the Globus Toolkit,
but it also includes components that are not yet part of the Toolkit.  This page 
provides information about where and how you can access the tools used in this 
implementation.
</p>

<table class="boxed">
<tr>
<td class="tablekey">Index Service</td>
<td>An OGSI Index Service is available in the Globus Toolkit 3.2:<br>
<a href="http://www-unix.globus.org/toolkit/downloads/3.2/index.html">http://www-unix.globus.org/toolkit/downloads/3.2/index.html</a><br>
A WSRF Index Service is available in the Globus Toolkit 4.0:<br>
<a href="http://www-unix.globus.org/toolkit/docs/4.0/info/index/">http://www-unix.globus.org/toolkit/docs/4.0/info/index/</a></td>
</tr>
<tr>
<td class="tablekey">Web Service Data Browser</td>
<td>Developed by Arslan Javed &lt;<a href="mailto:ajaved@isi.edu">ajaved@isi.edu</a>&gt;<br>
Available (OGSI) from the Grid Technology Repository:<br>
<a href="http://gtr.globus.org/article.php?story=20030723143444410">http://gtr.globus.org/article.php?story=20030723143444410</a><br>
Available (WSRF) in the Globus Toolkit 4.0:<br>
<a href="">http://www-unix.globus.org/toolkit/docs/4.0/info/webmds/</a>http://www-unix.globus.org/toolkit/docs/4.0/info/webmds/</td>
</tr>
<tr>
<td class="tablekey">Archive Service</td>    
<td>Developed by June Sup Lee &lt;<a href="mailto:june@isi.edu">june@isi.edu</a>&gt;<br>
Currently available (OGSI) through the Globus Toolkit CVS Repository</td>
</tr>
<tr>
<td class="tablekey">Trigger Service</td>     
<td>Developed by Shishir Bharathi &lt;<a href="mailto:shishir@isi.edu">shishir@isi.edu</a>&gt;<br>
Available (OGSI) through the Globus Toolkit CVS Repsitory<br>
Available (WSRF) in Globus Toolkit 4.0:<br>
<a href="http://www-unix.globus.org/toolkit/docs/4.0/info/trigger/">http://www-unix.globus.org/toolkit/docs/4.0/info/trigger/</a></td>
</tr>
</table>

<p></p>

<p>
&lt;&lt; <a href="./">Return to ESG Monitoring System Overview</a>
</p>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
