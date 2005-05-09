#!/usr/bin/perl
#
# This work is based heavily on Peter Knepley's GridFTP Information Provider:
# http://www-unix.mcs.anl.gov/~knepleyp/
#
#
use IO::Socket;

sub test_gridftp_connection()
{
    $ret = "no";
    my($gridftp,$isup,$garbage,$version);

    $gridftp = IO::Socket::INET->new(Proto=>"tcp",
                                     PeerAddr=>"$hostname",
                                     PeerPort=>"$port",);
    $isup=<$gridftp>;
    close ($gridftp);

    if ($isup)
    {
        $ret = "yes";
        ($garbage,$version,$garbage) =
            split(/erver(.*)ready/,$isup);

        # try to store the gridftp version to global var
        if (length($version))
        {
            $gridftp_version = $version;
        }
    }
    return $ret;
}

sub test_gridftp_transfer()
{
    $ret = "no";
    my($tmpfile1,$tmpfile2,$tmpfile3,$target_url);
    my($sum1,$sum2);
    my($s1,$s2,$s3,$s4,$garbage);

    $tmpfile1 = "$tmp_base" . "0";
    $tmpfile2 = "$tmp_base" . "1";
    $tmpfile3 = "$tmp_base" . "2";
    $gsiurl = "gsiftp://$hostname:$port" . "$tmpfile2";

    # generate a test file for transfer
    `echo "This is a test" > $tmpfile1`;

    if (-e $tmpfile1)
    {
        # compute the sum of the original file
        $sum1 = `sum $tmpfile1`;
        ($s1,$s2,$garbage) = split(/ /,$sum1);

        # put the file on the local ftp server
        `$bin_location/gftp_put $tmpfile1 $gsiurl`;

        # if the put worked, retrieve the file
        if (-e $tmpfile2)
        {
            `$bin_location/gftp_get $gsiurl $tmpfile3`;

            # compute the sum of the retrieved file
            $sum2 = `sum $tmpfile3`;
            ($s3,$s4,$garbage) = split(/ /,$sum2);

            # if they match, gridftp transfers appear to be working
            if ((length($s1) && length($s3) && ($s1 eq $s3)) ||
                (length($s2) && length($s4) && ($s2 eq $s4)))
            {
                $ret = "yes";
            }
            `rm -f $tmpfile2 $tmpfile3`;
        }
        `rm -f $tmpfile1`;
    }
    return $ret;
}

sub gather_filesystem_info()
{
}

sub gather_memory_info()
{
    open(MEM_OUT,"free -m|");

    while(<MEM_OUT>)
    {
        $mem_out = $mem_out.$_;
    }
    close(MEM_OUT);

    @mem_info = split('\n',$mem_out);

    foreach $line (@mem_info)
    {
        ($a,$b,$c,$d,$e) = split(" ",$line);
        if($a eq "Mem:")
        {
            $mem_size = $b;
            $mem_free = $d;
        }
        if($a eq "Swap:")
        {
            $swap_size = $b;
            $swap_free = $d;
        }
    }
}
    
sub gather_network_info()
{
    open(IFCONFIG_OUT,"/sbin/ifconfig|");

    while(<IFCONFIG_OUT>)
    {
        $ifconfig_out = $ifconfig_out.$_;
    }
    close(IFCONFIG_OUT);

    @net_info = split('\n',$ifconfig_out);

    $device_no = 0;
    $line_no = 0;

    foreach $line (@net_info)
    {
        #perl has no switch (ugh)
        if($line_no==0)
        {
            ($device_info[$device_no]{'name'})=split(" ",$line);
        }elsif($line_no==1)
        {
            if($device_info[$device_no]{'name'}ne"lo")
            {
                ($garbage,$addr,$bcast,$mask)=split(":",$line);
                ($device_info[$device_no]{'addr'})=split(" ",$addr);
                ($device_info[$device_no]{'bcast'})=split(" ",$bcast);
                ($device_info[$device_no]{'mask'})=$mask;
            }else{
                ($garbage,$addr,$mask)=split(":",$line);
                ($device_info[$device_no]{'addr'})=split(" ",$addr);
                ($device_info[$device_no]{'mask'})=$mask;
            }
        }elsif($line_no==2)
        {
            ($garbage,$mtu)=split(":",$line);
            ($device_info[$device_no]{'mtu'})=split(" ",$mtu);
        }elsif($line_no==3)
        {
            ($garbage,$rx_errors,$rx_drop)=split(":",$line);
            ($device_info[$device_no]{'rx_errors'})=split(" ",$rx_errors);
            ($device_info[$device_no]{'rx_drop'})=split(" ",$rx_drop);
        }elsif($line_no==4)
        {
            ($garbage,$tx_errors,$tx_drop)=split(":",$line);
            ($device_info[$device_no]{'tx_errors'})=split(" ",$tx_errors);
            ($device_info[$device_no]{'tx_drop'})=split(" ",$tx_drop);
        }
        
        $line_no++;
        
#if blank line add another device to the list
        if(length($line)==0)
        {
            $device_no++;
            $line_no=0;
        }
    }

#compute netaddrs
    for ($i=0;$i<=$device_no;$i++)
    {
        $device_info[$i]{'netaddr'}=compute_netaddr($device_info[$i]{'addr'},$device_info[$i]{'mask'});
    }
}

