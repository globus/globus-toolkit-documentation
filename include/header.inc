<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title><?php echo $title; ?></title>
<!-- <link rel="shortcut icon" href="/images/favicon.ico"> -->
<!-- <link rel="icon" href="/images/favicon.ico"> -->
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<?php echo '<LINK href="'.$SITE_PATHS["WEB_CSS"].'default.css" rel="stylesheet" type="text/css" />'; ?>

<?php echo '<LINK rel="stylesheet" type="text/css" href="'.$SITE_PATHS["WEB_ROOT"].'css/print.css" media="print" />'; ?>

</head>
<body class="<?php echo $section; ?>">
<div id="header"> <div align="left"> 
<?php echo '<img src="'.$SITE_PATHS["WEB_IMG"].'globusalliance-nourl.gif" alt="The Globus Alliance" width="170" height="76" />'; ?>
</div>
<div id="menu">
  <ul>
    <li id="nav-1"><?php echo '<a href="'.$SITE_PATHS["WEB_ROOT"].'">'; ?>Home</a></li>
    <li id="nav-2"><?php echo '<a href="'.$SITE_PATHS["WEB_ALLIANCE"].'">'; ?>Globus Alliance</a></li>
    <li id="nav-3"><?php echo '<a href="'.$SITE_PATHS["WEB_TOOLKIT"].'">'; ?>Globus Toolkit</a></li>
    <li id="nav-4"><?php echo '<a href="'.$SITE_PATHS["WEB_SOFTWARE"].'">'; ?>Grid Software</a></li>
    <li id="nav-5"><?php echo '<a href="'.$SITE_PATHS["WEB_SOLUTIONS"].'">'; ?>Grid Solutions</a></li>

    <!-- end of navigation list -->
  </ul>
  <!-- end div of menu -->
  </div>
  <!-- end div of header -->
</div>
<div id="outer_wrapper">
  <div id="wrapper">
    <div id="container">
      <div id="content">

