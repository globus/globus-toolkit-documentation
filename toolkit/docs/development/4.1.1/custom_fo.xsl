<?xml version="1.0"  encoding="iso-8859-1" ?>
<xsl:stylesheet
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
 xmlns:fo="http://www.w3.org/1999/XSL/Format"
 version="1.0">
 
 <!-- now replace all these settings with those specific for use with the fo stylesheet (for pdf output) -->
 <!-- just realized both html and fo can share many parameters - need to create common.xsl that gets imported to both so i can single source
 those variables -->
                
                <!--.the catalog points to actual file location -->
 <xsl:import href="/usr/share/xml/docbook/stylesheet/nwalsh/fo/docbook.xsl"/>
                
                <!-- enable XEP extensions? -->
                <xsl:param name="xep.extensions">1</xsl:param>

                <!-- Use graphics in admonitions? like 'warnings' 'important' 'note' etc COMMON 
 <xsl:param name="admon.graphics">1</xsl:param>-->
                
                <!-- Set path to admonition graphics  COMMON
                <xsl:param name="admon.graphics.path">/www/www-unix.globus.org/docbook-images/</xsl:param>
 -->
                
                <!-- Set path to docbook graphics (testing)
                                <xsl:param name="admon.graphics.path">file:///Z:/testing/alliance/docbook-images/</xsl:param> -->
                
                <!-- Again, if 1 above, what is the filename extension for admon graphics?
 <xsl:param name="admon.graphics.extension" select="'.png'"/> -->
                
                <!-- Set path to callout graphics COMMON
 <xsl:param name="callout.graphics.path">/www/www-unix.globus.orgdocbook-images/</xsl:param>
 -->
                <!-- are parts enumerated?  COMMON
 <xsl:param name="part.autolabel">1</xsl:param> -->
                
                <!-- Are chapters automatically enumerated? COMMON
 <xsl:param name="chapter.autolabel">1</xsl:param> -->
                
                <!-- Are sections enumerated? COMMON
 <xsl:param name="section.autolabel">1</xsl:param> -->
                
                <!-- how deep should each toc be? (how many levels?) COMMON 
 <xsl:param name="toc.max.depth">2</xsl:param>-->
                
                <!-- How deep should recursive sections appear in the TOC? COMMON 
 <xsl:param name="toc.section.depth">1</xsl:param>-->
              

                <!-- INDEX PARAMETERS -->
                <!-- do you want an index? COMMON
 <xsl:param name="generate.index">1</xsl:param> -->
                
                <!-- GLOSSARY PARAMETERS -->
                <!-- Display glossentry acronyms? COMMON
 <xsl:param name="glossentry.show.acronym">yes</xsl:param> -->
                
                <!-- Name of the glossary collection file COMMON 
 <xsl:param name="glossary.collection">glossary.xml</xsl:param>-->
                
                <!-- Generate links from glossterm to glossentry automatically?  COMMON
 <xsl:param name="glossterm.auto.link">1</xsl:param>-->
                
                <!-- if non-zero value for previous parameter, does automatic glossterm linking only apply to firstterms? COMMON
                <xsl:param name="firstterm.only.link">1</xsl:param>-->
                
                               
                
</xsl:stylesheet>