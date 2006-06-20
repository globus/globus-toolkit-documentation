#! /bin/sh

mkdir bindings
cd bindings

$GLOBUS_LOCATION/bin/globus-wsrf-cgen -fl gcc32dbg -no-service -s counter_client $GLOBUS_LOCATION/share/schema/core/samples/counter/counter_service.wsdl

$GLOBUS_LOCATION/sbin/gpt-build counter_client_bindings-0.2.tar.gz gcc32dbg
