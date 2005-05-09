<?php include( "../../header.inc" ); ?>

<h1>Globus Toolkit Java-based Testing Guide</h1>

[ <a href=".">Campaign Definition</a> ]

<h2>Outline</h2>

<ul>

    <li><a href="#overview">Overview</a></li>
    <li><a href="#core">OGSA Core Tests</a></li>
    <li><a href="#program">Program Execution</a></li>
    <li><a href="#information">Information Services</a></li>
    <li><a href="#data">Data Management</a></li>
    <li><a href="#rips">RIPS</a></li>
    <li><a href="#cas">CAS</a></li>
    <li><a href="#client">Client Libraries</a></li>

</ul>

<h2><a name="overview">Overview</a></h2>

<p>The following document outlines how to run the tests for the Java-based
components in the Globus Toolkit.  The testing done for our Java codebase
is mainly based on JUnit.  <a href="http://junit.org">JUnit</a> is the
premier Java unit testing framework which allows you to easily run unit
tests and generate reports on their outcome.</p>

<p>To begin, each component requires the OGSA Core to be built.
We'll first define our environment to build and test core so we can move
on to build and test the higher level services like Program Execution,
Information Services, and Data Management.  Again, the following build of
OGSA Core is <i>required</i> before running any of the other java-based
tests in the toolkit.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="core">OGSA Core Tests</a></h2>

<p>As the basis for all high-level services in GT3, we'll first build and
test the OGSA Core.  To do this we need to define a build environment
from which to run our GT3 tests.  So let's start by defining our root
build directory in an environment variable and checking out the GT3
codebase.</p>

<pre>
$ export BUILD_DIR=/&lt;path&gt;/&lt;to&gt;/&lt;somewhere&gt;/
$ cd $BUILD_DIR
$ export CVSROOT=":pserver:anonymous@cvs.globus.org:/home/globdev/CVS/globus-packages"
$ export CVS_RSH=''
$ cvs co ogsa
</pre>

<p>Since the java-based build-framework in GT3 is based on 'ant', we will
specifiy two build targets to build, run, and generate the HTML reports on
the results of the JUnit tests.  The first ant target will build OGSA Core
and the second one will run the JUnit tests and generate HTML reports.</p>

<pre>
$ cd $BUILD_DIR/ogsa/impl/java
$ ant
$ ant generateTestReport
</pre>

<p><b>Note: </b>You must have junit.jar in your $CLASSPATH prior to running these
tests.</p>

<p><b>Note:</b> To run this test, you will need a valid user certificate, a
valid host certificate, and a valid user proxy.</p>

<p>This will create the directory "ogsa/impl/java/test-reports-html/" and
populate it with a JUnit HTML report of the tests.  Take a look at it now
by opening the index.html file in that directory with a web browser.</p>

<p>This concludes building and generating the test report for OGSA Core.
If you would like to move on to another section, you can, however I'd
also like to point out one more report which might be useful to you when
building core.   It is the PMD report of core which looks at coding
conventions useful to developers.  If you would like to learn how to
generate this, read on.</p>

<h4>PMD</h4>

<p><a href="http://pmd.sourceforge.net/">PMD</a> is a utility which
scans Java source code and looks for potential problems.  To create the
PMD report, you'll  need to have the PMD jar file and related dependancy
jar files in your $CLASSPATH.  For example, the following is an excerpt
from a working ~/.bashrc file.</p>

<pre>
export CLASSPATH=$JAVA_HOME/jre/lib
export CLASSPATH=${CLASSPATH}\
:~/local/junit-3.8.1/junit.jar\
:~/local/pmd-1.3/lib/jaxen-core-1.0-fcs.jar\
:~/local/pmd-1.3/lib/pmd-1.3.jar\
:~/local/pmd-1.3/lib/saxpath-1.0-fcs.jar\
:~/local/pmd-1.3/lib/xercesImpl-2.0.2.jar\
:~/local/pmd-1.3/lib/xmlParserAPIs-2.0.2.jar\
:.
</pre>

<p>Then, to generate the PMD report, run:</p>

<pre>
$ cd ogsa/impl/java
$ ant pmd
</pre>

<p>The file "pmd_report.html" will be created in ogsa/impl/java.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="program">Program Execution</a></h2>

<p>Testing the Program Execution service involves several steps of which
begin with OGSI Core.  We build OGSI Core in the first section, but we
are going to let a script do it for us again so we also get everything
else built that we need for testing Program Execution.  The script we're
going to use it 'make-packages.pl' and we'll call it through a helper
script, aptly named, 'helper.sh'.</p>

