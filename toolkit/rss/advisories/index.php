<html>
<head><title>Globus Toolkit Advisories RSS Feeds</title></head>

<body>

<ul>
<?php
if ($handle = opendir('.')) {
    $feeds = array();

    while (false !== ($file = readdir($handle))) {
        if (preg_match("/(.*).rss/", $file, $matches)) {
            $feeds[$matches[1]] = $file;
        }
    }

    arsort($feeds);

    foreach (array_keys($feeds) as $feed) {
        print "  <li><a href=\"$feeds[$feed]\">$feed</a></li>\n";
    }
    closedir($handle);
}
?>
</ul>
</body>
</html>
