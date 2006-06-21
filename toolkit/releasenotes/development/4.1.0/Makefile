export UMASK=002
export XML_CATALOG_FILES=../../../docs/development/4.1.0/catalog
#export XML_DEBUG_CATALOG= 1
FILENAME= index.xml

all: html

html:
	xsltproc \
	--stringparam chunk.section.depth 0 \
	--stringparam html.cellspacing "0" \
	--stringparam suppress.navigation 1 \
	--stringparam  chapter.autolabel 0 \
	../../../docs/4.0/admin/docbook/chunk.xsl \
	$(FILENAME)

debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
	/usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
	$(FILENAME)
	
	mac:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam chapter.autolabel 0 \
	/sw/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)
	