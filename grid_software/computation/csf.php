<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 70

$title = "Grid Ecosystem - Platform CSF";
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


<h1 class="first">CSF</h1>

<p>
<img src='CSF4b.gif' width='432' height='252' style='float: right; margin-left: 0.3em;'>
CSF ("Community Scheduler Framework") is an open source implementation of an OGSA-based metascheduler. It supports the 
emerging WS-Agreement specification and the Globus Toolkit's 
<a href="gram.php">GRAM service</a>. It also uses the 
<a href="../monitoring/ws-core.php">WS Core monitoring mechanisms</a> and the Globus 
<a href="../monitoring/index-service.php">Index Service</a>. CSF fills in gaps in the 
existing resource management picture and it is integrated with Platform LSF and Platform 
Multicluster.
</p>

<p>
The CSF open source project is available on SourceForge (an open source development 
project hosting environment), is included in Platform Globus Toolkit (a 
commercially-supported version of the Globus Toolkit), and is included in the 
Globus Toolkit 4.0 release.
</p>

<p>
The 4.0 version of CSF uses WSRF interfaces and supports the Globus Toolkit 4.0's 
WS GRAM service. It also includes support for Pre-WS GRAM.
For systems that use LSF resource managers, a separate service is provided
that runs alongside the GRAM service to coordinate reservations.</p>

<p><em><small>Image provided by the CSF4 development team at Jilin University.</small></em></p>

<?
$software = "<a href='http://sourceforge.net/projects/gcsf/'>CSF</a>";
$developer = "<a href='http://www.platform.com/'>Platform Computing</a>, <a href='http://en.jlu.edu.cn/'>Jilin University (China)</a>";
$distros = "<a href='http://www.platform.com/products/Globus/'>Platform Globus Toolkit</a><br />
<a href='http://sourceforge.net/projects/gcsf/'>Download from SourceForge.net</a><br>
<a href='http://www.globus.org/toolkit/'>Globus Toolkit 4.0</a>";
$contact = "<a href='mailto:gcsf-discuss@sourceforge.net'>gcsf-discuss@sourceforge.net</a><br />(must be <a href='http://lists.sourceforge.net/lists/listinfo/gcsf-discuss'>subscribed</a> before posting)";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
