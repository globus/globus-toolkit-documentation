<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
<title><?=$title; ?></title>
<!-- <link rel="shortcut icon" href="/images/favicon.ico"> -->
<!-- <link rel="icon" href="/images/favicon.ico"> -->
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<link href="<?=$SITE_PATHS["WEB_CSS"]."default.css"; ?>" rel="stylesheet" type="text/css" />
<link href="<?=$SITE_PATHS["WEB_CSS"]."print.css"; ?>" rel="stylesheet" type="text/css" media="print" />
</head>

<body class="<?=$section; ?>">

<div id="headerlinks">
  <br />
  <a href="<?=$SITE_PATHS["WEB_ROOT"]."faq.php"; ?>">FAQ</a><br />
  <a href="<?=$SITE_PATHS["WEB_ROOT"]."site_index.php"; ?>">Site Index</a><br />
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
  </ul>

  <div id="searchbar">
    <form method="post" action="http://tiger.mcs.anl.gov/htdig/cgi-bin/htsearch.cgi">
    Site Search:&nbsp;<input type="text" name="words" size="20" maxlength="2033" value="" />
    <input type="hidden" name="config" value="globus" />
    <input type="hidden" name="exclude" value="mail_archive" />
    </form> 
  </div>
</div>

<div id="outer_wrapper">
  <div id="wrapper">
    <div id="container">
      <div id="content">
