#
# Gnuplot script
#
set title "Total Number of Globus Toolkit Downloads for 2002"
set xlabel "2002"
set ylabel "Bundles"
set autoscale
# set key 0.01,100      # Choose a location for the key
set key left box     # Choose a location for the key
# set label "Yield Point" at 0.003,260
set grid
# set xr [02/01:02/28]
set yr [0:]
# set timefmt "%Y-%m-%d-%H-%M"
set timefmt "%m-%d-%Y"
set xdata time
set format x "%m/%d"

set terminal png color small
set out '../images/downloads-2002.png'

# set multiplot
plot    "../data/1.1.3-2002" using 1:3 title "1.1.3" with linespoints 8, \
        "../data/1.1.4-2002" using 1:3 title "1.1.4" with linespoints 1, \
        "../data/2.0.0-2002" using 1:3 title "2.0.0" with linespoints 7, \
        "../data/2.2.2-2002" using 1:3 title "2.2.2" with linespoints 12, \
        "../data/2.2.3-2002" using 1:3 title "2.2.3" with linespoints 5 
# set nomultiplot

set out
# pause -1 "Hit any key to continue"
