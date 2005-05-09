<?
   $title = "Writing an Information provider in MDS 2.1";
   include("../include/cf_header.inc");
?>

<font face="Verdana,Arial" size="2" color="#000000">

<font face="Verdana,Arial" size="3" color="#000000">
<b>Writing a Custom Information Provider in MDS 2.x from start to finish</b>
</font>
<br><hr><br>

by <a href="mailto:neillm@thecodefactory.org">Neill Miller</a><br><br>

<i>This should be used in conjunction with the document
<a href="http://www.globus.org/mds/creating_new_providers.pdf">creating new
providers</a>.  This page was written as a supplement; filling in information
that the author thought the official document lacks.
</i>
<br><br>
Making a custom MDS Schema:
<br><br>

1) Think of some attributes (i.e. pieces of descriptive information
   that you would like to provide) that are required and define them in
   the $GLOBUS_LOCATION/etc/grid-info-resource.schema file.  Each
   attribute has some basic syntax rules to follow that are described at:
   <a href="ftp://ftp.isi.edu/in-notes/rfc2252.txt">
   ftp://ftp.isi.edu/in-notes/rfc2252.txt</a>
   <br><br>

   A helpful (more friendly) site is at:
   <a href="http://www.yolinux.com/TUTORIALS/LinuxTutorialLDAP-DefineObjectsAndAttributes.html">
   http://www.yolinux.com/TUTORIALS/LinuxTutorialLDAP-DefineObjectsAndAttributes.html</a> - 
   (but beware that the SYNTAX description needs to be referenced in
   section 4.3 of the RFC.  The SYNTAX keyword just describes a 'type' of
   the attribute like a string or an INT, etc.  See the table provided in
   the RFC for the proper OID)<br><br>

2) Define an object class that 'groups' the attributes logically in
   the $GLOBUS_LOCATION/etc/grid-info-resource.schema file.  An
   objectclass is a group of attributes.  Define that group.<br><br>

3) Double check your definitions of objects and attributes as
   completed in step 1 and 2.  The SLAPD server will not start if
   there are any syntax problems.  Also, the ordering of the
   definitions appears to matter, so I defined all of my attributes
   and object at the end of the
   $GLOBUS_LOCATION/etc/grid-info-resource.schema file.<br><br>

4) Write your information provider<br><br>

5) Define how the information provider will be called in the
   $GLOBUS_LOCATION/etc/grid-info-resource-ldif.conf file<br><br>

6) Restart the slapd server and test a query

<br><hr><br>


<font face="Verdana,Arial" size="3" color="#000000">
<b>My First Information Provider</b>
</font>
<br><hr><br>

My first information provider should accomplish one simple task.  Given a query on
a GRIS, I need the MDS to publish all of the GIIS hosts that it is
registered with.  This information is stored locally on the GRIS host
in a file called $GLOBUS_LOCATION/etc/grid-info-resource-register.conf
<br><br>
Following the above steps, I've decided that I want the following
schema:
<br><br>
objectclass: MdsJmsNmExtension
<br><br>
This will be the (arbitrarily named) object name that will group all
of the attributes that I will be using for this information provider.
It is simply saying that it is an extension object to Mds provided by
Jms and written by Nm ;-)  Since everything derives from Mds, this
object will as well.
<br><br>
Attribute: Mds-Known-GIIS-Host-Group
<br><br>
This is a group of GIIS hosts.  It's a logical grouping that was only
a concept idea.  It will be an optional attribute.
<br><br>
Attribute: Mds-Known-GRIS-Host-hn
<br><br>
This is an attribute saying what the host name of the GRIS that we've
just queried is.  It's not technically required since we already know
it, thus it will be an optional attribute.
<br><br>
Attribute: Mds-Known-GIIS-name
<br><br>
This is the name of a GIIS that a GRIS is registered with.  If you
look in the $GLOBUS_LOCATION/etc/grid-info-resource-register.conf
file, there are names for GIIS hosts in addition to the actual host
names.  I just see this as a user friendly GIIS name.  This is a
required attribute.
<br><br>
Attribute: Mds-Known-GIIS-Host-hn
<br><br>
This is the host name that corresponds with a given user friendly GIIS
name.  This is a real Internet address of a GIIS that should allow
incoming queries.  This is a required attribute.
<br><br>
Okay, now for the Schema.  This is what I've added to the end of my
$GLOBUS_LOCATION/etc/grid-info-resource.schema file:
<pre>
attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.101
    NAME 'Mds-Known-GIIS-Host-Group'
    DESC 'A group of known GIIS hosts'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.102
    NAME 'Mds-Known-GRIS-Host-hn'
    DESC 'A single GRIS host name'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.103
    NAME 'Mds-Known-GIIS-name'
    DESC 'A single GIIS name'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

attributetype ( 1.3.6.1.4.1.3536.2.6.3536.10.1.104
    NAME 'Mds-Known-GIIS-Host-hn'
    DESC 'A single GIIS host name'
    EQUALITY caseIgnoreMatch
    ORDERING caseIgnoreOrderingMatch
    SUBSTR caseIgnoreSubstringsMatch
    SYNTAX 1.3.6.1.4.1.1466.115.121.1.44
    SINGLE-VALUE
 )

