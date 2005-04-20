<html><head><title>WSRF - The WS-Resource Framework</title>

<meta name="description" content="The Globus Alliance is a research project that is investigating how to build infrastructure for next generation computations.Metacomputing Computational Grid">
<meta name="keywords" content="metacomputing,computational grid,globus,GUSTO,NGI,next generation internet,networking,supercomputing,parallel computing,distributed computing">
<script language="JavaScript">
<!--//

        if (document.images) {
            img1on = new Image();
            img1on.src = "../images/b1b_on.gif";
            
            img2on = new Image();
            img2on.src = "../images/b2b_on.gif";
            
            img3on = new Image();
            img3on.src = "../images/b3b_on.gif";
            
            img4on = new Image();
            img4on.src = "../images/b4b_on.gif";


            img1off = new Image();
            img1off.src = "../images/b1b_on.gif";
            
            img2off = new Image();
            img2off.src = "../images/b2b_off.gif";
            
            img3off = new Image();
            img3off.src = "../images/b3b_off.gif";
            
            img4off = new Image();
            img4off.src = "../images/b4b_off.gif";

        }

function imgOn(imgName) {
        if (document.images) {
            document[imgName].src = eval(imgName + "on.src");
        }
}

function imgOff(imgName) {
        if (document.images) {
            document[imgName].src = eval(imgName + "off.src");
        }
}

function xscreen() {
window.open("","p",'toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,width=550,height=500, resizable=1');
}

//--></script>
<style>
<!--
 li.MsoNormal
	{mso-style-parent:"";
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	margin-left:0in; margin-right:0in; margin-top:0in}
-->
</style>
<meta name="Microsoft Border" content="tlb, default"></head>

<body leftmargin="0" topmargin="0" link="#003390" alink="#6699ff" background="index_files/background.gif" bgcolor="#ffffff" marginheight="0" marginwidth="0" text="#000000" vlink="#808080"><!--msnavigation--><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td>

<table border="0" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td colspan="5"><map name="FPMap0_I1"><area href="http://www.globus.org/" shape="rect" coords="35, 12, 192, 31"><area href="http://www.globus.org/" shape="rect" coords="62, 35, 230, 54"></map>
    <img src="index_files/a0c.gif" alt="The Globus Project" usemap="#FPMap0_I1" border="0" height="32" width="505"></td>
  </tr>
  <tr>
    <td><map name="FPMap1_I1"><area href="http://www.globus.org/" shape="rect" coords="33, 0, 114, 37"></map>
    <img src="index_files/b0c.gif" usemap="#FPMap1_I1" border="0" height="38" width="134"></td>
    <td><a href="http://www.globus.org/about/default.asp" onmouseover="imgOn('img1');window.status='General information on the Globus Project'; return true" onmouseout="imgOff('img1')"><img name="img1" src="index_files/b1b_on.gif" alt="General information on the Globus project" border="0" height="38" width="86"></a></td>
    <td><a href="http://www.globus.org/research/default.asp" onmouseover="imgOn('img2');window.status='The Globus Project\'s research'; return true" onmouseout="imgOff('img2')">
    <img name="img2" src="index_files/b2b_off.gif" alt="The Globus Project's research" border="0" height="38" width="80"></a></td>
    <td><a href="http://www.globus.org/toolkit/default.asp" onmouseover="imgOn('img3');window.status='The Globus Project\'s software products'; return true" onmouseout="imgOff('img3')">
    <img name="img3" src="index_files/b3b_off.gif" alt="The Globus Project's software products" border="0" height="38" width="82"></a></td>
    <td><a href="http://www.globus.org/developer/default.asp" onmouseover="imgOn('img4');window.status='References for developers of the Globus Toolkit'; return true" onmouseout="imgOff('img4')">
    <img name="img4" src="index_files/b4b_off.gif" alt="References for developers of the Globus Toolkit" border="0" height="38" width="136"></a></td>
  </tr>
  <tr>
    <td colspan="5">
    <img src="index_files/c0c.gif" alt="c0c.gif (327 bytes)" height="32" width="100"></td>
  </tr>
</tbody></table>

