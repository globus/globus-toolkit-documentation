<?php

$title = "Globus: Publications Search";
$section = "section-2";
require_once("../../include/funcs.inc");
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="left">

<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>
</div>


<?
if ($_REQUEST['searched'])
{
  connect();
  $sql = "SELECT entry_html FROM publications WHERE 1=1";
  $sql .= sqloptions($_POST);
  $q = query($sql);

  //print "<p class='alt0' style='border: 1px dashed #999;'>\n";
  //print $sql . "\n</p>\n";

  if (count($_POST))
  {
      print "<p>" . draw_sqloptions($_POST) . "</p>\n";
  }

  // loop through the results, printing out one row at a time
  while ($row = fetch($q))
  {
    print "<a href='view.php?uid=" . $row['uid'] . "'>" . $row['name'] . "</a><br />\n";
  }
}

// show search dialogue
else
{

?>

  <form action='search.php' method='post'>
  <table>
<select name="author">
     <option value = "

  print "<tr><td><strong>Contributor</strong>:</td><td><input type='text' name='name' /></td></tr>\n";
  print "<tr><td><strong>Contributor ID</strong>:</td><td><input type='text' name='uid' /></td></tr>\n";
  print "<tr><td><strong>Person ID</strong>:</td><td><input type='text' name='person_id' /></td></tr>\n";
  print "<tr><td><strong>Organization</strong>:</td><td><input type='text' name='org' /></td></tr>\n";
  print "<tr><td><strong>Agency ID</strong>:</td><td><input type='text' name='agency_id' /></td></tr>\n";
  print "<tr><td valign='top'><strong>Agreement Signed</strong>:</td><td>";
  draw_yesno("signed");
  print "</td></tr>\n";
  print "<tr><td><strong>Start Date</strong>:</td><td><input type='text' name='start_date' /></td></tr>\n";
  print "<tr><td><strong>End Date</strong>:</td><td><input type='text' name='end_date' /></td></tr>\n";
  print "<tr><td><strong>Date Contributor<br />Added to Database</strong>:</td><td valign='top'><input type='text' name='entry_date' /></td></tr>\n";
  print "<tr><td valign='top'><strong>Contribution</strong>:</td><td><textarea name='contribution'></textarea></td></tr>\n";
  print "<tr><td>&nbsp;</td></tr>\n";
  print "<tr><td><strong>Dates Included<br />on the Edges of<br />in Search Range</strong>:</td><td valign='top'>\n";
  draw_yesno("inclusive");
  print "</td></tr>\n";
  print "<tr><td><strong>All Fields Entered<br />Must Be True<br />(AND vs OR)</strong>:</td><td valign='top'>\n";
  draw_yesno("andor");
  print "</td></tr>\n<tr><td colspan='2' align='center'><input type='submit'>&nbsp;&nbsp;<input type='reset'></td></tr>\n";
  print "</table>\n<input type='hidden' name='searched' value='true' />\n</form>\n";

}
?>