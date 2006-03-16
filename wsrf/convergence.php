<?php
$title = "Globus: Toward Converging Web Service Standards for Resources, Events, and
Management ";
$section = "section-5";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="main">

<h1 class="first">Toward Converging Web Service Standards for Resources, Events, and
Management</h1>

<p>Commentary by Ian Foster, writing on behalf of the Globus Management
Committee</p>

<h2>Table of Contents</h2>

<ul>
  <li><a href="#summary">Summary</a></li>
  <li><a href="#goodnews">Why This Announcement is Good News</a></li>
  <li><a href="#response">How Globus Will Respond to This New Initiative</a></li>
  <li><a href="#meaning">What This Announcement Means for Developers and Users</a></li>
  <li><a href="#refs">References</a></li>
</ul>

<p>HP, IBM, Intel, and Microsoft have announced plans to "develop a
common set of [Web Services] specifications for resources, events, and
management." We explain why this announcement is good news for the Grid
and Web Services communities, and outline how we expect the Globus open
source community will work to implement these new specifications when
they appear, and to enable a painless migration path for current
software.</p>

<h2><a name="sumamry">Summary</a></h2>

<p>HP, IBM, Intel, and Microsoft announced on March 15, 2006, their
intention to work together to "develop a common set of [Web Services]
specifications for resources, events, and management that can be
broadly supported across multiple platforms" <a href="#ref1">[1]</a>.  They also published
a roadmap outlining what these specifications will be <a href="#ref2">[2]</a>.</p>

<p>This roadmap proposes an approach to reconciling two similar but
competing approaches: the Web Services Distributed Management (WSDM)
family of specifications (including Web Services Resource Framework
(WSRF) and WS-Notification (WS-N)) <a href="#ref3">[3]</a>, supported by IBM, HP, and
others; and the WS-Management family of specifications (including
WS-Transfer, WS-Eventing, and WS- Enumeration) <a href="#ref4">[4]</a>, supported by
Microsoft, Intel, and others.</p>

<p>The published roadmap suggests that the new specifications that are to
be developed will include essentially all of the core concepts
introduced back in 2001 in the Open Grid Services Infrastructure
(OGSI) <a href="#ref5">[5]</a> and subsequently incorporated in WSRF/WS-N <a href="#ref6">[6]</a>. So this
initiative is good news: it promises to deliver what the Grid and
Globus communities have been working towards for close to 5 years:
industry-wide standards for Web Services-based systems management.</p>

<p>The open source Globus Toolkit v4 (GT4) uses the WSRF and WS-N
specifications within all of its Web Services. Since the release of
GT4, the Globus position has been that as standards in this area
inevitably evolve, we will do everything possible to provide a
painless migration path for GT4-based implementations to new
standards. Based on our knowledge of the specifications that are to be
reconciled, and what we read in the roadmap, we are confident that
Globus will be able to provide a simple migration path to these new
specifications for code written to GT4's Java, C, and Python runtimes.</p>


<h2><a name="goodnews">Why This Announcement is Good News</a></h2>

<p>Back in 2001, we made the strategic decision to build future Globus
software on a Web Services foundation. We also identified the need for
industry-wide standards for Web Services-based systems management, and
to this end developed draft specifications for document-oriented state
inspection, notification, lifetime management, etc. Out of this work
came the OGSI specification published by GGF in 2003.</p>

<p>Since that time, we have been working with the Grid community to
implement and apply these Web Services interfaces and mechanisms.  The
reformulation of OGSI into the WSRF/WS-N standards (motivated by
external concerns) caused some delay, but the release of GT4.0 in May
2005 and subsequent widespread adoption has been steadily building
confidence in the approach.  However, a major problem remained: the
competing WS-Man specifications, which both prevented interoperability
of different implementations, and caused fear, uncertainty, and doubt
among users, particularly in industry.</p>

<p>The HP-IBM-Intel-MS announcement promises to overcome this final
hurdle to industry-wide standards for Web Services-based systems
management.  According to the roadmap, essentially all core concepts
in the first OGSI draft of 2001 (and subsequently in WSRF/WS-N) are to
be included in the reconciled specifications. We have WS-Addressing
Endpoint References (EPRs) as names for state elements, document-based
inspection of state, lifetime management of state elements, and
notification of changes to state. We also have a commitment to
building higher-level system management specifications on this
foundation.</p>

<p>We, and no doubt many others, will want to see discussion of these
proposed specifications moved to an appropriate standards body as soon
as possible. However, the fact that these major players are making
this public (and detailed) commitment to reconcilation of divergent
approaches is a big step forward.</p>


<h2><a name="response">How Globus Will Respond to This New Initiative</a></h2>