</td></tr><!--msnavigation--></tbody></table><!--msnavigation--><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td valign="top" width="1%">

    <table border="0" cellpadding="0" height="31" width="100%">
      <tbody><tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="8" valign="top" width="68%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/about/faq.html">FAQ</a></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%">
        <a href="http://www.globus.org/research/site-index.html"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">Site
          Index</font></a></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><a href="http://www.globus.org/about/contacts.html"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">Contact Us</font></a></td>
      </tr>
      <tr>
        <td align="right" valign="top"></td>
        <td height="8" valign="top" width="68%"><font color="#6699ff" face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">
        <img src="index_files/right_arrow.gif" height="10" width="10"></font></td>
      </tr>
      <tr>
        <td colspan="2" align="right" valign="top">
          <img src="index_files/about-globus.gif" align="left" border="0" height="20" width="120">
        </td>
      </tr>
      <tr>
        <td align="right" valign="top"></td>
        <td height="8" valign="top" width="68%"><font color="#6699ff" face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">
        <img src="index_files/right_arrow.gif" height="10" width="10"></font></td>
      </tr>
      <tr>
        <td align="right" valign="top"></td>
        <td height="8" valign="top" width="68%"><font color="#6699ff" face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><strong>People</strong></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/about/team.html">Team</a></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/about/collaborators.html">Collaborators</a></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/about/sponsors.html">Sponsors</a></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%">
        <a href="http://www.globus.org/research/subscriptions.html">
        <span lang="en-us">
        <font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">Email 
        Lists</font></span></a></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/about/employment.html">Employment Opportunities</a></font></td>
      </tr>
      <tr>
        <td align="right" valign="top"></td>
        <td height="1" valign="top" width="97%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">
        <img src="index_files/right_arrow.gif" height="10" width="10"></font></td>
      </tr>
      <tr>
        <td align="right" valign="top"></td>
        <td height="1" valign="top" width="97%"><font color="#6699ff" face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><strong>Activities</strong></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><a href="http://www.globus.org/about/news/"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">New<span lang="en-us">s 
        &amp; Archive</span></font></a></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><a href="http://www.globus.org/about/events/"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">Meetings</font></a></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><a href="http://www.globus.org/about/related.html"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">Related Work</font></a></td>
      </tr>
      <tr>
        <td align="right" valign="top"></td>
        <td height="1" valign="top" width="97%"><font color="#6699ff" face="Verdana,Arial,Helvetica,Courier New,Courier" size="1">
        <img src="index_files/right_arrow.gif" height="10" width="10"></font></td>
      </tr>
      <tr>
        <td align="right" valign="top"></td>
        <td height="1" valign="top" width="97%"><font color="#6699ff" face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><strong>Project</strong></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/research/">Research</a></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/toolkit/">Software</a></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/research/papers.html">Publications</a></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><font face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/research/applications/default.asp">Applications</a></font></td>
      </tr>
      <tr>
        <td align="right" valign="top">
        <img src="index_files/blank.gif" alt="right_arrow.gif (282 bytes)" height="10" width="20"></td>
        <td height="1" valign="top" width="97%"><font color="#6699ff" face="Verdana,Arial,Helvetica,Courier New,Courier" size="1"><a href="http://www.globus.org/research/testbeds.html">Testbeds</a></font></td>
      </tr>
      <tr>
        <td colspan="2" width="118">
        <img src="index_files/right_arrow.gif" height="10" width="10"></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" width="118"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><small></small></small></font><form name="search" method="post" action="http://tiger.mcs.anl.gov/htdig/cgi-bin/htsearch.cgi">
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><small>          <input name="config" value="globus" type="hidden">
          <input name="exclude" value="mail_archive" type="hidden">
          </small></small></font><p>
<font face="Verdana,Arial,Helvetica,Courier New,Courier">          <img src="index_files/right_arrow.gif" alt="blank.gif (807 bytes)" align="left" border="0" height="20" width="8"><small><small><strong><font color="#6699ff">Site Search:</font></strong><br>
          <input name="words" size="10" maxlength="2033" value="" type="text"></small></small></font></p>
        </form>
        </td>
      </tr>
    </tbody></table>

</td><td valign="top" width="24"></td><!--msnavigation--><td valign="top">

<table border="0" cellpadding="0" cellspacing="0" width="606">
  <tbody><tr>
    <td valign="top" width="470"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>
    <font color="#ff6600"><b><span lang="en-us">The 
WS-Resource Framework</span></b></font></small></font><p class="MsoNormal"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>This page provides background information on the 
WS-Resource Framework announced by the <a href="http://www.globus.org/">Globus 
Alliance</a> and <a href="http://www.ibm.com/">IBM</a> in conjunction with HP on January 20, 2004. Updates occur regularly, so check here for the latest WSRF information.