objectclass ( 1.3.6.1.4.1.3536.2.6.3536.10.1.100
    NAME 'MdsJmsNmExtension'
    DESC 'A JMS namespace extension to Mds by NM'
    SUP 'Mds'
    STRUCTURAL
    MUST ( Mds-Known-GIIS-Host-hn $ Mds-Known-GIIS-name )
    MAY ( Mds-Known-GIIS-Host-Group $ Mds-Known-GRIS-Host-hn )
 )
</pre>   
NOTE: The SYNTAX lines just specify printable strings as seen in
section 4.3 of RFC2252 (ftp://ftp.isi.edu/in-notes/rfc2252.txt)
<br><br>
Now that I have my objects defined, I need to write the information
provider that can gather the GIIS information from the file
mentioned.  My information provider looks like this.  It's hacky and
lacks robustness, but since I'm learning a lot about MDS and the
Globus Toolkit and the Grid Architecture all at once, this is a detail
I'm not too concerned with it at the moment.
<br><br>
<a href="grid-info-giis-linux">grid-info-giis-linux</a> - My simple custom information provider.
<br><br>
Running this script on the command line emits the following (NOTE: My
    local machine running the MDS has a hostname of <i>glob</i>):
<pre>
dn: Mds-Known-GIIS-Host-Group=giis-registration, 
objectclass: MdsJmsNmExtension
Mds-Known-GIIS-name: site
Mds-Known-GIIS-Host-hn: glob
Mds-validfrom: 20020723162925Z
Mds-validto: 20020723162925Z
Mds-keepto: 20020723162925Z
</pre>

On a more complicated (yet false) example, the script emits the
following:
<pre>

dn: Mds-Known-GIIS-Host-Group=giis-registration, 
objectclass: MdsJmsNmExtension
Mds-Known-GIIS-name: isi
Mds-Known-GIIS-Host-hn: dc-user.isi.edu
Mds-Known-GIIS-name: dtf
Mds-Known-GIIS-Host-hn: host1.dtf.org
Mds-Known-GIIS-name: site
Mds-Known-GIIS-Host-hn: glob
Mds-validfrom: 20020723163011Z
Mds-validto: 20020723163011Z
Mds-keepto: 20020723163011Z

</pre>
Good enough!  I have the information I want (i.e. the GIIS hosts)  
<br><br>

Now the last step is to enable the provider.  To do this, I've added
the following to the $GLOBUS_LOCATION/etc/grid-info-resource-ldif.conf
file which describes how the information provider will be called and
what it should emit.

<pre>
# generate registered GIIS info every 12 hours
dn: Mds-Known-GIIS-Host-Group=giis-registration, Mds-Host-hn=glob, Mds-Vo-name=local, o=grid
objectclass: GlobusTop
objectclass: GlobusActiveObject
objectclass: GlobusActiveSearch
type: exec
path: /opt/globus/libexec
base: grid-info-giis-linux
args: -devclassobj -dn Mds-Host-hn=glob,Mds-Vo-name=local,o=grid -validto-secs 900 -keepto-secs 900
cachetime: 43200
timelimit: 20
sizelimit: 1
</pre>

Great!  If all went well up to this point, we're done.  After
restarting the slapd server, the real run-time output of this looks
like the following:<br>

<pre>
dn: Mds-Known-GIIS-Host-Group=giis-registration, Mds-Host-hn=glob,Mds-Vo-name=
 site,o=Grid
objectClass: MdsJmsNmExtension
Mds-Known-GIIS-name: site
Mds-Known-GIIS-Host-hn: glob
Mds-validfrom: 20020806170008Z
Mds-validto: 20020806171508Z
Mds-keepto: 20020806171508Z
</pre>

The query used to generate this output is:
<pre>
grid-info-search -x -b "mds-vo-name=site,o=grid" "(objectclass=MdsJmsNmExtension)" -LLL
</pre>

<br><hr><br>
<i>Update: 08/06/2002</i>
<br><hr><br>
<font size="3">
<b>The importance of the emitted DN line.</b>
</font>
<br><hr><br>
It took me a while to figure
this out, and once I did, I immediately forgot that it took a while -
so here's a short explanation that may or may not help you in
publishing data to the MDS.
<br><br>

The DN line specifies the Tree like hierarchy when viewing the records
in an LDAP browser.  Starting from right to left, the records show
each level of the tree.  When you write an information provider, you
must emit the proper DN line that tells an LDAP browser where to place
you when visualizing the record.
<br><br>

Example: dn: Mds-Foo-Bar=FOO, Mds-Host-hn=foo, Mds-Vo-name=local,
o=Grid
<br><br>

This line says that the record "Mds-Foo-Bar" is a child of
"Mds-Host-hn=foo", which is a child of "Mds-Vo-name=local,o=grid".
<br><br>

In a tree like view, this could look like this:
<pre>
        Mds-Vo-name=local,o=grid  (Root node)
               |                     \
               |                      \
               |                       \
          Mds-Host-hn=foo    Mds-Host-hn=bar
               |
               |
               |
           Mds-Foo-Bar=FOO
</pre>

Note that the Mds-Foo-Bar record is located under the Mds-Host-hn=foo,
not the hypothetical Mds-Host-hn=bar record.  This is because we
explicitly built the location in to the DN line.  I hope this makes
sense!
<br><br>

</font>
<? include("../include/cf_footer.inc"); ?>

