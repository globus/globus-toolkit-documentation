<?php
$title = "Globus: Error 404 File not found";
$section = "section-1";
include_once( "./include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="main">

<h1 class="first">Error 404 - File not found</h1>

<p>
The page you requested could not be found. We have recently reorganized
the website, which means that the page you are looking for probably exists
in another location. The following suggestions might help you find what
you are looking for:
</p>

<ul>
  <li>Use the navigation bar at the top of the page.</li>
  <li>Use the new <a href="<?=$SITE_PATHS["WEB_ROOT"]."site_map.php"; ?>">site map</a>.</li>
  <li>Use the site search.</li>
  <li>If you got the error by navigating the Globus website and think
      that the link is broken, please report it to
      <a href="mailto:webmaster@globus.org">webmaster@globus.org</a>.
  <li>If you are looking for <b>GT4 documentation</b> (3.9.x or 4.0-drafts),
      please go to 
      <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/"; ?>">http://www.globus.org/toolkit/docs/4.0/</a>.</li>
  <li>If you are looking for our <b>research papers</b>, please go to
      <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/papers.php"; ?>">http://www.globus.org/alliance/publications/papers.php</a>.</li>
</ul>

</div>


<?php include("./include/footer.inc"); ?>
