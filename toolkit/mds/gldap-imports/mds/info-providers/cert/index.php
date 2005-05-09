<?
   $title = "Information provider docs (MDS 2.x)";
   include("../../../include/cf_header.inc");
?>

<font face="Verdana,Arial" size="2" color="#000000">

<font face="Verdana,Arial" size="3" color="#000000">
<b>(Draft) A Certificate Publishing Information Provider for MDS 2.x</b>
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
Certificate Information Provider</a>
<br><br>

<a href="#introduction">Introduction</a><br>
<a href="#schema">The Schema</a><br>
<a href="#code">The Code</a><br>
<a href="#config">Configuring The Provider</a><br>
<a href="#enable">Enabling The Provider</a><br>
<a href="#output">An Example Query Output</a><br>
<a href="#screenshots">Screenshots</a><br>
<br><br>

<a name="introduction">
<b>Introduction</b>
<br><hr><br>
The MDS may benefit from having a core information provider which
publishes information about the local certificate policy on each
GRIS/GIIS host of a Globus based grid environment.  Users or
administrators of the installation may be interested in knowing
if a particular certificate is accepted at a given GRIS/GIIS host.
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
attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.117
    NAME 'Mds-Authn-CA-Name-hash'
    DESC 'The hash of a particular certificate'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.118
    NAME 'Mds-Authn-Cert-file'
    DESC 'The file location of a certificate'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.119
    NAME 'Mds-Authn-Policy-file'
    DESC 'The file location of a certificate signing policy'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.120
    NAME 'Mds-Authn-CA-name'
    DESC 'The name of the CA'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.121
    NAME 'Mds-Authn-CA-policy'
    DESC 'A policy of the CA'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.122
    NAME 'Mds-Authn-Trusted-Cert-dir'
    DESC 'A directory containing one or more certificates'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

objectclass ( 1.3.6.1.4.1.3536.2.6.3536.10.1.123
    NAME 'MdsCertificatePolicy'
    DESC 'Information about a certificate policy'
    SUP 'Mds'
    STRUCTURAL
    MUST ( Mds-Authn-CA-Name-hash $ Mds-Authn-Cert-file $
           Mds-Authn-Policy-file $ Mds-Authn-CA-name $
           Mds-Authn-CA-policy )
 )

objectclass ( 1.3.6.1.4.1.3536.2.6.3536.10.1.124
    NAME 'MdsAuthnGroup'
    DESC 'Information about trusted certificate directories'
    SUP 'Mds'
    STRUCTURAL
    MUST ( Mds-Authn-Trusted-Cert-dir )
 )
</pre>

<i>NOTE: The OID values have been cleared for testing by <a
href="http://www-unix.mcs.anl.gov/~schopf/">Jennifer Schopf</a>,
but of course are subject to change if required.</i>

<br><br>

The schema shows that we have two basic components (objectclasses).
The MdsAuthnGroup is a logical group of trusted directories each
containing certificate policies.
<br><br>

The MdsAuthnGroup objectclass describes a set of Trusted Certificate
directories.  Each directory that should publish certificate policy
information should be included in this objectclass.

<br><br>

<a name="config">
<b>Configuring The Provider</b>
<br><hr><br>

This information provider can handle publishing certificate
information in multiple trusted certificate directories.  In order to
do this, please pay careful attention to the rules outlined below.
The basic idea is that careful use of environment variables control
which directories are scanned for information to be published.  This is for
many reasons, not the least of which is security.  The system
administrator my choose which trusted certificate directories to
publish information on, as well as to keep private.

<br><br>
The provider looks for the certificate directory as follows
(in this order of precedence):

<br><br>
1) If CERT_DIRS is defined, it can be used to hold multiple certificate
paths in the following format:
/path/to/cert-dir1:/path/to/cert-dir2:/path/to/cert-dir3 ... etc.<br>
2) If CERT_DIR is defined, it will be used<br>
3) If all else fails, the default cert dir of
/etc/grid-security/certificates will be used

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
<i>Compatibility Note:</i><br>
- Tested successfully on GNU/Linux, IRIX64, AIX, and Solaris<br>
- Signing policies with multiple subjects and access IDs are
  non-intuitive. (i.e. Obsolete certificate formatted data)

