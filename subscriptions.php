<?php

$title = "Globus: Subscription Center";

$section = "section-2";
include_once( "include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>
</div>

<div id="main">

<!-- content STARTS here -->


<h1>Subscription Center</h1>
 <p>The Globus Alliance maintains several public mailing lists for announcements and discussions about the Globus Toolkit and other Grid technologies. This page allows you to subscribe to or unsubscribe from these lists.</p>
 
<p>Also, whether or not you're subscribed, you may <b> <a href="email-archive-search.php">search our mail list archives</a></b>.</p> 

<form ACTION="http://www-unix.globus.org/support/globus_subscribe.pl" METHOD="POST">

<p>My email address is: <input NAME="email" SIZE="30"><br>

 <small><b>WARNING:</b> Please be sure that the address you enter here is the address that will appear on any messages you send to these lists!  If the address on your messages is different from this one, your postings will not be sent to other list subscribers.</p>

<p><select name="action" size="1">
<option value="subscribe" selected>Subscribe me to</option>
<option value="unsubscribe">Unsubscribe me from</option>
</select> the following lists...</p>

      <table>
        <tr bgcolor="#FF6633">
          <td colspan=2><b>Awareness Lists</b> (all lists are in the globus.org domain)</td>
        </tr>
        <tr valign="top">
          <td valign="top" width="50%"><input NAME="list_announce" type="checkbox" value="ON" checked> <b>announce</b><br>

           (~3/month) Keep informed about new software releases, Globus events, etc.<br>
          [<a href="http://www-unix.globus.org/mail_archive/announce/threads.html">view archive</a>]</td>
          <td valign="top" width="50%"><input NAME="list_security-announce" type="checkbox" value="ON"> <b>security-announce</b><br>
(~4/year) Keep informed about security vulnerabilities in Globus Toolkit software.<br> [<a href="http://www-unix.globus.org/mail_archive/security-announce/threads.html">view archive</a>]</font></td>

        </tr>
        <tr valign="top">
          <td valign="top" width="50%"><input NAME="list_cog-news" type="checkbox" value="ON"> <b>cog-news</b><br>
          (~1/month) Stay informed about Java, CORBA, Python, etc. interfaces to the Grid.<br>
          [<a href="http://www-unix.globus.org/mail_archive/cog-news/threads.html">view archive</a>]</td>
          <td valign="top" width="50%"><br><br></td>

        </tr>
        <tr bgcolor="#FF6633">
          <td colspan=2><b>Discussion Lists</b> (all lists are in the globus.org domain)</td>
        </tr>
        <tr valign="top">
          <td valign="top" width="50%"><input NAME="list_discuss" type="checkbox" value="ON" checked> <b>discuss</b><br>

            (~26/day) Talk about the Globus Toolkit with users and alliance staff.<br>
          [<a href="http://www-unix.globus.org/mail_archive/discuss/threads.html">view archive</a>]</td>
          <td valign="top" width="50%"><input NAME="list_developer-discuss" type="checkbox" value="ON"> <b>developer-discuss</b><br>
            (~3/day) Discuss Globus Toolkit porting and development activities with the open source community.<br>
          [<a href="http://www-unix.globus.org/mail_archive/developer-discuss/threads.html">view archive</a>]</td>

        </tr>
        <tr valign="top">
          <td valign="top" width="50%"><input NAME="list_mpich-g" type="checkbox" value="ON"> <b>mpi</b><br>
          (~1/day) Discuss Grid-enabled implementations of MPI, such as MPICH-G2.<br>
          [<a href="http://www-unix.globus.org/mail_archive/mpich-g/threads.html">view archive</a>]</font></td>
          <td valign="top" width="50%"><input NAME="list_contrib-discuss" type="checkbox" value="ON"> <b>contrib-discuss</b><br>

            (~2/week) Discuss procedures and standards for contributions to the Globus Toolkit with the open source community.<br>
          [<a href="http://www-unix.globus.org/mail_archive/contrib-discuss/threads.html">view archive</a>]</td>
        </tr>
        <tr valign="top">
          <td valign="top" width="50%"><input NAME="list_java" type="checkbox" value="ON"> <b>java</b><br>
(~1/week) Discuss Java interfaces to the Grid.<br>

          [<a href="http://www-unix.globus.org/mail_archive/java/threads.html">view archive</a>]</td>
          <td valign="top" width="50%"><input NAME="list_python-discuss" type="checkbox" value="ON"> <b>python-discuss</b><br>
            (~1/week) Discuss Python interfaces to the Grid.<br>
          [<a href="http://www-unix.globus.org/mail_archive/python-discuss/threads.html">view archive</a>]</small></font></td>

        </tr>
        <tr valign="top">
          <td valign="top" width="50%"><input NAME="list_cray" type="checkbox" value="ON"> <b>cray</b><br>
          (~2/month) Discuss using the Globus Toolkit on Cray systems.<br>
          [<a href="http://www-unix.globus.org/mail_archive/cray/threads.html">view archive</a>]</td>
          <td valign="top" width="50%"><br></td>

        </tr>
      </table>
<br>

      <p><input TYPE="submit" value="Do it now"> </p>
    </form>

<!--END-->

</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
