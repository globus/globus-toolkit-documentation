<?
// a simple wrapper around the python CGI scripts to get them running...


exec("python mds_query.py",$output,$ret);

foreach($output as $line)
{
	print "$line<br>\n";
}
?>
