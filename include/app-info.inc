<?

// 2004-10-18, robinett: wrote to symplify the code on the various application pages

// each various can include text, html formating, etc
function app_info($software, $developer, $distros, $contact)
{
  print "<table border='0' cellspacing='0' cellpadding='4'>\n<tr valign='top'>\n";
  print "<td><small><strong>Software:</strong></small></td>\n<td><small>$software</small></td>\n</tr>\n";
  print "<tr valign='top'>\n<td><small><strong>Developed by:</strong></small></td>\n";
  print "<td><small>$developer</small></td>\n</tr>\n";
  print "<tr valign='top'>\n<td><small><strong>Distributions:</strong></small></td>\n";
  print "<td><small>$distros</small></td>\n</tr>\n<tr valign='top'>\n";
  print "<td><small><strong>Contact:</strong></small></td>\n<td><small>$contact</small></td>\n</tr>\n";
  print "</table>\n";
}

?>