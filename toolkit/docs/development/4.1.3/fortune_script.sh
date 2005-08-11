#!/bin/bash
#
# Fortune Example Execution Aggregator Source Information Provider
#
# written by Neill Miller (neillm@mcs.anl.gov) in July 2005
#
# the XML output follows this simple format:
#
# <fortuneInformation>
#   <fortuneData>
#     ... fortuneData (the fortune)
#   </fortuneData>
#   <fortuneDateAndTime>
#     ... fortuneDateAndTime (date/time gathered)
#   </fortuneDateAndTime>
#   <fortuneSourceURL>
#     ... fortuneSourceURL (where we go the fortune)
#   </fortuneSourceURL>
# </fortuneInformation>
#

# specify a suitable temporary filename (required)
TMPFILE="/tmp/__xx_fortune_file_xx__"

FORTUNE_URL="http://anduin.eldar.org/cgi-bin/fortune.pl?text_format=yes"
WGET=`which wget 2>&1 | grep -v "no wget"`
COMMAND_LINE="$WGET -q $FORTUNE_URL --output-document $TMPFILE"
USE_WGET="1"

# check to see if wget is installed; try to fallback to lynx if not
if test "x$WGET" = "x"; then
    WGET=`which lynx 2>&1 | grep -v "no lynx"`

    #check to see if lynx is installed
    if test "x$WGET" = "x"; then

        # check to see if fortune is installed
        FORTUNE=`which fortune 2>&1 | grep -v "no fortune"`
        if test "x$FORTUNE" = "x"; then
            echo "No suitable application (wget, lynx, or fortune) found on system."
        else
            USE_WGET="0"
            COMMAND_LINE="$FORTUNE"
            FORTUNE_URL="Fortune retrieved from local system"
        fi
    else
        USE_WGET="0"
        COMMAND_LINE="$WGET -source > $FORTUNE_URL"
    fi
fi

# download latest fortune
if test "x$USE_WGET" = "x1"; then
    $COMMAND_LINE
else
    # both lynx and fortune dump to same tmp file
    $COMMAND_LINE > $TMPFILE
fi

#
# begin emitting XML data
#

# dump fortune data if we have it; error otherwise
echo "<fortuneInformation>"
echo "<fortuneData>"

if test -f $TMPFILE; then
    FORTUNE_DATA=`cat $TMPFILE`
    echo $FORTUNE_DATA
else
    echo "Error: Fortune could not be retrieved or saved."
fi 
echo "</fortuneData>"

# dump fortune date information if we have it; error otherwise
echo "<fortuneDateAndTime>"
DATE=`date`
if test "x$DATE" = "x"; then
    DATE="Unknown date and time."
fi
echo $DATE
echo "</fortuneDateAndTime>"

# dump (attempted) fortune source URL
echo "<fortuneSourceURL>"
echo $FORTUNE_URL
echo "</fortuneSourceURL>"

echo "</fortuneInformation>"

# remove the tmpfile used (if any)
rm -f $TMPFILE