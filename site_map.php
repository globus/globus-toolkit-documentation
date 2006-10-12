<?php

$title = "Globus: Site Map";

$section = "section-1";

include_once( "include/local.inc" );

include_once( $SITE_PATHS["SERV_INC"].'header.inc' );

?>



<div id="main">



 <h1 class="first">Site Map</h1>

   

 <p>This page list all of the major sections of the Globus website and their contents.

    There is also a <a href="site_index.php">Site Index</a> page that is 

    organized in alphabetical order.  Please send suggestions for additions or 

    corrections to <a href="mailto:webmaster@globus.org">webmaster@globus.org</a>.</p>



 <p><b>Links available on all pages:</b><br>

 <a href="<?=$SITE_PATHS["WEB_ROOT"]."contacts.php"; ?>">Contact Us</a> |

 <a href="<?=$SITE_PATHS["WEB_ROOT"]."faq.php"; ?>">FAQ</a> |

 <a href="<?=$SITE_PATHS["WEB_ROOT"]; ?>">Home</a> |

 <a href="<?=$SITE_PATHS["WEB_ROOT"]."site_map.php"; ?>">Site Map</a>

 </p>

 



<table>

<tr>

<td width="25%"><h2><a href="<?=$SITE_PATHS["WEB_ALLIANCE"]; ?>">Globus Alliance</a></h2>



<p><a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."about.php"; ?>">About the Globus Alliance</a></p>



<p><b>People and Organizations:</b><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."affiliates.php"; ?>">Academic Affiliates</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."projects.php"; ?>">e-Science/e-Business Projects</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."team/alumni.php"; ?>">Globus Alumni</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."team/"; ?>">Globus Team</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."employment/"; ?>">Job Opportunities</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."sponsors.php"; ?>">Sponsors</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."logos/"; ?>">Using Our Logos</a>

</p>



<p><b>Publications:</b><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/books/"; ?>">Books</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/"; ?>">Globus Toolkit Documentation</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/papers.php"; ?>">Research Papers</a>

</p>



<p><b>News and Events:</b><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."impact/"; ?>">Impact of Our Work</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."events/"; ?>">Meetings and Events</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."events/archive.php"; ?>">Meetings and Events Archive</a><br>

<a href="<?=$SITE_PATHS["WEB_ROOT"]."news.html"; ?>">News Archive</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."news/"; ?>">Older News Archive</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."news/kit.php"; ?>">Press Kit</a>

</p>

</td>



<td width="25%"><h2><a href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Globus Toolkit</a></h2>



<p><a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."about.html"; ?>">About the Globus Toolkit</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."news.html"; ?>">Archive of Globus Toolkit News</a>

</p>



<p><b>About:</b><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."citations.html"; ?>">How do I cite Globus?</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."success_stories.html"; ?>">Success Stories</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."about.html"; ?>">What is the Globus Toolkit?</a>

</p>



<p><b>Who's Involved:</b><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."contributors.html"; ?>">Contributors</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."team/"; ?>">Globus Toolkit Team</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."contributions.html"; ?>">How can I contribute to the Globus Toolkit?</a><br>

<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."sponsors.php"; ?>">Sponsors</a>

</p>



<p><b>Downloads:</b><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."advisories.html"; ?>">Advisories</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/development/dev_tools.html"; ?>">CVS & Developer tools</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."downloads/development/"; ?>">Development Releases</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."downloads/4.0/"; ?>">Latest Stable Release: 4.0</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."legal/"; ?>">Licenses</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."quality_assurance.html"; ?>">Quality Assurance</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."tools/"; ?>">Related Software</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."downloads/"; ?>">Software Archive</a>

</p>



<p><b>Documentation:</b><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/development/"; ?>">Development Documentation</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/"; ?>">Documentation Archive</a><br>

<a href="http://gdp.globus.org/">Globus Community Documentation</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/"; ?>">Latest Stable Release: 4.0</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."presentations/"; ?>">Presentations & Tutorials</a>

</p>



<p><b>Support:</b><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."bugzilla.html"; ?>">Bugzilla</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."support.html#mailinglists"; ?>">Mailing lists</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."support.html"; ?>">Support overview</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."support.html#training"; ?>">Training</a>

</p>



<p><b>Components:</b><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."common/"; ?>">Common Runtime Components</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."data/"; ?>">Data Management</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."gram/"; ?>">Execution Management</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."mds/"; ?>">Information Services</a><br>

