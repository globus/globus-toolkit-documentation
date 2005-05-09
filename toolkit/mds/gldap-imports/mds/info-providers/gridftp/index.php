<?
   $title = "Information provider docs (MDS 2.x)";
   include("../../../include/cf_header.inc");
?>

<font face="Verdana,Arial" size="2" color="#000000">

<font face="Verdana,Arial" size="3" color="#000000">
<b>(Draft) A GridFTP Information Provider for MDS 2.x</b>
</font>
<br><hr><br>

by <a href="http://www-unix.mcs.anl.gov/~knepleyp/">Peter Knepley</a>
under the guidance of <a
href="http://www-unix.mcs.anl.gov/~schopf/">Jennifer Schopf</a>.
<br><br>

Warning: This information is only a draft and is currently
unofficial.  The Schema, the code, and all of the information may
change in the future.  This write-up was done by Neill Miller and
all of this work is based heavily on a similar information provider
written by Peter Knepley.  To download and install the package
directly from the author, please go
<a href="http://www-unix.mcs.anl.gov/~knepleyp/">here</a>.

<br><br>

<a href="#introduction">Introduction</a><br>
<a href="#schema">The Schema</a><br>
<a href="#code">The Code</a><br>
<a href="#configuration">The Configuration Process</a><br>
<a href="#enable">Enabling The Provider</a><br>
<br><br>

<a name="introduction">
<b>Introduction</b>
<br><hr><br>
grid-info-gridftp-posix is a globus information provider used for verifying
that GridFTP is working.  It logs into a GridFTP server and uploads a file.
It then downloads a copy of the file and deletes the uploaded file on
the GridFTP server. Next, it uses <i>sum</i> to make sure the uploaded
file and the downloaded file match.  This information provider actually runs
two tests.  First it checks if the GridFTP server is running locally by
establishing a connection to it.  If the connection is possible, a local file
transfer is tested.  If these two tests pass, it is reasonable to assume that
the GridFTP is running properly.  It is true that it may remain inaccessible
due to improper network configuration, however, this is something that an
information provider cannot determine at this time.

<br><br>
A brief overview of the included components is as follows:

<br><br>
grid-info-gridftp-posix is a shell script. It handles the proxy initialization
(if necessary) and also calls the perl script.  This script has many configuration
options to influence run-time behaviour through the use of environment
variables.  These are described in more detail later.

<br><br>
grid-info-gridftp-posix.pl is a perl script that tests if a local GridFTP server
is able to accept connections and transfer files.  The actual transfers are
done by two small C programs, which are called from this script.

<br><br>
gftp_put.c contains ftp client code to do a gridftp enabled <i>put</i> operation.
This functionality is written as C code to ensure proper operation on many
different platforms.  It is used for uploading a single test file to the local
GridFTP server.

<br><br>
gftp_get.c contains ftp client code to do a gridftp enabled <i>get</i> operation.
This functionality is written as C code to ensure proper operation on many
different platforms.  It is used for downloading a single test file from the
local GridFTP server.

<br><br>


<a name="schema">
<b>The Schema</b>
<br><hr><br>
Here is the schema chosen by the Author of this information provider
used for publishing the gathered information. These additions must be
appended to the <b>$GLOBUS_LOCATION/etc/grid-info-resource.schema</b>
file.

<pre>
attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.2.101
    NAME 'Mds-GridFTP-running'
    DESC 'Is GridFTP up and running'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.2.102
    NAME 'Mds-GridFTP-version'
    DESC 'GridFTP version'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.2.109
    NAME 'Mds-GridFTP-working'
    DESC 'Does file transfer work'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.2.103
    NAME 'Mds-GridFTP-MB-freespace'
    DESC 'Free hard drive space on GridFTP'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.2.104
    NAME 'Mds-GridFTP-MB-diskspace'
    DESC 'Total hard drive space on GridFTP'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.2.105
    NAME 'Mds-GridFTP-MB-freemem'
    DESC 'Free memory on GridFTP'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.2.106
    NAME 'Mds-GridFTP-MB-totalmem'
    DESC 'Total memory on GridFTP'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.2.107
    NAME 'Mds-GridFTP-Mhz-cpuspeed'
    DESC 'Cpu speed on the GridFTP'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.2.108
    NAME 'Mds-GridFTP-networkaddr'
    DESC 'Address of the GridFTP'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

