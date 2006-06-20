
# This script plots the datafile sequence-times.dat
# to represent the protocol phases over elapsed time
# (as seen by the instrumented globusrun-ws)
#

# output to FIG format to allow post-processing
set terminal fig color depth 50
set output "sequence-times.fig"

set title "Simple WS_GRAM sequence timing (averaged)"

set noxtics
set xrange [-0.5:4.5]
set yrange [0:1.9]

set ylabel "Elapsed time (s)"
set xlabel "Scenarios: Minimal; Deleg.; Deleg. w/ Hold; Staging; Staging w/ Hold."

plot 	"sequence-times.dat" i 0 notitle with boxes, \
     	"sequence-times.dat" i 1 notitle with boxes, \
     	"sequence-times.dat" i 2 notitle with boxes, \
	"sequence-times.dat" i 3 notitle with boxes, \
	"sequence-times.dat" i 4 notitle with boxes, \
	"sequence-times.dat" i 5 notitle with boxes, \
	"sequence-times.dat" i 6 notitle with boxes, \
	"sequence-times.dat" i 7 notitle with boxes, \
	"sequence-times.dat" i 8 notitle with boxes

# data file format:
#
# one dataset for each sequence "phase"
#   one datapoint for each scenario in each phase dataset
#
#
