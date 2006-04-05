<?php

$title = "Globus: The Globus Alliance";
$section = "section-2";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>
</div>
-->

<div id="home">

	<h1 class="first">The Globus Alliance</h1>
	<p>The Globus Alliance is an international collaboration that conducts 
           research and development to create fundamental Grid technologies. 
           The Grid lets people share computing power, databases, and other 
           on-line tools securely across corporate, institutional, and 
           geographic boundaries without sacrificing local autonomy.
           <a href="about.php" class="learnmore">Learn more...</a></p>

        <hr>

        <table width="100%" class="news">
          <tr>
            <td width="33%">
              <h4>People and Organizations</h4>
              <ul>
                <li><a href="team/">The Globus Team</a></li>
                <li><a href="projects.php">e-Science/e-Business Projects</a></li>
                <li><a href="http://www.globusconsortium.com/">The Globus Consortium</a></li>
                <li><a href="affiliates.php">Academic Affiliates</a></li>
                <li><a href="sponsors.php">Sponsors</a></li>
                <li><a href="employment/">Job Opportunities</a></li>
                <li><a href="logos/">Using Our Logos</a></li>
              </ul>
            </td>
            <td width="33%">
              <h4>Publications</h4>
              <ul>
                <li><a href="publications/papers.php">Research Papers</a></li>
                <!-- <li>Articles</li> -->
                <li><a href="publications/books/">Books</a></li>
                <li><a href="publications/clusterworld/">"On the Grid" Columns</a></li>
                <!-- <li>Presentations</li> -->
                <li><a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/"; ?>">Globus 
                    Toolkit Documentation</a></li>
              </ul>
            </td>
            <td width="33%">
              <h4>News and Events</h4>
              <ul>
                <li><a href="<?=$SITE_PATHS["WEB_ROOT"]."news.html"; ?>">News Archive</a></li>
                <li><a href="events/">Meetings and Events</a></li>
                <li><a href="impact/">Impact of Our Work</a></li>
                <li><a href="news/kit.php">Press Kit</a></li>
                <li><a href="news/">Older News Archive</a></li>
              </ul>
            </td>
          </tr>
        </table>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
