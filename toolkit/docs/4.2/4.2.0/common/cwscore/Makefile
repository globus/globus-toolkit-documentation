export UMASK=002
export XML_CATALOG_FILES=../../catalog
#export XML_DEBUG_CATALOG= 1
FILENAME= index.xml

all: lint html

html:
	xsltproc \
	--xinclude \
	--stringparam target.database.document "../../olinkdb.xml" \
	--stringparam current.docid "cwscore" \
	../../custom_html.xsl \
	$(FILENAME)


pdf:
	~bacon/XEP/xep \
	-xml $(FILENAME) \
	-xsl ../../custom_fo.xsl \
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
	--noout \
	--noent \
	--xinclude \
	--postvalid \
	$(FILENAME)

olink:
	xsltproc \
	--xinclude \
	--stringparam  collect.xref.targets  "only"  \
	../../custom_html.xsl \
	index.xml
	
olinkRN:
	xsltproc \
	--xinclude \
	--stringparam  collect.xref.targets  "only"  \
	--stringparam  targets.filename  "targetRN.db" \
	../../custom_html.xsl \
	Java_WS_Core_Release_Notes.xml
	
olinkQP:
	xsltproc \
	--xinclude \
	--stringparam  collect.xref.targets  "only"  \
	--stringparam  targets.filename  "targetQP.db" \
	../../custom_html.xsl \
	Java_WS_Core_Quality_Profile.xml
	
olinkM:
	xsltproc \
	--xinclude \
	--stringparam  collect.xref.targets  "only"  \
	--stringparam  targets.filename  "targetM.db" \
	../../custom_html.xsl \
	Java_WS_Core_Migrating_Guide.xml