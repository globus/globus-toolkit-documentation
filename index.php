<?php

$title = "The Globus Alliance";
$section = "section-1";
include_once( "./include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

        <div id="coverimage">
             <p><img src="img/isabel-1.jpg" alt="Hurricane Isabel, Sept. 2003" /></p>
             <p>The Globus Toolkit supports scientific data visualization on the 
                <a href="http://www.teragrid.org/">TeraGrid</a>.  
                This image is part of a sequence that reveals the progression of 
                Hurricane Isabel in September 2003.  
                A desktop application uses the Globus Toolkit to launch parallel 
                visualization tasks on multiple TeraGrid graphics nodes.
                The appication allows users to connect to and interact with these
                tasks.
                Data provided by the National Center for Atmospheric Research.</p>
        </div>

        <div id="main">
         
          <hr>

          <!--<h2>Recent News</h2> -->
          <table class="news">
            <tr>
              <td><span class="newsdate">02.25.2005</span></td>
              <td><b>GT 3.9.5 is available for testing.</b> 
                <a href="http://www-unix.globus.org/toolkit/staging/news.html#02252005">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">02.11.2005</span></td>
              <td><b>Good times at GlobusWORLD 2005!</b> 
                <a href="http://www.globusworld.org/">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">02.09.2005</span></td>
              <td><b>UCLA Grid portal based on GT3.2.</b> 
                <a href="http://grid.ucla.edu/">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">01.25.2005</span></td>
              <td><b>Globus Consortium is formed.</b> 
                <a href="alliance/news/consortium.php">Learn more...</a></td>
            </tr>
          </table>
          <p><a href="alliance/news/">Archive of Globus Alliance news</a></p>

          <hr>

          <h1>Welcome to Globus<sup><small>&reg;</small></sup></h1>

          <p>The <b>Globus Alliance</b> is a community of organizations and individuals developing 
              fundamental technologies behind the "Grid," which lets people share computing power, 
              databases, instruments, and other on-line tools securely across corporate, institutional, 
              and geographic boundaries without sacrificing local autonomy.  
              <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]; ?>">Learn more...</a></p>

          <p>The <b>Globus Toolkit</b> is an open source software toolkit used for building Grid systems and
             applications. It is being developed by the Globus Alliance and many others all over the world. 
             A growing number of projects and companies are using the Globus Toolkit to unlock the potential 
             of grids for their cause. 
             <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Learn more...</a></p>

          <!-- COMMENTED OUT
          <p>Globus Alliance members have deep experience using <b>Grid Software</b> to overcome challenges 
             in leading-edge e-Science and e-Business initiatives. Some of this software is now part of the 
             Globus Toolkit, and some is not. The Globus Alliance is an active member in the community of
             Grid Software developers. 
             <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]; ?>">Learn more...</a></p>

          <p>Together with e-Science and e-Business teams, we've identified <b>Grid Solutions</b> for a variety of
             problems that appear when sharing resources. These solutions offer roadmaps for new teams,
             allowing greater focus on challenges in other areas. 
             <a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Learn more...</a></p>
          -->

          <!--end div of main-->
        </div>


<?php include("./include/footer.inc"); ?>
