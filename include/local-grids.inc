<?
if(!defined("LOCAL_INC"))
{
define("LOCAL_INC",1);

    $SITE_PATHS = array();
    // SERV_ROOT   set this to the webserver root.
    // WEB_ROOT    this must be set to include the 'planning' sub folder of this system
    $SITE_PATHS["SERV_ROOT"]              = "/mcs/www-unix.grids-center.org/r6/";
    $SITE_PATHS["WEB_ROOT"]               = "/r6/";

    // Which types of content do we want to display? 1 means "include content," 0 means 
    // "don't include content." Most likely, you only want one of these set to 1.
    $SITE_CONTENT["GLOBUS"]               = 0;
    $SITE_CONTENT["GRIDS"]                = 1;

    $SITE_PATHS["SERV_INC"]               = $SITE_PATHS["SERV_ROOT"]."include/";
    $SITE_PATHS["SERV_ALLIANCE"]          = $SITE_PATHS["SERV_ROOT"]."alliance/";

    $SITE_PATHS["WEB_ALLIANCE"]           = $SITE_PATHS["WEB_ROOT"]."alliance/";
    $SITE_PATHS["WEB_TOOLKIT"]            = "http://www-unix.globus.org/toolkit/staging/";
    $SITE_PATHS["WEB_SOFTWARE"]           = $SITE_PATHS["WEB_ROOT"]."ecosystem/";
    $SITE_PATHS["WEB_SOLUTIONS"]          = $SITE_PATHS["WEB_ROOT"]."solutions/";
    $SITE_PATHS["WEB_CSS"]                = $SITE_PATHS["WEB_ROOT"]."css/";
    $SITE_PATHS["WEB_IMG"]                = $SITE_PATHS["WEB_ROOT"]."img/";
} // end of ifndef

