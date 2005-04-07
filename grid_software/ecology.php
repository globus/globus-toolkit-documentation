<?
$title = "Grid Ecosystem - An \"Ecosystem\" of Grid Components";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<!--
<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">An "Ecosystem" of Grid Components</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#vision">Our Vision of the Grid</a></li>
<li><a href="#methodology">The Methodology of the Grid</a></li>
<li><a href="#healthy">A Healthy Grid Ecosystem</a></li>
<li><a href="#architecture">Grid Architecture in a Nutshell</a></li>
<li><a href="#applications">Developing a Grid System or Application</a></li>
</ol>
    
<p><strong><a name="vision" class="title">Our Vision of the Grid</a></strong><p>

<p>In the early 90s, a number of computer scientists
<?php if ($SITE_CONTENT["GLOBUS"]) { ?>
(including several of the Globus Alliance leaders)
<?php } ?> 
<?php if ($SITE_CONTENT["GRIDS"]) { ?>
(including several of the current GRIDS Center leaders)
<?php } ?> 
found that they enjoyed helping scientists apply 
distributed computing to ambitious projects that pushed the limits of what 
could be done with conventional computing technology. Their motivations were a 
mixture of personal, professional, and financial. One important professional 
motivation was the recognition that the process of using technology to support 
applications in other fields almost always uncovers new and interesting 
requirements and challenges for the technology. The prospect of supporting 
scientific teams was sure to uncover a wide variety of issues that would never 
arise in the computer science "laboratory".</p>

<p>Three general classes of applications seemed most likely to benefit from the 
application of distributed computing technologies.</p>

<ul>
<li><em>Computation intensive</em> applications, including interactive simulation (climate modeling), very large-scale simulation and analysis (galaxy formation, gravity wave detection, battlefield simulation), and engineering (parameter studies, linked component models)</li>
<li><em>Data intensive</em> applications, including experimental data analysis (high-energy physics) and image and sensor analysis (astronomy, climate study, ecology)</li>
<li><em>Distributed collaboration</em> applications, including online instrumentation (microscopes, x-ray devices, etc.), remote visualization (climate studies, biology), and engineering (large-scale structural testing, chemical engineering)</li>
</ul>

<p>
In all cases, the problems were ambitious and aggressive enough that they required people in several organization to collaborate and share computing resources, data, instruments.
</p>

<p>
In these settings, a number of common issues arose over and over, requiring solutions in order for the application to succeed. These problems suggested the need for design patterns that could be reused from project to project. These design patterns were in a new space between the system level and the application level, hence the term "middleware." Some specific examples of these problems are listed below.
</p>

<ul>
<li>Your system administrators can't agree on a uniform authentication system, but you have to allow your users to authenticate once (using a single password) then use services on all systems, with per-user accounting.</li>
<li>You need to be able to offload work during peak times to systems at other companies, but the volume of work they'll accept changes from day-to-day.</li>
<li>You and your colleagues have 6000 datasets from the past 50 years of studies that you want to start sharing, but no one is willing to submit the data to a centrally managed storage system or database.</li>
<li>You need to support 24 experimental teams, each of which plans to use six large-scale physical experimental facilities operating together in real time, but each team has its own coordination code and each facility has its own control and data acquisition mechanisms.</li>
</ul>

<p>More generally, these early Grid pioneers found that it was (1) too hard to keep track of 
authentication data (ID/password) across institutions; (2) too hard to monitor system and application status across institutions; and (3) too easy to leave "dangling" resources lying around, reducing system robustness. Further, there are (4) too many ways to submit jobs; and (5) too many ways to store, access, and ultimately manage distributed data.
</p>

<p>
Grid initiatives like the Globus Project (now the Globus Alliance), the Global Grid Forum, and the GRIDS Center 
were founded largely to identify these common challenges, find generic solutions to them, and test the 
solutions in genuine application settings. Government funding programs like the DOE SciDAC program, the NSF
Middleware Initiative (NMI), the Enabling Grids for E-Science in Europe (EGEE) initiative, and the UK 
e-Science Programme have invested considerable funding toward this work.
</p>

<p><strong><a name="methodology" class="title">The Methodology of the Grid</a></strong></p>

<p>
The approach taken to date by the Grid community has been to attack these problems through a combination of specific application development efforts and more general systems engineering and computer science activities.  The basic premise is that good software arises from trying to solve real problems in real projects and then generalizing the solutions.
</p>

<p>
"Real projects" are understood to mean application projects with end users who are not developers or system builders.  A few of the many examples from the eScience domain have been: NEESgrid (Earthquake Engineering), the Earth System Grid (Climate Modeling), the National Virtual Observatory (Astronomy), LIGO (Cosmology), and GridPP and ATLAS (Particle Physics).
</p>

<p>
The computer scientists involved in these projects have been particularly interested in identifying the fundamental,
reusable patterns used in these projects to solve the problems posed by distributed collaboration and 
resource sharing.  Finding these reusable solutions (as opposed to one-time solutions that can only be applied 
in narrow, vertical problem spaces) is key to constructing infrastructure that can support many applications in
the future.  Most "solutions" developed for specific applications are actually aggregations of one or more generic solutions plus application-specific additions that bridge the gap between the generic solutions and the specialized requirements of the application.
</p>

