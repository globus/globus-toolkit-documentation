<?
   $title = "Information provider docs (MDS 2.x)";
   include("../../../include/cf_header.inc");
?>

<font face="Verdana,Arial" size="2" color="#000000">

<font face="Verdana,Arial" size="3" color="#000000">
<b>(Draft) A Teragrid Status* Information Provider for MDS 2.x</b>
</font>
<br><hr><br>

by <a href="http://www.thecodefactory.org/neillm">Neill Miller</a>
under the guidance of <a
href="http://www-unix.mcs.anl.gov/~schopf/">Jennifer Schopf</a>.
<br><br>
<i>* Built on top of
<a href="http://www.ncsa.uiuc.edu/~jbasney/">Jim Basney</a>'s
<a href="http://www.ncsa.uiuc.edu/~jbasney/teragrid-setup-test.html">
teragrid test script.</a>
<br><br>
Warning: This information is only a draft and is currently
unofficial.  The Schema, the code, and all of the information may
change in the future.
</i>
<br><br>

<a href="#introduction">Introduction</a><br>
<a href="#schema">The Schema</a><br>
<a href="#code">The Code</a><br>
<a href="#config">Configuring The Provider</a><br>
<a href="#enable">Enabling The Provider</a><br>
<a href="#output">An Example Query Output</a><br>
<a href="#comparison">Jim Basney's Script vs. Teragrid Information
Provider Data Representation Comparison</a><br>
<a href="#screenshots">Screenshots</a><br>
<br><br>

<a name="introduction">
<b>Introduction</b>
<br><hr><br>
The MDS may benefit from having a core information provider which
publishes information about a teragrid setup of a Globus based grid
environment.  This information is gathered from a tool written by
Jim Basney for collecting information and performing various tests
on each node.  It is already accessible via the web at various
locations including
<a href="http://www.ncsa.uiuc.edu/~jbasney/tg-lite-32bit-status/">
NCSA</a>, and
<a href="http://www.sdsc.edu/~kst/teragrid-status/">SDSC</a>.
However, having this information in a centralized location, such as
a known MDS, is valuable for observation, development, and analysis.
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
attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.125
    NAME 'Mds-GIIS-Host-hn'
    DESC 'A GIIS host that will provided Teragrid test information'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.126
    NAME 'Mds-Host-Status-found'
    DESC 'An attribute that specifies a host was detected'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.127
    NAME 'Mds-Host-Status-Not-found'
    DESC 'An attribute that specifies a host was not detected'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.128
    NAME 'Mds-Test-Host-hn'
    DESC 'A host that was tested by the Teragrid scripts'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.129
    NAME 'Mds-Gatekeeper-test'
    DESC 'Test status of authentication to gatekeeper on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.130
    NAME 'Mds-GRIS-test'
    DESC 'Test status of connectivity to GRIS on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.131
    NAME 'Mds-GridFTP-test'
    DESC 'Test status of connectivity to GridFTP on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )
attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.132
    NAME 'Mds-GSISSH-test'
    DESC 'Test status of GSISSG on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.133
    NAME 'Mds-Mpicc-test'
    DESC 'Test status of Mpicc on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.134
    NAME 'Mds-Simple-Job-Fork-Jobmanager-test'
    DESC 'Test status of simple job fork jobmanager on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.135
    NAME 'Mds-MPI-Job-Fork-Jobmanager-test'
    DESC 'Test status of MPI job fork jobmanager on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.136
    NAME 'Mds-CondorG-test'
    DESC 'Test status of Condor-G on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.137
    NAME 'Mds-Grid-Path-test'
    DESC 'Test status of grid programs found in PATH of test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.138
    NAME 'Mds-Simple-Job-PBS-Jobmanager-test'
    DESC 'Test status of simple job PBS jobmanager on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.139
    NAME 'Mds-MPI-Job-PBS-Jobmanager-test'
    DESC 'Test status of MPI job pbs jobmanager on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.140
    NAME 'Mds-GridFTP-From-Fork-Job-test'
    DESC 'Test status of GridFTP from fork job on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.141
    NAME 'Mds-GridFTP-From-PBS-Job-test'
    DESC 'Test status of GridFTP from pbs job on test host'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

