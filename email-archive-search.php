<?php



$title = "Globus: Email Archive Search";



$section = "section-2";

include_once( "include/local.inc" );

include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>



<div id="main">

<!-- content STARTS here -->





<h1>Search the Globus Alliance Email Archives</h1> 



<p>The form below allows you to search the archives of the Globus Alliance email lists for specific information. Select a mailing list and enter a description of what you want to find.</p>





<p>You may also join any of the lists by visiting our <b>



<a href="subscriptions.php">Subscription Center</a></b>.</p>



<form method="post" action="http://tiger.mcs.anl.gov/htdig/cgi-bin/htsearch.cgi">



<p>Search mailing list: <select name="restrict">

  <option value="/mail_archive/announce/">announce@globus.org</option>

  <option value="/mail_archive/cog-news/">cog-news@globus.org</option>



  <option value="/mail_archive/contrib-discuss/">contrib-discuss@globus.org</option>

  <option value="/mail_archive/cray/">cray@globus.org</option>

  <option value="/mail_archive/developer-discuss/">developer-discuss@globus.org</option>
  
 <option value="/mail_archive/gt4-friends/">gt4-friends@globus.org</option>
 
  <option selected value="/mail_archive/discuss/">discuss@globus.org</option>

  <option value="/mail_archive/java/">java@globus.org</option>

  <option value="/mail_archive/mpi/">mpi@globus.org</option>



  <option value="/mail_archive/python-discuss/">python-discuss@globus.org</option>
  <option value="/mail_archive/security-announce/">security-announce@globus.org</option>
  <option value="/mail_archive/usage-stats/">usage-stats@globus.org</option>
</select></p>



<input type="hidden" name="config" value="globus">



<p>Search for:

<input type="text" size="30" name="words" value="">

<input type="submit" value="Search"></p>



<p><b>Search options:</b></p>



<p>Format:  <select name="format">

  <option value="builtin-long">Long

  <option value="builtin-short">Short



</select>



Sort by:  <select name="sort">

  <option value="score">Score

  <option value="time">Time

  <option value="title">Title

  <option value="revscore">Reverse Score

  <option value="revtime">Reverse Time

  <option value="revtitle">Reverse Title

</select></p>



</form>



 

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>



