<?xml version="1.0"  encoding="iso-8859-1" ?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                version="1.0">
                
                <!-- Which DocBook standard xsl file should we use as the default? -->
                <xsl:import href="/usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl"/>
                
                <!-- testing: if you want to generate your own html without installing stylesheets, substitute the following url
                for the import href above:
                http://docbook.sourceforge.net/release/xsl/current/html/chunk.xsl
                -->
                
                <!-- make sure to update this depending on testing or production NECESSARY?
                <xsl:param name="base.dir">/www/www-unix.globus.org/toolkit/docs/development/4.2-drafts/</xsl:param>
                -->
                <!-- speed up the chunking process? -->
                <xsl:param name="chunk.fast">1</xsl:param>
                
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
                
                <!-- Disable header and footer navigation 
                <xsl:param name="suppress.navigation">1</xsl:param>-->
                
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
                
                <!-- preventing other html/head/body HTML tags (since they're in the includes) -->
                <xsl:template name="chunk-element-content">
                                <xsl:param name="prev"></xsl:param>
                                <xsl:param name="next"></xsl:param>
                                
                                <xsl:processing-instruction name="php">
                                                <!--     $title="Globus Toolkit Development Release Manuals";  --> 
                                                include_once("http://www.globus.org/toolkit/docs/development/4.2-drafts/includes/globus_header_docbook.inc");
                                ?</xsl:processing-instruction>
                                                 
                                                <xsl:call-template name="user.header.navigation"/>
                                                
                                                <xsl:call-template name="header.navigation">
                                                                <xsl:with-param name="prev" select="$prev"/>
                                                                <xsl:with-param name="next" select="$next"/>
                                                </xsl:call-template>
                                                
                                                <xsl:call-template name="user.header.content"/>
                                                
                                                <xsl:apply-imports/>
                                                
                                                <xsl:call-template name="user.footer.content"/>
                                                
                                                <xsl:call-template name="footer.navigation">
                                                                <xsl:with-param name="prev" select="$prev"/>
                                                                <xsl:with-param name="next" select="$next"/>
                                                </xsl:call-template>
                                                
                                                <xsl:call-template name="user.footer.navigation"/>
                                
                                <xsl:processing-instruction name="php">
                                                include_once("http://www.globus.org/toolkit/docs/development/4.2-drafts/includes/globus_footer_docbook.inc");
                                                ?</xsl:processing-instruction>
                </xsl:template>
                
                 <!-- this customization takes the first row off of the header - found it to repetitive -->
                <xsl:template name="header.navigation">
                                <xsl:param name="prev" select="/foo"/>
                                <xsl:param name="next" select="/foo"/>
                                <xsl:param name="nav.context"/>
                                
                                <xsl:variable name="home" select="/*[1]"/>
                                <xsl:variable name="up" select="parent::*"/>
                                
                                <xsl:variable name="row1" select="$navig.showtitles != 0"/>
                                <xsl:variable name="row2" select="count($prev) &gt; 0
                                                or (count($up) &gt; 0
                                                and generate-id($up) != generate-id($home)
                                                and $navig.showtitles != 0)
                                                or count($next) &gt; 0"/>
                                
                                <xsl:if test="$suppress.navigation = '0' and $suppress.header.navigation = '0'">
                                                <div class="navheader">
                                                                <xsl:if test="$row1 or $row2">
                                                                                <table width="100%" summary="Navigation header">
                                                                                               
                                                                                                <xsl:if test="$row2">
                                                                                                                <tr>
                                                                                                                                <td width="20%" align="left">
                                                                                                                                                <xsl:if test="count($prev)>0">
                                                                                                                                                                <a accesskey="p">
                                                                                                                                                                                <xsl:attribute name="href">
                                                                                                                                                                                                <xsl:call-template name="href.target">
                                                                                                                                                                                                                <xsl:with-param name="object" select="$prev"/>
                                                                                                                                                                                                </xsl:call-template>
                                                                                                                                                                                </xsl:attribute>
                                                                                                                                                                                <xsl:call-template name="navig.content">
                                                                                                                                                                                                <xsl:with-param name="direction" select="'prev'"/>
                                                                                                                                                                                </xsl:call-template>
                                                                                                                                                                </a>
                                                                                                                                                </xsl:if>
                                                                                                                                                <xsl:text>&#160;</xsl:text>
                                                                                                                                </td>
                                                                                                                                <th width="60%" align="center">
                                                                                                                                                <xsl:choose>
                                                                                                                                                                <xsl:when test="count($up) > 0
                                                                                                                                                                                and generate-id($up) != generate-id($home)
                                                                                                                                                                                and $navig.showtitles != 0">
                                                                                                                                                                                <xsl:apply-templates select="$up" mode="object.title.markup"/>
                                                                                                                                                                </xsl:when>
                                                                                                                                                                <xsl:otherwise>&#160;</xsl:otherwise>
                                                                                                                                                </xsl:choose>
                                                                                                                                </th>
                                                                                                                                <td width="20%" align="right">
                                                                                                                                                <xsl:text>&#160;</xsl:text>
                                                                                                                                                <xsl:if test="count($next)>0">
                                                                                                                                                                <a accesskey="n">
                                                                                                                                                                                <xsl:attribute name="href">
                                                                                                                                                                                                <xsl:call-template name="href.target">
                                                                                                                                                                                                                <xsl:with-param name="object" select="$next"/>
                                                                                                                                                                                                </xsl:call-template>
                                                                                                                                                                                </xsl:attribute>
                                                                                                                                                                                <xsl:call-template name="navig.content">
                                                                                                                                                                                                <xsl:with-param name="direction" select="'next'"/>
                                                                                                                                                                                </xsl:call-template>
                                                                                                                                                                </a>
                                                                                                                                                </xsl:if>
                                                                                                                                </td>
                                                                                                                </tr>
                                                                                                </xsl:if>
                                                                                </table>
                                                                </xsl:if>
                                                                <xsl:if test="$header.rule != 0">
                                                                                <hr/>
                                                                </xsl:if>
                                                </div>
                                </xsl:if>
                </xsl:template>
                

                
                               
                
</xsl:stylesheet>