objectclass ( 1.3.6.1.4.1.3536.2.6.3536.10.1.142
    NAME 'MdsGIISHostStatusInfo'
    DESC 'Teragrid test status information according to a GIIS Host'
    SUP 'Mds'
    STRUCTURAL
    MUST ( Mds-GIIS-Host-hn )
    MAY  ( Mds-Host-Status-found $ Mds-Host-Status-Not-found )
 )

objectclass ( 1.3.6.1.4.1.3536.2.6.3536.10.1.143
    NAME 'MdsTeragridTestInfo'
    DESC 'Teragrid host test and status Information'
    SUP 'Mds'
    STRUCTURAL
    MUST ( Mds-Test-Host-hn )
    MAY  ( Mds-Gatekeeper-test $ Mds-GRIS-test $ Mds-GridFTP-test $
           Mds-GSISSH-test $ Mds-Mpicc-test $
           Mds-Simple-Job-Fork-Jobmanager-test $
           Mds-MPI-Job-Fork-Jobmanager-test $ Mds-CondorG-test $
           Mds-Grid-Path-test $ Mds-Simple-Job-PBS-Jobmanager-test $
           Mds-MPI-Job-PBS-Jobmanager-test $
           Mds-GridFTP-From-Fork-Job-test $
           Mds-GridFTP-From-PBS-Job-test )
 )
</pre>

<i>NOTE: The OID values have been cleared for testing by <a
href="http://www-unix.mcs.anl.gov/~schopf/">Jennifer Schopf</a>,
but of course are subject to change if required.</i>

<br><br>

The schema shows that we have two basic components (objectclasses).
The MdsGIISHostStatusInfo is a top-level object that displays basic
information about which hosts are found (or not found) according to
the GIIS configured for use with the Teragrid-setup script.
<br><br>

The MdsTeragridTestInfo objectclass describes a set of tests that were
performed against each reported node in the MdsGIISHostStatusInfo
objectclass.  These tests are performed by the Teragrid-setup scripts
and the output of each test is formatted for publication in the MDS.
<br><br>

<a name="config">
<b>Configuring The Provider</b>
<br><hr><br>

The existing Teragrid-setup script performs a series of tests against
each host reported by the configured GIIS.  This test information is
written to an HTML file and stored somewhere on the host that runs the
script.  Once this HTML file is generated, this information provider
parses this output and formats the data into the proposed MDS Schema
above.  Thus, this information provider requires the HTML file to
monitor as input.  This can be done by the use of an environment
variable called TSHTML_OUTPUT.  The input file defaults to
"index.html" located in the current directory.  If this file is not
present and the TSHTML_OUTPUT environment variable is not set to a
valid HTML file, the information provider will not emit any
information for MDS publication.
<br><br>


<a name="code">
<b>The Code</b>
<br><hr><br>

Here you can sample the current source code for this draft
implementation.  It is written as a bash shell script (like the other
core information providers included with MDS 2.x), however internally
it calls out to a perl script.  Not all platforms have been tested (or
even implemented).

<br><br>
<a href="grid-info-teragrid-posix">grid-info-teragrid-posix</a><br>
<a href="grid-info-teragridsetup-posix">
grid-info-teragridsetup-posix</a>
<br><br>

<i>NOTE: You must update the grid-info-teragrid-posix script to point
to the proper location of the grid-info-teragridsetup-posix.pl perl
script in order for this information provider to work properly.  There
is a place to set this at the top of the info-provider.</i>

<br><br>

<a name="enable">
<b>Enabling The Provider</b>
<br><hr><br>

Now that we have the information provider written, the last step is to
enable it so that we can test it.  I've added the following entry into
the <b>$GLOBUS_LOCATION/etc/grid-info-resource-ldif.conf</b> file:

