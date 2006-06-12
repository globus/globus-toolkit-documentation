<?xml version="1.0"  encoding="iso-8859-1" ?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                version="1.0">
                
                <!-- Which DocBook standard xsl file should we use as the default? -->
                <xsl:import href="/usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl"/>
                
                <!-- testing: if you want to generate your own html without installing stylesheets, substitute the following url
                for the import href above:
                http://docbook.sourceforge.net/release/xsl/current/html/chunk.xsl
                -->

                <!-- speed up the chunking process? -->
                <xsl:param name="chunk.fast">1</xsl:param>
                
                <!-- which css stylesheet to use?
                <xsl:param name="html.stylesheet" select="'/toolkit/css/default.css'"></xsl:param> -->
                
                <!-- Use graphics in admonitions? like 'warnings' 'important' 'note' etc -->
                <xsl:param name="admon.graphics">1</xsl:param>
                
                <!-- Set path to admonition graphics  -->
                <xsl:param name="admon.graphics.path">/docbook-images/</xsl:param>
               
                
                <!-- Set path to docbook graphics (testing)
                                <xsl:param name="admon.graphics.path">file:///Z:/testing/alliance/docbook-images/</xsl:param> -->
                
                <!-- Again, if 1 above, what is the filename extension for admon graphics? -->
                <xsl:param name="admon.graphics.extension" select="'.gif'"/>
                
                <!-- Set path to callout graphics -->
                <xsl:param name="callout.graphics.path">/docbook-images/</xsl:param>
                
                <!-- Depth to which sections should be chunked -->
                <xsl:param name="chunk.section.depth">0</xsl:param>
                
                <!-- Are parts automatically enumerated? -->
                <xsl:param name="part.autolabel">0</xsl:param>
                
                <!-- Are chapters automatically enumerated? -->
                <xsl:param name="chapter.autolabel">0</xsl:param>
                
                <!-- Are sections enumerated? -->
                <xsl:param name="section.autolabel">1</xsl:param>
                
                <!-- how deep should each toc be? (how many levels?) -->
                <xsl:param name="toc.max.depth">2</xsl:param>
                
                <!-- How deep should recursive sections appear in the TOC? -->
                 <xsl:param name="toc.section.depth">1</xsl:param>
                
                <!-- Should the first section be chunked separately from its parent? > 0 = yes-->
                <xsl:param name="chunk.first.sections">1</xsl:param>
                
                <!-- Instead of using default filenames, use ids for filenames (dbhtml directives take precedence) -->
                <xsl:param name="use.id.as.filename">1</xsl:param>
                

                <!-- INDEX PARAMETERS -->
                <!-- do you want an index?  -->
                <xsl:param name="generate.index">1</xsl:param>
               
                <!-- Select indexterms based on type attribute value -->
                <xsl:param name="index.on.type">1</xsl:param>
                
                <!-- GLOSSARY PARAMETERS -->
                <!-- Display glossentry acronyms? -->
                <xsl:param name="glossentry.show.acronym">yes</xsl:param>
                
                <!-- Name of the glossary collection file -->
                <xsl:param name="glossary.collection" select="'glossary.xml'"></xsl:param>
                
                <!-- Generate links from glossterm to glossentry automatically? -->
                <xsl:param name="glossterm.auto.link">1</xsl:param>
                
                <!-- if non-zero value for previous parameter, does automatic glossterm linking only apply to firstterms?
                <xsl:param name="firstterm.only.link">1</xsl:param> -->
                
                <!-- permit wrapping of long lines of code
                <xsl:attribute-set name="monospace.verbatim.properties" 
                                use-attribute-sets="verbatim.properties monospace.properties">
                                <xsl:attribute name="wrap-option">wrap</xsl:attribute>
                </xsl:attribute-set> -->
                
                <!-- INCORPORATING DOCBOOK PAGES INTO WEBSITE -->
                
                <!-- make sure there's a DOCTYPE in the html output (otherwise, some css renders strangely -->
                <xsl:param name="chunker.output.doctype-public" select="'-//W3C//DTD HTML 4.01 Transitional//EN'"/>
                <xsl:param name="chunker.output.doctype-system" select="'http://www.w3.org/TR/html4/loose.dtd'"/>
                
                <!-- add elements to the HEAD tag -->
                <xsl:template name="user.head.content">
                                <link href="/toolkit/css/default.css" rel="stylesheet" type="text/css" /> 
                                <link rel="stylesheet" type="text/css" href="/toolkit/css/print.css" media="print" />
                                <link rel="alternate" title="Globus Toolkit RSS" href="/toolkit/rss/downloadNews/downloadNews.xml" type="application/rss+xml"/>
                                <script>
                                                <xsl:comment>
                                                function GlobusSubmit()
                                                {
                                                var f=document.GlobusSearchForm;
                                                
                                                f.action="http://www.google.com/custom";
                                                if (f.elements[0].checked) {
                                                f.q.value = f.qinit.value + " -inurl:mail_archive " ;
                                                } else {
                                                f.q.value = f.qinit.value + " inurl:mail_archive " ;
                                                }
                                                }
                                                </xsl:comment>
                                </script>
                </xsl:template>
                
                <!-- add an attribute to the BODY tag -->
                <xsl:template name="body.attributes">
                                <xsl:attribute name="class">section-3</xsl:attribute>
                </xsl:template>
                
                <!-- pull in 'website' with this code by modifying chunk-element-content from html/chunk-common.xsl-->
                <xsl:template name="chunk-element-content">
                                <xsl:param name="prev"/>
                                <xsl:param name="next"/>
                                <xsl:param name="nav.context"/>
                                <xsl:param name="content">
                                                <xsl:apply-imports/>
                                </xsl:param>
                                
                                <xsl:call-template name="user.preroot"/>
                                
                                <html>
                                                <xsl:call-template name="html.head">
                                                                <xsl:with-param name="prev" select="$prev"/>
                                                                <xsl:with-param name="next" select="$next"/>
                                                </xsl:call-template>
                                                
                                                <body>
                                                                <xsl:call-template name="body.attributes"/>
                                                                <xsl:processing-instruction name="php">
                                                                                include_once("http://www.globus.org/toolkit/docs/development/4.2-drafts/includes/globus_header_docbook.inc");
                                                                                ?</xsl:processing-instruction>
                                                                
                                                                <div id="sidebarMenu">
                                                                                <h2 class="smalltitle">Software Links</h2>
                                                                                <dl class="leftColumn">
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/Usage_Stats.html">Usage Statistics</a></dt>
                                                                                                <dt><a href="/toolkit/releasenotes/">Release Notes</a></dt>
                                                                                                <dt><a href="/toolkit/versioning.html">Versioning</a></dt>
                                                                                                <dt><a href="/toolkit/downloads/">Downloads</a></dt>
                                                                                                <dt><a href="/toolkit/advisories.html">Advisories</a></dt>
                                                                                                <dt><a href="/toolkit/legal/">Licenses</a></dt>
                                                                                                <dt><a href="http://dev.globus.org/wiki/How_to_contribute">CVS &amp; Dev Tools</a></dt>
                                                                                </dl>
                                                                                
                                                                                <h2 class="smalltitle">Getting Started</h2>
                                                                                <dl class="leftColumn">
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/doc_overview.html">Doc Structure</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/key/">A Globus Primer</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/admin/docbook/quickstart.html">Quickstart</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/admin/docbook/">Installing GT</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/admin/docbook/gtadmin-platform.html">Platform Notes</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/toolkit-migrating-gt2.html">Migrating from GT2</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/toolkit-migrating-gt3.html">Migrating from GT3</a></dt>
                                                                                </dl>
                                                                                
                                                                                <h2 class="smalltitle">Reference</h2>
                                                                                <dl class="leftColumn">
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/releaseManuals.pdf">PDF version</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/toolkit-bestpractices.html">Best Practices</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/coding_guidelines.html">Coding Guidelines</a></dt>
                                                                                                <dt><a href="/api/">API docs</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/toolkit-public-interface">Public Interfaces</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/toolkit-rp.html">Resource Properties</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/toolkit-samples.html">Samples</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/glossary.html">Glossary</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/si01.html">Index</a></dt>
                                                                                                <dt><a href="/toolkit/docs/development/4.2-drafts/perf_overview.html">Performance Studies</a></dt>
                                                                                </dl>
                                                                                
                                                                </div>
                                                                
                                                                <xsl:call-template name="user.header.navigation"/>
                                                                
                                                                <xsl:call-template name="header.navigation">
                                                                                <xsl:with-param name="prev" select="$prev"/>
                                                                                <xsl:with-param name="next" select="$next"/>
                                                                                <xsl:with-param name="nav.context" select="$nav.context"/>
                                                                </xsl:call-template>
                                                                
                                                                <xsl:call-template name="user.header.content"/>
                                                                
                                                                
                                                               

                                                                
                                                                <xsl:copy-of select="$content"/>
                                                                
                                                                <xsl:call-template name="user.footer.content"/>
                                                                
                                                                <xsl:call-template name="footer.navigation">
                                                                                <xsl:with-param name="prev" select="$prev"/>
                                                                                <xsl:with-param name="next" select="$next"/>
                                                                                <xsl:with-param name="nav.context" select="$nav.context"/>
                                                                </xsl:call-template>
                                                                
                                                                <xsl:call-template name="user.footer.navigation"/>
                                                                
                                                                <div id="footer">
                                                                                <hr class="first"/>
                                                                                
                                                                                <p>Comments? <a href="mailto:webmaster@globus.org">webmaster@globus.org</a></p>
                                                                                <p>Globus Project and Globus Toolkit are trademarks<br />
                                                                                                held by the University of Chicago</p>
                                                                                <!--ending div of footer-->
                                                                </div>
                                                                <xsl:processing-instruction name="php">
                                                                                include_once("http://www.globus.org/toolkit/docs/development/4.2-drafts/includes/globus_footer_docbook.inc");
                                                                                ?</xsl:processing-instruction>
                                                      
                                                </body>
                                </html>
                </xsl:template>
                
                <!-- prevent h1 and h2 using clear: both - want to control in css, instead -->
                <xsl:template name="section.heading">
                                <xsl:param name="section" select="."/>
                                <xsl:param name="level" select="'1'"/>
                                <xsl:param name="title"/>
                                <xsl:element name="h{$level+1}">
                                                <xsl:attribute name="class">title</xsl:attribute>
                                                <a>
                                                                <xsl:attribute name="name">
                                                                                <xsl:call-template name="object.id">
                                                                                                <xsl:with-param name="object" select="$section"/>
                                                                                </xsl:call-template>
                                                                </xsl:attribute>
                                                </a>
                                                <xsl:copy-of select="$title"/>
                                </xsl:element>
                </xsl:template>

</xsl:stylesheet>