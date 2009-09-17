#!/bin/bash

IFACE="eth0"
SCRIPTNAME=`basename $0`

MATCH_OS=`uname -r | grep -c "^2.6"`
if [ "$MATCH_OS" != "1" ]; then
	echo "Linux 2.6 kernel required."
	exit
fi

if [ "$UID" != "0" ]; then
	echo "$SCRIPTNAME must be run as root."
	exit
fi

if [ -z "$GLOBUS_TCP_SOURCE_RANGE" ]; then
	echo "The GLOBUS_TCP_SOURCE_RANGE environment variable must be set."
	exit
fi

if [ -z "$1" ]; then
	echo "usage: $SCRIPTNAME <rate>"
	exit
fi

IFS=","
START_PORT=""
END_PORT=""
for port in $GLOBUS_TCP_SOURCE_RANGE
do
	if [ -z "$START_PORT" ]; then
		START_PORT=$port
	else
		END_PORT=$port
	fi
done
unset IFS

iptables -t mangle -A POSTROUTING -o $IFACE -p tcp --sport ${START_PORT}:${END_PORT} -j CLASSIFY --set-class 1:1
tc qdisc add dev $IFACE parent root handle 1:0 htb
tc class add dev $IFACE parent 1:0 classid 1:1 htb rate $1
