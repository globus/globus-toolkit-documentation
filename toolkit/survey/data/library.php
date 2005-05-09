<?php

function get_total_records( $dbh )
{
    # get the number of survey entries
    $query = "SELECT * FROM survey";
    $result = pg_exec( $dbh, $query );
    return pg_num_rows( $result );
}

function reverse_subcomponents_of_hash_keys( $hash )
{
    $newhash = "";
    foreach( $hash as $key=>$value )
    {
        $components = preg_split( '/\./', $key );
        $reversed = array_reverse( $components );
        $newkey = "";

        foreach ( $reversed as $element ) 
        {
            $newkey .= $element . ".";
        }
        $newkey = preg_replace( "/^\./", "", $newkey );
        $newkey = preg_replace( "/\.$/", "", $newkey );

        $newhash["$newkey"] = $value;
    }
    return $newhash;
}

?>
