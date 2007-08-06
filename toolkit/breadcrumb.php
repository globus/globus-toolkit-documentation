<?php


function globus_current_location()
{

    $dir = $_SERVER["REQUEST_URI"];
    $dir = substr($dir, 1);  // Remove leading slash
    $expand_list = split("/", $dir);
    $current = "/";

    # don't show location on top level docs
    if (strlen($dir) < 2) {
        return;
    }

    print "<a href='/'>Home</a> ";

    while ($entry = array_shift($expand_list)) {

        # never show html files
        if ( strstr($entry, "html") == false ) {
            $nice = strtoupper(substr($entry, 0, 1)) . substr($entry, 1);
            $current = $current . "$entry/";
            print "-&gt; <a href='$current'>$nice</a> "; 
        }
    }

    print "\n";
}

?>
