<?php



$title = "Globus: Email Archive Search";



$section = "section-2";

include_once( "include/local.inc" );

include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="main">
  <!-- content STARTS here -->
  <h1>Search the Globus Alliance Email Archives</h1>
  <p>The form below allows you to search the archives of the Globus Alliance
    email lists for specific information. Select a mailing list and enter a description
    of what you want to find.</p>
  <p>You may also join any of the lists by visiting our <b> <a href="subscriptions.php">Subscription
        Center</a></b>.</p>
  <h2>Search by list </h2>
  <form method="post" action="http://tiger.mcs.anl.gov/htdig/cgi-bin/htsearch.cgi">
    <p>Search mailing list:
      <select name="restrict">
        <option value="/mail_archive/announce/">announce@globus.org</option>
        <option value="/mail_archive/cas-announce/">cas-announce@globus.org</option>
        <option value="/mail_archive/cas-commit/">cas-commit@globus.org</option>
        <option value="/mail_archive/cas-dev/">cas-dev@globus.org</option>
        <option value="/mail_archive/cas-user/">cas-user@globus.org</option>
        <option value="/mail_archive/ccutil-announce/">ccutil-announce@globus.org</option>
        <option value="/mail_archive/ccutil-commit/">ccutil-commit@globus.org</option>
        <option value="/mail_archive/ccutil-dev/">ccutil-dev@globus.org</option>
        <option value="/mail_archive/ccutil-user/">ccutil-user@globus.org</option>
        <option value="/mail_archive/cog-news/">cog-news@globus.org</option>
        <option value="/mail_archive/contrib-discuss/">contrib-discuss@globus.org</option>
        <option value="/mail_archive/cray/">cray@globus.org</option>
        <option value="/mail_archive/csec-announce/">csec-announce@globus.org</option>
        <option value="/mail_archive/csec-commit/">csec-commit@globus.org</option>
        <option value="/mail_archive/csec-dev/">csec-dev@globus.org</option>
        <option value="/mail_archive/csec-user/">csec-user@globus.org</option>
        <option value="/mail_archive/cwscore-announce/">cwscore-announce@globus.org</option>
        <option value="/mail_archive/cwscore-commit/">cwscore-commit@globus.org</option>
        <option value="/mail_archive/cwscore-dev/">cwscore-dev@globus.org</option>
        <option value="/mail_archive/cwscore-user/">cwscore-user@globus.org</option>
        <option value="/mail_archive/da-announce/">da-announce@globus.org</option>
        <option value="/mail_archive/da-commit/">da-commit@globus.org</option>
        <option value="/mail_archive/da-dev/">da-dev@globus.org</option>
        <option value="/mail_archive/da-user/">da-user@globus.org</option>
        <option value="/mail_archive/deleg-announce/">deleg-announce@globus.org</option>
        <option value="/mail_archive/deleg-commit/">deleg-commit@globus.org</option>
        <option value="/mail_archive/deleg-dev/">deleg-dev@globus.org</option>
        <option value="/mail_archive/deleg-user/">deleg-user@globus.org</option>
        <option value="/mail_archive/developer-discuss/">developer-discuss@globus.org</option>
        <option selected value="/mail_archive/discuss/">discuss@globus.org</option>
        <option value="/mail_archive/drs-announce/">drs-announce@globus.org</option>
        <option value="/mail_archive/drs-commit/">drs-commit@globus.org</option>
        <option value="/mail_archive/drs-dev/">drs-dev@globus.org</option>
        <option value="/mail_archive/drs-user/">drs-user@globus.org</option>
        <option value="/mail_archive/gram-announce/">gram-announce@globus.org</option>
        <option value="/mail_archive/gram-commit/">gram-commit@globus.org</option>
        <option value="/mail_archive/gram-dev/">gram-dev@globus.org</option>
        <option value="/mail_archive/gram-user/">gram-user@globus.org</option>
        <option value="/mail_archive/gridftp-announce/">gridftp-announce@globus.org</option>
        <option value="/mail_archive/gridftp-commit/">gridftp-commit@globus.org</option>
        <option value="/mail_archive/gridftp-dev/">gridftp-dev@globus.org</option>
        <option value="/mail_archive/gridftp-user/">gridftp-user@globus.org</option>
        <option value="/mail_archive/gt-announce/">gt-announce@globus.org</option>
        <option value="/mail_archive/gt-commit/">gt-commit@globus.org</option>
        <option value="/mail_archive/gt-dev/">gt-dev@globus.org</option>
        <option value="/mail_archive/gt-user/">gt-user@globus.org</option>
        <option value="/mail_archive/gt4-friends/">gt4-friends@globus.org</option>
        <option value="/mail_archive/gtmanuals-announce/">gtmanuals-announce@globus.org</option>
        <option value="/mail_archive/gtmanuals-commit/">gtmanuals-commit@globus.org</option>
        <option value="/mail_archive/gtmanuals-dev/">gtmanuals-dev@globus.org</option>
        <option value="/mail_archive/gtmanuals-user/">gtmanuals-user@globus.org</option>
        <option value="/mail_archive/gtmanuals-announce/">gtmanuals-announce@globus.org</option>
        <option value="/mail_archive/gtmanuals-commit/">gtmanuals-commit@globus.org</option>
        <option value="/mail_archive/gtmanuals-dev/">gtmanuals-dev@globus.org</option>
        <option value="/mail_archive/gtmanuals-user/">gtmanuals-user@globus.org</option>
        <option value="/mail_archive/java/">java@globus.org</option>
        <option value="/mail_archive/jglobus-announce/">jglobus-announce@globus.org</option>
        <option value="/mail_archive/jglobus-commit/">jglobus-commit@globus.org</option>
        <option value="/mail_archive/jglobus-dev/">jglobus-dev@globus.org</option>
        <option value="/mail_archive/jglobus-user/">jglobus-user@globus.org</option>
        <option value="/mail_archive/jwscore-announce/">jwscore-announce@globus.org</option>
        <option value="/mail_archive/jwscore-commit/">jwscore-commit@globus.org</option>
        <option value="/mail_archive/jwscore-dev/">jwscore-dev@globus.org</option>
        <option value="/mail_archive/jwscore-user/">jwscore-user@globus.org</option>
        <option value="/mail_archive/mds-announce/">mds-announce@globus.org</option>
        <option value="/mail_archive/mds-commit/">mds-commit@globus.org</option>
        <option value="/mail_archive/mds-dev/">mds-dev@globus.org</option>
        <option value="/mail_archive/mds-user/">mds-user@globus.org</option>
        <option value="/mail_archive/mpi/">mpi@globus.org</option>
        <option value="/mail_archive/python-discuss/">python-discuss@globus.org</option>
        <option value="/mail_archive/rft-announce/">rft-announce@globus.org</option>
        <option value="/mail_archive/rft-commit/">rft-commit@globus.org</option>
        <option value="/mail_archive/rft-dev/">rft-dev@globus.org</option>
        <option value="/mail_archive/rft-user/">rft-user@globus.org</option>
        <option value="/mail_archive/rls-announce/">rls-announce@globus.org</option>
        <option value="/mail_archive/rls-commit/">rls-commit@globus.org</option>
        <option value="/mail_archive/rls-dev/">rls-dev@globus.org</option>
        <option value="/mail_archive/rls-user/">rls-user@globus.org</option>
        <option value="/mail_archive/security-announce/">security-announce@globus.org</option>
        <option value="/mail_archive/usage-stats/">usage-stats@globus.org</option>
        <option value="/mail_archive/workspace-announce/">workspace-announce@globus.org</option>
        <option value="/mail_archive/workspace-commit/">workspace-commit@globus.org</option>
        <option value="/mail_archive/workspace-dev/">workspace-dev@globus.org</option>
        <option value="/mail_archive/workspace-user/">workspace-user@globus.org</option>
        <option value="/mail_archive/wsschema-announce/">wsschema-announce@globus.org</option>
        <option value="/mail_archive/wsschema-commit/">wsschema-commit@globus.org</option>
        <option value="/mail_archive/wsschema-dev/">wsschema-dev@globus.org</option>
        <option value="/mail_archive/wsschema-user/">wsschema-user@globus.org</option>
        <option value="/mail_archive/xio-announce/">xio-announce@globus.org</option>
        <option value="/mail_archive/xio-commit/">xio-commit@globus.org</option>
        <option value="/mail_archive/xio-dev/">xio-dev@globus.org</option>
        <option value="/mail_archive/xio-user/">xio-user@globus.org</option>
      </select>
    </p>
    <input type="hidden" name="config" value="globus">
    <p>Search for:
      <input type="text" size="30" name="words" value="">
      <input type="submit" value="Search">
    </p>
    <p><b>Search options:</b></p>
    <p>Format:
      <select name="format">
        <option value="builtin-long">Long
        <option value="builtin-short">Short
      </select>
      Sort by:
      <select name="sort">
        <option value="score">Score
        <option value="time">Time
        <option value="title">Title
        <option value="revscore">Reverse Score
        <option value="revtime">Reverse Time
        <option value="revtitle">Reverse Title
      </select>
    </p>
  </form>
  <h2>Search through all lists</h2>
  <p>You can also use Google search to query all of the lists at once:</p>
  <form method="GET" name="GlobusSearchForm" onSubmit="GlobusSubmit()">
    <input type="text" name="qinit" size="20"  maxlength="200" value="" />
	<input type="submit" value="Search">
    <input type="hidden" name="cof" VALUE="S:http://www.globus.org/;VLC:#cccccc;AH:center;BGC:#ffffff;LH:76;LC:#003390;L:http://www.globus.org/img/globusalliance-nourl.gif;ALC:#003390;LW:170;T:#000000;AWFID:fb67b77f3237ebb9;&q=+inurl%3Amail_archive+">
    <input type="hidden" name="domains" value="www.globus.org">
    <input type="hidden" name="sitesearch" value="www.globus.org">

  </form>
</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