<p>
<img src="img/methodology.gif">
</p>

<p>
This process is necessarily an iterative one that involves many applications. The "generic" components that result from one application project may or may not be truly generic. Use in multiple projects with continuous refinement is a good way to determine how "generic" a generic component really is.
</p>

<p>
Some examples of generic solutions that have been created through this process are the Globus Toolkit's security, information services, job management, and data transfer components. Others include the <a href="security/myproxy.php">MyProxy</a> credential repository (also part of the Globus Toolkit), SDSC's <a href="monitoring/ganglia.php">Ganglia</a> cluster monitoring toolkit, and the DataGrid Project's <a href="security/voms.php">VOMS</a> role management service.
</p>

<p>
It is important to note that when application solutions are decomposed to isolate the generic components, the resulting components do not typically stand alone. In order to be useful in real projects, they must be paired with application-specific additions that bridge the gap between the generic functionality and the applications' specific requirements.
</p>

<p>
Once a number of generic solutions have been identified and implemented successfully, the reverse process--composition--can be conducted with useful results. Given a set of generic components, one can integrate them in various ways to produce higher-level solutions that are more specialized but also more powerful and more directly useful to applications and systems. The <a href="security/purse.php">PURSE</a> system for user registration is a good example of this kind of &quot;integrated solution.&quot; These integrated solutions can then reduce the amount of work required to use the generic components in new applications through an economy of scale.
</p>

<p><strong><a name="healthy" class="title">A Healthy Grid Ecosystem</a></strong></p>

<p>
The collection of generic components developed by the Grid community as a whole can be viewed as an ecosystem, with each component occupying a niche in the system. When more than one component occupies the same niche, competition occurs until one eventually becomes dominant and the other fades or evolves into a different niche. Applications are consumers of sets of niches.
</p>

<p>
Like any other ecosystem, the Grid ecosystem is in constant flux, with inherent forces that push it toward a stable state that includes niches that are well-defined and sensible with respect to applications. Unstable states include the "monoculture," where a single variety of tools crushes all competition but then falls prey to a fatal flaw, and the
"Cambrian explosion" where tremendous energy is expended developing myriad competing components, most of which will 
perish before they find their niches and successfully eliminate their competitors.
</p>

<p>
Healthy forces that help us move toward a stable ecosystem include competition, innovation, evolution, and diversity, but only so long as everything is subject to a rigorous (and fundamentally fair) process of "natural selection". Unhealthy forces that push us toward one or the other of the danger zones (monoculture or explosion) include hegemony, centralized control, top-down policy enforcement, redundancy, "protected" diversity (where "natural selection" is prevented from taking its course), and imaginary boundaries in the ecosystem; e.g., political, organizational, ideological, "not invented here" or "we must have an (insert national/political affiliation here) solution."
</p>

<p>
For the developers of Grid software components, it is important to remember that your components occupy niches
in the Grid ecosystem. There are many niches available, so there's plenty of room for specialized capabilities. To
be successful in occupying your niche and fending off competition, you must understand what the niche is:
the core capabilities that you provide, the types of applications that need those capabilities, the requirements those
applications have, and the other components that share your niche.  Strategies that are not likely to 
succeed include trying to occupy too many niches with a single component and competing with existing components 
that are already highly successful in the same niche.
Component "evolution" is encouraged. Experimentation is obligatory and "failure to thrive" isn't a bad thing in 
the bigger picture because you and others can learn from the experience. 
Cooperative relationships are allowed! Symbiotic relationships are OK and may be stronger than a "going it alone" 
strategy.  The key requirement for success is "usefulness."
</p>

<p><strong><a name="architecture" class="title">Grid Architecture in a Nutshell</a></strong></p>

