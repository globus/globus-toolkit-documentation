<?

// 2004-10-18, robinett: wrote to symplify the code on the various application pages

// each various can include text, html formating, etc
function app_info($software, $developer, $distros, $contact)
{
  print "<table>\n<tr>\n";
  print "<td class='tablekey'>Software:</td>\n<td>$software</td>\n</tr>\n";
  print "<tr>\n<td class='tablekey'>Developed by:</td>\n";
  print "<td>$developer</td>\n</tr>\n";
  print "<tr>\n<td class='tablekey'>Distributions:</td>\n";
  print "<td>$distros</td>\n</tr>\n<tr>\n";
  print "<td class='tablekey'>Contact:</td>\n<td>$contact</td>\n</tr>\n";
  print "</table>\n";
}

?>
