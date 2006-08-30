<?php
$title = "Globus: OGSA - The Open Grid Services Architecture";
$section = "section-1";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="main">
 
    <h1 class="first">Towards Open Grid Services Architecture</h1>
    
    <p>The Open Grid Services Architecture (OGSA) represents an evolution towards a
    Grid system architecture based on Web services concepts and technologies.</p>

    <p>Since the release of the Globus Toolkit 3.0, the Globus Project
    offers an open source collection of Grid services that follow OGSA
    architectural principles. The Globus Toolkit also offers a development
    environment for producing new Grid services that follow OGSA principles.</p>

    <p>OGSA is a product of the Grid community at large, and it has a major focal
    point in the Global Grid Forum (GGF). Members of the Globus Alliance have 
    made significant contributions to the development of OGSA. This page provides 
    information on the status of OGSA work.  As always, we encourage and welcome 
    input, feedback, and collaboration.</p>

    <h2>Information on OGSA</h2>

    <p>For background and detailed information about OGSA, please use the following
    references.</p>

    <ul>
      <li>"<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/papers/ogsa.pdf"; ?>">The 
          Physiology of the Grid</a>", a research paper that 
          proposed OGSA and laid out initial principles for its development</li>
      
      <li>"<a href="http://www.gridforum.org/documents/GWD-I-E/GFD-I.030.pdf">The Open 
          Grid Services Architecture, Version 1.0</a>", a GGF informational document</li>

      <li>"<a href="http://www.gridforum.org/documents/GWD-I-E/GFD-I.029v2.pdf">OGSA 
          Tier 1 Use Case Draft Document</a>", another related GGF document that 
          describes a number of use cases that have informed the development of OGSA</li>

      <li>A two-part introduction on ogsa and developing grid computing
          applications using the Globus Toolkit can be found on the IBM developerworks
          website: <a href="http://www-106.ibm.com/developerworks/library/gr-grid1/">part
          i</a> and <a href="http://www-106.ibm.com/developerworks/grid/library/gr-grid2/">part
          ii</a>.</li>
    </ul>

    <h2>WS-Resource Framework (WSRF)</h2>

    <p><a href="<?=$SITE_PATHS["WEB_ROOT"]."wsrf/"; ?>">WSRF</a> is a set of Web 
    service specifications being developed by the OASIS organization. Taken together 
    and with the WS-Notification (WSN) specification, these specifications describe 
    how to implement OGSA capabilities using Web services. The Globus Toolkit 4.0 
    and later versions provide an open source WSRF development kit and a set of WSRF 
    services.</p>

    <h2>Standardization</h2>

    <p>Efforts are underway in the <a href="http://www.gridforum.org">Global
    Grid Forum (GGF)</a> and <a href="http://www.oasis-open.org/">OASIS</a> to document 
    "best practices", implementation guidelines, and standards for Grid technologies. 
    OGSA-related standards teams include:</p>

    <p>GGF: <a href="http://forge.gridforum.org/projects/ogsa-wg">The Open Grid Services
    Architecture Working Group (OGSA-WG)</a></p>

    <p>GGF: <a href="https://forge.gridforum.org/projects/dais-wg">Database Access
    and Integration Services Working Group (DAIS-WG)</a></p>

    <p>OASIS: <a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=wsrf">WSRF 
       Technical Committee</a></p>

    <p>Since OGSA builds on Web services, it incorporates specifications defined 
    within the <a href="http://www.w3c.org">W3C</a>, <a href="http://www.ietf.org">IETF</a>,
    <a href="http://www.oasis-open.org">OASIS</a>, and other standards
    organizations.</p>

    <h2>Support</h2>

    <p>The development of OGSA specifications and work on OGSA implementations in
    the Globus Toolkit have been generously supported by IBM and the U.S. Department 
    of Energy, the National Science Foundation, and NASA's Information Power Grid 
    program.</p>

    <h2>Implementation Status</h2>

    <p>The first prototype Grid service implementation was demonstrated on January 
    29, 2002, at a Globus Toolkit tutorial held at Argonne National Laboratory.
    Since then, the Globus Toolkit 3.0 and 3.2 offered an OGSA implementation based
    on the Open Grid Services Infrastructure (OGSI), a precurser to WSRF. Currently, the 
    <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Globus Toolkit 4.0</a>
    provides a set of OGSA capabilities based on WSRF. The
    Globus Toolkit 4.0 is an open source, community-driven software project, and it
    can be 
    <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."downloads/4.0/"; ?>">downloaded</a> 
    and used under the terms of a liberal open source license.</p>


</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
