<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/collaboration-components.html

$title = "Grid Ecosystem - Collaboration";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<h1 class="first">Components for Grid Collaboration</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#portals">Components for Building Web Portals</a></li>
<li><a href="#meetingspaces">Components for High-function Virtual Meeting Spaces</a></li>
</ol>

<p>
The Grid has been developed to make it easier to develop applications and systems that
support collaboration. In that sense, every component in the Grid Ecosystem is a tool
for facilitating collaboration. Most Grid components, however, are designed to solve
system-level problems like security, data access, computation, etc. as opposed to being
focused on user-level issues like user interfaces, person-to-person communication (chat,
email, message boards, teleconferencing), and community-building (document sharing, 
announcement boards).
</p>

<p>
Fortunately, there are components available that are useful for building these
user-level capabilities into applications.
</p>

<p><strong><a name="portals" class="title">Components for Building Web Portals</a></strong></p>

<p>These components make it easier to get started building web browser interfaces to sophisticated
Grid applications.</p>

<ul>
<li><strong><a href='collaboration/chef.php'>Sakai</a></strong> - A "starter kit" for building
web browser-accessible systems ("portals") that support distributed learning and collaboration</li>
<li><strong><a href='collaboration/ogce.php'>Open Grid Collaboration Environment (OGCE)</a></strong> - An extension to CHEF/Sakai that 
provides additional services and a quick start to building Grid-enabled portals</li>
</ul>

<p><strong><a name="meetingspaces" class="title">High-function Virtual Meeting Spaces</a></strong></p>

<ul>
<li><strong><a href='collaboration/accessgrid.php'>Access Grid</a></strong> - Seamless group-to-group virtual
collaboration space for distributed teams</li>
</ul>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
