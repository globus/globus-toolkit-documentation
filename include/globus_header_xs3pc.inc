<?php 

include_once( "/mcs/www-unix.globus.org/lib-common.php"); 

$DEVELOPER = ereg( "^\/developer", $PHP_SELF );
$TOOLKIT = ereg( "^\/toolkit", $PHP_SELF );

if ( ereg( "^\/security", $PHP_SELF ) )
{
    $DEVELOPER = 1;
}
if ( ereg( "^\/gram", $PHP_SELF ) )
{
    $DEVELOPER = 1;
}
if ( ereg( "^\/mds", $PHP_SELF ) )
{
    $DEVELOPER = 1;
}
if ( ereg( "^\/gridftp", $PHP_SELF ) )
{
    $DEVELOPER = 1;
}
if ( ereg( "^\/rls", $PHP_SELF ) )
{
    $DEVELOPER = 1;
}
if ( ereg( "^\/core", $PHP_SELF ) )
{
    $DEVELOPER = 1;
}

if( $TOOLKIT != 1 && $DEVELOPER != 1 )
{
   $TOOLKIT = 1;
}
   
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="http://www-unix.globus.org/xs3p_style.css">
<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www-unix.globus.org/toolkit/rss/downloadNews/downloadNews.xml" />
<link rel="shortcut icon" href="http://www-unix.globus.org/toolkit/icon-16.png" type="image/png">
<link rel="icon" href="http://www-unix.globus.org/toolkit/icon-16.png" type="image/png">
<script language="javascript1.2" type="text/javascript" src="http://www-unix.globus.org/lib-common.js"></script>
</head>
<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0"
    text="#333366" link="#333366" alink="#333366" vlink="#333366"
    bgcolor="#ffffff">

<!-- Master Table -->
<table border=0 cellpadding=0 cellspacing=0 align=left width=90%>
<tr>
<td colspan=2>

    <!-- Header Table -->
	<table border="0" cellpadding=0 cellspacing=0 align=left width="100%">
	<tr>
	<td colspan="5"><img src="http://www-unix.globus.org/images/a0c.gif" border="0" width="505" height="32" alt=""></td>
	</tr>
    <tr>
    <td width="134">
        <a href="http://www.globus.org"><img 
        src="http://www-unix.globus.org/images/b0c.gif" border="0" width="134" 
        height="38" alt=""></a></td>
    <td width="86">
        <a href="http://www.globus.org/about/" onMouseOver="document.about.src='http://www-unix.globus.org/images/b1b_on.gif'; window.status='About the Globus Project'; return true;" onMouseOut="document.about.src='http://www-unix.globus.org/images/b1b_off.gif'">
		<img src="http://www-unix.globus.org/images/b1b_off.gif" name="about" width="86" height="38" border="0" alt="about"></a></td>
    <td width="80">
        <a href="http://www.globus.org/research/" 
        onMouseOver="document.research.src='http://www-unix.globus.org/images/b2b_on.gif'; window.status='Globus Project Research'; return true;"
        onMouseOut="document.research.src='http://www-unix.globus.org/images/b2b_off.gif'"><img 
        src="http://www-unix.globus.org/images/b2b_off.gif" name="research" width="80" height="38" border="0" 
        alt="research"></a></td>
    <td width="82">
        <a href="http://www.globus.org/toolkit/" 
        onMouseOver="document.toolkit.src='http://www-unix.globus.org/images/b3b_on.gif'; window.status='Globus Project Software'; return true;"
        onMouseOut="document.toolkit.src='http://www-unix.globus.org/images/b3b_<?php
        $TOOLKIT == 1 ? print "on" : print "off"; 
        ?>.gif'"><img src="http://www-unix.globus.org/images/b3b_<?php
        $TOOLKIT == 1 ? print "on" : print "off"; 
        ?>.gif" name="toolkit" width="82" height="38" border="0" 
        alt="toolkit"></a></td>
    <td>
        <a href="http://www.globus.org/developer/" 
        onMouseOver="document.development.src='http://www-unix.globus.org/images/b4b_on.gif'; window.status='Globus Project Developer Resources'; return true;"
        onMouseOut="document.development.src='http://www-unix.globus.org/images/b4b_<?php
        $DEVELOPER == 1 ? print "on" : print "off";
        ?>.gif'"><img src="http://www-unix.globus.org/images/b4b_<?php
        $DEVELOPER == 1 ? print "on" : print "off";
        ?>.gif" name="development" width="136" height="38" border="0" 
        alt="development"></a></td>
    </tr>
    <tr>
    <td><img src="http://www-unix.globus.org/images/c0c.gif" width="100" height="32" alt=""></td>
    </tr>
	</table> 
</td>
</tr> <!-- Header Table -->

<!-- Main row -->
<tr>
<td valign=top align=left height="90%" width=150>
    <img border=0
    src="http://www-unix.globus.org/images/blank.gif"
    height=1 width=150 alt="">
    <?php 
        if ( $TOOLKIT == 1)
        {
            include( "/mcs/www-unix.globus.org/include/globus_panel.inc" );
        }
        else if ( $DEVELOPER == 1)
        {
            include( "/mcs/www-unix.globus.org/include/globus_panel.inc" );
        }
    ?>
</td>
<td valign=top align=left>
<table border="0" cellpadding="0">
  <tr>
    <td align="left" valign="top">
<!-- startprint -->