objectclass ( 1.3.6.1.4.1.3536.2.6.3536.10.2.100
    NAME 'MdsGridFTPExtension'
    DESC 'Petes gridftp namespace'
    SUP 'Mds'
    STRUCTURAL
    MUST ( Mds-GridFTP-running $ Mds-GridFTP-version)
    MAY ( Mds-GridFTP-working )
 )
</pre>

<i>NOTE: The OID values have been cleared for testing by <a
href="http://www-unix.mcs.anl.gov/~schopf/">Jennifer Schopf</a>,
but of course are subject to change if required.</i>

<br><br>

<a name="code">
<b>The Code</b>
<br><hr><br>

Download all required pieces here:
<br>
<i>NOTE: This code is alpha software.  It may require tweaking for your setup!</i>.
<br>
<a href="grid-info-gridftp.tar.gz">grid-info-gridftp.tar.gz</a><br>
<br>
View each piece separately online:
<br>
<a href="grid-info-gridftp-posix">grid-info-gridftp-posix</a> (driving shell script)<br>
<a href="grid-info-gridftp-posix.perl">grid-info-gridftp-posix.perl (perl script)</a><br>
<a href="gftp_put.c">gftp_put.c</a> (C file)<br>
<a href="gftp_get.c">gftp_get.c</a> (C file)<br>
<br>

<i>Compatibility note: Shell script and Perl script successfully tested 
on GNU/Linux, AIX, IRIX64, and Solaris. C code components tested successfully on
GNU/Linux, AIX, and Solaris.</i>
<br><br>

<i>Note:  This information provider does NOT depend on FTP_Lite, as the
previous one did.  It does however rely on libraries included with the
Globus Toolkit 2 installation.</i>
<br><br>

<a name="configuration">
<b>The Configuration Process</b>
<br><hr><br>

This section is broken into several areas, relating specifically to
the individual components that make up this information provider.
<br><br>

It is assumed that you've already downloaded the complete information
provider tarball and extracted it.  Also required are the GNU
autoconf/automake utilities including gmake.  GCC is not necessarily
required for compilation, although this is what was used for testing.
<br><br>

Compiling the gftp_get and gftp_put components on your platform:
<pre>
1) Make sure that your GLOBUS_LOCATION environment variable is
   configured properly.  This is a requirement for the proper
   use and installation of the Globus Toolkit.  Verify that
   it is set by typing:

   echo $GLOBUS_LOCATION

   If it is not set, set it to the Globus Toolkit installation
   directory by using either (depending on your shell):

   setenv GLOBUS_LOCATION /path/to/globus/install/root_dir

   OR

   export GLOBUS_LOCATION=/path/to/globus/install/root_dir

2) Change directory into gftp_put (or gftp_get).

   cd gftp_put

3) Determine which globus library flavors to compile against.
   This is important for linking the C code properly.  If you recall
   which flavor you used to install the Globus Toolkit, use that
   (e.g. gcc32dbg, gcc32dbgpthr, mpicc32dbg, vendorcc32dbg, etc)

   If you do not know this, one way to find out is to do the following:

   ls $GLOBUS_LOCATION/lib | grep globus_common

   You should see a listing of files similar to the following:

   libglobus_common_gcc32dbg.a
   libglobus_common_gcc32dbg.la
   libglobus_common_gcc32dbg.so
   libglobus_common_gcc32dbg.so.0
   libglobus_common_gcc32dbg.so.0.0.0
   ...

   The word after the common_ is the flavor.  You may have multiple
   different ones to choose from.  Pick whichever you find best
   suits your needs (or pick one randomly if you're unsure).
   If you have multiple to choose from and compilation results in
   errors, try choosing a different one.

4) Generate a Makefile for your platform using the autoconf/automake
   utilities of your system. (These are required.  If they are not
   available on your system, it is possible to compile this code
   without them, however for this, you're on your own!)

   Run the following command:

   ./configure --with-flavor=FLAVOR

   where FLAVOR is something like gcc32dbg as determined in the
   previous step.

5) If this runs properly, build the code by typing:

   gmake

   This is the GNU make utility (which is required).

6) If no errors are reported, a binary file now resides in the
   src directory.  You can copy this binary to whichever location
   you'd like.  I recommend copying or linking it into the
   $GLOBUS_LOCATION/libexec directory for MDS run-time.

7) Repeat these steps for the other gftp_NNN program
</pre>

Assuming you have compiled both the gftp_put and gftp_get binaries for
your platform, the hard part should now be over!  The remaining
configuration is for the driving shell script.  Due to various security
reasons, this script has many configurable options that are explained
below.  Please read these if you are going to run this information
provider, because it WILL impact you.
<br><br>

First, a brief overview of security related issues:
<pre>
# If this provider is run as root, your host certificate
# will be used to authenticate locally with the running
# gridftp server.  If your host certificate is not located at
# /etc/grid-security/hostcert.pem, or your host key is not
# located at /etc/grid-security/hostkey.pem, please specify
# the exact locations by using the appropriate environment
# variables (see below)
#
# If this provider is run as a user, the user's certificate
# will be used to authenticate locally with the running
# gridftp server.  This means that the user MUST appear
# in the server's grid-mapfile.  A password is needed to
# generate a user proxy.  At this time, no security measure
# has been taken to safely handle a user password.
# (see below).  If this info-provider
# is run as a user and no password is stored in the appropriate
# environment variable, this provider will assume that a user
# proxy has already been generated and continue running.
# Externally generating a user proxy is the safest way for this
# information provider to run.
</pre>

<b>What does this mean for you?</b>
<br><br>

It is not recommend that you run the MDS as root, however if you
do, this information provider will use a host certificate and host
key for authenticating with the local GridFTP server.  You can
configure which host key and host certificate will be used to generate
a proxy as root by setting environment variables GFTP_HOSTKEY and
GFTP_HOSTCERT, respectively.  By default, /etc/grid-security/hostkey.pem
is used as the GFTP_HOSTKEY and /etc/grid-security/hostcert.pem is
used as the GFTP_HOSTCERT.
<br><br>

<pre>
setenv GFTP_HOSTKEY /path/to/other/hostkey.pem

OR

export GFTP_HOSTCERT /path/to/other/hostcert.pem
</pre>
<br><br>

The preferred way to run this information provider (and the MDS!) is
as a user with restricted system access.  In order for this
information to authenticate with the local GridFTP server, this
information provider will either use your user certificate and
user key to generate a proxy (with grid-proxy-init), or require
that a user proxy already be generated on the system.  The user that
runs the MDS is the one that requires these credentials.
<br><br>

You may also want to investigate the use of Jim Basney's
<a href="http://www.ncsa.uiuc.edu/Divisions/ACES/MyProxy">MyProxy</a>
project, used as a credential repository for handling automatic
proxy generation.
<br><br>

<b>How you can specify which authentication method to use:</b>
<br><br>
The safest way to run this information provider is to make sure
that a user proxy is already on your system before this
information provider runs.  You can do this manually, or with some
other scheduled generation utility (such as a script called from
cron on your local system).
<br><br>

If this is not an option, you may allow this information provider
to generate a user proxy each time it is invoked.  The problem with
this method is that it requires the storage of the user's password
in plain text in an environment variable.  This is not secure.
However, if you must, here's how to do this:
<pre>
- specify a password in the environment variable GFTP_PROXYINITPASSWD

The environment variable must be set as either:

setenv GFTP_PROXYINITPASSWD password

OR

export GFTP_PROXYINITPASSWD=password
</pre>

By giving this environment variable a value, when the information
provider is invoked, a call to grid-proxy-init will be made to
generate a user proxy.
<br><br>

