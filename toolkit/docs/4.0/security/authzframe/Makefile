FILENAME=index.xml

all: html pdf

cygwin-html:
	xsltproc --stringparam chunk.section.depth 0 \
           --stringparam suppress.navigation 1 \
	   --stringparam  chapter.autolabel 0 \
	   --stringparam  section.autolabel 1 \
            c:/cygwin/usr/share/docbook-xsl/html/chunk.xsl \
           ${FILENAME}

html:
	xsltproc --stringparam chunk.section.depth 0 \
           --stringparam suppress.navigation 1 \
	   --stringparam  chapter.autolabel 0 \
	   --stringparam  section.autolabel 1 \
           ../../admin/docbook/chunk.xsl \
           ${FILENAME}

pdf:
	~bacon/XEP/xep \
	-xml $(FILENAME) \
	-xsl ../../custom_fo.xsl \
	-out index.pdf

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