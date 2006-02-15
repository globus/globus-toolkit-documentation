<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:doc="http://nwalsh.com/xsl/documentation/1.0"
                version="1.0"
                exclude-result-prefixes="doc">
                
                <!-- Which DocBook standard xsl file should we use - chunk or docbook? 
                i'm going to start with the default chunk.xsl...the catalog points chunk.xsl to actual file location (not the one in admin/docbook/)-->
                <xsl:import href="chunk.xsl"/>
                
                <!-- Use graphics in admonitions? like 'warnings' 'important' 'note' etc -->
                <xsl:param name="admon.graphics">1</xsl:param>
                
                <!-- Depth to which sections should be chunked -->
                <xsl:param name="chunk.section.depth">0</xsl:param>
                
                <!-- Disable header and footer navigation 
                <xsl:param name="suppress.navigation">1</xsl:param>-->
                
                <!-- Are chapters automatically enumerated? -->
                <xsl:param name="chapter.autolabel">0</xsl:param>
                
                <!-- Are sections enumerated? -->
                <xsl:param name="section.autolabel">1</xsl:param>
                
                <!-- How deep should recursive sections appear in the TOC? -->
                <xsl:param name="toc.section.depth">2</xsl:param>
                
                <!-- the following code configures the book TOC in HTML to just list the chapter titles, 
                and then rely on complete TOCs in each chapter to provide section titles. -->
                <xsl:template match="preface|chapter|appendix|article" mode="toc">
                                <xsl:param name="toc-context" select="."/>
                                
                                <xsl:choose>
                                                <xsl:when test="local-name($toc-context) = 'book'">
                                                                <xsl:call-template name="subtoc">
                                                                                <xsl:with-param name="toc-context" select="$toc-context"/>
                                                                                <xsl:with-param name="nodes" select="foo"/>
                                                                </xsl:call-template>
                                                </xsl:when>
                                                <xsl:otherwise>
                                                                <xsl:call-template name="subtoc">
                                                                                <xsl:with-param name="toc-context" select="$toc-context"/>
                                                                                <xsl:with-param name="nodes"
                                                                                                select="section|sect1|glossary|bibliography|index
                                                                                                |bridgehead[$bridgehead.in.toc != 0]"/>
                                                                </xsl:call-template>
                                                </xsl:otherwise>
                                </xsl:choose>
                </xsl:template>
                
                <!-- want an appendix to use "Appendix" in the title  --> 
                <xsl:param name="local.l10n.xml" select="document('')"/>
                <l:i18n xmlns:l="http://docbook.sourceforge.net/xmlns/l10n/1.0";>
                                <l:l10n language="en">
                                                <l:context name="title-numbered">
                                                                <l:template name="appendix" text="Appendix %n: %t"/>
                                                </l:context>
                                </l:l10n>
                </l:i18n>
                
                <!-- INDEX PARAMETERS -->
                <!-- do you want an index? -->
                <xsl:param name="generate.index">1</xsl:param>
                
                <!-- Select indexterms based on type attribute value -->
                <xsl:param name="index.on.type">1</xsl:param>
                
                <!-- GLOSSARY PARAMETERS -->
                <!-- Display glossentry acronyms? -->
                <xsl:param name="glossentry.show.acronym">yes</xsl:param>
                
                <!-- Name of the glossary collection file -->
                <xsl:param name="glossary.collection">glossary.xml</xsl:param>
                
                <!-- Generate links from glossterm to glossentry automatically? -->
                <xsl:param name="glossterm.auto.link">1</xsl:param>
                
                <!-- if non-zero value for previous parameter, does automatic glossterm linking only apply to firstterms? 
                <xsl:param name="firstterm.only.link">1</xsl:param>-->
                
                <!-- preventing other html/head/body HTML tags (since they're in the includes) have no idea if this will work!
                got this idea from: http://www.mail-archive.com/docbook-apps@lists.oasis-open.org/msg01156.html
                -->
                <xsl:template name="chunk-element-content">
                                <xsl:param name="prev"></xsl:param>
                                <xsl:param name="next"></xsl:param>
                                
                                <xsl:processing-instruction name="php">
                                                include_once("./includes/globus_header_docbook.inc");
                                </xsl:processing-instruction>
<!-- may need a question mark -->
                                                 
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
                                                include_once("./includes/globus_footer_docbook.inc");
                                                </xsl:processing-instruction>
                                <!-- may need a question mark 
                                other troubleshooting: http://www.oasis-open.org/archives/docbook-apps/200407/msg00143.html-->
                </xsl:template>
                

</xsl:stylesheet>


