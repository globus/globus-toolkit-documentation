<?php include( "../../header.inc" ); ?>

<h1>Globus Toolkit C-based Testing Guide</h1>

[ <a href=".">Campaign Definition</a> ]

<h2>Outline</h2>

<ul>

    <li><a href="#overview">Overview</a></li>
    <li><a href="#prerequisites">Prerequisites</a></li>
    <li><a href="#unit">Unit Tests</a></li>
    <li><a href="#functionality">Functionality Tests</a></li>
    <li><a href="#bundles">Test Bundles</a></li>
    <li><a href="#rls">RLS</a></li>
    <li><a href="#gridftp">GridFTP Server</a></li>
    <li><a href="#c-bindings">OGSI C-Bindings</a></li>
    <li><a href="#list">Package List</a></li>

</ul>

<h2><a name="overview">Overview</a></h2>

<p>Some of the packages in the C-based portion of the Globus Toolkit
contain unit test and functionality tests.  Building, installing, and
running these tests can be done by hand or by a driver script we provide
with the toolkit.  These tests, the conventions they use, and the driver
script used to run them consist of the basis for the C-based testing
infrastructure.</p>

<p>Most of the test packages contain several scripts which are the
actual tests and a uniformly named script, called TESTS.pl, which knows
how to invoke the tests for that package.  The TESTS.pl script can be
called by a driver script, named 'test-toolkit', which recurses through
and runs all of the test packages installed in a Globus installation.
For the few packages with tests that do not follow this convention, their
tests need to be run by hand which is also covered in this document.</p>

<p>Running the C-based tests consists of building a test package,
installing it behind a Globus installation, and then invoking it.
We will describe how to do this below for the various C-based packages
in the Globus Toolkit.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="prerequisites">Prerequisites</a></h2>

<p>In the rest of this guide, we will go over how to run several C-based
software tests available in the Globus Toolkit.  In order to do so,
we first need to setup an environment from which to do the testing.
The details of the build environment for this document are as follows.</p>

<ul>
    <li>Intel i686 CPU</li>
    <li>Fedora Core 1</li>
    <li>Non-root</li>
</ul>

<p>I will also use the following conventions:</p>

<ul>
    <li>$ represents a user shell</li>
    <li># represents a root shell</li>
</ul>

<p>We'll get started using the Linux i686 binaries available on the
FTP archive.  By downloading and installing the Globus "all" bundle,
we'll have a standard base to build and install the tests.</p>

<pre>
$ mkdir TESTING
$ cd TESTING
$ wget http://www-unix.globus.org/ftppub/gt2/2.4/2.4.3/gpt/gpt-3.0.1-src.tar.gz
$ wget http://www-unix.globus.org/ftppub/gt2/2.4/2.4.3/bundles/bin/globus-all-2.4.3-i686-pc-linux-gnu-bin.tar.gz
$ tar zxvf gpt-3.0.1-src.tar.gz
$ cd gpt-3.0.1
$ export GPT_LOCATION=`pwd`
$ ./build_gpt
$ export PATH=$GPT_LOCATION/sbin:$PATH
$ cd ..
$ mkdir globus-2.4.3
$ export GLOBUS_LOCATION=`pwd`/globus-2.4.3
$ gpt-install globus-all-2.4.3-i686-pc-linux-gnu-bin.tar.gz
$ gpt-postinstall
</pre>

<p><b>Note:</b> Some tests require your /etc/grid-security/ directory
to be setup correctly.  If you need help setting it up, please see the
<a href="http://www.globus.org/gt2.4/admin/guide-verify.html">Admin
Guide</a></p>

<p>What we've just done is installed the Globus Toolkit 2.4.3 and GPT
3.0.1.  Depending on the speed and amount of memory in your machine,
the 'gpt-install' command could take several minutes.</p>

<p>Finally, we need to do two more things before we can build any tests,
and that is setup our CVS environment and build a special autotools
package used by the Globus Toolkit. To build autotools, we'll use a
script to save us some time.</p>

