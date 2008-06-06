
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
		   		<dt><a href="/toolkit/docs/development/4.2-drafts/Usage_Stats.html">Usage Statistics</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/rn/release_notes.html">Release Notes</a></dt>
				<dt><a href="/toolkit/versioning.html">Versioning</a></dt>
				<dt><a href="/toolkit/downloads/">Downloads</a></dt>
				<dt><a href="/toolkit/advisories.html">Advisories</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/licenses/">Licenses</a></dt>
				<dt><a href="http://dev.globus.org/wiki/How_to_contribute">CVS &amp; Dev Tools</a></dt>
			</dl>
			
		<h2 class="smalltitle">Getting Started</h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/development/4.2-drafts/doc_overview.html">Doc Structure</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/key/">A Globus Primer</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/globus_is_modular.html">Globus Is Modular!</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/admin/quickstart/">Quickstart</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/admin/docbook/">Installing GT</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/admin/docbook/gtadmin-platform.html">Platform Notes</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/developer/">GT Developer's Guide</a></dt>
				<dt>GT User's Guide (coming soon)</dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/mig/migrating-gt2.html">Migrating from GT2</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/mig/migrating-gt3.html">Migrating from GT3</a></dt>
			</dl>
			
		<h2 class="smalltitle">Reference</h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/development/4.2-drafts/developer/gt-bestpractices.html">Best Practices</a></dt>
				<dt><a href="/toolkit/docs/development/coding_guidelines.html">Coding Guidelines</a></dt>
				<dt><a href="/api/">API docs</a></dt>
				<dt>Public Interfaces (coming soon)</dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/developer/gt-rp.html">Resource Properties</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/developer/gt-samples.html">Samples</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/glossary.html">Glossary</a></dt>
				<dt>Performance Studies (coming soon)</dt>
			</dl>
		<h2 class="smalltitle">Manuals</h2>
		<h2 class="smalltitle"><a href="/toolkit/docs/development/4.2-drafts/common/">Common Runtime</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/development/4.2-drafts/common/javawscore/">Java WS Core</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/common/cwscore/">C WS Core</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/common/pythonwscore/">Python WS Core</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/common/xio/">XIO</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/common/javacog/">CoG jGlobus</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/common/pyglobus/">pyGlobus</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/common/ccommonlib/">C Common Libs</a></dt>
			</dl>
			
			<h2 class="smalltitle"><a href="/toolkit/docs/development/4.2-drafts/security/">Security</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/prewsaa/">Non-WS (General) Security</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/wsaajava/">WS Java Security</a></dt>
				<!-- fixme - make live when content is up
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/wsaac/">WS C Security</a></dt>
				-->
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/cas/">CAS</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/delegation/">Delegation Service</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/myproxy/">MyProxy</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/gridshib/">GridShib</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/openssh/">GSI-OpenSSH</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/simpleca/">SimpleCA</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/security/sgas/">SGAS</a></dt>
			</dl>
		
		<h2 class="smalltitle"><a href="/toolkit/docs/development/4.2-drafts/data/">Data Mgt</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/development/4.2-drafts/data/rft/">RFT</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/data/gridftp/">GridFTP</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/data/rls/">RLS</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/data/wsrls/">WS RLS</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/data/ogsadai/">OGSA-DAI</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/data/datarep/">DRS</a></dt>
			</dl>
		
		<h2 class="smalltitle"><a href="/toolkit/docs/development/4.2-drafts/info/">MDS4</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/development/4.2-drafts/info/aggregator/">Aggregator Framework</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/info/index/">Index Service</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/info/trigger/">Trigger Service</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/info/archive/">Archive Service</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/info/webmds/">WebMDS</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/info/usefulrp/">UsefulRP</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/info/providers/">Info Providers</a></dt>
			</dl>
			
			<h2 class="smalltitle"><a href="/toolkit/docs/development/4.2-drafts/execution/">Execution Mgt</a></h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/development/4.2-drafts/execution/gram4/">GRAM4</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/execution/gridway/">GridWay</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/execution/gtcp/">GTCP</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/execution/csf/">CSF</a></dt>
				<dt><a href="/toolkit/docs/development/4.2-drafts/execution/gram2/">GRAM2 (legacy)</a></dt>
			</dl>
	</div>

<div id="docbookContent">
<!-- content STARTS here -->