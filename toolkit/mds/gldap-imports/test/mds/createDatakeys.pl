#!/usr/bin/perl

# -------------------------------------------------- #
# This perl script creates a template of hash tables #
# to be used with the cgi script                     #
#                                                    #
#             mds_grid_search_basic.py               #
#                                                    #
# To run, it needs to know the location of file      #
#                                                    #
#             'grid-info-resource.schema'            #
#                                                    #
# which is set with the variables $source_file and   #
# $source_dir.                                       #
#                                                    #
# Author: Wolfgang Freis                             #
#         ASCI Flash Center                          #
#         freis@flash.uchicago.edu                   #
# -------------------------------------------------- #

# input schema 
$source_file = "grid-info-resource.schema";
$source_dir  = "/usr/globus/etc/";
$source      = $source_dir . $source_file;

# output Python header file
$target_file = "mds_datakeys.py"; # name is required by Python script
$target_dir  = "./";
$target      = $target_dir . $target_file;
$descriptor  = ".template";

@objects     = (); # array to hold all objects
@attributes  = (); # array to hold all object attributes

# strings to search in source file as regular expressions
$att         = "attributetype";
$obj         = "objectclass";
$description = "DESC";
$name        = "NAME";
$obj_header  = "Mds-";

$obj_hash_start = "obj_keys = { ";
$att_hash_start = "attrb_keys = { ";
$hash_spacer    = ", \\\n";
$hash_end = " }\n";

$delim       = "::";
$indent      = ""; # used for pretty printing output
 
$curr = "";
$last = "";
$prev = "";
$temp = "";

# ------------------------- start program ----------------------------- #

if (!-e $source)
{
    print STDERR "\nSource file not found!\nTerminating program.\n\n";
    exit(0);
}

# make sure not to overwrite an existing 'datakeys.py' file;
# if a file exists, add a descriptor to the file name to show
# that it is a new template
if (-e $target)
{
    $target = $target . $descriptor;
}

# read source file into array
open(SOURCE, "<$source");
@file = <SOURCE>;
close(SOURCE);

# process file data
&read_data(@file, \@objects, \@attributes);

@objects    = sort(@objects);
@objects    = reverse(@objects); # reverse array to filter longer text strings first
@obj_keys   = @objects;

@attributes = sort(@attributes);
@save_att   = @attributes;

# create output
open(TARGET, ">$target");
$obj_pointer= 0;
$out = $att_hash_start;
$indent = ' ' x length($att_hash_start);
$arr_started = 0; # flag set when out is iniated
for ($i = 0; $i < @objects; ++$i)
{
    $temp = $objects[$i];
    $temp =~ s/([A-Z])/-$1/g;
    $temp = substr($temp,1,length($temp));
    ++$obj_pointer;
    @temp = splice(@obj_keys, $obj_pointer);
    push(@obj_keys, ($temp, @temp));
    for ($ii = 0; $ii < @attributes; ++$ii)
    {
	if (substr($attributes[$ii], 0, length($temp)) eq $temp)
	{
	    if ($arr_started == 1)
	    {
		$out = $out . $indent ;
	    }
	    
	    @temp = split(/$delim/, $attributes[$ii]);
	    $out = $out . "\'" . lc($temp[0]) . "\': " . "\'" . $temp[1]. "\'" . $hash_spacer;
	    $arr_started = 1;
	    splice(@attributes,$ii,1);
	    --$ii;

	    if (@attributes == 0)
	    {
		$out = substr($out,0,length($out)-4); # 4 = length of $hash_spacer
		$out = $out . $hash_end;
	    }
	    print TARGET $out;
	    $out = "";
	}
    }
    ++$obj_pointer;
}

print TARGET "\n\n";

# ----------------------------------------------- #

# create obj_keys hash
%temp = @obj_keys;
@temp = keys(%temp);
@temp = sort(@temp);
@temp = reverse(@temp);

$out = $obj_hash_start;
$indent = ' ' x length($obj_hash_start);

for ($i = 0; $i < @temp; ++$i)
{
    $temp{$temp[$i]} =~ s/^Mds-//;
    $temp{$temp[$i]} =~ s/-/ /;

    if ($i > 0)
    {
	$out = $out . $indent ;
    }
    $out = $out . "\'" . $temp[$i] . "\': " . "\'" . $temp{$temp[$i]}. "\'" . $hash_spacer;
    if ($i == @temp-1)
    {
	$out = substr($out,0,length($out)-4); # 4 = length of $hash_spacer
	$out = $out . $hash_end;
    }
    print TARGET $out;
    $out = "";
}
print TARGET "\n";
close(TARGET);

# ===================== subroutines ===================== #

sub read_data(@file, @objects, @attributes)
{
    # ------------------------------------------------- #
    # subroutine reads through every line of the source #
    # file stored in @file; when it encounters one of   #
    # the regular expressions that indicate that the    #
    # line contains an object or attribute identifier,  #
    # the line is parsed and the text string souhgt     #
    # put into the respective object or attribute       #
    # array.                                            #
    # ------------------------------------------------- #

    # flags to indicated state of identifier found
    my $isAttrib = 0;
    my $isObj    = 0;
    for ($i = 0; $i < @file; ++$i)
    {
        $prev = $last;
        $last = $curr;
        $curr = $file[$i];

        if ($last =~ m/^$att/ || $last =~ m/^$obj/)
        {
            if ($last =~ m/^$att/)
            {
		$isAttrib = 1;
                $indent = "\t";
            }
            elsif ($last =~ m/^$obj/)
            {
		$isObj = 1;
                $indent = "";
            }
            split(/$name/, $curr);
            $_[1] =~ s/[\s']//g;
            if ($isObj == 1)
            {
                push(@objects, $_[1]);
                $isObj = 0;
            }
            elsif ($isAttrib == 1)
            {
                push(@attributes, $_[1]);
                $isAttrib = 0;
            }
         }
	 if ($prev =~ m/^$att/)
	 {
	      split(/$description/, $curr);
	      $_[1] =~ s/[']//g;
	      chomp($_[1]);
	      while (substr($_[1],0,1) =~ m/\s/)
	      {
		  $_[1] = substr($_[1],1,length($_[1]));
	      }
	      $attributes[-1] = $attributes[-1] . $delim . $_[1];
         }
     }
}