<pre>
$ mkdir gt2-cvs
$ cd gt2-cvs
$ export CVSROOT=:pserver:anonymous@cvs.globus.org:/home/globdev/CVS/globus-packages
$ export CVS_RSH=
$ cvs co side_tools/build-autoools
$ ./side_tools/build-autotools
$ export PATH=`pwd`/autotools/bin:$PATH
</pre>

<p>This should create an autotools/ directory in our gt2-cvs directory
and place its binaries ahead of any that may already be in our current
PATH.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="unit">Unit Tests</a></h2>

<p>Below I lay out which C-based packages have tests available which
will allow you to choose the tests you want to run.</p>

<p><b>Note:</b> A complete list of packages (and whether or not they
contain tests) is available in the <a href="#list">Package List</a>
section of this document.</p>

<ul>
    <li>Globus Callout</li>
    <li>Globus Common *</li>
    <li>Globus GASS File</li>
    <li>Globus GRAM Client *</li>
    <li>Globus GRAM Jobmanager *</li>
    <li>Globus GRAM Protocol *</li>
    <li>Globus GridFTP Client *</li>
    <li>Globus GridFTP Control</li>
    <li>Globus GridFTP Server Libs</li>
    <li>Globus GSI Authz</li>
    <li>Globus GSI GAA Callbacks Simple</li>
    <li>Globus GSI Globus Auth</li>
    <li>Globus GSI GSSAPI *</li>
    <li>Globus GSI GSS Assist *</li>
    <li>Globus GSI OpenSSL Error *</li>
    <li>Globus GSI Proxy SSL</li>
    <li>Globus GSI SSL Utils</li>
    <li>Globus IO *</li>
    <li>Globus MDS *</li>
    <li>Globus Nexus</li>
    <li>Globus Replica Management</li>
    <li>Globus RLS Server</li>
    <li>Globus UTP</li>
    <li>Globus XIO</li>
</ul>

<p><b>Note:</b> Packages denoted with an asterik are GPT packages which contain
a TESTS.pl file.</p>

<p>I'll explain the Note above in just a little bit.  The first thing
we did above was install a base Globus installation to deploy our tests
behind once we have them built.  So, the next thing we need to do is
build our tests. For this example, we'll use the Globus Common package
since it is a GPT package and includes a TESTS.pl file.  The following
steps can be reproduced for any of the above mentioned packages with an
asterik by their name.</p>

<p>In the gt2-cvs directory/, run the following:</p>

<pre>
$ cvs co common/test
$ cd common/test
$ ./bootstrap
$ gpt-build gcc32dbg
</pre>

<p><b>Note:</b> The first time you run ./bootstrap, you will see "error
while copying" messages which can be safely ignored.</p>

<p>This should build the package and install it behind our current
$GLOBUS_LOCATION.  Let's go check it out.</p>

<pre>
$ ls $GLOBUS_LOCATION/test/globus_common_test/
</pre>

<p>You should see a long list of files (omitted here for brevity).
Next, we'll go there and invoke the tests.</p>

<pre>
$ cd $GLOBUS_LOCATION
$ . etc/globus-user-env.sh
$ cd /test/globus_common_test/
$ ./TESTS.pl
</pre>

<p>You should get back something like this:</p>

<pre>
$ ./TESTS.pl
globus-common-args-test............ok
globus-common-error-test...........ok
globus-common-mem-test.............ok
globus-common-module-test..........ok
globus-common-poll-test............ok
globus-common-timedwait-test.......ok
globus-common-url-test.............ok
globus-common-error-stg-test.......ok
globus-common-hash-test............ok
globus-common-fifo-test............ok
globus-common-strptime-test........ok
globus-common-handle-table-test....ok
globus-common-libcsetenv-test......ok
globus-common-list-test............ok
All tests successful.
Files=14, Tests=14, 48 wallclock secs ( 6.50 cusr +  6.27 csys = 12.77 CPU)
$
</pre>

