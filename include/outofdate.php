<?php

function globus_out_of_date()

{


$uri = $_SERVER{'REQUEST_URI'};

# check the docs for outdated and development parts 

if ( preg_match("/^\/toolkit\/docs\/.+\//", $uri) ) {

    if ( preg_match("/^\/toolkit\/docs\/development\//", $uri) ) {
		# only show one subdirs to development
	    if ( preg_match("/^\/toolkit\/docs\/development\/.+\//", $uri) ) {
        	print "<div id='obsolete'  align='center'><p>This document is a work-in-progress and applies to this development release.  The latest drafts of docs can be found in the <a href='http://www.globus.org/toolkit/docs/development/'>Development Documentation directory</a>. <br><br>
	You are strongly encouraged to file bugs for both the development documentation and software on our <a href='http://www-unix.globus.org/toolkit/bugzilla.html'>Bugzilla page</a>. <br><br>
We appreciate your participation.</p></div>";
		}
    }
    else if ( ! (preg_match("/^\/toolkit\/docs\/4.0\//", $uri) or
                 preg_match("/^\/toolkit\/docs\/3.2\//", $uri) ) ) {
        print "<div id='obsolete'  align='center'><p>This information is for a release that is no longer supported by the Globus Toolkit. The currently supported versions of the Globus Toolkit are <a href='http://www.globus.org/toolkit/docs/4.0/'>4.0</a> (recommended) and <a href='http://www.globus.org/toolkit/docs/3.2/'>3.2</a>.</p></div>";
    }
}
}





?>

