<?php

$title = "Globus: Frequently Asked Questions";

$section = "section-2";
include_once( "include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>
</div>
-->

<div id="main">
<!-- content STARTS here -->

<h1>Frequently Asked Questions About Globus</h1>

<p>These are the questions most commonly asked about Globus <em>in general</em>. We also
maintain a Globus Toolkit FAQ for questions specifically about the Globus Toolkit.</p>

<ol>
<li><a href="#globus">What is Globus?</a></li>
      <li><a href="#grid">What is "the Grid?"</a></li>
      <li><a href="#care">Why should I care about this stuff?</a></li>
      <li><a href="#index">Is there a guide to terms and acronyms used on this site?</a></li>
      <li><a href="#toolkit">What's in the Globus Toolkit?</a></li>
      <li><a href="#work">Isn't it a lot of work to use the Grid in my application?</a></li>
      <li><a href="#using">Who else is using the Globus Toolkit?</a></li>
      <li><a href="#involved">Who is involved in the Globus Alliance?</a></li>
      <li><a href="#success">What success have you had to date?</a></li>
      <li><a href="#problems">So have you solved all these problems?</a></li>
      <li><a href="#condor">How does Globus compare to Condor?</a></li>
      <li><a href="#legion">How does Globus compare to Legion?</a></li>
      <li><a href="#java">Don't Java and JINI solve all these problems?</a></li>
      <li><a href="#corba">Doesn't CORBA solve all these problems?</a></li>
      <li><a href="#dcom">Doesn't DCOM solve all these problems? (or: What are you doing about
        NT?)</a></li>
      <li><a href="#next">What are you planning to do next?</a></li>
      <li><a href="#obtain">How do I obtain the Globus Toolkit?</a></li>
      <li><a href="#windows">Is the Globus Toolkit available for Windows systems?</a></li>
      <li><a href="#more">How do I learn more about the Grid?</a></li>
      <li><a href="#support">Who supports Globus Alliance research and development?</a></li>
      <li><a href="#create">How do I create a Grid infrastructure?</a></li>
      <li><a href="#can_others_use">Once we have installed the Globus Toolkit's
        Grid Services, can anyone who has Grid
        clients on their machines use our machines without our knowledge?</a></li>
      <li><a href="#can_we_use">Can we use any machine which has the Globus
        Toolkit's Grid Services installed on it?</a></li>
      <li><a href="#globalgrid">Once I've installed the Globus Toolkit, how do others find out
    that my machine is available on the Grid, and how can I find out what other machines
    are on the Grid?</a></li>
</ol>


<hr>
<p><b><a name="globus">What is Globus?</a></b></p>

<p>The Globus Alliance is a research and development project focused on 
enabling the application of Grid concepts to scientific and engineering 
computing. (See below for an explanation of the Grid.)</p>

<ul>
      <li>Groups around the world are using the Globus Toolkit to build <i>Grids</i> and to develop <i>Grid applications</i>. </li>
      <li><i>Globus Alliance research</i> targets technical challenges that arise from these activities. Typical research areas include resource management, data management and access, application development environments, information services, and security. </li>
      <li><i>Globus Alliance software development</i> has resulted in the Globus Toolkit, a set of services and software libraries to support Grids and Grid applications. The Toolkit includes software for security, information infrastructure, resource management, data management, communication, fault detection, and portability.</li>
</ul>

<hr>

<p><b><a name="grid">What is the Grid?</a></b></p>

<p>The Grid refers to an infrastructure that enables the integrated, collaborative use of
    high-end computers, networks, databases, and scientific instruments owned and managed by
    multiple organizations. Grid applications often involve large amounts of data and/or
    computing and often require secure resource sharing across organizational boundaries, and
    are thus not easily handled by today&#8217;s Internet and Web infrastructures. </p>

<p>Two papers that provide overviews of Grid computing are <i><a href="http://www-unix.globus.org/r3/alliance/activities/publications.php#anatomy"> Anatomy of the Grid</a></i>,
    which defines Grid computing, proposes a Grid architecture, and 
    discusses relationships between Grid technologies and other contemporary
    technologies; and <i><a href="http://www-unix.globus.org/r3/alliance/activities/publications.php#OGSA"> Physiology of the Grid</a></i>,
    which describes how Grid mechanisms can implement a service-oriented 
    architecture, explains how Grid
    functionality can be incorporated into a Web Services framework,
    and illustrates how this architecture can be applied within
    commercial computing as a basis for distributed system
    integration.</p>

