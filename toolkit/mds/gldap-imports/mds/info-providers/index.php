<?
   $title = "Information provider docs (MDS 2.x)";
   include("../../include/cf_header.inc");
?>

<font face="Verdana,Arial" size="2" color="#000000">

<font face="Verdana,Arial" size="3" color="#000000">
<b>(Draft) A Software Installation Information Provider for MDS 2.x</b>
</font>
<br><hr><br>

by <a href="http://www.thecodefactory.org/neillm">Neill Miller</a>
under the guidance of <a
href="http://www-unix.mcs.anl.gov/~schopf/">Jennifer Schopf</a>.
<br><br>
<i>
Warning: This information is only a draft and is currently
unofficial.  The Schema, the code, and all of the information may
change in the future.
</i>
<br><br>

<a href="README">Quick Guide to Installing and Using this
Software Information Provider</a>
<br><br>

<a href="#introduction">Introduction</a><br>
<a href="#schema">The Schema</a><br>
<a href="#configuration">The Configuration File</a><br>
<a href="#code">The Code</a><br>
<a href="#enable">Enabling The Provider</a><br>
<a href="#output">An Example Query Output</a><br>
<a href="#screenshots">Screenshots</a><br>
<br><br>

<a name="introduction">
<b>Introduction</b>
<br><hr><br>
The MDS may benefit from having a core information provider which
publishes information about the local software installed on each GRIS
host of a Globus based grid environment.  Users or administrators of the
installation may be interested in knowing if a particular tool or compiler
is available on a number of systems, as well as the version.  For
example, does gcc exist on host "foo"?  Which version of automake (if
any) is present on host "bar"?  Does host "baz" meet the requirements
for compiling and running my application, given that I need python,
guile, and a fortran compiler?

<br><br>

What is explained here is a basic draft of a minimum amount of
information required to be useful, packaged into an information
provider for MDS 2.x.  The schema, the code, and some screenshots
are used to illustrate the implementation details.

<br><br>

<a name="schema">
<b>The Schema</b>
<br><hr><br>
First things first, we need a schema to represent the information that
we'd like to publish.  I've chosen the following, which may need some
improvements.  These additions have been appended to the
<b>$GLOBUS_LOCATION/etc/grid-info-resource.schema</b> file.

<pre>
attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.109
    NAME 'Mds-Application-Group-config'
    DESC 'The location of this application group configuration file'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.110
    NAME 'Mds-Application-name'
    DESC 'The name of the application being presented'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.111
    NAME 'Mds-Application-location'
    DESC 'The path to the installed application'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.112
    NAME 'Mds-Application-version'
    DESC 'The version of the installed application'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.113
    NAME 'Mds-Application-info'
    DESC 'Additional information about the installed application'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.114
    NAME 'Mds-Application-Group-name'
    DESC 'A group name of software applications'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

objectclass ( 1.3.6.1.4.1.3536.2.6.3536.10.1.115
    NAME 'MdsApplicationGroup'
    DESC 'Information about a Group of Software Applications'
    SUP 'Mds'
    STRUCTURAL
    MUST ( Mds-Application-Group-name $ Mds-Application-Group-config )
    MAY ( Mds-Application-name )
 )

objectclass ( 1.3.6.1.4.1.3536.2.6.3536.10.1.116
    NAME 'MdsApplication'
    DESC 'Information about a particular Software Applications'
    SUP 'Mds'
    STRUCTURAL
    MUST ( Mds-Application-name $ Mds-Application-version )
    MAY (  Mds-Application-location $ Mds-Application-info )
 )
</pre>

<i>NOTE: The OID values have been cleared for testing by <a
href="http://www-unix.mcs.anl.gov/~schopf/">Jennifer Schopf</a>,
but of course are subject to change if required.</i>

<br><br>

The schema shows that we have two basic components (objectclasses).
The MdsApplicationGroup is a logical group of applications.  For this
information provider, that logical grouping would be "probed software"
since the point of the provider is to determine whether or not a
particular GRIS/GIIS host has the software that we're looking for.  Since
the software may not exist on the individual host, the grouping of
"software" is too vague.  A name is required for each logical group of
published application groups, for convenience. Other required
information that should be published is the location of the
configuration file, should the administrator be curious about the
versioning of this configuration.

