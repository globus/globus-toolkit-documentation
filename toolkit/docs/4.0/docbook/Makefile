all: html pdf 
html: 
	xsltproc --stringparam chunk.section.depth 0 \
	  /usr/share/sgml/docbook/xsl-stylesheets-1.49-1/html/chunk.xsl example.xml
pdf:
	docbook2pdf -l /usr/share/sgml/docbook/dsssl-stylesheets/dtds/decls/xml.dcl \
          example.xml
rh9:
	xsltproc --stringparam chunk.section.depth 0 \
          /usr/share/sgml/docbook/xsl-stylesheets-1.58.1-2/html/chunk.xsl example.xml
debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
          /usr/share/xml/docbook/stylesheet/nwalsh/xhtml/chunk.xsl example.xml

