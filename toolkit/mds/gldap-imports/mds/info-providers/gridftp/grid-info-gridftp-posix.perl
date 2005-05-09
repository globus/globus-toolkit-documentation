#!/usr/bin/perl
#
# Copyright (c) 2002-2003 Northwestern University
#
# Permission is hereby granted, free of charge, to any person obtaining
# a copy of this software and associated documentation files (the
# "Software"), to deal in the Software without restriction, including
# without limitation the rights to use, copy, modify, merge, publish,
# distribute, sublicense, and/or sell copies of the Software, and to
# permit persons to whom the Software is furnished to do so, subject to
# the following conditions:
#
# The above copyright notice and this permission notice shall be included
# in all copies or substantial portions of the Software.
#
# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
# OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
# MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
# IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
# CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
# TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
# SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
#
#
# This work is based heavily on Peter Knepley's GridFTP Information Provider:
# http://www-unix.mcs.anl.gov/~knepleyp/
#
# NOTE:
# On some platforms, there are holes in the information, due to lack
# of knowledge with these platforms.  Feel free to improve this code ;-)
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

sub gather_os()
{
    return `uname -s`;
}

sub emit_filesystem_info()
{
    my(@df_info,$line);
    my($total_free_space,$total_disk_space);
    my($a,$b,$c,$d,$e,$f);

    $total_disk_space = 0;
    $total_free_space = 0;
    @df_info = `df -k`;

    foreach $line (@df_info)
    {
        ($a,$b,$c,$d,$e,$f) = split(" ",$line);

        if (($a ne "Filesystem") && ($a ne "/proc") &&
            ($a ne "swap") && ($a ne "fd"))
        {
            if (($os eq "Linux\n") || ($os eq "SunOS\n"))
            {
                $total_disk_space += $b;
                $total_free_space += $d;
            }
            elsif ($os eq "IRIX64\n")
            {
                $total_disk_space += $c;
                $total_free_space += $e;
            }
            elsif ($os eq "AIX\n")
            {
                $total_disk_space += $b;
                $total_free_space += $c;
            }
            else
            {
                $total_disk_space = 0;
                $total_free_space = 0;
            }
            break;
        }
    }

    $total_disk_space >>= 10;
    $total_free_space >>= 10;

    print "Mds-GridFTP-MB-freespace: $total_free_space\n";
    print "Mds-GridFTP-MB-diskspace: $total_disk_space\n";
}

sub emit_memory_info()
{
# Some possible memory retrieval options:
#
# GNU/Linux: `free -m`
# Solaris: `prtconf | grep Memory`, `top -d 1`, `vmstat`
# AIX: `lsattr ...`, `bootinfo -r`, `vmstat`, `pstat -s`
# IRIX64: `top -d 1`, `hinv`

    my(@mem_info,$line);
    my($memory_size, $memory_free);
    my($a,$b,$c,$d,$e);

    $memory_size = "n/a";
    $memory_free = "n/a";

    if ($os eq "Linux\n")
    {
        @mem_info = `free -m`;

        foreach $line (@mem_info)
        {
            ($a,$b,$c,$d,$e) = split(" ",$line);

            if ($a eq "Mem:")
            {
                $memory_size = $b;
                $memory_free = $d;
                break;
            }
        }
    }
    elsif ($os eq "SunOS\n")
    {
        if (($has_top == 0) && ($has_prtconf == 1))
        {
            $line = `prtconf | grep Memory`;
            if ($line =~ /Memory size:(.*)Megabytes(.*)/)
            {
                $memory_size = $1;
                $memory_free = "Unknown";
            }
        }
        elsif ($has_top == 1)
        {
            @mem_info = `top -d 1`;
            foreach $line (@mem_info)
            {
                ($a) = split(" ",$line);
                
                if (($a eq "Memory:") &&
                    ($line =~ /Memory: (.*)M real, (.*)M free,(.*)/))
                {
                    $memory_size = $1;
                    $memory_free = $2;
                    break;
                }
            }
        }
    }
    elsif ($os eq "IRIX64\n")
    {
        if ($has_top == 1)
        {
            @mem_info = `top -d 1`;
            foreach $line (@mem_info)
            {
                ($a) = split(" ",$line);

                if (($a eq "Memory:") &&
                    ($line =~ /Memory: (.*)M max, (.*)M avail,(.*)/))
                {
                    $memory_size = $1;
                    $memory_free = $2;
                    break;
                }
            }
        }
        elsif ($has_hinv == 1)
        {
            @mem_info = `hinv`;
            foreach $line (@mem_info)
            {
                if ($line =~ /Main memory size: (.*) Mbytes/)
                {
                    $memory_size = $1;
                    break;
                }
            }
        }
    }
    elsif (($os eq "AIX\n") && ($has_lsattr == 1))
    {
        $line = `lsattr -E -l sys0 -a realmem`;
        if ($line =~ /realmem (.*) Amount/)
        {
            $memory_size = ($1 >> 10);
        }
    }

    print "Mds-GridFTP-MB-freemem: $memory_free\n";
    print "Mds-GridFTP-MB-totalmem: $memory_size\n";
}
    
sub emit_network_info()
{
    my(@net_info,$line,$net_addrs,$i,$j);

    $i = 0;
    $j = 0;

    if ($os eq "Linux\n")
    {
        @net_info = `/sbin/ifconfig`;
    }
    else
    {
        @net_info = `ifconfig -a`;
    }

    foreach $line (@net_info)
    {
        if (($os eq "Linux\n") && ($line =~ /(.*)inet addr:(([0-9]|\.)*)/))
        {
            $net_addrs[$i] = $2;
            $i++;
        }
        elsif ($line =~ /(.*)inet (.*) netmask/)
        {
            $net_addrs[$i] = $2;
            $i++;
        }
    }

    for($j = 0; $j < $i; $j++)
    {
        print "Mds-GridFTP-networkaddr: ",$net_addrs[$j],"\n";
    }
}

