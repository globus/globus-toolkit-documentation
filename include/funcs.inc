<?

//moved here by yusra to look at for php reference
// 2004-11-10, robinett: the function file for the contributors db project

/* begin system-wide variables */
$auth_hash = Array(0 => "Viewer", 1 => "Contributor", 2 => "Manager", 3 => "Administrator");
/* end system-wide variables */

/* begin display-related functions */
// draw the top bar of each page
function top_bar($title)
{
  print "<h1>$title</h1>\n";
}

// draw the left navigation bar
function left_nav()
{
  print "<a href='./'>Home</a><br />\n";
  print "<a href='view.php'>View Contributors</a><br />\n";
  print "<a href='edit.php'>Edit Contributors</a><br />\n";
  print "<a href='add.php'>Add Contributor</a><br />\n";
  print "<a href='add_contrib.php'>Add a Contribution</a><br />\n";
  print "<a href='delete.php'>Delete Contributor</a><br />\n";
  print "<a href='search.php'>Search for a Contributor</a><br />\n";
  print "More to come...\n";
}

// draws everything that comes before the body content
function draw_top($title)
{
  print "<html>\n<head>\n";
  print "<title>$title</title>\n";
  print "<link href='include/default.css' rel='stylesheet' type='text/css' />\n";
  print "</head>\n\n<body>\n";
  print "<div id='top'>\n";
  top_bar($title);
  print "</div>\n<div id='content'>\n<div id='left'>\n";
  left_nav();
  print "</div>\n<div id='main'>\n";
}

// closes the page, comes after all the body content
function draw_bottom()
{
  print "</div>\n</div>\n</body>\n\n</html>";
}

// converts boolean values to human-friendly format
function yesno($yn)
{
  if ($yn) return "Yes";
  return "No";
}

// draws radio buttons for a form to choose between true/false for a value
function draw_yesno($varname, $choice = true)
{
  print "<input type='radio' name='$varname' value='1' ";
  if ($choice) {print "selected"; }
  print "/>Yes<br />\n";
  print "<input type='radio' name='$varname' value='0' ";
  if (!$choice) { print "selected"; }
  print "/>No";
}

// draws a select box based on the values of an array
// $default should be equal to the key of the $values
function draw_select($name, $values, $default)
{
  print "<select name='$name'>\n";
  foreach ($values as $k => $v)
  {
    print "<option value='$k'";
    if ($k == $default) { print " selected"; }
    print ">$v</option>\n";
  }
}
/* end display-related functions */

/* begin db-related functions */
// connects to the mysql db
function connect($u = "globus_web", $p = "spider", $h = "mysql.mcs.anl.gov", $db = "globus_web")
{
  mysql_connect($h, $u, $p) or die("Unable to connect to the database");
  mysql_select_db($db) or die("Unable to select the requested database");
}

// queries the db
function query($sql)
{
  $results = mysql_query($sql);
  return $results;
}

// fetchs a row from the query results
// note, returns an array with both numeric and associative indices
function fetch($results)
{
  $row = mysql_fetch_array($results, MYSQL_BOTH);
  return $row;
}

// creates a string for sql query conditional statements
// $formvars is an array (should be $_POST) or empty
// spaces before used on the assumption that this is used like:
// $sql = "SELECT * contributors WHERE 1=1";
// $sql .= sqloptions($_POST);
// $sql .= " AND cid=$cid";