sub compute_netaddr()
{
    local($addr, $mask)=@_;
    local($bits,$addr1,$addr2,$addr3,$addr4);
    local($output,$mask1,$mask2,$mask3,$mask4);

    ($addr1,$addr2,$addr3,$addr4)=split(/[\D,\s]/,$addr);
    ($mask1,$mask2,$mask3,$mask4)=split(/[\D]/,$mask);

    if("255.255.255.255" eq $mask)
    {
        $bits=32;
        $addr4=$addr4 & $mask4;
    }elsif("255.255.255.254" eq $mask){
        $bits=31;
        $addr4=$addr4 & $mask4;
    }elsif("255.255.255.252" eq $mask){
        $bits=30;
        $addr4=$addr4&$mask4;
    }elsif("255.255.255.248" eq $mask){
        $bits=29;
        $addr4=$addr4&$mask4;
    }elsif("255.255.255.240" eq $mask){
        $bits=28;
        $addr4=$addr4&$mask4;
    }elsif("255.255.255.224"eq$mask){
        $bits=27;
        $addr4=$addr4&$mask4;
    }elsif("255.255.255.192"eq$mask){
        $bits=26;
        $addr4=$addr4&$mask4;
    }elsif("255.255.255.128"eq$mask){
        $bits=25;
        $addr4=$addr4&$mask4;
    }elsif("255.255.255.0"eq$mask){
        $bits=24;
        $addr4=$addr4&$mask4;
    }elsif("255.255.254.0"eq$mask){
        $bits=23;
        $addr3=$addr3&$mask3;
        $addr4=0;
    }elsif("255.255.252.0"eq$mask){
        $bits=22;
        $addr4=0;
        $addr3=$addr3&$mask3;
    }elsif("255.255.248.0"eq$mask){
        $bits=21;
        $addr4=0;
        $addr3=$addr3&$mask3;
    }elsif("255.255.240.0"eq$mask){
        $bits=20;
        $addr4=0;
        $addr3=$addr3&$mask3;
    }elsif("255.255.224.0"eq$mask){
        $bits=19;
        $addr4=0;
        $addr3=$addr3&$mask3;
    }elsif("255.255.192.0"eq$mask){
        $bits=18;
        $addr4=0;
        $addr3=$addr3&$mask3;
    }elsif("255.255.128.0"eq$mask){
        $bits=17;
        $addr4=0;
        $addr3=$addr3&$mask3;
    }elsif("255.255.0.0"eq$mask){
        $bits=16;
        $addr4=0;
        $addr3=$addr3&$mask3;
    }elsif("255.254.0.0"eq$mask){
        $bits=15;
        $addr4=0;
        $addr3=0;
        $addr2=$addr2&$mask2;
    }elsif("255.252.0.0"eq$mask){
        $bits=14;
        $addr4=0;
        $addr3=0;
        $addr2=$addr2&$mask2
    }elsif("255.248.0.0"eq$mask){
        $bits=13;
        $addr4=0;
        $addr3=0;
        $addr2=$addr2&$mask2;
    }elsif("255.240.0.0"eq$mask){
        $bits=12;
        $addr4=0;
        $addr3=0;
        $addr2=$addr2&$mask2;
    }elsif("255.224.0.0"eq$mask){
        $bits=11;
        $addr4=0;
        $addr3=0;
        $addr2=$addr2&$mask2;
    }elsif("255.192.0.0"eq$mask){
        $bits=10;
        $addr4=0;
        $addr3=0;
        $addr2=$addr2&$mask2;
    }elsif("255.128.0.0"eq$mask){
        $bits=9;
        $addr4=0;
        $addr3=0;
        $addr2=$addr2&$mask2;
    }elsif("255.0.0.0"eq$mask){
        $bits=8;
        $addr4=0;
        $addr3=0;
        $addr2=$addr2&$mask2;
    }elsif("254.0.0.0"eq$mask){
        $bits=7;
        $addr4=0;
        $addr3=0;
        $addr2=0;
        $addr1=$addr1&$mask1;
    }elsif("252.0.0.0"eq$mask){
        $bits=6;
        $addr4=0;
        $addr3=0;
        $addr2=0;
        $addr1=$addr1&$mask1;
    }elsif("248.0.0.0"eq$mask){
        $bits=5;
        $addr4=0;
        $addr3=0;
        $addr2=0;
        $addr1=$addr1&$mask1;
    }elsif("240.0.0.0"eq$mask){
        $bits=4;
        $addr4=0;
        $addr3=0;
        $addr2=0;
        $addr1=$addr1&$mask1;
    }elsif("224.0.0.0"eq$mask){
        $bits=3;
        $addr4=0;
        $addr3=0;
        $addr2=0;
        $addr1=$addr1&$mask1;
    }elsif("192.0.0.0"eq$mask){
        $bits=2;
        $addr4=0;
        $addr3=0;
        $addr2=0;
        $addr1=$addr1&$mask1;
    }elsif("128.0.0.0"eq$mask){
        $bits=1;
        $addr4=0;
        $addr3=0;
        $addr2=0;
        $addr1=$addr1&$mask1;
    }elsif("0.0.0.0"eq$mask){
        $bits=0;
        $addr4=0;
        $addr3=0;
        $addr2=0;
        $addr1=0;
    }else{
        $bits=-1;
        $addr1=$addr1&$mask1;
        $addr2=$addr2&$mask2;
        $addr3=$addr3&$mask3;
        $addr4=$addr4&$mask4;
    }

    if($bits>-1)
    {
        $output=$addr1.".".$addr2.".".$addr3.".".$addr4."/".$bits;    
    }else{
        $output=$addr1.".".$addr2.".".$addr3.".".$addr4;
    }

    $output;
}

