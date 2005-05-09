<?

// -------------------------------------------
// grid-info-search emulation code using ldap
// -------------------------------------------

function exec_grid_info_search($host, $port,
                               $dn, $filter,
                               $attributes, $args)
{
    $output = array();

    $ldap_handle = ldap_connect($host, $port);
    if ($ldap_handle)
    {
        $result = ldap_search($ldap_handle,$dn,
                              $filter,
                              (strlen($attributes) ?
                               explode(" ",$attributes) :
                               array()));
        if ($result)
        {
            $entry = ldap_first_entry($ldap_handle,$result);
            while($entry)
            {
                $str_entry = "dn: " . ldap_get_dn($ldap_handle,$entry);
                array_push($output,$str_entry);

                $attr = ldap_first_attribute($ldap_handle,$entry,
                                             $str_entry);
                while($attr)
                {
                    $value_array = ldap_get_values($ldap_handle,$entry,
                                                   $attr);

                    for ($i = 0; $i < $value_array["count"]; $i++)
                    {
                        array_push($output,"$attr: $value_array[$i]");
                    }
                    $attr = ldap_next_attribute($ldap_handle,$entry,
                                                $str_entry);
                }

                $entry = ldap_next_entry($ldap_handle,$entry);
            }
            ldap_free_result($result);
        }
    }
    ldap_close($ldap_handle);
    return $output;
}

?>
