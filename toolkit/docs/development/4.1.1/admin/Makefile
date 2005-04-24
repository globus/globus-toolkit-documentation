XML_CATALOG_FILES=/etc/xml/catalog ../catalog
export XML_CATALOG_FILES
#XML_DEBUG_CATALOG=1
#export XML_DEBUG_CATALOG
FILENAME=index.xml
GRAPHICS=--stringparam admon.graphics.path /docbook-images/ --stringparam admon.graphics 1
NUMBERING=--stringparam  section.autolabel 1 --stringparam  section.label.includes.component.label 1

all: html pdf

html:
	xsltproc --xinclude --stringparam chunk.section.depth 0 \
	--stringparam html.cellspacing "0" \
           ${GRAPHICS} ${NUMBERING} \
           docbook/chunk.xsl \
           ${FILENAME}

pdf:
	docbook2pdf \
           -l /usr/share/sgml/docbook/dsssl-stylesheets/dtds/decls/xml.dcl \
           ${FILENAME}

debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
           /usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
           $(FILENAME)

