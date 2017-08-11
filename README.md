# PHP Client Library for the Paperspace API

©2017 Manuel Kiessling


## About

This project provides an *Open API Specification* compatible spec of the
[Paperspace API](https://paperspace.github.io/paperspace-node/index.html), and uses this spec to auto-generate a PHP
client based on [Guzzle](https://github.com/guzzle/guzzle) which can be used to work with the API.

The resulting client is provided as a library through the Composer ecosystem. 


## Installation

tbd


## Using the client library

This project adds a thin wrapper around the generated code.


## How to modify and extend the API specification for the PHP client

The PHP API client provided by this project is generated automatically as far as possible (see below). To do so, this
project manages an [Open API Specification / Swagger](https://swagger.io/specification/) based definition of the
Paperspace API. As there is currently no (known) way to generated this definition based on the
[Paperspace API client code](https://github.com/Paperspace/paperspace-node) directly, the Swagger definition is created
and updated manually.

To do so, the code documentation for each API call is used as a reference - for example, the `create machine` API call
is defined in the official Node.js API client code at
https://github.com/Paperspace/paperspace-node/blob/master/lib/machines/create.js, and the codedoc block serves as the
reference for the definitions in `api-definitions/<api-version>/paperspace-api-swagger-definition.yml`.

The API specs are defined per-API-version, that is, a spec exists for each Paperspace API version (one folder per
version below `api-definitions`).


## How to auto-generate the API client

The PHP API client is generated using [swagger-codegen](https://github.com/swagger-api/swagger-codegen) 2.3.0.

The definition file `api-definitions/<api-version>/paperspace-api-swagger-definition.yml` serves as the input
specification, and generated sources are placed in
`src-generated/paperspace-api-swagger-generated-client/<api-version>`.

The currently supported `<api-version>` is 0.1.3.

In order to (re-)generate the client code, proceed as follows:

    cd
    git clone https://github.com/swagger-api/swagger-codegen
    cd swagger-codegen
    git checkout 2.3.0
    mvn clean package -DskipTests

    cd <folder with this README.md file>
    ./bin/generate-client.sh ~/swagger-codegen/modules/swagger-codegen-cli/target/swagger-codegen-cli.jar


## Additional notes

This project is neither affiliated with nor endorsed by Paperspace, Co.


## Scratchpad
