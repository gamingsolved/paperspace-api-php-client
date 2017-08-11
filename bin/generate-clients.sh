#!/usr/bin/env bash

CODEGENJAR=$1
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
AUTOLOAD=""
AUTOLOAD_DEV=""

for FOLDER in $DIR/../api-definitions/*
do
  APIVERSION=$(basename $FOLDER)
  APIVERSION_UNDERSCORE=${APIVERSION//./_}

  rm -rf $DIR/../src-generated/paperspace-api-client/$APIVERSION
  mkdir -p $DIR/../src-generated/paperspace-api-client/$APIVERSION

  java -jar $CODEGENJAR generate \
       -i $DIR/../api-definitions/$APIVERSION/paperspace-api-swagger-definition.yml \
       -l php \
       -c $DIR/../api-definitions/$APIVERSION/swagger-config.json \
       -o $DIR/../src-generated/paperspace-api-client/$APIVERSION
done

/usr/bin/env php $DIR/generate-composer-json.php
