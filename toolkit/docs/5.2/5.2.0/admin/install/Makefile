export UMASK=002
export XML_CATALOG_FILES=../../catalog
#export XML_DEBUG_CATALOG= 1
FILENAME= index-book.xml
HTMLNAME= index.xml
APPENDIXNAME= appendix.xml
#	../../custom_html.xsl ./toc.xsl\

all: lint html appendix
pdf: fo xep

html:
	xsltproc \
	--xinclude \
	--stringparam current.docid "gtadmin" \
	../../custom_html.xsl \
	$(HTMLNAME) \
	&& (chgrp -R cvsusers * || true)
appendix:
	xsltproc \
	--xinclude \
	--stringparam current.docid "gtadminappendix" \
	--stringparam targets.filename "appendixtarget.db" \
	../../custom_html.xsl \
	$(APPENDIXNAME) \
	&& (chgrp -R cvsusers * || true)

fo:
	xsltproc \
	--xinclude \
	-o index.fo \
	--stringparam current.docid "gtadmin" \
	../../custom_fo.xsl \
	$(FILENAME)

xep:
	/usr/local/RenderX/XEP/xep -quiet \
	-fo index.fo \
	-pdf installingGT.pdf

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
	$(FILENAME)
	xsltproc \
	--xinclude \
	--stringparam  collect.xref.targets  "only"  \
	--stringparam targets.filename "appendixtarget.db" \
	../../custom_html.xsl \
	$(APPENDIXNAME)
 
