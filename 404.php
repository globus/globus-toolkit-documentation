<?php
$title = "Globus: Error 404 File not found";
$section = "section-1";
include_once( "./include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="main">
<p>&nbsp;</p>

<hr>
<h1>Error 404 - file not found</h1>

<p>
The page you requested could not be found. We have recently reorganized
the website, which means that the page you are looking for probably exists
in another location. The following suggestions might help you find what
you are looking for:
</p>

<ul>
  <li>Use the navigation bar at the top of the page.
  <li>Use the new <a href="<?=$SITE_PATHS["WEB_ROOT"]."site_map.php"; ?>">site map</a>.
  <li>Use the site search.
  <li>If you got the error by navigating the Globus website and think
      that the link is broken, please report it to
      <a href="mailto:webmaster@globus.org">webmaster@globus.org</a>.
  <li>If you are looking for GT4 documentation (3.9.x or 4.0-drafts),
      please go to 
      <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/"; ?>">http://www.globus.org/toolkit/docs/4.0/</a>.
</ul>

</div>


<?php include("./include/footer.inc"); ?>
