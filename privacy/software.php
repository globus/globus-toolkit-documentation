<?php
$title = "Globus: Globus Software Privacy Statement";
$section = "section-1";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="main">
 
    <h1 class="first">Globus Software Privacy Statement</h1>

    <p>Status: CURRENT</p>

<p>The following statement describes data collection, use, and sharing 
practices within the Globus community in regard to use of Globus software, 
including but not limited to the Globus Toolkit. A 
<a href="online-services.php">related statement</a> 
covers practices related to data collection, use, and sharing in regard to 
use of Globus online services (websites, email lists, anonymous FTP 
service).</p>

<h2>Data That Is Collected</h2>

<p>Globus software is largely aimed at enabling distributed computing 
at the community level (Grid computing). Security is a key consideration 
in many user scenarios, so most Globus tools have provisions for 
identifying users and even authenticating user identities. The PKI 
mechanisms used for Grid security typically include some form of user 
identification, which typically includes the user's full name, an 
organization with which he/she is affiliated, and possibly membership in 
other groups or teams. When you use a Globus-based service remotely and 
security is involved, your identifying information is transmitted to and 
verified cryptographically by the remote service. This information may be 
logged on the server that hosts the service. It will certainly be reviewed 
by the service code and used for authorization decisions.</p>

<p>Most Globus-based services log transactions on the system that hosts 
the service. These log files are typically accessible to the 
administrators of the hosting system and the service. These logs typically 
include data on what service was requested, what actions were taken in 
response, and whether the request succeeded or failed and why. Logs may 
include information that can be used to identify the user who requested 
the service.</p>

<p>Many Globus software tools are capable of transmitting usage reports to 
remote listener services. These reports contain anonymous information about 
the use of the tool. The reports typically identify the action(s) that were 
performed iwth the tool (e.g., a file transfer or a job submission) and 
some data about options and settings used for that action. At the current 
time, none of these reports include data that could identify the user, 
although the origin of the report (originating IP address) is known. The 
default configuration for Globus software that has this capability is to 
send usage reports to a global listener service operated by the Globus 
community.</p>

<p>Details on usage statistics are available in the 
<a href="http://www.globus.org/toolkit/docs/">GT Release Manuals</a>
starting with version 4.0.</p>

<p>Add a link to a separate page giving samples of the usage reports from 
each component</p>

<h3>Administrator Choices</h3>

<p>The administrator of the installed/deployed Globus software chooses how 
to configure local logging behavior of the software. The administrator can 
choose to disable all logging or direct logging data to a place where it is 
not stored (e.g., a display console or /dev/null). The administrator can 
typically configure the detail of logs (the types of information included in 
logs). The administrator chooses what to do with the logs once they are 
created: who has access to them, how long they are kept, and whether they 
are permanently archived or not.</p>

<p>The administrator also chooses where usage reports are sent for Globus 
tools that have the usage reporting capability. The administrator may 
disable usage reporting to the Globus community listener service, allow 
usage reporting to the Globus community listener service, enable reporting 
to one or more additional listener services, or any combination of these. 
If the administrator elects to direct usage reports to additional listener 
services, the use of those reports will be in the hands of the operators of 
those services. At this time, the administrator has no choices in regard to 
the content of usage reports, only whether they are sent or not and where 
they are sent.</p>

<h3>User Choices</h3>

<p>Users of Globus software tools choose which Globus software tools to use, 
which remote services they use, and what identifying credentials they use 
with the software. If the tools have usage reporting capabilities, the user 
also chooses how to configure those capabilities as described above in the 
section on administrator choices.</p>

<p>When a user chooses to use a remote service, he/she should be aware that 
that remote service may or may not collect and record data about his/her use 
of the service, including his/her identity infomation if security is enabled. 
Ideally, the remote service will have a privacy statement available to 
describe how data is collected and used and the user can use this statement 
to decide whether to use the service or not, but this may not be the case. 
The user should be aware of whether security is enabled or not and if so, 
what identity credential is being supplied to the remote service.</p>

<p>When a user chooses to use a Globus software tool directly, he/she should 
review the documentation to learn whether the tool has usage reporting 
capabilities or not, and if so, how the tool is configured with regard to 
where usage reports are sent.</p>

<h3>Certificate Authorities</h3>

<p>Grid security often involves Certificate Authorites (CAs) that vet users 
and provide them with X.509 certificates for use with Globus. CAs typically 
collect information about users to whom they issue certificates. The Globus 
community does not operate a CA, nor do we stipulate any particular policies 
for CAs operated by others, so the CA process falls outside the scope of the 
statement. Users should consult the policies of any CAs that provide them 
with credentials for details on how they collect and use their personal 
information.</p>

<h2>How We Use This Data</h2>

<p>The logs generated by Globus-based services are not available to the 
Globus community. Use of service logs is entirely the responsibility of the 
service host. This includes all data used in the mutual authentication 
process for services with security enabled.</p>

<p>Usage reports that are sent to the Globus community listener service are 
stored in a database hosted by the Globus community. This database is secured 
such that only authorized members of the community may access the database. 
Our intention is to archive the data permanently. We routinely generate 
summary reports on aggregate use of Globus software based on this data, and 
share those reports publicly. (See 
<a href="http://incubator.globus.org/metrics/">http://incubator.globus.org/metrics/</a> for 
examples of these reports.) There are two purposes for these reports: (1) to 
inform ourselves and our sponsors about the impact of Globus software on the 
community, and (2) to identify ways that we can improve the software and its 
supporting documentation and training materials.</p>

<p>Members of the Globus community routinely access the Globus community usage 
report archive and use the data to carry out the purposes noted above. They do 
not use the data to monitor use by individuals or specific organizations, and 
in most cases the data itself would not contain enough information to support 
such activities.</p>

<p>In rare instances, data received from a particular organization (if it can 
be demonstrated reliably by the originating IP address) is made available to 
that organization for its own use. This is not common because it requires 
verification of the source of the data and the legitimacy of the request and 
the human labor required is more than the community can typically spare. We 
do not intend to do this often. Service providers who wish to obtain usage 
data from their own services should operate a local listener service and 
configure their services to send reports to a local listener service. 
(<a href="http://dev.globus.org/wiki/Incubator/Metrics#FAQ">Instructions for 
doing this</a> are available from the Globus Metrics incubator project.)</p>

<p>Members of the Globus community may share data from the Globus community 
usage report archive with third parties for the express purpose of helping us 
to analyze the data. These third parties agree to observe all of the terms of 
this privacy statement.</p>

<h2>Changes To This Statement</h2>

<p>We may occasionally revise the Globus Software Privacy Statement. Changes 
to the statement will appear on this page. Please note that our practices with 
respect to data collected and used in connection with Globus software are 
governed by this statement as amended from time to time, and not the privacy 
statement in effect at the time the data was collected.</p>

<h2>How to Contact Us</h2>

<p>The Globus community takes all complaints and concerns regarding privacy 
seriously. Please direct all issues in this area to the email address 
info@globus.org.</p>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
