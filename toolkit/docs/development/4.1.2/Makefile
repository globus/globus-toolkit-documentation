export UMASK=002
export XML_CATALOG_FILES=catalog
#export XML_DEBUG_CATALOG= 1
FILENAME= index.xml

all: lint html docbook/primer/index.html

html:
	xsltproc \
	custom_html.xsl \
	$(FILENAME)
	chgrp -R cvsusers

pdf:
	~bacon/XEP/xep \
	-xml $(FILENAME) \
	-xsl custom_fo.xsl \
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
	/sw/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)
	
lint:
	xmllint \
	--valid \
	--noout \
	--noent \
	index.xml

docbook/primer/index.html: docbook/primer/index.xml
	cd docbook/primer && make

docbook/primer/index.xml:
