<?
if(!defined("LOCAL_INC"))
{
define("LOCAL_INC",1);

    $SITE_PATHS = array();
    // SERV_ROOT   set this to the webserver root.
    // WEB_ROOT    this must be set to include the 'planning' sub folder of this system
    $SITE_PATHS["SERV_ROOT"]              = "/mcs/www-unix.globus.org/";
    $SITE_PATHS["SERV_ROOT"]              = "/www/globus.org/";
    $SITE_PATHS["WEB_ROOT"]               = "/";

    // Which types of content do we want to display? 1 means "include content," 0 means 
    // "don't include content." Most likely, you only want one of these set to 1.
    $SITE_CONTENT["GLOBUS"]               = 1;
    $SITE_CONTENT["GRIDS"]                = 0;

    // Paths within the site - so they don't have to be hard-coded everywhere
    $SITE_PATHS["SERV_INC"]               = $SITE_PATHS["SERV_ROOT"]."include/";
    $SITE_PATHS["SERV_ALLIANCE"]          = $SITE_PATHS["SERV_ROOT"]."alliance/";

    $SITE_PATHS["WEB_ALLIANCE"]           = $SITE_PATHS["WEB_ROOT"]."alliance/";
    $SITE_PATHS["WEB_TOOLKIT"]            = $SITE_PATHS["WEB_ROOT"]."toolkit/";
    $SITE_PATHS["WEB_SOFTWARE"]           = $SITE_PATHS["WEB_ROOT"]."grid_software/";
    $SITE_PATHS["WEB_SOLUTIONS"]          = $SITE_PATHS["WEB_ROOT"]."solutions/";
    $SITE_PATHS["WEB_CSS"]                = $SITE_PATHS["WEB_ROOT"]."css/";
    $SITE_PATHS["WEB_IMG"]                = $SITE_PATHS["WEB_ROOT"]."img/";
    $SITE_PATHS["WEB_DEV_GLOBUS"]		  = "http://dev.globus.org";

	require_once($SITE_PATHS["SERV_INC"]."globus_news.php");    
    /*
     * These functions are used by the header script to find includes relative to the current 
     * page's location.  Currently the header walks up the tree looking for a subnav.inc to include
     * 
     */
    
    function AddTrailingSlash($s)
	{		
		if(substr($s,-1,1) != "/")
		{
			$s = $s."/";
		}
		return $s;
	}
	
	function StripTrailingSlash($s)
	{	
		if(substr($s,-1,1) == "/")
		{
			$s = substr($s,0,-1);
		}
		return $s;	
	}    
	/*
	 * findFileInPath() walks up the directory tree to find the first file named $filename
	 */
	function findFileInPath($path,$filename)
	{
		global $SITE_PATHS;
		
		$path = AddTrailingSlash($path);
	
		if(file_exists($path.$filename))
		{
			return $path.$filename;
		}
		while(strlen($path)>=strlen($SITE_PATHS["SERV_ROOT"]))
		{
			$path = StripTrailingSlash($path);
			$path = substr($path,0,strrpos($path,"/"));
			$path = AddTrailingSlash($path);

			if(file_exists($path.$filename))
			{
				return $path.$filename;
			}
		}
		return "";
	}
	
	/* this was moved here so it wouldn't have to be included as needed */
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
	    if(count($expand_list)<2)
			return;
			
	    print "<a href='/'>Home</a> ";
	
	    while ($entry = array_shift($expand_list)) {
	
	        # never show html files
	        if ( strstr($entry, "html") == false && strstr($entry, "php") == false ) {
	            $nice = strtoupper(substr($entry, 0, 1)) . substr($entry, 1);
	            $current = $current . "$entry/";
	            print "-&gt; <a href='$current'>$nice</a> "; 
	        }
	    }
	
	    print "\n";
	}
	
	/* handles the documentation buffer */
	function doc_parse($html)
	{
		$html = trim($html);
		if(substr($html,0,9)=="<!DOCTYPE")
		{
			$body_start = strpos($html,"<body");
			$body_end = strpos($html,">",$body_start);
			$body_close = strpos($html,"</body>");
			$body = substr($html,$body_end+1,$body_close - $body_end-1);
			//echo $body;	
			return $body;	
		}
		return false;
	}
	
	/* handles the api buffer */
	function api_parse($html)
	{
		global $api_header,$header_sent;		
		
		$html = trim($html);
		if(strpos(strtolower($html),"<frame"))
		{
			// this page declares frames, just pass it through 
			return $html;
		}
		elseif(strpos(strtolower($html),"<body"))
		{
			$body_start = strpos($html,"<body");
			$body_end = strpos($html,">",$body_start);
			$body_close = strpos($html,"</body>");
			$body = substr($html,$body_end+1,$body_close - $body_end-1);
			//echo $body;	
			$header_sent = true;
			return $html;	
		}
		else
		{
			// just a pange junk, include the header and finish up 

			$header_sent = true;
			return $api_header.$html;
		}
		return false;
		
	}

	$header_sent = false;
	if($_SERVER["PHP_SELF"]!="/index.php" && substr($_SERVER["PHP_SELF"],0,5) !="/api/")
	{
		include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
		$header_sent = true;
	}
	if(strpos($_SERVER["REQUEST_URI"],"/docs/")!==FALSE && $_SERVER["REQUEST_URI"] != $SITE_PATHS["WEB_TOOLKIT"]."downloads/")
	{
		ob_implicit_flush(false);
		ob_start("doc_parse");
	}
	if(substr($_SERVER["PHP_SELF"],0,5) =="/api/")
	{
		// capture the header in case we need it
		ob_start();
		include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
		$api_header = ob_get_clean();
		
		ob_implicit_flush(false);
		ob_start("api_parse");		
	}
} // end of ifndef

