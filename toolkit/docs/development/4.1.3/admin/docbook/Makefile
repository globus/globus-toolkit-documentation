FILENAME=admin.xml
GRAPHICS=--stringparam admon.graphics.path /docbook-images/ --stringparam admon.graphics 1
NUMBERING=--stringparam  section.autolabel 1 --stringparam  section.label.includes.component.label 1

all: html pdf

html:
	xsltproc --stringparam chunk.section.depth 0 \
           ${GRAPHICS} ${NUMBERING} \
           chunk.xsl \
           ${FILENAME}

pdf:
	docbook2pdf \
           -l /usr/share/sgml/docbook/dsssl-stylesheets/dtds/decls/xml.dcl \
           ${FILENAME}

debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
           /usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
           $(FILENAME)