<pre>
# generate teragrid setup information every 1 day 
dn: Mds-Host-hn=glob.cs.nwu.edu, Mds-Vo-name=local, o=grid
objectclass: GlobusTop
objectclass: GlobusActiveObject
objectclass: GlobusActiveSearch
type: exec
path: /opt/globus/libexec
base: grid-info-teragrid-posix
args: -devobjs -dn Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid -validto
-secs 86400 -keepto-secs 86400
cachetime: 86400
timelimit: 100
sizelimit: 100
</pre>

<i>NOTE: You will need to change the dn line (at the top, and also in the
args line a little further down) that lists the hostname for your machine.
My host name is "glob.cs.nwu.edu", so replace where it says
"glob.cs.nwu.edu" with the hostname of your machine.</i>
<br><br>

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
neillm@glob libexec $ export TSHTML_OUTPUT=/tmp/test.html
neillm@glob libexec $ ./grid-info-teragrid-posix -devobjs -dn Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid -validto-secs 86400 -keepto-secs 86400

dn: Mds-GIIS-Status-info=host status information,Mds-Host-hn=glob.cs.nwu.edu,Mds
-Vo-name=local,o=grid
objectclass: MdsGIISHostStatusInfo
Mds-GIIS-Host-hn: (mds-teragrid.ncsa.uiuc.edu)
Mds-Host-Status-found: quasar2.sdsc.edu
Mds-Host-Status-found: tg-anl-ms.mcs.anl.gov
Mds-Host-Status-found: tg32-0.ncsa.uiuc.edu
Mds-Host-Status-found: tgl0.cacr.caltech.edu
Mds-validfrom: 20021018182307Z
Mds-validto: 20021019182307Z
Mds-keepto: 20021019182307Z


dn: Mds-Test-Host-hn=quasar2.sdsc.edu,Mds-GIIS-Status-info=host status informati
on,Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid
objectclass: MdsTeragridTestInfo
Mds-Test-Host-hn: quasar2.sdsc.edu
Mds-Gatekeeper-test: succeeded
Mds-GRIS-test: succeeded
Mds-GridFTP-test: succeeded
Mds-GSISSH-test: succeeded
Mds-Mpicc-test: succeeded
Mds-Simple-Job-Fork-Jobmanager-test: succeeded
Mds-MPI-Job-Fork-Jobmanager-test: succeeded
Mds-CondorG-test: Condor-G found
0 Condor-G jobs queued; 0 Condor-G jobs running.
Now running Condor-G test job at quasar2.sdsc.edu...succeeded
Mds-Grid-Path-test: found
Mds-Simple-Job-PBS-Jobmanager-test: succeeded
Mds-MPI-Job-PBS-Jobmanager-test: succeeded
Mds-GridFTP-From-Fork-Job-test: succeeded (quasar2.sdsc.edu to tg32-0.ncsa.uiuc.
edu)
Mds-GridFTP-From-PBS-Job-test: succeeded (quasar2.sdsc.edu to tg32-0.ncsa.uiuc.e
du)
Mds-validfrom: 20021018182307Z
Mds-validto: 20021019182307Z
Mds-keepto: 20021019182307Z


dn: Mds-Test-Host-hn=tg-anl-ms.mcs.anl.gov,Mds-GIIS-Status-info=host status info
rmation,Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid
objectclass: MdsTeragridTestInfo
Mds-Test-Host-hn: tg-anl-ms.mcs.anl.gov
Mds-Gatekeeper-test: succeeded
Mds-GRIS-test: succeeded
Mds-GridFTP-test: timed out
Mds-GSISSH-test: succeeded
Mds-Simple-Job-Fork-Jobmanager-test: succeeded
Mds-Grid-Path-test: found
Mds-Simple-Job-PBS-Jobmanager-test: succeeded
Mds-GridFTP-From-Fork-Job-test: succeeded (tg-anl-ms.mcs.anl.gov to tg32-0.ncsa.
uiuc.edu)
Mds-GridFTP-From-PBS-Job-test: timed out (tg-anl-ms.mcs.anl.gov to tg32-0.ncsa.u
iuc.edu)
Mds-validfrom: 20021018182307Z
Mds-validto: 20021019182307Z
Mds-keepto: 20021019182307Z