<!--
<font color="#ff0000">[Insert 3-5 paragraphs describing the OGSA architecture and how it applies to applications. Key points: Which parts of the OGSA architecture are supposed to be "covered" by Grid components and which parts are left to be covered by "application" components (if any), and which parts of applications are "covered by" OGSA and which parts aren't (if any)?]</font>
-->

<p>
One of the most important "lessons learned" from Grid application projects is that trying to force homogeneity 
on distributed groups of collaborators is futile. Each segment of the group will have its own system administrators,
its own business office, its own set of rules and regulations that get in the way of homogeneous practices.
The collaborators themselves will have their own preferences, which sometimes rises almost to the level of dogma,
resisting change or conformity with other ideas. Forcing people to give up their local ways of doing things requires
more energy than most projects have at their disposal.
</p>

<p>Fortunately, we have a model of how to get a diverse set of incompatible technologies to work together: the 
Internet.  Over the course of several decades, the standard Internet transport protocol (IP) emerged as a means
of sending messages over any kind of physical network. Internet software was developed that allowed IP to be run
over ethernet, token ring, wireless and satelite networks, and diverse point-to-point links. Applications could
count on IP being available to them regardless of the myriad physical network types being used, and it 
became signficiantly easier to develop applications that used network capabilities.  The availability and
accessibility of the core capability of network message transport led to an explosion in the number of applications
that could be developed, including the highly popular World Wide Web, which has since become a new "platform" on
which new standards can, in turn, be developed.
</p>

<p>
<img src="img/hourglass.jpg">
</p>

<p>
The Open Grid Services Architecture extends the IP network services upward from physical transport of messages
to a variety of services that have proven common in Grid applications.  OGSA defines a service-oriented 
architecture, which we believe is the key to effective virtualization of physical resources. OGSA services
enable applications to address common Grid requirements for on-demand availability, system management, 
collaborative computing, and so on. The OGSA builds on existing Web service standards and extends these 
standards when needed.
</p>

<p>
The Grid community and the Web services communities initially worked without much coordination, though Grid
implementations often used existing Web technologies such as HTTP or public key based security. More
recently, the two communities identified a set of common requirements, which has led to the formulation of
a set of specifications known as the WS-Resource Framework, or WSRF.  WSRF specifications define how to provide
Grid capabilities using Web services implementations.  The definition of WSRF means that the Grid and Web 
services communities can move forward on a common base.
</p>

<p>
<img src="img/WSRF.gif">
</p>


<p>
The primary capabilities that WSRF and the related WS-Notification specification provide are listed below.
</p>

<p>
<ul>
<li><strong>Naming and Binding</strong><br />This is the basis for virtualization. Every resource can be <em>uniquely referenced</em>, and has one or more <em>associated services</em> for interacting with it.</li>
<li><strong>Lifecycle</strong><br />This is the basis for fault resilient state management. Resources created by services follow <em>factory</em> patterns, while resource destruction may be <em>immediate</em> or <em>scheduled</em>.</li>
<li><strong>Information Model</strong><br /><em>Resource properties</em> are associated with resourcesresources. There are operations for <em>querying</em> and <em>setting</em> these properties and asynchronous <em>notification</em> of changes to them.</li>
<li><strong>Service Groups</strong><br />These groups are the basis for registries and collective svcs. The group membership can be managed, including using membership rules.</li>
<li><strong>Base Fault Type</strong></li>
</ul>
</p>

<p><strong><a name="applications" class="title">Developing a Grid System or Application</a></strong></p>

<p>
Building a Grid system or application is currently an exercise in <em>software integration.</em> 
Unless one is in the rare and fortunate position of needing an application exactly like one that has 
already been developed for another project, every application will be newly developed, hopefully leveraging 
existing components to reduce the development cost. And because the challenges that Grid projects face are 
ambitious projects that push the limits of existing systems, they typically require many components to be 
integrated to produce an application that meets all of the user requirements.
</p>

<p>
Implementations of such a system are provided by a mix of application-specific code, "off the shelf" 
tools and services, and tools and services from the Grid community. All these elements are glued together 
by application development and system integration. Without a set of existing Grid software components,
many of these elements would have to be developed or procured for each system. Without the "ecosystem"
concept of cooperating component development teams, the challenge of integrating these components into a
seamless application would be significant.  Fortunately, the Grid community has been operating for several years
with the understanding of how our many components fit together, so integration points and interfaces are
reasonably well understood and the Grid Ecosystem can be used to develop a wide range of interesting and
useful applications.
</p>

<p>The remaining sections of this website explore many of the components of 
the current Grid Ecosystem. 
<?php if ($SITE_CONTENT["GLOBUS"]) { ?>
The components that have been selected are those that Globus Alliance members 
have used or seen used effectively in successful Grid application or system 
deployment projects.
<?php } ?> 
<?php if ($SITE_CONTENT["GRIDS"]) { ?>
The components that have been selected are those that GRIDS Center team members 
have used or seen used effectively in successful Grid application or system 
deployment projects.
<?php } ?> 
The components are classified based on the functional areas 
they address, as follows.</p>

<?php if ($SITE_CONTENT["GLOBUS"]) { ?>
    <blockquote><b><a href="role-of-gt.php">Role of the Globus Toolkit</a></b> 
    explains the special role that the Globus<sup>&reg;</sup> Toolkit plays in 
    Grid projects and why we use it this way.</b></blockquote>
<?php } ?> 

    <blockquote><b><a href="security/">Security</a></b> describes a number of useful software tools for meeting the
    security requirements in Grid systems.</blockquote>
    
    <blockquote><b><a href="monitoring/">Monitoring and Discovery</a></b> describes software components that can provide
    monitoring and discovery features in Grid systems.</blockquote>
    
    <blockquote><b><a href="computation/">Computation</a></b> describes software tools that can be used to manage 
    computational tasks in Grid applications.</blockquote>
    
    <blockquote><b><a href="data/">Data</a></b> describes software tools that can be used to manage data 
and
    datasets in data-intensive applications.</blockquote>
    
    <blockquote><b><a href="collaboration/">Collaboration</a></b> describes software for facilitating and
 encouraging
    collaboration in distributed projects.</blockquote>
    
    <blockquote><b><a href="packaging/">Packaging and Distribution</a></b> describes tools for helping to create integrated
    software distributions for use in Grid projects.</b></blockquote>


</div>

<?  include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
