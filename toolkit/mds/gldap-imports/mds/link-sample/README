

--------------
 Installation
--------------

Place the script (.php4) and include (.inc) files into a directory
accessible by your webserver.  Make sure that your webserver
administrator has enabled PHP scripts to be executed properly by
modifying the appropriate webserver configuration files.

--
Using The Globus Toolkit version 2.x:
--

If you wish for this code to use the "grid-info-search" utility
included with the Globus Toolkit 2.x, please make sure that you have
the Globus Toolkit version properly installed.  In addition,
grid-info-search should be placed in a common location so that the PHP
script may find it easily by invoking "grid-info-search".

--
Using LDAP:
--

If you wish to use the direct LDAP API with this PHP script, possibly
because the Globus Toolkit installation on your webserver is not an
available option, the only requirement is that LDAP support be
compiled into PHP.  Your system's version of PHP used by your
webserver must have ldap support in it.  This may mean that you will
need additional libraries such as the openldap libraries.

--
Advantages of using LDAP or the Globus Toolkit over the other:
--

It should be noted here that the direct PHP LDAP API will not provide
substantial performance improvements over the grid-info-search utility
included with the Globus Toolkit version 2.x.  grid-info-search is a
light wrapper around a native ldap search utility and in testing
performs similarly to the direct PHP LDAP API.  Put simply, your
motivation for using one over the other should not be driven by
performance concerns.


---------------------------------
 Provided Function Documentation
---------------------------------

To use this code, include the file "mdsinterface.inc" and make sure
that the other files are able to be included (as they are included
from mdsinterface.inc).  Usually this is a matter of placing them in
an appropriate directory where they can be found for inclusion and
setting permissions allowing them to be read.

There are two top-level PHP functions that can be used for accessing
information about your grid using this PHP code from your webserver.

The functions are named:
1) retrieve_all_hosts, and
2) retrieve_host_details

--
Function: retrieve_all_hosts
Required Inputs:
1) A GIIS hostname,
2) The Port number to contact the GIIS hostname on,
3) The Base DN of the GIIS
Returned Output:
An array of hostobj objects (see below)
--

"retrieve_all_hosts" takes the above three arguments to initiate
a query against the specified GIIS.  The query will be performed
by grid-info-search or LDAP depending on how you performed the
installation for your site.  The goal of the query performed by
"retrieve_all_hosts" is to retrieve all registered hostnames that
the GIIS knows about, in addition to the DNs of each of the hosts.

The returned output is an array of hostobj objects.  This is not
an associative array.  Each element in the array is a hostobj object.
The host object can be viewed in the hostobj.inc file.  This object
is a class which contains a single hostname and an array of DN
strings.  The motivation for this is because a single hostname may
have multiple DN strings associated with it.  Thus, this object
simply groups all hosts to their DN values.

With this array of hostobj objects, you are able to display the
information in any manner you see fit.

--
Function: retrieve_host_details
Required Inputs:
1) A GIIS hostname,
2) A hostname to get the details of,
3) The Port number to contact the GIIS hostname on,
4) The Base DN of the GIIS
Returned Output:
An associative array of attribute names to values (see below)
--

"retrieve_host_details" takes the above four arguments to initiate
a query against the specified GIIS.  The query will be performed
by grid-info-search or LDAP depending on how you performed the
installation for your site.  The goal of the query performed by
"retrieve_host_details" is to retrieve all attributes and values
stored in the GIIS about the specified host.

The returned output is an associative array that maps attribute type
to attribute values.  The 'key' is always a single attribute type string,
however the 'value' is either a string or an array.  If the attribute
type contains only a single value, the value will be a string.  If
the attribute type contains more than one value, the value will be
an array.  The value type can be checked easily at runtime using the
PHP functions "is_string" and "is_array".  The motivation for this
is because a single attribute type (such as "ObjectClass") may have
multiple values associated with it (i.e. "MdsHost, MdsCpu, etc).
Note however that single multi-line values are not returned as multiple
values.  Only attribute types that truly have multiple values have
an array associated with them.

With this associative array of returned attributes and values, you are
able to display the information in any manner you see fit.


-------------------------------
 Understanding the sample code
-------------------------------

The sample code is contained in three (.php4) files.  The include (.inc)
files are the support scripts and should not be viewed directly.  The
sample code is contained in "index.php4", "display_all.php4", and
"display_host.php4".  The start page is index.php4 and will ask you
for some information about which GIIS to query.  This is only for
demonstration purposes and is not provided with the intent of
disallowing modifications.  It is expected that unlike the sample code
which prompts for the GIIS information, your site will use the PHP
functions directly with an already known GIIS that you would like to
monitor over time.  The three .php4 files are simply one way to use
the two functions provided by these scripts.

--
index.php4
--

This page presents a simple HTML Form used for gathering information
about a GIIS and will pass the input values to the display_all.php4
file.  The file has some hard-coded defaults for testing purposes.
The values passed to the display_all.php4 file are named "giis",
"port", and "dn".

--
display_all.php4
--

This page assumes that three incoming variables named "giis", "port"
and "dn" are passed in.  With these three variables, this page uses
the included function called "retrieve_all_hosts".  This function
requires all three of these variables as input and will return an
array of hostobj objects (more information below).  Once this array is
retrieved, all of the information is printed out in a simple table for
demonstration purposes.  It is expected that your code will display
this information in a custom manner to match the look and feel of your
website.

Each dn that is presented on this page is a link to another page
called display_host.php4.  While the dn link is generated using an
internal function called "print_dn_as_link", usage of this function is
not required.  If you are interested in using it, please look at the
mdsutility.inc file.  There is also a similar support function
provided called "print_host_as_link".

NOTE: If these print_X_as_link functions are used, the variables will
be passed in with the URL string and must be URL encoded by PHP.

--
display_host.php4
-- 

This page assumes that four incoming variables named "giis", "host",
"port" and "dn" are passed in via the URL string.  Thus, in this
particular case, the variables are 'urldecoded' by PHP so that they
may be useable.

Usage of the "retrieve_host_details" function is shown.  The function
returns an associative array that either contains a string or a
subarray. Simple usage is demonstrated in this sample script for one
way to use this returned information.


-----------------------------------
 Modifying the code for your needs
-----------------------------------

You are free to use and modify any of the included code under the Globus
Toolkit Public License (GTPL).  For more information, please read the
license at:

http://www.globus.org/toolkit/download/license.html