dn: Mds-Test-Host-hn=tg32-0.ncsa.uiuc.edu,Mds-GIIS-Status-info=host status infor
mation,Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid
objectclass: MdsTeragridTestInfo
Mds-Test-Host-hn: tg32-0.ncsa.uiuc.edu
Mds-Gatekeeper-test: succeeded
Mds-GRIS-test: succeeded
Mds-GridFTP-test: succeeded
Mds-GSISSH-test: succeeded
Mds-Mpicc-test: succeeded
Mds-Simple-Job-Fork-Jobmanager-test: succeeded
Mds-MPI-Job-Fork-Jobmanager-test: succeeded
Mds-CondorG-test: Condor-G found
1 Condor-G jobs queued; 0 Condor-G jobs running.
Now running Condor-G test job at tg32-0.ncsa.uiuc.edu...succeeded
Mds-Grid-Path-test: found
Mds-Simple-Job-PBS-Jobmanager-test: succeeded
Mds-MPI-Job-PBS-Jobmanager-test: succeeded
Mds-GridFTP-From-Fork-Job-test: succeeded (tg32-0.ncsa.uiuc.edu to tg32-0.ncsa.u
iuc.edu)
Mds-GridFTP-From-PBS-Job-test: succeeded (tg32-0.ncsa.uiuc.edu to tg32-0.ncsa.ui
uc.edu)

dn: Mds-Test-Host-hn=tgl0.cacr.caltech.edu,Mds-GIIS-Status-info=host status info
rmation,Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid
objectclass: MdsTeragridTestInfo
Mds-Test-Host-hn: tgl0.cacr.caltech.edu
Mds-Gatekeeper-test: succeeded
Mds-GRIS-test: succeeded
Mds-GridFTP-test: succeeded
Mds-GSISSH-test: succeeded
Mds-Mpicc-test: succeeded
Mds-Simple-Job-Fork-Jobmanager-test: succeeded
Mds-MPI-Job-Fork-Jobmanager-test: succeeded
Mds-CondorG-test: Condor-G found
0 Condor-G jobs queued; 0 Condor-G jobs running.
Now running Condor-G test job at tgl0.cacr.caltech.edu...succeeded
Mds-Grid-Path-test: found
Mds-Simple-Job-PBS-Jobmanager-test: failed (expected output not found)
Mds-GridFTP-From-Fork-Job-test: succeeded (tgl0.cacr.caltech.edu to tg32-0.ncsa.
uiuc.edu)
</pre>

<br>
On a real query on a running MDS installation, the following output is
emitted.
<br>

<pre>
neillm@glob neillm $ export TSHTML_OUTPUT=/tmp/test.html
neillm@glob neillm $ /opt/globus/sbin/globus-mds start
Starting up Openldap 2.0 SLAPD server for the GRIS
neillm@glob neillm $ grid-info-search -x "(objectclass=MdsTeragridTestInfo)" -LLL
dn: Mds-Test-Host-hn=quasar2.sdsc.edu,Mds-GIIS-Status-info=host status informa
 tion,Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid
objectClass: MdsTeragridTestInfo
Mds-Test-Host-hn: quasar2.sdsc.edu
Mds-Gatekeeper-test: succeeded
Mds-GRIS-test: succeeded
Mds-GridFTP-test: succeeded
Mds-GSISSH-test: succeeded
Mds-Mpicc-test: succeeded
Mds-Simple-Job-Fork-Jobmanager-test: succeeded
Mds-MPI-Job-Fork-Jobmanager-test: succeeded
Mds-CondorG-test: Condor-G found
Mds-Grid-Path-test: found
Mds-Simple-Job-PBS-Jobmanager-test: succeeded
Mds-MPI-Job-PBS-Jobmanager-test: succeeded
Mds-GridFTP-From-Fork-Job-test: succeeded (quasar2.sdsc.edu to tg32-0.ncsa.uiu
 c.edu)
