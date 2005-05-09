<?
include("mdsinterface.inc");

$giis = urldecode($giis);
$host = urldecode($host);
$port = urldecode($port);
$dn   = urldecode($dn);

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
?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body bgcolor="#004e98" link="FFFFFF" alink="#FFFFFF" vlink="#FFFFFF">
<font face=<? print("$default_font"); ?> size="2" color="#FFFFFF">

<table border="0" cellpadding="1" cellspacing="0" width="100%" align="center">
<tr>
<?
function organize_results($arr)
{
    $ret = array();
    $ret["COMP"] = array();
    $ret["CPU"] = array();
    $ret["FS"] = array();
    $ret["MEM"] = array();
    $ret["NET"] = array();
    $ret["MISC"] = array();

    reset($arr);
    while(list($attr_type,$attr_value) = each($arr))
    {
        if (is_string($attr_value))
        {
            $newelem = new elem;
            $newelem->set_type($attr_type);
            $newelem->set_value($attr_value);

            if ((strcmp($attr_type,"Mds-Computer-isa") == 0) ||
                (strcmp($attr_type,"Mds-Computer-platform") == 0) ||
                (strcmp($attr_type,"Mds-Computer-Total-nodeCount") == 0) ||
                (strcmp($attr_type,"Mds-Os-name") == 0) ||
                (strcmp($attr_type,"Mds-Host-hn") == 0) ||
                (strcmp($attr_type,"Mds-Os-release") == 0) ||
                (strcmp($attr_type,"Mds-Os-version") == 0))
            {
                array_push($ret["COMP"],$newelem);
            }
            else if ((strcmp($attr_type,"Mds-Cpu-Cache-l2kB") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-features") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-Free-15minX100") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-Free-1minX100") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-Free-5minX100") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-model") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-Smp-size") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-speedMHz") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-Total-count") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-Total-Free-15minX100") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-Total-Free-1minX100") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-Total-Free-5minX100") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-vendor") == 0) ||
                     (strcmp($attr_type,"Mds-Cpu-version") == 0))
            {
                array_push($ret["CPU"],$newelem);
            }
            else if ((strcmp($attr_type,"Mds-Fs-freeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Fs-sizeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Fs-Total-count") == 0) ||
                     (strcmp($attr_type,"Mds-Fs-Total-freeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Fs-Total-sizeMB") == 0))
            {
                array_push($ret["FS"],$newelem);
            }
            else if ((strcmp($attr_type,"Mds-Memory-Ram-freeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Memory-Ram-sizeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Memory-Ram-Total-freeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Memory-Ram-Total-sizeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Memory-Vm-freeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Memory-Vm-sizeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Memory-Vm-Total-freeMB") == 0) ||
                     (strcmp($attr_type,"Mds-Memory-Vm-Total-sizeMB") == 0))
            {
                array_push($ret["MEM"],$newelem);
            }
            else if ((strcmp($attr_type,"Mds-Net-addr") == 0) ||
                     (strcmp($attr_type,"Mds-Net-name") == 0) ||
                     (strcmp($attr_type,"Mds-Net-netaddr") == 0) ||
                     (strcmp($attr_type,"Mds-Net-Total-count") == 0))
            {
                array_push($ret["NET"],$newelem);
            }
            else
            {
                array_push($ret["MISC"],$newelem);
            }
        }
        else if (is_array($attr_value))
        {
            reset($attr_value);

            if ((strcmp($attr_type,"Mds-Fs-freeMB") == 0) ||
                (strcmp($attr_type,"Mds-Fs-sizeMB") == 0))
            {
                while(list(,$sub_value) = each($attr_value))
                {
                    $subelem = new elem;
                    $subelem->set_type($attr_type);
                    $subelem->set_value($sub_value);
                    array_push($ret["FS"],$subelem);
                }
            }
            else if ((strcmp($attr_type,"Mds-Net-addr") == 0) ||
                     (strcmp($attr_type,"Mds-Net-name") == 0) ||
                     (strcmp($attr_type,"Mds-Net-netaddr") == 0) ||
                     (strcmp($attr_type,"Mds-Net-Total-count") == 0))
            {
                while(list(,$sub_value) = each($attr_value))
                {
                    $subelem = new elem;
                    $subelem->set_type($attr_type);
                    $subelem->set_value($sub_value);
                    array_push($ret["NET"],$subelem);
                }
            }
            else
            {
                while(list(,$sub_value) = each($attr_value))
                {
                    $subelem = new elem;
                    $subelem->set_type($attr_type);
                    $subelem->set_value($sub_value);
                    array_push($ret["MISC"],$subelem);
                }
            }
        }
    }
    return $ret;
}

