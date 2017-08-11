#!/usr/bin/env bash

CODEGENJAR=$1
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

for FOLDER in $DIR/../api-definitions/*
do
  APIVERSION=$(basename $FOLDER)

  rm -rf $DIR/../src-generated/paperspace-api-client/$APIVERSION

  java -jar $CODEGENJAR generate \
       -i $DIR/../api-definitions/$APIVERSION/paperspace-api-swagger-definition.yml \
       -l php \
       -c $DIR/../api-definitions/$APIVERSION/swagger-config.json \
       -o $DIR/../src-generated/paperspace-api-client/$APIVERSION
done
