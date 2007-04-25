<?php
$title = "Globus: Sample Usage Reports From Globus Software";
$section = "section-1";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="main">
 
<h1 class="first">Sample Usage Reports From Globus Software</h1>

<p>The following samples illustrate the data that may be sent from software in the
Globus Toolkit 4.0.x.</p>

<h2>GridFTP</h2>

<p>GridFTP servers send a usage report when a file transfer operation is completed.</p>

<table border=0 cellspacing=4 cellpadding=0>
<tr>
<th align="left">Packet contents</th>
<th align="left">Example</th>
</tr>
<tr>
<td>Local server IP address</td>
<td>128.224.32.32</td>
</tr>
<tr>
<td>Local server hostname</td>
<td>gridftp.mydomain.org</td>
</tr>
<tr>
<td>GridFTP code version</td>
<td>2.1 (gcc32dbg, 1122653280-63)</td>
</tr>
<tr>
<td>STOR or RETR operation</td>
<td>STOR</td>
</tr>
<tr>
<td>Transfer start time</td>
<td>2007-04-25 20:55:16.735</td>
</tr>
<tr>
<td>Transfer end time</td>
<td>2007-04-25 20:56:31.45</td>
</tr>
<tr>
<td>Report send time</td>
<td>2007-04-25 21:56:31</td>
</tr>
<tr>
<td>Bytes transfered</td>
<td>262144000</td>
</tr>
<tr>
<td>Number of stripes used for transfer</td>
<td>8</td>
</tr>
<tr>
<td>Number of streams used for transfer</td>
<td>8</td>
</tr>
<tr>
<td>TCP buffer size used for transfer</td>
<td>33554432</td>
</tr>
<tr>
<td>Block size used for transfer</td>
<td>262144</td>
</tr>
<tr>
<td>GridFTP return code</td>
<td>226</td>
</tr>
<tr>
<td>IP version</td>
<td>4</td>
</tr>
</table>

<h2>WS GRAM</h2>

<p>WS GRAM services send a usage report whenever a job completes.</p>

<table border=0 cellspacing=4 cellpadding=0>
<tr>
<th align="left">Packet contents</th>
<th align="left">Example</th>
</tr>
<tr>
<td>Local IP address</td>
<td>128.5.198.23</td>
</tr>
<tr>
<td>Report send time</td>
<td>2006-04-05 13:25:35.272</td>
</tr>
<tr>
<td>Job submission time</td>
<td>2006-04-05 13:25:33.471</td>
</tr>
<tr>
<td>Scheduler type</td>
<td>LSF</td>
</tr>
<tr>
<td>Job credential endpoint used?</td>
<td>false</td>
</tr>
<tr>
<td>File stagein used?</td>
<td>true</td>
</tr>
<tr>
<td>File stageout used?</td>
<td>true</td>
</tr>
<tr>
<td>File cleanup used?</td>
<td>true</td>
</tr>
<tr>
<td>Cleanup hold used?</td>
<td>false</td>
</tr>
<tr>
<td>Job type</td>
<td>SINGLE</td>
</tr>
<tr>
<td>GT2 error code</td>
<td>0</td>
</tr>
<tr>
<td>WS GRAM fault class</td>
<td>0</td>
</tr>
</table>

<h2>RFT</h2>

<p>RFT services send a usage report whenever a file transfer request has completed. 
(Note that an RFT request can involve many individual file transfers.)</p>

<table border=0 cellspacing=4 cellpadding=0>
<tr>
<th align="left">Packet contents</th>
<th align="left">Example</th>
</tr>
<tr>
<td>Report send time</td>
<td>2006-01-17 15:23:30.011</td>
</tr>
<tr>
<td>Local IP address</td>
<td>192.5.198.223</td>
</tr>
<tr>
<td>RFT request type</td>
<td>TRANSFER</td>
</tr>
<tr>
<td>Number of files</td>
<td>4</td>
</tr>
<tr>
<td>Number of bytes</td>
<td>375113310</td>
</tr>
<tr>
<td>Number of resources</td>
<td>0</td>
</tr>
<tr>
<td>Creation time</td>
<td>1137533005210</td>
</tr>
<tr>
<td>Factory start time</td>
<td>1137533010012</td>
</tr>
</table>

<h2>RLS</h2>

<p>RLS services send a usage report at server startup, shutdown, and once every 24 hours 
while the service is running.</p>

<table border=0 cellspacing=4 cellpadding=0>
<tr>
<th align="left">Packet contents</th>
<th align="left">Example</th>
</tr>
<tr>
<td>Report send time</td>
<td>2005-12-18 18:01:38</td>
</tr>
<tr>
<td>Local IP address</td>
<td>192.192.5.223</td>
</tr>
<tr>
<td>Local hostname</td>
<td>rls.mydomain.org</td>
</tr>
<tr>
<td>RLS version</td>
<td>4.0</td>
</tr>
<tr>
<td>RLS service uptime</td>
<td>3267955</td>
</tr>
<tr>
<td>Configured for LRC use?</td>
<td>true</td>
</tr>
<tr>
<td>Configured for RLI use?</td>
<td>true</td>
</tr>
<tr>
<td>Number of LFNs</td>
<td>156</td>
</tr>
<tr>
<td>Number of PFNs</td>
<td>16</td>
</tr>
<tr>
<td>Number of mappings</td>
<td>16</td>
</tr>
<tr>
<td>Number of RLI LFNs</td>
<td>13437</td>
</tr>
<tr>
<td>Number of RLI LRCs</td>
<td>3</td>
</tr>
<tr>
<td>Number of RLI senders</td>
<td>3</td>
</tr>
<tr>
<td>Number of RLI mappings</td>
<td>20345</td>
</tr>
<tr>
<td>Number of threads</td>
<td>3</td>
</tr>
<tr>
<td>Number of connections</td>
<td>48</td>
</tr>
</table>

<h2>Java WS Container</h2>

<h2>C WS Container</h2>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
