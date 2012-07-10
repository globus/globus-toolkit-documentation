# Export this in the environment so that xsltproc can use a local catalog
export XML_CATALOG_FILES=$(CURDIR)/$(TOPDIR)/catalog
#export XML_DEBUG_CATALOG= 1

# Allow local overrides
ifneq ($(wildcard $(TOPDIR)/local.mk),)
include $(TOPDIR)/local.mk
endif

# Default source and target. In the admin guide, we have multiple targets
# in a single dir, so some tricks are done there
SOURCE      = index.xml
PDF_SOURCE  = index.xml

# default html file if not specified
ifeq (,$(HTML_FILES))
    HTML_FILES = index.html
endif

# default lint file if not specified
ifeq (,$(LINT_FILES))
    ifneq (,$(HTML_FILES))
        LINT_FILES = $(patsubst %.html,%.lint,$(HTML_FILES))
    endif
endif

# default olink db file if not specified
ifeq (,$(DB_FILES))
    DB_FILES    = target.db
endif

# default fo files if not specified
ifeq (,$(FO_FILES))
    FO_FILES    = index.fo
endif

CLEANFILES = $(HTML_FILES) $(PDF_FILES) $(LINT_FILES) $(DB_FILES) $(FO_FILES)
DISTCLEANFILES = dependencies

# Determine if xep or fop are available automatically
ifeq (,$(XEP)$(FOP))
    ifneq (,$(shell which xep))
        XEP=$(shell which xep)
    else
	ifneq (,$(shell which /usr/local/RenderX/XEP/xep))
            XEP=/usr/local/RenderX/XEP/xep
        else
	    ifneq (,$(shell which fop))
        	FOP=$(shell which fop)
	    endif
	endif
    endif
endif

# If we can use xep or fop, define some macros to build the pdf documentation
ifneq (,$(XEP))
    FO_PARAMS=--param xep.extensions 1 --param fop1.extensions 0
    FO_TO_PDF=$(XEP) -quiet \
            -fo $(firstword $(patsubst %.xml,%.fo,$+ $(SOURCE))) \
            -out $@
    PDF_TARGET=pdf
else
    ifneq (,$(FOP))
    FO_PARAMS=--param xep.extensions 0 --param fop1.extensions 1
    FO_TO_PDF=$(FOP) -q $(firstword $(patsubst %.xml,%.fo,$+ $(SOURCE))) $@
    PDF_TARGET=pdf
    endif
endif

# if pdftk is available, us it to concatenate pdf files, otherwise, use gs
# if available
ifneq (,$(shell which pdftk))
    CONCAT_PDFS = pdftk $(filter %.pdf,$^) cat output $@
else
    ifneq (,$(shell which gs))
    CONCAT_PDFS = gs -q -sPAPERSIZE=letter -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$@ $(filter %.pdf,$^)
    else
	CONCAT_PDFS=:
    endif
endif

# on cvs.globus.org, we want to change group ownership to be cvsusers so 
# that different committers can overwrite files
ifneq (,$(shell id cvsusers 2>/dev/null || :))
   SET_FILE_PERMISSIONS=chgrp -R cvsusers *
endif

# default rule
all: dependencies olink html $(PDF_TARGET)

olink: olink-recursive $(DB_FILES)
lint: lint-recursive $(LINT_FILES)
html: html-recursive $(HTML_FILES)
pdf: pdf-recursive $(PDF_FILES) $(PDF_COLLECTIONS)
clean: clean-recursive
	@for f in $(CLEANFILES); do [ -f "$$f" ] && rm "$$f" || true; done
distclean: distclean-recursive
	@for f in $(CLEANFILES) $(DISTCLEANFILES); do [ -f "$$f" ] && rm "$$f" || true; done
	
olink-recursive lint-recursive html-recursive pdf-recursive clean-recursive distclean-recursive:
	@if [ "$(SUBDIRS)" != "" ]; then \
            for dir in $(SUBDIRS); do echo "Entering $$dir [$(subst -recursive,,$@])" ; $(MAKE) -C $$dir $(subst -recursive,,$@) || exit 1; done \
        fi


%.db:
	xsltproc \
	--xinclude \
	--stringparam collect.xref.targets  "only"  \
	--stringparam targets.filename "$@" \
	$(TOPDIR)/custom_html.xsl \
	$<

dependencies:
	printf "" > $@
	for target in dependencies target.db $(PDF_FILES) $(HTML_FILES) $(LINT_FILES); do \
            xsltproc \
            --stringparam  target  "$$target" \
            --stringparam  source  "$(SOURCE)" \
            --stringparam  topdir  "$(TOPDIR)" \
            $(TOPDIR)/depends.xsl \
            $(SOURCE) >> $@; \
        done

%.lint: %.xml
	xmllint \
	--noout \
	--noent \
	--xinclude \
	--postvalid \
	$< > $@ || (rm $@ && false)

%.html: %.xml %.lint $(DB_FILES)
	xsltproc \
	--xinclude \
	--stringparam target.database.document "$(CURDIR)/$(TOPDIR)/olinkdb.xml" \
	--stringparam collect.xref.targets "no" \
	$(TOPDIR)/custom_html.xsl $<
	$(SET_FILE_PERMISSIONS)

%.fo: %.xml %.lint $(DB_FILES)
	xsltproc --xinclude -o $@ $(FO_PARAMS) \
	--stringparam target.database.document "$(CURDIR)/$(TOPDIR)/olinkdb.xml" \
	--stringparam collect.xref.targets no \
	$(TOPDIR)/custom_fo.xsl $<

%.pdf:
	if expr $< : '.*.fo' > /dev/null; then \
	    $(FO_TO_PDF); \
        else \
            $(CONCAT_PDFS); \
        fi
	$(SET_FILE_PERMISSIONS)

$(SUBDIRS):
	make -C $@

include dependencies

.SUFFIXES: .db .xml .lint .pdf .fo
.PHONY: all olink-recursive olink lint-recursive lint clean-recursive clean distclean-recursive distclean pdf $(SUBDIRS)