<br>
<a href="grid-info-cert-posix">grid-info-cert-posix</a>
<br><br>

<a name="enable">
<b>Enabling The Provider</b>
<br><hr><br>

Now that we have the information provider written, the last step is to
enable it so that we can test it.  I've added the following entry into
the <b>$GLOBUS_LOCATION/etc/grid-info-resource-ldif.conf</b> file:

<pre>
# generate certificate info every 12 hours
dn: Mds-Host-hn=glob, Mds-Vo-name=local, o=grid
objectclass: GlobusTop
objectclass: GlobusActiveObject
objectclass: GlobusActiveSearch
type: exec
path: /opt/globus/libexec
base: grid-info-cert-posix
args: -devclassobj -devobjs -dn Mds-Host-hn=glob,Mds-Vo-name=local,o=grid -valid
to-secs 900 -keepto-secs 900
cachetime: 43200
timelimit: 50
sizelimit: 100
</pre>

<i>NOTE: You will need to change the dn line (at the top, and also in the
args line a little further down) that lists the hostname for your machine.
My host name is "glob", so replace where it says "glob" with the hostname of
your machine.</i><br><br>

This information is pretty straightforward.  It tells the MDS how to
call the newly written information provider, as well as for how long
to cache the output data.  Twelve hours was selected, although that can be
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
neillm@glob libexec $ ./grid-info-cert-posix   
dn: 
objectclass: MdsAuthnGroup
Mds-Authn-Trusted-Cert-dir: /etc/grid-security/certificates

dn: Mds-Authn-Group=Certificate Directories,
objectclass: MdsAuthnGroup
Mds-Authn-Trusted-Cert-dir: /etc/grid-security/certificates

dn: Mds-Authn-Trusted-Cert-dir=/etc/grid-security/certificates,Mds-Authn-Group=Certificate Directories,
objectclass: MdsCertificatePolicy
Mds-Authn-CA-Name-hash: 42864e48
Mds-Authn-Cert-file: /etc/grid-security/certificates/42864e48.0
Mds-Authn-Policy-file: /etc/grid-security/certificates/42864e48.signing_policy
Mds-Authn-CA-name: '/C=US/O=Globus/CN=Globus Certification Authority'
Mds-Authn-CA-policy: "/C=us/O=Globus/*"
Mds-Authn-CA-policy: "/C=US/O=Globus/*"
Mds-Authn-CA-policy: "/O=Grid/O=Globus/*"
Mds-validfrom: 20020923163441Z
Mds-validto: 20020923163441Z
Mds-keepto: 20020923163441Z
</pre>

<br>
On a real query on a running MDS installation, the following output is
emitted.
<br>

<pre>
neillm@glob libexec $ ../sbin/SXXgris start
Starting up Openldap 2.0 SLAPD server for the GRIS
neillm@glob libexec $ grid-info-search -x "(objectclass=MdsCertificatePolicy)" -LL
version: 1

dn: Mds-Authn-Trusted-Cert-dir=/etc/grid-security/certificates,Mds-Authn-Group
 =Certificate Directories,Mds-Host-hn=glob,Mds-Vo-name=local,o=grid
objectClass: MdsCertificatePolicy
Mds-Authn-CA-Name-hash: 42864e48
Mds-Authn-Cert-file: /etc/grid-security/certificates/42864e48.0
Mds-Authn-Policy-file: /etc/grid-security/certificates/42864e48.signing_policy
Mds-Authn-CA-name: '/C=US/O=Globus/CN=Globus Certification Authority'
Mds-Authn-CA-policy: "/C=us/O=Globus/*"
Mds-Authn-CA-policy: "/C=US/O=Globus/*"
Mds-Authn-CA-policy: "/O=Grid/O=Globus/*"
Mds-validfrom: 20020923163532Z
Mds-validto: 20020923165032Z
Mds-keepto: 20020923165032Z
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


<br><br>
</font>
<? include("../../../include/cf_footer.inc"); ?>