<p>If you would like to invoke multiple tests, we provide a script called
'test-toolkit' which serves this function.  Next we'll build, install, and run
it.</p>

<pre>
$ cd gt2-cvs
$ cvs co test
$ cd test
$ ./bootstrap
$ gpt-build gcc32dbg
</pre>

<p>Now we can invoke 'test-toolkit' from where we are and it will run all
the tests it finds behind $GLOBUS_LOCATION/test/.</p>

<pre>
$ $GLOBUS_LOCATION/test/globus_test/test-toolkit
</pre>

<p>This should show you the output of our earlier test wrapped in a
'test-toolkit' header and footer.  Again, 'test-toolkit' recurses through
all the directories in $GLOBUS_LOCATION/test looking for and then invoking
the script TESTS.pl when it finds it.  'test-toolkit' doesn't care what
TESTS.pl does or is even written in.  'test-toolkit' simply looks for
it and executes it, displaying its output back to the user.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="functionality">Functionality Tests</a></h2>

<p>In addition to unit tests, the toolkit also contains the following
functionality tests:</p>

<ul>
    <li>GRAM Client Tools</li>
    <li>GASS Copy</li>
</ul>

<b>Note:</b> A GridFTP 'globus-url-copy' test can be found in both of the
above packages.<br>

<b>Note:</b> Some of these tests have not been maintained and are now failing.

<p>Let's build and install these tests by hand since there is only two of
them.</p>

<pre>
$ cd gt2-cvs
$ cvs co gram_client_tools/test
$ cd gram_client_tools/test
$ ./bootstrap
$ gpt-build gcc32dbg
$ cd ..
$ cvs co gass/copy/test/
$ cd gass/copy/test/
$ ./bootstrap
$ gpt-build gcc32dbg
</pre>

<p>Now we can invoke these higher-level functionality tests the same way we did
the unit tests.  Since they are functionality tests, they are going to look more
like user-level commands and output.</p>

<p><b>Note:</b> A valid proxy is required to run these tests

<pre>
$ $GLOBUS_LOCATION/test/globus_test/test-toolkit \
    --directory=$GLOBUS_LOCATION/test/globus_gram_client_tools_test/
$ $GLOBUS_LOCATION/test/globus_test/test-toolkit \
    --directory=$GLOBUS_LOCATION/test/globus_gass_copy_test/
</pre>

<p>Below is a snippet of the output.</p>

<pre>
====================================
Testing GRAM locally
====================================
$ globus-personal-gatekeeper -killall 2&gt;&amp;1
No personal gatekeepers found on this host.
$ globus-personal-gatekeeper -start
$ globus-personal-gatekeeper -list 2&gt;&amp;1 
wiggum.mcs.anl.gov:45682:/O=Grid/OU=GlobusTest/OU=simpleCA-globus.org/OU=mcs.anl.gov/CN=Test Certificate
$ globusrun -a -r "wiggum.mcs.anl.gov:45682:/O=Grid/OU=GlobusTest/OU=simpleCA-globus.org/OU=mcs.anl.gov/CN=Test Certificate" 2&gt;&amp;1
 
GRAM Authentication test successful
Test Result: [SUCCESS]
</pre>

<p>These packages contain tests which can be run against a remote server
by providing 'test-toolkit' with the --remote=&lt;FQDN&gt; option.  Additional
options to test-toolkit can be viewed with the --help option.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="bundles">Test Bundles</a></h2>

<p>Ok, so we've seen how to build some of the test packages in the
Globus Toolkit by hand, and as we know, there are several.  We can
try to make life easier by writing a script to build and install all
of the tests but there are already three good scripts to start with.
With some minor modifications, each are capable of generating the test
bundles we're looking for.  The scripts are:</p>

<ul>
    <li>side_tools/build-release</li>
    <li>packaging/make-packages.pl</li>
    <li>~globus/bundle_cmd</li>
