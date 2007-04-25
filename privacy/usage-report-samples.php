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

<h2>RFT</h2>

<h2>Java WS Container</h2>

<h2>C WS Container</h2>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
