<?php
$title = "Globus: WSRF - The WS-Resource Framework";
$section = "section-1";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="main">
 
    <h1 class="first">The WS-Resource Framework</h1>

    <p>This page provides background information on the WS-Resource Framework 
       announced by the <a href="<?=$SITE_PATHS["WEB_ROOT"]; ?>">Globus Alliance</a> 
       and <a href="http://www.ibm.com/">IBM</a> in conjunction with HP on 
       January 20, 2004.</p>

<p><b>April 2006:</b> The <a href="http://www.oasis-open.org/">OASIS</a> organization 
has <a href="http://lists.oasis-open.org/archives/tc-announce/200604/msg00000.html">approved 
the WSRF v1.2 specifications</a> as an OASIS standard.</p>

<ul>
  <li><a href="#motivation">Motivation</a></li>
  <li><a href="#origins">Origins</a></li>
  <li><a href="#announcement">Announcements</a></li>
  <li><a href="#relevant">Relevant documents</a></li>
  <li><a href="#presentations">Presentations and Meetings</a></li>
  <li><a href="#faq">Frequently asked questions</a></li>
  <li><a href="#press">Press coverage</a></li>
</ul>

<h2><a name="motivation">Motivation</a></h2>

<p>Web services must often provide their users with the 
ability to access and manipulate state, i.e., data values that persist across, 
and evolve as a result of, Web service interactions. And while Web services 
successfully implement applications that manage state today, we need to define 
conventions for managing state so that applications discover, inspect, and 
interact with stateful resources in standard and interoperable ways. The 
WS-Resource Framework defines these conventions and does so within the context 
of established Web services standards.</p>

<h2><a name="origins">Origins</a></h2>

<p>Initial work on the WS-Resource Framework has been performed by the Globus 
Alliance and IBM, who released initial architecture and specification documents 
with co-authors from HP, SAP, Akamai, TIBCO and Sonic (see below) for public 
comment and review on January 20, 2004. These documents were submitted to the
<a href="http://www.oasis-open.org/home/index.php">OASIS</a> standards group 
in March 2004. The 
<a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=wsrf">WSRF 
Technical Committee</a> was formed to work on WS-ResourceProperties, 
WS-ResourceLifetime, WS-ServiceGroup, and WS-BaseFaults specifications. The 
<a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=wsn">WSN 
Technical Committee</a> was formed to work on WS-BaseNotification, WS-Topics, 
and WS-BrokeredNotification specifications.</p>

<p>The WS-Resource Framework is inspired by the work of the 
Global Grid Forum's <a href="http://www.ggf.org/ogsi-wg">Open Grid Services 
Infrastructure (OGSI) Working Group</a>. Indeed, it can be viewed as a 
straightforward refactoring of the concepts and interfaces developed in the OGSI 
V1.0 specification in a manner that exploits recent developments in Web services 
architecture (e.g.,
<a href="http://www-106.ibm.com/developerworks/webservices/library/ws-add/">WS-Addressing</a>). 
We discuss the relationship between the WS-Resource 
framework and OGSI in the document <cite>From OGSI to WSRF: Refactoring and Evolution.</cite>
(See "Relevant Documents" below.)</p>

<h2><a name="announcement">Announcements</a></h2>

<p><b>April 2006:</b> The <a href="http://www.oasis-open.org/">OASIS</a> organization 
has <a href="http://lists.oasis-open.org/archives/tc-announce/200604/msg00000.html">approved 
the WSRF v1.2 specifications</a> as an OASIS standard.</p>

<p><b>March 2006:</b> HP, IBM, Intel, and Microsoft 
<a href="convergence.php">announced their intention to work together</a> toward 
converging Web Service standards for resources, events, and management.</a></p>

<p><b>March 2004:</b> The WSRF specifications have been submitted to 
       <a href="http://www.oasis-open.org/">OASIS</a>.</p>

<p>The <a href="http://www.marketwire.com/mw/release_html_b1?release_id=61977">
WS-Resource Framework announcement</a> was issued January 20, 2004.</p>

<h2><a name="relevant">Relevant Documents</a></h2>

<p>Three overview documents motivate the WS-Resource framework.</p>

<ul>
  <li><a href="http://www-128.ibm.com/developerworks/library/ws-resource/ws-modelingresources.pdf">Modeling 
      Stateful Resources with Web Services</a> describes the WS-Resource construct.</li>
  <li><a href="specs/ws-wsrf.pdf">The WS-Resource Framework</a> describes how the 
      WS-Resource construct is rendered in terms of six Web services 
      specifications. (Added on March 5, 2004.)</li>
  <li><a href="specs/ogsi_to_wsrf_1.0.pdf">From Open Grid Services Infrastructure 
      to WS-Resource Framework: Refactoring and Evolution</a> describes how OGSI 
      constructs map to WS-Resource Framework constructs.</li>
  <li><a href="http://www-106.ibm.com/developerworks/library/ws-pubsub/">Publish-Subscribe 
       Notification for Web Services</a> white paper.</li>
