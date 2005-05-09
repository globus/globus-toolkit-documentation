<?
include("mdsinterface.inc");

//
// customize for your site
//
$default_font = "\"Helvetica,Arial,Verdana\"";
$default_font_size = "\"2\"";

$default_font_color = "\"#111111\"";
$default_font_bright = "\"#FFFFFF\"";
$header_cell_color = "\"#000000\"";
$default_cell_color1 = "\"#FFFFFF\"";
$default_cell_color2 = "\"#E7EEF9\"";

$giis="giis.globus.org";
$dn="mds-vo-name=vo-index,o=grid";
$port = 2135;

$details = "mds-host-hn mds-cpu-total-free-15minx100 mds-cpu-total-count ";
$details .= "mds-cpu-smp-size mds-computer-total-nodecount mds-memory-ram-total-sizemb ";
$details .= "mds-fs-total-freemb mds-os-name mds-os-release ";
$details .= "mds-computer-isa mds-computer-platform";
?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body bgcolor="#004e98" link="FFFFFF" alink="#FFFFFF" vlink="#FFFFFF">
<font face=<? print("$default_font"); ?> size="2" color="#FFFFFF">

<a href="http://www.globus.org">Your Logo Here!</a>

<table border=1 rules="cols,rows" cellpadding=4 width="95%" align="center">
<tr>

<?
function print_column_heading($str)
{
    global $default_font;
    global $default_font_bright;
    global $default_font_size;
    global $header_cell_color;

    print "<td bgcolor=$header_cell_color><b>\n";
    print "<font face=$default_font size=\"3\" color=$default_font_bright>\n";
    print $str;
    print "</font></b></td>\n";
}

$ret_array = retrieve_hosts_and_specified_details($giis,$port,$dn,$details);

// sample all column headings
print_column_heading("Host Name");
print_column_heading("OS Name");
print_column_heading("OS Release");
print_column_heading("Node Count");
print_column_heading("CPU Count");
print_column_heading("Platform/Arch");
print_column_heading("CPU Free (15min)");
print_column_heading("Total RAM");
print_column_heading("Total Disk Space Free (MB)");

$default_cell_color = 0;

reset($ret_array);
while(list(,$cur_array) = each($ret_array))
{
    print "<tr>\n";

    if ($cell_color == 0)
    {
        $default_cell_color = $default_cell_color1;
        $cell_color = 1;
    }
    else
    {
        $default_cell_color = $default_cell_color2;
        $cell_color = 0;
    }

    // column 1 - host name
    print "<td bgcolor=$header_cell_color>\n";
    font_start($default_font_size);
    print_host_as_link($cur_array["Mds-Host-hn"],
                       $giis,$port,$cur_array["dn"]);
    font_end();
    print "</td>\n";

    // column 2 - OS name
    print "<td bgcolor=$default_cell_color>";
    font_start($default_font_size);
    print (strlen($cur_array["Mds-Os-name"]) ?
           $cur_array["Mds-Os-name"] : "N/A");
    font_end();
    print "</td>\n";

    // column 3 - OS release
    print "<td bgcolor=$default_cell_color>";
    font_start($default_font_size);
    print (strlen($cur_array["Mds-Os-release"]) ?
           $cur_array["Mds-Os-release"] : "N/A");
    font_end();
    print "</td>\n";

    // column 4 - Node count
    print "<td bgcolor=$default_cell_color>";
    font_start($default_font_size);
    print (strlen($cur_array["Mds-Computer-Total-nodeCount"]) ?
           $cur_array["Mds-Computer-Total-nodeCount"] : "N/A");
    font_end();
    print "</td>\n";
    
    // column 5 - CPU count
    print "<td bgcolor=$default_cell_color>";
    font_start($default_font_size);
    print (strlen($cur_array["Mds-Cpu-Smp-size"]) ?
           $cur_array["Mds-Cpu-Smp-size"] : "N/A");
    font_end();
    print "</td>\n";

    // column 6 - arch/platform
    $arch = "N/A";
    $platform = "N/A";
    if (strlen($cur_array["Mds-Computer-isa"]))
    {
        $arch = $cur_array["Mds-Computer-isa"];
    }
    if (strlen($cur_array["Mds-Computer-platform"]))
    {
        $platform = $cur_array["Mds-Computer-platform"];
    }
    print "<td bgcolor=$default_cell_color>";
    font_start($default_font_size);
    print $arch . "/" . $platform;
    font_end();
    print "</td>\n";

    // column 7 - CPU free (15 min)
    print "<td bgcolor=$default_cell_color>";
    font_start($default_font_size);
    print (strlen($cur_array["Mds-Cpu-Total-Free-15minX100"]) ?
           $cur_array["Mds-Cpu-Total-Free-15minX100"] : "N/A");
    font_end();
    print "</td>\n";

    // column 8 - Total RAM
    print "<td bgcolor=$default_cell_color>";
    font_start($default_font_size);
    print (strlen($cur_array["Mds-Memory-Ram-Total-sizeMB"]) ?
           $cur_array["Mds-Memory-Ram-Total-sizeMB"] : "N/A");
    font_end();
    print "</td>\n";

    // column 9 - Total FS
    print "<td bgcolor=$default_cell_color>";
    font_start($default_font_size);
    print (strlen($cur_array["Mds-Fs-Total-freeMB"]) ?
           $cur_array["Mds-Fs-Total-freeMB"] : "N/A");
    print "</td>\n";

    print "</tr>\n";
}

?>
</table>

<br><br>

</font>
</body>
</html>
