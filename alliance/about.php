<?php

$title = "Globus: About the Globus Alliance";
$section = "section-2";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>
</div>
-->

<div id="main">

	<h1 class="first">About the Globus Alliance</h1>
<p>
The Globus Alliance conducts research and development to develop the technology,
standards, and systems that form the Grid: a computing architecture that 
enables distributed collaboration for business, science, engineering, and
other human enterprises. A Grid lets people share computing power, databases, and other on-line tools securely across corporate,    
institutional, and geographic boundaries without sacrificing local autonomy.</p>

<p>Based at <a href="http://www.anl.gov/">Argonne National Laboratory</a>,
the University of Southern California's <a href="http://www.isi.edu/">Information 
Sciences Institute</a>,  the <a href="http://www.uchicago.edu/">University of Chicago</a>, 
the <a href="http://www.ed.ac.uk/">University of Edinburgh</a>, the Swedish 
<a href="http://www.pdc.kth.se/">Center for Parallel Computers</a>,  and the
<a href="http://www.ncsa.uiuc.edu/">National Center for Supercomputing Applications 
(NCSA)</a>, the Alliance produces open-source software that is central to science 
and engineering activities totalling nearly a half-billion dollars internationally 
and is the substrate for significant Grid products offered by leading IT companies.  
The <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."affiliates.php"; ?>">Globus Alliance 
Affiliates</a> program recognizes the participation of other important 
organizations as contributors or as users.</p>

<p>The <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Globus Toolkit</a><sup>&reg;</sup> 
    includes software services and libraries for distributed security, resource management,
    monitoring and discovery, and data management. Its latest version, GT4, includes
    components for building systems that follow the 
    <a href="<?=$SITE_PATHS["WEB_ROOT"]."ogsa/"; ?>">Open Grid Services Architecture (OGSA)</a> 
    framework defined by the <a href="http://www.gridforum.org/">Global Grid Forum (GGF)</a>, 
    of which the Globus Alliance is a leading member. GT4's components and software 
    development tools also comply with the 
    <a href="<?=$SITE_PATHS["WEB_ROOT"]."wsrf/"; ?>">Web Services Resource Framework 
    (WSRF)</a>, a set of standards in development in 
    <a href="http://www.oasis-open.org/">OASIS</a>.</p>

    <p>Just as the Web has 
    revolutionized access to information,
    the Globus Alliance aims to achieve a similar result in computation. 
    New types of applications will be possible when accessing supercomputers, live satellite imagery, mass storage and other on-line resources becomes as straightforward as using the Web. That is the promise of Grid computing.</p>

</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
