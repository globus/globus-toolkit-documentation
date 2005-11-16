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

<p>These are the questions most commonly asked about Globus <em>in general</em>.</p>

<p>
This page does not cover details about the Globus Toolkit.  For details about the
Globus Toolkit, we recommend that you visit the 
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Globus Toolkit</a> section of our 
website and use the 
<a href="<?=$SITE_PATHS["WEB_ROOT"]."site_map.php"; ?>">Site Map</a> to help you find things.
</p>

<ol>
      <li><a href="#globus">What is Globus?</a></li>
      <li><a href="#grid">What is a Grid?</a></li>
      <li><a href="#grid2">What is <em>the</em> Grid?</a></li>
      <li><a href="#toolkit">What is the Globus Toolkit and what "tools" does it include?</a></li>
      <li><a href="#uses">How do you expect the Globus Toolkit to be used?</a></li>
      <li><a href="#using">Who is using the Globus Toolkit now?</a></li>
      <li><a href="#index">Is there a guide to terms and acronyms used on this site?</a></li>
      <li><a href="#involved">Who is involved in the Globus Alliance?</a></li>
      <li><a href="#problems">So have you solved all these problems?</a></li>
      <li><a href="#corba">Doesn't CORBA (<i>or:</i> DCOM, DCE, JINI, Web services) solve 
                           all these problems?</a></li>
      <li><a href="#condor">How does Globus compare to Condor?</a></li>
      <li><a href="#next">What are you planning to do next?</a></li>
      <li><a href="#obtain">How do I obtain the Globus Toolkit?</a></li>
      <li><a href="#windows">Is the Globus Toolkit available for Windows systems?</a></li>
      <li><a href="#more">How do I learn more about the Grid?</a></li>
      <li><a href="#support">Who supports Globus Alliance research and development?</a></li>
      <li><a href="#create">How do I create a Grid infrastructure?</a></li>
      <li><a href="#can_others_use">Once we have installed the Globus Toolkit's
        Grid Services, can anyone who has Grid
        clients on their machines use our machines without our knowledge?</a></li>
      <li><a href="#can_we_use">Can we use any machine that has the Globus
        Toolkit's Grid Services installed on it?</a></li>
      <li><a href="#globalgrid">Once I've installed the Globus Toolkit, how do others find out
    that my machine is available on the Grid, and how can I find out what other machines
    are on the Grid?</a></li>
</ol>

<p></p>

<hr>
<h2><a name="globus">What is Globus?</a></h2>

<p>The <b>Globus Alliance</b> is a community of organizations and individuals developing
fundamental technologies behind the Grid, which lets people share computing power,
databases, instruments, and other on-line tools securely across corporate, institutional, 
and geographic boundaries without sacrificing local autonomy.
<a class="learnmore" href="<?=$SITE_PATHS["WEB_ALLIANCE"]; ?>">Learn more...</a></p>

<p>The <b>Globus Toolkit</b> is an open source software toolkit used for building Grid 
systems and applications. It is being developed by the Globus Alliance and many others 
all over the world.  A growing number of projects and companies are using the Globus 
Toolkit to unlock the potential of grids for their cause. 
<a class="learnmore" href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Learn more...</a></p>

<ul>
      <li>e-Science and e-Business teams around the world are using the Globus Toolkit 
          to construct <i>Grid infrastructure</i> and to develop <i>Grid applications</i>.</li>
      <li>Globus Alliance <i>research</i> targets technical challenges that arise from these activities. Typical research areas include resource management, data management and access, application development environments, information services, and security. </li>
      <li>Globus Alliance <i>software development</i> has resulted in the Globus Toolkit, a set of services and software libraries to support Grids and Grid applications. The Toolkit includes software for security, information infrastructure, resource management, data management, communication, fault detection, and portability.</li>
</ul>

<p></p>

<hr>

<h2><a name="grid">What is a Grid?</a></h2>

<p>Ian Foster wrote an article to address this question. It is called 
   <a href="http://www-fp.mcs.anl.gov/~foster/Articles/WhatIsTheGrid.pdf">"What 
   is the Grid? A Three Point Checklist"</a>, and it is among the many overview
   papers available in the 
   <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/papers.php"; ?>">research 
   papers</a> section of this website. In this paper, Dr. Foster proposes 
   (and explains) the following definition.</p>

   <blockquote>A Grid is a system that coordinates resources that are not subject 
   to centralized control using standard, open, general-purpose protocols and 
   interfaces to deliver nontrivial qualities of service.</blockquote>

<p>Two other papers that provide more detail about Grid computing and Grid
   technology are 
    <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/papers.php#anatomy"; ?>">"The 
    Anatomy of the Grid"</a>, which defines Grid computing, proposes a Grid 
    architecture, and discusses relationships between Grid technologies and other 
    contemporary technologies; and 
    <a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/papers.php#OGSA"; ?>">"The 
    Physiology of the Grid"</a>, which describes how Grid mechanisms can implement 
    a service-oriented architecture, explains how Grid functionality can be incorporated 
    into a Web Services framework, and illustrates how this architecture can be applied 
    within commercial computing as a basis for distributed system integration.</p>