</ul>

<p>Please see the OASIS 
<a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=wsrf">WSRF TC</a> and 
<a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=wsn">WSN TC</a> pages 
for the latest specifications.</p>

<p>The following are the WSRF and WSN WSDL and XSD files shipped with the
Globus Toolkit. They are based on the OASIS 1.2 draft versions of the
WSDL and XSD files with minor modifications such as the use of March
2004 (instead of 2003) version of WS-Addressing and with WS-Addressing
Action attribute annotations. The WSN specifications are not considered
part of WSRF proper, but rather build on WSRF. The
WS-BrokeredNotification is not currently supported by the Globus
Toolkit but it is listed for completeness.</p>

<p>WSRF Specifications:</p>

<ul>
  <li><a href="http://docs.oasis-open.org/wsrf/2004/06/wsrf-WS-ResourceProperties-1.2-draft-04.pdf">WS-ResourceProperties (WSRF-RP)</a>
      <ul> 
         <li><a href="specs/WS-ResourceProperties.wsdl">WSDL</a></li>
         <li><a href="specs/WS-ResourceProperties.xsd">XSD</a></li>
      </ul>
  </li>
  <li><a href="http://docs.oasis-open.org/wsrf/2004/06/wsrf-WS-ResourceLifetime-1.2-draft-03.pdf">WS-ResourceLifetime (WSRF-RL)</a>
      <ul> 
         <li><a href="specs/WS-ResourceLifetime.wsdl">WSDL</a></li>
         <li><a href="specs/WS-ResourceLifetime.xsd">XSD</a></li>
      </ul>
  </li>
  <li><a href="http://docs.oasis-open.org/wsrf/2004/06/wsrf-WS-ServiceGroup-1.2-draft-02.pdf">WS-ServiceGroup (WSRF-SG)</a>
      <ul> 
         <li><a href="specs/WS-ServiceGroup.wsdl">WSDL</a></li>
         <li><a href="specs/WS-ServiceGroup.xsd">XSD</a></li>
      </ul>
  </li>
  <li><a href="http://docs.oasis-open.org/wsrf/2004/06/wsrf-WS-BaseFaults-1.2-draft-02.pdf">WS-BaseFaults (WSRF-BF)</a>
      <ul> 
         <li><a href="specs/WS-BaseFaults.wsdl">WSDL</a></li>
         <li><a href="specs/WS-BaseFaults.xsd">XSD</a></li>
      </ul>
  </li>
</ul>

<p>WSN Specifications:</p>

<ul>
  <li><a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-BaseNotification-1.2-draft-03.pdf">WS-BaseNotification</a>
      <ul> 
         <li><a href="specs/WS-BaseN.wsdl">WSDL</a></li>
         <li><a href="specs/WS-BaseN.xsd">XSD</a></li>
      </ul>
  </li>
  <li><a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-Topics-1.2-draft-01.pdf">WS-Topics</a>
      <ul> 
         <li><a href="specs/WS-Topics.xsd">XSD</a></li>
      </ul>
  </li>
  <li><a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-BrokeredNotification-1.2-draft-01.pdf">WS-BrokeredNotification</a>
      <ul> 
         <li><a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-BrokeredNotification-1.2-draft-01.wsdl">WSDL</a></li>
         <li><a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-BrokeredNotification-1.2-draft-01.xsd">XSD</a></li>
      </ul>
  </li>
</ul>

<h2><a name="presentations">Presentations and Meetings</a></h2>

<ul>
  <li>Authors of WSRF hosted an 
      <a href="http://www-106.ibm.com/developerworks/offers/WS-Specworkshops/ws-rf200404.html">Interop 
      Workshop</a> April 20-21 at Research Triangle Park in North Carolina.</li>
  <li>On January 28, 2004, Imperial College in London hosted a presentation and 
      technical discussion on the Web Services Resource Framework. Steve Tuecke 
      of the Globus Alliance and others will present an overview and highlights 
      of the new framework, addressing motivation and technical consequences. 
      See
      <a href="http://www.nesc.ac.uk/esi/events/385/">http://www.nesc.ac.uk/esi/events/385/</a>.</li>
  <li>On January 20, 2004 at GlobusWORLD, IBM's Daniel Sabbah 
      (<a href="sabbah_wsrf.pdf">PDF</a> and <a href="sabbah_wsrf.ppt">PPT</a>) and the 
      Globus Alliance's Ian Foster (<a href="foster_wsrf.pdf">PDF</a> and 
      <a href="foster_wsrf.ppt">PPT</a>) made the first public presentations 
      regarding WS-RF.</li>
</ul>

<h2><a name="faq">Frequently Asked Questions</a></h2>

<p>We have collected answers to <a href="faq.php">frequently-asked questions</a> on a
separate web page.</p>

<h2><a name="press">Press Coverage</a></h2>

<p>(See the main <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."news/"; ?>">Globus 
Alliance news archive</a>.)</p>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
