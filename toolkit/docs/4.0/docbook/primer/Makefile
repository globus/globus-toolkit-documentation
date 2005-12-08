SGML_CATALOG_FILES=/etc/xml/catalog:../../catalog
export SGML_CATALOG_FILES
#XML_DEBUG_CATALOG=1
#export XML_DEBUG_CATALOG
FILENAME=index.xml
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
	 ../../admin/docbook/chunk.xsl \
	 ${FILENAME}
pdf:
	docbook2pdf -l /usr/share/sgml/docbook/dsssl-stylesheets/dtds/decls/xml.dcl \
          ${FILENAME}
man:
	docbook2x-man function.xml && docbook2x-man command.xml
debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
          /usr/share/xml/docbook/stylesheet/nwalsh/xhtml/chunk.xsl ${FILENAME}
debian-pdf:
	docbook2pdf \
           -l /usr/share/sgml/declaration/xml.dcl \
           ${FILENAME}

mac:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam chapter.autolabel 0 \
	/usr/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)