<p>If you're looking for a book on this topic, the book that defines the field is
    <cite><a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."publications/books/"; ?>">The 
    Grid 2: Blueprint for a New Computing Infrastructure</a></cite>, 
    edited by Ian Foster and Carl Kesselman, Morgan Kaufmann, 2nd edition, 2003.
    It includes chapters by noted experts that cover applications, tools, and 
    infrastructure.</p>

<hr>

<h2><a name="grid2">What is <em>the</em> Grid?</a></h2>

 <p>The idea of <em>the</em> Grid looks forward to a time when the mechanisms for
    building Grids and Grid applications has standardized sufficiently that everyone is
    doing it the same way and it is taken for granted that Grid mechanisms are
    available for just about any kind of computing system or service. We imagine that
    when Grid mechanisms are ubiquitous, we will refer to the set of all Grid-accessible
    resources and services as "the Grid," in the same way that we already refer to the
    set of all Web-accessible resources as "the Web."</p>

 <p>A key difference between today's Grids and the Grid of the future is that today,
    Grid application developers typically need to spend considerable time building the 
    Grid on which their application(s) will run, and Grid builders spend considerable
    time determining whether or not their Grid is interoperable with other Grids and how
    to make it so if it isn't already. We'll be able to say that we've arrived at 
    <em>the</em> Grid when these issues are no longer common.</p>

<hr>

<h2><a name="toolkit">What is the Globus Toolkit and what "tools" does it include?</a></h2>

<p>For a "big picture" answer to this question that addresses how the Globus
Toolkit fits into the Globus Alliance's strategy for realizing the Grid vision,
see  <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."role-of-gt.php"; ?>">"The Role of the 
Globus Toolkit in the Grid Ecosystem"</a>, available in the Grid Software 
section of this website.</p>

<p>A more concrete answer is found on the page 
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."about.html"; ?>">"About the Globus Toolkit"</a> 
in the Globus Toolkit section of this website.</p>

<hr>

<h2><a name="uses">How do you expect the Globus Toolkit to be used?</a></h2>

<p>
The Globus Toolkit is intended to be used by Grid architects, system integrators,
and Grid application developers to reduce the amount of work required to meet
their goals and to ensure a basic level of interoperability between Grid
systems and applications. It is not likely that most scientists or business people
will be able to use the Globus Toolkit directly.  Instead, application developers
and system engineers will use the Globus Toolkit to construct Grids and Grid
applications that scientists and business people can use.
</p>

<p>
Many Grid applications and Grid application development environments have already
been built using the Globus Toolkit. Some of these are intended to be reused, so
it may not even be necessary for application developers to use the Toolkit directly.
The <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]; ?>">Grid Software</a> section of this 
website provides an inventory of software tools that have already proven their 
usefulness in Grid applications and systems. The 
<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Grid Solutions</a> section provides 
details on how some science projects actually used Globus Toolkit components to 
overcome significant challenges in their work.
</p>

<p>For more detail, see <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."role-of-gt.php"; ?>">"The 
Role of the Globus Toolkit in the Grid Ecosystem"</a>, available in the Grid Software
section of this website. Pay special attention to the sections titled "Standard Plumbing for the Grid" and "How to Use the Globus Toolkit".</p>


<hr>

<h2><a name="using">Who is using the Globus Toolkit now?</a></h2>

<p>The Globus Toolkit is being used in a wide variety of e-Science and e-Business
applications and infrastructure efforts. The Globus Alliance section of the website has a 
<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."projects.php"; ?>">list of projects</a> 
in which Globus Alliance members participate directly. 
The <a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Grid Solutions</a> section 
provides several detailed examples of how the Globus Toolkit is being used in 
specific projects.  We also provide examples of the
<a href="<?=$SITE_PATHS["WEB_ALLIANCE"]."impact/"; ?>">impact that the Globus 
Alliance is having on science</a>. Two examples are provided below to give a sense
of what you will find on the pages mentioned above.</p>

<table>
<tr>
<td><?php include($SITE_PATHS["SERV_ALLIANCE"]."impact/isabel.inc"); ?></td>
<td><?php include($SITE_PATHS["SERV_ALLIANCE"]."impact/ag-fusion.inc"); ?></td>
</tr>
</table>

<hr>

<h2><a name="index">Is there a guide to terms and acronyms used on this site?</a></h2>

<p>Yes, there is!  A list of major terminology and acronyms used on the Globus 
   Alliance website is available
    <a href="site_index.php">here</a>.</p>

<hr>

<h2><a name="involved">Who is involved in the Globus Alliance?</a></h2>

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


