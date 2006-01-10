FILENAME=../../index.xml

all: html pdf

html:
	xsltproc --stringparam chunk.section.depth 0 \
           --stringparam suppress.navigation 1 \
	   --stringparam  chapter.autolabel 0 \
	   --stringparam  section.autolabel 1 \
           ../../admin/docbook/chunk.xsl \
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
	--stringparam chapter.autolabel 0 \
           /usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
           $(FILENAME)

withphp:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam chapter.autolabel 0 \
	  /mcs/www-unix.globus.org/toolkit/documentation/web/docs/development/4.0-drafts/admin/docbook/chunk.xsl \
	$(FILENAME)

debian-pdf:
	docbook2pdf \
	-l /usr/share/sgml/declaration/xml.dcl \
	${FILENAME}

mac:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam chapter.autolabel 0 \
	/usr/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)