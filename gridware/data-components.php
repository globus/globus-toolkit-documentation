<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/data-components.html

$title = "Grid Ecosystem - Data Management";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<h1 class="first">Components for Grid Data Management</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#mechanisms">Basic Data Management Mechanisms</a></li>
<li><a href="#moving">Components for Moving and Transferring Data</a></li>
<li><a href="#optimizing">Components for Optimizing Data Access</a></li>
<li><a href="#virtualdata">Components for Virtual Data</a></li>
</ol>

<p>The deployment of sensor nets and satellite imaging systems and increases in the resolution of these imaging 
systems has resulted in the capture of an enormous amount of raw data. This data, combined with the increasing 
availability of computing power, leads in turn to mountains of data resulting from analysis. The demand for
data storage and management systems has never been greater. At the same time, it isn't enough to simply store data
and retrieve it: it must be made available to partners in collaborative projects, optimized for speedy access
in different geographic locations, cataloged with descriptive information for easy retrieval, and made available
to computation jobs running on the Grid.
</p>

<p>
Building on the availability of high-capacity storage systems and networks, the Grid community has produced a set
of components for working with and managing data on the Grid.
</p>

<p><strong><a name="mechanisms" class="title">Basic Data Management Mechanisms</a></strong></p>

<p>
Several components in the Grid space are aimed specifically at providing uniform Grid interfaces to various types
of data. 
</p>

<ul>
<li><strong><a href='data/gridftp.php'>GridFTP</a></strong> -  A uniform, secure, high-performance interface to 
file-based storage systems on the Grid</li>
<li><strong><a href='data/dai.php'>OGSA-DAI</a></strong> -  An OGSA interface for accessing XML and relational data stores</li>
<li><strong><a href='data/mcs.php'>Metadata Catalog Service (MCS)</a></strong> -  A stand-alone metadata catalog service with an OGSA service interface</li>
</ul>

<p><strong><a name="moving" class="title">Components for Moving and Transferring Data</a></strong></p>

<p>These tools specialize in moving and transfering data between Grid systems.  Each tool meets specialized application 
or user needs and some also provides interfaces to specialized storage systems.</p>

<ul>
<li><strong><a href='data/gridftp.php'>GridFTP</a></strong> -  In addition to its role as a standard interface to remote
filesystems, GridFTP 
is also a high-performance data transfer protocol optimized for high-bandwidth wide-area networks.</li>
<li><strong><a href="data/rft.php">Reliable File Transfer (RFT) Service</a></strong> - An OGSA service that allows 
clients to request data transfers and then "disconnect" while the transfer takes place</li>
<li><strong><a href='data/scp.php'>GSI-SCP/SFTP</a></strong> - Popular OpenSSH tools that support Grid authentication</li>
<li><strong><a href='data/uberftp.php'>UberFTP</a></strong> - A text-based interactive client for GridFTP</li>
<li><strong><a href='data/stripedftp.php'>Striped GridFTP Services</a></strong> - A very high-performance distributed 
GridFTP service that runs on storage clusters</li>
</ul>

<p><strong><a name="optimizing" class="title">Components for Optimizing Data Access</a></strong></p>

<p>These tools help optimize the use of storage systems for specialized user communities.</p>

<ul>
<li><strong><a href='data/rls.php'>Replica Location Service (RLS)</a></strong> - A distributed mechanism for 
keeping track of the locations of replicated data on a Grid</li>
<li><strong><a href='data/nest.php'>NeST</a></strong> - A "storage applicance" that provides remote access to 
local data when computation jobs are running</li>
</ul>

<p><strong><a name="virtualdata" class="title">Components for Virtual Data</a></strong></p>

<p>Virtual data tools help manage the trade-off between the resources required to store data and the
resources required to (re)produce it.</p>

<ul>
<li><strong><a href='computation/chimera.php'>Chimera</a></strong> - Chimera captures the steps in a data analysis process
 and stores them in a catalog for later reuse.</li>
<li><strong><a href='computation/pegasus.php'>Pegasus</a></strong> - Pegasus converts abstract workflows into concrete workflows and executes them using Chimera and Condor tools.</li>
</ul>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
