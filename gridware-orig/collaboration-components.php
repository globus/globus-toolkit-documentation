<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/collaboration-components.html

$title = "Globus: Grid Software - Collaboration";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<h1 class="first">Componenets for Grid Collaboration</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#portals">Components for Building Web Portals</a></li>
<li><a href="#meetingspaces">Components for High-function Virtual Meeting Spaces</a></li>
</ol>

<p>[insert 1-2 para overview]</p>

<p><strong><a name="portals" class="title">Components for Building Web Portals</a></strong></p>

<p>Tools for building web interfaces that provide access to system/application capabilities.</p>

<ul>
<li><strong><a href='collaboration/chef.php'>CHEF/Sakai</a></strong> - A flexible environment for supporting distributed learning and collaborative work.</li>
<li><strong><a href='collaboration/ogce.php'>OGCE</a></strong> - An extension to CHEF/Sakai that provides additional services and a quick start to building Grid-enabled portals.</li>
</ul>

<p><strong><a name="meetingspaces" class="title">Components for High-function Virtual Meeting Spaces</a></strong></p>

<p>Tools for facilitating collaborative work in real-time with lots of tools.</p>

<ul>
<li><strong><a href='collaboration/accessgrid.php'>Access Grid</a></strong> - Seamless group-to-group collaboration space for gorups that are not co-located.</li>
</ul>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>