<p>Globus users will recall the painful migration from the OGSI-based GT3
to the WSRF/WS-N-based GT4. We committed with the release of GT4 to
never repeat that process, despite the inevitable evolution in core
standards.  Thus, when these new specifications stabilize, we will
implement them--but we will also work to provide a painless migration
path for GT4-based services and clients.</p>

<p>While detailed specifications are not yet available, we are confident,
based on knowledge of the existing specifications that are to be
reconciled, and the published roadmap, that such a migration path
will be easy to achieve. Thus, we expect the Globus open source
community to respond to this new initiative as follows:</p>

<ol type="a">
<li>We will continue to deliver and support high-quality open source
   implementations of WSRF/WS-N, in Java, C, and Python.</li>

<li>We will monitor the work of the HP-IBM-Intel-MS team, and when
   specifications stabilize, implement those specifications in Globus
   software. As we incorporate support for the new WSDL interfaces
   into the GT4 C, Java, and Python Web Services runtimes, we will do
   so with minimal changes to their internal APIs.</li>

<li>We will develop software that make it easy to build services that
   support both WSRF/WS-N and the new reconciled interfaces. We will
   use this software to produce versions of GRAM, RFT, and other
   GT4 services that support both sets of interfaces--thus enabling
   interoperability of Grids based on old and new specifications.</li>

<li>We will engage in the development of the proposed specifications--
   hopefully within the context of an appropriate standards body.</li>
</ol>


<h2><a name="meaning">What This Announcement Means for Developers and Users</a></h2>

<p>The strong commitment stated by HP, IBM, Intel, and Microsoft to the
concepts, mechanisms, and interfaces encoded in WSDM/WSRF/WS-N and
WS-Man/WS-Transfer/WS-Eventing should provide developers and users
with considerable confidence that this technology is here for the long
haul.</p>

<p>Similarly, Globus' intention to both implement these new
specifications and address migration issues means that developers and
users should feel confident designing and coding programs that target
Globus (GT4) WSRF/WS-N interfaces.  As the new specifications
solidify, developers and users will be able to evolve their software
to use those new specifications, at a pace of their choosing.</p>

<p>Thanks for taking the time to read our views on this announcement.  We
will also be interested to hear your perspectives and thoughts on
these developments, and how we in the Globus community should be
responding to them.</p>


<h2><a name="refs">References</a></h2>

<ol type="1">
<li><a name="ref1" href="http://www-128.ibm.com/developerworks/webservices/library/specification/ws-roadmap/">http://www-128.ibm.com/developerworks/webservices/library/specification/ws-roadmap/</a><br>
    (Also see: <a href="http://devresource.hp.com/drc/specifications/wsm">http://devresource.hp.com/drc/specifications/wsm</a>)</li>

<li><a name="ref2">K. Cline et al., Toward Converging Web Service Standards for
    Resources, Events, and Management, 2006,</a><br>
    <a href="http://download.boulder.ibm.com/ibmdl/pub/software/dw/webservices/Harmonization_Roadmap.pdf">http://download.boulder.ibm.com/ibmdl/pub/software/dw/webservices/Harmonization_Roadmap.pdf</a></li>

<li><a name="ref3" href="http://www.oasis-open.org/committees/wsrf">http://www.oasis-open.org/committees/wsrf</a><br>
    <a href="http://www.oasis-open.org/committees/wsn">http://www.oasis-open.org/committees/wsn</a><br>
    <a href="http://www.oasis-open.org/committees/wsdm">http://www.oasis-open.org/committees/wsdm</a></li>

<li><a name="ref4" href="http://www.w3.org/Submission/WS-Transfer/">http://www.w3.org/Submission/WS-Transfer/</a><br>
    <a href="http://www.w3.org/Submission/WS-Eventing/">http://www.w3.org/Submission/WS-Eventing/</a><br>
    <a href="http://www.w3.org/Submission/WS-Enumeration/">http://www.w3.org/Submission/WS-Enumeration/</a><br>
    <a href="http://www.intel.com/technology/manage/downloads/ws_management.pdf">http://www.intel.com/technology/manage/downloads/ws_management.pdf</a></li>

<li><a name="ref5">S. Tuecke et al., Open Grid Services Infrastructure (OGSI) Version
    1.0. Global Grid Forum, Proposed Recommendation GFD-R-P.15, 2003.</a><br>
    <a href="http://www.ggf.org/documents/GFD.15.pdf">http://www.ggf.org/documents/GFD.15.pdf</a></li>

<li><a name="ref6">I. Foster et al. Modeling and Managing State in Distributed
    Systems: The Role of OGSI and WSRF. Proceedings of the IEEE,
    93(3):604-612, 2005.</a></li>
</ol>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
