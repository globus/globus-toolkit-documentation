#SGML_CATALOG_FILES=/etc/xml/catalog:../../catalog
#export SGML_CATALOG_FILES
#XML_DEBUG_CATALOG=1
#export XML_DEBUG_CATALOG
FILENAME=index.xml quickstart.xml
GRAPHICS=--stringparam admon.graphics.path /docbook-images/ --stringparam admon.graphics 1
NUMBERING=--stringparam  section.autolabel 1 --stringparam  section.label.includes.component.label 1


all: html

html:
	xsltproc \
	custom_html.xsl \
	$(FILENAME)

pdf:
	~bacon/XEP/xep -quiet \
	-xml index.xml \
	-xsl ../../custom_fo.xsl \
	-out admin.pdf

debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
           /usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
	--stringparam html.cellspacing "0" \
           ${GRAPHICS} ${NUMBERING} \
	--catalogs \
           chunk.xsl \
           ${FILENAME}


mac:
	xsltproc --stringparam chunk.section.depth 0 \
           --catalogs \
           --stringparam chapter.autolabel 0 \
           /sw/share/xml/xsl/docbook-xsl/html/chunk.xsl \
           $(FILENAME)

xep:
	/homes/yusra/XEP/xep \
	-xml $(FILENAME) \
	-xsl ~/XEP/nwalsh/fo/docbook.xsl \
	-out index.pdf


