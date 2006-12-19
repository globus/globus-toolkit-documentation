<?php



$title = "Globus: Alliance - Publications";



$section = "section-2";

include_once( "../../include/local.inc" );

include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<!--

<div id="left">

<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>

</div>

-->



<div id="home">



<h1 class="first">Globus<sup><small>&reg;</small></sup> Publications</h1>



<p>The Globus Alliance has produced an enormous amount of written material

on the Grid, distributed computing, applied computer science, and related 

topics.</p>



<ul>

<li><a href="papers.php">Research Papers</a></li>

<!-- <li>Articles</li> -->

<li><a href="books/">Books</a></li>

<!-- <li>Presentations</li> -->

<li><a href="clusterworld/">"On the Grid" Columns in ClusterWorld</a></li>

<li><a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/"; ?>">Globus Toolkit Documentation</a></li>

</ul>



</div>



<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>

