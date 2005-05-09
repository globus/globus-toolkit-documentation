<html>
<?php $version = "2.2"; ?>

<?php include_once( "/mcs/www-unix.globus.org/lib-common.php"); ?>

<head>

<link rel="stylesheet" type="text/css" href="http://www-unix.globus.org/style.css">

<?php $page_title = "Globus Toolkit $version Advisories"; ?>

<title><?php echo $page_title; ?></title>

</head>

<?php include( "/mcs/www-unix.globus.org/include/toolkit_header.inc" ); ?>

<font class=title><?php echo $page_title; ?></font>

<p>
To install update packages, use "gpt-build -update <package>  <flavors>".
To find the flavors of the package which are already installed, use
"gpt-query <package-name>".

<p>
For instance, if you gpt-query globus_openssl_module from a binary
installation, you will find that it is installed in the gcc32dbg
and gcc32dbgpthr flavors.  Thus, to install the update named
globus_openssl_module-0.2.tar.gz, you would run "gpt-build -update
globus_openssl_module-0.2.tar.gz gcc32dbg gcc32dbgpthr".

<p>
If gpt-query includes a "noflavor" version, you do not have to specify
an additional flavor for that.
<br><br>

<!-- Layout Table -->
<table>
<tr>
<td>
<!-- ------------ -->

<p>
<table border=0 cellpadding=0 cellspacing=0 align=left width=700>
<tr>
<td>
    <table bgcolor=#d5d5ff border=0 cellpadding=1 cellspacing=0 width=100%>
    <tr>
    <td>
        <table cellpadding="4" cellspacing="0" border="0" width="100%">
        <tr bgcolor=#ffffff>
        <td valign=bottom class=title>Date</td>
        <td valign=bottom class=title>Package</td>
        <td valign=bottom class=title>Toolkit<br>Version</td>
        <td valign=bottom> </td>
        <td valign=bottom class=title>Description</td>
<?php
    $fd = fopen( "advisories.txt", "r" );
    $toggle_color = 1;
    while ( !feof( $fd ) )
    {
        $date = "";
        $name = "";
        $ver = "";
        $type = "";
        $description = "";

        $buffer = fgets( $fd, 4096 );
        if ( preg_match( "/^\s*$/", $buffer ) )
        {
            next;
        }
        else if ( eregi( "^#", $buffer ) )
        {
            next;
        }
        else 
        {
            if ( $toggle_color )
            {
                print "<tr bgcolor=#e5e5ff>\n";
                $toggle_color = 0;
            }
            else
            {
                print "<tr bgcolor=#ffffff>\n";
                $toggle_color = 1;
            }
           
            list( $date, $name, $ver, $type, $description ) = explode( ";", $buffer );
            // print "$buffer<br>\n";
            print "<td width=90>\n";
            print "$date\n";
            print "</td>\n<td width=250>";
            $packages = explode( ",", $name );
            foreach( $packages as $name )
            {
                $name = eregi_replace( "(.+-*[0-9]+.[0-9]*.[0-9]*)", "<a href=\"http://www-unix.globus.org/ftppub/gt2/2.2/$ver/updates/src/\\1.tar.gz\">\\1</a>", $name );
                print "$name<br>\n";
            }
            print "</td>\n<td align=middle width=40>";
            print "$ver\n";
            print "</td>\n<td width=20>";
            if ( ereg ( "bug", $type ) )
            {
                print "<img src=images/bug.gif><br>\n";
            }
            if ( ereg ( "sec", $type ) )
            {
                print "<img src=images/security.gif><br>\n";
            }
            if ( ereg ( "enh", $type ) )
            {
                print "<img src=images/enhancement.gif><br>\n";
            }
            print "</td>\n<td>";
            $description = eregi_replace( "bug ([0-9]+)", "<a href=http://bugzilla.globus.org/globus/show_bug.cgi?id=\\1>bug \\1</a>", $description );
            print "$description\n";
        }
    }
?>
        </td>
        </tr>
        </table>
    </td>
    </tr>
    </table>
</td>
</tr>
</table>

<!-- Layout Table -->
</tr>
<tr>
<td>
<!-- ------------ -->

<!-- Key -->
<br>
<table>
<tr>
<td noWrap align="right">
    <img border="0" src="images/security.gif" width="20" height="20">
</td>
<td width="99%">Security</td>
</tr>
<tr>
<td noWrap align="right">
    <img border="0" src="images/bug.gif" width="20" height="20">
</td>
<td>Bug Fix</td>
</tr>
<tr>
<td noWrap align="right">
    <img border="0" src="images/enhancement.gif" width="20" height="20">
    </td>
<td>Enhancement</td>
</tr>
</table>

<!-- Layout Table -->
</td>
</tr>
</table>
<!-- ------------ -->


<?php include("/mcs/www-unix.globus.org/include/globus_footer.inc"); ?>

</html>
