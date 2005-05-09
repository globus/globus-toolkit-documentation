<?

include("hostobj.inc");

// -------------------------------------------
// misc. utility functions
// -------------------------------------------

function has_grid_info_search()
{
    $ret = FALSE;
    system("which grid-info-search >/dev/null",$ret);
    return (($ret == 0) ? 1 : 0);
}

function get_hostobj_array($output)
{
    $hostname = NULL;
    $dn = NULL;
    $newoutput = array();

    reset($output);
    while(list(,$line) = each($output))
    {
        $line = trim($line);

        if (eregi("dn: ",$line,$matches))
        {
            $dn = $line;
            $last_match = &$dn;
        }
        else if (eregi("Mds-Host-hn: ",$line,$matches) && (dn != NULL))
        {
            $hostname = eregi_replace("Mds-Host-hn: ","",$line);
            $last_match = &$hostname;
        }
        else
        {
            $last_match .= $line;
        }
        if (($hostname != NULL) && ($dn != NULL))
        {
            add_dn_to_specified_hostobj($hostname,$dn,$newoutput);

            $hostname = NULL;
            $dn = NULL;
            $last_match = NULL;
        }
    }
    return $newoutput;
}

function add_dn_to_specified_hostobj($hostname,$dn,&$arr)
{
    $host_found = 0;
    $arr_size = count($arr);

    for ($i = 0; $i < $arr_size; $i++)
    {
        $cur_hostobj = &$arr[$i];
        if (strcmp($hostname,$cur_hostobj->get_hostname()) == 0)
        {
            $cur_hostobj->add_dn($dn);
            $host_found = 1;
            break;
        }
    }

    if ($host_found == 0)
    {
        $hostobj = new hostobj;
        $hostobj->set_hostname($hostname);
        $hostobj->add_dn($dn);
        array_push($arr,$hostobj);
    }
}

function print_dn_as_link($host,$giis,$port,$dn)
{
    $str = "";

    if (strlen($host) && strlen($giis) &&
        strlen($port) && strlen($dn))
    {
        $str = "<a href=\"display_host.php?giis=";
        $str .= urlencode($giis);
        $str .= "&host=";
        $str .= urlencode($host);
        $str .= "&port=";
        $str .= urlencode($port);
        $str .= "&dn=";
        $dn = ereg_replace("dn: ","",$dn);
        $str .= urlencode($dn);
        $str .= "\">$dn</a><br>\n";

        print $str;
    }
}

function print_host_as_link($host,$giis,$port,$dn)
{
    $str = "";

    if ((strlen($host) && strlen($giis) &&
         strlen($port)))
    {
        $str = "<a href=\"display_host.php?giis=";
        $str .= urlencode($giis);
        $str .= "&host=";
        $str .= urlencode($host);
        $str .= "&port=";
        $str .= urlencode($port);
        $str .= "&dn=";
        $str .= urlencode($dn);
        $str .= "\">$host</a><br>\n";

        print $str;
    }
}

function organize_host_attributes($output,&$ret_array)
{
    $last_match = "";

    reset($output);
    while(list(,$line) = each($output))
    {
        if (ereg("(.*): (.*)",$line,$matches))
        {
            if (is_array($ret_array["$matches[1]"]))
            {
                array_push($ret_array["$matches[1]"],$matches[2]);
            }
            else if (array_key_exists("$matches[1]",$ret_array))
            {
                $new_array = array();
                array_push($new_array,$ret_array["$matches[1]"]);
                $ret_array["$matches[1]"] = $new_array;
                array_push($ret_array["$matches[1]"],$matches[2]);
            }
            else
            {
                $ret_array["$matches[1]"] = $matches[2];
            }
            $last_match = $matches[1];
        }
        else
        {
            $ret_array["$last_match"] .= $line;
        }
    }
    return $ret_array;
}

// -------------------------------------------
// include appropriate support file
// -------------------------------------------

if (has_grid_info_search() != FALSE)
{
    include("mdsgisinterface.inc");
}
else
{
    include("mdsldapinterface.inc");
}

?>
