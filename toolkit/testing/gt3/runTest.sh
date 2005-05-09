#!/bin/bash

# -----------------------------------------------------------------
# Arguments
# (be explicit here, no inferred arguments)
# -----------------------------------------------------------------
 
if [ -z $5 ]
then
    echo "Usage: ./runTests.sh <platform> <branch> <java_ver> <container> <package>"
    exit;
else
    PLATFORM=$1
    BRANCH=$2
    JAVA_VER=$3
    CONTAINER=$4
    PACKAGE=$5
fi

echo PLATFORM = $PLATFORM
echo BRANCH = $BRANCH
echo JAVA_VER = $JAVA_VER
echo CONTAINER = $CONTAINER
echo PACKAGE = $PACKAGE

# -----------------------------------------------------------------
# Global Variables
# -----------------------------------------------------------------

ANT_HOME=/home/gose/local/apache-ant-1.6.1
JUNIT_HOME=/home/gose/local/junit3.8.1
JAVA_HOME=/homes/dsl/javapkgs/$PLATFORM/$JAVA_VER

PATH=$ANT_HOME/bin:$JAVA_HOME/bin:$PATH
CLASSPATH=$JUNIT_HOME/junit.jar:.

# -----------------------------------------------------------------
# Main
# -----------------------------------------------------------------

BUILD_DIR=/home/gose/public_html/testing/$PLATFORM/$BRANCH/$JAVA_VER/$CONTAINER/$PACKAGE

if [ -n $PLATFORM ] && [ -n $JAVA_VER ] && [ -n $CONTAINER ] && [ -n $BRANCH ]
then
    rm -rf $BUILD_DIR
    mkdir -p $BUILD_DIR
fi

cp -R /home/gose/projects/testing/$PACKAGE/* $BUILD_DIR
cd $BUILD_DIR
ant
