<?php

$title = "The Globus Alliance";
$section = "section-1";
include_once( "./include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
        <!--    COMMENTED OUT 
        <div id="left">
<h2>Latest News:</h2>
          <p> (08.04.2004) Researchers at Lawrence Berkeley National Laboratory have created a
              <a href="#">data distribution system</a> for LIGO using PyGlobus.</p>
          <p> (07.14.2004) <a href="#">GlobusWORLD 2005</a> will be
              held in Boston, Massachusetts USA, on February 7 - 11, 2005.</p>
          <p> (06.10.2004) The IETF has published their <a href="#">official RFC</a> for the X.509 Public Key 
              Infrastructure (PKI) proxy certificate profile.</p>
          <p> (06.10.2004) See our <a href="#">WSRF section</a> for recent documents about the WS Resource Framework specification.</p>
          <p> (06.10.2004) The <a href="#">Globus Toolkit 3.2</a> is the most recent stable software release.
              The <a href="#">Globus Toolkit 4.0</a> is coming soon!</p>
          <p> <a href="#">more... </a></p>
        </div>
        -->

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
          <p>
          <span class="newsdate">03.21.2005</span> <b>This is the news!</b> Learn more...<br>
          <span class="newsdate">02.21.2005</span> <b>Still more news, but this a little older.</b> Learn more...<br>
          <span class="newsdate">01.02.2005</span> <b>Here's something from the New Year.</b> Learn more...<br>
          <span class="newsdate">12.11.2004</span> <b>We still have stuff from last year on here.</b> Learn more...<br>
          </p>
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
