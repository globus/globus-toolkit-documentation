<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
<title><?=$title; ?></title>
<!-- <link rel="shortcut icon" href="/images/favicon.ico"> -->
<!-- <link rel="icon" href="/images/favicon.ico"> -->
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<link href="<?=$SITE_PATHS["WEB_CSS"]."default.css"; ?>" rel="stylesheet" type="text/css" />
<link href="<?=$SITE_PATHS["WEB_CSS"]."print.css"; ?>" rel="stylesheet" type="text/css" media="print" />

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

<body class="<?=$section; ?>">

<div id="headerlinks">
  <br />
  <a href="<?=$SITE_PATHS["WEB_ROOT"]."faq.php"; ?>">FAQ</a><br />
  <a href="<?=$SITE_PATHS["WEB_ROOT"]."site_map.php"; ?>">Site Map</a><br />
  <a href="<?=$SITE_PATHS["WEB_ROOT"]."contacts.php"; ?>">Contact Us</a>
</div>

<div id="header"> 
  <div align="left"> 
    <img src="<?=$SITE_PATHS["WEB_IMG"]."globusalliance-nourl.gif"; ?>" alt="The Globus Alliance" width="170" height="76">
  </div>

  <ul id="menu">
    <li id="nav-1"><a href="<?=$SITE_PATHS["WEB_ROOT"]; ?>">Home</a></li>
    <li id="nav-2"><a href="<?=$SITE_PATHS["WEB_ALLIANCE"]; ?>">Globus Alliance</a></li>
    <li id="nav-3"><a href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Globus Toolkit</a></li>
    <li id="nav-4"><a href="<?=$SITE_PATHS["WEB_SOFTWARE"]; ?>">Grid Software</a></li>
    <li id="nav-5"><a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Grid Solutions</a></li>
    <li id="nav-6"><a href="http://dev.globus.org/">GlobDev</a></li>
  </ul>

  <table class="navbartable" width="100%">
    <tr>
      <th>
	<?php 
		include_once( $SITE_PATHS["LOCAL_INC"] . "breadcrumb2.php" ); 
		globus_current_location(); ?>
      </th>
      <td>
        <!--  OLD SEARCH FORM
        <form method="post" action="http://tiger.mcs.anl.gov/htdig/cgi-bin/htsearch.cgi">
        Site Search:&nbsp;<input type="text" name="words" size="20" maxlength="2033" value="" />
        <input type="hidden" name="config" value="globus" />
        <input type="hidden" name="exclude" value="mail_archive" />
        </form>
        -->
        <form method="GET" name="GlobusSearchForm" onSubmit="GlobusSubmit()">
        <input type="radio" name="domain" value="nomail" checked>&nbsp;Website&nbsp;
        <input type="radio" name="domain" value="mail">&nbsp;Email Lists&nbsp;
        Search:&nbsp;<input type="text" name="qinit" size="20" maxlength="200" value="" />
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