<br><br>

The MdsApplication objectclass describes a particular application.
An application consists of a required name and version.  Optionally
an application may contain the path to the installed application and some
miscellaneous information about the application.  The path should not
be required, as it may be pose a potential security risk, depending
on the application of course.

<br><br>

<a name="configuration">
<b>The Configuration File</b>
<br><hr><br>

A simple configuration file is required for several reasons.  First,
it dictates which software this information provider should look for.
Secondly, it controls (to some degree) the information that will be
output about the applications.  I've chosen a simple plain-text format
for configuration for ease of use and administration.  The
configuration file has been tentatively placed at
<b>$GLOBUS_LOCATION/etc/grid-info-soft.conf</b>.  An example
configuration file looks like this:

<pre>
# The grid-info-soft-* information provider will probe for all software
# listed in here with a properly formatted line.  VERSION_STR specifies
# a command line switch used for determining the application version.
# VERSION_LIMIT limits the number of lines of the application version
# output that will be shown in the final information output.

Software: java PATH=yes VERSION_STR=-version VERSION_LIMIT=1 MISC=yes
Software: gcc  PATH=yes VERSION_STR=--version VERSION_LIMIT=1  MISC=yes
Software: python PATH=yes VERSION_STR=-V VERSION_LIMIT=1 MISC=yes
Software: gdb PATH=yes VERSION_STR=--version VERSION_LIMIT=1 MISC=yes
Software: foobar PATH=yes VERSION_STR=--version VERSION_LIMIT=1 MISC=yes
Software: vi PATH=yes VERSION_STR=--version VERSION_LIMIT=2 MISC=yes
Software: XFree86 PATH=yes VERSION_STR=-version VERSION_LIMIT=2 MISC=yes
Software: emacs PATH=yes VERSION_STR=--version VERSION_LIMIT=1 MISC=yes
Software: guile PATH=yes VERSION_STR=--version VERSION_LIMIT=1 MISC=yes
</pre>

As the comments at the top of the example configuration file
specifies, each line has a specific format that must be followed in
order for the information provider to be able to properly parse it and
return the requested information.

<br><br>

Each line must start with the token "Software: ".  Note that the
trailing space must be included.  (This format was arbitrarily
chosen, and while it has small spacing nuances, it remains quite
flexible).  After the Software listing, an application should be
specified as it would appear on invocation from a local system.
This means that the application listing is case sensitive, since
most UNIX-styled file systems are case sensitive and "Emacs" is
not considered the same as "emacs".

<br><br>

Following the application name, a "PATH=" line must appear.  This line
dictates whether or not the full path to the application will appear
in the LDIF output (i.e. published in the MDS).  Valid values for this
are "yes" and "no".

<br><br>

Following the PATH line, a version string must be present.  The
version string is required so that the information provider knows how
to determine the version of the particular application, should it be
present on the system.  Many programs share the same syntax for
determining the version information, however some applications require
special command line switches.  For this reason, the version string
must be present.  Also, many applications generate verbose output in
their version information.  To limit the output length (and more
importantly, to not mess up the outputted LDIF records), the version
limit was found to be useful.  The version limit contrains the number
of lines from the version output to be published in LDIF format to the
MDS.  Most applications will likely have this value set to 1.

<br><br>

For flexibility, an additional information field about a particular
piece of software can also be published.  The last field in the
example configuration file is a "MISC=" field.  The valid values for
this are "yes" and "no".  This option determines if additional
information about the application should be published, should there be
any.  (NOTE: Currently, the output of the "whereis application-name"
is used as additional information).

<br><br>

It should also be noted that no spaces should exist between any of the
required tokens and the equal ("=") operator.  Similarly, no spaces
should exist between the equal ("=") operator and the specified
value.  The above example configuration is syntactically correct.

<br><br>

<a name="code">
<b>The Code</b>
<br><hr><br>

Here you can sample the current source code for this draft
implementation.  It is written as a bash shell script (like the other
core information providers included with MDS 2.x).  It may have some
issues with code placement, as not all platforms have been tested (or
even implemented).

<br><br>

<a href="grid-info-soft-posix">grid-info-soft-posix</a><br>
<a href="grid-info-soft-common">grid-info-soft-common</a><br>

