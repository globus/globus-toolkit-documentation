<?

// 2004-10-13, robinett: created, copied information from www.globus.org/gridware/ecology.html

$title = "Globus: Grid Software - An \"Ecology\" of Grid Components";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

	<h1 class="first">Overview - An "Ecology" of Grid Components</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#vision">Our Vision of the Grid</a></li>
<li><a href="#methodology">The Methodology of the Grid</a></li>
<li><a href="#healthy">A Healthy Grid Ecosystem</a></li>
<li><a href="#architecture">Grid Architecture in a Nutshell</a></li>
<li><a href="#applications">Developing a Grid System or Application</a></li>
</ol>
    
<p><strong><a name="vision" class="title">Our Vision of the Grid</a></strong><p>

<p>
In the early 90s, Ian Foster (ANL, U-C) and Carl Kesselman (USC-ISI) enjoyed helping 
scientists apply distributed computing to ambitious projects that pushed the limits of what 
could be done with conventional computing technology. At that time (as now), it seemed a promising endeavor with a high likelihood of success and potential for considerable innovation, both in computer science and in the scientific and engineering fields that it was used in.
</p>

<p>
As a general rule, the application of technology always uncovers new and interesting requirements and challenges for the technology. The prospect of supporting scientific teams was clear to uncover a wide variety of issues that would never arise in the computer science "laboratory".
</p>

<p>
Three general classes of applications seemed most likely to benefit from the application of distributed computing technologies.
</p>

<ul>
<li><em>Computation intensive</em> applications, including interactive simulation (climate modeling), very large-scale simulation and analysis (galaxy formation, gravity wave detection, battlefield simulation), and engineering (parameter studies, linked component models)</li>
<li><em>Data intensive</em> applications, including experimental data analysis (high-enery physics) and image and sensor analysis (astronomy, climate study, ecology)</li>
<li><em>Distributed collaboration</em> applications, including online instrumentation (microscopes, x-ray devices, etc.), remote visualization (climate studies, biology), and engineering (large-scale structural testing, chemical engineering)</li>
</ul>

<p>
In all cases, the problems were ambitious and aggressive enough that they required people in several organization to collaborate and share computing resources, data, instruments.
</p>

<p>
In these settings, a number of common issues arose over and over, requiring solutions in order for the application to succeed. These problems suggested the need for design patterns that could be reused from project to project. These design patterns were in a new space between the system level and the application level, hence the term "moddleware." Some specific examples of these problems are listed below.
</p>

<ul>
<li>Your system administrators can't agree on a uniform authentication system, but you have to allow your users to authenticate once (using a single password) then use services on all systems, with per-user accounting.</li>
<li>You need to be able to offload work during peak times to systems at other companies, but the volume of work they'll accept changes from day-to-day.</li>
<li>You and your colleagues have 6000 datasets from the past 50 years of studies that you want to start sharing, but no one is willing to submit the data to a centrally managed storage system or database.</li>
<li>You need to support 24 experimental teams, each of which plans to use six large-scale physical experimental facilities operating together in real time, but each team has its own coordination code and each facility has its own control and data acquisition mechanisms.</li>
</ul>

<p>More generally, Globus Project founders found that it was (1) too hard to keep track of 
authentication data (ID/password) across institutions; (2) too hard to monitor system and application status across institutions; and (3) too easy to leave "dangling" resources lying around, reducing system robustness. Further, there are (4) too many ways to submit jobs; and (5) too many ways to store, access, and ultimately manage distributed data.
</p>

<p>
The Globus Project was founded largely to identify these common challenges, find generic solutions to them, and test the solutions in genuine application settings.
</p>

<p><strong><a name="methodology" class="title">The Methodology of the Grid</a></strong></p>

<p>
The approach taken to date by the Grid community, clearly represented by the Global Grid Forum, has been to attack these problems through a combination of specific application development efforts and more general systems engineering and computer science activities.  The basic premise is that good software arises from trying to solve real problems in real projects and then generalizing the solutions.
</p>