<p>An older but more extensive reference is the book <i><a href="http://%20www.mkp.com/grids/">The Grid: Blueprint for a New Computing
    Infrastructure</a></i>, I. Foster and C.
    Kesselman (Eds), Morgan Kaufmann, 1999.
    Its 22 chapters by noted experts cover applications, tools, and infrastructure.</p>

<hr>

<p><b><a name="care">Why should I care about this stuff?</a></b></p>

<p>Here are five examples of the new applications enabled by Grid environments:</p>

<ul>
      <li>"Smart instruments": Advanced scientific instruments, such as electron
      microscopes, particle accelerators, and wind tunnels, coupled with remote supercomputers,
        users, and databases, to enable interactive rather than batch use, online comparisons with
        previous runs, and collaborative data analysis.</li>
      <li>"Teraflop desktops": Chemical modeling, symbolic algebra, and other packages
        that transfer computationally intensive operations to more capable remote resources. </li>
      <li>"Collaborative engineering" (aka teleimmersion): High-bandwidth access to
        shared virtual spaces that support interactive manipulation of shared datasets and
        steering of sophisticated simulations, for collaborative design of complex systems.</li>
      <li>"Distributed supercomputing": Ultra-large virtual supercomputers constructed
        to solve problems too large to fit on any single computer.</li>
      <li>"Parameter studies": Rapid, large-scale parametric studies, in which a single
        program is run many times in order to explore a multidimensional parameter space.</li>
</ul>

<hr>

<p><b><a name="index">Is there a guide to terms and acronyms used on this site?</a></b></p>

<p>Yes, there is!  A list of major terminology and acronyms used on the Globus 
   Alliance website is available
    <a href="site_index.php">here</a>.</p>

<hr>

<p><b><a name="toolkit">What's in the Globus Toolkit?</a></b> </p>

<p>The Toolkit is first and foremost a &#8220;bag of services,&#8221; a set of useful
    components that can be used either independently or together to develop useful grid
    applications and programming tools.</p>

<ul>
 <li>The <i>Globus Resource Allocation Manager (GRAM)</i> provides resource allocation and
        process creation, monitoring, and management services. GRAM implementations map requests
        expressed in a Resource Specification Language (RSL) into commands to local schedulers and
        computers. </li>
      <li>The <i>Grid Security Infrastructure (GSI)</i> provides a single-sign-on, run-anywhere
        authentication service, with support for local control over access rights and mapping from
        global to local user identities. Smartcard support increases credential security. </li>
      <li>The Monitoring and Discovery Service (MDS)</i> is an extensible Grid information
        service that combines data discovery mechanisms with the Lightweight Directory Access
        Protocol (LDAP). MDS provides a uniform framework for providing and accessing system
        configuration and status information such as compute server configuration, network status,
        or the locations of replicated datasets. </li>
      <li><em>Global Access to Secondary Storage (GASS)</em> implements a variety of automatic and
        programmer-managed data movement and data access strategies, enabling programs running at
        remote locations to read and write local data. </li>
      <li><em>Nexus</em> and <em>globus_io</em> provide communication services for heterogeneous
        environments, supporting multimethod communication, multithreading, and single-sided
        operations. </li>
      <li>The <em>Heartbeat Monitor (HBM)</em> allows system administrators or ordinary users to
        detect failure of system components or application processes. </li>
</ul>

<p>For each component, an application programmer interface (API) written in the C
    programming language is provided for use by software developers. Command line tools are
    also provided for most components, and Java classes are provided for the most important
    ones. Some APIs make use of Globus servers running on computing resources.
</p>


<p>In addition to these core services, the Globus Alliance has developed prototypes of higher-level components (resource brokers, resource co-allocators) and services.</p>

<p>Finally, a large number of individuals, organizations, and projects have developed
    higher-level services, application frameworks, and scientific/engineering applications
    using the Globus Toolkit. For example, the Condor-G software provides an excellent
    framework for high-throughput computing (e.g., parameter studies) using the Globus Toolkit
    for inter-organizational resource management, data movement, and security.
</p>

<hr>

<p><b><a name="work">Isn't it a lot of work to use the Grid in my application?
</a></b> </p>

<p>Not necessarily. Some applications can run with no modification at all, simply by
    linking with a Grid-enabled version of an appropriate programming library. For example,
    astrophyicists at the Max Planck Institute in Potsdam recently performed a simulation of
    two colliding black holes on Cray T3E supercomputers in Germany and California by running
    a standard Message Passing Interface (MPI) code over MPICH-G, a grid-enabled MPI
    implementation.</p>

