export UMASK=002
FILENAME=index.xml

# PDF needs to be generated on a machine which has Apache FOP
# installed.

all: html pdf
 
 html:
	xsltproc \
	../../custom_html.xsl \
	$(FILENAME)
        
pdf:
	~bacon/XEP/xep \
	-xml $(FILENAME) \
	-xsl ../../custom_fo.xsl \
	-out primer.pdf
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
