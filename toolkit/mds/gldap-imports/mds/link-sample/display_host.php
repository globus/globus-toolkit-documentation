<?

include("mdsinterface.inc");

$giis = urldecode($giis);
$host = urldecode($host);
$port = urldecode($port);
$dn   = urldecode($dn);

?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body bgcolor="#FFFFFF" link="0000FF" alink="#0000FF" vlink="#0000FF">
<center>
<br><hr><br>

<font face="Tahoma,Verdana" size="2" color="#000000">

<b>Host Stats For <? print "<font color=\"#FF0000\">$host</font>" ?></b><br>

<table border>
<tr>

<?

// -------------------------------------------
// represents one way to use the function
// "retrieve_host_details".  Note that the
// variables "giis", "host", "port" and "dn"
// are required as input arguments.  An array
// which maps attribute types to values and
// that may contain sub-arrays containing only
// attribute values is returned.
// -------------------------------------------

$host_detail_array = retrieve_host_details($giis,$host,$port,$dn);

reset($host_detail_array);
while(list($attr_type,$attr_value) = each($host_detail_array))
{
    if (is_string($attr_value))
    {
        print "<tr>\n";
        print "<td>$attr_type</td>\n";
        print "<td>$attr_value</td>\n";
        print "</tr>\n";
    }
    else if (is_array($attr_value))
    {
        reset($attr_value);
        while(list(,$sub_value) = each($attr_value))
        {
            print "<tr>\n";
            print "<td>$attr_type</td>\n";
            print "<td>$sub_value</td>\n";
            print "</tr>\n";
        }
    }
}

?>

</tr>
</table>

<br><br>
</font>
</body>
</html>
