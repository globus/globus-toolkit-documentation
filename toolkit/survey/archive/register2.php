<?php

    $file = "data/survey-results2.txt";

    $data  = "-----------------------------\n";
    $data .= "Date: " . date( "m/d/Y H:i" ) . "\n";
    $data .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    $data .= "First Name: " . $HTTP_POST_VARS['first'] . "\n";
    $data .= "Last Name: " . $HTTP_POST_VARS['last'] . "\n";
    $data .= "Title: " . $HTTP_POST_VARS['title'] . "\n";
    $data .= "Organization: " . $HTTP_POST_VARS['org'] . "\n";
    $data .= "Country: " . $HTTP_POST_VARS['country'] . "\n";
    $data .= "Software: " . $HTTP_POST_VARS['software'] . "\n";
    $data .= "Comments: " . $HTTP_POST_VARS['comments'] . "\n";

    // print "data -> $data\n";

    if ( ! $file_handle = fopen( $file, "a" ) )
    {
        echo "Cannot open file";
    }

    if ( ! fwrite( $file_handle, $data ) )
    {
        echo "Cannot write to file";
    }

    fclose( $file_handle ); 

    include( "../../include/globus_header.inc" );

    print "<h1>Thank You</h1>";

    print "<p>Thank you for taking the time to fill out our survey.<p>";
    print "<p>Your download will begin now...<p>";
    $link = $HTTP_POST_VARS['software'];
    print "<META HTTP-EQUIV=\"refresh\" CONTENT=\"2;URL=http://www-unix.globus.org/ftppub/gt3/3.2/3.2.0/installers/src/$link\">";

    include( "../../include/globus_footer.inc" ); 
?>

