<?

class hostobj
{
    var $hostname;
    var $dn_array = array();

    function add_dn($dn)
    {
        array_push($this->dn_array,$dn);
    }

    function set_hostname($hostname)
    {
        $this->hostname = $hostname;
    }

    function get_dn_array()
    {
        return $this->dn_array;
    }

    function get_hostname()
    {
        return $this->hostname;
    }
}

?>
