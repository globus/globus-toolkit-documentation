export JAVA_HOME=/sandbox/software/j2sdk1.4.1_01/
export CLASSPATH=/sandbox/software/j2sdk1.4.1_01/lib:/sandbox/software/j2sdk1.4.1_01/jre/lib:.
export PATH=$PATH:$JAVA_HOME/bin

cd /mcs/www-unix.globus.org/toolkit/stats/logs
java LogParser 1.1.3
java LogParser 1.1.4
java LogParser 2.0.0
java LogParser 2.2.2
java LogParser 2.2.3
java LogParser 2.2.4

gnuplot plot.p
