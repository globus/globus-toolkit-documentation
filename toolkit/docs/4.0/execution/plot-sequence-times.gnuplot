
set terminal fig color depth 50
set output "sequence-times.fig"

set title "Average WS_GRAM sequence timing"

set noxtics
set xrange [-0.5:2.5]
#set yrange [0:10]

set ylabel "Elapsed time (s)"
set xlabel "GRAM scenarios"

plot 	"sequence-times.dat" i 0 notitle with boxes, \
     	"sequence-times.dat" i 1 notitle with boxes, \
     	"sequence-times.dat" i 2 notitle with boxes, \
	"sequence-times.dat" i 3 notitle with boxes, \
	"sequence-times.dat" i 4 notitle with boxes, \
	"sequence-times.dat" i 5 notitle with boxes, \
	"sequence-times.dat" i 6 notitle with boxes, \
	"sequence-times.dat" i 7 notitle with boxes

# data file format:
#
# one dataset for each sequence "phase"
#   one datapoint for each scenario in each phase dataset
#
#
