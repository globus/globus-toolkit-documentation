export UMASK=002
export XML_CATALOG_FILES=../../catalog
#export XML_DEBUG_CATALOG= 1
FILENAME= index.xml
SUBDIRS=admin developer mig pi qp rn user
PDFS=admin/myproxyAdminGuide.pdf user/myproxyUserGuide.pdf developer/myproxyDeveloperGuide.pdf mig/myproxyMigratingGuide.pdf qp/myproxyQualityProfile.pdf rn/myproxyReleaseNotes.pdf

all: lint html subdirs

html:
	xsltproc \
	--xinclude \
	--stringparam current.docid "myproxy" \
	--stringparam generate.toc "" \
	../../custom_html.xsl \
	$(FILENAME) \
	&& chgrp -R cvsusers *

pdf:
	pdftk \
	$(PDFS) \
	cat output myproxy.pdf

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

subdirs:
	for dir in $(SUBDIRS); do \
	cd $${dir}; make; if [ $$? -ne 0 ]; then exit 1; fi; cd ..; \
	done