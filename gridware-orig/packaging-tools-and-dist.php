<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/packaging-tools-and-dist.html

$title = "Globus: Grid Software - Packaging Tools and Distribution";
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

<p>[insert 1-2 para overview]</p>

<p><strong><a name="portals" class="title">Distribution and Packaging Tools</a></strong></p>

<p>
These tools support getting software distributed and installed uniformly throughout a broad collaboration. They help create integrated distributions that work on a wide variety of systems.
</p>

<ul>
<li><strong><a href='packaging/pacman.php'>PACMAN</a></strong> - A package manager.</li>
<li><strong><a href='packaging/gpt.php'>Grid Packaging Technology (GPT)</a></strong> - A package system that adds metadata to tar.gz files.</li>
</ul>

<p><strong><a name="distributions" class="title">Integrated Distributions</a></strong></p>

<p>These are customized distributions of common Grid software.</p>

<ul>
<li><strong><a href='packaging/nsfmiddleware.php'>NSF Middleware Initiative</a></strong> - A value-added collection of Grid software sponsored by the NSF.</li>
<li><strong><a href='packaging/npackage.php'>NPACKage</a></strong> - A custom distribution for NPACI sites.</li>
<li><strong><a href='packaging/npaci.php'>NPACI Rocks</a></strong> - A complete distribution for Linux clusters.</li>
<li><strong><a href='packaging/vdt.php'>Virtual Data Toolkit</a></strong> - A Grid middleware distribution focusing on the needs of the GriPhyN and iVDGL communities.</li>
</ul>

</div>
1
<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>