<h2><a name="problems">So have you solved all the problems?</a></h2>

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

<p></p>

<hr>

<h2><a name="condor">How does Globus compare to Condor?</a></h2>

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

<h2><a name="corba">Doesn't CORBA solve all these problems?</a></h2>

<p>The Common Object Request Broker Architecture (CORBA) defines a standard Interface
    Definition Language (IDL) for inter-language interoperability, a remote procedure call
    service, and a variety of more specialized services such as a trader (for resource
    location). Like Java, CORBA provides important software engineering advantages, but it
    doesn&#8217;t directly address the challenges that arise in Grid environments such as
    specialized devices and the high performance required by many Grid applications. Again,
    Grid and CORBA technologies are complementary, not competing. We are working with several
    groups to develop CORBA/Globus interfaces.</p>

<hr>

<h2><a name="next">What are you planning to do next?</a></h2>
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

<p></p>

<hr>

<h2><a name="obtain">How do I obtain the Globus Toolkit? </a></h2>

<p>The Globus Toolkit is available from 
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">http://www.globus.org/toolkit/</a>.
We distribute source code under an open source license that allows the 
software to be used and redistributed quite freely. Starting with the Globus 
Toolkit 2.0, we also distribute binary versions for popular platforms.</p>

<hr>

<h2><a name="windows">Is the Globus Toolkit available for Windows systems?</a></h2>

<p>There are several ways that you can use Grid services from Windows systems
    Windows systems or run Grid services on Windows systems.</p>  

<ul>
    <li>The Globus Toolkit's Java WS Core implementation, which provides a WSRF development
        environment, can be used on Windows systems with the JDK (Java development kit)
        installed.</li>
    <li>The Java CoG Kit (<a href="http://www.cogkit.org">http://www.cogkit.org</a>) 
        provides access to Grid services via the Java programming language, which of 
        course is available on Windows systems.</li>
    <li><a href="http://www.cs.virginia.edu/~gsw2c/wsrf.net.html">WSRF.NET</a> is a 
        .NET implementation of WSRF. It is available from the University of Virginia.</li>
</ul>

<p></p>

    <hr>
    
<h2><a name="more">How do I learn more about the Grid? </a></h2>

<p>Visit the Globus Alliance web site at 
<a href="http://www.globus.org/">http://www.globus.org/</a>,
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


<h2><a name="support">Who supports Globus Alliance research and development? </a></h2>

<p>Globus Alliance achievements have been made possible by the farsighted and 
much-appreciated support of 
the U.S. Department of Energy (via the DOE2000, Clipper, ASCI, NGI, and SciDAC programs), 
the National Science Foundation (via several programs including the NSF Middleware 
Initiative), 
NASA (the Information Power Grid program), 
DARPA (the Quorum program), 
IBM, and Microsoft.</p>

<hr>

    <h2><a name="create">How do I create a Grid infrastructure? </a></h2>
    <p>To build a Grid, we recommend that you download the Globus Toolkit and follow the
    instructions in the Globus Toolkit System Administrator's Guide. Both of these are
    available at the Globus website, <a href="http://www.globus.org/toolkit/">http://www.globus.org/toolkit/</a>.
    The documentation will take you through the process of building the Globus Toolkit
    software, setting up a Grid information service, setting up a certificate authority or
    using someone else's, installing the Globus resource management tools on your servers, and
    installing Globus client tools and libraries for your users.</p>

    <hr>

<h2><a name="can_others_use">Once we've installed the Globus Toolkit's
    Grid Services, can anyone who has Grid clients on their machines use our machines without our knowledge? </a></h2>
    <p>Each site within a Grid retains control over access to its resources. When Globus
    Toolkit services are installed on a resource, the site administrator creates a Grid
    "mapfile", which contains mappings from Grid credentials to local account names.
    The only people who can submit jobs to your resources are those whose Grid credentials are
    mapped to a valid local account. All job submissions are logged via syslog and an optional
    gatekeeper log, so you can easily determine who has attempted to use your system.</p>

    <hr>

    <h2><a name="can_we_use">Can we use any machine which has the Globus
    Toolkit's Grid Services installed on it?</a></h2>
    <p>To use resources at other sites, you'll need to have your Grid credential added to
    the Grid mapfile(s) at that site. The administrators at those sites will map your Grid
    credential to a local account so that you can use their resources. Acquiring permission to
    use another site and requesting an entry in the site's mapfile is the responsibility of
    the user. If you already have access to a site via Grid technologies, you should have
    received information on how to use the site's resources. If not, contact the site
    administrator.</p>
    
    
    <hr>
    
    <h2><a name="globalgrid">Once I've installed the Globus Toolkit, how do others find out
    that my machine is available on the Grid, and how can I find out what other machines
    are on the Grid?</a></h2>
    
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

   
</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>


