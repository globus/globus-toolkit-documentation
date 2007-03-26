<?php

$title = "The Globus Alliance";
$section = "section-1";
$pagename = "home";
include_once( "./include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

        <div id="coverimage">
             <?php include( $SITE_PATHS["SERV_ALLIANCE"]."impact/scec-1.inc" ); ?>
        </div>

        <div id="main">
         
          <p></p>

          <!--
          <table class="news">
            <tr>
              <td><span class="newsdate">03.16.2006</span></td>
              <td><b>Ian Foster explains new Web service convergence roadmap.</b> 
                <a class="learnmore" href="<?=$SITE_PATHS["WEB_ROOT"]."wsrf/convergence.php"; ?>">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">03.15.2006</span></td>
              <td><b>4th Intl. Summer School on Grid Computing in Italy, July 9-21.</b> 
                <a class="learnmore" href="http://www.dma.unina.it/~murli/ISSGC06/">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">02.16.2006</span></td>
              <td><b>Globus software supports the LHC service challenge.</b> 
                <a class="learnmore" href="http://info.web.cern.ch/Press/PressReleases/Releases2006/PR03.06E.html">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">01.17.2006</span></td>
              <td><b>New paper describes GT4 dynamic service deployment support.</b> 
                <a class="learnmore" href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/papers/HAND-Submitted.pdf"; ?>">Learn more...</a></td>
            </tr>
          </table>
          <p><a href="alliance/news/">Archive of Globus Alliance news</a></p>
          -->

          <?
             include_once("/mcs/www-unix.globus.org/include/globus_news.php");
             globus_print_alliance_news_headlines(5);
          ?>

          <p><a href="news.html">Archive of Globus Alliance news</a></p>

          <h1>Welcome to Globus<sup><small>&reg;</small></sup></h1>

          <p>The <b>Globus Alliance</b> is a community of organizations and individuals developing 
              fundamental technologies behind the "Grid," which lets people share computing power, 
              databases, instruments, and other on-line tools securely across corporate, institutional, 
              and geographic boundaries without sacrificing local autonomy.  
              <a class="learnmore" href="<?=$SITE_PATHS["WEB_ALLIANCE"]; ?>">Learn more...</a></p>

          <p>The <b>Globus Toolkit</b> is an open source software toolkit used for building Grid systems and
             applications. It is being developed by the Globus Alliance and many others all over the world. 
             A growing number of projects and companies are using the Globus Toolkit to unlock the potential 
             of grids for their cause. 
             <a class="learnmore" href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Learn more...</a></p>

          <p>The Globus Alliance is an active member in the community of
             <b>Grid Software</b> developers. 
             <a class="learnmore" href="<?=$SITE_PATHS["WEB_SOFTWARE"]; ?>">Learn more...</a>
             As partners in e-Science and e-Business projects, we've built
             <b>Grid Solutions</b> for a variety of challenges that come up when people
             share resources.
             <a class="learnmore" href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Learn more...</a></p>

          <!--end div of main-->
        </div>
        <!--end div of content-->
      </div>
      <!--ending div of container-->
    </div>


    <div class="clearing">&nbsp;</div>
    <!--ending div of wrapper-->
  </div>
  <!--ending div of outer_wrapper-->
</div>

<div id="footer">

<hr class="first" />

<table width="100%">
  <tr>
    <td colspan=3><div align="center">Sponsors include:</div></td>
  </tr>
  <tr>
    <td width="33%"><div align="center"><a href="http://www.energy.gov/"><img src="img/doelogo.jpg" width="100" height="100" border="0"></a></div></td>
    <td width="33%"><div align="center"><a href="http://www.epsrc.ac.uk/"><img src="img/EPSRC2MONO.jpg" width="216" height="70" border="0"></a></div></td>
    <td width="33%"><div align="center"><a href="http://www.nsf.gov/"><img src="img/nsfd.jpg" width="100" height="100" border="0"></a></div></td>
  </tr>
</table>

  <hr class="first"/>

  <p class="panel">For questions or feedback about this website: 
     <a href="mailto:webmaster@globus.org">webmaster@globus.org</a><br>
   For technical support or questions about Globus software, visit our 
     <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."support.html"; ?>">technical support</a> page.</p>

  <p class="panel">Globus, Globus Alliance, and Globus Toolkit are trademarks<br>
    held by the University of Chicago.</p>
  <!--ending div of footer-->
</div>


<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-726125-2";
urchinTracker();
</script> 

</body>
</html>