</ul>

<p>The first two are available in CVS while the third is available in
the MCS 'globus' home directory.  You should be aware that each script
mentioned here <i>requires</i> modification.  If you are not interested in
running the gammut of tests available in the toolkit, you can skip these
scripts and generate the test packages individually like we did above.</p>

<p>I should note that each of these scripts builds <i>all</i> the bundles
in addition to the test bundles.  These are the scripts we use to generate
toolkit releases and therefore are scoped much wider than the functions
we wish to use them for here.  Unfortunately, they are the only scripts
available for what we want to accomplish.</p>

<h4>build-release</h4>

<p>'build-release' is the first script we'll look at.  It's a Perl script
which builds the Globus Toolkit from source bundles which were released to
the Globus FTP archive and checks out the test packages from CVS (since
they aren't on the FTP archive).  It will build the source bundles of
a particular version of Globus from the archive, generate test bundles,
install the bundles it built, and finally invoke the tests.  <i>You will
need to modify the script before you run it.</i></p>

<p>To use the build-release script, we first need to check it out of
GT2's trunk in CVS:</p>

<pre>
$ cd gt2-cvs
$ cvs co side_tools/build-release
</pre>

<p>You will need to edit build-release.  Below are some guidelines to
editing that file.</p>

<ul>
<li>Change the variables in the section near the top labeled "# user
defined".</li>
<li>Look over the variables in the section labeled "# machine defined".</li>
<li>Set $BUILD_DIR to the directory you want to build to.  Be sure to create
this directory if it does not exist.</li>
<li>Set $VERSION to the version of the toolkit you want to
build.  This script downloads source bundles from here the URL:
http://www-unix.globus.org/ftppub/toolkit/$VERSION/bundles/src where $VERSION is
the whatever you set it to.</li>
<li>The $BRANCH variable should be set to the branch of the release you are
building from.</li>
<li>Comment out the line "tinderbox_start()".</li>
<li>Comment out the line "tinderbox_finish()".</li>
</ul>

<p>Next we'll run the 'build-release' script and watch the output.
The running time can be very long so we'll prefix it the 'time' command
to see its running time.</p>

<pre class="command">
$ cd side_tools
$ time ./build-release &
$ tail -f &lt;BUILD_DIR&gt;/build.log
</pre>

<p><b>Note:</b> Be sure to replace &lt;BUILD_DIR&gt; 
with the value you assigned $BUILD_DIR in the script.<br>
<b>Note:</b> This command will take approximately 2 hours to complete.<br>
<b>Note:</b> Precede build-release with the 'time' command to ascertain its
runtime</p>

<p>Once complete, you should have test bundles in:</p>

<pre class="command">
$ ls side_tools/bundle/src/
globus-add-on-2.4.3-src_bundle.tar.gz
globus-all-2.4.3-src_bundle.tar.gz
globus-data-management-test-2.4.3-src_bundle.tar.gz
globus-information-services-test-2.4.3-src_bundle.tar.gz
globus-replica-2.4.3-src_bundle.tar.gz
globus-resource-management-test-2.4.3-src_bundle.tar.gz
</pre>

<p>You can now install these bundles behind an existing Globus installation
tree.</p>

<pre>
$ gpt-build globus-data-management-test-2.4.3-src_bundle.tar.gz
$ gpt-build globus-resource-management-test-2.4.3-src_bundle.tar.gz
$ gpt-build globus-information-services-test-2.4.3-src_bundle.tar.gz
</pre>

<p>And finally, invoke the tests using the 'test-toolkit' script as we did
earlier.</p>

<pre>
$ $GLOBUS_LOCATION/test/globus_test/test-toolkit
</pre>

<p>This should show you the output of all the bundled tests we just
installed.</p>

<h4>make-packages.pl</h4>

<p>'make-packages.pl' is a newer generation script which builds the
Globus Toolkit (GT2 and GT3) from CVS.  This script is the latest build
script that has been written and is recommended for newcomers.</p>

<p>To use the 'make-packages.pl' script, we first need to check it out
of GT3's trunk in CVS:</p>

<pre>
$ export CVSROOT=:pserver:anonymous@cvs.globus.org:/home/globdev/CVS/gridservices
$ mkdir gt3-cvs
$ cd gt3-cvs
$ cvs co packaging
</pre>

<b>Note:</b> Make sure you switch your CVSROOT.  There is also a
"packaging" module in the GT2 CVSROOT which is different from the one
in the GT3 CVSROOT listed above.

<p>Next we need to start the script and tell it that we want to build from the
GT2 codebase and we want to build the 'all-test' bundle.  Bundle definitions can
be found in the file packaging/etc/gt2/bundles.</p>

<pre>
$ cd packaging
$ ./make-packages.pl --trees=gt2 --bundles=all-test
</pre>

<p>This command should create the directory "bundle-output" in your
current directory and populate it with the "all-test" source bundle and
the source packages contained in that bundle.  Build this bundle and rerun
'test-toolkit' as above.</p>

<h4>bundle_cmd</h4>

<p>The 'bundle_cmd' script is probably the most straight-forward and
easiest to use and modify.  Written in shell, it's a great place to start
if you're most familiar with GT2.  To begin, we need to grab the script
from the 'globus' user's home directory.</p>

<pre>
$ cp ~globus/bundle_cmd .
</pre>

<p>We need to modify 'bundle_cmd'.  Below are some guidelines to editing
that file.</p>

<ul>
    <li>Look for the "# Variables" line and tailor the variable under that section
    to your liking.
    <li>Comment out or delete any Tinderbox related code.  There are some
    portions of the script which try to send updates to Tinderbox.
</ul>

<p>For debugging purposes, execute bundle_cmd with 'sh -x bundle_cmd'
to see the exact commands the shell is running.</p>

<h3>Building and Running Test Bundles</h3>

<p>Once you have the test bundles, you can go ahead and build and install
them.</p>

<pre>
$ gpt-build globus-data-management-test-2.4.3-src_bundle.tar.gz gcc32dbg
$ gpt-build globus-resource-management-test-2.4.3-src_bundle.tar.gz gcc32dbg
$ gpt-build globus-information-services-test-2.4.3-src_bundle.tar.gz gcc32dbg
</pre>

<p>Invoking the 'test-toolkit' driver script will now run all of the
tests behind $GLOBUS_LOCATION/test/.</p>

<pre>
$ cd $GLOBUS_LOCATION
$ ./test/globus_test/test-toolkit -color
</pre>

<p>The 'test-toolkit' script has many options available which can be
viewed with the '-h' flag.  The output of 'test-toolkit' resembles
that of the Redhat Linux init process, reporting <span style="color:
green;">[SUCCESS]</span> or <span style="color: red;">[FAILURE]</span>
in a chronological fashion as the tests are invoked.</p>

<p>Each test package installed from the test bundle can be
invoked separately from the rest.  Calling 'test-toolkit' with
the --directory=&lt;dir&gt; option will result in only tests behind
&lt;dir&gt; being invoked.  Without the --directory option, all tests
behind $GLOBUS_LOCATION/test are called.</p>

<p>This concludes testing the standard test packages.  Next we will
start looking at some of the tests in the toolkit which require running
by hand.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="rls">RLS</a></h2>

<p>In order to test RLS, first you need to install an RLS server.</p>

<ul>
    <li><a href="http://www.globus.org/rls/INSTALL.html">RLS Installation
    Instructions</a></li>
</ul>

<p>To test that your RLS server installation is correct you need to start
the server in debug mode with the command:</p>

<pre>
$ $GLOBUS_LOCATION/bin/globus-rls-server -d [-N] 
</pre>

<p>The -N option is helpful if you do not have a host certificate for
the server host, or a user certificate for yourself, as it disables
authentication. The programs 'globus-rls-admin' and 'globus-rls-cli'
can be used to test functionality; please see their respective man pages
for details on their use. The simplest test is to ping the server:</p>

<pre>
$ $GLOBUS_LOCATION/bin/globus-rls-admin -p rls://&lt;serverhost&gt;
</pre>

<p>If you disabled authentication (by starting the server with the -N
option), then use this command:</p>

<pre>
$ $GLOBUS_LOCATION/bin/globus-rls-admin -p rlsn://&lt;serverhost&gt;
</pre>

<p>The RLS source bundle includes a test subdirectory (see
BUILD/globus_rls_server-version/test/). This includes a script called
'runtests' that invokes a program called 'globus-rls-test' to thoroughly
test an RLS server. You will need to edit the config file test.conf to
set the name of the database user and password (and possibly the path to
your odbc.ini file if you have a non-standard odbc.ini).</p>

<p>'runtests' will create databases called "lrctest" and "rlitest",
start up an RLS server, and run 'globus-rls-test'. You may need to grant
access to the test databases to the database user using grant commands
similar to what you used to create your production database(s).</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="gridftp">GridFTP Server</a></h2>

<p>At this time, the new GridFTP server in development does not have any
tests availale for it.  The old, WU-FTPD based server was tested via the
client test package, globus_ftp_client_test.  It is a GPT-based package so
building and running it are based on the practices mentioned earlier.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="c-bindings">OGSI C-Bindings</a></h2>

<p>OGSI C-Bindings contains the following packages with tests:</p>

<ul>
    <li>Base GRAM GT2 Wrappers Client (globus_gt3_gram_client_test)
    <li>Base GRAM GT2 Wrappers RSL_XML (globus_gram_xml_rsl_test)
    <li>Base GRAM Managed Job (globus_ogsa_base_gram_mj_test)
    <li>Core Factory (globus_ogsa_core_factory_test)
    <li>Core Notification (ogsa_core_notification_test)
    <li>Core Service (ogsa_impl_grid_service_test)
    <li>Samples Counter (globus_ogsa_samples_counter_test)
    <li>Security Authentication (ogsa_impl_security_authentication_test)
    <li>Security Message-handling (ogsa_impl_security_xml_plugin_test)
    <li>Test (ogsa_test)
</ul>

<p><b>Note:</b> The actual package name is in parenthesis.</p>

<p>The following OGSI C-Bindings packages do <i>not</i> have tests:</p>

<ul>
    <li>Base Jobmanager</li>
    <li>Base Managed Job</li>
    <li>Core Handle</li>
    <li>OGSI Core</li>
    <li>OGSI Service Plugin</li>
    <li>OGSI Types</li>
    <li>Security Authentication GRIM </li>
    <li>Security Message-handling GSoap WSSEC Plugin</li>
    <li>Security Message-handling GSSAPI </li>
    <li>Security Message-handling RSA-SHA1</li>
    <li>Security Message-handling XMLSEC GSSAPI Transform</li>
    <li>Utils</li>
</ul>

<p>Of the tests available in C-Bindings, each is a GPT package so they can
be built individually using the process described earlier.  These tests
do not contain a TESTS.pl file though which means that once installed,
they will not be run by the standard driver script 'test-toolkit'.
Therefore, each test needs to be invoked by hand.</p>

<p>Some of the tests are out-of-date and not in working order.  There is
a high level test packaged included (ogsa_test) but this suite of tests
is out-dated and not currently maintained by any developers.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="list">Package List</a></h2>

<p>The following C-based packages contain unit tests.  Please be aware that
simply because a package does contain a unit test, this does not mean
it is implemented thoroughly or maintained.</p>

<p><b>Note:</b> The actual package name is in parenthesis.</p>

<ul>
    <li>Callout (globus_callout_test)</li>
    <li>Common (globus_common_test)</li>
    <li>GASS File (globus_gass_file_test)</li>
    <li>GRAM Client (globus_gram_client_test)</li>
    <li>GRAM Jobmanager (globus_gram_job_manager_test)</li>
    <li>GRAM Protocol (globus_gram_protocol_test)</li>
    <li>GridFTP Client (globus_ftp_client_test)</li>
    <li>GridFTP Control (globus_ftp_control_test)</li>
    <li>GridFTP Server Libs (globus_gridftp_server_test)</li>
    <li>GSI Authz (globus_authz_test)</li>
    <li>GSI GAA Callbacks Simple (gaa_simple_test)</li>
    <li>GSI Globus Auth (globus_auth_test)</li>
    <li>GSI GSSAPI (globus_gssapi_gsi_test)</li>
    <li>GSI GSS Assist (globus_gss_assist_test)</li>
    <li>GSI OpenSSL Error (globus_openssl_error_test)</li>
    <li>GSI Proxy SSL (globus_proxy_ssl_test)</li>
    <li>GSI SSL Utils (globus_gsi_tests)</li>
    <li>IO (globus_io_test)</li>
    <li>MDS Tests (globus_mds_test)</li>
    <li>Nexus (not packaged by GPT)</li>
    <li>Replica Management (globus_replica_management_test)</li>
    <li>RLS Server (not packaged by GPT)</li>
    <li>UTP (not packaged)</li>
    <li>XIO (globus_xio_test)</li>
</ul>

<p>The following C-based packages <b>do not</b> have unit tests available:</p>

<ul>
    <li>Data Conversion</li>
    <li>Duct Common</li>
    <li>Duct Control</li>
    <li>Duct Runtime</li>
    <li>Duroc Bootstrap</li>
    <li>Duroc Common</li>
    <li>Duroc Control</li>
    <li>Duroc Runtime</li>
    <li>GASS Cache</li>
    <li>GASS Cache Program</li>
    <li>GASS Server_EZ</li>
    <li>GASS Transfer</li>
    <li>Gatekeeper</li>
    <li>Globus Core</li>
    <li>GRAM MyJob</li>
    <li>GRAM Reporter</li>
    <li>GRAM RSL Assist</li>
    <li>GRAM RSL</li>
    <li>GridFTP GSI-WuFTPD Server</li>
    <li>GridFTP Server</li>
    <li>GSI Authz GAA Callout</li>
    <li>GSI Authz Null Callout</li>
    <li>GSI Callback</li>
    <li>GSI Cert Utils</li>
    <li>GSI Credential</li>
    <li>GSI GAA Callbacks Generic</li>
    <li>GSI GAA Callbacks PThread</li>
    <li>GSI GAA Core</li>
    <li>GSI GAA Debug</li>
    <li>GSI GAA Plugin</li>
    <li>GSI GAA Util</li>
    <li>GSI GCS Setup</li>
    <li>GSI Gridmap Callout</li>
    <li>GSI GRIM</li>
    <li>GSI GSSAPI Error</li>
    <li>GSI GSS Ext Compat</li>
    <li>GSI NCFTP Client</li>
    <li>GSI OpenSSL Module</li>
    <li>GSI Proxy Core</li>
    <li>GSI Proxy Utils</li>
    <li>GSI SASL</li>
    <li>GSI Simple CA</li>
    <li>GSI Sysconfig</li>
    <li>GSI Trusted CA</li>
    <li>MDS Common</li>
    <li>MDS GRIS</li>
    <li>Replica Catalog</li>
    <li>RLS Client</li>
    <li>User Environment</li>
</ul>

<p>The following packages contain functionality tests:</p>

<p><b>Note:</b> The actual package name is in parenthesis.</p>

<ul>
    <li>GRAM Client Tools (globus_gram_client_tools)</li>
    <li>GASS Copy (globus_gass_copy)</li>
</ul>

<?php include( "../../footer.inc" ); ?>
