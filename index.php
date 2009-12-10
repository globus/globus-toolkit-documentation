<?php
$title = "";
$section = "section-1";
$pagename = "home";
define("FOOTER_INC",1); //skip the footer
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
<link href="/css/main.css" rel="stylesheet" type="text/css" />
<link href="/css/common.css" rel="stylesheet" type="text/css" />
<link href="/css/home.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=$SITE_PATHS['WEB_ROOT']?>js/common.js"></script>
<title>The Globus Alliance</title>

</head>

<body>
<div id="header">

  <img id="logo" src="img/header/logo.png" />
  <ul id="menu" style="margin-left: 290px;">
    <li id="nav_home_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_home" href="/">Home</a></div><div class="nav_right">&nbsp;</div></li>
    <li id="nav_about_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_about" href="/alliance/">About Globus</a></div><div class="nav_right">&nbsp;</div></li>
    <li id="nav_toolkit_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_toolkit" href="/toolkit/">Globus Toolkit</a></div><div class="nav_right">&nbsp;</div></li>
    <li id=""><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_dev" href="<?=$SITE_PATHS["WEB_DEV_GLOBUS"]; ?>">dev.globus</a></div><div class="nav_right">&nbsp;</div></li>
    <li id="nav_org_container"><div class="nav_left">&nbsp;</div><div class="nav_center"><a id="nav_org" href="/service/">Globus.org Service</a></div><div class="nav_right" style="margin-right: 0px;">&nbsp;</div></li>  </ul>
</div>
<div id="splash">
    <div id="headline">
        <p>Globus is <span class="highlight">open source</span> Grid software that addresses the most challenging problems in <span class="highlight">distributed resource sharing</span></p>
        <div id="news">
            <h2><a href="news.html" style="font-size:24px;">News &amp; Announcements</a></h2>
          	<?
            	 include_once( $SITE_PATHS["SERV_ROOT"]."include/globus_news.php");
             	globus_print_alliance_news_headlines(3);
          	?>
			<p><a href="http://www.globus.org/toolkit/rss/downloadNews/downloadNews.xml"><img src="http://www.globus.org/toolkit/images/iconRSS.gif"  width="35" height="13" border="0"></a>&nbsp;<a href="/toolkit/about_rss.html">What's&nbsp;this?</a></p>            
        </div>
    </div>
</div>
<div id="outer_wrapper">
	<div id="wrapper">
    	<div id="container">
        	<div id="content">
                <div id="content_left">
                	<h1>About Globus</h1>

                    <h2>Globus Alliance</h2>
                    <p>The Globus Alliance is a community of organizations and individuals 
                    developing fundamental technologies behind the "Grid," which lets 
                    people share computing power, databases, instruments, and other 
                    on-line tools securely across corporate, institutional, and geographic 
                    boundaries without sacrificing local autonomy. 
                    <a class="more" href="<?=$SITE_PATHS["WEB_ALLIANCE"]; ?>">Learn more...</a>
                    </p>
                    
                   <h2> Globus Toolkit</h2>
                    <p>The Globus Toolkit is an open source software toolkit used for building 
                    Grid systems and applications. It is being developed by the Globus 
                    Alliance and many others all over the world. A growing number of 
                    projects and companies are using the Globus Toolkit to unlock the 
                    potential of grids for their cause. 
                    <a class="more" href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Learn more...</a></p>
                    
					<h2>Globus.org Service</h2>
					<p>This new online, hosted (i.e. Software-as-a-Service or SaaS) 
					offering provides easy-to-use, end-to-end capabilities to researchers trying to use 
					distributed Grid resources. Now available in limited beta testing, the initial service 
					provides reliable, secure, high-performance, fire-and-forget data transfer. 
					<a class="more" href="/service/">Learn more...</a></p>
					
					<h2>dev.globus Grid Software Community</h2>
                    <p>The Globus Alliance is an active member in the community of Grid 
                    Software developers. Learn more... As partners in e-Science and 
                    e-Business projects, we've built Grid Solutions for a variety of 
                    challenges that come up when people share resources. 
                    <a class="more" href="<?=$SITE_PATHS["WEB_DEV_GLOBUS"]; ?>">Learn more...</a></p>                 
                </div>
                <div id="content_right">
                	<h2>Unlocking Science</h2>
                    <p>Physicists used the Globus Toolkit and MPICH-G2 to harness the power 
                    of multiple supercomputers to simulate the gravitational effects of black 
                    hole collisions. The team, which included researchers from Argonne 
                    National Laboratory, the University of Chicago, Northern Illinois 
                    University, and the Max Planck Institute for Gravitational Physics in 
                    Germany, was awarded a prestigious Gordon Bell prize for its work. </p>

					<div align="center"><img src="img/home/gravitywaves.png" /></div>
                    <span class="image_caption">Image courtesy of Max Planck Institute for Gravitational Physics</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	var this_page='<?=$_SERVER["REQUEST_URI"]; ?>';
	MarkNavSection(this_page,document.getElementById('menu'),'here','');
</script>
</body>
</html>