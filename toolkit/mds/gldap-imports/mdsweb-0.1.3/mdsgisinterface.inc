<?

function exec_grid_info_search($host, $port,
                               $dn, $filter,
                               $attributes, $args)
{
    $cmd = "grid-info-search ";
    if (strlen($host) && strlen($port))
    {
        $cmd .= "-h $host -p $port ";
    }
    if (strlen($dn))
    {
        $dn = str_replace(" ","",$dn);
        $cmd .= "-b $dn ";
    }
    $cmd .= "$filter $attributes $args";
    $cmd = escapeshellcmd($cmd);
    exec($cmd,$output,$ret);
    return $output;
}

?>
