SGML_CATALOG_FILES=/etc/xml/catalog:../../catalog
export SGML_CATALOG_FILES
#XML_DEBUG_CATALOG=1
#export XML_DEBUG_CATALOG
FILENAME=index.xml quickstart.xml
FILENAME=quickstart.xml
GRAPHICS=--stringparam admon.graphics.path /docbook-images/ --stringparam admon.graphics 1
NUMBERING=--stringparam  section.autolabel 1 --stringparam  section.label.includes.component.label 1

# PDF needs to be generated on a machine which has Apache FOP
# installed.

all: html

html:
	xsltproc --xinclude --stringparam chunk.section.depth 0 \
	--stringparam html.cellspacing "0" \
           ${GRAPHICS} ${NUMBERING} \
	--catalogs \
           chunk.xsl \
           ${FILENAME}

newpdf:
	# Set Java Home
	# Set FOP_HOME
	xsltproc --catalogs \
	   --stringparam fop.extensions 1 \
	   /usr/share/sgml/docbook/xsl-stylesheets/fo/docbook.xsl index.xml \
         > index.fo
	# fop.sh index.fo index.pdf

pdf:
	docbook2pdf \
           -l /usr/share/sgml/docbook/dsssl-stylesheets/dtds/decls/xml.dcl \
	   -c /etc/sgml/catalog:../../catalog \
           ${FILENAME}

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