<pre>
$ cd packaging
$ mkdir gl
$ export GLOBUS_LOCATION=`pwd`/gl
$ ./helper.sh --anonymous --verbose
$ cd source-output/core-src/impl/java
$ ant buildUnitTest
$ su 
# $GLOBUS_LOCATION/bin/setperms.sh
</pre>

<p><b>Note:</b> The 'helper.sh' command could take close to <i>two</i> hours to
complete as it builds and installs to $GLOBUS_LOCATION all the software
necessary for us to run our tests.</p>

<p>Next you should check that /etc/grid-security is setup with host certs and that
you are in the grid-mapfile.</p>

<p>Then you need to create the file /etc/grid-security/grim-port-type.xml
and add the following to it:</p>

<pre>
&lt;authorized_port_types&gt;
&lt;port_type
username="USERNAME"&gt;http://www.globus.org/namespaces/managed_job/managed_job/ManagedJobPortType&lt;port_type&gt;
&lt;authorized_port_types&gt;
</pre>

<p><b>Note:</b> Replace USERNAME with your username in the text above.</p>

<p>At this point we are ready to start our container and submit a simple
job.</p>

<p>In one window:</p>

<pre>
$ bin/globus-start-container -p 8080
</pre>

<p>In another window:</p>

<pre>
$ export GLOBUS_LOCATION=packaging/gl
$ . $GLOBUS_LOCATION/etc/globus-user-env.sh
$ grid-proxy-init
$ cd $GLOBUS_LOCATION
$ bin/managed-job-globusrun -factory \
    http://localhost:8080/ogsa/services/base/gram/MasterForkManagedJobFactoryService \
    -file etc/test.xml
</pre>

<p>You should see the following output after you submit a job:</p>

<pre>
WAITING FOR JOB TO FINISH
========== Status Notification ==========
Job Status: Active
=========================================
========== Status Notification ==========
Job Status: Done
=========================================
DESTROYING SERVICE
SERVICE DESTROYED
</pre>

<p>In the second window, we now need to run the test jobs which come
with the Managed Job Service.  We do this here:</p>

<pre>
$ cd $BUILD_DIR/program_execution/mjs
$ ./test/TESTS.pl &lt;host&gt; 8080 &
$ tail -f test/mjs/TEST.log
</pre>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="data">Data Management</a></h2>

<h3>Reliable File Transfer</h3>

<p>The Reliable File Transfer (RFT) program contains JUnit tests which
we will run below.  OGSA Core is required to run these tests which is
covered in the first section.</p>

<p>If you are interested in testing RFT from a
user-perspective, you can read how to do so on the <a
href="http://www-unix.globus.org/toolkit/reliable_transfer.html">RFT
homepage</a>.  Currently, there are no high-level tests which can be
run automatically against an RFT installation.</p>

<pre>
$ cd $BUILD_DIR/data_management/multirft
$ ant test
</pre>

<p>The JUnit XML output can be found in:</p>

<pre>
$BUILD_DIR/data_management/multirft/test-reports/
</pre>

<p>Currently, HTML output is not generated.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="information">Information Services</a></h2>

<p>The latest version of Information Services contains JUnit tests which
test approximately one third of the actual functionality.  During the
period between 3.2 beta and 3.2 final, more tests are planned on being
added.</p>

<p>The RIPS subcomponent is detailed below.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="rips">RIPS</a></h2>

<p>Currently, no JUnit tests exist for RIPS.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="cas">CAS</a></h2>

<p>Information on installing and testing CAS can be found in the wonderful
CAS Install Guide:</p>

<ul>
    <li><a href="http://www-unix.globus.org/Security/CAS/GT3/docs/installGuide.html">CAS Install Guide</a></li>
</ul>

<p>Supplementary documentation is also provided:</p>

<ul>
    <li><a href="http://www-unix.globus.org/Security/CAS/GT3/docs/userGuide.html">CAS User Guide</a></li>
    <li><a href="http://www-unix.globus.org/Security/CAS/GT3/docs/adminGuide.html">CAS Admin Guide</a></li>
</ul>

<p>The CAS tests are based on JUnit and need extensive setting up before
running them.  The install guide documents everything very thoroughly
making it easy for any user to run the tests.  As of this writing, none
of the tests are automated due to the setup involved.  In the future, that
can hopefully be solved with some serious scripting to automate it.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<h2><a name="client">Client Libraries</a></h2>

<p>Currently, there aren't any tests for the ogsa_client libraries.</p>

<div style="font-size: x-small;">[ <a href="#top">top</a> ]</div>

<?php include( "../../footer.inc" ); ?>
