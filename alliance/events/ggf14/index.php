<?php
$title = "Globus: Workshop at GGF-14";
$section = "section-2";
include_once( "../../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="main">

<h1>Globus Toolkit Version 4: Status and Experiences</h1>

<table>
<tr>
<th>Title:</th> <td>Globus Toolkit Version 4: Status and Experiences -- A Workshop at GGF14</td>
</tr>
<tr>
<th>Time:</th> <td>Tuesday, June 28 (Afternoon)</td>
</tr>
<tr>
<th>Organizer:</th> <td>Ian Foster, Argonne National Laboratory &amp; University of Chicago</td>
</tr>
</table>

<h2>Scope and Content</h2>

<p>Globus Toolkit version 4 (GT4), released on April 30 2005, represents a 
significant advance over earlier GT versions in terms of software quality, 
functionality, and standards conformance. This workshop will provide an 
opportunity for people not only to learn about GT4 but also to hear from groups 
working with it. Presentations at the workshop will focus in particular on 
experiences implementing and using the standards that underlie GT4 and that in 
many cases form the basis for ongoing discussions in OGSA-related working 
groups: the discussions of practical experiences with Web services standards in 
particular may provide a useful counterpoint to the often academic debates 
concerning the pros and cons of different approaches. The discussion of GT4 
experiences should also be relevant to RGs concerned with Grid applications.</p>

<p>Additional details on GT4: Quality has been a major emphasis during the 
18 month development period and in particular the 6 month alpa-beta period, 
in which over 150 people participated. Functionality includes not only the 
GridFTP data movement service, GRAM job submission and management service, 
Reliable File Transfer service, Replica Location Service, Community 
Authorization Service, OGSA Data Access and Integration, and MyProxy services 
included in previous releases (although with multiple-order-of-magnitude 
improvements in scalability in several cases) but also new services such as a 
Workspace Management service (for dynamic accounts), Data Replication 
Service, Grid Teleoperation Control Protocol service, and an expanded set of 
Monitoring and Discovery services. In terms of standards conformance, GT4 
provides probably the most full-featured implementation of Web services 
security available anywhere; a full-featured GridFTP implementation; and 
support for the WS Resource Framework and WS-Notification specifications in 
C, Java, and Python containers.</p>

<h2>Potential Speakers (invited, not confirmed)</h2>

<ul>
<li>GT4 Introduction (90 mins) -- largely Globus Alliance members
        <ul>
        <li>Overview (30 mins)</li>
        <li>Implementation of Web Services Standards (15)</li>
        <li>Performance (15)</li>
        <li>Future directions (15)</li>
        <li>Related Tools (15)</li>
        </ul></li>
<li>Early Experiences with GT4 (90 mins) -- members of the Globus user community
        <ul>
        <li>China Grid (15)</li>
        <li>GridCast, Belfast (15)</li>
        <li>Intel (15)</li>
        <li>Condor-G and GriPhyN (15)</li>
        <li>Discussion (30)</li>
        </ul></li>
</ul>

</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>

