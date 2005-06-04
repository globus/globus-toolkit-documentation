<html>
<head>
<link rel=Stylesheet href=stylesheet.css><style><!--table {}--></style>

<title> 4.0.0 GRAM Throughput Statistics </title>
</head>
<body>

<center><h3> 4.0.0 GRAM Throughput Statistics </h3></center>

<h4>Test Machine Specifications</h4>
<p>
All tests were done on ruly.mcs.anl.gov, running Red Hat Linux release 7.3 with
two Intel(R) Xeon(TM) CPUs at 2.20 GHz, and sporting 2 GB of RAM.
</p>

<h4>Test Description</h4>
<p>
Results were obtained by sustaining a job load N from 1 to 128 by 2n
(1,2,4,...,128) for 15 minutes. The number of client threads M were also varied
from 1 to 128 by 2n giving actual sustained loads of N * M. For example, if
4 client threads (M) are started with a job load value of 64 (N), then in total
there would be in general 4 * 64 = 256 jobs being operated on by the service
through the duration of the test. The results below show <b>submission rates in
jobs per minute</b>.
</p>

<p>
The first set of results are for simple sleep-for-five-seconds jobs with no
delegation done.  The second set are for simple jobs that share a delegated
credential.  The third set are for jobs which stage in the echo tool to a new
job directory, run the echo command with boring output, and then stage out their
stdout and stderr files (all using a shared credential to contact RFT).
The cells labeled "<b>Serv. OOM</b>" and "<b>Cli. OOM</b>" are tests which failed
to complete because of a java.lang.OutOfMemoryError on the service and client
respectively with the default heap size.  The cells labeled "<b>N/A</b>" are tests
which were not attempted because of assumed failure.
</p>

<p>
<?php include_once("WS_GRAM_Throughput_No_Delegation_Secure_Transport_Frag.html"); ?>
</p>

<p>
<?php include_once("WS_GRAM_Throughput_Shared_Delegation_Secure_Transport_Frag.html"); ?>
</p>

<p>
<?php include_once("WS_GRAM_Throughput_Staging_Secure_Transport_Frag.html"); ?>
</p>

<hr/>

</body>
</html>
