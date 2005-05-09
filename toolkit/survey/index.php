<?php 

    $title = "Globus Toolkit Survey";

    $download = $HTTP_GET_VARS['download'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $country = $HTTP_POST_VARS['country'];
    $software = $HTTP_POST_VARS['software'];
    $first = $HTTP_POST_VARS['first'];
    $last = $HTTP_POST_VARS['last'];
    $title = $HTTP_POST_VARS['title'];
    $org = $HTTP_POST_VARS['org'];
    $comments = $HTTP_POST_VARS['comments'];

    include( "../../include/globus_header.inc" );

    $dbh = pg_connect( "host=pgsql.mcs.anl.gov dbname=gtsurvey " .
        "user=gtsurvey password=gtsurvey.db" )
        or die ( "Postgres connection failed: " .
        pg_last_error( $connection ) );

    if ( $download != "" )
    {
        $query = "SELECT software_filename FROM software where " .
            "software_filename = '$download'";
        $result = pg_exec( $dbh, $query );

        if ( $row = pg_fetch_assoc( $result ) )
        {
            $software = $download;
        }
    }

    if ( ( $country != "" ) and ( $ip != "" ) )
    {
        include( "register.php" );
    }

    include( "survey.php" );

    if ( ( $country != "" ) and ( $ip != "" ) )
    {
        include( "wherenow.php" );
    }

    pg_close( $dbh );
       
    include( "../../include/globus_footer.inc" );
?>
