<?

include("mdsutility.inc");

// -------------------------------------------
// top-level (public) callable methods
// -------------------------------------------

function retrieve_all_hosts($giis,$port,$dn)
{
    $ret_array = array();
    if (strlen($giis) && strlen($port) && strlen($dn))
    {
        $output = exec_grid_info_search($giis,$port,$dn,
                                        "(objectclass=mdshost)",
                                        "mds-host-hn","-x -LLL");
        $ret_array = get_hostobj_array($output);
    }
    else
    {
        print("Invalid input. Please enter values ");
        print("for all required fields.<br>\n");
    }
    return $ret_array;
}

function retrieve_host_details($giis,$host,$port,$dn)
{
    $ret_array = array();
    $query_modifier = "(&(objectclass=mdshost)(Mds-Host-hn=$host))";
    if (strlen($giis) && strlen($host) &&
        strlen($port) && strlen($dn))
    {
        $output = exec_grid_info_search($giis,$port,$dn,
                                        $query_modifier,
                                        "","-x -LLL");
        organize_host_attributes($output,$ret_array);
    }
    else
    {
        print("Invalid input. Please enter values ");
        print("for all required fields.<br>\n");
    }
    return $ret_array;
}

?>
