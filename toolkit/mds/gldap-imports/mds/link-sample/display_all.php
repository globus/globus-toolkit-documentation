<? include("mdsinterface.inc"); ?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body bgcolor="#FFFFFF" link="0000FF" alink="#0000FF" vlink="#0000FF">
<center>
<br><hr><br>

<font face="Tahoma,Verdana" size="2" color="#000000">

<b>The Following Hosts Appear To Be Alive According to
<? print "<font color=\"#FF0000\">$giis</font>" ?>
</b>

<table border>
<?

// -------------------------------------------
// represents one way to use the function
// "retrieve_all_hosts".
// -------------------------------------------

$hostobj_array = retrieve_all_hosts($giis,$port,$dn);

for($i = 0; $i < count($hostobj_array); $i++)
{
    $hostobj = $hostobj_array[$i];
    $hostname = $hostobj->get_hostname();

    print "<tr>\n";
    print "<td><font face=\"Tahoma,Verdana\" size=\"1\" color=\"#000000\">\n";
    print "Host:</font></td>\n";
    print "<td><font face=\"Tahoma,Verdana\" size=\"1\" color=\"#000000\">\n";
    print "$hostname</font></td><td>\n";

    print "<table><tr><td>\n";
    foreach($hostobj->get_dn_array() as $host_dn)
    {
        print "<tr>";
        print "<font face=\"Tahoma,Verdana\" size=\"1\" color=\"#000000\">\n";
        print_dn_as_link($hostname,$giis,$port,$host_dn);
        print "\n</font>\n";
        print "</tr>\n";
    }
    print "</td></tr></table>\n";
    print "</tr>\n";
}

?>
</table>

<br><br>
</font>
</body>
</html>
