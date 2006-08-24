SGML_CATALOG_FILES=/etc/xml/catalog:../../docs/4.0/catalog
export SGML_CATALOG_FILES
#XML_DEBUG_CATALOG=1
#export XML_DEBUG_CATALOG
FILENAME=index.xml

# PDF needs to be generated on a machine which has Apache FOP
# installed.

all: html

html:
	xsltproc --xinclude \
	--catalogs \
           custom_html.xsl  \
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
	$(FILENAME)
	
	mac:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam chapter.autolabel 0 \
	/sw/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)
	