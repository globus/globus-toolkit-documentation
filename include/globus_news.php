<?


$globus_news_db_host       = "coredb.mcs.anl.gov";
$globus_news_db_username   = "globusnews";
$globus_news_db_password   = "Eicuew7e";
$globus_news_db_dbname     = "globusnews";

$globus_news_cache_timeout = 600;  # seconds
$globus_news_cache_dir     = "/tmp";


# *********************************************************************
#
#   public functions
#


function globus_print_toolkit_news_headlines($limit)
{
    globus_print_headlines("toolkit_news_headlines",
                           "toolkit_news='Y'",
                           $limit,
                           "http://www.globus.org/toolkit/news.html",
                           "http://www.globus.org/toolkit/rss/downloadNews/downloadNews.xml");
}


function globus_print_toolkit_press_headlines($limit)
{
    globus_print_headlines("toolkit_press_headlines",
                           "toolkit_press='Y'",
                           $limit,
                           "http://www.globus.org/toolkit/press.html",
                           "http://www.globus.org/toolkit/rss/downloadNews/downloadPress.xml");
}


function globus_print_alliance_news_headlines($limit)
{
    globus_print_headlines("alliance_news_headlines",
                           "alliance_news='Y'",
                           $limit,
                           "http://www.globus.org/news.html",
                           "http://www.globus.org/toolkit/rss/downloadNews/downloadNews.xml");
}


function globus_print_alliance_news($limit)
{
    globus_print_news("alliance_news",
                      "alliance_news='Y'",
                      $limit);
}

function globus_print_toolkit_news($limit)
{
    globus_print_news("toolkit_news",
                      "toolkit_news='Y'",
                      $limit);
}


function globus_print_toolkit_press($limit)
{
    globus_print_news("toolkit_press",
                      "toolkit_press='Y'",
                      $limit);
}


function globus_print_toolkit_news_rss20($limit)
{
    globus_print_rss20("toolkit_rss20",
                       "toolkit_news='Y'",
                       $limit,
                       "Globus Toolkit",
                       "Up-to-date links to new downloads and information for developers using the Globus Toolkit",
                       "http://www.globus.org/toolkit/",
                       "http://www.globus.org/toolkit/images/gtLogo.jpg",
                       "http://www.globus.org/toolkit/news.html");
}


# *********************************************************************
#
#   private functions
#


function globus_print_headlines(
    $name,           # name used for cache file
    $where,          # WHERE clause to select the right news subset
    $limit,          # number of news items to include
    $news_page_url,  # full news page, this is what we are linking to
    $rss_url)        # rss feed url
{
    global $globus_news_cache_dir;

    $cache_file = "$globus_news_cache_dir/globus.org.headlines." .
                   $name . ".$limit";

    # keep the page cached
    if ( !file_exists($cache_file) or
         (filemtime($cache_file) + $globus_news_cache_timeout < time()) ) {

        # cache the output to a file
        $fp = fopen($cache_file, 'w') or die("Could not open $cache_file");

        $dblink = globus_news_db_connect();
        $query = "SELECT id, headline, body, timestamp "
               . " FROM news "
               . " WHERE $where "
               . " ORDER BY timestamp DESC "
               . " LIMIT $limit";
        $result = mysql_query($query)
            or die("Unable to perform query: $query");
        while ( list($id, $headline, $body, $timestamp) 
                    = mysql_fetch_row($result) ) {

            $headline = stripslashes($headline);
            $body = stripslashes($body);
            fwrite($fp, "<span class=\"newsdate\">" .
                   globus_news_timestamp_to_readable($timestamp) .
                   "</span>" .
                   " <strong>$headline</strong>" .
                   " <a href=\"$news_page_url#$id\">Learn more...</a><br>\n");
        }

        # rss link
        fwrite($fp, "<p><a href=\"$rss_url\">" .
                    "<img src=\"http://www.globus.org/toolkit/images/iconRSS.gif\" " .
                    " width=\"35\" height=\"13\" border=\"0\"></a>&nbsp;" .
                    "<a href=\"http://www.globus.org/toolkit/about_rss.html\">What's&nbsp;this?</a></p>");

        fclose($fp);
    }

    include($cache_file);
}


