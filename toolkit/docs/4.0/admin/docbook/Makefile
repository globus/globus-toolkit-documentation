
FILENAME=admin.xml

all: html pdf

html:
	xsltproc --stringparam chunk.section.depth 0 \
           /usr/share/sgml/docbook/xsl-stylesheets-1.49-1/html/chunk.xsl \
           ${FILENAME}

pdf:
	docbook2pdf \
           -l /usr/share/sgml/docbook/dsssl-stylesheets/dtds/decls/xml.dcl \
           ${FILENAME}

rh9:
	xsltproc --stringparam chunk.section.depth 0 \
           /usr/share/sgml/docbook/xsl-stylesheets-1.58.1-2/html/chunk.xsl \
           ${FILENAME}

debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
           /usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
           $(FILENAME)