<p><img src="images/faq1.gif" height="145" width="119"></p>

<p>Even when appropriate high-level tools are not available, an important (and popular!)
    feature of the Globus toolkit is that Globus capabilities can often be incorporated into
    an existing application <i>incrementally</i>, producing a series of increasingly
    "grid-enabled" versions. For example, a grid-enabled <i>distributed interactive
    simulation</i> application, SF-Express, was developed at Caltech as follows:
 
<ul>
<li>They used resource management services to simplify program startup on multiple computers, avoiding separate logins and scheduler commands to each system.</li>
      <li>They then introduced a Globus library called DUROC to coordinate program startup across multiple sites, addressing certain fault detection and recovery strategies.</li>
      <li>They then used Globus data access services to stage executables and configuration files to the remote systems, and to direct output streams to the originating location.</li>
</ul>

<hr>

<p><b><a name="using">Who is using the Globus Toolkit?</a></b> </p>

<p>Globus users fall into three principal classes: application framework 
developers, application developers, and Grid builders.</p>

<p><em>Application framework developers</em> are using Globus 
services to build software frameworks that facilitate the development
 and execution of specific types of applications. Examples include 
the CAVERNsoft framework for tele-immersive applications (University
 of Illinois at Chicago Electronic Visualization Laboratory), 
Condor-G for high-throughput computations and parameter studies 
(University of Wisconsin), the HotPage Grid portal framework 
(San Diego Supercomputer Center), the Linear Systems Analyzer 
(Indiana U.), the MPICH-G implementation of the MPI Message Passing 
Interface (Northern Illinois University and Argonne National 
Laboratory), Nimrod-G for parameter studies (Monash University), the 
Parallel Application WorkSpace (PAWS: Los Alamos National Lab), and 
WebFlow (Syracuse University).</p>


<p><i>Application developers</i> use Globus services to construct 
innovative Grid-based applications, either directly or via 
Grid-enabled tools. Application classes include remote supercomputing
 (e.g., astrophysics at Max Planck Institute, Wash U.),
 tele-immersion (e.g., NICE at EVL/U. Illinois at Chicago), 
distributed supercomputing (e.g., OVERFLOW at NASA Ames, SF-Express 
at Caltech), and supercomputer-enhanced scientific instruments 
(e.g., Advanced Photon Source, Argonne).</p>

<p><img src="images/faq2.jpg" height="291" width="480"></font></p>

<p align="center"><b>Key sites involved in the NSF PACI Grid.</b> 
</p>

