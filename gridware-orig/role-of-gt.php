<?

// 2004-10-15, robinett: created, copied information from www.globus.org/gridware/role-of-gt.html

$title = "Globus: Grid Software - Role of the Globus Toolkit";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 

?>

<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

	<h1 class="first">The Role of the Globus Toolkit<sup>&reg;</sup> in Globus Alliance Projects</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#purpose">The Purpose of the Globus Toolkit</a>
<li><a href="#plumbing">"Standard Plumbing" for the Grid</a>
<li><a href="#contents">Review: What's In the Globus Toolkit?</a>
<li><a href="#usage">How To Use the Globus Toolkit</a>
</ol>

<p>
The Globus Alliance is the caretaker and chief promoter of a suite of software called the Globus Toolkit<sup>&reg;</sup>. The Globus Toolkit is an open source toolkit, freely available in source code form for use by anyone, including both commercial and non-commercial purposes.
</p>

<p>
The Globus Toolkit contains code contributed by many organizations: some that are participants in the Globus Alliance and some that are not. The Globus Toolkit has a special place in the Globus Alliance's <a href="ecology.php">strategy to support Grid projects</a>.  This section explains why the Globus Toolkit is special to us and why the Globus Toolkit is special to the Grid community.
</p>

<p><strong><a name="purpose" class="title">The Purpose of the Globus Toolkit</a></strong><p>

<p>
As described in the <a href="ecology.php">overview section</a>, early Grid efforts resulted when computer scientists got involved in building/integrating a diverse range of high-end computing applications for real users in other areas of science and engineering. During this work, the same problems kept showing up over and over again. The founders of the Globus Alliance realized that producing general solutions to these problems (design patterns) that could be reused from application to application was a worthwhile goal. The Globus Toolkit began as a collection of solutions to these problems.
</p>

<p>
The Globus Toolkit, therefore, is a result of the Grid community's attempts to solve real problems that are encountered by real application projects. It contains components that have proven useful in addressing the challenging problems that come up when implementing Grid applications and systems. The components have been <a href="ecology.php#methodology">generalized</a> so that they make sense within a wide variety of applications.
</p>

<p>
The Globus Toolkit does not solve every problem. The Globus Toolkit is, in fact, not a "turnkey" solution for any significant application or project. Turnkey solutions (commonly known as "applications") require a combination of application-specific code, components from the Grid community (including the Globus Toolkit), and off-the-shelf commodity components, assembled together by an architect and fit together by system integrators.
</p>

<p><strong>Heterogeneity</strong></p>

<p>
A major theme that comes up over and over in distributed collaboration activities is <em>heterogeneity</em>. As discussed in the <a href="ecology.php#architecture">overview section</a>, it is not practical to enforce homogeneity in these scenarios. Instead, mechanisms have to be provided that make it easier to develop applications despite the unavoidable heterogeneity. Versions 1.0 through 4.0 of the Globus Toolkit have largely focused on simplifying heterogenity for application developers by providing tools that implement standard interfaces for interacting with heterogeneous system components. These tools largely fit into the "resource layer" of the OGSA architectural model and those below it.
</p>

<p>
We aspire to include more "vertical solutions" (tools for addressing specialized issues that come up in different classes of applications, such as data replication, metadata management, and authorization) in future versions of the Globus Toolkit. These will take the form of "collective layer" services that use the existing resource layer services as a basis for more powerful (and more specialized) operations.
</p>

<p><strong>Standards</strong></p>

<p>
The Globus Toolkit has been designed and implemented to capitalize on and encourage use of existing standards from communities such as IETF, W3C, OASIS and GGF. The tools in the Globus Toolkit use these standards rather than creating new mechanisms that do the same things in different ways. Some examples of standard mechanisms used in the Globus Toolkit are listed below.
</p>

<ul>
<li>SSL/TLS v1 (from OpenSSL) (IETF)</li>
<li>LDAP v3 (from OpenLDAP) (IETF)</li>
<li>X.509 Proxy Certificates (IETF)</li>
<li>SOAP (W3C)</li>
<li>HTTP (W3C)</li>
<li>GridFTP v1.0 (GGF)</li>
<li>OGSI v1.0 (GGF)</li>
</ul>

<p>
The Globus Toolkit also includes reference implementations of several new and proposed standards in these organizations, providing the community with code that they can use to try out the standards and provide feedback on their usefulness. Examples include WSRF (GGF, OASIS), DAI (GGF), WS-Agreement, WSDL 2.0 (W3C), WSDM, SAML (OASIS), and XACML (OASIS).
</p>

<p><strong><a name="plumbing" class="title">"Standard Plumbing" for the Grid</a></strong><p>

<p>
When constructing modern buildings, providing for running water in certain rooms is usually a requirement. This could be (but thankfully is not often) accomplished by designing and manufacturing a totally unique system for every new building, ignoring the availability of standard plumbing parts and practices and creating every bit from scratch. This method would admittedly allow the intended building tenants and the construction professionals considerable flexibility and artistic freedom in developing a personally tailored solution for each building. Of course, this strategy would be incredibly inefficient and cost prohibitive for most owners. Instead, the construction industry makes use of standard components and interfaces for the plumbing in virtually all buildings, greatly reducing the cost of each new building.
</p>

<p>
An important detail in this scheme is that the plumbing fixtures (sinks, faucets, knobs, toilets, baths, and so on-the parts of the system that people interact with on a day-to-day basis) are often highly customized.  The intended owners of the building have considerable input into the styles and options of these fixtures, and can even replace them on a casual whim. But these custom fixtures have standard interfaces to the rest of the plumbing system, allowing wildly different fixtures to work seamlessly with a generic infrastructure, which the end users rarely ever work with directly or care about.
</p>

<p>
In exactly the same way, the Globus Toolkit aims to provide standard system components that can support a wide variety of highly customized applications and user interfaces without requiring a completely unique infrastructure to be developed for each application.
</p>

<p>
It's important to note that standard plumbing components by themselves (pipes, joints, valves, conduits) do not provide a complete solution. The pieces have to be organized and connected together in a design that fits the design of the building. And of course the system isn't complete until the preferred fixtures have been attached at the endpoints.
</p>

<p>
Similarly, the Globus Toolkit doesn't provide a complete solution for Grid projects. The components in the Globus Toolkit (along with components from other sources) have to be organized and fitted together ("integrated") according to a plan that fits the requirements of the rest of the project. Each product will likely have it's own unique user interface that provides the customized veneer that the end users interact with, making use of standardized components for deeper system functionality.
</p>

<p>
To summarize, the Globus Toolkit does not provide a "turnkey" solution for any project or product. It provides standard building blocks and tools for use by application developers and system integrators. These building blocks and tools have already been proven useful in other projects, which is why we've included them in the Globus Toolkit.
</p>

<p>
Just as it would be crazy (inefficient and cost prohibitive) to ignore the existence of standard plumbing parts in constructing a new building, it would be crazy (for the same reasons) to ignore the existence of standard software components when building a Grid application. Because these solutions exist and because others are already using them (and because-unlike plumbing parts-they can be acquired at no cost), it's easier to reuse than to reinvent. And of course, compatibility with other Grid systems based on the same tools is an additional benefit!
</p>

<p><strong><a name="contents" class="title">Review: What's In the Globus Toolkit?</a></strong></p>

<p>
The Globus Toolkit isn't a turnkey solution for a specific problem. Instead, it's a collection of solutions to sub-problems that have proven useful in real projects. (The Globus Toolkit genuinely is a "toolkit," or a collection of tools.) Specific applications will find different combinations of Globus Toolkit components more useful than others.
</p>

<ul>
<li><strong>Two Very Important Software Development Kits</strong><br>
These SDKs (of particular interest to software developers) are critical for 
developing new Grid software services within the OGSA framework.</li>
<ul>
<li>Web Services Core (WS-Core) Implementation<br>
Used to develop and run OGSA-compliant Grid Services (available in 
Java and C/C++)</li>
<li>Grid Security Infrastructure (GSI) Implementation<br>
Used to secure communication (e.g., between services and clients)</li>
</ul>
<li><strong>A Variety of Basic Grid Services</strong><br>
These services are popular among current Grid application and system builders. They provide uniform interfaces to the most typical types of system elements and they currently include both OGSA and non-OGSA implementations.</li>
<ul>
<li>Computing / Processing Power (GRAM)</li>
<li>Data Management (GridFTP, DAI, RLS)</li>
<li>Monitoring/Discovery (MDS)</li>
<li>Authorization/Security (CAS)</li>
<li>In development: Telecontrol (NTCP/GTCP), Metadata (MCS), Virtual Data (Chimera, Pegasus)</li>
</ul>
<li><strong>Developer APIs</strong><br>
All of the services and tools above include C/C++ libraries and Java classes for building Grid-aware applications and tools.</li>
<li><strong>Tools and Examples</strong><br>
All of the services and tools above include tools and examples based on the developer APIs and associated services.</li>
</ul>

<p><strong><a name="usage" class="title">How To Use the Globus Toolkit</a></strong></p>

<p>
Like the pipes and valves in a house's plumbing system, the Globus Toolkit has surprisingly little <em>direct value</em> to end users of distributed collaborative projects or products. Very few of the components in the Toolkit include user interface elements that would be immediately useful to scientists, engineers, or other application users. One most certainly cannot get useful results simply by directing scientists, engineers, or marketing specialists to the Globus Toolkit and telling them to do something useful with it!
</p>

<p>
The Globus Toolkit can be extremely useful to application developers and system integrators. In order to make good use of the Toolkit, one must have a specific application or system in mind, preferably one that involves shared use of physical or logical resources from several administrative domains. Having the right expertise on hand (system design and architecture, software development, user interface design, and of course familiarity with end user requirements) is essential. The most ambitious projects and products (those that the Globus Toolkit is aimed at) require sophisticated project planning and strong, experienced leadership to achieve success.
</p>

<p>
After reviewing the contents and capabilities of the Globus Toolkit and having read the preceding paragraphs, it may appear to someone grappling with the specific user requirements of a complex, distributed collaborative project that the Toolkit by itself meets very few of these requirements head-on. That may be true to a point, but it is important to remember that the Globus Toolkit is not intended to be a turnkey solution. As stated at the beginning of this section, all applications require a combination of application-specific code, components from the Grid community (including the Globus Toolkit), and off-the-shelf commodity components, assembled together by an architect and fit together by system integrators.
</p>

<p>
The following sections provide pointers to some of the Grid community's best tools and services including many that are not currently included the Globus Toolkit. These components have all been used with the Globus Toolkit in real projects to accomplish ambitious goals, and we encourage application developers and system builders to consider reusing them in new efforts rather than ignoring them (and most likely reinventing them from scratch).
</p>

<blockquote><strong><a href="security-components.php">Security</a></strong> describes a number of useful software tools for meeting the security requirements in Grid systems.</blockquote>
<blockquote><strong><a href="monitoring-components.php">Monitoring and Discovery</a></strong> describes software components that can provide monitoring and discovery features in Grid systems.</blockquote>
<blockquote><strong><a href="computation-components.php">Computation</a></strong> describes software tools that can be used to manage computational tasks in Grid applications.</blockquote>
<blockquote><strong><a href="data-components.php">Data</a></strong> describes software tools that can be used to manage data and datasets in data-intensive applications.</blockquote>
<blockquote><strong><a href="collaboration-components.php">Collaboration</a></strong> describes software for facilitating and encouraging collaboration in distributed projects.</blockquote>
<blockquote><strong><a href="packaging-tools-and-dist.php">Packaging and Distribution</a></strong> describes tools for helping to create integrated software distributions for use in Grid projects.</strong></blockquote>

<p>
The Globus Toolkit does make projects of this nature easier.  It does this by providing solutions to the most common problems and by promoting standard solutions. The Globus Toolkit is a well-designed implementation of community standards that allows many things to be built on it. (We have lots of happy developers!) The Globus Alliance has accumulated more than seven years of experience at providing support to Grid builders in more than fifty large-scale R&D applications. The Toolkit's documentation, installation, configuration, and training resources are constantly improving through the efforts of the entire Grid community.
</p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>