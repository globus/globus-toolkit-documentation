<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title><?php echo $title; ?></title>
<!-- <link rel="shortcut icon" href="/images/favicon.ico"> -->
<!-- <link rel="icon" href="/images/favicon.ico"> -->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="/toolkit/css/default.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" type="text/css" href="/toolkit/css/print.css" media="print" />
<link rel="alternate" title="Globus Toolkit RSS" href="/toolkit/rss/downloadNews/downloadNews.xml" type="application/rss+xml">
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
</head>
<body class="section-3">

<div id="headerlinks">
<br />
<a href="http://www.globus.org/faq.php">FAQ</a><br />
<a href="http://www.globus.org/site_map.php">Site Map</a><br />
<a href="http://dev.globus.org/wiki/Mailing_Lists">Contact Us</a>
</div>

<div id="header"> <div align="left"> 
<img src="/toolkit/data/gridftp/images/gridftp.gif" alt="The Globus Toolkit" width="320" height="76" /></div>

<ul id="menu">
    <li id="nav-1"><a href="/">Home</a></li>
    <li id="nav-2"><a href="/alliance/">Globus Alliance</a></li>
    <li id="nav-3"><a href="/toolkit/">Globus Toolkit</a></li>
    <li id="nav-4"><a href="/grid_software/">Grid Software</a></li>
    <li id="nav-5"><a href="/solutions/">Grid Solutions</a></li>
    <li id="nav-6"><a href="https://dev.globus.org/wiki/Welcome">dev.globus</a></li>
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

  <div id="wrapper">
    <div id="container">
		<div id="content">

	<?php 
include_once( "/mcs/www-unix.globus.org/include/outofdate.php" ); 
globus_out_of_date(); ?>

			<!-- content STARTS here -->
