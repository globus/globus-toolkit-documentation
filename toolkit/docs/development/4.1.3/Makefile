<!--
XML_CATALOG_FILES="catalog.xml  file:///usr/share/xml/docbook/stylesheet/nwalsh/catalog.xml" \
   XML_DEBUG_CATALOG=1 \
FILENAME=index.xml
GRAPHICS=--stringparam admon.graphics.path /user/share/xml/docbook/stylesheet/nwalsh/images/ --stringparam admon.graphics 1

all: html pdf

html:
	xsltproc    \
           custom_html.xsl  \
           ${FILENAME}

pdf:
	/homes/yusra/XEP/xep \
	-xml $(FILENAME) \
	-xsl ~/XEP/nwalsh/fo/docbook.xsl \
	-out index.pdf

debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam suppress.navigation 1 \
	--stringparam  chapter.autolabel 0 \
	--stringparam  section.autolabel 1 \
	--stringparam toc.section.depth 0\
           /usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
           $(FILENAME)

mac:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam chapter.autolabel 0 \
	/usr/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)
	
	-->