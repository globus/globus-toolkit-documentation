

# update these with basenames of figures
FIGS=WS_GRAM_components WS_GRAM_software \
	WS_GRAM_functions \
	WS_GRAM_sequence_full \
	WS_GRAM_sequence_minimal \
	WS_GRAM_sequence_delegonly \
	WS_GRAM_sequence_delegonly_hold \
	WS_GRAM_sequence_staging \
	WS_GRAM_sequence_staging_hold \
	WS_GRAM_lifecycle \
	sequence-times \
	sequence-times-manual

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

mac:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam chapter.autolabel 0 \
	/usr/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)