
<div id="headerlinks">
<br />
<a href="http://www.globus.org/faq.php">FAQ</a><br />
<a href="http://www.globus.org/site_map.php">Site Map</a><br />
<a href="http://dev.globus.org/wiki/Mailing_Lists">Contact Us</a>
</div>

<div id="header"> <div align="left"> 
<img src="http://www.globus.org/toolkit/images/globustoolkit.gif" alt="The Globus Toolkit" width="160" height="76" /></div>


<ul id="menu">
    <li id="nav-1"><a href="http://www.globus.org/">Home</a></li>
    <li id="nav-2"><a href="http://www.globus.org/alliance/">Globus Alliance</a></li>
    <li id="nav-3"><a href="http://www.globus.org/toolkit/">Globus Toolkit</a></li>
    <li id="nav-4"><a href="http://www.globus.org/grid_software/">Grid Software</a></li>
    <li id="nav-5"><a href="http://www.globus.org/solutions/">Grid Solutions</a></li>
	<li id="nav-6"><a href="https://dev.globus.org/wiki/Welcome">dev.globus</a></li>
    <!-- end of navigation list -->
  </ul>


<table class="navbartable" width="100%">
    <tr>
      <th>
	<?php 
include_once( "/mcs/www-unix.globus.org/toolkit/breadcrumb.php" ); 
globus_current_location(); ?> <br/><br/>Could this page be better? <a href="#feedback">Send us your feedback.</a>
      </th>

      <td>
	  
         <form method="GET" name="GlobusSearchForm"  onSubmit="GlobusSubmit()">
         <input type="radio" name="domain" value="nomail"  checked>&nbsp;Website&nbsp;
         <input type="radio" name="domain" value="mail">&nbsp;Email Lists&nbsp;
         Search:&nbsp;<input type="text" name="qinit" size="20"  
maxlength="200" value="" />
         <input type="hidden" name="cof" VALUE="S:http://www.globus.org/;VLC:#cccccc;AH:center;BGC:#ffffff;LH:76;LC:#003390;L:http://www.globus.org/img/globusalliance-nourl.gif;ALC:#003390;LW:170;T:#000000;AWFID:fb67b77f3237ebb9;">
         <input type="hidden" name="domains" value="www.globus.org">
             <br />
         <input type="hidden" name="sitesearch" value="www.globus.org">
         <input type="hidden" name="q" value="">
         </form>
      </td>
    </tr>

  </table>

</div>
<div id="container">
	<?php 
include_once( "/mcs/www-unix.globus.org/include/outofdate.php" ); 
globus_out_of_date(); ?>


		<div id="leftbg">
		 <h2 class="smalltitle">Software Links</h2>
           <dl class="leftColumn">
		   		<dt><a href="/toolkit/docs/4.2/4.2.1/Usage_Stats.html">Usage Statistics</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/rn/">Release Notes</a></dt>
				<dt><a href="/toolkit/versioning.html">Versioning</a></dt>
				<dt><a href="/toolkit/downloads/">Downloads</a></dt>
				<dt><a href="/toolkit/advisories.html">Advisories</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/licenses/">Licenses</a></dt>
				<dt><a href="http://dev.globus.org/wiki/How_to_contribute">CVS &amp; Dev Tools</a></dt>
			</dl>
			
		<h2 class="smalltitle">Getting Started</h2>
			<dl class="leftColumn">
			<!--
				<dt><a href="/toolkit/docs/4.2/4.2.1/doc_overview.html">Doc Structure</a></dt>
				-->
				<dt><a href="/toolkit/docs/4.2/4.2.1/key/">A Globus Primer</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/globus_is_modular.html">Globus Is Modular!</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/admin/install/">Installing GT</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/admin/quickstart/">Quickstart</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/admin/install/#gtadmin-platform">Platform Notes</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/developer/">GT Developer's Guide</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/user/">GT User's Guide</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/mig/">Migrating Guides</a></dt>
			</dl>
			
		<h2 class="smalltitle">Reference</h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/4.2/4.2.1/developer/#gt-bestpractices">Best Practices</a></dt>
				<dt><a href="/toolkit/docs/development/coding_guidelines.html">Coding Guidelines</a></dt>
				<dt><a href="/api/">API docs</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/commands/">GT Commands</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/user/#public-interfaces">Public Interfaces</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/developer/#gt-rp">Resource Properties</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/developer/#gt-samples">Samples</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/glossary.html">Glossary</a></dt>
				<!--
				<dt>Performance Studies (coming soon)</dt>
				-->
			</dl>
		<h2 class="smalltitle">Manuals</h2>
		<h2 class="smalltitle"><a href="/toolkit/docs/4.2/4.2.1/common/">Common Runtime</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/4.2/4.2.1/common/javawscore/">Java WS Core</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/common/cwscore/">C WS Core</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/common/pythonwscore/">Python WS Core</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/common/xio/">XIO</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/common/javacog/">CoG jGlobus</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/common/pyglobus/">pyGlobus</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/common/ccommonlib/">C Common Libs</a></dt>
			</dl>
			
			<h2 class="smalltitle"><a href="/toolkit/docs/4.2/4.2.1/security/">Security</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/4.2/4.2.1/security/gsic/">GSI C</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/common/javacog/">GSI Java</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/security/wsaajava/">Java WS A&amp;A</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/security/wsaac/">C WS A&amp;A</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/security/cas/">CAS</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/security/delegation/">Delegation Service</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/security/myproxy/">MyProxy</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/security/openssh/">GSI-OpenSSH</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/security/simpleca/">SimpleCA</a></dt>
			</dl>
		
		<h2 class="smalltitle"><a href="/toolkit/docs/4.2/4.2.1/data/">Data Mgt</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/4.2/4.2.1/data/gridftp/">GridFTP</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/data/rft/">RFT</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/data/rls/">RLS</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/data/wsrls/">WS RLS</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/data/datarep/">DRS</a></dt>
			</dl>
		
		<h2 class="smalltitle"><a href="/toolkit/docs/4.2/4.2.1/info/">WS MDS</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/4.2/4.2.1/info/index/">Index Service</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/info/trigger/">Trigger Service</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/info/webmds/">WebMDS</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/info/aggregator/">Aggregator Framework</a></dt>				
				<dt><a href="/toolkit/docs/4.2/4.2.1/info/usefulrp/">UsefulRP</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/info/providers/">Info Providers</a></dt>
			</dl>
			
			<h2 class="smalltitle"><a href="/toolkit/docs/4.2/4.2.1/execution/">Execution Mgt</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/4.2/4.2.1/execution/gram4/">GRAM4</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/execution/gridway/">GridWay</a></dt>
				<dt><a href="/toolkit/docs/4.2/4.2.1/execution/gram2/">GRAM2 (legacy)</a></dt>
			</dl>
	</div>

<div id="docbookContent">
<!-- content STARTS here -->