</small></font></p><p>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    <b>March 2004:</b> The WSRF specifications have been submitted to <a href="http://www.oasis-open.org/">OASIS</a>.
</small></font></p>

<ul>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>  <li>
  <p class="MsoNormal"><a href="#motivation">Motivation</a>
  </p></li><li>
  <p class="MsoNormal"><a href="#origins">Origins</a>
  </p></li><li>
  <p class="MsoNormal"><a href="#announcement">Announcement</a>
  </p></li><li>
  <p class="MsoNormal"><a href="#relevant">Relevant documents</a>
  </p></li><li>
  <p class="MsoNormal"><a href="#presentations">Presentations and Meetings</a>
  </p></li><li>
  <p class="MsoNormal"><a href="#faq">Frequently asked questions</a>
  </p></li><li>
  <p class="MsoNormal"><a href="#press">Press coverage</a>
</p></li></small></font></ul>
<h2><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><font size="3"><a name="motivation">Motivation</a></font></small></font></h2>
<p class="MsoNormal"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>Web services must often provide their users with the 
ability to access and manipulate state, i.e., data values that persist across, 
and evolve as a result of, Web service interactions. And while Web services 
successfully implement applications that manage state today, we need to define 
conventions for managing state so that applications discover, inspect, and 
interact with stateful resources in standard and interoperable ways. The 
WS-Resource Framework defines these conventions and does so within the context 
of established Web services standards.</small></font></p>
<h2><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><font size="3"><a name="origins">Origins</a></font></small></font></h2>
<p><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>Initial work on the WS-Resource Framework has been performed by the Globus 
Alliance and IBM, who released initial architecture and specification documents 
with co-authors from HP, SAP, Akamai, TIBCO and Sonic (see below) for public comment and review on 
January 20, 2004. These documents were submitted to <a href="http://www.oasis-open.org/home/index.php">OASIS</a> standards group in March 2004. The <a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=wsrf">WSRF Technical Committee</a> was formed to work on WS-ResourceProperties, WS-ResourceLifetime, WS-ServiceGroup, and WS-BaseFaults specifications. The <a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=wsn">WSN Technical Committee</a> was formed to work on WS-BaseNotification, WS-Topics, and WS-BrokeredNotification specifications.</small></font></p>
<p class="MsoNormal"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>The WS-Resource Framework is inspired by the work of the 
Global Grid Forum's <a href="http://www.ggf.org/ogsi-wg">Open Grid Services 
Infrastructure (OGSI) Working Group</a>. Indeed, it can be viewed as a 
straightforward refactoring of the concepts and interfaces developed in the OGSI 
V1.0 specification in a manner that exploits recent developments in Web services 
architecture (e.g.,
<a href="http://www-106.ibm.com/developerworks/webservices/library/ws-add/">
WS-Addressing</a>). We discuss the relationship between the WS-Resource 
framework and OGSI in the document "From OGSI to WSRF: Refactoring and Extension."</small></font></p>
<h2><span lang="en-us"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><font size="3"><a name="announcement">Announcement</a></font></small></font></span></h2>
<p><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><a href="http://www.marketwire.com/mw/release_html_b1?release_id=61977">
WS-Resource Framework announcement</a> issued January 20, 2004.</small></font></p>
<h2><span lang="en-us"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><a name="Relevant_Documents"></a><font size="3">
<a name="relevant">Relevant Documents</a> </font></small></font></span></h2>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font><p><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>Three overview documents motivate the WS-Resource framework.</small></font></p>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font><ul style="margin-bottom: 0in;" type="disc">
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>      <li class="MsoNormal">
      <span style="font-size: 10pt; font-family: Verdana;">
      <a style="text-decoration: underline;" href="http://www.ibm.com/developerworks/library/ws-resource/ws-modelingresources.html">Modeling Stateful Resources with Web Services</a> describes the 
      WS-Resource construct.</span></li>
      <li class="MsoNormal">
      <span style="font-size: 10pt; font-family: Verdana;">
      <a href="http://www.globus.org/wsrf/specs/ws-wsrf.pdf">The WS-Resource Framework</a> describes how the 
      WS-Resource construct is rendered in terms of six Web services 
      specifications. (Added on March 5, 2004.)</span></li>
      <li class="MsoNormal">
      <span style="font-size: 10pt; font-family: Verdana;">
      <a style="text-decoration: underline;" href="http://www.globus.org/wsrf/specs/ogsi_to_wsrf_1.0.pdf">From Open Grid Services Infrastructure to WS-Resource Framework: 
      Refactoring and Extension</a> describes how OGSI constructs map to 
      WS-Resource Framework constructs. </span></li>
     <li><a href="http://www-106.ibm.com/developerworks/library/ws-pubsub/">Publish-Subscribe 
       Notification for Web Services</a> white paper.</li>
    </small></font></ul>

