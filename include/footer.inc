        <!--end div of content-->
      </div>
      <!--ending div of container-->
    </div>

  <!-- Eliminate the sidebar for now ...
    <div id="sidebar">
      <ul>
        <li><?php echo '<a href="'.$SITE_PATHS["WEB_ROOT"].'faq.php">'; ?>FAQ</a><br />
            <?php echo '<a href="'.$SITE_PATHS["WEB_ROOT"].'site_index.php">'; ?>Site Index</a><br />
            <?php echo '<a href="'.$SITE_PATHS["WEB_ROOT"].'contacts.php">'; ?>Contact Us</a><br /><br /></li>
        <li><form method="post" action="http://tiger.mcs.anl.gov/htdig/cgi-bin/htsearch.cgi">
			<input type="hidden" name="config" value="globus" />
			<input type="hidden" name="exclude" value="mail_archive" />
			<font color="#6699ff"><b>Site Search:</b></font><br />
			<input type="text" name="words" size="20" maxlength="2033" value="" />
			</form> 
		</li>
      </ul>
    </div>
  -->

    <div class="clearing">&nbsp;</div>
    <!--ending div of wrapper-->
  </div>
  <!--ending div of outer_wrapper-->
</div>
<div id="footer">
  <hr class="first"/>

  <p class="panel">For questions or feedback about this website: 
     <a href="mailto:webmaster@globus.org">webmaster@globus.org</a><br>
   For technical support or questions about Globus software, visit our 
     <a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."support.html"; ?>">technical support</a> page.</p>
  <p class="panel">Globus, Globus Alliance, and Globus Toolkit are trademarks<br>
    held by the University of Chicago.</p>
  <!--ending div of footer-->
</div>
</body>
</html>
