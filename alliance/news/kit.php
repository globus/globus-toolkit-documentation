<?php

$title = "Globus: Press Kit";
$section = "section-2";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">Globus Alliance Press Kit</h1>
    
<p>The Globus Alliance is a research and software development project led 
by Ian Foster (Argonne National Laboratory, University of Chicago) and 
Carl Kesselman (University of Southern California Information Sciences 
Institute), with additional leadership from the Globus Alliance Board.</p>

<p>The goal of the Globus Alliance is to make Grid computing (with all the 
benefits that it provides) a realistic possibility in science, 
engineering, business, and other situations where collaborative work 
happens.</p>

<p>This page provides some references to important facts and 
information about the Globus Alliance for use by members of the press.
</p>

<h2>Getting Started</h2>

<p>For basic information about the Globus Alliance, the Globus Toolkit, 
and Grid computing, it is probably easiest to start with our 
<a href="<?=$SITE_PATHS["WEB_ROOT"]."faq.php"; ?>"> 
Frequently-Asked Questions (FAQ)</a>.</p>

  
<p>For an overview of Grid computing, a good reference is 
<a href="../publications/papers/chapter2.pdf">Chapter 2 ("Computational Grids")</a>
from the book <i>The Grid: Blueprint for a New Computing Infrastructure</i> by
Ian Foster and Carl Kesselman, published by Morgan-Kaufman in 1999. Another 
high-level treatment of the subject can be found in the following article.</p>

<blockquote><b>The Grid: A New Infrastructure for 21st Century Science</b>.
I. Foster. <i>Physics Today</i>, 55(2):42-47, 2002.</blockquote>

<p>For a more detailed overview of the Grid, including specific 
architectural frameworks and the Open Grid Services Architecture (OGSA), please
review the following two papers.</p>

<blockquote><b>
<a href="../publications/papers/anatomy.pdf">
The Anatomy of the Grid: Enabling Scalable Virtual Organizations.</a></b>
I. Foster, C. Kesselman, S. Tuecke. <i> International J. Supercomputer
Applications</i>, 15(3), 2001.</blockquote>

<blockquote><b>
<a href="../publications/papers/ogsa.pdf">
The Physiology of the Grid: An Open Grid Services Architecture for
Distributed Systems Integration.</a></b> I. Foster, C. Kesselman, J. Nick, S.
Tuecke; January, 2002.</blockquote>

<!--
<p>Finally, the Globus Alliance 
<a href="http://www.globus.org/about/site-index.html">site index</a> 
provides a guide to the terminology and acronyms used.</p>
-->

<h2>Contacts</h2>

<table>
<tr><td><a href="http://www.mcs.anl.gov/people/foster">Ian Foster</a><br>
        Mathematics and Computer Science<br>
        Argonne National Laboratory<br>
        9700 Cass Ave<br>
        Argonne, IL, 60439<br>
        Tel: 630 252-4619<br>
        Fax: 630 252-5986<br>
        <a href="mailto:foster@mcs.anl.gov">foster@mcs.anl.gov</a></td>
        <td><a href="http://www.isi.edu/%7Ecarl">Carl Kesselman</a><br>
        USC/Information Sciences Institute<br>
        4676 Admiralty Way, Suite 1001<br>
        Marina del Rey, CA 90292-6695<br>
        Tel: 310 822-1511 x338<br>
        Fax: 310 823-6714<br>
        <a href="mailto:carl@isi.edu">carl@isi.edu</a></small></font></small></td>
     </tr>
    </table>


<h2>Detailed Information</h2>

<p>This website itself is the most comprehensive collection of information
 about the Globus Project and the Globus Toolkit.  The various sections of
 the website detail everything from our future plans for the Globus 
Toolkit to the details of our Application Programmer Interfaces (APIs), 
and much in between.</p>

</div>

<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