<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font><p><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>Please see the OASIS <a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=wsrf">WSRF TC</a> and <a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=wsn">WSN TC</a> pages for latest specifications. </small></font></p>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font><p><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>The
following are the WSRF and WSN WSDL and XSD files shipped with the
Globus Toolkit. They are based on the OASIS 1.2 draft versions of the
WSDL and XSD files with minor modifications such as the use of March
2004 (instead of 2003) version of WS-Addressing and with WS-Addressing
Action attribute annotations. The WSN specifications are not considered
part of WSRF proper, but rather build on WSRF. The
WS-BrokeredNotification is not currently supported by the Globus
Toolkit but it is listed for completeness. </small></font></p>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font><p>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    WSRF Specifications:
    </small></font></p><p>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font></p><ul>

<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>     <li>
      <a href="http://docs.oasis-open.org/wsrf/2004/06/wsrf-WS-ResourceProperties-1.2-draft-04.pdf">WS-ResourceProperties (WSRF-RP)</a>
      <ul> 
         <li><a href="http://www.globus.org/wsrf/specs/WS-ResourceProperties.wsdl">WSDL</a>
         </li><li><a href="http://www.globus.org/wsrf/specs/WS-ResourceProperties.xsd">XSD</a>
      </li></ul>
     </li>

     <li>
      <a href="http://docs.oasis-open.org/wsrf/2004/06/wsrf-WS-ResourceLifetime-1.2-draft-03.pdf">WS-ResourceLifetime (WSRF-RL)</a>
      <ul> 
         <li><a href="http://www.globus.org/wsrf/specs/WS-ResourceLifetime.wsdl">WSDL</a>
         </li><li><a href="http://www.globus.org/wsrf/specs/WS-ResourceLifetime.xsd">XSD</a>
      </li></ul>
     </li>

     <li>
      <a href="http://docs.oasis-open.org/wsrf/2004/06/wsrf-WS-ServiceGroup-1.2-draft-02.pdf">WS-ServiceGroup (WSRF-SG)</a>
      <ul> 
         <li><a href="http://www.globus.org/wsrf/specs/WS-ServiceGroup.wsdl">WSDL</a>
         </li><li><a href="http://www.globus.org/wsrf/specs/WS-ServiceGroup.xsd">XSD</a>
      </li></ul>
     </li>

     <li>
      <a href="http://docs.oasis-open.org/wsrf/2004/06/wsrf-WS-BaseFaults-1.2-draft-02.pdf">WS-BaseFaults (WSRF-BF)</a>
      <ul> 
         <li><a href="http://www.globus.org/wsrf/specs/WS-BaseFaults.wsdl">WSDL</a>
         </li><li><a href="http://www.globus.org/wsrf/specs/WS-BaseFaults.xsd">XSD</a>
      </li></ul>
     </li>
    </small></font></ul>

<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font><p><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small> 
    WSN Specifications:
    </small></font></p>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font><ul>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    <li>
      <a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-BaseNotification-1.2-draft-03.pdf">WS-BaseNotification</a>
      <ul> 
         <li><a href="http://www.globus.org/wsrf/specs/WS-BaseN.wsdl">WSDL</a>
         </li><li><a href="http://www.globus.org/wsrf/specs/WS-BaseN.xsd">XSD</a>
      </li></ul>
     </li>

     <li>
      <a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-Topics-1.2-draft-01.pdf">WS-Topics</a>
      <ul> 
         <li><a href="http://www.globus.org/wsrf/specs/WS-Topics.xsd">XSD</a>
      </li></ul>
     </li>

   <li>
      <a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-BrokeredNotification-1.2-draft-01.pdf">WS-BrokeredNotification</a>
      <ul> 
         <li><a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-BrokeredNotification-1.2-draft-01.wsdl">WSDL</a>
         </li><li><a href="http://docs.oasis-open.org/wsn/2004/06/wsn-WS-BrokeredNotification-1.2-draft-01.xsd">XSD</a>
      </li></ul>
     </li>
    </small></font></ul>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small> 