Mds-GridFTP-From-PBS-Job-test: succeeded (quasar2.sdsc.edu to tg32-0.ncsa.uiuc
 .edu)
Mds-validfrom: 20021018182909Z
Mds-validto: 20021019182909Z
Mds-keepto: 20021019182909Z

dn: Mds-Test-Host-hn=tg-anl-ms.mcs.anl.gov,Mds-GIIS-Status-info=host status in
 formation,Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid
objectClass: MdsTeragridTestInfo
Mds-Test-Host-hn: tg-anl-ms.mcs.anl.gov
Mds-Gatekeeper-test: succeeded
Mds-GRIS-test: succeeded
Mds-GridFTP-test: timed out
Mds-GSISSH-test: succeeded
Mds-Simple-Job-Fork-Jobmanager-test: succeeded
Mds-Grid-Path-test: found
Mds-Simple-Job-PBS-Jobmanager-test: succeeded
Mds-GridFTP-From-Fork-Job-test: succeeded (tg-anl-ms.mcs.anl.gov to tg32-0.ncs
 a.uiuc.edu)
Mds-GridFTP-From-PBS-Job-test: timed out (tg-anl-ms.mcs.anl.gov to tg32-0.ncsa
 .uiuc.edu)
Mds-validfrom: 20021018182909Z
Mds-validto: 20021019182909Z
Mds-keepto: 20021019182909Z

dn: Mds-Test-Host-hn=tg32-0.ncsa.uiuc.edu,Mds-GIIS-Status-info=host status inf
 ormation,Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid
objectClass: MdsTeragridTestInfo
Mds-Test-Host-hn: tg32-0.ncsa.uiuc.edu
Mds-Gatekeeper-test: succeeded
Mds-GRIS-test: succeeded
Mds-GridFTP-test: succeeded
Mds-GSISSH-test: succeeded
Mds-Mpicc-test: succeeded
Mds-Simple-Job-Fork-Jobmanager-test: succeeded
Mds-MPI-Job-Fork-Jobmanager-test: succeeded
Mds-CondorG-test: Condor-G found
Mds-Grid-Path-test: found
Mds-Simple-Job-PBS-Jobmanager-test: succeeded
Mds-MPI-Job-PBS-Jobmanager-test: succeeded
Mds-GridFTP-From-Fork-Job-test: succeeded (tg32-0.ncsa.uiuc.edu to tg32-0.ncsa
 .uiuc.edu)
Mds-GridFTP-From-PBS-Job-test: succeeded (tg32-0.ncsa.uiuc.edu to tg32-0.ncsa.
 uiuc.edu)

dn: Mds-Test-Host-hn=tgl0.cacr.caltech.edu,Mds-GIIS-Status-info=host status in
 formation,Mds-Host-hn=glob.cs.nwu.edu,Mds-Vo-name=local,o=grid
objectClass: MdsTeragridTestInfo
Mds-Test-Host-hn: tgl0.cacr.caltech.edu
Mds-Gatekeeper-test: succeeded
Mds-GRIS-test: succeeded
Mds-GridFTP-test: succeeded
Mds-GSISSH-test: succeeded
Mds-Mpicc-test: succeeded
Mds-Simple-Job-Fork-Jobmanager-test: succeeded
Mds-MPI-Job-Fork-Jobmanager-test: succeeded
Mds-CondorG-test: Condor-G found
Mds-Grid-Path-test: found
Mds-Simple-Job-PBS-Jobmanager-test: failed (expected output not found)
Mds-GridFTP-From-Fork-Job-test: succeeded (tgl0.cacr.caltech.edu to tg32-0.ncs
 a.uiuc.edu)

neillm@glob neillm $ 

</pre>

<br><br>

<a name="comparison">
<b>Comparison of Data Representation (Jim Basney's scripts vs Teragrid
Information Provider)</b>
<br><hr><br>

Click <a href="comparison.txt">here</a> to view the data representations.
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
<? include("../../../include/cf_footer.inc"); ?>

