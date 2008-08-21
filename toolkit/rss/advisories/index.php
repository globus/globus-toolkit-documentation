<html>
<head><title>Globus Toolkit Advisories RSS Feeds</title></head>

<body>

<p>
Globus Toolkit Advisories RSS Feeds
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
    $i = 0;

    foreach (array_keys($feeds) as $feed) {
        $obsolete = "";
        if (++$i > 2)
        {
            $obsolete = " [unsupported]";
        }
        print "  <li><a href=\"$feeds[$feed]\">Globus Toolkit $feed</a>$obsolete</li>\n";
    }
    closedir($handle);
}
?>
</ul>
</p>

</body>
</html>