<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."security/"; ?>">Security</a>

</p>

</td>



<td width="25%"><h2><a href="<?=$SITE_PATHS["WEB_SOFTWARE"]; ?>">Grid Software</a></h2>



<p>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."ecology.php"; ?>">An Ecosystem of Grid Components</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."role-of-gt.php"; ?>">Role of the Globus Toolkit</a>

</p>



<p><b><a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/"; ?>">Security</a>:</b><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/cas.php"; ?>">Community Authorization Service (CAS)</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/globus-cert-service.php"; ?>">Globus Certificate Service</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/kx509-and-kca.php"; ?>">KX.509 and KCA</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/myproxy.php"; ?>">MyProxy</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/pkinit.php"; ?>">PKINIT</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/pre-ws-aa.php"; ?>">Pre-WS Authentication and Authorization</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/shibboleth.php"; ?>">Shibboleth</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/simple-ca.php"; ?>">Simple CA</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/voms.php"; ?>">VOMS</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/ws-aa.php"; ?>">Web Services Authentication and Authorization</a>

</p>



<p><b><a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."monitoring/"; ?>">Monitoring and Discovery</a>:</b><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."monitoring/ganglia.php"; ?>">Ganglia Cluster Toolkit</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."monitoring/index-service.php"; ?>">Globus Index Service</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."monitoring/trigger-service.php"; ?>">Globus Trigger Service</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."monitoring/inca.php"; ?>">Inca</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."monitoring/monalisa.php"; ?>">MonALISA</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."monitoring/ws-core.php"; ?>">WS Core Monitoring Features</a>

</p>



<p><b><a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/"; ?>">Computation</a>:</b><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/chimera.php"; ?>">Chimera</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/condor-g.php"; ?>">Condor-G, DAGman</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/gram.php"; ?>">GRAM</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/gram-plugins.php"; ?>">GRAM Scheduler Plugins</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/mpich-g2.php"; ?>">MPICH-G2</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/netsolve.php"; ?>">NetSolve/GridSolve</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/ninf-g.php"; ?>">Ninf-G</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/csf.php"; ?>">Platform CSF</a>

</p>



<p><b><a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/"; ?>">Data</a>:</b><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."computation/chimera.php"; ?>">Chimera</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/datacutter.php"; ?>">DataCutter</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/globus-url-copy.php"; ?>">globus-url-copy</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/gridftp.php"; ?>">GridFTP</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/scp.php"; ?>">GSI-SCP/SFTP</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/mcs.php"; ?>">Metadata Catalog Service (MCS)</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/nest.php"; ?>">NeST</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/dai.php"; ?>">OGSA-DAI</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/rft.php"; ?>">Reliable File Transfer (RFT) Service</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/rls.php"; ?>">Replica Location Service (RLS)</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."data/uberftp.php"; ?>">UberFTP</a>

</p>



<p><b><a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."collaboration/"; ?>">Collaboration</a>:</b><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."collaboration/accessgrid.php"; ?>">Access Grid</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."collaboration/ogce.php"; ?>">Open Grid Collaboration Environment (OGCE)</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."collaboration/chef.php"; ?>">Sakai</a>

</p>



<p><b><a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."packaging/"; ?>">Packaging and Distribution</a>:</b><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."packaging/gpt.php"; ?>">Grid Packaging Tools (GPT)</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."packaging/nmi.php"; ?>">NSF Midddleware Initiative (NMI)</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."packaging/pacman.php"; ?>">PACMAN</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."packaging/rocks.php"; ?>">Rocks</a><br>

<a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."packaging/vdt.php"; ?>">Virtual Data Toolkit (VDT)</a>

</p>

</td>



<td width="25%"><h2><a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Grid Solutions</a></h2>



<p><b>Security Challenges:</b><br>

<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]."purse/"; ?>">Registering Users For The Earth System Grid</a>

</p>



<p><b>Monitoring/Managability Challenges:</b><br>

<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]."system_monitoring/"; ?>">A Monitoring System For The Earth System Grid</a>

</p>



<p><b>Data Challenges:</b><br>

<!-- NOT READY YET!!!

<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Balancing Computation And Storage For SDSS</a><br>

-->

<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]."data_replication/"; ?>">Data Replication For LIGO</a><br>

<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]."tgcp/"; ?>">Moving Data Fast On The TeraGrid</a>

</p>

</td>

</tr>

</table>



</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>

