<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title><?php echo $title; ?></title>
<!-- <link rel="shortcut icon" href="/images/favicon.ico"> -->
<!-- <link rel="icon" href="/images/favicon.ico"> -->
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<link href="http://www-unix.globus.org/toolkit/css/default.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" type="text/css" href="http://www-unix.globus.org/toolkit/css/print.css" media="print" />
</head>
<body>

<div id="headerlinks">
<br />
<a href="http://www.globus.org/faq.php">FAQ</a><br />
<a href="http://www.globus.org/site_map.php">Site Map</a><br />
<a href="http://www.globus.org/toolkit/support.html#mailinglists">Contact Us</a>
</div>

<div id="header"> <div align="left"> 
<img src="http://www-unix.globus.org/toolkit/images/globustoolkit.gif" alt="The Globus Toolkit" width="160" height="76" /></div>


<ul id="menu">
    <li id="nav-1"><a href="http://www.globus.org/">Home</a></li>
    <li id="nav-2"><a href="http://www.globus.org/alliance/">Globus Alliance</a></li>
    <li id="nav-3"><a href="http://www.globus.org/toolkit/">Globus Toolkit</a></li>
    <li id="nav-4"><a href="http://www.globus.org/grid_software/">Grid Software</a></li>
    <li id="nav-5"><a href="http://www.globus.org/solutions/">Grid Solutions</a></li>
    <!-- end of navigation list -->
  </ul>


<table class="navbartable" width="100%">
    <tr>
      <th>
	<?php 
include_once( "/nfs/www-unix.globus.org/toolkit/breadcrumb.php" ); 
globus_current_location(); ?>
      </th>

      <td>
        <form method="GET" action="http://www.google.com/custom">
        <font color="#003390">Site Search:</font>
            <input type="text" name="q" size="20" maxlength="200" value="">
            <input type="hidden" name="cof" VALUE="S:http://www.globus.org/toolkit/;VLC:#cccccc;AH:center;BGC:#ffffff;LH:76;LC:#003390;L:http://www.globus.org/toolkit/images/globustoolkit.jpg;ALC:#003390;LW:225;T:#000000;AWFID:fb67b77f3237ebb9;">
            <input type="hidden" name="domains" value="www-unix.globus.org">
            <br />
            <input type="hidden" name="sitesearch" value="www-unix.globus.org">
      </form> 
      </td>
    </tr>

  </table>
</div>
<div id="outer_wrapper">
  <div id="wrapper">
    <div id="container">
		<div id="home">
			<!-- content STARTS here -->