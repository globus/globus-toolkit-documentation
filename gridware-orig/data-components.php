<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/data-components.html

$title = "Globus: Grid Software - Data Management Components";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<h1 class="first">Componenets for Grid Data Management</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#mechanisms">Basic Data Management Mechanisms</a></li>
<li><a href="#moving">Components for Moving and Transferring Data</a></li>
<li><a href="#optimizing">Components for Optimizing Data Access</a></li>
<li><a href="#virtualdata">Components for Virtual Data</a></li>
</ol>

<p>[insert 1-2 para overview]</p>

<p><strong><a name="mechanisms" class="title">Basic Data Management Mechanisms</a></strong></p>

<ul>
<li><strong><a href='data/gridftp.php'>GridFTP</a></strong> -  A high-performace, secure, reliable data transfer protocol optimized for high-bandwidth wide-area networks.</li>
<li><strong><a href='data/dai.php'>OGSA-DAI</a></strong> -  An OGSA interface for accessing XML and relational data stores.</li>
<li><strong><a href='data/mcs.php'>MCS</a></strong> -  A stand-alone metadata catalog service with an OGSA service interface.</li>
</ul>

<p><strong><a name="moving" class="title">Components for Moving and Transferring Data</a></strong></p>

<p>These tools are interfaces that meet specialized application or user needs and provide the "last mile" integration to specialized storage systems.</p>

<ul>
<li><strong><a href='data/scp.php'>GSI-SCP/SFTP</a></strong> - An implementation of OpenSSH with support for Grid authentication.</li>
<li><strong><a href='data/uberftp.php'>UberFTP</a></strong> - An interactive client for GridFTP.</li>
<li><strong><a href='data/stripedftp.php'>Striped GridFTP Services</a></strong> - A distributed GridFTP service that runs on storage clusters.</li>
</ul>

<p><strong><a name="optimizing" class="title">Components for Optimizing Data Access</a></strong></p>

<p>These tools help optimize the use of storage systems for specialized user communities.</p>

<ul>
<li><strong><a href='data/rls.php'>RLS</a></strong> - A distributed system for tracking replicated data.</li>
<li><strong><a href='data/nest.php'>NeST</a></strong> - A grid-optimized storage applicance.</li>
</ul>

<p><strong><a name="virtualdata" class="title">Components for Virtual Data</a></strong></p>

<p>Virtual data tools help manage the trade-off between data storage and processing power</p>

<ul>
<li><strong><a href='computation/chimera.php'>Chimera</a></strong> - Chimera captures the steps in a data analysis process and catalogs it.</li>
<li><strong><a href='computation/pegasus.php'>Pegasus</a></strong> - Pegasus converts abstract workflows into concrete workflows using Chimera and Condor.</li>
</ul>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>