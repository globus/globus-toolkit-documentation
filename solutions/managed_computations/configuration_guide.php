<?php
$title = "Grid Solutions - Managed Computations - Configuration";
$section = "section-managed";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!-- <div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">Managed Computation Configuration Guide</h1>

<h3>Introcution</h3>

<p>
This guide is to help reproduce the setup described in the paper named 
<em>The Managed Computation and its Application to EGEE and OSG Requirements</em>. Reading the paper is a prerequisite to understand the following steps.
</P>


<h3>Installing and Configuring Condor</h3>

<p>
Install Condor following the instructions at
<a href="http://www.cs.wisc.edu/condor/" target="_top">http://www.cs.wisc.edu/condor/</a>.
Use at least version 6.7.9.
You want to do a full install, with the same machine being the
central manager, as well as execution host.
</p>

<div class="important" style="margin-left: 0.5in; margin-right: 0.5in;"><h4 class="title">Important</h4>
<p>
We used Condor 6.7.7 plus a patched
<code class="filename">condor_gridmanager</code>. At this point
we have not verified that the fixes have made it into the 6.7.9 version.
</p>
</div>

<p>
Leave the main configuration file alone. Use the .local one to implement
the policy. The example below has a simple policy: when system load goes
above 40, services which adds a load of more than 8 gets suspended. When
load goes below 20, the suspended services are continued again.
</p>

<pre class="programlisting">

######################################################################
##
##  condor_config.local.central.manager
##
##  This is the default local configuration file for your central
##  manager machine.  You should copy this file to the appropriate
##  location and customize it for your needs.  The file is divided
##  into three main parts: Local settings of your own, settings you
##  may want to customize and settings you should probably leave alone
##  (unless you know what you're doing).
##
##  Unless otherwise specified, settings that are commented out show
##  the defaults that are used if you don't define a value.  Settings
##  that are defined here MUST BE DEFINED since they have no default
##  value.
##
######################################################################

######################################################################
######################################################################
##  Local settings 
######################################################################
######################################################################

##  If you want to "lie" to Condor about how many CPUs your machine
##  has, you can use this setting to override Condor's automatic
##  computation.  If you modify this, you must restart the startd for
##  the change to take effect (a simple condor_reconfig will not do).
##  Please read the section on "condor_startd Configuration File
##  Macros" in the Condor Administrators Manual for a further
##  discussion of this setting.  Its use is not recommended.  This
##  must be an integer ("N" isn't a valid setting, that's just used to
##  represent the default).
#NUM_CPUS = N
NUM_CPUS = 10

##  Use this setting to define your own virtual machine types.  This
##  allows you to divide system resources unevenly among your CPUs.
##  You must use a different setting for each different type you
##  define.  The "&lt;N&gt;" in the name of the macro listed below must be
##  an integer from 1 to MAX_VIRTUAL_MACHINE_TYPES (defined above),
##  and you use this number to refer to your type.  There are many
##  different formats these settings can take, so be sure to refer to
##  the section on "Configuring The Startd for SMP Machines" in the
##  Condor Administrator's Manual for full details.  In particular,
##  read the section titled "Defining Virtual Machine Types" to help
##  understand this setting.  If you modify any of these settings, you
##  must restart the condor_start for the change to take effect.
VIRTUAL_MACHINE_TYPE_1 = cpus=10%, ram=10%, swap=10%, disk=10%

##  If you define your own virtual machine types, you must specify how
##  many virtual machines of each type you wish to advertise.  You do
##  this with the setting below, replacing the "&lt;N&gt;" with the
##  corresponding integer you used to define the type above.  You can
##  change the number of a given type being advertised at run-time,
##  with a simple condor_reconfig.
#NUM_VIRTUAL_MACHINES_TYPE_&lt;N&gt; = M
#  For example:
#NUM_VIRTUAL_MACHINES_TYPE_1 = 6
#NUM_VIRTUAL_MACHINES_TYPE_2 = 1
NUM_VIRTUAL_MACHINES_TYPE_1 = 10

# Allow a maximum load of 40, so each VM gets a load share of 4
# considering 10 VMs, the maximum threshold at which to evict a
# job is twice of the allocated load amount 4 x 2 = 8
THRESHOLD       = 8

# Temporary requirement for distributed job submissions
WANT_SUSPEND    = True
WANT_VACATE             = False

# Do not start a job if the current total load on the host
# is 40 (maximum allowed load)
START           = TotalLoadAvg &lt; (( $(THRESHOLD) * $(NUM_CPUS))/2)

# If the total load is above 40 then suspend jobs that are generating
# more than the threshold for suspension (i.e. 8)
SUSPEND = (((CondorLoadAvg/TotalCondorLoadAvg) * TotalLoadAvg) \
                                                &gt; $(THRESHOLD) ) &amp;&amp; \
                   ( TotalLoadAvg &gt; (( $(THRESHOLD) * $(NUM_CPUS))/2))

# continue suspended jobs when the total load comes down below 20
CONTINUE        = TotalLoadAvg &lt; (( $(THRESHOLD) * $(NUM_CPUS))/4)
PREEMPT         = False
KILL            = True
PERIODIC_CHECKPOINT     = False
PREEMPTION_REQUIREMENTS = False
PREEMPTION_RANK = 0