<br><br>

<a name="enable">
<b>Enabling The Provider</b>
<br><hr><br>

Now that we have the information provider written, the last step is to
enable it so that we can test it.  I've added the following entry into
the <b>$GLOBUS_LOCATION/etc/grid-info-resource-ldif.conf</b> file:

<pre>
# generate probed software information every 1 day 
dn: Mds-Host-hn=glob, Mds-Vo-name=local, o=grid
objectclass: GlobusTop
objectclass: GlobusActiveObject
objectclass: GlobusActiveSearch
type: exec
path: /opt/globus/libexec
base: grid-info-soft-posix
args: -devclassobj -devobjs -dn Mds-Host-hn=glob,Mds-Vo-name=local,o=grid -validto-secs 8640
0 -keepto-secs 86400
cachetime: 86400
timelimit: 100
sizelimit: 100
</pre>

<i>NOTE: You will need to change the dn line (at the top, and also in the
args line a little further down) that lists the hostname for your machine.
My host name is "glob", so replace where it says "glob" with the hostname of
your machine.</i><br><br>

This information is pretty straightforward.  It tells the MDS how to
call the newly written information provider, as well as for how long
to cache the output data.  One day was selected, although that can be
adjusted by the MDS administrator for a more appropriate setting
specific to the environment.  The output is also arbitrarily limited
to 100 records, and this may need adjustment depending on the needs of
the administrator.

<br><br>

<a name="output">
<b>An Example Query Output</b>
<br><hr><br>

The provided code, using the above example configuration will produce
output similar to the following when run on the command line:

<pre>
neillm@glob libexec $ ./grid-info-soft-posix
dn: 
objectclass: MdsApplicationGroup
Mds-Application-Group-config: /opt/globus/etc/grid-info-soft.conf
Mds-Application-name: XFree86
Mds-Application-name: emacs
Mds-Application-name: foobar
Mds-Application-name: gcc
Mds-Application-name: gdb
Mds-Application-name: guile
Mds-Application-name: java
Mds-Application-name: python
Mds-Application-name: vi

dn: Mds-Application-Group-name=probed software, 
objectclass: MdsApplicationGroup
Mds-Application-Group-config: /opt/globus/etc/grid-info-soft.conf
Mds-Application-Group-name: probed software
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z
Mds-Application-name: XFree86
Mds-Application-name: emacs
Mds-Application-name: foobar
Mds-Application-name: gcc
Mds-Application-name: gdb
Mds-Application-name: guile
Mds-Application-name: java
Mds-Application-name: python
Mds-Application-name: vi

dn: Mds-Application-name=java, Mds-Application-Group-name=probed software, 
objectclass: MdsApplication
Mds-Application-name: java
Mds-Application-location: /usr/local/j2sdk1.4.1/bin/java
Mds-Application-version: java version "1.4.1-beta"
Mds-Application-info: java: /opt/blackdown-jre-1.3.1/bin/java /opt/blackdown-jdk                
-1.3.1/bin/java
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z

dn: Mds-Application-name=gcc, Mds-Application-Group-name=probed software, 
objectclass: MdsApplication
Mds-Application-name: gcc
Mds-Application-location: /usr/bin/gcc
Mds-Application-version: 2.95.3
Mds-Application-info: gcc: /usr/bin/gcc /usr/man/man1/gcc.1.gz /usr/share/man/ma                
n1/gcc.1.gz
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z

dn: Mds-Application-name=python, Mds-Application-Group-name=probed software, 
objectclass: MdsApplication
Mds-Application-name: python
Mds-Application-location: /usr/bin/python
Mds-Application-version: Python 2.2.1
Mds-Application-info: python: /usr/bin/python2.2 /usr/bin/python /usr/lib/python                
2.2 /usr/include/python2.2 /usr/man/man1/python.1.gz /usr/share/man/man1/python.                
1.gz
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z

dn: Mds-Application-name=gdb, Mds-Application-Group-name=probed software, 
objectclass: MdsApplication
Mds-Application-name: gdb
Mds-Application-location: /usr/bin/gdb
Mds-Application-version: GNU gdb 5.1.1
Mds-Application-info: gdb: /usr/bin/gdb /usr/man/man1/gdb.1.gz /usr/share/man/ma                
n1/gdb.1.gz
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z

