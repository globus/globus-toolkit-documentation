<?php

$title = "Globus: About the Globus Alliance";
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

	<h1 class="first">The Globus<sup><small>&reg;</small></sup> Alliance</h1>
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
                <li>e-Science/e-Business Project Partners</li>
                <li><a href="affiliates.php">Academic Affiliates</a></li>
                <li><a href="sponsors.php">Sponsors</a></li>
                <li><a href="employment/">Job Opportunities</a></li>
              </ul>
            </td>
            <td width="33%">
              <h4>Publications</h4>
              <ul>
                <li>Research Papers</li>
                <li>Mass Media</li>
                <li>Books</li>
                <li>Presentations</li>
              </ul>
            </td>
            <td width="33%">
              <h4>News and Events</h4>
              <ul>
                <li><a href="news/">News Archive</a></li>
                <li>Meetings and Events</li>
              </ul>
            </td>
          </tr>
        </table>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