sub gather_cpu_info()
{
    open(CPUINFO_OUT,"/proc/cpuinfo");
    while(<CPUINFO_OUT>)
    {
        $cpuinfo_out=$cpuinfo_out.$_;
    }
    close(CPUINFO_OUT);

    @cpu_info=split('\n',$cpuinfo_out);

    $cpu_no=0;
    foreach $line (@cpu_info)
    {
        ($a,$b)=split(" ",$line);
        if($a eq "processor")
        {
            $cpu_no++;
        }elsif($a eq "vendor_id")
        {
            ($b,$cpu[$cpu_no]{'vendor'})=split(": ",$line);
        }elsif($a eq "cpu") #branch cpu and cpu MHz
        {
            if($b eq "family")
            {
                ($c,$cpu[$cpu_no]{'family'})=split(": ",$line);
            }else{
                ($c,$cpu[$cpu_no]{'Mhz'})=split(": ",$line);
            }
        }elsif($a eq "model") #branch model and model name
        {
            if($b eq "name")
            {
                ($c,$cpu[$cpu_no]{'model name'})=split(": ",$line);
            }else{
                ($c,$cpu[$cpu_no]{'model'})=split(": ",$line);
            }
        }elsif($a eq "stepping")
        {
            ($b,$cpu[$cpu_no]{'stepping'})=split(": ",$line);
        }elsif($a eq "cache")
        {
            ($b,$cpu[$cpu_no]{'cache'})=split(": ",$line);
        }elsif($a eq "flags")
        {
            ($b,$cpu[$cpu_no]{'flags'})=split(": ",$line);
        }elsif($a eq "bogomips")
        {
            ($b,$cpu[$cpu_no]{'bogomips'})=split(": ",$line);
        }
    }
}

sub output_info()
{
    print "Mds-GridFTP-version: ",$gridftp_version,"\n";
    print "Mds-GridFTP-running: ",$gridftp_running,"\n";
    print "Mds-GridFTP-working: ",$gridftp_working,"\n";

    print "Mds-GridFTP-MB-freespace: ",$totalfreespace,"\n";
    print "Mds-GridFTP-MB-diskspace: ",$totaldiskspace,"\n";
    print "Mds-GridFTP-MB-freemem: ",$mem_free,"\n";
    print "Mds-GridFTP-MB-totalmem: ",$mem_size,"\n";
    print "Mds-GridFTP-Mhz-cpuspeed: ",$cpu[1]{'Mhz'},"\n";
    for($i=0;$i<=$device_no;$i++)
    {
        print "Mds-GridFTP-networkaddr: ",$device_info[$i]{'addr'},"\n";
    }
}




################################################
# entry point
################################################

# make sure incoming args are complete and sane
($hostname,$port,$tmp_base,$bin_location)=@ARGV;

#$hostname="localhost" unless $hostname;
#$port=2811 unless $port;
#$tmp_base="/tmp/__gftp" unless $tmp_base;

if ((length($hostname) == 0) || (length($port) == 0) ||
    (length($bin_location) == 0) || (length($tmp_base) == 0))
{
    print "Usage: grid-info-gridftp-posix.pl <hostname> ";
    print "<port> <tmp_base> <bin_location>\n";
    exit 1;
}

$gridftp_version = "n/a";
$gridftp_running = test_gridftp_connection();
$gridftp_working = test_gridftp_transfer();


#gather_filesystem_info();
#gather_memory_info();
#gather_network_info();
#gather_cpu_info();
output_info();