dn: Mds-Application-name=foobar, Mds-Application-Group-name=probed software, 
objectclass: MdsApplication
Mds-Application-name: foobar
Mds-Application-location: "foobar" location not available
Mds-Application-version: "foobar" version not available
Mds-Application-info: "foobar" info not available
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z

dn: Mds-Application-name=vi, Mds-Application-Group-name=probed software, 
objectclass: MdsApplication
Mds-Application-name: vi
Mds-Application-location: /usr/bin/vi
Mds-Application-version: VIM - Vi IMproved 6.1 (2002 Mar 24, compiled Jul  9 200                
2 04-10-04)
Included patches- 1, 3-15, 17-18, 20-22, 24-34, 36-42, 45-47, 50-64, 67-72, 74
Mds-Application-info: vi: /usr/bin/vi
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z

dn: Mds-Application-name=XFree86, Mds-Application-Group-name=probed software, 
objectclass: MdsApplication
Mds-Application-name: XFree86
Mds-Application-location: /usr/X11R6/bin/XFree86
Mds-Application-version: 
XFree86 Version 4.2.0 / X Window System
Mds-Application-info: XFree86: /usr/X11R6/bin/XFree86 /usr/bin/X11/XFree86
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z

dn: Mds-Application-name=emacs, Mds-Application-Group-name=probed software, 
objectclass: MdsApplication
Mds-Application-name: emacs
Mds-Application-location: /usr/bin/emacs
Mds-Application-version: GNU Emacs 21.2.1
Mds-Application-info: emacs: /usr/bin/emacs /usr/lib/emacs /usr/share/emacs /usr                
/man/man1/emacs.1.gz /usr/share/man/man1/emacs.1.gz
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z

dn: Mds-Application-name=guile, Mds-Application-Group-name=probed software, 
objectclass: MdsApplication
Mds-Application-name: guile
Mds-Application-location: /usr/bin/guile
Mds-Application-version: Guile 1.4
Mds-Application-info: guile: /usr/bin/guile /usr/include/guile /usr/share/guile
Mds-validfrom: 20020814020432Z
Mds-validto: 20020814020432Z
Mds-keepto: 20020814020432Z
</pre>

<br>
On a real query on a running MDS installation, the following output is
emitted.
<br>

<pre>
neillm@glob libexec $ ../sbin/SXXgris start
Starting up Openldap 2.0 SLAPD server for the GRIS
neillm@glob libexec $ grid-info-search -x "(objectclass=MdsApplication)" -L
version: 1

#
# filter: (objectclass=MdsApplication)
# requesting: ALL
#

# java, probed software, glob, local, grid
dn: Mds-Application-name=java, Mds-Application-Group-name=probed software, Mds
 -Host-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsApplication
Mds-Application-name: java
Mds-Application-location: /usr/local/j2sdk1.4.1/bin/java
Mds-Application-version: java version "1.4.1-beta"
Mds-Application-info: java: /opt/blackdown-jre-1.3.1/bin/java /opt/blackdown-j
 dk-1.3.1/bin/java
Mds-validfrom: 20020814020636Z
Mds-validto: 20020815020636Z
Mds-keepto: 20020815020636Z

# gcc, probed software, glob, local, grid
dn: Mds-Application-name=gcc, Mds-Application-Group-name=probed software, Mds-
 Host-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsApplication
Mds-Application-name: gcc
Mds-Application-location: /usr/bin/gcc
Mds-Application-version: 2.95.3
Mds-Application-info: gcc: /usr/bin/gcc /usr/man/man1/gcc.1.gz /usr/share/man/
 man1/gcc.1.gz
Mds-validfrom: 20020814020636Z
Mds-validto: 20020815020636Z
Mds-keepto: 20020815020636Z

# python, probed software, glob, local, grid
dn: Mds-Application-name=python, Mds-Application-Group-name=probed software, M
 ds-Host-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsApplication
Mds-Application-name: python
Mds-Application-location: /usr/bin/python
Mds-Application-version: Python 2.2.1
Mds-Application-info: python: /usr/bin/python2.2 /usr/bin/python /usr/lib/pyth
 on2.2 /usr/include/python2.2 /usr/man/man1/python.1.gz /usr/share/man/man1/py
 thon.1.gz