sub emit_cpu_info()
{
    my(@cpu_info,$line,$a,$b,$cpu_clock_speed,$cpu_id,$num_cpus);
    my($a,$b,$c,$d,$e);
    my(@detail_info,$info);

    $cpu_clock_speed = "n/a";

    if ($os eq "Linux\n")
    {
        $line = `cat /proc/cpuinfo | grep MHz`;
        ($a,$b) = split(":",$line);
        $cpu_clock_speed = $b;
        $cpu_clock_speed =~ s/^\s*//;
        print "Mds-GridFTP-Mhz-cpuspeed: $cpu_clock_speed\n";
    }
    elsif ($os eq "AIX\n")
    {
        if ($has_pmcycles)
        {
            $line = `pmcycles`;
            if ($line =~ /This machine runs at (.*) MHz/)
            {
                $cpu_clock_speed = $1;
            }
        }
# other ways to get clock speed are documented here:
#http://publib.boulder.ibm.com/doc_link/en_US/a_doc_lib/aixbman/prftungd/2365ax5.htm
        print "Mds-GridFTP-Mhz-cpuspeed: $cpu_clock_speed\n";
    }
    elsif ($os eq "SunOS\n")
    {
        if ($has_psrinfo)
        {
            @cpu_info = `psrinfo`;
            foreach $line (@cpu_info)
            {
                ($a,$b,$c,$d,$e) = split(" ",$line);
                if ($b eq "on-line")
                {
                    @detail_info = `psrinfo -v $a`;
                    foreach $info (@detail_info)
                    {
                        if ($info =~ /The (.*) processor operates at (.*) MHz,/)
                        {
                            $cpu_clock_speed = $2;
                            print "Mds-GridFTP-Mhz-cpuspeed: $cpu_clock_speed\n";
                            break;
                        }
                    }
                    $num_cpus++;
                }
            }
        }
    }
    elsif ($os eq "IRIX64\n")
    {
        $line = `hinv | head -n 1`;
        ($a,$b,$c,$d,$e) = split(" ",$line);
        if (($c eq "MHZ") && ($e eq "Processors"))
        {
            $num_cpus = $a;
            $cpu_clock_speed = $b;
            for($i = 0; $i < $num_cpus; $i++)
            {
                print "Mds-GridFTP-Mhz-cpuspeed: $cpu_clock_speed\n";
            }
        }
    }
    else
    {
        print "Mds-GridFTP-Mhz-cpuspeed: $cpu_clock_speed\n";
    }
}

sub emit_info()
{
    print "Mds-GridFTP-version: $gridftp_version\n";
    print "Mds-GridFTP-running: $gridftp_running\n";
    print "Mds-GridFTP-working: $gridftp_working\n";

    emit_filesystem_info();
    emit_memory_info();
    emit_network_info();
    emit_cpu_info();
}

sub probe_system_software()
{
    my($tmpfile);

    $tmpfile = "$tmp_base" . "3";
    $has_top = 0;
    $has_prtconf = 0;
    $has_hinv = 0;
    $has_lsattr = 0;
    $has_pmcycles = 0;
    $has_psrinfo = 0;

    # top
    if ($os eq "SunOS\n")
    {
        $which_top = `which top 2>&1 $tmpfile`;
    }
    else
    {
        $which_top = `which top > $tmpfile 2>&1`;
    }
    $has_top = (($which_top =~ /(.*):(.*)/) ? 0 : 1);
    `rm -f $tmpfile`;

    # prtconf
    if ($os eq "SunOS\n")
    {
        $which_prtconf = `which prtconf 2>&1 $tmpfile`;
    }
    else
    {
        $which_prtconf = `which prtconf > $tmpfile 2>&1`;
    }
    $has_prtconf = (($which_prtconf =~ /(.*):(.*)/) ? 0 : 1);
    `rm -f $tmpfile`;

    # hinv
    if ($os eq "SunOS\n")
    {
        $which_hinv = `which hinv 2>&1 $tmpfile`;
    }
    else
    {
        $which_hinv = `which hinv > $tmpfile 2>&1`;
    }
    $has_hinv = (($which_hinv =~ /(.*):(.*)/) ? 0 : 1);
    `rm -f $tmpfile`;

    # lsattr
    if ($os eq "SunOS\n")
    {
        $which_lsattr = `which lsattr 2>&1 $tmpfile`;
    }
    else
    {
        $which_lsattr = `which lsattr > $tmpfile 2>&1`;
    }
    $has_lsattr = (($which_lsattr =~ /(.*):(.*)/) ? 0 : 1);
    `rm -f $tmpfile`;

    # pmcycles
    if ($os eq "SunOS\n")
    {
        $which_pmcycles = `which pmcycles 2>&1 $tmpfile`;
    }
    else
    {
        $which_pmcycles = `which pmcycles > $tmpfile 2>&1`;
    }
    $has_pmcycles = (($which_pmcycles =~ /(.*):(.*)/) ? 0 : 1);
    `rm -f $tmpfile`;

    # psrinfo
    if ($os eq "SunOS\n")
    {
        $which_psrinfo = `which psrinfo 2>&1 $tmpfile`;
    }
    else
    {
        $which_psrinfo = `which psrinfo > $tmpfile 2>&1`;
    }
    $has_psrinfo = (($which_psrinfo =~ /(.*):(.*)/) ? 0 : 1);
    `rm -f $tmpfile`;
}


################################################
# entry point
################################################

# make sure incoming args are complete and sane
($hostname,$port,$tmp_base,$bin_location)=@ARGV;

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


probe_system_software();
$os = gather_os();
emit_info();