</small></font><h2><span lang="en-us"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><a name="presentations"><font size="3">Presentations and 
Meetings</font></a></small></font></span></h2>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font><ul>
<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>      <li>
       <font face="Verdana,Arial,Helvetica,Courier New,Courier" size="2">
      Authors of WSRF hosted an
      <a href="http://www-106.ibm.com/developerworks/offers/WS-Specworkshops/ws-rf200404.html">
      Interop Workshop</a> April 20-21 at Research Triangle Park in North 
      Carolina.<br>
&nbsp;</font></li>
<font face="Verdana,Arial,Helvetica,Courier New,Courier" size="2">      <li>
      On January 28, 2004, Imperial College in London hosted a presentation and 
      technical discussion on the Web Services Resource Framework. Steve Tuecke 
      of the Globus Alliance and others will present an overview and highlights 
      of the new framework, addressing motivation and technical consequences. 
      See
      <a href="http://www.nesc.ac.uk/esi/events/385/" eudora="autourl">
      http://www.nesc.ac.uk/esi/events/385/</a>.<br>
&nbsp;</li>
      <li>On January 20, 2004 at GlobusWORLD, IBM's Daniel Sabbah (<a href="http://www.globus.org/wsrf/sabbah_wsrf.pdf">PDF</a> 
      and <a href="http://www.globus.org/wsrf/sabbah_wsrf.ppt">PPT</a>) and the Globus Alliance's Ian 
      Foster (<a href="http://www.globus.org/wsrf/foster_wsrf.pdf">PDF</a> and <a href="http://www.globus.org/wsrf/foster_wsrf.ppt">
      PPT</a>) 
made the first public presentations regarding WS-RF.&nbsp; </li></font><br>
&nbsp;
    </small></font></ul>
<h2 dir="ltr"><span lang="en-us"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><a name="faq"></a><font size="3">Frequently Asked Questions</font></small></font></span></h2>
<p><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><font size="2">See <a href="http://www.globus.org/wsrf/faq.asp">
http://www.globus.org/wsrf/faq.asp</a>. </font> <br>
&nbsp;</small></font></p>

<p><span lang="en-us"><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><font size="3"><b><a name="press">Press Coverage</a></b></font></small></font></span><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><small><span lang="en-us"><font size="3"> </font>
<font size="2">(see also the main <a href="http://www.globus.org/about/news">Globus Alliance press 
archive</a>)</font></span></small></small></font></p>

<p><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><small>
    <small><small><small>
       <font face="Verdana,Arial,Helvetica,Courier New,Courier" size="2">
<i>
        <a href="http://dsonline.computer.org/0402/d/o2004a.htm">IEEE 
        Distributed Systems</a> </i>interviewed Ian 
        Foster of the Globus Alliance</font></small></small></small></small><font size="2"> 
about topics related to WSRF.&nbsp; (2/2004)</font></small></font></p>

<p><font face="Verdana,Arial,Helvetica,Courier New,Courier"><small><font size="2">The <a href="http://www.globusworld.org/news/">GlobusWORLD news archive</a> 
has links to several WSRF news stories that appeared during the January 2004 
conference, at which WSRF was announced.</font></small></font></p>

<font face="Verdana,Arial,Helvetica,Courier New,Courier"><small>    </small></font>
    
    </td>
  </tr>
</tbody></table>

<!--msnavigation--></td></tr><!--msnavigation--></tbody></table><!--msnavigation--><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td>

<table border="0" cellpadding="0" cellspacing="0" width="674">
  <tbody><tr>
    <td valign="top" width="136">
    <img src="index_files/right_arrow.gif" height="10" width="120"></td>
    <td valign="top" width="47">
    <img src="index_files/right_arrow.gif" height="6" width="16"></td>
    <td align="center" valign="top" width="497"><hr>
    <p><small><small><font face="Verdana,Arial,Helvetica,Courier New,Courier"><a href="http://www.globus.org/about/">about
    globus</a> | <a href="http://www.globus.org/research/">grid research</a> | <a href="http://www.globus.org/toolkit/">globus toolkit</a>
    | <a href="http://www.globus.org/developer/">software development</a><br>
    <br>
    <font color="#999999">Last modified 
    12/05/04. Comments? <a href="mailto:webmaster@globus.org">webmaster@globus.org</a></font></font></small></small></p></td>
  </tr>
</tbody></table>

</td></tr><!--msnavigation--></tbody></table></body></html>