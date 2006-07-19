export UMASK=002
FILENAME=index.xml

# PDF needs to be generated on a machine which has Apache FOP
# installed.

all: html
 
 html:
	xsltproc \
	../../custom_html.xsl \
	$(FILENAME)
        
pdf:
	docbook2pdf -l /usr/share/sgml/docbook/dsssl-stylesheets/dtds/decls/xml.dcl \
          ${FILENAME}
man:
	docbook2x-man function.xml && docbook2x-man command.xml
lint:
	xmllint \
	--valid \
	--noout \
	--noent \
	index.xml


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
