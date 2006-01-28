<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title><?php echo $title; ?></title>
-->
<!-- <link rel="shortcut icon" href="/images/favicon.ico"> -->
<!-- <link rel="icon" href="/images/favicon.ico"> -->
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<link href="http://www.globus.org/toolkit/css/default.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" type="text/css" href="http://www.globus.org/toolkit/css/print.css" media="print" />
<link rel="alternate" title="Globus Toolkit RSS" href="http://www-unix.globus.org/toolkit/rss/downloadNews/downloadNews.xml" type="application/rss+xml">
<script>
function GlobusSubmit()
{
         var f=document.GlobusSearchForm;

         f.action="http://www.google.com/custom";
         if (f.elements[0].checked) {
              f.q.value = f.qinit.value + " -inurl:mail_archive " ;
         } else {
              f.q.value = f.qinit.value + " inurl:mail_archive " ;
         }
}
</script>

<?php
include_once( "http://www.globus.org/toolkit/docs/development/4.2-drafts/local_docbook.inc"
?>

</head>
<body class="section-3">

<div id="headerlinks">
<br />
<a href="http://www.globus.org/faq.php">FAQ</a><br />
<a href="http://www.globus.org/site_map.php">Site Map</a><br />
<a href="http://www.globus.org/toolkit/support.html#mailinglists">Contact Us</a>
</div>

<div id="header"> <div align="left"> 
<img src="http://www.globus.org/toolkit/images/globustoolkit.gif" alt="The Globus Toolkit" width="160" height="76" /></div>


<ul id="menu">
    <li id="nav-1"><a href="http://www.globus.org/">Home</a></li>
    <li id="nav-2"><a href="http://www.globus.org/alliance/">Globus Alliance</a></li>
    <li id="nav-3"><a href="http://www.globus.org/toolkit/">Globus Toolkit</a></li>
    <li id="nav-4"><a href="http://www.globus.org/grid_software/">Grid Software</a></li>
    <li id="nav-5"><a href="http://www.globus.org/solutions/">Grid Solutions</a></li>
	<li id="nav-6"><a href="https://dev.globus.org/wiki/Welcome">GlobDev</a></li>
    <!-- end of navigation list -->
  </ul>


<table class="navbartable" width="100%">
    <tr>
      <th>
	<?php 
include_once( "/mcs/www-unix.globus.org/toolkit/breadcrumb.php" ); 
globus_current_location(); ?>
      </th>

      <td>
	  
         <form method="GET" name="GlobusSearchForm"  
onSubmit="GlobusSubmit()">
         <input type="radio" name="domain" value="nomail"  
checked>&nbsp;Website&nbsp;
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
<div id="outer_wrapper">
  <div id="wrapper">
    <div id="container">
		<div id="content">

	<?php 
include_once( "/mcs/www-unix.globus.org/include/outofdate.php" ); 
globus_out_of_date(); ?>

<table width="100%"  border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td width="140px">
		<div id="docbook-left-column">
		<h2>Software Links</h2>
		<ul>
			<li><a href="http://www.globus.org/toolkit/releasenotes/">Release Notes</a></li>
			<li><a href="http://www.globus.org/toolkit/versioning.html">Version Scheme</a></li>
			<li><a href="http://www.globus.org/toolkit/downloads/">Downloads</a></li>
			<li><a href="http://www.globus.org/toolkit/advisories.html">Software Advisories</a></li>
			<li><a href="http://www.globus.org/toolkit/legal/">Licenses</a></li>
			<li><a href="http://www.globus.org/toolkit/docs/development/dev_tools.html">CVS &amp; Developer Tools</a></li>
		</ul>
		
		<h2>Beginner's Links</h2>
<!-- need some php way to map "http://docbook.globus.org/" to current doc directory (something like lee's local.inc? 
one shortcut for base docs dir http://www.globus.org/toolkit/docs/
one shortcut for doc path: path = such as 4.0/ or development/4.2-drafts/
shortcut for current version number = such as 4.0.1 or 4.1.x
shortcut for 2-digit version number = such as 4.0
-->

<ul>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'doc_overview.html'; ?>">Doc Structure</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'key/'; ?>">A Globus Primer</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'admin/docbook/quickstart.html'; ?>">Quickstart</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'admin/docbook/'; ?>">Installing GT</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'admin/docbook/ch03.html#s-platform'; ?>">Platform Notes</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'migration_guide_gt2.html'; ?>">Migrating from GT2</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'migration_guide_gt3.html'; ?>">Migrating from GT3</a></li>
</ul>


<h2>Manual Reference Links</h2>
<ul>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'best_practices.html'; ?>">Best Practices</a></li>
<li><a href="http://www.globus.org/toolkit/docs/development/coding_guidelines.html">Coding Guidelines</a></li>
<li><a href="http://www.globus.org/api/">API documentation</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'public_interfaces.html'; ?>">Public Interfaces</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'rp.html'; ?>">Resource Properties</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'samples.html'; ?>">Samples</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'[path to gtversion glossary]'; ?>">Glossary</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'[path to gtversion index]'; ?>">Index</a></li>
<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT_DOCS"].'perf_overview.html'; ?>">Performance Studies</a></li>
</ul>
</div>
			
		</td>
		
		<td>

		<!-- content STARTS here -->