<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/packaging-tools-and-dist.html

$title = "Grid Ecosystem - Packaging Tools and Distribution";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<h1 class="first">Tools for Software Packaging and Distribution</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#tools">Distribution and Packaging Tools</a></li>
<li><a href="#distributions">Integrated Distributions</a></li>
</ol>

<p>As this and other sections of this website demonstrate, the Grid Ecosystem currently includes a large number of components,
each of which provides fairly narrow capabilities. Building a useful Grid application or system for
end users currently requires pulling together many of these components, adding another set of
application-specific components, and deploying and configuring everything in a specific way on a
set of physical resources to produce the desired results.</p>

<p>
The ability to "roll up" a set of components, deploy them on a set of resources and configure them
in a specific way is critical to the success of nearly every Grid project. In the early stages of
Grid projects, system developers typically start with pre-existing distributions that include many
Grid components, like the "Integrated Distributions" listed below. As projects transition to 
the "production" or "operation and maintenance" phase, however, system operators typically insist
on deploying and supporting the bare minimum set of components required by the applications in
use in order to keep support costs low. In these cases, the distribution and packaging tools
listed below (designed to help produce customized distributions) can be very helpful.
</p>

<p><strong><a name="portals" class="title">Distribution and Packaging Tools</a></strong></p>

<p>
These tools support getting software distributed and installed uniformly throughout a broad collaboration. They help create integrated distributions that work on a wide variety of systems.
</p>

<ul>
<li><strong><a href='packaging/pacman.php'>PACMAN</a></strong> - A tool for producing consistent software deployments on many systems</li>
<li><strong><a href='packaging/gpt.php'>Grid Packaging Tools (GPT)</a></strong> - A portable software packaging system</li>
</ul>

<p><strong><a name="distributions" class="title">Integrated Distributions</a></strong></p>

<p>These are integrated distributions of common Grid software designed to meet the needs of various
communities.</p>

<ul>
<li><strong><a href='packaging/nmi.php'>NSF Middleware Initiative (NMI)</a></strong> - An integrated distribution of reusable Grid software used in NSF's Cyberinfrastructure programs</li>
<!-- <li><strong><a href='packaging/npackage.php'>NPACKage</a></strong> - A custom distribution for NPACI sites</li> -->
<li><strong><a href='packaging/rocks.php'>Rocks</a></strong> - An all-in-one management system and software suite for Linux clusters</li>
<li><strong><a href='packaging/vdt.php'>Virtual Data Toolkit (VDT)</a></strong> - A software distribution focusing on the needs of the distributed Astronomy and Physics communities</li>
</ul>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
