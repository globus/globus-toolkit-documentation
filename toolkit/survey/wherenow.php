<?php ?>

<p>Download Link:<br><a href=<?php echo $link; ?>><?php echo $link; ?></a></p>

<?php
    if ( preg_match( "/scoap/", $link ) )
    {
        print "<p>ScOAP Instructions:<br><a href=/scoap>http://www-unix.globus.org/scoap/</a></p>\n";
    }
    else if ( preg_match( "/3.9.(\d)/", $link, $matches ) )
    {
        print "<p>[ <a href=../docs/development/3.9.$matches[1]>Globus 3.9.$matches[1] Documents</a> ]<br>\n";
    }
    else if ( preg_match( "/3.9.4/", $link ) )
    {
        print "<p>[ <a href=../docs/development/3.9.4>Globus 3.9.4 Documents</a> ]<br>\n";
    }
    else if ( preg_match( "/3.9.3/", $link ) )
    {
        print "<p>[ <a href=../docs/development/3.9.3>Globus 3.9.3 Documents</a> ]<br>\n";
    }
    else if ( preg_match( "/globus_java_wsrf_core-3.9.0.tar.gz/", $link ) )
    {
        print "<p>[ <a href=../docs/development/wsrf/3.9.0>Globus Java WSRF Core 3.9.0 Documents</a> ]<br>\n";
    }
    else if ( preg_match( "/globus_java_wsrf_core-3.9.1.tar.gz/", $link ) )
    {
        print "<p>[ <a href=../docs/development/wsrf/3.9.1>Globus Java WSRF Core 3.9.1 Documents</a> ]<br>\n";
    }
    else if ( preg_match( "/gt3.9.2-wsrf-source-installer.tar.gz/", $link ) )
    {
        print "<p>[ <a href=../docs/development/3.9.2>Globus Toolkit 3.9.2 Documents</a> ]<br>\n";
    }
    else if ( preg_match( "/3.2.1/", $link ) )
    {
        print "<p>[ <a href=../releasenotes/3.2.1/>3.2.1 Release Notes</a> ]<br>\n";
        print "<p>[ <a href=../docs/3.2/>Globus Toolkit 3.2.1 Documents</a> ]<br>\n";
    }
    else if ( preg_match( "/4.1.(\d)/", $link, $matches ) )
    {
        print "<p>[ <a href=../docs/development/4.1.$matches[1]>Globus 4.1.$matches[1] Documents</a> ]</p>\n";
    }
    else
    {
        print "<p>[ <a href=../releasenotes/4.0.7/>4.0.7 Release Notes</a> ]<br>\n";
        print "[ <a href=../docs/4.0/>Full Documentation</a> ]<br>\n";
        print "[ <a href=../docs/4.0/admin/docbook/>Installation Guide</a> ]<br>\n";
        print "[ <a href=../downloads/>Download Page</a> ]</p>\n";
    }
?>

