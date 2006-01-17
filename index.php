<?PHp

$title = "The Globus Alliance";
$section = "section-1";
include_once( "./include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

        <div id="coverimage">
             <?php include( $SITE_PATHS["SERV_ALLIANCE"]."impact/arterialtree.inc" ); ?>
        </div>

        <div id="main">
         
          <p></p>

         <!-- <hr> -->

          <!--<h2>Recent News</h2> -->
          <table class="news">
            <tr>
              <td><span class="newsdate">01.17.2006</span></td>
              <td><b>New paper describes GT4 dynamic service deployment support.</b> 
                <a class="learnmore" href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/papers/HAND-Submitted.pdf"; ?>">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">01.09.2006</span></td>
              <td><b>Congratulations to Carl Kesselman on honorary doctorate.</b> 
                <a class="learnmore" href="http://www.science.uva.nl/english/object.cfm/objectID=81E0D1DB-A31C-4BB2-8937BBEF57D4185F">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">01.06.2006</span></td>
              <td><b>Article describes combining BPEL and WSRF using GT4.</b> 
                <a class="learnmore" href="http://webservices.sys-con.com/read/155631_2.htm">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">01.03.2006</span></td>
              <td><b>New Book: Globus<sup>&reg;</sup> Toolkit 4: Programming Java Services..</b> 
                <a class="learnmore" href="http://www.amazon.com/gp/product/0123694043/qid=1136216629/sr=1-1/ref=sr_1_1/002-7679256-3876803?s=books&v=glance&n=283155">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">12.26.2005</span></td>
              <td><b>Ian Foster listed among 50 most powerful people in networking.</b> 
                <a class="learnmore" href="http://www.networkworld.com/power/2005/122605-power50.html?page=2#foster">Learn more...</a></td>
            </tr>
          </table>
          <p><a href="alliance/news/">Archive of Globus Alliance news</a></p>

          <!-- <hr> -->

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

  <p class="panel">Comments? <a href="mailto:webmaster@globus.org">webmaster@globus.org</a></p>
  <p class="panel">Globus, Globus Alliance, and Globus Toolkit are trademarks<br>
    held by the University of Chicago.</p>
  <!--ending div of footer-->
</div>



</body>
</html>
