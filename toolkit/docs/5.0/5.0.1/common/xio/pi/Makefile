export UMASK=002
export XML_CATALOG_FILES=../../../catalog
#export XML_DEBUG_CATALOG= 1
FILENAME= index.xml

all: lint html
pdf: fo xep

html:
	xsltproc \
	--xinclude \
	--stringparam current.docid "xioPI" \
	../../../custom_html.xsl \
	$(FILENAME) \
	&& chgrp -R cvsusers *

fo:
	xsltproc \
	--xinclude \
	-o index.fo \
	--stringparam current.docid "xioPI" \
	../../../custom_fo.xsl \
	$(FILENAME)

xep:
	~bacon/XEP/xep -quiet \
	-fo index.fo \
	-pdf xioPublicInterfacesGuide.pdf

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
	/sw/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)
	
lint:
	xmllint \
	--noout \
	--noent \
	--xinclude \
	--postvalid \
	$(FILENAME)

olink:
	xsltproc \
	--xinclude \
	--stringparam  collect.xref.targets  "only"  \
	../../../custom_html.xsl \
	$(FILENAME)