To disable automatic proxy generation by this information provider,
make sure this information provider is NOT run as root, and make
sure that GFTP_PROXYINITPASSWD is NOT set in the environment.  This
is the default method of operation.  The information provider will
continue running as if it had already generated a proxy, and thus
for proper operation, in this mode you will need to be sure that
a user proxy has already been generated on the system.
<br><br>

<b>How to obtain MDS credentials:</b>
<br><br>
Here are some excellent resources for properly configuring MDS for
secure access.  If you have questions, your best bet is to use the
Globus support options available (mailing lists, archives, google,
etc).
<br><br>

<a href="http://globus.org/mds/">The MDS Homepage</a><br>
<a href="http://www.globus.org/gt2/admin/guide-install.html#install">
Installing Globus</a><br>
<a href="http://www.globus.org/gt2/admin/guide-startup.html#mds">
Starting up the MDS</a><br>
<a href="http://globus.org/gt2/admin/guide-configure.html#mds">
Configuring the MDS</a><br>
<a href="http://globus.org/toolkit/documentation/">
General Globus Toolkit Documentation</a>

<br><br>

<b>Additional Configuration Options</b>
<br><br>

Several temporary files are required for proper operation of this
information provider.  They are named after a base temporary file
name that defaults to /tmp/__gftp.  Files created will be
/tmp/__gftp0, /tmp/__gftp1, etc.  If this base filename not suitable
for you system environment, please specify a different base filename
in the environment variable GFTP_TMPBASE.

<pre>
setenv GFTP_TMPBASE /path/to/tmp/file/tmpfile_base

OR

export GFTP_TMPBASE=/path/to/tmp/file/tmpfile_base
</pre>


For proper information provider functionality, all four files
(i.e. the shell script, the perl script, the two compiled gftp_
binaries) must be placed somewhere on the system.  As mentioned
earlier, the recommended path to put all four files is in
$GLOBUS_LOCATION/libexec with proper executable permissions.
If for some reason this location does not suit your needs, you
can place the binaries in a separate directory and use an
environment variable to tell the information provider where to
find the perl script and the two gftp_ binaries.  The default
value of GFTP_BIN_LOCATION is $GLOBUS_LOCATION/libexec.

<pre>
setenv GFTP_BIN_LOCATION /path/to/component_files

OR

export GFTP_BIN_LOCATION=/path/to/component_files
</pre>

Finally, by default, this information provider checks up on the
status of the locally running GridFTP server.  To do this,
connections are established to "localhost", port 2811.  If for
some reason these do not properly match your locally running
GridFTP server, you can specify an alternate hostname and port
to try connecting to using the environment variables
GFTP_HOSTNAME and GFTP_PORT, respectively.

<pre>
setenv GFTP_HOSTNAME localhost.localdomain
setenv GFTP_HOSTNAME 2811

OR

export GFTP_HOSTNAME=localhost.localdomain
export GFTP_PORT=2811
</pre>
<br><br>

<a name="enable">
<b>Enabling The Provider</b>
<br><hr><br>

Now that we have the information provider written, the last step is to
enable it so that we can test it.  I've added the following entry into
the <b>$GLOBUS_LOCATION/etc/grid-info-resource-ldif.conf</b> file:

<pre>

- add the line starting at #my gridftp addition
- DO NOT FORGET TO SET APPROPRIATE ENVIRONMENT VARIABLES (see above)
- Mds-Host-hn should be changed to match your system (hotsname.domain)

#my gridftp addition
dn: Mds-Software-deployment=GridFTP, Mds-Host-hn=hostname.domain, Mds-Vo-name=lo
cal, o=grid
objectclass: GlobusTop
objectclass: GlobusActiveObject
objectclass: GlobusActiveSearch
type: exec
path: /usr/local/globus/libexec
base: grid-info-gridftp-posix
args: -dn Mds-Host-hn=hostname.domain,Mds-Vo-name=local,o=grid -validto-secs 86400 -keepto-secs 86400
cachetime: 86400
timelimit: 86400
sizelimit: 64

</pre>

<br><br>
</font>
<? include("../../../include/cf_footer.inc"); ?>

