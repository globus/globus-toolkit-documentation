<?

class elem
{
    var $type;
    var $value;
    var $percent;
    var $table_data = "";
    var $has_table_data = FALSE;

    function has_table_data()
    {
        return $this->has_table_data;
    }

    function get_percent()
    {
        return $this->percent;
    }

    function get_table_data()
    {
        return $this->table_data;
    }

    function set_type($type)
    {
        if (strlen($type))
        {
            $this->type = $type;
        }
        else
        {
            $this->type = "N/A";
        }
    }

    function set_value($value)
    {
        if (strlen($value))
        {
            $this->value = $value;
        }
        else
        {
            $this->value = "N/A";
        }
    }

    function get_friendly_type()
    {
        if (strcmp($this->type,"objectClass") == 0)
        {
            $ret = "Object Class";
        }
        else if (strcmp($this->type,"Mds-Computer-isa") == 0)
        {
            $ret = "Computer Type";
        }
        else if (strcmp($this->type,"Mds-Computer-platform") == 0)
        {
            $ret = "Computer Platform";
        }
        else if (strcmp($this->type,"Mds-Computer-Total-nodeCount") == 0)
        {
            $ret = "Number of Nodes";
        }
        else if (strcmp($this->type,"Mds-Os-name") == 0)
        {
            $ret = "Operating System";
        }
        else if (strcmp($this->type,"Mds-Host-hn") == 0)
        {
            $ret = "Host name";
        }
        else if (strcmp($this->type,"dn") == 0)
        {
            $ret = "Distinguished Name";
        }
        else if (strcmp($this->type,"Mds-Os-release") == 0)
        {
            $ret = "Operating System Revision (Version)";
        }
        else if (strcmp($this->type,"Mds-Cpu-Cache-l2kB") == 0)
        {
            $ret = "Processor L2 Cache Size (KB)";
        }
        else if (strcmp($this->type,"Mds-Cpu-features") == 0)
        {
            $ret = "CPU Features/Flags";
        }
        else if (strcmp($this->type,"Mds-Cpu-Free-15minX100") == 0)
        {
            $ret = "CPU Free (15 Minute Average)";
        }
        else if (strcmp($this->type,"Mds-Cpu-Free-1minX100") == 0)
        {
            $ret = "CPU Free (1 Minute Average)";
        }
        else if (strcmp($this->type,"Mds-Cpu-Free-5minX100") == 0)
        {
            $ret = "CPU Free (5 Minute Average)";
        }
        else if (strcmp($this->type,"Mds-Cpu-Total-Free-15minX100") == 0)
        {
            $ret = "Total CPU Free (15 Minute Average)";
        }
        else if (strcmp($this->type,"Mds-Cpu-Total-Free-1minX100") == 0)
        {
            $ret = "Total CPU Free (1 Minute Average)";
        }
        else if (strcmp($this->type,"Mds-Cpu-Total-Free-5minX100") == 0)
        {
            $ret = "Total CPU Free (5 Minute Average)";
        }
        else if (strcmp($this->type,"Mds-Cpu-model") == 0)
        {
            $ret = "CPU Model";
        }
        else if (strcmp($this->type,"Mds-Cpu-Smp-size") == 0)
        {
            $ret = "Number of Active SMP Processors";
        }
        else if (strcmp($this->type,"Mds-Cpu-speedMHz") == 0)
        {
            $ret = "Processor Clock Speed (MHz)";
        }
        else if (strcmp($this->type,"Mds-Cpu-Total-count") == 0)
        {
            $ret = "Total Number of Active CPUs";
        }
        else if (strcmp($this->type,"Mds-Cpu-vendor") == 0)
        {
            $ret = "CPU Vendor";
        }
        else if (strcmp($this->type,"Mds-Cpu-version") == 0)
        {
            $ret = "CPU Revision (Version)";
        }
        else if (strcmp($this->type,"Mds-Fs-freeMB") == 0)
        {
            $ret = "File System Free Space (MB)";
        }
        else if (strcmp($this->type,"Mds-Fs-sizeMB") == 0)
        {
            $ret = "File System Size (MB)";
        }
        else if (strcmp($this->type,"Mds-Fs-Total-count") == 0)
        {
            $ret = "File System Total Count";
        }
        else if (strcmp($this->type,"Mds-Fs-Total-freeMB") == 0)
        {
            $ret = "Total File System Free Space (MB)";
        }
        else if (strcmp($this->type,"Mds-Fs-Total-sizeMB") == 0)
        {
            $ret = "Total File System Size (MB)";
        }
        else if (strcmp($this->type,"Mds-Memory-Ram-freeMB") == 0)
        {
            $ret = "Free & Used System RAM (MB)";
        }
/*         else if (strcmp($this->type,"Mds-Memory-Ram-sizeMB") == 0) */
/*         { */
/*             $ret = "Memory/RAM Size (MB)"; */
/*         } */
        else if (strcmp($this->type,"Mds-Memory-Ram-Total-freeMB") == 0)
        {
            $ret = "Free & Used Total System RAM (MB)";
        }
/*         else if (strcmp($this->type,"Mds-Memory-Ram-Total-sizeMB") == 0) */
/*         { */
/*             $ret = "Total Memory/RAM Size (MB)"; */
/*         } */
        else if (strcmp($this->type,"Mds-Memory-Vm-freeMB") == 0)
        {
            $ret = "Free & Used Virtual Memory (MB)";
        }
/*         else if (strcmp($this->type,"Mds-Memory-Vm-sizeMB") == 0) */
/*         { */
/*             $ret = "Virtual Memory/RAM Size (MB)"; */
/*         } */
        else if (strcmp($this->type,"Mds-Memory-Vm-Total-freeMB") == 0)
        {
            $ret = "Free & Used Total Virtual Memory (MB)";
        }
/*         else if (strcmp($this->type,"Mds-Memory-Vm-Total-sizeMB") == 0) */
/*         { */
/*             $ret = "Total Virtual Memory/RAM Size (MB)"; */
/*         } */
        else if (strcmp($this->type,"Mds-Net-addr") == 0)
        {
            $ret = "Network (IP) Address";
        }
        else if (strcmp($this->type,"Mds-Net-name") == 0)
        {
            $ret = "Network Device Name";
        }
        else if (strcmp($this->type,"Mds-Net-netaddr") == 0)
        {
            $ret = "Network Address Space";
        }
        else if (strcmp($this->type,"Mds-Net-Total-count") == 0)
        {
            $ret = "Total Network (IP) Address Count";
        }
        else if (strcmp($this->type,"Mds-keepto") == 0)
        {
            $ret = "Timestamp (keepto)";
        }
        else if (strcmp($this->type,"Mds-validto") == 0)
        {
            $ret = "Timestamp (validto)";
        }
        else if (strcmp($this->type,"Mds-validfrom") == 0)
        {
            $ret = "Timestamp (validfrom)";
        }
        else
        {
            $ret = $this->type;
        }
        return $ret;
    }

    function get_type()
    {
        return $this->type;
    }

    function get_value()
    {
        return $this->value;
    }

    function compute_percent($total)
    {
        if (strcmp($this->value,"N/A") != 0)
        {
            $total = (($total == 0) ? 1 : $total);
            $this->percent = (int)(ceil(($this->value/$total) * 100));
            $this->generate_table_data();
        }
    }

    function generate_table_data()
    {
        $actual = $this->percent;
        $remaining = (100 - $this->percent);
        $this->table_data = "<table border=1 cellspacing=0 cellpadding=0 width=\"200\">\n";
        $this->table_data .= "<tr>\n";
        $this->table_data .= "<td width=\"";
        $this->table_data .= $actual;
        $this->table_data .= "%\" bgcolor=#FF0000>\n";
        $this->table_data .= "<font size=1>&nbsp;</font>";
        $this->table_data .= "</td>\n";
        if ($remaining > 0)
        {
            $this->table_data .= "<td width=\"";
            $this->table_data .= $remaining . "%\" ";
            $this->table_data .= "bgcolor=#0000FF></td>";
        }
        $this->table_data .= "</tr></table>\n";
        $this->has_table_data = TRUE;
    }

    function merge_types($total)
    {
        $this->value .= "/$total";
    }
}

?>
