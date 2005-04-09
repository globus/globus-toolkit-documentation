<?php

$title = "The Globus Alliance";
$section = "section-1";
include_once( "./include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

        <div id="coverimage">
             <?php include( $SITE_PATHS["SERV_ALLIANCE"]."impact/isabel.inc" ); ?>
        </div>

        <div id="main">
         
          <p></p>

          <hr>

          <!--<h2>Recent News</h2> -->
          <table class="news">
            <tr>
              <td><span class="newsdate">04.01.2005</span></td>
              <td><b>See us in San Diego in May!</b> 
                <a class="learnmore" href="<?=$SITE_PATHS["WEB_ALLIANCE"]."events/"; ?>">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">02.11.2005</span></td>
              <td><b>UK Globus Week was a big success.</b> 
                <a class="learnmore" href="http://www.nesc.ac.uk/esi/events/519/">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">02.25.2005</span></td>
              <td><b>GT 3.9.5 is available for testing.</b> 
                <a class="learnmore" href="http://www-unix.globus.org/toolkit/staging/news.html#02252005">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">02.09.2005</span></td>
              <td><b>UCLA builds Grid portal using GT3.2.</b> 
                <a class="learnmore" href="http://grid.ucla.edu/">Learn more...</a></td>
            </tr>
          </table>
          <p><a href="alliance/news/">Archive of Globus Alliance news</a></p>

          <hr>

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

          <!-- COMMENTED OUT
          <p>Globus Alliance members have deep experience using <b>Grid Software</b> to overcome challenges 
             in leading-edge e-Science and e-Business initiatives. Some of this software is now part of the 
             Globus Toolkit, and some is not. The Globus Alliance is an active member in the community of
             Grid Software developers. 
             <a class="learnmore" href="<?=$SITE_PATHS["WEB_SOFTWARE"]; ?>">Learn more...</a></p>

          <p>Together with e-Science and e-Business teams, we've identified <b>Grid Solutions</b> for a variety of
             problems that appear when sharing resources. These solutions offer roadmaps for new teams,
             allowing greater focus on challenges in other areas. 
             <a class="learnmore" href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Learn more...</a></p>
          -->

          <!--end div of main-->
        </div>


<?php include("./include/footer.inc"); ?>
