FILENAME=example.xml primer.xml
GRAPHICS=--stringparam admon.graphics.path /docbook-images/ --stringparam admon.graphics 1
all: html pdf 
html: 
	xsltproc --stringparam chunk.section.depth 0 \
          ${GRAPHICS} \
	  /usr/share/sgml/docbook/xsl-stylesheets/html/chunk.xsl ${FILENAME}
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