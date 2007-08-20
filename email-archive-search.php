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





<p>For more information about our mailing lists, click <a href="http://dev.globus.org/wiki/Mailing_Lists">here</a>.</p>



<form method="post" action="http://tiger.mcs.anl.gov/htdig/cgi-bin/htsearch.cgi">



<p>Search mailing list: <select name="restrict">
<option value="" selected>Select A List</option>
<option value="" ></option>
<option value="" >INDIVIDUAL LISTS</option>
<option value="" ></option>
  <option value="/mail_archive/announce/">announce@globus.org</option>
  <option value="/mail_archive/cog-news/">cog-news@globus.org</option>
  <option value="/mail_archive/contrib-discuss/">contrib-discuss@globus.org (no mail since March 2004)</option>
  <option value="/mail_archive/cray/">cray@globus.org (no mail since 2003)</option>
  <option value="/mail_archive/developer-discuss/">developer-discuss@globus.org (deprecated)</option>
  <option value="/mail_archive/discuss/">discuss@globus.org (deprecated)</option>
  <option value="/mail_archive/gt4-friends/">gt4-friends@globus.org (deprecated)</option>
  <option value="/mail_archive/java/">java@globus.org</option>
  <option value="/mail_archive/mpi/">mpi@globus.org</option>
  <option value="/mail_archive/python-discuss/">python-discuss@globus.org</option>
  <option value="/mail_archive/security-announce/">security-announce@globus.org</option>
  <option value="/mail_archive/usage-stats/">usage-stats@globus.org</option>
  <option value="" ></option>
  <option value="" >LISTS BY PROJECTS</option>
  <option value="" ></option>
  <option value="" >==CAS Lists==</option>
  <option value="/mail_archive/cas-commit/">cas-commit@globus.org</option>
  <option value="/mail_archive/cas-dev/">cas-dev@globus.org</option>
  <option value="/mail_archive/cas-user/">cas-user@globus.org</option>
  <option value="" ></option>
  <option value="" >==C Core Utilities Lists ==</option>
  <option value="/mail_archive/ccutil-commit/">ccutil-commit@globus.org</option>
  <option value="/mail_archive/ccutil-dev/">ccutil-dev@globus.org</option>
  <option value="/mail_archive/ccutil-user/">ccutil-user@globus.org</option>
  <option value="" ></option>
  <option value="" >==C Security Lists==</option>
    <option value="/mail_archive/csec-commit/">csec-commit@globus.org</option>
  <option value="/mail_archive/csec-dev/">csec-dev@globus.org</option>
  <option value="/mail_archive/csec-user/">csec-user@globus.org</option>
  <option value="" ></option>
  <option value="" >==C WS Core Lists==</option>
    <option value="/mail_archive/cwscore-commit/">cwscore-commit@globus.org</option>
  <option value="/mail_archive/cwscore-dev/">cwscore-dev@globus.org</option>  
  <option value="/mail_archive/cwscore-user/">cwscore-user@globus.org</option>
  <option value="" ></option>
  <option value="" >==Dynamic Accounts Lists==</option>
   <option value="/mail_archive/da-commit/">da-commit@globus.org</option>
  <option value="/mail_archive/da-dev/">da-dev@globus.org</option>
  <option value="/mail_archive/da-user/">da-user@globus.org</option>
  <option value="" ></option>
  <option value="" >==Delegation Service Lists==</option>
    <option value="/mail_archive/deleg-commit/">deleg-commit@globus.org</option>
  <option value="/mail_archive/deleg-dev/">deleg-dev@globus.org</option>
  <option value="/mail_archive/deleg-user/">deleg-user@globus.org</option>
  <option value="" ></option>
  <option value="" >==DRS Lists==</option>
    <option value="/mail_archive/drs-commit/">drs-commit@globus.org</option>
  <option value="/mail_archive/drs-dev/">drs-dev@globus.org</option>
  <option value="/mail_archive/drs-user/">drs-user@globus.org</option>
  <option value="" ></option>
  <option value="" >==GRAM Lists==</option>
   <option value="/mail_archive/gram-commit/">gram-commit@globus.org</option>
  <option value="/mail_archive/gram-dev/">gram-dev@globus.org</option>
  <option value="/mail_archive/gram-user/">gram-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==GridFTP Lists==</option>
    <option value="/mail_archive/gridftp-commit/">gridftp-commit@globus.org</option>
  <option value="/mail_archive/gridftp-dev/">gridftp-dev@globus.org</option>
  <option value="/mail_archive/gridftp-user/">gridftp-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==Globus Toolkit Lists==</option>
    <option value="/mail_archive/gt-commit/">gt-commit@globus.org</option>
  <option value="/mail_archive/gt-dev/">gt-dev@globus.org</option>
  <option value="/mail_archive/gt-user/">gt-user@globus.org</option>
  <option value="" ></option>
  <option value="" >==Globus Toolkit Release Manuals Lists==</option>
    <option value="/mail_archive/gtmanuals-commit/">gtmanuals-commit@globus.org</option>
  <option value="/mail_archive/gtmanuals-dev/">gtmanuals-dev@globus.org</option>
  <option value="/mail_archive/gtmanuals-user/">gtmanuals-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==Gridway Lists==</option>
    <option value="/mail_archive/gridway-commit/">gridway-commit@globus.org</option>
  <option value="/mail_archive/gridway-dev/">gridway-dev@globus.org</option>
  <option value="/mail_archive/gridway-user/">gridway-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==JGlobus Lists==</option>
    <option value="/mail_archive/jglobus-commit/">jglobus-commit@globus.org</option>
  <option value="/mail_archive/jglobus-dev/">jglobus-dev@globus.org</option>
  <option value="/mail_archive/jglobus-user/">jglobus-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==Java WS Core Lists==</option>
   <option value="/mail_archive/jwscore-commit/">jwscore-commit@globus.org</option>
  <option value="/mail_archive/jwscore-dev/">jwscore-dev@globus.org</option>
  <option value="/mail_archive/jwscore-user/">jwscore-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==MDS Lists==</option>
    <option value="/mail_archive/mds-commit/">mds-commit@globus.org</option>
  <option value="/mail_archive/mds-dev/">mds-dev@globus.org</option>
  <option value="/mail_archive/mds-user/">mds-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==RFT Lists==</option>
    <option value="/mail_archive/rft-commit/">rft-commit@globus.org</option>
  <option value="/mail_archive/rft-dev/">rft-dev@globus.org</option>
  <option value="/mail_archive/rft-user/">rft-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==RLS Lists==</option>
    <option value="/mail_archive/rls-commit/">rls-commit@globus.org</option>
  <option value="/mail_archive/rls-dev/">rls-dev@globus.org</option>
  <option value="/mail_archive/rls-user/">rls-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==Virtual Workspace Lists==</option>
    <option value="/mail_archive/workspace-commit/">workspace-commit@globus.org</option>
  <option value="/mail_archive/workspace-dev/">workspace-dev@globus.org</option>
  <option value="/mail_archive/workspace-user/">workspace-user@globus.org</option>  
  <option value="" ></option>
  <option value="" >==WS Schema Lists==</option>
    <option value="/mail_archive/wsschema-commit/">wsschema-commit@globus.org</option>
  <option value="/mail_archive/wsschema-dev/">wsschema-dev@globus.org</option>
  <option value="/mail_archive/wsschema-user/">wsschema-user@globus.org</option> 
  <option value="" ></option>
  <option value="" >==XIO Lists==</option>
    <option value="/mail_archive/xio-commit/">xio-commit@globus.org</option>
  <option value="/mail_archive/xio-dev/">xio-dev@globus.org</option>
  <option value="/mail_archive/xio-user/">xio-user@globus.org</option> 

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



