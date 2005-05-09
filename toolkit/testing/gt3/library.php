<?php

function get_dirs( $dir )
{
    $dirs = array();

    if ( $handle = opendir( $dir ) )
    {
        while ( false !== ( $file = readdir( $handle ) ) ) 
        {
            if ( $file != "." && $file != ".." ) 
            {
                array_push( $dirs, $file );
            }
        }
        closedir( $handle );
    }

    return $dirs;
}

?>
