export UMASK=002
export XML_CATALOG_FILES=../../catalog
#export XML_DEBUG_CATALOG= 1
FILENAME= index.xml

all: lint html
pdf: fo xep

html:
	xsltproc \
	--xinclude \
	--stringparam current.docid "executionKey" \
	../../custom_html.xsl \
	$(FILENAME) \
	&& (chgrp -R cvsusers * || true)
	
fo:
	xsltproc \
	--xinclude \
	-o index.fo \
	--stringparam current.docid "executionKey" \
	../../custom_fo.xsl \
	$(FILENAME)
	
xep:	
	/usr/local/RenderX/XEP/xep -quiet \
	-fo index.fo \
	-pdf executionMgtKeyConcepts.pdf
	
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
	

EPS=

# leave these alone
FIGBAKS=$(FIGS:=.fig.bak)
EPSFIGS=$(FIGS:=.eps)
PNGFIGS=$(FIGS:=.png)
CGMFIGS=$(FIGS:=.cgm)

# change this target to change default make behavior
all: pngfigs

### begin boilerplate FIG manipulation ###
# export other versions of FIG files
figs: epsfigs pngfigs cgmfigs

# export EPS form of FIG files
epsfigs: $(EPSFIGS)

# export PNG form of FIG files
pngfigs: $(PNGFIGS)

# export CGM form of FIG files
cgmfigs: $(CGMFIGS)


# generate EPS form of a FIG file
%.eps: %.fig
	fig2dev -L eps -b 1 $< $@

# generate PNG form of a FIG file
%.png: %.fig
	fig2dev -L png -b 1 -S 4 $< $@

# generate CGM form of a FIG file
%.cgm: %.fig
	fig2dev -L cgm $< $@

### end boilerplate FIG manipulation ###

sequence-times.fig: sequence-times.dat plot-sequence-times.gnuplot
	gnuplot plot-sequence-times.gnuplot

clean: force
	rm -f $(EPSFIGS) $(CGMFIGS) $(PNGFIGS)
	rm -f $(FIGBAKS)
	rm -f sequence-times.fig
	rm -f *~

force:

