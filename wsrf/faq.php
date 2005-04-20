<?php
$title = "Globus: Frequently Asked Questions About WSRF";
$section = "section-5";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<div id="main">

<h1 class="first">Frequently Asked Questions About WSRF</h1>

<p>The following are answers to questions that have been raised concerning the 
   <a href="./">WS-Resource Framework (WSRF)</a>, its design, and its 
   implementation.</p>

<h2>Table of Contents</h2>

<ul>
  <li><a href="#wsrf1">What exactly is the WS-Resource Framework?</a></li>
  <li><a href="#wsrf2">What were the motivations for defining the WS-Resource 
      Framework?</a></li>
  <li><a href="#wsrf3">What are the WS-Resource Framework specifications?</a></li>
  <li><a href="#wsrf4">What are the plans for the WSRF specifications?</a></li>
  <li><a href="#wsrf5">How do I participate in public comment on WSRF?</a></li>
  <li><a href="#wsrf6">How does WSRF relate to the Open Grid Services 
      Infrastructure?</a></li>
  <li><a href="#wsrf7">Why were WSRF specifications not developed within the 
      GGF's OGSI WG?</a></li>
  <li><a href="#wsrf9">Does WSRF address criticisms of OGSI from the Web 
      services community?</a></li>
  <li><a href="#wsrf9">What does the definition of WSRF mean for OGSI-based 
      systems?</a></li>
  <li><a href="#wsrf10">Who is planning to implement WSRF, and on what 
      schedule?</a></li>
  <li><a href="#wsrf11">Where can I learn more?</a></li>
  <li><a href="#wsrf12">What is the "implied resource pattern?"</a></li>
  <li><a href="#wsrf13">How do the WSRF specification's features relate to 
      those of OGSI?</a></li>
  <li><a href="#wsrf14">What is the value of WSRF to customers and software 
      developers?</a></li>
  <li><a href="#wsrf15">How does WS-Resource Framework relate to other Web 
      services standards?</a></li>
  <li><a href="#wsrf16">Are the authors of WSRF abandoning OGSA and OGSI?</a></li>
  <li><a href="#wsrf17">First OGSI, then WSRF, when will things stop changing?</a></li>
  <li><a href="#wsrf18">Will the WSRF-based GT4 interoperate with GT3?</a></li>
  <li><a href="#wsrf19">Contributors</a></li>