######################################################################
######################################################################
##  Settings you may want to customize: 
##  (it is generally safe to leave these untouched) 
######################################################################
######################################################################

##  Every pool can have a name associated with it.  This should be a
##  short description (20 characters or so) that describes your site.
##  For example, the name for the UW-Madison Computer Science Condor
##  Pool is: "UW-Madison CS" (you don't need to put in the " marks).
COLLECTOR_NAME      = EGEE_TEST

##  By default, every pool sends periodic updates to a central
##  condor_collector at UW-Madison with basic information about the
##  status of your pool.  This includes only the number of total
##  machines, the number of jobs submitted, the number of machines
##  running jobs, the hostname of your central manager, and the
##  "COLLECTOR_NAME" specified above.  These updates help us see how
##  Condor is being used around the world.  By default, they will be
##  sent to condor.cs.wisc.edu.  If you don't want these updates sent
##  from your pool, uncomment the following entry:
#CONDOR_DEVELOPERS_COLLECTOR = NONE

##  Additional reporting (like that described above) can be sent via
##  email.  By default, it is sent to "condor-admin@cs.wisc.edu".  If
##  you wish to disable this reporting, uncomment this entry.
#CONDOR_DEVELOPERS = NONE

##  What daemons do you want to run on your central manager?  
##  NOTE: For it to be the central manager, you need the NEGOTIATOR
##  and COLLECTOR to run.  It's optional whether or not you want to
##  run the schedd (to allow jobs to be submited) and/or the startd
##  (to allow Condor jobs to execute) on your central manager.
DAEMON_LIST   = MASTER, COLLECTOR, NEGOTIATOR, STARTD, SCHEDD

##  Where are the binaries for these daemons?  (Note: MASTER, SCHEDD,
##  and STARTD are already defined in the global config file).
COLLECTOR     = $(SBIN)/condor_collector
NEGOTIATOR    = $(SBIN)/condor_negotiator


</pre>

<p>
Start Condor and add the path to the client tools to your
<b>$PATH</b>
</p>


<h3>Installing and Configuring Globus</h3>

Install Globus 4.0 following the instructions at
<a href="http://www.globus.org/toolkit/docs/4.0/">http://www.globus.org/toolkit/docs/4.0/</a>
</p>

<p>
Make sure you have the Condor client tools in your path and use
the <b>--enable-wsgram-condor</b> option when
invoking <b>./configure</b>
</p>

<p>
Once Globus is installed, you can increase the persistance of
the services you are going to run, by making  the following
additions to the Condor scheduler adapter
(<code class="filename">$GLOBUS_LOCATION/lib/perl/Globus/GRAM/JobManager/Condor.pm</code>):
</p>
<pre class="programlisting">
--- condor.pm.ORIG      2005-06-08 11:50:56.000000000 -0700
+++ condor.pm   2005-06-08 14:14:47.000000000 -0700
@@ -287,6 +289,9 @@
     print SCRIPT_FILE "#Extra attributes specified by client\n";
     print SCRIPT_FILE "$submit_attrs_string\n";

+    print SCRIPT_FILE "periodic_release = (NumSystemHolds &gt;= 3)\n";
+    print SCRIPT_FILE "periodic_remove = (NumSystemHolds &gt; 3)\n";
+
     for (my $i = 0; $i &lt; $description-&gt;count(); $i++) {
         if ($multi_output) {
             print SCRIPT_FILE "Output = " .
</pre>
<p>
Start GridFTP and the WS container.
</p>


<h3>Service Helper Scripts</h3>

To make starting of services easier, it is a good idea for the
resource owner to provide helper scripts for the VO admins to
start the services. The purpose of the scripts is to set up
the environment, configuration, and security context the 
service needs.
</p><p>
The following is an example script to start a Condor schedd
like the example in the paper:
</p><pre class="programlisting">
#!/bin/sh

export TMP_DIR=/tmp/condor.$$
export LOCAL_DIR=$TMP_DIR/local
export CONDOR_CONFIG=$TMP_DIR/condor_config

mkdir -p $LOCAL_DIR
mkdir -p $LOCAL_DIR/log
mkdir -p $LOCAL_DIR/spool
chmod 1777 $LOCAL_DIR/spool

cat /confdir/condor_config \
  | sed "s:\[\[SCHEDD_NAME\]\]:$1:g" \
  | sed "s:\[\[CONDOR_HOST\]\]:$2:g" \
  | sed "s:\[\[JOB_PROXY_FILE\]\]:$X509_USER_PROXY:g" \
  | sed "s:\[\[LOCAL_DIR\]\]:$LOCAL_DIR:g" \
  &gt; $CONDOR_CONFIG

/condordir/sbin/condor_schedd -f

</pre>

<p>
The VO admin can start the service by first delegate a full credential
for the service to use to submit jobs to the backend resource and then
run the helper script with two arguments: a schedd name and the location
of the central manager:
</p>

<pre class="programlisting">
$ globus-credential-delegate -d true -h resource.example.edu delegated.epr

$ globusrun-ws -submit -Jf delegated.epr -S -s -F resource.example.edu -Ft Condor -c /helper-scripts/start-vo-scheduler
</pre>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
