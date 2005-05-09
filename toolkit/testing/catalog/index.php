<?php 

    $title = "Globus Toolkit Unit Test Catalog";

    include( "../../../include/globus_header.inc" ); 
    
    $dbh = pg_connect( "host=pgsql.mcs.anl.gov dbname=utcatalog " .
        "user=utcat password=utcat.db" )
        or die ( "Postgres connection failed: " .
        pg_last_error( $connection ) );

?>

<h1><?php echo $title; ?></h1>

<h2>GT2 Unit Tests</h2>

<?php 

/**
 * Test Packages
 */

$list = "";
$num_packages = 0;

$result = pg_exec( $dbh, "SELECT package_name FROM package" );

while ( $row = pg_fetch_assoc( $result ) ) 
{
    if ( preg_match( "/test/", $row['package_name'] ) )
    {
        $list .= "<option value=" . $row['package_name'] . 
            ">" . $row['package_name'] .  "</option>\n";
        $num_packages++;
    }
}

$list .= "\n</select>\n";

$page  = "<table>\n<tr>\n<td width=180>";
$page .= "<p>Test Packages in database: $num_packages</p>";
$page .= "</td>\n<td>";
$page .= "<form method=post action=query.php>";
$page .= "<select name=package_name[]>\n";
$page .= $list;
$page .= "<input type=\"submit\" value=\"List Tests\">\n";
$page .= "</form>\n</td>\n</tr>\n";
$page .= "</table>\n";

echo $page;

?>

<?php 

/**
 * Target Coverage
 */

$list = "";
$num_packages = 0;

$result = pg_exec( $dbh, "SELECT target_name FROM target" );

while ( $row = pg_fetch_assoc( $result ) ) 
{
    $list .= "<option value=" . $row['target_name'] . 
        ">" . $row['target_name'] .  "</option>\n";
    $num_targets++;
}


$list .= "\n</select>\n";

$page  = "<table>\n<tr>\n<td width=180>";
$page .= "<p>Targets in database: $num_targets</p>";
$page .= "</td>\n<td>";
$page .= "<form method=post action=query.php>";
$page .= "<select name=targetcoverage>\n";
$page .= $list;
$page .= "<input type=\"submit\" value=\"List Coverage\">\n";
$page .= "</form>\n</td>\n</tr>\n";
$page .= "</table>\n";

echo $page;

?>

<?php 

/**
 * Test Coverage
 */

$list = "";
$num_packages = 0;

$result = pg_exec( $dbh, "SELECT test_name FROM test" );

while ( $row = pg_fetch_assoc( $result ) ) 
{
    $list .= "<option value=" . $row['test_name'] . 
        ">" . $row['test_name'] .  "</option>\n";
    $num_tests++;
}


$list .= "\n</select>\n";

$page  = "<table>\n<tr>\n<td width=180>";
$page .= "<p>Tests in database: $num_tests</p>";
$page .= "</td>\n<td>";
$page .= "<form method=post action=query.php>";
$page .= "<select name=testcoverage>\n";
$page .= $list;
$page .= "<input type=\"submit\" value=\"List Coverage\">\n";
$page .= "</form>\n</td>\n</tr>\n";
$page .= "</table>\n";

echo $page;

?>

<br>

<table>
<tr>
<td>

<?php 

/**
 * Tests
 */

$list = "";
$num_tests = 0;

$result = pg_exec( $dbh, "SELECT test_name FROM test" );

while ( $row = pg_fetch_assoc( $result ) ) 
{
    $list .= "<option value=" . $row['test_name'] . 
        ">" . $row['test_name'] .  "</option>\n";
    $num_tests++;
}

$list .= "\n</select>\n";

$page  = "<p>Tests in database: $num_tests</p>";
$page .= "<form method=post action=query.php>";
$page .= "<select size=10 multiple name=test_name[]>\n";
$page .= $list;
$page .= "<br><br>\n";
$page .= "<div style=\"text-align: center;\">";
$page .= "<input type=\"submit\" value=\"Query\">\n";
$page .= "</div>";
$page .= "</form>\n";

echo $page;

?>

</td>
<td>

<?php 

/**
 * Targets
 */

$list = "";
$num_targets = 0;

$result = pg_exec( $dbh, "SELECT target_name FROM target" );

while ( $row = pg_fetch_assoc( $result ) ) 
{
    $list .= "<option value=" . $row['target_name'] . 
        ">" . $row['target_name'] .  "</option>\n";
    $num_targets++;
}

$list .= "\n</select>\n";

$page  = "<p>Targets in database: $num_targets</p>";
$page .= "<form method=post action=query.php>";
$page .= "<select size=10 multiple name=target_name[]>\n";
$page .= $list;
$page .= "<br><br>\n";
$page .= "<div style=\"text-align: center;\">";
$page .= "<input type=\"submit\" value=\"Query\">\n";
$page .= "</div>";
$page .= "</form>\n";

echo $page;

?>

</td>
</tr>
</table>

<h2>GT3 Unit Tests</h2>

<p>OGSA Core</p>
<?php include( "gt3/test.ogsa" ); ?>
<br>
<hr>
<p>Data Management</p>
<?php include( "gt3/test.dm" ); ?>
<br>
<hr>
<p>Resource Management</p>
<?php include( "gt3/test.rm" ); ?>
<br>
<hr>
<p>Information Services</p>
<?php include( "gt3/test.is" ); ?>
<br>
<hr>
<p>Community Authorization Service</p>
<?php include( "gt3/test.cas" ); ?>

<?php include( "../../../include/globus_footer.inc" ); ?>