</ul>

    <h2><a name="wsrf1">What exactly is the WS-Resource Framework?</a></h2>

    <p>The WS-Resource Framework (WSRF) is a set of six Web 
    services specifications that define what is termed the <i>WS-Resource 
    approach</i> to modeling and managing state in a Web services context. To 
    date, drafts of three of these specifications have been released, along with 
    an architecture document that motivates and describes the WS-Resource 
    approach to modeling stateful resources with Web services. To be released 
    soon are the other specifications, an overview document describing the 
    relationship among the different specifications, and a document that 
    compares the WS-Resource Framework with the Open Grid Services 
    Infrastructure.</p>

    <h2><a name="wsrf2">What were the motivations for defining the 
    WS-Resource Framework?</a></h2>

    <p>Web services must often provide their users with the 
    ability to access and manipulate state, i.e., data values that persist 
    across, and evolve as a result of, Web service interactions. And while Web 
    services successfully implement applications that manage state today, it is 
    desirable to define Web service conventions to enable the discovery of, 
    introspection on, and interaction with stateful resources in standard and 
    interoperable ways. WSRF defines these conventions and does so within the 
    context of established Web services standards.</p>

    <h2><a name="wsrf3">What are the WS-Resource Framework specifications?</a></h2>

    <ul>
      <li><cite>WS-ResourceLifetime</cite> defines mechanisms for WS-Resource 
    destruction, including message exchanges that allow a requestor to destroy a 
    resource, either immediately or by using a time-based scheduled resource 
    termination mechanism.</li>
      <li><cite>WS-ResourceProperties</cite> defines how the type definition 
    of a WS-Resource can be associated with the interface description of a Web 
    service, and message exchanges for retrieving, changing, and deleting 
    WS-Resource properties.</li>
      <li><cite>WS-Notification</cite> defines mechanisms for event 
    subscription and notification using a topic-based publish/subscribe pattern.</li>
      <li><cite>WS-RenewableReferences</cite> defines a conventional 
    decoration of a WS-Addressing endpoint reference with policy information 
    needed to retrieve an updated version of an endpoint reference when it 
    becomes invalid.</li>
      <li><cite>WS-ServiceGroup</cite> defines an interface to heterogeneous 
    by-reference collections of Web services.</li>
      <li><cite>WS-BaseFaults</cite> defines a base fault XML type for use 
    when returning faults in a Web services message exchange.</li>
    </ul>

    <h2><a name="wsrf4">What are the plans for the WSRF specifications?</a></h2>

    <p>The authors plan to submit the specifications to an 
    appropriate standard body in the near future. Already the drafts have been 
    made available to the GGF OGSI working group for comment. However it may 
    also be advantageous to standardize these specifications through OASIS, 
    where most other web services specifications are done. In fact GGF and OASIS 
    have been discussing ways to collaborate for some time now, and have issued 
    a joint statement specifically addressing collaboration on OGSI and Web 
    Services (see <a href="http://www.ggf.org">http://www.ggf.org</a> for this 
    statement).</p>

    <h2><a name="wsrf5">How do I participate in public comment on WSRF?</a></h2>

    <p>The authors will be gathering feedback on the 
    specifications, which will be incorporated into the subsequent revisions 
    that will be submitted to a standards body. Details of this feedback process 
    will be announced soon.</p>

    <p>In addition, starting immediately, the Global Grid Forum's OGSI-WG 
       (<a href="http://www.ggf.org/ogsi-wg">www.ggf.org/ogsi-wg</a>) 
    is hosting an open discussion forum on all technical aspects of WSRF. The 
    working group will help answer questions, seek clarification of concepts, 
    and track issues, which will be passed on to the standardization process 
    when it begins. </p>

    <h2><a name="wsrf6">How does WSRF relate to the Open Grid Services 
    Infrastructure?</a></h2>

    <p>The WS-Resource Framework is inspired by the work of 
    the Global Grid Forum's Open Grid Services Infrastructure (OGSI) Working 
    Group. Indeed, it can be viewed as a straightforward refactoring of the 
    concepts and interfaces developed in the OGSI version 1.0 specification, in 
    a manner that exploits recent developments in Web services architecture 
    (e.g., WS-Addressing) to express these concepts and interfaces in a manner 
    that is fully aligned with current Web services directions. More details on 
    this relationship can be found in the document 
    <cite><a href="index.php#relevant">From OGSI to WSRF: Refactoring and 
    Evolution</a></cite> and in the answers to other questions below.</p>

    <h2><a name="wsrf7">Why were WSRF specifications not developed within 
    the GGF's OGSI WG?</a></h2>

    <p>It is important to emphasize that the WSRF 
    specifications that we are discussing here are draft proposals that will now 
    be taken to a standards body for critical review and discussion prior to 
    standardization.</p>

    <p>The decision to develop these draft proposals outside 
    the GGF OGSI WG was made for two reasons. First, once the need for WSRF was 
    recognized, it was clear that speed was of critical importance to avoid 
    stalling all ongoing implementation and standardization efforts that 
    depended on OGSI. The way to move quickly is in fact to approach the specification 
    exactly the way we approached the initial OGSI draft standardized in GGF:
      to start with a draft specification. Where GGF and other standards 
      efforts have been successful is not starting with a blank sheet of paper 
      but rather starting with a reasonably fleshed-out initial draft. In fact 
      most standards groups, including GGF, recognize and encourage this 
      approach of creating a draft prior to initiating a broad design 
      discussion.&nbsp; Second, the development of WSRF specifications demanded 
    expertise, particularly in Web services standards, that was not represented 
    in the OGSI WG.</p>
    
    <h2><a name="wsrf8">Does WSRF address criticisms of OGSI from the Web 
    services community?</a></h2>

    <p>While the definition of WSRF has been motivated 
    primarily by the desire to integrate recent developments in Web services 
    architecture, in particular WS-Addressing, its design also addresses three 
    criticisms of OGSI from the Web services community:</p>

    <ul>
      <li><i><b>Too much stuff in one specification</b></i>. Many would like to 
    use parts but not all of OGSI, and while most of OGSI v1.0 is optional, some 
    feel that use of parts obligates use of all.<br><br>

    <b>Response</b>: WSRF 
    partitions OGSI v1.0 functionality into a family of composable 
    specifications.<br><br></li>

    <li><i><b>Does not work well with existing Web services tooling</b></i>. 
    OGSI v1.0 uses XML Schema fairly aggressively, for example with substantial 
    use of xsd:any, attributes, etc., and "document-oriented" WSDL operations. 
    These features cause problems with, for example, JAX-RPC.<br><br>

    <b>Response</b>: WSRF tones down the usage of XML Schema somewhat.<br><br></li>

    <li><i><b>Too object oriented</b></i>. OGSI v1.0 models a stateful 
    resource as a Web service that encapsulates the resource's state, with the 
    identity and lifecycle of the service and resource state coupled. This 
    approach has spurred anxiety among some Web services purists who argue that 
    "Web services do not have state or instances." In addition, some Web 
    services implementations do not accommodate dynamic service creation and 
    destruction.<br><br>

    <b>Response</b>: WSRF re-articulates the underlying OGSI architecture to 
    make an explicit distinction between the "service" and the stateful 
    entities acted upon by that service. WSRF calls these entities "resources," 
    and says that a service that acts upon resources through a conventional 
    use of WS-Addressing exhibits the "implied resource pattern."</li>
    </ul>

    <h2><a name="wsrf9">What does the definition of WSRF mean for OGSI-based 
    systems?</a></h2>

    <p>WSRF retains essentially all of OGSI concepts, and 
    introduces only modest changes to OGSI messages and their associated 
    semantics. Thus, our expectation is that the effort required to modify an 
    OGSI-based system or specification to use WSRF will be small.</p>
    <p">Services implemented using OGSI-based tools, such as 
    the Globus Toolkit's OGSI Core, are likely to require some changes to 
    exploit WSRF-based tools, but the changes should be modest due to the 
    similarities between WSRF and OGSI. </p>
    <p>Applications that use higher-level interfaces, such 
    as the Globus Toolkit's GRAM or emerging standards such as OGSA DAI, will be 
    only minorly effected by these changes.</p>
    <p>More generally, the fact that WSRF is based on 
    mainstream Web services standards and has been embraced by major vendors 
    means that we can expect to see rapid integration into commercial Web 
    services products, enabling a much richer choice of products upon which WSRF 
    compliant services can be built.</p>

    <h2><a name="wsrf10">Who is planning to implement WSRF, and on what 
    schedule?</a></h2>

    <p>A variety of groups have announced plans to produce 
    implementations of WSRF specifications.</p>

    <ul>
    <li>The <a href="<?=$SITE_PATHS["WEB_ROOT"]; ?>">Globus Alliance</a> has 
    already started work on moving the open source
    <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Globus Toolkit</a> (GT) to WSRF. 
    Their plan is to modify their OGSI-based GT3 to produce a WSRF-enabled 
    version of the Globus Toolkit that will be released as GT 4.0 in the 
    third quarter of 2004. The exact release date will depend on the progress 
    of the standardization process.</li>
    <li>IBM and HP have announced their support for WSRF but have not 
    yet set dates for the release of implementations.</li>
    <li>The team at Lawrence Berkeley National Laboratory that 
    maintains the OGSI-based pyGlobus system has announced plans to support WSRF. 
    Says Keith R. Jackson of Lawrence Berkeley National Laboratory, "The release 
    of the next generation of specifications from the Globus Alliance and IBM 
    called the WS-Resource Framework (WSRF) is another major milestone in the 
    integration of Web Service and Grid technologies. By combining the results 
    of recent Global Grid Forum work on modeling stateful, transient resources, 
    with recent advances in the Web Services space, both the Grid and the WS 
    communities will benefit. As the Principal Investigator building Python 
    based implementation of Grid techologies, we are commited to implementing 
    the latest standard. We see WSRF as a major step forward in Grid technology 
    that will have a major impact on how DOE science is conducted."</p>

    <li>The team at University of Virginia that maintains the OGSI-based 
    OGSI.NET system has announced plans to support WSRF. Says Prof. Marty 
    Humphrey of the Department of Computer Science of the University of 
    Virginia, "As the provider of OGSI.NET, an implementation of the Open Grid 
    Services Infrastructure on the .NET platform, we are very excited at the new 
    capabilities for e-business and e-science in the WS-Resource Framework (WSRF). 
    We have been very impressed with the quality of the OGSI specification as a 
    result of Global Grid Forum, and we look forward to the increased 
    possibilities of the WSRF. We are eager to implement the WSRF and use our 
    experiences in the standardization process."</li>
    </ul>

    <h2><a name="wsrf11">Where can I learn more?</a></h2>

    <p>Three documents that motivate and introduce the 
    WS-Resource Framework are available at
    <a href="./#relevant">http://www.globus.org/wsrf</a> and are also accessible at
    <a href="http://forge.gridforum.org/projects/ogsi-wg">http://forge.gridforum.org/projects/ogsi-wg</a>.</p>

    <ul>
    <li><cite>Modeling Stateful Resources with Web Services</cite> describes the 
    WS-Resource construct.</li>
    <li><cite>The WS-Resource Framework</cite> describes how the 
    WS-Resource construct is rendered in terms of six Web services 
    specifications.</li>
    <li><cite>From Open Grid Services Infrastructure to WS-Resource 
    Framework: Refactoring and Evolution</cite> describes how OGSI constructs map to 
    WS-Resource Framework constructs.</li>
    </ul>

    <p>Three WS-Resource Framework specifications are also available
       at the same locations.</p>

    <ul>
     <li>Web Services Resource Properties (WS-ResourceProperties)</li>
     <li>Web Services Resource Lifetime (WS-ResourceLifetime)</li>
     <li>Web Services Notification (WS-Notification)</li>
    </ul>

    <p>Drafts of the other three WSRF specifications should 
    be available in the near future.</p>

    <h2><a name="wsrf12">What is the "implied resource pattern?"</a></h2>

    <p>The phrase "implied resource pattern" describes the 
    way WS-Addressing is used to associate a stateful resource with the 
    execution of message exchanges implemented by a Web service. </p>

    <p>A WS-Addressing EndpointReference that follows the 
    implied resource pattern must include a ReferenceProperties child element 
    that identifies the resource to be associated with the execution of all 
    message exchanges performed using this EndpointReference.</p>

    <p>A Web services message that follows the implied 
    resource pattern must be sent to a Web service referred to by an 
    EndpointReference that follows the implied resource pattern, and must 
    include the ReferenceProperties information from that EndpointReference, as 
    specified by WS-Addressing.</p>

    <p>A Web service that follows the implied resource 
    pattern must use the ReferenceProperties information from a message that 
    follows the implied resource pattern in order to identify the resource to 
    associate with the execution requested by that message.</p>

    <h2><a name="wsrf13">How do the WSRF specification's features relate 
    to those of OGSI?</a></h2>

    <p>The WS-ResourceProperties specification defines a mechanism for Web 
    services, following the implied resource pattern, to 
    expose a projection of the state of the implied resource. It parallels 
    Service Data from OGSI and provides similar capabilities.</p>

    <p>The WS-ResourceLifetime specification describes a 
    mechanism for managing the lifetime of a WS-Resource. It parallels the 
    lifetime properties, immediate destruction, and scheduled destruction 
    capabilities of OGSI Grid Services.</p>

    <p>The WS-Notification specification provides a complete 
    collection of message exchanges for subscribing to be notified of events of 
    interesting, including changes in the resource properties of WS-Resources. 
    It includes support for arbitrary, hierarchical "topics" and a subscription 
    interface to support subscription management. It parallels the Notification 
    Source and Sink and Subscription interfaces in OGSI. Its capabilities extend 
    that provided by these OGSI interfaces.</p>

    <p>The WS-RenewableReferences specification describes 
    mechanisms for renewing a WS-Addressing endpoint reference should the 
    endpoint reference become invalid, for example due to an address change of 
    the service. It provides for similar resource reference stability as is 
    provided in OGSI by the Grid Service Handle and the HandleResolver 
    interface, but in a form that brings these capabilities more into line with 
    current Web services standards.</p>

    <p>The WS-BaseFaults specification defines an extensible 
    framework for defining Web services (WSDL) faults, in order to enable better 
    fault management and problem determination in a Web services environment. It 
    extracts, from OGSI, the independent notion of extensible faults and makes 
    them a standalone capability that can be exploited by any Web service 
    interface designer.</p>

    <h2><a name="wsrf14">What is the value of WSRF to customers and 
    software developer?</a></h2>

    <p>The single most valuable aspect of WSRF is that it 
    effectively completes the convergence of the Web service and Grid computing 
    communities.</p>

    <p>Grid customers will benefit from the increased 
    quality and variety of Web service environments supporting the capabilities 
    required for Grid computing. The Grid developer, likewise, will benefit from 
    a wider selection of development tools.</p>

    <p>Web services customers will benefit from the 
    availability of implementations of the powerful resource management 
    primitives embodied in WSRF.</p>

    <h2><a name="wsrf15">How does WS-Resource Framework relate to other 
    Web services standards?</a></h2>

    <p>WSRF specifications build directly on core Web 
    services standards, in particular WSDL, SOAP, and XML, and exploit 
    capabilities provided by WS-Addressing. WSRF specifications introduce 
    mechanisms that we expect to be applicable to emerging specifications such 
    as those being developed within the GGF Data Access and Integration Services 
    (DAIS) working group and the OASIS Web Services Distributed Management (WSDM) 
    technical committee.</p>

    <h2><a name="wsrf16">Are the authors of WSRF abandoning OGSA and OGSI?</a></h2>

    <p>No! WSRF represents a refactoring and evolution of 
    OGSI that delivers essentially the same capabilities in a manner that is 
    more in alignment with the Web services community. As such, it represents an 
    important next step towards the larger goal of a comprehensive Open Grid 
    Services Architecture that supports on-demand, utility computing, 
    collaborative and other "Grid" scenarios within a Web services setting.</p>

    <h2><a name="wsrf17">First OGSI, then WSRF, when will things stop 
    changing?</a></h2>

    <p>The evolution of OGSI to WSRF will certainly delay 
    the completion of a definitive set of specifications for managing state in a 
    Web services context, as some time will be required to review the draft WSRF 
    specifications within a standards body, a process that may of course result 
    in significant changes to those specifications.</p>

    <p>However, the broad support that we see for WSRF from 
    both the Web services and Grid communities suggests that this WSRF 
    standardization process will produce specifications that (i) are not too 
    different from the drafts and (ii) that will stand the test of time as a 
    vital part of Web services infrastructure.</p>

    <h2><a name="wsrf18">Will the WSRF-based GT4 interoperate with GT3?</a></h2>

    <p>The change from OGSI to WSRF represents a change in 
    the fundamental message exchanges and XML definitions that underlie GT. 
    Thus, while these changes are for the most part minor and syntactic, the 
    effect is that a WSRF-based GT4 cannot interoperate (at the message level) 
    with GT3.</p>

    <p>Nevertheless, GT4 will in all other respects be 
    designed to maximize portability of applications and services, via the use 
    of the same programming model and client-side APIs wherever possible. 
    Further, all of the capabilities embodied in the GT3 OGSI-compliant services 
    will evolve into GT4 WSRF-compliant services.</p>

    <h2><a name="wsrf19">Contributors</a></h2>

    <p>Ian Foster, David Snelling</p>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
