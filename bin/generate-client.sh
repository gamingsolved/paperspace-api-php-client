#!/usr/bin/env bash

CODEGENJAR=$1
APIVERSION=0.1.3
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

rm -rf $DIR/../src-generated/paperspace-api-swagger-generated-client/$APIVERSION

java -jar $CODEGENJAR generate \
      -i $DIR/../api-definitions/$APIVERSION/paperspace-api-swagger-definition.yml \
      -l php \
      -o $DIR/../src-generated/paperspace-api-swagger-generated-client/$APIVERSION