Mds-validfrom: 20020814020636Z
Mds-validto: 20020815020636Z
Mds-keepto: 20020815020636Z

# gdb, probed software, glob, local, grid
dn: Mds-Application-name=gdb, Mds-Application-Group-name=probed software, Mds-
 Host-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsApplication
Mds-Application-name: gdb
Mds-Application-location: /usr/bin/gdb
Mds-Application-version: GNU gdb 5.1.1
Mds-Application-info: gdb: /usr/bin/gdb /usr/man/man1/gdb.1.gz /usr/share/man/
 man1/gdb.1.gz
Mds-validfrom: 20020814020636Z
Mds-validto: 20020815020636Z
Mds-keepto: 20020815020636Z

# foobar, probed software, glob, local, grid
dn: Mds-Application-name=foobar, Mds-Application-Group-name=probed software, M
 ds-Host-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsApplication
Mds-Application-name: foobar
Mds-Application-location: "foobar" location not available
Mds-Application-version: "foobar" version not available
Mds-Application-info: "foobar" info not available
Mds-validfrom: 20020814020636Z
Mds-validto: 20020815020636Z
Mds-keepto: 20020815020636Z

# vi, probed software, glob, local, grid
dn: Mds-Application-name=vi, Mds-Application-Group-name=probed software, Mds-H
 ost-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsApplication
Mds-Application-name: vi
Mds-Application-location: /usr/bin/vi
Mds-Application-version: VIM - Vi IMproved 6.1 (2002 Mar 24, compiled Jul  9 2
 002 04-10-04)
Mds-Application-info: vi: /usr/bin/vi
Mds-validfrom: 20020814020636Z
Mds-validto: 20020815020636Z
Mds-keepto: 20020815020636Z

# XFree86, probed software, glob, local, grid
dn: Mds-Application-name=XFree86, Mds-Application-Group-name=probed software, 
 Mds-Host-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsApplication
Mds-Application-name: XFree86
Mds-Application-location: /usr/X11R6/bin/XFree86
Mds-Application-version:
Mds-Application-info: XFree86: /usr/X11R6/bin/XFree86 /usr/bin/X11/XFree86
Mds-validfrom: 20020814020636Z
Mds-validto: 20020815020636Z
Mds-keepto: 20020815020636Z

# emacs, probed software, glob, local, grid
dn: Mds-Application-name=emacs, Mds-Application-Group-name=probed software, Md
 s-Host-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsApplication
Mds-Application-name: emacs
Mds-Application-location: /usr/bin/emacs
Mds-Application-version: GNU Emacs 21.2.1
Mds-Application-info: emacs: /usr/bin/emacs /usr/lib/emacs /usr/share/emacs /u
 sr/man/man1/emacs.1.gz /usr/share/man/man1/emacs.1.gz
Mds-validfrom: 20020814020636Z
Mds-validto: 20020815020636Z
Mds-keepto: 20020815020636Z

# guile, probed software, glob, local, grid
dn: Mds-Application-name=guile, Mds-Application-Group-name=probed software, Md
 s-Host-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsApplication
Mds-Application-name: guile
Mds-Application-location: /usr/bin/guile
Mds-Application-version: Guile 1.4
Mds-Application-info: guile: /usr/bin/guile /usr/include/guile /usr/share/guil
 e
Mds-validfrom: 20020814020636Z
Mds-validto: 20020815020636Z
Mds-keepto: 20020815020636Z

# search result

# numResponses: 10
# numEntries: 9
</pre>

<br><br>

<a name="screenshots">
<b>Screenshots!</b>
<br><hr><br>

Finally, some screenshots have been provided to further illustrate the
usefulness of such an information provider once integrated into the
MDS.  The following pictures are screenshots captured of a java based
LDAP browser on a GNU/Linux system running the MDS locally.  Each
snapshot shows off slightly different viewings of the data in the same
application browser.  Enjoy!

<br><br>
<img src="pic1.png"><br><br>
<img src="pic2.png"><br><br>
<img src="pic3.png"><br><br>


<br><br>
</font>
<? include("../../include/cf_footer.inc"); ?>

