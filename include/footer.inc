<?php 
if(!defined("FOOTER_INC"))
{
	define("FOOTER_INC",1);
	if(strpos($_SERVER["REQUEST_URI"],"/docs/")!==FALSE && $_SERVER["REQUEST_URI"] != $SITE_PATHS["WEB_TOOLKIT"]."downloads/")
	{
		ob_end_flush();
	}
	elseif(substr($_SERVER["PHP_SELF"],0,5) =="/api/")
	{
		ob_end_flush();		
	}
	if($header_sent) {
?> 
        <!--end div of content-->
      </div>
      <!--ending div of container-->
    </div>

    <div class="clearing">&nbsp;</div>
    <!--ending div of wrapper-->
  </div>

<div id="footer">
  <hr class="first"/>
  <p class="panel">For questions or feedback about this website: 
     <a href="mailto:webmaster@globus.org">webmaster@globus.org</a>
     [<a href="<?=$SITE_PATHS["WEB_ROOT"]."privacy/"; ?>">privacy statements</a>]<br>
   For technical support or questions about Globus software, visit our 
     <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."support.html"; ?>">technical support</a> page.</p>
  <p class="panel">Globus, Globus Alliance, and Globus Toolkit are trademarks held by the University of Chicago.</p>
  <!--ending div of footer-->
</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
 _uacct = "UA-726125-2";
 _udn = "globus.org"; 
urchinTracker();
</script> 
<script type="text/javascript">
var this_page='<?=$_SERVER["REQUEST_URI"]; ?>';
MarkNavSection(this_page,document.getElementById('menu'),'here','');
MarkNavLinks(this_page,document.getElementById('subnav_menu'),'here','');
</script>
</body>
</html>
<?php } } ?>