<p>
"Real projects" are understood to mean application projects with end users who are not developers or system builders.  A few of the many examples from the eScience domain have been: NEESgrid (Earthquake Engineering), the Earth System Grid (Climate Modeling), the National Virtual Observatory (Astronomy), LIGO (Cosmology), and GridPP and ATLAS (Particle Physics).
</p>

<p>
Decomposing the problems and solutions encountered in these projects is critical to finding the general solutions, as opposed to solutions that can only be applied in narrow, vertical problem spaces.  Most "solutions" developed for specific applications are actually aggregations of one or more generic solutions plus application-specific additions that bridge the gap between the generic solutions and the specialized requirements of the application.
</p>

<p>
Isolating the fundamental processes or patterns from the rest of the application is a nontrivial problem, but the results are well worth it, because they yield components that can be reused in many other applications with similar (though perhaps not identical) requirements. This most often occurs when application development team members work on a range of projects that share requirements.
</p>

<p>
This process is necessarily an iterative one that involves many applications. The "generic" components that result from one application project may or may not be truly generic. Use in multiple projects with continuous refinement is a good way to determine how "generic" a generic component really is.
</p>

<p>
Some examples of generic solutions that have been created through this process are the Globus Toolkit's <a href="security/ws-aa.php">security</a>, job management, and data transfer components. Others include NCSA's <a href="security/myproxy.php">MyProxy</a> credential repository, SDSC's <a href="monitoring/ganglia.php">Ganglia</a> cluster monitoring toolkit, and the DataGrid Project's <a href="security/voms.php">VOMS</a> role management service.
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
Like any other ecosystem, the Grid ecosystem is in constant flux, with inherent forces that push it toward a stable state that includes niches that are well-defined and sensible with respect to applications. A "monoculture" with single dominant strategy is one type of danger, but another danger is a "Cambrian explosion" where tremendous energy is expended developing myriad competing components, most of which will perish before they find their niches and successfully eliminate their competitors.
</p>

<p>
Healthy forces that help us move toward a stable ecosystem include competition, innovation, evolution, and diversity, but only so long as everything is subject to a rigorous (and fundamentally fair) process of "natural selection". Unhealthy forces that push us toward one or the other of the danger zones (monoculture or explosion) include hegemony, centralized control, top-down policy enforcement, redundancy, "protected" diversity (where "natural selection" is prevented from taking its course), and imaginary boundaries in the ecosystem; e.g., political, organizational, ideological, "not invented here" or "we must have an (insert national/political affiliation here) solution."
</p>

<p><strong><a name="architecture" class="title">Grid Architecture in a Nutshell</a></strong></p>

<p>
<font color="#ff0000">[Insert 3-5 paragraphs describing the OGSA architecture and how it applies to applications. Key points: Which parts of the OGSA architecture are supposed to be "covered" by Grid components and which parts are left to be covered by "application" components (if any), and which parts of applications are "covered by" OGSA and which parts aren't (if any)?]</font>
</p>

<p><font color="#ff0000">[start Peter's summary]</font></p>


<p>
<font color="#ff0000">[slide 15]</font> Trying to force homogeneity on users is futile. Everyone has their own preferences, sometimes even <em>dogma</em>. The internet provides the model...
</p>

<p>
<font color="#ff0000">[slide 17]</font> The Open Grid Services Architecture defines a service-oriented architecture, which is the key to effective virtualization. The OGSA enables you to address the vital Grid requirements of utility, on-demand availability, system management, collaboratibe computing, and so on. The OGSA builds on existing Web service standards and extends these standards when needed.
</p>

<p>
<font color="#ff0000">[slide 18]</font>The Grid and the Web, though starting from points quite far apart, are convergin in WSRF. The definition of WSRF means that the Grid and Web services communities can move forward on a common base.
</p>

<p>
<font color="#ff0000">[slide 19]</font> WSRF and WS-Notification provide a variety of benefits:
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

<p>
<font color="#ff0000">[slide 22]</font> A healthy grid ecosystemhas components that fit into "niches." There's plenty of room for specialized capabilities. A focus on the requirements of your niche and an acknowledgement that you shouldn't try to "do it all" or compete with obvious winners will lead to success.
</p>

<p>
Component "evolution" is encouraged. Experimentation is obligatory and "failure to thrive" isn't a bad thing in the bigger picture. Acceptability ("usefulness") is the key requirement. Don't protect things unfairly (a true ecosystem has no internal boundaries) and remember that good solutions usually "bubble up" from below, as opposed to "falling down" from on high.
</p>

<p>
Cooperative relationships are allowed! Symbiotic relationships are OK and may be stronger than a "going it alone" strategy.
</p>

<p><font color="#ff0000">[end Peter's summary]</font></p>

<p><strong><a name="applications" class="title">Developing a Grid System or Application</a></strong></p>

<p>
Building a Grid system or application is currently an exercise in <em>software integration.</em> Unless one is in the rare and fortunate position of needing an application exactly like one that has already been developed for another project, every application will be newly developed, hopefully leveraging existing components to reduce the development cost. And because the challenges that Grid projects face are ambitious projects that push the limits of existing systems, they typically require many components to be integrated to produce an application that meets all of the user requirements.
</p>

<p>
Developing a new Grid application or system for end users typically requires the following tasks.
</p>

<ul>
<li>Define user requirements</li>
<li>Derive system requirements or features</li>
<li>Survey existing components</li>
<li>Identify useful components</li>
<li>Develop components to fit into the gaps
<li>Integrate the system
<li>Deploy and test the system
<li>Maintain the system during its operation 
</ul>

<p>
These steps are not numbered because they are typically conducted in a non-linear, iterative fashion with many loops and cycles in the process. For example, in ground-breaking projects, it is unlikely that all of the user requirements can be identified until after one or more initial prototype systems have been developed and made available to potential users for sampling. Another example is that the process of integrating an application often reveals operational/administrative issues that ultimately point to additional system requirements.
</p>

<p>
The distributed nature of Grid projects and the collaborative nature of many Grid teams results in a range of user "categories" in most projects. These categories include:
</p>

<ul>
<li>"End users" (e.g., Scientists, Engineers, Customers)</li>
<li>Domain-focused application developers</li>
<li>System-focused software architects and integrators</li>
<li>System administrators and system operations teams</li>
</ul>

<p>
Each user category has unique requirements that must be met in order for the application or system to be successful. Failure to identify and meet the needs of any of these categories will signifciantly reduce the likelihood of success. Each user class has unique skills and unique requirements. The user class whose needs are met varies from tool to tool (even within the Globus Toolkit).
</p>

<p>
<font color='#FF0000'>[Insert "what users need" and "how it really happens" material from tutorial here.]</font>
</p>

<p>
<font color='#FF0000'>[slide 27]</font> End users need secure, reliable, on-demand access to data, software, people, and other resources (ideally all via a web browser!).
</p>

<p>
<font color='#FF0000'>[slide 28, 29, 30, 31]</font> The way the end user gets access to all he or she needs is only simple for the user. The user simple works with a client application (normally a web browser). This client connects to the next layer in the system, that of application services that organize VOs and enable access to other systems. These application services talk to the third level, where collective services aggregate and/or virtualize resources. It is only these collective services that deal directly with the fourth level, that of actual resources. Implementations of such a system are provided by a mix of application-specific code, "off the shelf" tools and services, tools and services from the Globus Toolkit, and tools and services from the Grid community (that are compatible with the Toolkit). All these elements are glued together by application development and system integration. Without the Grid many of these elements would have to be developed or procured for each system, but thanks to the Grid many elements can be taken implemented using the Globus Toolkit or Grid community tools, reducing the number of elements that must be developed from scratch.
</p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>