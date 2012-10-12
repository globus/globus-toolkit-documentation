<?php



$title = "Globus: Publications - Research Papers";



$section = "section-2";

include_once( "../../include/local.inc" );

include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<!--

<div id="left">

<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>

</div>

-->



<div id="main">

<!-- content STARTS here -->



<h1>Research Papers from Globus Alliance Members</h1>



<p>The Globus Alliance has produced a broad collection of papers

on the Grid, distributed computing, applied computer science, and 

related topics.  Papers are generally available in Adobe Acrobat 

PDF format, for which a 

<a href="http://www.adobe.com/prodindex/acrobat/readstep.html">free reader</a> 

is available, or in <a href="http://www.gzip.org">GNU zipped</a> postscript 

(PS). 



<p><b>Members of the Globus Alliance should consult these <a href="bibliography.php">guidelines</a> for 

submitting bibliographic citations</a>.</b></p>



<p>Papers are listed in reverse chronological order within several subject 

    areas.</p>



    <ol>

      <li><a href="#Overview Papers">Overviews</a> of the Globus 

      Alliance and the Grid.</li>

      <li><a href="#Web Services">Web Services</a> (OGSA, OGSI, WSRF, etc.)</li>

      <li><a href="#Data Grid Components">Data Grid components</a>

        (GridFTP, RFT, replication, virtual data, etc.)</li>

      <li><a href="#Resource Management Components">Resource

        Management Components</a> (GRAM, workspaces, virtual machines, QoS, etc.)</li>

      <li><a href="#Information Services Components">Information

        Services Components</a> (MDS, monitoring, index services, etc.)</li>

      <li><a href="#Security Components">Security Components</a>

        (GSI, CAS, etc.)</li>

      <li><a href="#Viz">Visualization</font></a></li>

      <li><a href="#Java Cog Kit">Java CoG Kit</a></li>

      <li><a href="#MPICH-G">MPICH-G2</a></li>

      <li><a href="#Nexus Section">Nexus</a></li>

      <li><a href="#Applications">Applications</a></li>

      <li><a href="#Other Globus-Related Research">Other Globus-related research</a></li>

    </ol>



	<h2><a name="Overview Papers">Overview Papers</a></h2>



        <p><font size="2"><strong><a name="gt4overview">Globus Toolkit Version 4: 

        Software for Service-Oriented Systems</a></strong>. I. Foster. 

        <em>IFIP International Conference on Network and Parallel Computing</em>,

        Springer-Verlag LNCS 3779, pp 2-13, 2006.<br>

        This paper is an excellent introduction to the Globus Toolkit 4.0 and
        its use. (updated for 2006) <br>

        [<a href="#gt4overview">Citation</a>, 

  <a href="papers/IFIP-2006.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="anatomy">The Anatomy of the Grid: Enabling Scalable Virtual Organizations</a></strong>. 

	I. Foster, C. Kesselman, S. Tuecke. 

	<em>International J. Supercomputer Applications</em>, 15(3), 2001.<br>

	Defines Grid computing and the associated research field, proposes a Grid architecture,

	and discusses the relationships between Grid technologies and other contemporary technologies.<br>

	[<a href="#anatomy">Citation</a>, 

	<a href="papers/anatomy.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="science05">Service-Oriented Science</a></b>.  

        I. Foster. <em>Science</em>, vol. 308, May 6, 2005.<br>

	[<a href="#science05">Citation</a>, 

         <a href="http://www-fp.mcs.anl.gov/~foster/science-2005.htm">HTML</a>]</font></p>



	<p><font size="2"><b><a name="grid_definition">What is the Grid? A Three

    Point Checklist</a></b>.  I. Foster, GRIDToday, July 20, 2002.&nbsp;<br>

    [<a href="http://www-fp.mcs.anl.gov/~foster/Articles/WhatIsTheGrid.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="physics02">The Grid: A New Infrastructure for

    21st Century Science</a></b>.  I. Foster. <em>Physics Today</em>,

    55(2):42-47, 2002.<br>

	[<a href="#physics02">Citation</a>]</font></p>



	<p><font size="2"><b>Grids: Top Ten Questions</b>. J.M. Schopf and B.

    Nitzberg, <i>Scientific Programming, special issue on Grid Computing</i>,

    10(2):103 - 111, August 2002.&nbsp;<br>

    [<a href="papers/topten.final.pdf">PDF</a>]</font></p>



      <p><font size="2"><strong><a name="DG1">The Data Grid: Towards an Architecture for the Distributed Management and Analysis of Large Scientific Datasets</a></strong>.&nbsp;

    A. Chervenak, I. Foster, C. Kesselman, C. Salisbury, S. Tuecke. 

    <em>Journal of Network and Computer Applications</em>, 23:187-200, 2001

    (based on conference publication from Proceedings of NetStore Conference

    1999).<br>

    [<a href="#DG1">Citation</a>, 

    <a href="papers/JNCApaper.ps">PS</a>, 

    <a href="papers/JNCApaper.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="chapter2">Computational Grids.</a></strong>, 

    I. Foster, C. Kesselman. <em>Chapter 2 of "The Grid: 

    Blueprint for a New Computing Infrastructure"</em>, Morgan-Kaufman, 1999.<br>

    [<a href="#chapter2">Citation</a>, <a href="papers/chapter2.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="GlobusHCW98">The Globus Project: A Status Report</a></strong>. 

    I. Foster, C. Kesselman. 

    <em>Proc. IPPS/SPDP '98 Heterogeneous Computing Workshop</em>, pp. 4-18, 1998.<br>

    Describes the status of the Globus system as of early 1998.<br>

    [<a href="#GlobusHCW98">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/globus-hcw98.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/globus-hcw98.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="Globus">Globus: A Metacomputing Infrastructure Toolkit</a></strong>. 

    I. Foster, C. Kesselman. 

    <em>Intl J. Supercomputer Applications</em>, 11(2):115-128, 1997.

    <br>

    Provides an overview of the Globus project and toolkit.<br>

    [<a href="#Globus">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/globus.ps.gz">PS</a>,

    <a href="http://www.globus.org/ftppub/globus/papers/globus.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="isoftp">Software Infrastructure for the I-WAY High Performance Distributed Computing Experiment</a></strong>. 

    I. Foster, J. Geisler, W. Nickless, W. Smith, S. Tuecke. 

    <em>Proc. 5th IEEE Symposium on High Performance Distributed Computing</em>, pp. 562-571, 1997.<br>

    The I-WAY software infrastructure was a Globus precursor.<br>

    [<a href="#isoftp">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/isoft.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/isoft.pdf">PDF</a>]</font></p>

    

    

      <h2><a name="Web Services">Web Services (OGSA, OGSI, WSRF, etc.)</a></h2>



      <p><font size="2"><b><a name="HAND">HAND: Highly Available Dynamic Deployment 

         Infrastructure for Globus Toolkit 4</a></b>.  L. Qi, H. Jin, I. Foster, J. Gawor. 

         Submitted for Publication, 2006.<br>

      [<a href="#HAND">Citation</a>,

       <a href="papers/HAND-Submitted.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="wsrf-eval">State and Events for Web Services: A 

           Comparison of Five WS-Resource Framework and WS-Notification  

           Implementations</a></b>. M. Humphrey, G. Wasson, K. Jackson, J. Boverhof, 

           M. Rodriguez, Joe Bester, J. Gawor, S. Lang, I. Foster, S. Meder, S. Pickles, 

           and M. McKeown, 4th IEEE International Symposium on High Performance 

           Distributed Computing (HPDC-14), Research Triangle Park, NC, 24-27 July 2005.<br>

	[<a href="#wsrf-eval">Citation</a>, 

         <a href="papers/WSRFComparison2005-3.pdf">PDF</a>]</font></p>



      <p><font size="2"><b><a name="OGSA-GGF">The Open Grid Services Architecture, Version 1.0</a></b>. 

      I. Foster, H. Kishimoto, A. Savva, D. Berry, A. Djaoui, A. Grimshaw, B. Horn,

      F. Maciel, F. Siebenlist, R. Subramaniam, J. Treadwell, J. Von Reich.

      Informational Document, Global Grid Forum (GGF), January 29, 2005.<br>

      This document provides information to the community regarding the specification 

      of the Open Grid Services Architecture (OGSA). It does not define any standards 

      or technical recommendations.<br>

      [<a href="#OGSA-GGF">Citation</a>,

       <a href="http://www.gridforum.org/documents/GWD-I-E/GFD-I.030.pdf">PDF</a>]</font></p>



      <p><font size="2"><b><a name="OGSA-UseCases">Open Grid Services Architecture Use Cases</a></b>.

      I. Foster, D. Gannon, H. Kishimoto, J. Von Reich.

      Information Document, Global Grid Forum (GGF), October 28, 2004.<br>

      [<a href="#OGSA-UseCases">Citation</a>,

       <a href="http://www.gridforum.org/documents/GWD-I-E/GFD-I.029v2.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="MSRWS">Modeling Stateful Resources with Web Services v. 1.1</a></b>.  I.

    Foster (ed), J. Frey (ed), S. Graham (ed), S. Tuecke (ed), K. Czajkowski, D.

    Ferguson, F. Leymann, M. Nally, I. Sedukhin, D. Snelling, T. Storey, W.

    Vambenepe, S. Weerawarana, March 5, 2004.<br>

    [<a href="#MSRWS">Citation</a>,

     <a href="http://www-106.ibm.com/developerworks/library/ws-resource/ws-modelingresources.pdf">PDF</a>]</font></p>



      <p><font size="2"><b><a name="WSRF-Framework">The WS-Resource Framework</a></b>.

      K. Czajkowski, D. F. Ferguson, I. Foster, J. Frey, S. Graham, I. Sedukhin, 

      D. Snelling, S. Tuecke, W. Vambenepe. March 5, 2004.<br>

      [<a href="#WSRF-Framework">Citation</a>,

       <a href="http://www.globus.org/wsrf/specs/ws-wsrf.pdf">PDF</a>]</font></p>



      <p><font size="2"><b><a name="#OGSI-to-WSRF">From Open Grid Services Infrastructure to WS-Resource

         Framework: Refactoring & Evolution</a></b>.

      K. Czajkowski, D. Ferguson, I. Foster, J. Frey, S. Graham, T. Maguire, 

      D. Snelling, S. Tuecke. March 5, 2004.<br>

      [<a href="#OGSI-to-WSRF">Citation</a>,

       <a href="http://www.globus.org/wsrf/specs/ogsi_to_wsrf_1.0.pdf">PDF</a>]</font></p>



      <p><font size="2"><b><a name="WSN-DeveloperWorks">Publish-Subscribe Notification for Web 

         services</a></b>.

      S. Graham (ed), P. Niblett (ed), D. Chappell, A. Lewis, N. Nagaratnam,

      J. Parikh, S. Patil, S. Samdarshi, I. Sedukhin, D. Snelling, S. Tuecke,

      W. Vambenepe, B. Weihl, March 5, 2004.<br>

      [<a name="#WSN-DeveloperWorks">Citation</a>,

       <a href="http://www-128.ibm.com/developerworks/library/ws-pubsub/WS-PubSub.pdf">PDF</a>]</font></p>



      <p><font size="2"><b><a name="GSSpec">Open Grid Services Infrastructure (OGSI)

      Version 1.0</a></b>.  S. Tuecke, K. Czajkowski, I. Foster, 

    J. Frey, S. Graham, C. Kesselman, T. Maguire, T. Sandholm, P. Vanderbilt, D.

      Snelling; Global Grid Forum Draft Recommendation, 6/27/2003.<br>

    [<a href="#GSSpec">Citation</a>, <a href="papers/Final_OGSI_Specification_V1.0.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="IEEE-CS-2">Grid Services for Distributed System Integration</a></b>.  I. Foster, C. Kesselman,

	J. Nick, S. Tuecke.

	<em>Computer</em>, 35(6), 2002.<br>

	[<a href="#IEEE-CS-2">Citation</a>, <a href="papers/ieee-cs-2.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="OGSA">The Physiology of the Grid: An Open Grid Services Architecture for Distributed Systems 

	Integration</a></b>.  I. Foster, C. Kesselman, J. Nick, S. Tuecke, Open Grid

    Service Infrastructure WG, Global Grid Forum, June 22, 2002. (extended

    version of <a href="#IEEE-CS-2">Grid Services for Distributed System

    Integration</a>)<br>

	[<a href="#OGSA">Citation</a>, <a href="papers/ogsa.pdf">PDF</a>]</font></p>





      <h2><a name="Data Grid Components">Data Grid Components (GridFTP, DAI, Replica,

      Virtual Data System, etc.)</a></h2>
      
      
      <p><font size="2"><strong><a name="gridftpSecurity">Communicating Security Assertions over the GridFTP Control Channel</a></strong>. 
      
       Rajkumar Kettimuthu, Liu Wantao, Frank Siebenlist and Ian Foster. 
      
      <em>4th IEEE International Conference on e-Science</em>, December 2008<br>
      
      [<a href="#gridftpSecurity">Citation</a>, 
      
      <a href="papers/GridFTP_Security_Assertions.pdf">PDF</a>]</font></p>
      
      
      <p><font size="2"><strong><a name="overlays">Using Overlays For Efficient Data Transfer Over Shared Wide-Area Networks</a></strong>. 
      
       Gaurav Khanna, Umit Catalyurek, Tahsin Kurc, Rajkumar Kettimuthu, P. Sadayappan, Ian Foster and Joel Saltz. 
      
      <em>Proceedings of the 2008 ACM/IEEE conference on Supercomputing (SC 2008)</em>, November 2008<br>
      
      [<a href="#overlays">Citation</a>, 
      
      <a href="papers/overlay_data_transfer_wan.pdf">PDF</a>]</font></p>
      
      
      <p><font size="2"><strong><a name="transportXIO">A GridFTP Transport Driver for Globus XIO</a></strong>. 
      
       Rajkumar Kettimuthu, Liu Wantao, Joseph Link and John Bresnahan. 
      
      <em>Proceedings of the 2008 International Conference on Parallel and Distributed Processing Techniques and Applications (PDPTA 2008)</em>, July 2008<br>
      
      [<a href="#transportXIO">Citation</a>, 
      
      <a href="papers/gridftp_transport_driver_xio.pdf">PDF</a>]</font></p>
      
      <p><font size="2"><strong><a name="dynamicGridftp">A Dynamic Scheduling Approach for Coordinated Wide-Area Data Transfers using GridFTP</a></strong>. 
      
       Gaurav Khanna, Umit Catalyurek, Tahsin Kurc, Rajkumar Kettimuthu, P. Sadayappan and Joel Saltz. 
      
      <em>Proceedings of the 22nd IEEE International Parallel and Distributed Processing Symposium (IPDPS 2008)</em>, April 2008<br>
      
      [<a href="#dynamicGridftp">Citation</a>, 
      
      <a href="papers/dynamic_scheduling_gridftp.pdf">PDF</a>]</font></p>
      
      <p><font size="2"><strong><a name="multihop">Multi-Hop Path Splitting and Multi-Pathing Optimizations for Data Transfers over Shared Wide-Area Networks using GridFTP</a></strong>. 
      
       Gaurav Khanna, Umit Catalyurek, Tahsin Kurc, Rajkumar Kettimuthu, P. Sadayappan, Joel Saltz and Ian Foster. 
      
      <em>Proceedings of the 17th IEEE International Symposium on High-Performance Distributed Computing (HPDC 2008)</em>, June 2008.<br>
      
      [<a href="#multihop">Citation</a>, 
      
      <a href="papers/multihop.pdf">PDF</a>]</font></p>
      
      
      <p><font size="2"><strong><a name="posixGridftp">A POSIX-like Client Interface for GridFTP</a></strong>. 
      
       Rajkumar Kettimuthu, Liu Wantao, John Bresnahan and Joseph Link. 
      
      <em>Proceedings of the 2008 TeraGrid Conference</em>, June 2008.<br>
      
      [<a href="#posixGridftp">Citation</a>, 
      
      <a href="papers/GridFTP_TG08_abstract.pdf">PDF</a>]</font></p>
      
      
      
      
      
      
      <p><font size="2"><strong><a name="gridnets07">Globus GridFTP: What's New in 2007 (Invited Paper)</a></strong>. 
      
      John Bresnahan, Michael Link, Gaurav Khanna, Zulfikar Imani, Rajkumar Kettimuthu and Ian Foster. 
      
      <em>Proceedings of the First International Conference on Networks for Grid Applications (GridNets 2007)</em>, Oct, 2007<br>
      
      [<a href="#gridnets07">Citation</a>, 
      
      <a href="papers/gridnets07.pdf">PDF</a>]</font></p>
      
      <p><font size="2"><strong><a name="pipelining">GridFTP Pipelining</a></strong>. 
      
      John Bresnahan, Michael Link, Rajkumar Kettimuthu, Dan Fraser and Ian Foster. 
      
      <em>Proceedings of the 2007 TeraGrid Conference</em>, June, 2007<br>
      
      [<a href="#pipelining">Citation</a>, 
      
      <a href="papers/Pipelining.pdf">PDF</a>]</font></p>
      
      
      <p><font size="2"><strong><a name="gridftp_infocom07">Harnessing Multicore Processors for High Speed Secure Transfer</a></strong>. 
      
      John Bresnahan, Rajkumar Kettimuthu, Michael Link and Ian Foster. 
      
      <em>Proceedings of the 26th IEEE Infocom's High-Speed Networks Workshop</em>, May, 2007<br>
      
      [<a href="#gridftp_infocom07">Citation</a>, 
      
      <a href="papers/gridftp_infocom07.pdf">PDF</a>]</font></p>

      
      <p><font size="2"><strong><a name="GridCopy">GridCopy: Moving Data Fast on the Grid</a></strong>. 
      
      Rajkumar Kettimuthu, William Allcock, Lee Liming, John-Paul Navarro and Ian Foster. 
      
      <em>Proceedings of the Fourth High Performance Grid Computing Workshop to be held in conjunction with International Parallel and Distributed Processing Symposium (IPDPS 2007)</em>, March, 2007<br>
      
      [<a href="#GridCopy">Citation</a>, 
      
      <a href="papers/GridCopy.pdf">PDF</a>]</font></p>
      
     
	  
	  <p><font size="2"><strong><a name="foam">Automating Climate Science: Large Ensemble Simulations on the TeraGrid with the GriPhyN Virtual Data System</a></strong>.&nbsp;

    V. Nefedova, R. Jacob, I. Foster, Z. Liu, Y. Liu, E. Deelman, G Mehta, M. Su, K. Vahi. 

    <em>Presented at the eScience Conference in Amsterdam</em>, December, 2006<br>

    [<a href="#foam">Citation</a>, 

    <a href="papers/Foam-submit.pdf">PDF</a>]</font></p>
    
      <p><font size="2"><strong><a name="chervenakGrid2005">Wide Area Data Replication 

       for Scientific Collaborations</a></strong>.

       A. Chervenak, R. Schuler, C. Kesselman, S. Koranda, B. Moe.

       <i>Proceedings of 6th IEEE/ACM International Workshop on Grid Computing (Grid2005)</i>,

       November 2005.<br>

       [<a href="#chervenakGrid2005">Citaton</a>,

        <a href="papers/chervenakGrid2005.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong>The Globus Striped GridFTP Framework and Server</strong>.

    W. Allcock, J.  Bresnahan, R. Kettimuthu, M. Link, C. Dumitrescu, I. Raicu, 

    I. Foster.  <i>Proceedings of Super Computing 2005 (SC05)</i>, November 2005.<br>

     [<a href="papers/gridftp_final.pdf">PDF</a>]</font></p>

     

    <p><font size="2"><strong><a name="XIO-HPGC05">The Globus eXtensible Input/Output System (XIO): 

       A protocol independent IO system for the Grid</a></strong>.

    W. Allcock, J. Bresnahan, R.  Kettimuthu, J. Link. 

    <i>Proceedings of the Joint Workshop on High-Performance Grid Computing and 

       High-Level Parallel Programming Models</i> held in conjunction with International 

       Parallel and Distributed Processing Symposium (IPDPS 2005), April 2005.<br>

    [<a href="#XIO-HPGC05">Citation</a>,

     <a href="papers/hpgc05.pdf">PDF</a>]</font></p>
	 
	 
	 <p><font size="2"><strong><a name="XIOPerf">XIOPerf: A Tool for Evaluating Network Protocols</a></strong>.

    J. Bresnahan, R.  Kettimuthu, Ian Foster. <br>

    [<a href="#XIOPerf">Citation</a>,

     <a href="papers/xioperf.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong>Introduction to OGSA-DAI Services</strong>.

    K. Karasavvas, M. Antonioletti, M.P. Atkinson, N.P. Chue Hong, T. Sugden, A.C.

    Hume, M. Jackson, A. Krause, C. Palansuriya.

    <em>To appear in Lecture Notes in Computer Science, 3458</em>.</font></p>



    <p><font size="2"><strong>The Design and Implementation of Grid Database Services

    in OGSA-DAI</strong>.

    M. Antonioletti, M.P. Atkinson, R. Baxter, A. Borley, N.P. Chue Hong, B.

    Collins, N. Hardman, A. Hume, A. Knox, M. Jackson, A. Krause, S. Laws, J.

    Magowan, N.W. Paton, D. Pearson, T. Sugden, P. Watson, and M. Westhead.

    <em>To appear in Concurrency and Computation: Practice and Experience</em>.</font></p>



	<p><font size="2"><strong>A Peer-to-Peer Replica Location Service Based on A

    Distributed Hash Table</strong>. M. Cai, A. Chervenak, M. Frank. 

    <em><i>Proceedings of the SC2004 Conference</i> (SC2004)</em>, November 2004.

	<br>[<a href="papers/sc2004v15.pdf">PDF</a>]</font></p>

    

<p><font size="2"><strong>OGSA-DAI Status Report and Future Directions</strong>. 

M. Antonioletti, M.P. Atkinson, R. Baxter, A. Borley, N.P. Chue Hong, B.Collins,

J. Davies, D. Fitzgerald, N. Hardman, A.C. Hume, M. Jackson, A. Krause, S. Laws,

N. W. Paton, T. Sugden, P. Watson, M. Westhead, and D. Vyvyan. 

<em>Proceedings of the UK e-Science All Hands Meeting 2004</em>, September 2004.

<br>[<a href="http://www.allhands.org.uk/2004/proceedings/papers/261.pdf">PDF</a>]</font></p>



<p><font size="2"><strong>OGSA-DAI Usage Scenarios and Behaviour: Determining good

practice</strong>. 

M. Antonioletti, M.P. Atkinson, A. Borley, N.P. Chue Hong, B.Collins, J. Davies,

N. Hardman, A.C. Hume, M. Jackson, A. Krause, S. Laws, N. W. Paton, K. Qi,  T.

Sugden, D. Vyvyan, P. Watson, and M. Westhead. 

<em>Proceedings of the UK e-Science All Hands Meeting 2004</em>, September 2004.

<br>[<a href="http://www.allhands.org.uk/2004/proceedings/papers/266.pdf">PDF</a>]</font></p>



<p>

<font size="2"><strong>Protecting Application Developers - A Client Toolkit for

OGSA-DAI</strong>. 

T. Sugden, A.C. Hume, M. Jackson, M. Antonioletti, N.P. Chue Hong, A. Krause,

and M. Westhead. 

<em>Proceedings of the UK e-Science All Hands Meeting 2004</em>, September 2004.

<br>[<a href="http://www.allhands.org.uk/2004/proceedings/papers/143.pdf">PDF</a>]

</font></p>



<p>

<font size="2"><strong>Performance Analysis of the OGSA-DAI Software</strong>. 

M. Jackson, M. Antonioletti, N.P. Chue Hong, A.C. Hume, A. Krause, T. Sugden,

and M. Westhead. 

<em>Proceedings of the UK e-Science All Hands Meeting 2004</em>, September 2004.

<br>[<a href="http://www.allhands.org.uk/2004/proceedings/papers/142.pdf">PDF</a>]

</font></p>



	<p><font size="2"><strong>Grid-Based Metadata Services</strong>. E. Deelman,

    G. Singh, M.P. Atkinson, A. Chervenak, N.P. Chue Hong, C. Kesselman, S.

    Patil, L. Pearlman, and M. Su. <em>16th International Conference on

    Scientific and Statistical Database Management (SSDBM04)</em>, June 2004.

	<br>[<a href="papers/deelman3.pdf">PDF</a>]</font></p>

    

    

      <p><font size="2"><b>Artemis: Integrating Scientific Data on the Grid</b>.

      R. Tuchinda, S. Thakkar, Y. Gil, E. Deelman. <em>Proceedings of the

      Sixteenth Innovative Applications of Artificial Intelligence</em>, July 2004.<br>

    [<a href="http://www.isi.edu/~deelman/artemis_iaai04.pdf">PDF</a>]</font></p>



    

      <p><font size="2"><b>Reliable Data Transport: A Critical Service for the

    Grid</b>. W.E. Allcock, I. Foster, R. Madduri. <em>Building Service Based

    Grids Workshop, Global Grid Forum 11</em>, June 2004.<br>

    [<a href="papers/GGF11_RFTV-Final.pdf">PDF</a>]</font></p>



	<p><font size="2"><b>Performance and Scalability of a Replica Location

    Service</b>. A.L. Chervenak, N. Palavalli, S. Bharathi, C. Kesselman, R.

    Schwartzkopf. <em>Proceedings of the International IEEE Symposium on High Performance

    Distributed Computing (HPDC-13)</em>, June 2004.<br>

    [<a href="papers/chervenakhpdc13.pdf">PDF</a>]</font></p>



<p><font size="2"><strong>OGSA-DAI: Two years on</strong>. 

M. Antonioletti, M.P. Atkinson, R. Baxter, A. Borley, N.P. Chue Hong, B.Collins,

J. Davies, N. Hardman, G. Hicken, A.C. Hume, M. Jackson, A. Krause, S. Laws, J.

Magowan, J. Nowell, N. W. Paton, T. Sugden, P. Watson, and M. Westhead. 

<em>The Future of Grid Data Environments Workshop, GGF10</em>, March 2004.

<br>[<a

href="http://www.ogsadai.org.uk/docs/OtherDocs/15-Antonioletti-OGSA-DAI-DA-WS-final.pdf">PDF</a>]

</font></p>





	<p><font size="2"><b>Artificial Intelligence and Grids Workflow Planning and

    Beyond</b>. Y. Gil, E. Deelman, C. Kesselman, H. Tangmurarunkit. <em>IEEE

    Intelligent Systems</em>, January 2004.<br>

    [<a href="http://www.isi.edu/~deelman/ieee_is04.pdf">PDF</a>]</font></p>



	<p><font size="2"><b>Pegasus Mapping Scientific Workflows onto the Grid</b>.

    E. Deelman, J. Blythe, Y. Gil, C. Kesselman, G. Mehta, S. Patil, M. Su, K.

    Cahi, M. Livny. <em>Across Grids Conference</em>, 2004.<br>

    [<a href="http://pegasus.isi.edu/Pegasus/Pegasus_final.pdf">PDF</a>]</font></p>



	<p><font size="2"><b>Pegasus and the Pulsar Search: From Metadata to

    Execution on the Grid</b>. E. Deelman, J. Blythe, Y. Gil, C. Kesselman, S.

    Koranda, A. Lazzarini, G. Mehta, M. Papa, K. Vahi. <em>Applications Grid

    Workshop, PPAM 2003</em>, 2003.<br>

    [<a href="http://www.isi.edu/~deelman/agw_ppam2003.pdf">PDF</a>]</font></p>



	<p><font size="2"><b>Mapping Abstract Complex Workflows onto Grid

    Environments</b>. E. Deelman, J. Blythe, Y. Gil, C. Kesselman, G. Mehta, K.

    Vahi, K. Blackburn, A. Lazzarini, A. Arbree, R. Cavanaugh, S. Koranda. <em>Journal

    of Grid Computing</em>,<i> </i>1(1), 25-39<i>,</i> 2003.<br>

    [<a href="http://www.isi.edu/~deelman/Pegasus/jogc.pdf">PDF</a>]</font></p>



	<p><font size="2"><b>Transparent Grid Computing: A Knowledge-Based Approach</b>.

    J. Blythe, E. Deelman, Y. Gil, C. Kesselman. <em>IA AI 2003</em>, 2003.<br>

    [<a href="http://www.isi.edu/~deelman/Pegasus/iaai_2003.pdf">PDF</a>]</font></p>



	<p><font size="2"><b>The Role of Planning in Grid Computing</b>. J. Blythe,

    E. Deelman, Y. Gil, C. Kesselman, A. Agarwal, G. Mehta, K. Vahi. <em>ICAPS

    2003</em>, 2003.<br>

    [<a href="http://www.isi.edu/~deelman/Pegasus/icaps03.pdf">PDF</a>]</font></p>



	<p><font size="2"><b>Planning for Workflow Construction and Maintenance on

    the Grid</b>. J. Blythe, E. Deelman, Y. Gil. <em>ICAPS 2003 Workshop on

    Planning for Web Services</em>, 2003.<br>

    [<a href="http://www.isi.edu/~deelman/Pegasus/icaps_workshop.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="metadata catalog">A Metadata Catalog Service

    for Data Intensive Applications</a></b>. G. Singh, S. Bharathi, A. Chervenak,

    E. Deelman, C. Kesselman, M. Mahohar, S. Pail, L. Pearlman. <em>Proceedings of Supercomputing 2003 (SC2003)</em>, November 2003.<br>

    [<a href="#giggle">Citation</a>, <a href="papers/mcs_sc2003.pdf">PDF</a>]</font></p>



	<p><font size="2"><b>Grid-Based Galaxy Morphology Analysis for the National

    Virtual Observatory</b>. E. Deelman, R. Plante, C. Kesselman, G. Singh, M.

    Su, G. Greene, R. Hanisch, N. Gaffney, A. Volpicelli, J. Annis, V. Sekhri,

    T. Budavari, M. Nieto-Santisteban, W. Mullane, D. Bohlender, T. McGlynn, A.

    Rots, O. Pevunova. <em>Proceedings of Supercomputing 2003 (SC2003)</em>, November 2003.<br>

    [<a href="http://www.isi.edu/~deelman/Pegasus/galmorph_sc03.pdf">PDF</a>]</font></p>



<p>

<font size="2"><strong>Experiences of Designing and Implementing Grid Database

Services in the OGSA-DAI Project</strong>. 

M. Antonioletti, N.P. Chue Hong, A.C. Hume, M. Jackson, A. Krause, J. Nowell, C.

Palansuriya, T. Sugden, and M. Westhead. 

<em>Designing and Building Grid Services Workshop, GGF9</em>, October 2003.

<br>[<a

href="http://www.ogsadai.org.uk/docs/OtherDocs/OGSA-DAI-dbgsws-v1.0.pdf">PDF</a>]

</font></p>



<p>

<font size="2"><strong>The Design and Implementation of Grid Database Services

in OGSA-DAI</strong>. 

A. Anjomshoaa, M. Antonioletti, M.P. Atkinson, R. Baxter, A. Borley, N.P. Chue

Hong, B. Collins, N. Hardman, G. Hicken, A. Hume, A. Knox, M. Jackson,

A. Krause, S. Laws, J. Magowan, C. Palansuriya, N.W. Paton, D. Pearson,

T. Sugden, P. Watson, and M. Westhead.

<em>Proceedings of the UK e-Science All Hands Meeting 2003</em>, September 2003.

<br>[<a href="http://www.nesc.ac.uk/events/ahm2003/AHMCD/pdf/156.pdf">PDF</a>]

</font></p>





	<p><font size="2"><strong><a name="use-VS03">Using Regression Techniques to Predict Large Data Transfers</a></strong>.

	S. Vazhkudai, J. Schopf.

	<em>The International Journal of High Performance Computing Applications (IJHPCA)</em>,

	special issue on Grid Computing: Infrastructure and Applications, Vol 17,

    No. 3, August 2003.

	<br>[<a href="#use-VS03">Citation</a>, <a href="papers/Final-JHPCA.zip">.zip</a>]</font></p>



<p>

<font size="2"><strong>Grid Database Access and Integration: Requirements and

Functionalities

</strong>. 

M.P. Atkinson, V. Dialani, L. Guy, I. Narang, N.W. Paton, D. Pearson,

T. Storey, and P. Watson.

<em>Global Grid Forum Informational Document (GFD.13)</em>, March 2003.

<br>[<a

href="https://forge.gridforum.org/projects/ggf-editor/document/GFD.13/en/1">PDF</a>]

</font></p>



    <p><font size="2"><b><a name="giggle">Giggle: A Framework for Constructing

    Sclable Replica Location Services</a></b>. A. Chervenak, E. Deelman, I. Foster,

    L. Guy, W. Hoschek, A. Iamnitchi, C. Kesselman, P. Kunst, M. Ripeanu, B,

    Schwartzkopf, H, Stockinger, K. Stockinger, B. Tierney.  

    <em>Proceedings of Supercomputing 2002 (SC2002)</em>, November 2002.<br>

    [<a href="#giggle">Citation</a>, <a href="papers/giggle.pdf">PDF</a>]</font></p>

   

    <p><font size="2"><b><a name="PCdata3-2002">Data Management and Transfer in High Performance Computational Grid Environments</a></b>.

    B.

    Allcock, 

    J. Bester, J. Bresnahan, A. L. Chervenak, I. Foster, C. Kesselman, S. Meder, V.

    Nefedova, D. Quesnal, S. Tuecke.  

    <em>Parallel Computing Journal</em>, Vol. 28 (5), May 2002, pp. 749-771.<br>

    [<a href="#PCdata3-2002">Citation</a>, <a href="papers/dataMgmt.pdf">PDF</a>]</font></p>

   

    <p><font size="2"><b><a name="FileRepCluster02">File and Object Replication

    in Data Grids</a></b>. H. Stockinger, A. Samar, B. Allcock, I. Foster, K.

    Holtman, and B. Tierney; <em>Journal of Cluster Computing</em>, 5(3)305-314,

    2002.<br>

    [<a href="#PCdata3-2002">Citation</a>, <a href="papers/FileRepCluster02.pdf">PDF</a>]</font></p>

   

    <p><font size="2"><b><a name="HPDC11-AFR">A Decentralized, Adaptive, Replica

    Location Service</a></b>. M. Ripeanu, I. Foster;  

    <em>11th IEEE International Symposium on High Performance Distributed Computing (HPDC-11)</em>Edinburgh,

    Scotland, July 24-16, 2002.<br>

    [<a href="#HPDC11-AFR">Citation</a>, <a href="http://people.cs.uchicago.edu/~matei/PAPERS/hpdc-02.pdf">PDF</a>, 

    <a href="http://people.cs.uchicago.edu/~matei/PAPERS/hpdc-02.ps">PS</a>]</font></p>

   

    <p><font size="2"><strong><a name="pred-io">Using Disk Throughput Data in

    Predictions of End-to-End Grid Transfers</a>.</strong>

    S. Vazhkudai, J. Schopf. <em>Proceedings of the 3rd International Workshop

    on Grid Computing (GRID 2002)<i>, </i></em>Baltimore, MD, November 2002.<br>

    [<a href="#pred-io">Citation</a>, <a href="papers/pred-io.pdf">PDF</a>]</font></p>



<p>

<font size="2"><strong> Data Access and Integration Services on the Grid</strong>. 

N. Paton, M.P. Atkinson, V. Dialani, D. Pearson, T. Storey, and P. Watson.

<em>UK e-Science Programme Technical Report Series (UKeS-2002-03)</em>, February

 2002.

<br>[<a href="http://www.nesc.ac.uk/technical_papers/dbtf.pdf">PDF</a>]

</font></p>

   

    <p><font size="2"><strong><a name="GridftpSpec02">GridFTP Protocol

    Specification (Global Grid Forum Recommendation GFD.20)</a>.</strong>

    W. Allcock, editor. March 2003.<br>

    [<a href="#GridftpSpec02">Citation</a>, <a href="papers/GFD-R.0201.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="GridFTP-Update-Jan2001">GridFTP Update January 2002</a>.</strong>

    W. Allcock, J. Bresnahan, I. Foster, L. Liming, J. Link, P. Plaszczac.

    <em>Technical Report, January 2002</em>.<br>

    [<a href="#GridFTP-Update-Jan2001">Citation</a>, <a href="../datagrid/deliverables/GridFTP-Overview-200201.pdf">PDF</a>]</font></p>



      <p><font size="2"><strong><a name="decoupling">Decoupling Computation and

      Data Scheduling in Distributed Data-Intensive Applications</a>.</strong>

      K. Ranganathan and I. Foster. <i>Proceedings of 11th IEEE International

      Symposium on High Performance Distributed Computing (HPDC-11)</i>,

      Edinburgh, Scotland, July 2002.<br>

    [<a href="#decoupling">Citation</a>, <a href="papers/decouple.pdf">PDF</a>]</font></p>

      <p><font size="2"><strong><a name="repmodel">Improving Data Availability

      through Dynamic Model-Driven Replication in Large Peer-to-Peer Communities</a>.</strong>

      K. Ranganathan, Adriana Iamnitchi, and I. Foster. <i>Proceedings of Global

      and Peer-to-Peer Computing on Large Scale Distributed Systems Workshop, </i>Berlin,

      Germany, May 2002.<br>

    [<a href="#repmodel">Citation</a>, <a href="papers/repmodel.pdf">PDF</a>]</font></p>

      <p><font size="2"><strong><a name="VDS02">Chimera: A Virtual Data System for

      Representing, Querying and Automating Data Derivation</a>.</strong> I.

      Foster, J. Voeckler, M. Wilde, and Y. Zhao. <i>Proceedings of the 14th

      Conference on Scientific and Statistical Database Management, </i>Edinburgh,

      Scotland, July 2002.<br>

    [<a href="#VDS02">Citation</a>, <a href="papers/VDS02.pdf">PDF</a>]</font></p>

      <p><font size="2"><strong><a name="SDSS-SC02">Applying Chimera Virtual Data

      Concepts to Cluster Finding in the Sloan Sky Survey</a>.</strong> J.

      Annis, Y, Zhao,&nbsp; J. Voeckler, M. Wilde, S. Kent, and I. Foster. <i>Proceedings of

      Supercomputing 2002, </i>Baltimore, MD, November, 2002.<br>

    [<a href="#repmodel">Citation</a>, <a href="papers/SDSS-SC02.pdf">PDF</a>]</font></p>

      <p><font size="2"><strong><a name="repstrat02">Identifying Dynamic

      Replication Strategies for High Performance Data Grids</a>.</strong>

      K. Ranganathan and I. Foster. <i>Proceedings of International Workshop on

      Grid Computing</i>, Denver, CO, November 2002.<br>

    [<a href="#repstrat02">Citation</a>, <a href="papers/repstrat02.pdf">PDF</a>]</font></p>

      <p><font size="2"><strong><a name="sysPatMar02">Locating Data in (Small-World?) Peer-to-Peer Scientific Collaborations</a></strong>. 

	I. Foster, A. Iamnitchi, and M. Ripeanu. 

	<em>Workshop on Peer-to-Peer Systems, Cambridge, Massachusetts</em>, March, 2002.<br>

	[<a href="#sysPatMar02">Citation</a>, 

	<a href="papers/172.pdf">PDF</a>]</font></p>

      <small><small><small><!-- http://www.cs.uchicago.edu/~anda/papers/172.pdf -->

   

      </small></small></small>

   

	<p><font size="2"><strong><a name="rep02">Improving Data Availability through Dynamic Model-Driven Replication in Large Peer-to-Peer Communities</a></strong>. 

	I. Foster, A. Iamnitchi, and K. Ranganathan. 

	<em> Global and Peer-to-Peer Computing on Large Scale Distributed Systems Workshop, Berlin</em>, May, 2002.<br>

	[<a href="#rep02">Citation</a>, 

	<a href="papers/DynamicRMinP2P.ps">PS</a>]</font></p>

   

	<p><font size="2"><strong><a name="HPDC-11-VS">Predicting Sporadic Grid Data Transfers</a></strong>.

    J. M. Schopf, S. Vazhkudai. <em>11th IEEE International Symposium on High-Performance Distributed 

	Computing (HPDC-11),</em> IEEE Press, Edinburg, Scotland, July 2002.<br>

	[<a href="#HPDC-11-VS">Citation</a>, <a href="papers/hpdc-prediction-final.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="IPDPS-VSF">Predicting the Performance of Wide Area Data Transfers</a></strong>. 

	S. Vazhkudai, J. M. Schopf, I. Foster. <em>Proceedings of the 16th International Parallel and Distributed Processing Symposium (IPDPS 2002)</em>, April 2002.<br>

	[<a href="#IPDPS-VSF">Citation</a>, <a href="papers/Prediction-Paper-249.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="GSSpec"></a><a name="Globus.CHEP01">Globus Toolkit Support for

      Distributed Data-Intensive Science</a></b>. W. Allcock, A. Chervenak, I. Foster,

      L. Pearlman, V. Welch, M. Wilde. <i>Proceedings of Computing in High

      Energy Physics (CHEP '01)</i>, September 2001.<br>

    [<a href="#GSSpec">Citation</a>, <a href="papers/Globus.CHEP01.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="bwChep01">Applied Techniques for High Bandwidth Data Transfers Across Wide Area Networks</a>.</strong>

    J. Lee, D. Gunter, B. Tierney, B, Allcock, J. Bester, J. Bresnahan, S. Tuecke. 

    <i>Proceedings of International Conference on Computing in High Energy and Nuclear Physics</i>, 

    Beijing, China, September 

    2001.<br>

    [<a href="#bwChep01">Citation</a>, <a href="papers/dpss_and_gridftp.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="repChep01">Design and Evaluation of

    Dynamic Replication Strategies for High Performance Data Grids</a>.</strong>

    K. Ranganathan and I. Foster. <i>Proceedings of International Conference on

    Computing in High Energy and Nuclear Physics</i>, Beijing, China, September

    2001.<br>

    [<a href="#repChep01">Citation</a>, <a href="papers/repChep01.pdf">PDF</a>]</font></p>

    

    <p><font size="2"><strong><a name="GDMP-HPDC">File and Object Replication in Data Grids</a></strong>. 

    H. Stockinger, A. Samar, B. Allcock, I. Foster, K. Holtman, B. Tierney. 

    <em>Proceedings of the Tenth International Symposium on High Performance

    Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.<br>

    [<a href="#GDMP-HPDC">Citation</a>, 

    <a href="papers/gdmp_hpdc_final_version.pdf">PDF</a>]</font></p>

    

    <p><font size="2"><strong><a name="repsel">Replica Selection in the Globus Data Grid</a></strong>. 

    S. Vazhkudai, S. Tuecke, I. Foster. 

    <em>Proceedings of the First IEEE/ACM International Conference on 

    Cluster Computing and the Grid (CCGRID 2001)</em>, pp. 106-113, IEEE Computer Society Press, May 2001.<br>

    Discusses a high-level replica selection service that uses information regarding replica

    location and user preferences to guide selection from among storage replica alternatives.<br>

    [<a href="#repsel">Citation</a>, 

    <a href="papers/repsel.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="DG1">The Data Grid: Towards an Architecture for the Distributed Management and Analysis of Large Scientific Datasets</a></strong>.&nbsp;

    A. Chervenak, I. Foster, C. Kesselman, C. Salisbury, S. Tuecke. 

    <em>Journal of Network and Computer Applications</em>, 23:187-200, 2001

    (based on conference publication from Proceedings of NetStore Conference

    1999).<br>

    [<a href="#DG1">Citation</a>, 

    <a href="papers/JNCApaper.ps">PS</a>, 

    <a href="papers/JNCApaper.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="msc01">Secure, Efficient Data Transport and Replica Management for High-Performance Data-Intensive Computing</a></strong>. 

    B. Allcock, J. Bester, J. Bresnahan, A. Chervenak, I. Foster, C. Kesselman, S.

    Meder, V. Nefedova, D. Quesnel, S. Tuecke. 

    <em>IEEE Mass Storage Conference</em>, 2001.<br>

    Presents the design and performance characteristics of two fundamental technologies for data management.<br>

    [<a href="#msc01">Citation</a>, 

    <a href="papers/msc01.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="ACAT3">Protocols and Services for Distributed Data-Intensive Science</a></strong>.

    B. Allcock, S. Tuecke, I. Foster, 

    A. Chervenak, and C. Kesselman. 

    <em>ACAT2000 Proceedings</em>, pp. 161-163, 2000.<br>

    [<a href="#ACAT3">Citation</a>, 

    <a href="papers/ACAT3.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="commserv">Communication Services for Advanced Network Applications</a></strong>. 

    J. Bresnahan, I. Foster, J. Insley, S. Tuecke, B. Toonen. 

    <em>Proceedings of the International Conference on Parallel and Distributed Processing Techniques and Applications 1999</em>, 

    <span lang="en-us">Las Vegas, Nevada, June 28-July1, 1999. </span>Volume IV, pp1861-1867.<br>

    [<a href="#commserv">Citation</a>, 

    <a href="papers/final.ps">PS</a>, 

    <a href="papers/final.pdf">PDF</a>]</font></p>

    

    

    <p><font size="2"><strong><a name="gass">GASS: A Data Movement and Access Service for Wide Area Computing Systems</a></strong>. 

    J. Bester, I. Foster,&nbsp;C. Kesselman, J. Tedesco, S. Tuecke. 

    <em>Sixth Workshop on I/O in Parallel and Distributed Systems</em>, May 5, 1999.<br>

    Describes techniques for managing data movement in grid environments and describes their

    implementation in Globus.<br>

    [<a href="#gass">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/gass.ps.gz">PS</a>,

    <a href="http://www.globus.org/ftppub/globus/papers/gass.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="RIO97">Remote I/O: Fast Access to Distant Storage</a></strong>. 

    I. Foster, D. Kohr, R. Krishnaiyer, J. Mogill. 

    <em>Proc. Workshop on I/O in Parallel and Distributed Systems (IOPADS)</em>, pp. 14-25, 1997.<br>

    Describes the Remote I/O (RIO) remote data access capability in Globus<br>

    [<a href="#RIO97">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/rio.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/rio.pdf">PDF</a>]</font></p>



    <h2><a name="Resource Management Components">Resource Management Components (GRAM, SNAP, GARA/Qos, etc.)</a></h2>
	
    <p><font size="2"><strong><a name="TG-GRAM-Auditing">TeraGrid's GRAM Auditing &amp; Accounting, &amp; Its Integration with the LEAD Science Gateway</a></strong>.
	        S. Martin, P. Lane, I. Foster, and M. Christie<br/>
Describes how auditing information is produced by Globus Toolkit services and integrated with local accounting systems for use by TeraGrid’s resource providers.<br>

       [<a href="#TG-GRAM-Auditing">Citation</a>,

  <a href="papers/TG_GRAM_auditing_and_LEAD_Gateway_final_2.pdf">PDF</a>]</font></p>
	
	    <p><font size="2"><strong><a name="TG07-GRAM">GT4 GRAM: A Functionality
	            and Performance Study</a></strong>.
	        M. Feller, I. Foster, and S. Martin.<br/>
Describes and compares the functionality and performance of the GRAM2 and GRAM4 job execution services included in Globus Toolkit version 4 (GT4).<br>

       [<a href="#TG07-GRAM">Citation</a>,

  <a href="papers/TG07-GRAM-comparison-final.pdf">PDF</a>]</font></p>


    <p><font size="2"><strong><a name="VM-SPJ2006">Virtual Workspaces: Achieving Quality of Service and 

       Quality of Life in the Grid</a></strong>. K. Keahey, I. Foster, T. Freeman, 

       and X. Zhang. <i>To appear in the Scientific Programming Journal</i>, 2006.<br>

       [<a href="#VM-SPJ2006">Citation</a>,

        <a href="http://workspace.globus.org/papers/VW_ScientificProgrammingJournal06.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="Europar5005">Virtual Workspaces in the Grid</a></strong>. 

       K. Keahey, I. Foster, T. Freeman, X. Zhang, D. Galron.

       <i>Proceedings of Europar 2005</i>, Lisbon, Portugal, September, 2005.<br>

       [<a href="#Europar2005">Citation</a>,

        <a href="http://workspace.globus.org/papers/VW_EuroPar05.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="VM-Grid2004">From Sandbox to Playground: Dynamic Virtual Environments in the Grid</a></strong>.

       K. Keahey, K. Doering, and I. Foster. 

       <i>Proceedings of 5th International Workshop in Grid Computing (Grid 2004)</i>,

       Pittsburgh, PA, November 2004.<br>

       [<a name="#VM-Grid2004">Citation</a>,

        <a href="http://workspace.globus.org/papers/Sandbox_To_Playground_grid2004.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong>Providing Data Transfer with QoS as

    Agreement-Based Service</strong>. H. Zhang, K. Keahey, B. Allcock. <i>2004

    International Conference on Services Computing (SCC 2004)</i>, Shanghai,

    China, September 15 - 18, 2004<span lang="en-us">.</span><br>

	[<span lang="en-us"><a href="papers/1568935481_zhang_h.pdf">PDF</a></span>]</font></p>



	<p><font size="2"><strong><a name="end-to-end02">End-to-End Quality of

      Service for High-end Applications</a></strong>. I. Foster, M. Fidler, A. 

    Roy, V, Sander, L. Winkler. <i>Computer Communications</i>,<span lang="en-us"> 

    27(14):1375-1388, 2004.</span><br>

	[<a href="#end-to-end02">Citation</a>, 

      <a href="papers/e2e.pdf">PDF</a>]</font></p>



      <p><font size="2"><strong>Grid Resource Management</strong>. J. Nabrzyski,

      J.M. Schopf, J. Weglarz (Eds). Kluwer Publishing, Fall 2003.<br>

      [<a href="http://www-unix.mcs.anl.gov/~schopf/Book/">Order</a>]</font></p>



	<p><font size="2"><strong><a name="scheduling-sc">Conservative Scheduling:

    Using Predicted Variance to Improve Scheduling Decisions in Dynamic

    Environments</a></strong>.L. Yang, J.M. Schopf, I. Foster. <em>Supercomputing

    2003</em>, November 2003.

	<br>[<a href="#scheduling-sc">Citation</a>, <a href="papers/Scheduling_SC_CamraReady.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="WM-GGF9">Dynamic Creation and  Management of Runtime 

       Environments in the Grid</a></strong>. 

       K. Keahey, M. Ripeanu, and K. Doering.

       <i>Proceedings of Workshop on Designing and Building Web Services (GGF 9)</i>,

       Chicago, IL, October,  2003.<br>

       [<a name="WM-GGF9">Citation</a>,

        <a href="http://workspace.globus.org/papers/Dynamic_Runtime_Environments_dbgs2003.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="ogsi-agreement">Agreement-based Grid

    Service Management (OGSI-Agreement) (Draft 0)</a></strong>. K. Czajkowski,

    A. Dan, J. Rofrano, S. Tuecke, and M. Xu. <em>Global Grid Forum, GRAAP-WG

    Author Contribution</em>, 12 June 2003.

	<br>[<a href="#ogsi-agreement">Citation</a>, <a href="papers/OGSI_Agreement_2003_06_12.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="fgAuth-KWLLM03">Fine-Grain Authorization Policies in the GRID: Design and Implementation</a></strong>.

	K. Keahey, V. Welch, S. Lang, B. Liu, S. Meder.

	<em>1st International Workshop on Middleware for Grid Computing</em>, 2003.

	<br>[<a href="#fgAuth-KWLLM03">Citation</a>, <a href="papers/mgc_final.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="condorg">Condor-G: A Computation Management

    Agent for Multi-Institutional Grids</a></b>. J. Frey, T. Tannenbaum,  I. Foster,

    M. Livny, S. Tuecke.

	<em>Cluster Computing</em>, 5(3):237-246, 2002.<br>

	[<a href="#condorg">Citation</a>]</font></p>



	<p><font size="2"><b><a name="SNAP-CFKST02">SNAP: A Protocol for negotiating service level agreements and coordinating resource management in distributed systems</a></b>.  

	K. Czajkowski, I. Foster, C. Kesselman, V. Sander, and S. Tuecke.  

	<em>Lecture Notes in Computer Science</em>, 2537:153-183, 2002.

	[<a href="#SNAP-CFKST02">Citation</a>, <a href="http://www.isi.edu/~karlcz/papers/snap-lncs-25370153.pdf">PDF</a>]</font></p>

      

	<p><font size="2"><strong><a name="ngs-ipdps02">Toward a Framework for Preparing

    and Executing Adaptive Grid Programs</a></strong>. 

	D. Angulo, R. Aydt, F. Berman, A. Chien, K. Cooper, H. Dail, J. Dongarra, I. Foster,

    D. Gannon, L. Johnsson, K. Kennedy, C, Kesselman, M. Mazina, J. Mellor-Crummey,

    D. Reed, O. Sievert, L. Torczon, S. Vadhiyar, and R. Wolski. <em>IPDPS, 2002</em><!--, ,-->.&nbsp;<br>

	[<a href="#ngs-ipdps02">Citation</a>, <a href="papers/ngs-ipdps02.pdf">PDF</a>,

    <a href="papers/ngs-ipdps02.ps">PS</a>]</font></p>

      

	<p><font size="2"><strong><a name="RS-hpdc">Design and Evaluation of a Resource Selection Framework for Grid Applications</a></strong>. 

	D. Angulo, I. Foster, C. Liu, and L. Yang.&nbsp; <i>Proceedings of IEEE

    International Symposium on High Performance Distributed Computing (HPDC-11),</i>

    Edinburgh, Scotland, July 2002.<br>

	[<a href="#RS-hpdc">Citation</a>, <a href="papers/RS-hpdc.pdf">PDF</a>]</font></p>

      

	<p><font size="2"><strong><a name="GC2001">On Fully Decentralized

    Resource Discovery in Grid Environments</a></strong>. A. Iamnitchi and I.

    Foster. <em>International Workshop on Grid Computing, Denver, CO, November

    2001</em><!--, ,-->.<br>

	[<a href="#GC2001">Citation</a>, <a href="papers/GC2001.pdf">PDF</a>,

    <a href="papers/GC2001.ps">PS</a>]</font></p><small><!-- http://www.cs.uchicago.edu/~chliu/grads/doc/hpdc02-liu.pdf -->

 

      </small>

 

	<p><font size="2"><strong><a name="Condor-G-HPDC">Condor-G: A Computation Management Agent for Multi-Institutional Grids</a></strong>. 

	J. Frey, T. Tannenbaum, M. Livny, I. Foster, S. Tuecke. 

	<em>Proceedings of the Tenth International Symposium on High Performance

	Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.<br>

	[<a href="#Condor-G-HPDC">Citation</a>, 

	<a href="papers/condorg-hpdc10.pdf">PDF</a>]</font></p>

    

    <p><font size="2"><strong><a name="hpdc10-vizrm">Practical Resource

    Management for Grid-based Visual Exploration</a></strong>. K. Czajkowski,

    A.K. Demir, C. Kesselman, M. Thiebaux. <em>Proceedings of the Tenth International Symposium on High Performance

	Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.

	<br>[<a href="#hpdc10-vizrm">Citation</a>, <a href="papers/hpdc10-vizrm.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="QoSPolicy">End-to-End Provision of Policy Information for Network QoS</a></strong>. 

    V. Sander, W. A. Adamson, I. Foster, A. Roy. 

    <em>Proceedings of the Tenth IEEE Symposium on High Performance Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.<br>

    [<a href="#QoSPolicy">Citation</a>, 

    <a href="papers/QoSPolicy.pdf">PDF</a>]</font></p>



      <p><font size="2"><strong><a name="BB-FT">A Problem-Specific

      Fault-Tolerance Mechanism for Asynchronous, Distributed Systems</a></strong>.

      A. Iamnitchi and I. Foster. <em>Proceedings of the 2000 International

      Conference on Parallel Processing, 2000</em>.<br>

	[<a href="#BB-FT">Citation</a>, <a href="papers/BB-FT.ps">PS</a>, <a href="papers/BB-FT.pdf">PDF</a>]</font></p>

   

    <p><font size="2"><strong><a name="IWQoS8">A Quality of Service Architecture that Combines Resource Reservation and Application Adaptation</a></strong>. 

    I. Foster, A. Roy, V. Sander. 

    <em>8th International Workshop on Quality of Service</em>, 2000.<br>

    [<a href="#IWQoS8">Citation</a>, 

    <a href="papers/iwqos_adapt1.ps">PS</a>, 

    <a href="papers/iwqos_adapt1.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="TERENA1">A Differentiated Services Implementation for High-Performance TCP Flows</a></strong>. 

    V. Sander, I. Foster, A. Roy, L. Winkler. <em>Proceedings of the TERENA Networking Conference</em>, 2000.<br>

    [<a href="#TERENA1">Citation</a>, 

    <a href="papers/terena.ps">PS</a>, 

    <a href="papers/terena.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="IPDPS00">Scheduling with Advanced Reservations</a></strong>. 

    W. Smith, I. Foster, V. Taylor. 

    <em>Proceedings of the IPDPS Conference</em>, May 2000.<br>

    [<a href="#IPDPS00">Citation</a>, 

    <a href="papers/smith_376.ps">PS</a>, 

    <a href="papers/smith_376.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="Clouds4">Using Run-Time Predictions to Estimate Queue Wait Times and Improve Scheduler Performance</a></strong>. 

    W. Smith, V. Taylor, I Foster. 

    <em>Proceedings of the IPPS/SPDP '99 Workshop on Job Scheduling Strategies for Parallel Processing</em>, 1999.<br>

    [<a href="#Clouds4">Citation</a>, 

    <a href="papers/p.ps">PS</a>, 

    <a href="papers/p.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="duroc3">Resource Co-Allocation in Computational Grids</a></strong>.

    K. Czajkowski, I. Foster, and C. Kesselman. 

    <em>Proceedings of the Eighth IEEE International Symposium on High Performance Distributed Computing (HPDC-8)</em>, pp. 219-228, 1999.<br>

    [<a href="#duroc3">Citation</a>, 

    <a href="papers/paper3.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="IEEEQoS">End-to-End Quality of Service for High-End Applications</a></strong>. 

    I. Foster, A. Roy, V. Sander, L. Winkler. 

    <em>Technical Report</em>, 1999.<br>

    [<a href="#IEEEQoS">Citation</a>, 

    <a href="papers/end_to_end.ps">PS</a>, 

    <a href="papers/end_to_end.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="IEEEQoS2">QoS as Middleware: Bandwidth Reservation System Design</a></strong>. 

    G. Hoo, W. Johnston, I. Foster, A. Roy. 

    <em>Proceedings of the 8th IEEE Symposium on High Performance Distributed Computing</em>, pp. 345-346, 1999.<br>

    [<a href="#IEEEQoS2">Citation</a>, 

    <a href="papers/hoo.ps">PS</a>, 

    <a href="papers/hoo.pdf">PDF</a>).</font></p>



    <p><font size="2"><strong><a name="SC99gloperf">A Network Performance Tool for Grid Computations</a></strong>. 

    C. Lee, R. Wolski, I. Foster, C. Kesselman, J. Stepanek.<em> Supercomputing '99</em>, 1999.<br>

    [<a href="#SC99gloperf">Citation</a>, 

    <a href="papers/gloperf_sc99.ps.ps">PS</a>, 

    <a href="papers/gloperf_sc99.pdf.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="gara">A Distributed Resource Management Architecture that Supports Advance Reservations and Co-Allocation</a></strong>. 

    I. Foster, C. Kesselman, C. Lee, R. Lindell, K. Nahrstedt, A. Roy. 

    <em>Intl Workshop on Quality of Service</em>, 1999.<br>

    Describes the new Globus Architecture for Reservation and Allocation, which integrates CPU

    and network QoS.<br>

    [<a href="#gara">Citation</a>, 

    <a href="papers/iwqos.ps">PS</a>, <a

    href="papers/iwqos.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="IWQoS-98">The Quality of Service Component for the Globus Metacomputing System</a></strong>. 

    C. Lee, C. Kesselman, J. Stepanek, R. Lindell, S. Hwang, B. Scott Michel, J. Bannister, I. Foster, A. Roy. 

    <em>Proc. IWQoS '98</em>, pp. 140-142, 1998.<br>

    Brief overview of an early Globus QoS effort.<br>

    [<a href="#IWQoS-98">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/qualis_pp.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/qualis_pp.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="GRAM97">A Resource Management Architecture for Metacomputing Systems</a></strong>. 

    K. Czajkowski, I. Foster, N. Karonis, C. Kesselman, S. Martin, W. Smith, S.

    Tuecke. 

    <em>Proc. IPPS/SPDP '98 Workshop on Job Scheduling Strategies for Parallel Processing</em>,

    pg. 62-82, 1998.<br>

    Describes the resource management architecture implemented as part of the Globus system.<br>

    [<a href="#GRAM97">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/gram97.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/gram97.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="Smith98">Predicting Application Run Times Using Historical Information</a></strong>. 

    W. Smith, I. Foster, V. Taylor. 

    <em>Proc. IPPS/SPDP '98 Workshop on Job Scheduling Strategies for Parallel Processing</em>, 1998.<br>

    Describes techniques for predicting application run times.<br>

    [<a href="#Smith98">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/runtime.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/runtime.pdf">PDF</a>]</font></p>

      

      <h2><a name="Information Services Components">Information Services Components 

          (MDS, monitoring, etc.)</a></h2>



	<p><font size="2"><strong>Performance Analysis of the Globus Toolkit

    Monitoring and Discovery Service, MDS2</strong>. 

	X. Zhang and J. Schopf. 

	<em>Proceedings of the International Workshop on Middleware Performance (MP

    2004), part of the 23rd International Performance Computing and

    Communications Workshop (IPCCC)</em>, April 2004.

	<br>[<a href="papers/xuehaiMP04.pdf">PDF</a>]</font></p>

    

	<p><font size="2"><strong><a name="perf-ZFS03">A Performance Study of Monitoring and Information Services for Distributed Systems</a></strong>. 

	X. Zhang, J. Freschl, and J. Schopf. 

	<em>Proceedings of HPDC</em>, August 2003.

	<br>[<a href="#perf-ZFS03">Citation</a>, <a href="http://www-unix.mcs.anl.gov/~schopf/Pubs/xuehaijeff-hpdc2003.pdf">PDF</a>]</font></p>

    

    <p><font size="2"><strong><a name="MDS-HPDC">Grid Information Services for Distributed Resource Sharing</a></strong>. 

    K. Czajkowski, S. Fitzgerald, I. Foster, C. Kesselman. 

    <em>Proceedings of the Tenth IEEE International Symposium on High-Performance Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.<br>

    [<a href="#MDS-HPDC">Citation</a>, 

    <a href="papers/MDS-HPDC.pdf">PDF</a>]</font></p>

    

    <p><font size="2"><strong><a name="fault-detector">A Fault Detection Service for Wide Area Distributed Computations</a></strong>. 

    P. Stelling, I. Foster, C. Kesselman, C.Lee, G. von Laszewski. <em>Proc. 7th IEEE

    Symposium on High Performance Distributed Computing</em>, pp. 268-278, 1998.<br>

    Describes a fault detection service based on unreliable fault detectors and its

    implementation as the Globus Heartbeat Monitor.<br>

    [<a href="#fault-detector">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/hbm.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/hbm.pdf">PDF</a>,



    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las98hpdc">

    bibtex]</a>]</font></p>



    <p><font size="2"><strong><a name="LDAP-Usage">Usage of LDAP in Globus</a></strong>. 

    I. Foster, G. von Laszewski.<br>

    This short note describes the use of LDAP in the Globus toolkit. It answers three

    questions: What is LDAP? Where is it used? and Why is it used in Globus?<br>

    [<a href="#LDAP-Usage">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/ldap_in_globus.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/ldap_in_globus.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="mds97">A Directory Service for Configuring High-Performance Distributed Computations</a></strong>. 

    S. Fitzgerald, I. Foster, C. Kesselman, G. von Laszewski, W. Smith, S.

    Tuecke. <em>Proc. 6th IEEE Symposium on High-Performance Distributed Computing</em>, pp. 365-375, 1997.<br>

    Describes the Metacomputing Directory Service used to maintain information about Globus

    components.<br>

    [<a href="#mds97">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/hpdc97-mds.ps.gz">PS</a>, <a

    href="http://www.globus.org/ftppub/globus/papers/hpdc97-mds.pdf">PDF</a>,

    

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las97hpdc">

   bibtex</a>]</font></p>



      <h2><a name="Security Components">Security Components (GSI, CAS, etc.)</a></h2>



      <p><font size="2"><b><a name="NCA06">A Multipolicy Authorization Framework for Grid Security</a>.</b>

         Bo Lang, Ian Foster, Frank Siebenlist, Rachana Ananthakrishnan, 

         Tim Freeman.  Accepted by the IEEE NCA06 Workshop on Adaptive Grid 

         Computing (to appear in <em>Proc. Fifth IEEE Symposium on Network Computing 

         and Application</em>), Cambridge, USA, July 24-26, 2006.<br>

         [<a href="#NCA06">Citation</a>,

          <a href="papers/IEEE_NCA_AGC.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="GT3-WSFBCGKMPT03">X.509 Proxy

    Certificates for Dynamic Delegation</a></strong>. 

	V. Welch, I. Foster, C. Kesselman, O. Mulmo, L. Pearlman, S. Tuecke, J.

    Gawor, S. Meder, F. Siebenlist. <em>3rd Annual PKI R&amp;D Workshop</em>,

    2004.

	<br>[<a href="papers/pki04-welch-proxy-cert-final.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="GT3-WSFBCGKMPT03">Security for Grid Services</a></strong>. 

	V. Welch, F. Siebenlist, I. Foster, J. Bresnahan, K. Czajkowski, J. Gawor, C. Kesselman, S. Meder, L. Pearlman, S. Tuecke.

	<em>Twelfth International Symposium on High Performance Distributed Computing (HPDC-12)</em>, IEEE Press, to appear June 2003.

	<br>[<a href="#GT3-WSFBCGKMPT03">Citation</a>, <a href="papers/GT3-Security-HPDC.pdf">PDF</a>]</font></p>



      <p><font size="2"><b><a name="chep03-a">Using CAS to manage role-based VO sub-groups</a></b>. Shane Canon, 

         Steve Chan, Doug Olson, Craig Tull, and Von Welch. <em>In Proceedings of 

         Computing in High Energy Physics 03 (CHEP '03)</em>, 2003.

         [<a href="#chep03-a">Citation</a>, 

          <a href="papers/CAS-group-CHEP03.pdf">PDF</a>]</font></p>



      <p><font size="2"><b><a name="chep03-b">The Community Authorization Service: Status and Future</a></b>. 

         Ian Foster, Carl Kesselman, Laura Pearlman, Steven Tuecke, and Von

         Welch.  <em>In Proceedings of Computing in High Energy Physics 03 

         (CHEP '03)</em>, 2003.

         [<a href="#chep03-b">Citation</a>, 

          <a href="papers/CAS_update_CHEP_03-final.pdf">PDF</a>]</font></p>



      <p><font size="2"><strong><a name="gauth02">Fine-Grain Authorization for

      Resource Management in the Grid Environment</a></strong>. K. Keahey, V. Welch.

      <i>Proceedings of Grid2002 Workshop</i>,&nbsp; 2002.<br>

    [<a href="#gauth02">Citation</a>, <a href="papers/gauth02.pdf">PDF</a>]</font></p>



      <p><font size="2"><strong><a name="CAS-2002">A Community Authorization Service for Group Collaboration</a></strong>. 

    L. Pearlman, V. Welch, I. Foster, C. Kesselman, S. Tuecke. <em>Proceedings

      of the IEEE 3rd International Workshop on Policies for Distributed Systems and Networks</em>,

      2002.<br>

    [<a href="#CAS-2002">Citation</a>, 

    <a href="papers/CAS_2002_Revised.pdf">PDF</a>]</font></p>



      <p><font size="2"><strong><a name="MyProxy">An Online Credential Repository for the Grid: MyProxy</a></strong>. 

    J. Novotny, S. Tuecke, V. Welch. 

    <em>Proceedings of the Tenth International Symposium on High Performance Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.<br>

    [<a href="#MyProxy">Citation</a>, 

    <a href="papers/myproxy.pdf">PDF</a>,

    <a href="papers/myproxy.ps">PS</a>]</font></p>



    <p><font size="2"><strong><a name="GSI1">A National-Scale Authentication Infrastructure</a></strong>. 

    R. Butler, D. Engert, I. Foster, C. Kesselman, S. Tuecke, J. Volmer, V. Welch. 

    <em>IEEE Computer</em>, 33(12):60-66, 2000.<br>

    Describes our experience designing, developing, and deploying the Grid Security Infrastructure.<br>

    [<a href="#GSI1">Citation</a>, 

    <a href="papers/butler.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="security-arch">A Security Architecture for Computational Grids</a></strong>. 

    I. Foster, C. Kesselman, G. Tsudik, S. Tuecke. 

    <em>Proc. 5th ACM Conference on Computer and Communications Security Conference</em>, pp. 83-92, 1998.<br>

    Describes techniques for authentication in wide area computing environments.<br>

    [<a href="#security-arch">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/security.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/security.pdf">PDF</a>]</font></p>



      <p><font size="2"><strong><a name="cc-security">Managing Security in High-Performance Distributed Computing</a></strong>. 

    I. Foster, N. T. Karonis, C. Kesselman, S. Tuecke. 

    <em>Cluster Computing</em>, 1(1):95-107, 1998.<br>

    Discusses use of Nexus transforms to integrate security.<br>

    [<a href="#cc-security">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/cc-security.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/cc-security.pdf">PDF</a>]</font></p>



      <h2><a name="Viz">Visualization</a></h2>



	 <p><font size="2"><strong><a name="HiResRen03">High-Resolution Remote Rendering of Large Datasets in a Collaborative Environment</a></strong>. 

    N. Karonis, M. Papka, J. Binns, J. Bresnahan, J. Insley, D. Jones, and J. Link.

    <em>Future Generation of Computer Systems (FGCS)</em>, 2003.<br>

    [<a href="#HiResRen03">Citation</a>,

    <a href="papers/HiResRen03.pdf">PDF</a>]</font></p>



      <p><font size="2"><strong><a name="HPDC11-GM">GridMapper: A Tool for

      Visualizing the Behavior of Large-Scale Distributed Systems</a>.</strong>

      W. Allcock, J. Bester, J. Bresnahan, I. Foster, J. Gawor, J. A. Insley, J.

      M. Link, and M. E. Papka. 

    <em>11th IEEE International Symposium on High Performance Distributed Computing (HPDC-11), </em>

      pp179-187, Edinburgh, Scotland, July 24-16, 2002.<br>

      [<a href="#HPDC11-GM">Citation</a>, <a href="papers/GridMapper.pdf">PDF</a>, 

    <a href="papers/GridMapper.ps">PS</a>]</font></p>



    <p><font size="2"><strong><a name="distvis">Distance Visualization: Data Exploration on the Grid</a></strong>. 

    I. Foster, J. Insley, G. von Laszewski, C. Kesselman, M. Thiebaux.

    <em>IEEE Computer Magazine</em>, 32 (12):36-43, 1999.<br>

    [<a href="#distvis">Citation</a>,

    <a href="papers/DataViz.PDF">PDF</a>, 

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las99ieee">

   bibtex</a>]</font></p>



      <h2><a name="Java Cog Kit">Java CoG Kit</a></h2>



    <p><font size="2"><em>Gregor von Laszewski has produced a list of

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/papers/cogkit-ref.pdf">selected 

    Java CoG Kit references</a> that contains more than 60 references published by 

    the Java CoG Kit Team.  The links in this PDF document can be clicked to obtain 

    the manuscripts.</em></font></p>



    <p><font size="2"><strong><a name="infogram">InfoGram: A Grid Service that Supports Both Information Queries and 

   Job Execution</a></strong>. G. von Laszewski, I. Foster, J. Gawor, A. Schreiber, C. Pena.

    <em>Proceedings of the 11th IEEE International Symposium on High-Performance Distributed

   Computing (HPDC-11),</em> IEEE Press, Edinburg, Scotland, July 2002.<br>

   [<a href="#infogram">Citation</a>, <a href="papers/vonLaszewski--infogram.ps">PS</a>,

   <a href="papers/vonLaszewski--infogram.pdf">PDF</a>,

   

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las02infogram">

    bibtex</a>]</font></p>

    

	<p><font size="2" face="Verdana,Arial,Helvetica,Courier New,Courier"><b><a name="hiccs01">Designing

    Grid-based Problem Solving Environments</a></b>. G. von Laszewski, I.

    Foster, J. Gawor, P. Lane, N. Rehn, M. Russell. <em>34th Hawai'i

    International Conference on System Science</em>, 2001.<br>

	[<a href="#hiccs01">Citation</a>,

    <a href="papers/vonLaszewski--cog-pse-final.pdf">PDF</a>, 

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las01pse">

    bibtex</a>]</font></p>



    <p><font size="2"><b><a name="mutliparadigm">Multi-paradigm Communications in

    Java for Grid Computing</a></b>. V. Getov, G. von Laszewski, M. Philippsen,  I.

    Foster. Communications of the ACM, 44(10):118-125, 2001.<br>

	[<a href="#IPDPS00">Citation</a>,<a href="http://www.globus.org/cog/documentation/papers/cacm-laszewski.pdf"></a>

	<a href="http://www.globus.org/cog/documentation/papers/cacm-laszewski.pdf">PDF</a>,

    <a href="http://www.globus.org/cog">Website</a>, </span></font>

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las01acm">

    bibtex</a>]</font></p>

    

	<p><font size="2"><b><a name="Cog-01">A Java Commodity Grid Toolkit</a></b>.

    G, von Laszewski,  I. Foster, J. Gawor, P. Lane. <em>Concurrency: Practice

    and Experience</em>, 13, 2001.<br>

	[<a href="#Cog-01">Citation</a>,

    <a href="papers/vonLaszewski--cog-cpe-final.pdf">PDF</a>, 

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las01cog-concurency">

    bibtex</a>]</font></p>



    <p><font size="2"><strong><a name="JavaGrande2000">CoG Kits: A Bridge between Commodity Distributed Computing and High-Performance Grids</a></strong>. 

    G. von Laszewski, I. Foster, J. Gawor, W. Smith, and S. Tuecke.

    CoG Kits: A Bridge between Commodity

    Distributed Computing and High-Performance Grids. In 

    <em>ACM Java Grande 2000 Conference</em>, pages 97106, San Francisco, CA, 3-5 June 2000.<br>

    [<a href="#JavaGrande2000">Citation</a>, 

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/papers/cog-final.pdf">PDF</a>,

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las00grande">

    bibtex</a>]</font></p>

    

    <p><font size="2"><strong><a name="moba00">Grid-based Asynchronous Migration of Execution Context in Java Virtual Machines</a></strong>. 
    G. von Laszewski, K Shudo, Y. Muraoka. In A. Bode, T. Ludwig, W. Karl, and R. Wismuller, editors, <i>Proceedings of EuroPar 2000</i>, 

    volume 1900 of Lecture Notes in Computer Science, pages 2234, Munich, Germany, 29 August - 1 

    September 2000. Springer.<br>

    [<a href="#moba00">Citation</a>, 

    <a href="ftp://info.mcs.anl.gov/pub/tech_reports/reports/P823.ps.Z">PS</a>, 

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las00grande">bibtex</a>]</font></p>



    <p><font size="2"><strong><a name="portals">Grid Infrastructure to Support Science Portals for Large Scale Instruments</a></strong>. 

     Gregor von Laszewski and Ian Foster. 

    Grid Infrastructure to Support Science Portals for Large Scale

Instruments. In  <i>Proceedings of the Workshop Distributed Computing 

    on the Web (DCW</i>), pages 116. University of 

    Rostock, Germany, 21-23 June 1999.<br>

    [<a href="#portals">Citation</a>, 

    <a href="http://www.mcs.anl.gov/~laszewsk/papers/laszewskiDCW.ps">PS</a>,

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las99rostock">bibtex</a>]</font></p>



    

	<h2><a name="MPICH-G">MPICH-G2</a></h2>



    <p><font size="2"><strong><a name="MPICH-gei03">MPICH-G2: A Grid-Enabled Implementation of the Message Passing Interface</a></strong>.

    N. Karonis, B. Toonen, and I. Foster. 

    <em>Journal of Parallel and Distributed Computing</em>, 2003.<br>

    [<a href="#MPICH-gei03">Citation</a>,

    <a href="papers/mpich-gei03.pdf">PDF</a>]</font></p>

 

    <p><font size="2"><strong><a name="MPICH-QOS">MPICH-GQ: Quality-of-Service for Message Passing Programs</a></strong>.

    A. Roy, I. Foster, W. Gropp, N. Karonis, V. Sander, and B. Toonen. 

    <em>Proceedings of the IEEE/ACM SC2000 Conference</em>, November 4-10, 2000.<br>

    [<a href="#MPICH-QOS">Citation</a>,

    <a href="papers/mpi_qos.pdf">PDF</a>]</font></p>

    

    <p><font size="2"><strong><a name="exploit">Exploiting Hierarchy in Parallel

    Computer Networks to Optimize Collective Operation Performance</a></strong>. N. Karonis,

    B. de Supinski, I. Foster, W. Gropp, E. Lusk, J. Bresnahan. 

    <em>Proceedings of the 14th International Parallel Distributed Processing

    Symposium (IPDPS '00)</em>, pp 377-84, Cancun, Mexico, May 200.<br>

    [<a href="#MPI-QOS">Citation</a>, <a href="papers/exploit.ps">PS</a>, <a href="papers/exploit.pdf">PDF</a>]</font></p>

    

    <p><font size="2"><strong><a name="hpdc99">Accurately Measuring MPI Broadcasts in a Computational Grid</a></strong>. 

    B. de Supinski, N. Karonis. 

    <em>Proc. 8th IEEE Symp. on High Performance Distributed Computing</em>, pp. 29-37, August 1999.<br>

    [<a href="#hpdc99">Citation</a>, 

    <a href="ftp://ftp.cs.niu.edu/pub/karonis/papers/hpdc8/desupinski.ps.gz">PS</a>]</font></p>



      <p><font size="2"><strong><a name="mpich98">A Grid-Enabled MPI: Message Passing in Heterogeneous Distributed Computing Systems</a></strong>.

    I. Foster, N. Karonis. 

    <em>Proc. 1998 SC Conference</em>, November, 1998.<br>

    [<a href="#mpich98">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/mpichg98.ps.gz">PS</a>, 

    <a href="papers/gempi.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="mpi-nexus-pc">Wide-Area Implementation of the Message Passing Interface</a></strong>. 

    I. Foster, J. Geisler, W. Gropp, N. Karonis, E. Lusk, G. Thiruvathukal, S.

    Tuecke. 

    <em>Parallel Computing</em>, 24(12):1735-1749, 1998.<br>

    [<a href="#mpi-nexus-pc">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/mpi-nexus-pc.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/mpi-nexus-pc.pdf">PDF</a>]</font></p>



    

    <h2><a name="Nexus Section">Nexus</a></h2>



    <p><font size="2"><strong><a name="Zipper">A Secure Communications Infrastructure for High-Performance Distributed Computing</a></strong>. 

    I. Foster, N. Karonis, C. Kesselman, G. Koenig, S. Tuecke. 

    <em>6th IEEE Symp. on High-Performance Distributed Computing,</em> pp. 125-136,

    1997.<br>

    Describes the techniques used within Nexus to support the selective application of message

    privacy and integrity mechanisms<br>

    [<a href="#Zipper">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/hpdc97-security.ps.gz">PS</a>, 

    <a href="papers/secure.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="MultiMethod">Managing Multiple Communication Methods in High-Performance Networked Computing Systems</a></strong>. 

    I. Foster, J. Geisler, C. Kesselman, S. Tuecke. 

    <em>J. Parallel and Distributed Computing</em>, 40:35-48, 1997.<br>

    Describes mechanisms for multi-method communication and their implementation in the Nexus

    communication library.<br>

    [<a href="#MultiMethod">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/jpdc2.ps.gz">PS</a>,

    <a href="http://www.globus.org/ftppub/globus/papers/jpdc2_ps.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="mpi-nexus">MPI on the I-WAY: A Wide-Area, Multimethod Implementation of the Message Passing Interface</a></strong>. 

    I. Foster, J. Geisler, S. Tuecke. 

    <em>Proc. 1996 MPI Developers Conference</em>, 10-17, 1996.<br>

    Describes the Nexus-based implementation of MPI developed for the I-WAY experiment.<br>

    [<a href="#mpi-nexus">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/mdc96_iway.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/mdc96_iway.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="JPDCNexus">The Nexus Approach to Integrating Multithreading and Communication</a></strong>. 

    I. Foster, C. Kesselman, S. Tuecke, J. 

    <em>Journal of Parallel and Distributed Computing</em>, 37:70--82, 1996.<br>

    Describes aspects of the Nexus multithreaded runtime system, the communication component

    of Globus.<br>

    [<a href="#JPDCNexus">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/jpdc.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/jpdc.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="NexusJava">Enabling Technologies for Web-Based Ubiquitous Supercomputing</a></strong>. 

    I. Foster, S. Tuecke. 

    <em>Proc. 5th IEEE Symp. on High Performance Distributed Computing</em>, pp. 112-119, 1996.<br>

    Discusses the concept of ubiquitous supercomputing and a Java binding for Nexus that can

    be used to implement it.<br>

    [<a href="#NexusJava">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/hpdc_java.ps.gz">PS</a>,

    <a href="http://www.globus.org/ftppub/globus/papers/hpdc_java.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="Nexus">The Nexus Task-Parallel Runtime System</a>.</strong>.

    I. Foster, C. Kesselman, S. Tuecke. 

    <em>Proc. 1st Int'l Workshop on Parallel Processing</em>, pp. 457-462, 1994.<br>

    A brief introduction to Nexus concepts.<br>

    [<a href="#Nexus">Citation</a>, 

    <a href="http://www.globus.org/ftppub/nexus/india_paper_ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/india_paper_ps.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="nexus-runtime">Nexus: Runtime Support for Task-Parallel Programming Languages</a></strong>. 

    <em>Technical Report: Mathematics and Computer Science Division, Argonne National Laboratory</em>, 1994.<br>

    A long version of the preceding paper that also describes how Nexus is used in&nbsp;two

    parallel language compilers<br>

    [<a href="#nexus-runtime">Citation</a>, 

    <a href="http://www.globus.org/ftppub/nexus/nexus_paper_ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/nexus_paper_ps.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="PORTS0">The PORTSO Interface</a></strong>. 

    <em>Technical Report: Mathematics and Computer Science Division, Argonne National Laboratory</em>, 1994; 

    revised periodically.<br>

    Describes a portable thread interface defined by the PORTS consortium.<br>

    [<a href="#PORTSO">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/ports0_spec_v0.3_ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/ports0_spec_v0_3_ps.pdf">PDF</a>]</font></p>

    

    

	<h2><a name="Applications">Applications</a></h2>
	
	<p><font size="2"><strong><a name="VDL2Bric">Accelerating Medical Research using the Swift Workflow System</a></strong>.&nbsp;
	
	Stef-Praun, T., Clifford, B., Foster, I., Hasson, U., Hategan, M., Small, S., Wilde, M and Zhao,Y. 
	
	<em>Health Grid  </em>, 2007<br>
	
	[<a href="#VDL2Bric">Citation</a>, <a href="papers/HealthGrid-2007-VDL2Bric.submitted-revised.pdf">PDF</a>]</font></p>
	
	<p><font size="2"><strong><a name="VDL2Bric">Accelerating solution of a moral hazard problem with Swift</a></strong>.&nbsp;
	
	Stef-Praun, T., Madeira, G., Foster, I., and Townsend, R. 
	
	<em>e-Social Science</em>, 2007<br>
	
	[<a href="#SwiftForSocialSciences">Citation</a>, 
	
	<a href="papers/SwiftForSocialSciences-2007.pdf">PDF</a>]</font></p>

	
	
	      <p><font size="2"><strong><a name="foam">Automating Climate Science: Large Ensemble Simulations on the TeraGrid with the GriPhyN Virtual Data System</a></strong>.&nbsp;

    V. Nefedova, R. Jacob, I. Foster, Z. Liu, Y. Liu, E. Deelman, G Mehta, M. Su, K. Vahi. 

    <em>Presented at the eScience Conference in Amsterdam</em>, December, 2006<br>

    [<a href="#foam">Citation</a>, 

    <a href="papers/Foam-submit.pdf">PDF</a>]</font></p>
    
	<p><font SIZE="2"><a name="esgProcIEEE2005"><b>The Earth System Grid: Supporting the Next 

         Generation of Climate Modeling Research</b>.</a> 

         D. Bernholdt, S. Bharathi, D. Brown, K. Chancio, M. Chen, A. Chervenak, 

         L. Cinquini, B. Drach, I. Foster, P. Fox, J. Garcia, C. Kesselman, R. Markel,

         D. Middleton, V. Nefedova, L. Pouchard, A. Shoshani, A. Sim, G. Strand,

         D. Williams. <i>Proceedings of the IEEE</i>, 93:3, March, 2005, 485-495.<br>

      [<a href="#esgProcIEEE2005">Citation</a>, 

       <a href="papers/esgProcIEEE2005.pdf ">PDF</a>]</font></p>

      

      <p><font SIZE="2"><b>Grids for Experimental Science: The Virtual Control Room</b>, K.

      Keahey, M. E. Papka, Q. Peng, D. Schissel, G. Abla, T. Araki, J. Burruss,

      E. Feibush, P. Lane, S. Klasky, T. Leggett, D. McCune, L. Randerson, <i>in

      proceedings of the Challenges of Large Applications in Distributed

      Environments (CLADE)</i>, Honolulu, HI, June 07, 2004.<br>

      [<a href="papers/clade_submitted_corrected.pdf">PDF</a>]</font></p>

      

      <p><font SIZE="2"><b>Agreement-Based Interactions for Experimental Science</b>, K. Keahey,

      T. Araki, and P. Lane.&nbsp; In Proceedings of <i>Europar</i>, August,

      2004.<br>

      [<a href="papers/EuroPar2004.pdf">PDF</a>]</font></p>

      

      <p><font SIZE="2"><strong>Dynamic Creation and Management of Runtime Environments in the

      Grid</strong>. K. Keahey, M. Ripeanu, K. Doering, <i>Workshop on Designing

      and Building Grid Services</i>, GGF-9, October 8, 2003.<br>

	[<a href="papers/dynamiccreation.pdf">PDF</a>]</font></p>

      

      <p><font SIZE="2"><b><a name=nees">NEESgrid:&nbsp; A Distributed Collaboratory for

      Advanced Earthquake Engineering Experiment and Simulation</a></b><a name=nees">.

      B. Spencer Jr., T.A. Finholt, I. Foster, C. Kesselman, C. Beldica, J. Futrelle, S. Gullapalli, P. Hubbard,&nbsp;

      L. Liming, D. Marcusiu, L. Pearlman, C. Severance, G. Yang, <i>13th World

      Conference on Earthquake Engineering</i>, to appear, August 2004.<br>

	[<a href="papers/13worldconferenceonEarthquakeEngineering-rad8A451.pdf">PDF</a>]</font></p>

      

      <p><font SIZE="2"><b><a name=nees">Distributed Hybrid Earthquake Engineering Experiments: Experiences

      with a Ground-Shaking Grid Application</a></b><a name=nees">. L. Pearlman, C. Kesselman, S.

      Gullapalli, B.F. Spencer, Jr., J. Futrelle, K. Ricker, I. Foster, P.

      Hubbard and C. Severance, <i>Proceedings of the 13th IEEE Symposium on

      High Performance Distributed Computing</i>, to appear, June 2004.<br>

	[<a href="#nees&quot;">Citation</a>, <a href="papers/nees-hpdc-final-non-ieee-formatting.pdf">PDF</a>]</font></p>

      

	<p><font size="2"><strong><a name="fusion02">Computational Grids in Action: The

    National Fusion Collaboratory</a></strong>. K. Keahey, T. Fredian, Q. Peng,

    D.P. Schissel, M. Thompson, I. Foster, M. Greenwald, and D. McCune, <i> Future Generation Computer Systems</i>,

    18:8, pg. 1005-1015, October 2002.<br>

	[<a href="#fusion02">Citation</a>, <a href="papers/fusion02.pdf">PDF</a>]</font></p>

   

	<p><font size="2"><b><a name="astro-cc02">The Astrophysics Simulation

    Collaboratory: A Science Portal Enabling Community Software Development</a></b>.

    M. Russel, G. Allen, G, Daues, I. Foster, E. Seidel, J. Novotny, J. Shalf,

    G, von Laszewski.

	<em>Cluster Computing</em>, 5(3):297-304, 2002.<br>

	[<a href="#astro-cc02">Citation</a>,

    <a href="papers/astro-jcc.pdf">PDF</a>, 

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#cactuscluster">

    bibtex</a>]</font></p>



	<p><font size="2"><b><a name="Grads">The GrADS Project: Software Support for

    High-Level Grid Application Development</a></b>. F. Berman, A. Chien, K.

    Cooper, J. Dongarra,  I. Foster, D. Gannon, L. Johnson, K. Kennedy, C.

    Kesselman, J. Mellor-Crummey, D. Reed, L. Torczon, R. Wolski. <em>International

    Journal of High-Performance Computing Applications</em>, 15(4), 2002.<br>

	[<a href="#Grads">Citation</a>]</font></p>



      <p><font size="2"><strong><a name="ijsa-cactus">The Cactus Worm:

      Experiments with Dynamic Resource Selection and Allocation in a Grid

      Environment</a></strong>. 

	G. Allen, D. Angulo, I. Foster, G. Lanfermann, Chuang Liu, T. Radke, E. Seidel and

      J. Shalf. <em>International Journal of High-Performance Computing

      Applications</em>, Vol. 15 (4) 2001.<br>

	[<a href="#sc01SEE">Citation</a>, <a href="papers/ijsa-cactus.pdf">PDF</a>]</font></p>

   

      <p><font size="2"><strong><a name="ijsa-pred">Performance Predictions for

      a Numerical Relativity Package in Grid Environments</a></strong>. M.

      Ripeanu, A. Iamnitchi, and I. Foster. <em>International Journal of

      High-Performance Computing Applications</em>, Vol. 15 (4) 2001.<br>

	[<a href="#ijsa-pred">Citation</a>, <a href="papers/ijsa-pred.ps">PS</a>, <a href="papers/ijsa-pred.pdf">PDF</a>]</font></p>

   

      <p><font size="2"><strong><a name="europar-cactus">Cactus Application:

      Performance Predictions in Grid Environments</a></strong>. M. Ripeanu, A.

      Iamnitchi, and I. Foster. <em>EuroPar 2001</em>, Manchester, UK, August

      2001.<br>

	[<a href="#europar-cactus">Citation</a>, <a href="papers/europar-cactus.ps">PS</a>,

      <a href="papers/europar-cactus.pdf">PDF</a>]</font></p>

   

      <p><font size="2"><strong><a name="astro-hpdc">The Astrophysics Simulation

      Collboratroy: A Science Portal Enabling Community Software Development</a></strong>.

      M. Russel, G. Allen, I. Foster, E. Seidel, J. Novotny, J. Shalf, G. von

      Laszewski, and G. Daues. <em>Proceedings of High-Performance Distributed

      Computing 10 (HPDC-10)</em>, pages 

      207215, San Francisco, CA, 7-9 August 2001.<br>

	[<a href="#astro-hpdc">Citation</a>,

      <a href="papers/astro-hpdc10.pdf">PDF</a>, 

      <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#hpdc10cactus">

      bibtex</a>]</font></p>

   

	<p><font size="2"><strong><a name="sc01SEE">Supporting Efficient Execution in Heterogeneous Distributed Computing Environments with Cactus and Globus</a></strong>. 

	G. Allen, T. Dramlitsch, I. Foster, N. Karonis, M. Ripeanu, E. Seidel and B. Toonen. 

	<em>Proceedings of SC 2001</em>, November 10-16, 2001.<br>

	[<a href="#sc01SEE">Citation</a>, 

	<!--.ps not in papers/ <a href="papers/SC2001ripeanu.ps">PS</a>, -->

	<a href="papers/SC2001ripeanu.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="sc01ewa">High-Performance Remote Access to Climate Simulation Data: A Challenge Problem for Data Grid Technologies</a></strong>. 

	B. Allcock, I. Foster, V. Nefedova, A. Chervenak, E. Deelman, C. Kesselman, J. Leigh, A. Sim, A. Shoshani, B. Drach, D. Williams. 

	<em>SC 2001</em>, November 2001.<br>

	[<a href="#sc01ewa">Citation</a>, 

	<a href="papers/sc01ewa_esg_chervenak_final.pdf">PDF</a>]</font></p>

        

	<p><font size="2"><strong><a name="RSI01">A High-Throughput X-ray Microtomography System at the Advanced Photon Source</a></strong>. Y. Wang, F. De Carlo, D. Mancini, I. 

    McNulty, B. Tieman, J. Bresnahan, I. Foster, J. Insley,

      P. Lane, G. von Laszewski, C. Kesselman, M.-H. Su, M. Thiebaux.   <i>Review of Scientific Instrument</i>s, 72(4):20622068, 

    April 2001.<br>

    </font><font size="2">[<a href="#RSI01">Citation</a>, 

	<a href="papers/RSI01.pdf">PDF</a> ,  

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las01cmt">

    bibtex</a>]</font></p>



    <p><font size="2"><b><a name="EDG2">The

    Earth System Grid II: Turning Climate Datasets Into Community Resources</a></b>.

    I. Foster, E. Alpert, A. Chervenak, B. Drach, C. Kesselman, V. Nefedova, D.

    Middleton, A. Shoshani, A. Sim, D. Williams. <em>Proceedings of the American

    Meterologcal Society Conference</em>, 2001.<br>

	[<a href="#esg2">Citation</a>]</font></p>



	<p><font size="2"><b><a name="ocean-atmos">Computational Design

    and Performance of the Fast Ocean Atmosphere Model, Version One</a></b>. R.

    Jacob, C. Schafer, I. Foster, M. Tobis, J. Anderson. <em>2001 Intl

    Conference on Computational Science</em>, 2001.<br>

	[<a href="#ocean-atmos">Citation</a>]</font></p>



      <p><font size="2"><strong><a name="cactusG">The Cactus-G Toolkit:

      Supporting Efficient Execution in Heterogeneous Distributed Computing

      Environments</a></strong>. 

	G. Allen, T. Dramlitsch, I. Foster, T. Goodale, N. Karonis, M. Ripeanu, E. Seidel,

      and B. Toonen. <em>Proceedings of the 4th Globus Retreat,</em> Pittsburg,

      PA, August 2000.<br>

	[<a href="#cactusG">Citation</a>, <a href="papers/cactusG.ps">PS</a>, <a href="papers/cactusG.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="corba1">Using CORBA and Globus to Coordinate Multidisciplinary Aeroscience Applications</a></strong>. 

    I. Lopez, G.J. Follen, R. Gutierrez, I. Foster, B. Ginsburg, O. Larsson, and S. Tuecke. 

    <em>Proceedings of the NASA HPCC/CAS Workshop</em>, February 15-17, 2000.<br>

    [<a href="#corba1">Citation</a>, 

    <a href="http://accl.lerc.nasa.gov/IPG/CORBA/">HTML</a>]</font></p>



	<p><font size="2"><strong><a name="xray00">Using Computational Grid Capabilities to Enhance the Ability of an X-ray Source for Structural Biology</a></strong>. 

	G. von Laszewski, M. Westbrook,  I. Foster, E. Westbrook, C. Barnes. 

	<em>Cluster Computing</em>, 3(3):187-199, 2000.<br>

	[<a href="#xray00">Citation</a>,

   <a href="papers/vonLaszewski--dtrek.ps">PS</a>,

   <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las00sbc">bibtex</a>]</font></p>



	<p><font size="2"><strong><a name="cave1">A Review of Tele-Immersive Applications in the CAVE Research Network</a></strong>. 

    J. Leigh, A. Johnson, T. DeFanti, M. Brown, M. Ali,

    S. Bailey, A. Banerjee, P. Benerjee, J. Chen, K. Curry, J. Curtis, F. Dech, B. Dodds, I.

    Foster, S. Graser, K. Ganeshan, D. Glen, R. Grossman, R. Heiland, J. Hicks, A. Hudson, T.

    Imai, M. Khan, A. Kapoor, R. Kenyon, J. Kelso, R. Kriz, C. Lascara, X. Liu, Y. Lin, T.

    Mason, A. Millman, K. Nobuyuki, K. Park, B. Parod, P. Rajlich, M. Rasmussen, M. Rawlings,

    D. Robertson, S. Thongrong, R. Stein, K. Swartz, S. Tuecke, H. Wallach, H. Wong, G. Wheless. 

    <em>Proceedings of the IEEE Virtuality Reality 2000 International Conference (VR 2000)</em>, 1999.<br>

    [<a href="#cave1">Citation</a>, 

    <a href="papers/ieeevr99.ps">PS</a>, 

    <a href="papers/ieeevr99.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="sc99karonis">Multivariate Geographic Clustering in a Metacomputing Environment Using Globus</a></strong>. 

    G. Mahinthakumar, F.M. Hoffman, W.W. Hargrove, N. Karonis. 

    <em>Proc. Supercomputing 99</em>, November 1999.<br>

    [<a href="#sc99karonis">Citation</a>, 

    <a href="ftp://ftp.cs.niu.edu/pub/karonis/papers/SC99/sc99.ps.gz">PS</a>]</font></p>



    <p><font size="2"><strong><a name="Clouds">Numerical Relativity in a Distributed Environment</a></strong>. 

    W. Benger, I. Foster, J. Novotny, E. Seidel, J. Shalf, W. Smith, P. Walker. 

    <em>Ninth SIAM Conference on Parallel Processing for Scientific Computing</em>, April 1999.<br>

    [<a href="#Clouds">Citation</a>, 

    <a href="papers/bengerw.ps">PS</a>, <a

    href="papers/bengerw.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="Clouds2">Large-Scale Distributed Computational Fluid Dynamics on the Information Power Grid using Globus</a></strong>. 

    S. Barnard, R. Biswas, S. Saini, R. Van der Wijngaart, M. Yarrow, L. Zechter, I. Foster, O. Larsson.

    <i>Proc. of Frontiers '99,</i> 1999.<br>

    [<a href="#Clouds2">Citation</a>, 

    <a href="papers/paper1.ps">PS</a>, <a

    href="papers/paper1.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="cmt99">The International Grid (iGrid):&nbsp; Empowering Global Research Community Networking Using High Performance International Internet Services</a></strong>. 

    M. D. Brown, T. DeFanti, M. A. McRobbie, A. Verlo, D. Plepys, D. F. McMullen, K. Adams, J. Leigh, A. E. Johnson, I. Foster, C. Kesselman, A. Schmidt, S. N. Goldstein. 

    <em>iGrid</em>, April 1999.<br>

    [<a href="#cmt99">Citation</a>, 

    <a href="papers/inet99.ps">PS</a>, 

    <a href="papers/inet99.pdf">PDF</a>]</font></p>



	<p><font size="2" face="Verdana"><strong><a name="cmt99b">Real-Time Analysis, Visualization, and Steering of Microtomography Experiments at Photon Sources</a></strong>. 

    G. von Laszewski, M. Su, J. A. Insley, I. Foster, J. Bresnahan, C. Kesselman, M. Thiebaux, 

    M. L. Rivers, S. Wang, B. Tieman, I. McNulty. 

    <em>Ninth SIAM Conference on Parallel Processing for Scientific Computing</em>, April 1999.<br>

    [<a href="#cmt99b">Citation</a>, 

    <a href="papers/siamCmt99.ps">PS</a>, 

    <a href="papers/siamCmt99.pdf">PDF</a>,

    </span>

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las99siam">

    bibtex</a>]</font></p>



    <p><font size="2"><strong><a name="hcw-sf-express">Implementing Distributed Synthetic Forces Simulations in Metacomputing Environments</a></strong>. 

    S. Brunett, D. Davis, T. Gottshalk, P. Messina, C. Kesselman. 

    <em>Proceedings of the Heterogeneous Computing Workshop</em>, Mar. 1998.<br>

    [<a href="#hcw-sf-express">Citation</a>, 

    <a href="papers/sf-express.ps">PS</a>,

    <a href="http://www.globus.org/ftppub/globus/papers/sf-express.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="globus-apps">Application Experiences with the Globus Toolkit</a></strong>. 

    S. Brunett, K. Czajkowski, S. Fitzgerald, I. Foster, A. Johnson, C. Kesselman, J. Leigh, S. Tuecke.

    <em>Proceedings of 7th IEEE Symp. on High Performance Distributed Computing</em>, July 1998.<br>

    A case study of two applications built using the Globus Toolkit.<br>

    [<a href="#globus-apps">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/globus-apps.ps.Z">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/globus-apps.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="I-WAY">Overview of the I-WAY: Wide Area Visual Supercomputing</a></strong>.

    T. DeFanti, I. Foster, M. Papka, R. Stevens, T.Kuhfuss. 

    <em>International Journal of Supercomputer Applications</em>, 10(2):123-130, 1996.<br>

    Provides a brief introduction to the I-WAY experiment, the I-WAY network, and some I-WAY applications.<br>

    [<a href="#I-WAY">Citation</a>, 

    <!--<a href="ftp://ftp.mcs.anl.gov/pub/nexus/reports/iway_overview.ps.gz">PS</a>,-->

    <a href="papers/iway_overview.pdf">PDF</a>]</font></p>



    <p><font size="2"><strong><a name="Clouds3">Near-real-time Satellite Image Processing: Metacomputing in CC++</a></strong>. 

    C. Lee, C. Kesselman, S. Schwab. 

    <em>Computer Graphics and Applications</em>, 16(4):79-84, 1996.<br>

    Describes an I-WAY application and the CC++ language used to develop it.<br>

    [<a href="#Clouds3">Citation</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/neph.ps.gz">PS</a>, 

    <a href="http://www.globus.org/ftppub/globus/papers/neph.pdf">PDF</a>]</font></p>



	<h2><a name="Other Globus-Related Research">Other Globus-Related Research</a></h2>
    
    <p><font size="2"><strong><a name="userPerspective">Perspectives on Distributed Computing: Thirty People, Four User Types, and the Distributed Computing User Experience</a></strong>. 
	L. Childers, L. Liming, and I. Foster.  
	
	<em>Argonne National Laboratory Technical Report ANL/MCS/CI-31</em>, September 2008<br>
	
	[<a href="#userPerspective">Citation</a>,
	
	<a href="papers/ANL_MCS_CI_31_no-binding.pdf">PDF</a>]</font></p>
    
	
	<p><font size="2"><strong><a name="LEGS">LEGS: A WSRF Service to Estimate Latency Between Arbitrary Hosts on the Internet</a></strong>. 
	R. Vijayprasanth, R. Kavithaa and Rajkumar Kettimuthu.  
	
	<em>Proceedings of the 2007 International Conference on Parallel and Distributed Processing Techniques and Applications (PDPTA 2007)</em>, June 2007<br>
	
	[<a href="#LEGS">Citation</a>,
	
	<a href="papers/LEGS.pdf">PDF</a>]</font></p>
	
	<p><font size="2"><strong><a name="survey">Survey of Protocols and Mechanisms for Enhanced Transport over Long Fat Pipes</a></strong>. 
	Eric He, Rajkumar Kettimuthu, Sanjay Hegde, Yunhong Gu, Michael Welzl, Pascale Primet, Jason Leigh and Chaoyue Xiong.  
	
	<em>Global Grid Forum White paper, Data Transport Research Group</em>, 2003/2004<br>
	
	[<a href="#survey">Citation</a>,
	
	<a href="papers/Survey.pdf">PDF</a>]</font></p>
	
	<p><font size="2"><strong><a name="RSS">Restricted Slow-Start for TCP</a></strong>. 
	William Allcock, Sanjay Hegde and Rajkumar Kettimuthu.  
	
	<em>The 2005 IEEE International Conference on Cluster Computing 2005</em>, September 2005<br>
	
	[<a href="#RSS">Citation</a>,
	
	<a href="papers/RSS.pdf">PDF</a>]</font></p>
	
	<p><font size="2"><strong><a name="sc2002">Appropriateness of Transport Mechanisms in Data Grid Middleware</a></strong>. 
	Rajkumar Kettimuthu, Sanjay Hegde, William E. Allcock and John Bresnahan.  
	
	<em>15th Annual SuperComputing Conference (SC 2002)</em>, November 2002<br>
	
	[<a href="#sc2002">Citation</a>,
	
	<a href="papers/sc2002.ppt">PPT</a>]</font></p>
	

        <p><font size="2"><strong><a name="UKglobus">Report of the UK Globus Week 

        Workshop 2005</a></strong>. Argonne National Laboratory Technical Memorandum 

        ANL/MCS-TM-291 and UK National e-Science Center Technical Report 

        UKeS-2005-06, August 2005.<br>

        [<a href="#UKglobus">Citation</a>,

         <a href="papers/UKglobus-v4.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong>Run-time Prediction of Parallel Applications on

    Shared Environments</strong>. B. Lee and J. Schopf. <em>Poster Paper,

    Proceedings of Cluster2003</em>, December 2003.

	<br>[<a href="papers/byoungdaiCluster03.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong>Small-World File-Sharing Communities</strong>. A.

    Iamnitchi, M. Ripeanu, and I. Foster. <em>INFOCOM 2004</em>, Hong Kong,

    March, 2004.<br>

    [<a href="papers/smallworld.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong>Cache Replacement Policies Revisited The The Case

    of P2P Traffic</strong>. A. Wierzbicki, N. Leibowitz, M. Ripeanu, and R.

    Wozniak. <em>4th GP2P Workshop</em>, Chicago, IL, April, 2004.<br>

    [<a href="papers/cachedreplacement.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong>Deconstructing the Kazaa Network</strong>. N.

    Leibowitz, M. Ripeanu, and A. Wierzbicki. <em>3rd IEEE Workshop on Internet

    Applications (WIAPP'03)</em>, June 23 - 24, 2003, San Jose, CA.<br>

    [<a href="papers/kazaa.pdf">PDF</a>]</font></p>



	<p><font size="2"><b>The Grid2003 Production Grid:&nbsp; Principles and

    Practice</b><br>

    I. Foster, J. Gieraltowski, S. Gose, N. Maltsev, E. May, A.<br>

    Rodriguez, D. Sulakhe, A. Vaniachine, J. Shank, S. Youssef,&nbsp;<br>

    D. Adams, R. Baker, W. Deng, J. Smith, D. Yu, I. Legrand, S. Singh, C. Steenberg, Y.

    Xia, A. Afaq, E. Berman, J. Annis, L.A.T. Bauerdick, M. Ernst, I. Fisk, L. Giacchetti, G. Graham, A. Heavey, J. Kaiser,<br>

    N. Kuropatkin, R. Pordes, V. Sekhri, J. Weigand, Y. Wu, K. Baker, L.

    Sorrillo, J. Huth, M. Allen, L. Grundhoefer, J. Hicks, F. Luehring, S. Peck,<br>

    R. Quick, S. Simms, G. Fekete, J. vandenBerg, K. Cho, K. Kwon, D. Son, H. Park,

    S. Canon, K. Jackson, D.E. Konerding, J. Lee, D. Olson, I. Sakrejda, B. Tierney,

    M. Green, R. Miller, J. Letts, T. Martin, D. Bury, C. Dumitrescu, D. Engh, R. Gardner,

    M. Mambelli, Y. Smirnov, J. Voeckler, M. Wilde, Y. Zhao, X. Zhao, P. Avery, R. Cavanaugh, B. Kim, C. Prescott, J.

    Rodriguez, A. Zahn, S. McKee, C. Jordan, J. Prewett, T. Thomas, H. Severini,

    B. Clifford, E. Deelman, L. Flon, C. Kesselman, G. Mehta, N. Olomu, K. Vahi,

    K. De, P. McGuigan, M. Sosebee, D. Bradley, P. Couvares, A. De Smet, C.

    Kireyev, E. Paulson, A. Roy, S. Koranda, B. Moe.&nbsp; <i>13th Proceedings

    of the International IEEE Symposium on High Performance Distributed

    Computing</i>, to appear June 2004.&nbsp;<br>

    [<a href="papers/HPDC13-Grid3-final.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="load-YFS03">Globus and PlanetLab</a>

    Resource Management Solutions Compared</strong>. M. Ripeanu, M. Bowman, J.

    Chase, I. Foster, and M. Milenkovic. 13th <em>Proceedings of the

    International IEEE Symposium on High Performance Distributed Computing</em>,

    to appear June 2004.

	<br>[<a href="papers/hpdc-13-ripeanu.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="load-YFS03">Homeostatic and Tendency-based CPU Load Predictions</a></strong>. 

	L. Yang, I. Foster, J. Schopf. 

	<em>Proceedings of IPDPS 2003</em>, April 2003.

	<br>[<a href="#load-YFS03">Citation</a>, <a href="papers/predictionCameraReady.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="resArray">Disk Resident Arrays: An

    Array-Oriented I/O Library for Out-of-Core Computations, Services for Distributed System Integration</a></b>.  I. Foster,

    J. Nieplocha. <em>High-Performance Mass Storage and Parallel I/O</em>,

    488-98, IEEE and Wiley Press, 2002.<br>

	[<a href="#resArray">Citation</a>]</font></p>



	<p><font size="2"><b><a name="compnw02">Grids and Research Networks as

    Drivers and Enablers of Future Internet Architectures</a></b>. K.

    Baxevanidis, H. Davies,  I. Foster, F. Gagliardi.

	<em>Computer Networks</em>, 2002.<br>

	[<a href="#compnw02">Citation</a>]</font></p>



	<p><font size="2"><strong><a name="gnutella.iptps">Mapping the Gnutella Network: Properties of Large-Scale Peer-to-Peer Systems and Implications for System Design</a></strong>. 

    M. Ripeanu, I. Foster and A. Iamnitchi. 

    <em>IEEE Internet Computing</em>, vol 6(1), January-February&nbsp; 2002.<br>

    [<a href="#Clouds3">Citation</a>, <a href="papers/gnutella.iptps.pdf">PDF</a>]</font></p>



	<p><font size="2"><strong><a name="gnutella.computing">Mapping the Gnutella

    Network: Macroscopic Properties of Large-Scale Peer-to-Peer Systems</a></strong>.

    M. Ripeanu, I. Foster. <em>1st International Workshop on Peer-to-Peer

    Systems (IPTPS'02))</em>, Cambridge, MA, March 2002.<br>

    [<a href="#gnutella.computing">Citation</a>, <a href="papers/gnutella.computing.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="ADASS">Grid

    Technologies &amp; Applications: Architecture &amp; Achievements</a></b>.&nbsp;

    I. Foster. <em>Intl Conference on Computing in High Energy and Nuclear

    Physics</em>, 2001 (reprinted in Astronomical Data Analysis Systems and

    Software (ADASS) 2002).<br>

	[<a href="#ADASS">Citation</a>]</font></p>



	<p><font size="2"><b><a name="GenComm">Generalized

    Communicators in the Message Passing Interface</a></b>. E. Demaine,  I.

    Foster, C. Kesselman, M. Snir. <em>IEEE Trans. Parallel and Distributed

    Systems</em>, 12(6):610-616, 2001.<br>

	[<a href="#GenComm">Citation</a>]</font></p>



	<p><font size="2"><strong><a name="gnutella.01">Peer-to-Peer Architecture

    Case Study: Gnutella</a></strong>. M. Ripeanu. <em>2001&nbsp; International

    Conference on Peer-to-Peer Computing (P2P2001)</em>, Linkoping, Sweeden,

    August 2001.<br>

    [<a href="#gnutella.01">Citation</a>, <a href="papers/gnutella.01.pdf">PDF</a>]</font></p>



	<p><font size="2"><b><a name="model-coupling">The

    Model Coupling Toolkit</a></b>. J. Larson, R. Jacob, I. Foster, J. Guo. <em>2001

    Intl Conference on Computational Science</em>, 2001.<br>

	[<a href="#model-coupling">Citation</a>]</font></p>



	<p><font size="2"><b><a name="emergence">The Emergence of the Grid</a></b>.  I.

      Foster. <em>Nature Yearbook of Science and Technolgy</em>, Nature

      Publishing Group, 2001.<br>

	[<a href="#emergence">Citation</a>]</font></p>



	<p><font size="2"><b><a name="Emerging">The Emerging Grid</a></b>.  I.

    Foster, C. Kesselman. <em>Computational Aerosciences in the 21st Century</em>,

    29-46, Kluwer Academic, 2000.<br>

	[<a href="Emerging">Citation</a>]</font></p>



	<p><font size="2"><b><a name="acat">Grid Computing</a></b>. 

	I. Foster. <em>Advance</em>, 51-56, 2000.<br>

	[<a href="#acat">Citation</a>]</font></p>



	<p><font size="2"><b><a name="FaultDet">A

    Fault Detection Service for Wide Area Distributed Computations</a></b>. P.

    Stelling, C. DeMatteis,  I. Foster, C. Kesselman, C. Lee, G. von Laszewski. <em>Cluster

    Computing</em>, 2:117-128, 1999.<br>

	[<a href="#FaultDet">Citation</a>,

    <a href="papers/stelling--hbm.pdf">PDF</a>,

    <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las98hpdc">

    bibtex</a>]</font></p>



	<p><font size="2"><strong><a name="FaultDet">The Beta </a>

	<a name="betagrid">Grid: A National Infrastructure for Computer Systems Research</a></strong>. I. Foster. 

	<em>Proc. 1999 Extreme Linux Workshop</em>, also published in <i>Proc. NetStore Conference,</i> 1999.<br>

	[<a href="#FaultDet">Citation</a>]</font></p>





<p> To download this list of citations or to submit a citation for inclusion here, visit our 

	<a href="bibliography.php">bibliography</a>.</p>



</div>



<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>

