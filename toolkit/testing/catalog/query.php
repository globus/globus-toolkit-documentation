<?php include( "../../../include/globus_header.inc" ); ?>

<h1>Query Results:</h1>

<?php 

$dbh = pg_connect( "host=pgsql.mcs.anl.gov dbname=utcatalog " .
    "user=utcat password=utcat.db" )
    or die ( "Postgres connection failed: " .
    pg_last_error( $connection ) );

$page = "";

if ( $_POST['test_name'] )
{
    $tests = $_POST['test_name'];
    foreach( $tests as $test )
    {
        $result = pg_exec( $dbh, "SELECT * FROM test WHERE test_name = '$test'" );

        while ( $row = pg_fetch_assoc( $result ) ) 
        {
            $page .= "<table " .
                "style=\"position: relative; left: 30px; top: 10px; " . 
                "border: 1px solid #bbb;\" " .
                "cellspacing=0 cellpadding=2 width=400>\n";

            $page .= "<tr class=blue-bg>\n<td width=120>Name</td>\n<td>" . 
                $row['test_name'] . "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Package</td>\n<td>";
            $q = pg_exec( $dbh, "SELECT package_name FROM package WHERE " .
                "package_id = '" . $row['package_id'] . "'" );
            $foo = pg_fetch_assoc( $q );
            $page .= $foo['package_name'];
            $page .= "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Directory</td>\n<td>" . 
                $row['test_directory'] . "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Owner</td>\n<td>";
            $q = pg_exec( $dbh, "SELECT owner_name FROM owner WHERE " .
                "owner_id = '" . $row['owner_id'] . "'" );
            $foo = pg_fetch_assoc( $q );
            $page .= $foo['owner_name'];
            $page .= "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Script Name</td>\n<td>" . 
                $row['test_script_name'] . "</td>\n</tr>\n";
            $page .= "<tr>\n<td>Automatible</td>\n<td>" . 
                ( $row['test_automatable'] == "t" ? "true" : "false" ) . 
                "</td>\n</tr>\n";
            $page .= "<tr>\n<td>Thread Safe</td>\n<td>" . 
                ( $row['test_thread_safe'] == "t" ? "true" : "false" ) . 
                "</td>\n</tr>\n";
            $page .= "<tr>\n<td>TESTS.pl</td>\n<td>" . 
                ( $row['test_test_pl'] == "t" ? "true" : "false" ) . 
                "</td>\n</tr>\n";
            $page .= "<tr>\n<td>Nighly Build</td>\n<td>" . 
                ( $row['test_nightly_build'] == "t" ? "true" : "false" ) . 
                "</td>\n</tr>\n";
            $page .= "<tr>\n<td>Documentation</td>\n<td>" . 
                $row['test_documentation'] . "</td>\n</tr>\n";
            $page .= "<tr>\n<td>Environment</td>\n<td>" . 
                $row['test_env'] . "</td>\n</tr>\n";
            $page .= "<tr>\n<td>Updated By</td>\n<td>" . 
                $row['test_by_whom'] . "</td>\n</tr>\n";
            $page .= "<tr>\n<td>Last Updated</td>\n<td>" . 
                $row['test_last_updated'] . "</td>\n</tr>\n";
            $page .= "</table>\n<br>\n";
        }
    }
}
else if ( $_POST['target_name'] )
{
    $targets = $_POST['target_name'];

    foreach( $targets as $target )
    {
        $result = pg_exec( $dbh, "SELECT * FROM target WHERE target_name = '$target'" );

        while ( $row = pg_fetch_assoc( $result ) ) 
        {
            $page .= "<table " .
                "style=\"position: relative; left: 30px; top: 10px; " . 
                "border: 1px solid #bbb;\" " .
                "cellspacing=0 cellpadding=2 width=400>\n";

            $page .= "<tr class=blue-bg>\n<td width=120>Name</td>\n<td>" . 
                $row['target_name'] . "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Package</td>\n<td>";
            $q = pg_exec( $dbh, "SELECT package_name FROM package WHERE " .
                "package_id = '" . $row['package_id'] . "'" );
            $foo = pg_fetch_assoc( $q );
            $page .= $foo['package_name'];
            $page .= "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Release</td>\n<td>";
            $q = pg_exec( $dbh, "SELECT release_name FROM release WHERE " .
                "release_id = '" . $row['release_id'] . "'" );
            $foo = pg_fetch_assoc( $q );
            $page .= $foo['release_name'];
            $page .= "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Description</td>\n<td>" . 
                $row['target_description'] . "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Comments</td>\n<td>" . 
                $row['target_comments'] . "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Third Party</td>\n<td>" . 
                ( $row['target_third_party'] == "t" ? "true" : "false" ) . 
                "</td>\n</tr>\n";
            $page .= "</table>\n<br>\n";
        }
    }
}
else if ( $_POST['targetcoverage'] )
{
    $target_name = $_POST['targetcoverage'];

    $query = "SELECT target_id FROM target WHERE target_name = '$target_name'";
    $result = pg_exec( $dbh, $query );
    $row = pg_fetch_assoc( $result );
    $target_id = $row['target_id'];

    $query = "SELECT test_id FROM coverage WHERE target_id = $target_id";
    $result = pg_exec( $dbh, $query );

    $page .= "<table " .
        "style=\"position: relative; left: 30px; top: 10px; " . 
        "border: 1px solid #bbb;\" " .
        "cellspacing=0 cellpadding=2 width=400>\n";

    $page .= "<tr class=blue-bg>\n<td width=120>Target</td>\n<td>" . 
        "Test</td>\n</tr>\n";

    $set = 0;
    $num_results = 0;
    while ( $row = pg_fetch_assoc( $result ) ) 
    {
        $test_id = $row['test_id'];
        $query = "SELECT test_name FROM test WHERE test_id = $test_id";
        $tmp = pg_exec( $dbh, $query );
        $foo = pg_fetch_assoc( $tmp );
        $test_name = $foo['test_name'];

        $page .= "<tr>\n<td>";
        if ( ! $set )
        {
            $page .= $target_name;
            $set = 1;
        }
        $page .= "</td>\n<td>$test_name</td>\n</tr>\n";
        $num_results++;
    }
    $page .= "</table>\n<br>\n";
    $page = "<p>Number of tests: $num_results</p>\n" . $page;
}
else if ( $_POST['testcoverage'] )
{
    // replace XXX with target
    $test_name = $_POST['testcoverage'];

    $query = "SELECT test_id FROM test WHERE test_name = '$test_name'";
    $result = pg_exec( $dbh, $query );
    $row = pg_fetch_assoc( $result );
    $test_id = $row['test_id'];

    $query = "SELECT target_id FROM coverage WHERE test_id = $test_id";
    $result = pg_exec( $dbh, $query );

    $page .= "<table " .
        "style=\"position: relative; left: 30px; top: 10px; " . 
        "border: 1px solid #bbb;\" " .
        "cellspacing=0 cellpadding=2 width=400>\n";

    $page .= "<tr class=blue-bg>\n<td width=120>Test</td>\n<td>" . 
        "Targets</td>\n</tr>\n";

    $set = 0;
    $num_results = 0;
    while ( $row = pg_fetch_assoc( $result ) ) 
    {
        $target_id = $row['target_id'];
        $query = "SELECT target_name FROM target WHERE target_id = $target_id";
        $tmp = pg_exec( $dbh, $query );
        $foo = pg_fetch_assoc( $tmp );
        $target_name = $foo['target_name'];

        $page .= "<tr>\n<td>";
        if ( ! $set )
        {
            $page .= $test_name;
            $set = 1;
        }
        $page .= "</td>\n<td>$target_name</td>\n</tr>\n";
        $num_results++;
    }
    $page .= "</table>\n<br>\n";
    $page = "<p>Number of targets: $num_results</p>\n" . $page;
}
else if ( $_POST['package_name'] )
{
    $packages = $_POST['package_name'];

    foreach( $packages as $package )
    {
        $result = pg_exec( $dbh, "SELECT * FROM package WHERE package_name = '$package'" );

        while ( $row = pg_fetch_assoc( $result ) ) 
        {
            $page .= "<table " .
                "style=\"position: relative; left: 30px; top: 10px; " . 
                "border: 1px solid #bbb;\" " .
                "cellspacing=0 cellpadding=2 width=400>\n";

            $page .= "<tr class=blue-bg>\n<td width=120>Name</td>\n<td>" . 
                $row['package_name'] . "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Directory</td>\n<td>" . 
                $row['package_directory'] . "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Description</td>\n<td>" . 
                $row['package_description'] . "</td>\n</tr>\n";

            $page .= "</table>\n<br>\n";
        }
    }

    foreach( $packages as $package )
    {
        if ( preg_match( "/test/", $package ) )
        {
            $query = "SELECT test_name, package_name FROM test, package WHERE " .
                "test.package_id = package.package_id " .
                "and package_name = '$package'";

            $result = pg_exec( $dbh, $query );

            $page .= "<table " .
                "style=\"position: relative; left: 30px; top: 10px; " . 
                "border: 1px solid #bbb;\" " .
                "cellspacing=0 cellpadding=2 width=400>\n";

            $page .= "<tr class=blue-bg>\n<td width=120>Package Name</td>\n<td>" . 
                "Test Name</td>\n</tr>\n";

            $set = 0;
            while ( $row = pg_fetch_assoc( $result ) ) 
            {
                $page .= "<tr>\n<td>";
                if ( ! $set )
                {
                    $page .= $row['package_name'];
                    $set = 1;
                }
                $page .= "</td>\n<td>" . 
                    $row['test_name'] . "</td>\n</tr>\n";
            }
            $page .= "</table>\n<br>\n";
        }
    }
}
else if ( $_POST['owner_name'] )
{
    $owners = $_POST['owner_name'];

    foreach( $owners as $owner )
    {
        $result = pg_exec( $dbh, "SELECT * FROM owner WHERE owner_name = '$owner'" );

        while ( $row = pg_fetch_assoc( $result ) ) 
        {
            $page .= "<table " .
                "style=\"position: relative; left: 30px; top: 10px; " . 
                "border: 1px solid #bbb;\" " .
                "cellspacing=0 cellpadding=2 width=400>\n";

            $page .= "<tr class=blue-bg>\n<td width=120>Name</td>\n<td>" . 
                $row['owner_name'] . "</td>\n</tr>\n";

            $page .= "<tr>\n<td>Description</td>\n<td>" . 
                $row['owner_description'] . "</td>\n</tr>\n";

            $page .= "</table>\n<br>\n";
        }
    }
}
else
{
    $page = "Nothing selected";
}

pg_close( $dbh );

echo $page;

?>

<?php include( "../../../include/globus_footer.inc" ); ?>
