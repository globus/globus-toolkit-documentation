<?php include( "../../../include/globus_header.inc" ); ?>

<h1>Globus Toolkit Tests</h1>

<?php

include( "library.php" );

$platform = "linux";

$branches = get_dirs( $platform );
foreach( $branches as $branch )
{
    $jdks = get_dirs( "$platform/$branch" );
    foreach( $jdks as $jdk )
    {
        $containers = get_dirs( "$platform/$branch/$jdk" );
        foreach( $containers as $container )
        {
            $components = get_dirs( "$platform/$branch/$jdk/$container" );
            foreach( $components as $component )
            {
                echo "$platform/$branch/$jdk/$container/$component/<br>\n";
            }
        }
    }
}
                
?>

<?php include( "../../../include/globus_footer.inc" ); ?>
