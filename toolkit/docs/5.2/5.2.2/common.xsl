<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:exsl="http://exslt.org/common" exclude-result-prefixes="exsl" version="1.0">

    <!-- Parameters to replace version strings in the documentation. There
         are two ways this happens: <replaceable role="entity"> with
         the elment content being one of the parameter names below, or
         in a ulink/@href with the strings {$version} {$shortversion} and
         {$oldversion}.
      -->
    
    <xsl:param name="version" select="'5.2.2'"/>
    <xsl:param name="shortversion" select="'5.2'"/>
    <xsl:param name="oldversion" select="'5.2.1'"/>

    <!-- Set the docid from the root element's id attribute -->
    <xsl:param name="current.docid" select="/*/@id"/>


    <!-- Other common configuation parameters -->

    <!-- Use graphics in admonitions? like 'warnings' 'important' 'note' etc -->
    <xsl:param name="admon.graphics">1</xsl:param>

    <!-- Set path to admonition graphics  -->
    <xsl:param name="admon.graphics.path">/mcs/globus.org/docbook-images/</xsl:param>

    <!-- Set path to docbook graphics (testing)
        <xsl:param name="admon.graphics.path">file:///Z:/testing/alliance/docbook-images/</xsl:param> -->
                
    <!-- Are chapters automatically enumerated? -->
    <xsl:param name="chapter.autolabel">1</xsl:param> 
                
    <!-- Are sections enumerated? -->
    <xsl:param name="section.autolabel">1</xsl:param>

    <!-- do you want an index? -->
    <xsl:param name="generate.index">1</xsl:param>

    <!-- Display glossentry acronyms? -->
    <xsl:param name="glossentry.show.acronym">yes</xsl:param>

    <!-- Name of the glossary collection file -->
    <xsl:param name="glossary.collection" select="'http://root/glossary.xml'"></xsl:param>
                
    <!-- Generate links from glossterm to glossentry automatically?  -->
    <xsl:param name="glossterm.auto.link">1</xsl:param>
                
    <!-- if non-zero value for previous parameter, does automatic glossterm linking only apply to firstterms? 
        <xsl:param name="firstterm.only.link">1</xsl:param>
    -->
               

    <!-- implementation of the version string templates for hrefs relies uses
         this (from
         http://stackoverflow.com/questions/3067113/xslt-string-replace
      -->
    <xsl:template name="string-replace-all">
        <xsl:param name="text"/>
        <xsl:param name="replace"/>
        <xsl:param name="by"/>
        <xsl:choose>
            <xsl:when test="contains($text, $replace)">
                <xsl:value-of select="substring-before($text,$replace)"/>
                <xsl:value-of select="$by"/>
                <xsl:call-template name="string-replace-all">
                    <xsl:with-param name="text" select="substring-after($text,$replace)"/>
                    <xsl:with-param name="replace" select="$replace"/>
                    <xsl:with-param name="by" select="$by"/>
                </xsl:call-template>
            </xsl:when>
            <xsl:otherwise>
                <xsl:value-of select="$text"/>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <!-- replace <replaceable role="entity">version</replaceable>,
                <replaceable role="entity">shortversion</replaceable>,
                and <replaceable role="entity">oldversion</replaceable> 
         with the current and previous versions
     -->
    <xsl:template match="replaceable[@role='entity']">
        <xsl:choose>
            <xsl:when test=". = 'version'">
                <xsl:value-of select="$version"/>
            </xsl:when>
            <xsl:when test=". = 'shortversion'">
                <xsl:value-of select="$shortversion"/>
            </xsl:when>
            <xsl:when test=". = 'previousversion'">
                <xsl:value-of select="$oldversion"/>
            </xsl:when>
            <xsl:otherwise>
                <xsl:message>Undefined replacement text for <xsl:value-of select="."/></xsl:message>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <!-- replace {$version}, {$shortversion} and {$oldversion} in ulink urls with
         the current or previous version
      -->
    <xsl:template match="ulink[
            contains(@url, '{$version}')
            or contains(@url, '{$shortversion}')
            or contains(@url, '{$previousversion}')]">
        <xsl:variable name="replaceversion">
            <xsl:call-template name="string-replace-all">
                <xsl:with-param name="text">
                    <xsl:value-of select="@url"/>
                </xsl:with-param>
                <xsl:with-param name="replace" select="'{$version}'"/>
                <xsl:with-param name="by" select="$version"/>
            </xsl:call-template>
        </xsl:variable>
        <xsl:variable name="replaceshortversion">
            <xsl:call-template name="string-replace-all">
                <xsl:with-param name="text">
                    <xsl:value-of select="$replaceversion"/>
                </xsl:with-param>
                <xsl:with-param name="replace" select="'{$shortversion}'"/>
                <xsl:with-param name="by" select="$shortversion"/>
            </xsl:call-template>
        </xsl:variable>
        <xsl:variable name="replaceoldversion">
            <xsl:call-template name="string-replace-all">
                <xsl:with-param name="text">
                    <xsl:value-of select="$replaceshortversion"/>
                </xsl:with-param>
                <xsl:with-param name="replace" select="'{$oldversion}'"/>
                <xsl:with-param name="by" select="$oldversion"/>
            </xsl:call-template>
        </xsl:variable>
        <xsl:variable name="new-ulink">
            <xsl:element name="ulink">
                <xsl:attribute name="url">
                    <xsl:value-of select="$replaceoldversion"/>
                </xsl:attribute>
                <xsl:copy-of select="@*[local-name() != 'url']"/>
                <xsl:copy-of select="."/>
            </xsl:element>
        </xsl:variable>
        <xsl:apply-templates select="exsl:node-set($new-ulink)"/>
    </xsl:template>
</xsl:stylesheet>
