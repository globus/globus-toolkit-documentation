FILENAME=toolkit.xml

all: html pdf

html:
	xsltproc \
	custom_html.xsl \
	$(FILENAME)

pdf:
	~bacon/XEP/xep -quiet \
	-xml $(FILENAME) \
	-xsl custom_fo.xsl \
	-out index.pdf

debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
           /usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
           $(FILENAME)

mac:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam chapter.autolabel 0 \
	/usr/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)
	
onechunk:
	xsltproc --output release_manuals.html \
	/usr/share/xml/docbook/stylesheet/nwalsh/html/docbook.xsl \
	index.xml