FILENAME=toolkit.xml
GRAPHICS=--stringparam admon.graphics.path /docbook-images/ --stringparam admon.graphics 1
NUMBERING=--stringparam  section.autolabel 1 --stringparam  section.label.includes.component.label 1
TITLES=--stringparam  chapter.autolabel 0 
TOCS=--stringparam generate.toc 0

all: html pdf

html:
	xsltproc --stringparam chunk.section.depth 0 \
           ${GRAPHICS} ${NUMBERING} ${TITLES} ${TOCS}\
           admin/docbook/chunk.xsl \
           ${FILENAME}

pdf:
	docbook2pdf \
           -l /usr/share/sgml/docbook/dsssl-stylesheets/dtds/decls/xml.dcl \
           ${FILENAME}

debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
           /usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
           $(FILENAME)