function dump_table_stats($title, $arr)
{
    global $default_cell_color1;
    global $default_cell_color2;
    global $default_font;
    global $default_font_size;
    global $header_cell_color;
    global $default_font_bright;

    $cell_color = 0;

    print "</table>\n</table>\n</td>\n</tr>\n</table>\n<br>\n";

    print "<table border=\"0\" cellspacing=\"0\" cellpadding=\"3\" ";
    print "width=\"90%\" align=\"center\"><tr><td bgcolor=\"#000000\" ";
    print "align=\"center\" colspan=\"2\">\n";
    print "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"4\">";
    print "<tr><td align=\"left\"><tr>\n";

    print "<td bgcolor=$header_cell_color align=\"center\" colspan=\"2\">\n";
    print "<table width=\"100%\" cellspacing=0 cellpadding=0><tr><td align=\"left\">\n";
    print "<font face=$default_font size=\"3\" color=$default_font_bright>\n";
    print "<b>$title</b>\n</font></td>";
    print "</tr></table></td>\n";

    reset($arr);
    while(list(,$val) = each($arr))
    {
        if ((strcmp($val->get_type(),"Mds-Memory-Ram-sizeMB") == 0) ||
            (strcmp($val->get_type(),"Mds-Memory-Ram-Total-sizeMB") == 0) ||
            (strcmp($val->get_type(),"Mds-Memory-Vm-sizeMB") == 0) ||
            (strcmp($val->get_type(),"Mds-Memory-Vm-Total-sizeMB") == 0))
        {
            continue;
        }

        print "<tr>\n";

        if ($cell_color == 0)
        {
            $cell_color_str = $default_cell_color1;
            $cell_color = 1;
        }
        else
        {
            $cell_color_str = $default_cell_color2;
            $cell_color = 0;
        }

        print "<td bgcolor=$cell_color_str width=\"35%\">";
        font_start($default_font_size);
        print $val->get_friendly_type();
        font_end();
        print "</td>\n";

        print "<td bgcolor=$cell_color_str width=\"65%\">";
        font_start($default_font_size);
        print $val->get_value();
        font_end($default_font_size);

        if ($val->has_table_data())
        {
            print "\n" . $val->get_table_data();
        }
        print "</td>\n";

        print "</tr>\n";
    }
}

function compute_ram_tables(&$arr)
{
    foreach($arr as $key => $val)
    {
        if (strcmp($val->get_type(),"Mds-Memory-Ram-Total-sizeMB") == 0)
        {
            $total_ram_size = $val->get_value();
        }
        else if (strcmp($val->get_type(),"Mds-Memory-Vm-Total-sizeMB") == 0)
        {
            $total_vm_size = $val->get_value();
        }
        else if (strcmp($val->get_type(),"Mds-Memory-Ram-sizeMB") == 0)
        {
            $ram_size = $val->get_value();
        }
        else if (strcmp($val->get_type(),"Mds-Memory-Vm-sizeMB") == 0)
        {
            $vm_size = $val->get_value();
        }
    }

    foreach($arr as $key => $val)
    {
        if (strcmp($val->get_type(),"Mds-Memory-Ram-Total-freeMB") == 0)
        {
            $val->compute_percent($total_ram_size);
            $val->merge_types($total_ram_size);
        }
        else if (strcmp($val->get_type(),"Mds-Memory-Vm-Total-freeMB") == 0)
        {
            $val->compute_percent($total_vm_size);
            $val->merge_types($total_vm_size);
        }
        else if (strcmp($val->get_type(),"Mds-Memory-Vm-freeMB") == 0)
        {
            $val->compute_percent($vm_size);
            $val->merge_types($vm_size);
        }
        else if (strcmp($val->get_type(),"Mds-Memory-Ram-freeMB") == 0)
        {
            $val->compute_percent($ram_size);
            $val->merge_types($ram_size);
        }
        $arr[$key] = $val;
    }
}

$host_detail_array = retrieve_host_details($giis,$host,$port,$dn);
$org_arr = organize_results($host_detail_array);
compute_ram_tables($org_arr["MEM"]);

print "<table border=0 cellspacing=0 cellpadding=4 width=\"100%\" align=\"center\">\n";

reset($org_arr);
while(list($heading,$value_arr) = each($org_arr))
{
    if (strcmp($heading,"COMP") == 0)
    {
        $title = "Computer Characteristics for \"$host\"";
    }
    else if (strcmp($heading,"CPU") == 0)
    {
        $title = "CPU Configuration Details";
    }
    else if (strcmp($heading,"FS") == 0)
    {
        $title = "File System Information";
    }
    else if (strcmp($heading,"MEM") == 0)
    {
        $title = "System Memory (RAM) Information";
    }
    else if (strcmp($heading,"NET") == 0)
    {
        $title = "Networking Attributes";
    }
    else if (strcmp($heading,"MISC") == 0)
    {
        $title = "Miscellaneous";
    }

    dump_table_stats($title,$value_arr);

    if (count($value_arr) == 0)
    {
        print "<tr><td>";
        print "<font face=$default_font size=\"3\" color=$default_font_bright>\n";
        print "No Information Returned";
        print "</font></b></td>\n";
        print "</td></tr>\n";
    }
}

print "</table>\n";
?>

</tr>
</table>

</td>
</tr>
</table>

<br><br>
</font>
</body>
</html>