function sqloptions($formvars)
{
  $sql = "";
  if ($formvars['andor']) { $conj = "AND"; }
  else { $conj = "OR"; }

  if ($formvars['name'])
  {
    $sql .= " $conj name LIKE '%" . $formvars['name'] . "%'";
  }
  if ($formvars['person_id'])
  {
    $sql .= " $conj person_id='" . $formvars['person_id'] . "'";
  }
  if ($formvars['org'])
  {
    $sql .= " $conj org LIKE '%" . $formvars['org'] . "%'";
  }
  if ($formvars['agency_id'])
  {
    $sql .= " $conj agency_id='" . $formvars['agency_id'] . "'";
  }
  if ($formvars['signed'])
  {
    $sql .= " $conj signed='" . $formvars['signed'] . "'";
  }
  if ($formvars['contribution'])
  {
    $sql .= " $conj contribution LIKE '%" . $formvars['contribution'] . "%'";
  }
  if ($formvars['cid'])
  {
    $sql .= " $conj cid='" . $formvars['cid'] . "'";
  }
  if ($formvars['end_date'] && $formvars['start_date'])
  {
    $sql .= " $conj (start_date >";
    if ($formvars['inclusive']) { $sql .= "="; }
    $sql .= " '" . $formvars['start_date'] . "'";
    $sql .= " AND end_date <";
    if ($formvars['inclusive']) { $sql .= "="; }
    $sql .= " '" . $formvars['end_date'] . "')";
  }
  if ($formvars['start_date'] && !$formvars['end_date'])
  {
    $sql .= " $conj start_date >";
    if ($formvars['inclusive']) { $sql .= "="; }
    $sql .= " '" . $formvars['start_date'] . "'";
  }
  if ($formvars['end_date'] && !$formvars['start_date'])
  {
    $sql .= " $conj end_date <";
    if ($formvars['inclusive']) { $sql .= "="; }
    $sql .= " '" . $formvars['end_date'] . "'";
  }
  if ($formvars['entry_date'])
  {
    $sql .= " $conj entry_date >";
    if ($formvars['inclusive']) { $sql .= "="; }
    $sql .= " '" . $formvars['entry_date'] . "'";
  }

  return $sql;
}

// creates a string displaying search conditions
// $formvars is an array (should be $_POST) or empty
function draw_sqloptions($formvars)
{
  $tmp = "You searched for all contributors who match the following critera: \n";
  if ($formvars['andor']) { $conj = "and"; }
  else { $conj = "or"; }

  if ($formvars['name'])
  {
    $tmp .= " their name is similar to \"" . $formvars['name'] . "\" $conj ";
  }
  if ($formvars['person_id'])
  {
    $tmp .= " their person_id is " . $formvars['person_id'] . " $conj";
  }
  if ($formvars['org'])
  {
    $tmp .= " their organization is similar to \"" . $formvars['org'] . "\" $conj";
  }
  if ($formvars['agency_id'])
  {
    $tmp .= " their agency_id is " . $formvars['agency_id'] . " $conj";
  }
  if ($formvars['signed'])
  {
    $tmp .= " their consent form is signed $conj";
  }
  if (!$formvars['signed'])
  {
    $tmp .= " their consent form isn't signed $conj";
  }
  if ($formvars['contribution'])
  {
    $tmp .= " their contribution contains the following words: \"" . $formvars['contribution'] . "\" $conj";
  }
  if ($formvars['cid'])
  {
    $tmp .= " their cid is " . $formvars['cid'] . " $conj";
  }
  if ($formvars['end_date'] && $formvars['start_date'])
  {
    $tmp .= " their contribution date range is between " . $formvars['start_date'] . " and " . $formvars['end_date'];
    if ($formvars['inclusive']) { $tmp .= " (inclusive)"; }
    $tmp .= " $conj";
  }
  if ($formvars['start_date'] && !$formvars['end_date'])
  {
    $tmp .= " their contribution date range begins on " . $formvars['start_date'];
    if ($formvars['inclusive']) { $tmp .= " (inclusive)"; }
    $tmp .= " $conj";
  }
  if ($formvars['end_date'] && !$formvars['start_date'])
  {
    $tmp .= " their contribution date range ends on " . $formvars['end_date'];
    if ($formvars['inclusive']) { $tmp .= " (inclusive)"; }
    $tmp .= " $conj";
  }
  if ($formvars['entry_date'])
  {
    $tmp .= " their database entry was created since " . $formvars['entry_date'];
    if ($formvars['inclusive']) { $tmp .= " (inclusive)"; }
    $tmp .= " $conj";
  }

  // strip trailing " and" or " or"
  if (substr($tmp, -3) == " or")
  {
    $tmp = substr($tmp, 0, -3);
  }
  elseif (substr($tmp, -4) == " and")
  {
    $tmp = substr($tmp, 0, -4);
  }

  return $tmp;
}
/* end db-related functions */

?>