function globus_print_news($name, $where, $limit)
{
    global $globus_news_cache_dir;

    $cache_file = "$globus_news_cache_dir/globus.org.news." . 
                  $name . ".$limit";

    # keep the page cached
    if ( !file_exists($cache_file) or
         (filemtime($cache_file) + $globus_news_cache_timeout < time()) ) {

        # cache the output to a file
        $fp = fopen($cache_file, 'w') or die("Could not open $cache_file");
        $dblink = globus_news_db_connect();

        # first the index
        $query = "SELECT id, headline, timestamp "
               . " FROM news "
               . " WHERE $where "
               . " ORDER BY timestamp DESC "
               . " LIMIT $limit";
        $result = mysql_query($query)
            or die("Unable to perform query: $query");
        fwrite($fp, "<ul>\n");
        while ( list($id, $headline, $timestamp) 
                    = mysql_fetch_row($result) ) {
            $headline = stripslashes($headline);
            fwrite($fp, "<li><span class=\"panel\">" .
                        "<a href=\"#$id\">(" .
                        globus_news_timestamp_to_readable($timestamp) .
                        ")</a></span> " .
                        "<a href=\"#$id\">$headline</a></li>\n");
        }
        fwrite($fp, "</ul>\n");

        # then the news
        $query = "SELECT id, headline, body, timestamp "
               . " FROM news "
               . " WHERE $where "
               . " ORDER BY timestamp DESC "
               . " LIMIT $limit";
        $result = mysql_query($query)
            or die("Unable to perform query: $query");
        while ( list($id, $headline, $body, $timestamp) 
                    = mysql_fetch_row($result) ) {

            $headline = stripslashes($headline);
            $body = stripslashes($body);
            fwrite($fp, "\n<h2><span class=\"panel\"><a name=\"$id\"></a>" .
                        globus_news_timestamp_to_readable($timestamp) .
                        "</span>" .
                        " <strong>$headline</strong></h2>\n" .
                        "<p>\n$body\n</p>\n");
        }

        fclose($fp);
    }

    include($cache_file);
}


function globus_print_rss20(
    $name,         # name used for cache file
    $where,        # WHERE clause to select the right news subset
    $limit,        # number of news items to include
    $title,        # title of RSS feed
    $desc,         # feed description
    $site_url,     # generic url for the website
    $image_url,    # image for the feed 98x96 pixels
    $news_url)     # base url for news page, the outpur for globus_print_news
{
    global $globus_news_cache_dir;

    $cache_file = "$globus_news_cache_dir/globus.org.news." . 
                  $name . ".$limit";

    # keep the page cached
    if ( !file_exists($cache_file) or
         (filemtime($cache_file) + $globus_news_cache_timeout < time()) ) {

        # cache the output to a file
        $fp = fopen($cache_file, 'w') or die("Could not open $cache_file");
        $dblink = globus_news_db_connect();

        fwrite($fp, "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n" .
                    "<rss version=\"2.0\">\n" .
                    "<channel>\n" .
                    "  <title>$title</title>\n" .
                    "  <link>$site_url</link>\n" .
                    "  <atom:link href=\"http://www.globus.org/toolkit/rss/downloadNews/downloadNews.xml\" rel=\"self\" type=\"application/rss+xml\" />\n" .
                    "  <description>$desc</description>\n" .
                    "  <language>en-us</language>\n" .
                    "  <image>\n" .
                    "    <title>$title</title>\n" .
                    "    <url>$image_url</url>" .
                    "    <link>$site_url</link>\n" .
                    "    <width>98</width>\n" .
                    "    <height>96</height>\n" .
                    "  </image>\n");

        # first the index
        $query = "SELECT id, headline, body, timestamp "
               . " FROM news "
               . " WHERE $where "
               . " ORDER BY timestamp DESC "
               . " LIMIT $limit";
        $result = mysql_query($query)
            or die("Unable to perform query: $query");
        while ( list($id, $headline, $body, $timestamp) 
                    = mysql_fetch_row($result) ) {
            $headline = htmlspecialchars(stripslashes($headline));
            $body = htmlspecialchars(stripslashes($body));
            fwrite($fp, "<item>\n" .
                        "  <pubDate>" . 
                        globus_news_timestamp_to_rfc2822($timestamp) . 
                        "</pubDate>\n" .
                        "  <title>$headline</title>\n" .
                        "  <description>$body</description>\n" .
                        "  <link>$news_url#$id</link>\n" .
                        "  <guid>$news_url#$id</guid>\n" .
                        "</item>\n");
        }
        fwrite($fp, "  </channel>\n" .
                    "</rss>\n");

        fclose($fp);
    }

    include($cache_file);
}


function globus_news_db_connect()
{
    global $globus_news_db_host, $globus_news_db_username,
           $globus_news_db_password, $globus_news_db_dbname;

    $link = mysql_pconnect($globus_news_db_host,
                           $globus_news_db_username,
                           $globus_news_db_password)
        or die("Could not connect : " . mysql_error());

    mysql_select_db($globus_news_db_dbname, $link)
        or die("Could not select database ($conf_db_dbname) : " .
               mysql_error());

    return $link;
}


function globus_news_timestamp_to_readable($timestamp)
{
    list($year, $month, $day, $hour, $minute, $second) =
       split("[- :]", $timestamp);

    return "$month.$day.$year";
}


function globus_news_timestamp_to_rfc2822($timestamp)
{
    return date("r", strtotime($timestamp));;
}

?>
