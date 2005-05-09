<?php include( "/mcs/www-unix.globus.org/include/globus_header.inc" ); ?>

<?php

    // Setup the filename
    $file = "data/".date( "m.d.Y-H:i" ) . "-" . $_SERVER['REMOTE_ADDR'] . ".txt";
    $file_all = "data/summary.txt";

    $data  = "-----------------------------\n";
    $data .= "First Name: " . $HTTP_POST_VARS['first'] . "\n";
    $data .= "Last Name: " . $HTTP_POST_VARS['last'] . "\n";
    $data .= "Title: " . $HTTP_POST_VARS['title'] . "\n";
    $data .= "Organization: " . $HTTP_POST_VARS['org'] . "\n";
    $data .= "Country: " . $HTTP_POST_VARS['country'] . "\n";
    // $data .= "Software: " . $HTTP_POST_VARS['software'] . "\n";

    $software = $_POST['software'];

    if ( $software )
    {
        foreach( $software as $s )
        {
            $data .= "Software: " . $s . "\n";
        }
    }

    // print "data -> $data\n";

    if ( empty( $HTTP_POST_VARS['first'] ) &&
        empty( $HTTP_POST_VARS['last'] ) &&
        empty( $HTTP_POST_VARS['title'] ) &&
        empty( $HTTP_POST_VARS['org'] ) &&
        empty( $HTTP_POST_VARS['email'] ) &&
        empty( $HTTP_POST_VARS['phone'] ) &&
        empty( $HTTP_POST_VARS['software'] ) )
    {
        print "<h1>No Data</h1>";
        print "The survey contained no data.";
    }
    else
    {
        if ( ! $file_handle = fopen( $file, "a" ) )
        {
            echo "Cannot open file";
        }

        if ( ! $file_handle_all = fopen( $file_all, "a" ) )
        {
            echo "Cannot open summary file";
        }

        if ( ! fwrite( $file_handle, $data ) )
        {
            echo "Cannot write to file";
        }

        if ( ! fwrite( $file_handle_all, $data ) )
        {
            echo "Cannot write to summary file";
        }

        fclose( $file_handle ); 
        fclose( $file_handle_all ); 

        print "<h1>Thank You</h1>";
        print "<p>Survery data is kept strictly confidential. ";
        print "Thank you for taking the time to fill it out.<p>";
    }
?>

<?php include("/mcs/www-unix.globus.org/include/globus_footer.inc"); ?>