<p><i>Grid builders</i> are using Globus services to create 
production Grid computing environments. Major Grid construction 
projects include NASA&#8217;s Information Power Grid, two NSF Grid 
projects (NCSA Alliance&#8217;s Virtual Machine Room and NPACI), the 
European DataGrid Project, and the ASCI Distributed Resource 
Management project.</p>

<hr>

<p><b><a name="involved">Who is involved in the Globus 
Alliance?</a></b> </p>

<p>The Globus Alliance is a partnership of Argonne National 
Laboratory&#8217;s Mathematics and Computer Science Division, the 
University of Southern California&#8217;s Information Sciences 
Institute, the University of Chicago's Distributed Systems
Laboratory, the University of Edinburgh in Scotland, and 
the Swedish Center for Parallel Computers.</p>

<p> The alliance also involves many other people and institutions, 
whether via direct contributions to the toolkit, collaborations on 
tools and applications, or resource contributions.</p>


<p> Major partners in the public sector currently include the 
National Computational Science Alliance, the NASA Information 
Power Grid project, the National Partnership for Advanced
Computational Infrastructure, the University of Chicago, and the 
University of Wisconsin. </p>


<p> Major corporate partners currently include IBM and Microsoft.</p>

<hr>

<p><b><a name="success">What success have you had to date?</a></b></p>


<p>The Globus project started in 1996 and we have had significant 
successes every year since then. For example: </p>
<ul>
<li>The SF-Express distributed interactive simulation application 
used Globus services to couple 13 supercomputers at 10 sites, and 
hence to achieve a record setting 100,000 vehicle simulation in 
early 1997. This goal was initially targeted for 2002. </li>
<li>Major tools projects (including CAVERNsoft, MPICH-G2) </li>
<li>Numerous corporate technology providers, including IBM,
Microsoft, Cray, Compaq, Sun Microsystems, SGI, Entropia,
 Platform Computing, NEC, Veridian, Fujitsu, and Hitachi,
have publicly announced their support for the Globus Toolkit as an 
open standard for Grid computing, and have launched their own 
initiatives to contribute to the Grid.</li>
</ul>


<hr>

<p><b><a name="problems">So have you solved all the problems?</a></b> </p>

<p>Certainly not! The Globus services that have been developed to 
date help users overcome some of the barriers to Grid computing. 
However, many challenging problems remain to be overcome before we 
can say that we have a fully functional Grid. Among the major research
challenges that others and we are addressing in current work are:</p>

<ul>
      <li>End-to-end resource management and adaptation techniques able to provide application-level performance guarantees despite dynamic resource properties. </li>
      <li>Automated techniques for negotiation of resource usage, policy, and accounting in
        large-scale grid environments. </li>
      <li>High-performance communication methods and protocols. </li>
      <li>Infrastructure and tool support for data-intensive applications, advance teleimmersion
        concepts, and new problem solving environment techniques.</li>
</ul>

<hr><p><b><a name="condor">How does Globus compare to Condor?</a></b>
</p>

<p>Condor (<a href="http://www.cs.wisc.edu/condor">
http://www.cs.wisc.edu/condor</a>) is a tool for harnessing the 
capacity of idle workstations for computational tasks. Condor is
well-suited for parameter studies and high throughput computing, 
where subjobs generally do not need to communicate with each other. 
</p>

<p>Condor and Globus are complementary technologies, as demonstrated by
    Condor-G, a Globus-enabled version of Condor that uses Globus to handle
    inter-organizational problems like security, resource management for supercomputers, and
    executable staging. Condor can be used to submit jobs to systems managed by Globus, and
    Globus tools can be used to submit jobs to systems managed by Condor. The Condor and
    Globus teams work closely with each other to ensure that the Globus Toolkit and Condor
    software fit well together.</p>

<hr>

<p><b><a name="legion">How does Globus compare to Legion?</a></b></p>
    
<p>Legion (<a href="http://www.cs.virginia.edu/%7Elegion">http://www.cs.virginia.edu/~legion</a>)
    is developing an object-oriented framework for grid applications. The goal of the Legion
    project is to promote the principled design of distributed system software by providing
    standard object representations for processors, data systems, etc. Legion applications are
    developed in terms of these standard objects. </p>
<p>The two technologies are in some respects complementary: Globus focuses
    on low-level services and Legion on higher-level programming models. There are also
    significant areas of overlap. It may be useful to note that the Globus Toolkit is being
    used as the basis for numerous production Grid environments (from modest collaborative
    research projects to huge international scientific ventures), whereas Legion's community
    of users is smaller and more focused.
</p>

<hr>

<p><b><a name="java">Don't Java and JINI solve all these problems?</a></b></p>
    
<p>Java provides useful technology for portable, object-oriented application development,
    but it does not address many of the hard problems that arise when we try to achieve
    high-performance execution in heterogeneous distributed environments. For example, Java
    doesn&#8217;t help us run programs on different types of supercomputers, discover the
    policy elements that apply at a particular site, achieve single sign-on authentication,
    perform high-speed transfer across wide area networks, etc. The Globus toolkit addresses
    some of these concerns, and uses Java to provide portable clients. </p>

    <hr>

<p><b><a name="corba">Doesn't CORBA solve all these problems?</a></b> </p>

<p>The Common Object Request Broker Architecture (CORBA) defines a standard Interface
    Definition Language (IDL) for inter-language interoperability, a remote procedure call
    service, and a variety of more specialized services such as a trader (for resource
    location). Like Java, CORBA provides important software engineering advantages, but it
    doesn&#8217;t directly address the challenges that arise in Grid environments such as
    specialized devices and the high performance required by many Grid applications. Again,
    Grid and CORBA technologies are complementary, not competing. We are working with several
    groups to develop CORBA/Globus interfaces.</p>

    <hr>

<p><b><a name="dcom">Doesn't DCOM solve all these problems? (or, What are you doing about
    NT?) </a></b></p>
    <p>Microsoft&#8217;s Distributed Component Object Model (DCOM) provides a variety of
    services, including remote procedure call, directory service, and distributed file system.
    Again, these services are useful but don&#8217;t address issues of heterogeneity or
    performance directly. </p>

<p>We are working with Microsoft to develop a Windows
 distribution of the Globus Toolkit (see <a href="#windows">below</a> for
      more about this), and we are also working with Microsoft to determine how
      Microsoft's .NET initiative relates to the Grid. </font></p>

<p>Our Java client programs can be used on Windows NT, of course. Grid portals such as
    SDSC's HotPage have been designed with Windows clients in mind. Windows NT systems can be
    harnessed as Grid compute resources using Condor-G. Most importantly, the protocols that
    we have proposed for Grids (LDAP, HTTP, FTP) are already widely available on Windows NT,
    and Microsoft is integrating these technologies into the Windows operating system and
    application development environments. </p>

<hr>

<p><b><a name="next">What are you planning to do next? </a></b>
</p>

<p>We have ambitious goals for the next couple of years; highlights 
include the following:</p>
<ul>
     <li>Designing and developing new technologies to support data grids, distributed
        infrastructures for managing and providing high-performance access to large amounts of
        data (terabytes or petabytes). </li>
      <li>Supporting the ongoing construction of Grid infrastructures spanning leading
        supercomputer centers, data centers, and scientific organizations and learning from these
        experiences. </li>
      <li>Developing an enhanced resource management infrastructure that supports end-to-end
        performance management and fault tolerance via network scheduling, advance reservations,
        and policy-based authorization. </li>
      <li>Investigating new application programming models, tools, frameworks, and algorithms for
        Grid computing.</li>
</ul>

<hr>

<p>
<b><a name="obtain">How do I obtain the Globus Toolkit? </a></b></p>

<p>The Globus Toolkit is available from <http:>
<a href="http://www-unix.globus.org/toolkit/staging">
http://www-unix.globus.org/toolkit/staging</a>.
We distribute source code under an open source license that allows the software to be used
    and redistributed quite freely. Starting with the Globus Toolkit 2.0, we also distribute binary versions for
    popular platforms.</http:></p>

<hr>

<p><b><a name="windows">Is the Globus Toolkit available for Windows systems?</a></b></p>

<p>During 2002, we are developing a port of the Globus Toolkit to the
 Windows XP/2000 platform. Some components (globus_common, globus_io)
have been released to very early test users, but the code is not yet stable enough for general release.

<p>In the meantime, there are several ways that you may still use Grid resources from 
    Windows systems or turn Windows systems into Grid resources.</p>  

<ul>
    <li>The Java CoG Kit (<a href="http://www.cogkit.org">http://www.cogkit.org</a>) provides access to Grid 
    services via the Java programming language, which of course is available 
    on Windows systems.  

    </li><li>A Java-based GRAM service is currently being developed, and may be 
    available as a prototype.  (The GRAM service allows computers and 
    other computational resources to be allocated via Grid protocols.)  
    Contact Gregor von Laszewski (<a href="mailto:gregor@mcs.anl.gov">gregor@mcs.anl.gov</a>) for details.  
 
    </li><li>The Condor software from the Condor Project at the University of 
    Wisconsin (<a href="http://www.cs.wisc.edu/condor/">http://www.cs.wisc.edu/condor/</a>)
      provides job management services that allow you to submit 
    jobs to a local service that then submits your jobs to remote 
    resources for execution.  Condor can use Grid resources to execute 
    these jobs.  Condor is available for Windows.
    </li></ul>
    
    <hr>
    
<p><b><a name="more">How do I learn more about the Grid? </a></b></p>

<p>Visit the Globus Alliance web site at 
<a href="http://www-unix.globus.org/">http://www-unix.globus.org/</a>,
where you will find technical documentation, research papers, 
software, and overviews of Globus Toolkit components. The website 
offers a set of community mailing lists that you can participate in, 
and a problem resolution form for obtaining help from the Globus 
Toolkit developers. Watch the website for information about upcoming 
tutorials and workshops where you can learn about the Grid. Our 
annual 
<a href="http://www.globusworld.org/">GlobusWORLD</a> conference
is a great place to meet other Globus Toolkit users and developers and to share your experiences with Grid technologies.</p>

<hr>


<p><b><a name="support">Who supports Globus Alliance research and development? </a></b></p>

<p>Globus Alliance achievements are made possible by the farsighted 
and much-appreciated support of DARPA (through its Quorum program), 
the U.S. Department of Energy (via the DOE2000, Clipper, ASCI, NGI, 
and SciDAC programs), NASA (the Information Power Grid program), the 
National Science Foundation, IBM, and Microsoft.</p>

<hr>
    <p><b><a name="create">How do I create a Grid infrastructure? </a></b></p>
    <p>To build a Grid, we recommend that you download the Globus Toolkit and follow the
    instructions in the Globus Toolkit System Administrator's Guide. Both of these are
    available at the Globus website, <a href="http://www.globus.org/toolkit/">http://www.globus.org/toolkit/</a>.
    The documentation will take you through the process of building the Globus Toolkit
    software, setting up a Grid information service, setting up a certificate authority or
    using someone else's, installing the Globus resource management tools on your servers, and
    installing Globus client tools and libraries for your users.</p>

    <hr>

<p><b><a name="can_others_use">Once we've installed the Globus Toolkit's
    Grid Services, can anyone who has Grid clients on their machines use our machines without our knowledge? </a></b></p>
    <p>Each site within a Grid retains control over access to its resources. When Globus
    Toolkit services are installed on a resource, the site administrator creates a Grid
    "mapfile", which contains mappings from Grid credentials to local account names.
    The only people who can submit jobs to your resources are those whose Grid credentials are
    mapped to a valid local account. All job submissions are logged via syslog and an optional
    gatekeeper log, so you can easily determine who has attempted to use your system.</p>

    <hr>

    <p><b><a name="can_we_use">Can we use any machine which has the Globus
    Toolkit's Grid Services installed on it?</a></b></p>
    <p>To use resources at other sites, you&#8217;ll need to have your Grid credential added to
    the Grid mapfile(s) at that site. The administrators at those sites will map your Grid
    credential to a local account so that you can use their resources. Acquiring permission to
    use another site and requesting an entry in the site's mapfile is the responsibility of
    the user. If you already have access to a site via Grid technologies, you should have
    received information on how to use the site&#8217;s resources. If not, contact the site
    administrator.</p>
    
    
    <hr>
    
    <p><b><a name="globalgrid">Once I've installed the Globus Toolkit, how do others find out
    that my machine is available on the Grid, and how can I find out what other machines
    are on the Grid?</a></b></p>
    
<p>This question indicates that you are under the impression that there 
is a single well-connected Grid, in the same sense that there is a single 
well-connected Internet.</p>

<p>Today, the Grid exists as a number of groups who are building experimental and 
production grid infrastructures for their own purposes. These groups are 
called "virtual organizations" because they are groups of organizations that 
are using the Grid to share resources for specific purposes. Examples of 
these virtual organizations (or "VOs") are the EU DataGrid, the NASA 
Information Power Grid, the NSF Alliance and NPACI Technology Grids, the 
International Virtual Data Grid (iVDGL), the NSF TeraGrid, and the 
Asia-Pacific Grid (apGrid). These virtual organizations are all using the 
same Grid technology to build their infrastructures, so they could--in 
theory--all interoperate as "the Grid" the same way that all of the web and
email servers interoperate as "the Internet".</p>

<p>Each VO has its own directory service which participating systems register 
with so that others may discover them. This is supported by the Globus 
Toolkit's <!--<a href="http://www.globus.org/mds/"> MDS</a>--> MDS (Monitoring and Discovery Service). Specifically, a Grid Index 
Information Service (GIIS)may be installed and run on one or more systems. 
Once a GIIS is running, the Grid Resource Information Services (GRISes) 
running on each system in the VO can be configured to register with the GIIS 
so that people (or applications) can search the GIIS for participating systems 
and query their configuration data.</p>

<p>So far, the existing VOs are largely independent and aren't "linked together" 
for shared use yet. Specifically, there is no universal GIIS (or "root" GIIS) 
that one can search to find all of the VOs and their resources. You can start 
your own GIIS for registering your own resources and then tell others where 
your GIIS is so they can query it, or you can contact any of the existing VOs 
to ask where their GIIS is and whether you may register your machines in their 
GIIS or not. You'll have to find out about the existence of these VOs through 
some other mechanism, though.</p>

    <p>ISI runs a <!-- <a href="http://www.globus.org/mds/getmdsdata/vo-index.html"> public GIIS</a>--> public GIIS that allows anyone to register their resources or 
GIISes. It is not used by many people, but it is available for anyone to use. 
A web-based browser 
interface is available there which you can use to browse the contents of the 
public GIIS. You'll note that there are a few VOs listed (CGT, ANL-DG, 
NEESgrid, iVDGL, NMI) as well as a "Guest" VO for everyone else. Further 
browsing will reveal the host systems that are listed in these VOs and details 
about the configuration of those hosts. This will give you a feel for how MDS 
works and what it would be like to have your own VO. It should also reinforce 
for you that without a "universal GIIS" that everyone registers with, today's 
Grid is still quite "loosely" connected.</p>

   
</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>


