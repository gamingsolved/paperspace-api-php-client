# PHP Client Library for the Paperspace API

Copyright (c) 2017 Manuel Kiessling under [an MIT license](LICENSE).


## About

This project maintains inofficial *Open API Specification* compatible specs of the
[Paperspace API](https://paperspace.github.io/paperspace-node/index.html), and uses these specs to auto-generate PHP
clients based on [Guzzle](https://github.com/guzzle/guzzle), which can be used to work with the API.

The resulting clients are provided as a library through the Composer ecosystem. 

You can interactively explore the Swagger documentation of Paperspace API v0.1.3
[here](https://gamingsolved.github.io/paperspace-api-php-client/swagger-docs/0.1.3/).


## Installation

Simply run `composer require gamingsolved/paperspace-api-client` to install the latest version.


## Usage

In your own code, you can use the API client as shown below. The example assumes you want to use version 0.1.3 of the
Paperspace API.

```
<?php

require_once('<path-to-vendor-folder>/autoload.php');

use Gamingsolved\Paperspace\Api\Client\Version0_1_3 as PaperspaceApiClient;

$config = PaperspaceApiClient\Configuration::getDefaultConfiguration();
$config->setApiKey('X-API-Key', 'your-api-key-here');

$createMachineParams = new PaperspaceApiClient\Model\CreateMachineParams();
$createMachineParams->setRegion('East Coast (NY2)');
$createMachineParams->setMachineType('Air');
$createMachineParams->setSize(50);
$createMachineParams->setBillingType('hourly');
$createMachineParams->setMachineName('My first machine');
$createMachineParams->setTemplateId('t23ol2r'); // Windows 10 (Server 2016) Quadro - Licensed

$machinesApiClient = new PaperspaceApiClient\Api\MachinesApi(null, $config);

try {
  $result = $machinesApi->createMachine($createMachineParams);
  print_r($result);
} catch (\Exception $e) {
  echo 'Exception when calling MachinesApi->createMachine: ', $e->getMessage(), PHP_EOL;
}
```

At
[src-generated/0.1.3/docs/Api](https://github.com/gamingsolved/paperspace-api-php-client/tree/master/src-generated/0.1.3/docs/Api),
you can find the full documentation for the 0.1.3 API client with more examples.


## Matching project versions and Paperspace API versions

Use the following table as a reference to find out which version of this project supports what version of the Paperspace
API:

| Project version | Paperspace API version | Notes                                                                                      |
|-----------------|------------------------|--------------------------------------------------------------------------------------------|
| >= 0.1.0        | 0.1.3                  | only supports `machines/create,list,show,start,stop,restart,destroy` and `templates/list`) |



## Changelog
All notable changes to this project will be documented in this section.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/) and this project adheres to
[Semantic Versioning](http://semver.org/spec/v2.0.0.html).

### [Unreleased]

### [0.1.2] - 2017-08-15
#### Added
- Changelog

#### Changed
- Removed redundancy around Region in API definition

#### Fixed
- templates/list filtering (#1)
- machines/list filtering (#2)

### [0.1.1] - 2017-08-14
#### Changed
- Bumped Composer dependencies to latest versions
- Improved API definition metadata

### [0.1.0] - 2017-08-14
#### Changed
- Finished first Packagist release

[Unreleased]: https://github.com/gamingsolved/paperspace-api-php-client/compare/0.1.2...HEAD
[0.1.2]: https://github.com/gamingsolved/paperspace-api-php-client/compare/0.1.1...0.1.2
[0.1.1]: https://github.com/gamingsolved/paperspace-api-php-client/compare/0.1.0...0.1.1
[0.1.0]: https://github.com/gamingsolved/paperspace-api-php-client/compare/015c439...0.1.1


## How to modify and extend the API specifications

The PHP API clients provided by this project are generated automatically as far as possible (see below). To do so, this
project manages [Open API Specification / Swagger](https://swagger.io/specification/) based definitions of the
Paperspace API in its different versions. As there is currently no (known) way to generated these definitions based on
the [Paperspace API Node.js client code](https://github.com/Paperspace/paperspace-node) directly, the Swagger
definitions are created and updated manually.

To do so, the code documentation for each API call is used as a reference - for example, the `create machine` API call
is defined in the official Node.js API client code at
https://github.com/Paperspace/paperspace-node/blob/v0.1.3_work/lib/machines/create.js, and its codedoc block serves as
the reference for the definitions in `api-definitions/0.1.3/paperspace-api-swagger-definition.json`.

The API specs are defined per-API-version, that is, a spec exists for each Paperspace API version (one folder per
version below `api-definitions`).

In terms of style, naming, and structure, here are some guidelines for creating API definitions which stay true to the
API while also resulting in a nicely usable PHP client:

- top level client structure == top level API structure: `machines` -> `MachinesApi`
- fluid method signatures through `operationId`: `MachinesApi->createMachine()`, `MachinesApi->listMachines()` 
- Swagger definitions follow the overall naming convention: `MachinesApi::createMachine(new CreateMachineParams())` 


## How to auto-generate the API clients

The PHP API clients are generated using [swagger-codegen](https://github.com/swagger-api/swagger-codegen) v2.3.0.

A definition file `api-definitions/<api-version>/paperspace-api-swagger-definition.json` serves as the input
specification, and generated sources are placed in
`src-generated/<api-version>`.

In order to (re-)generate the code for all clients, proceed as follows:

    cd
    git clone https://github.com/swagger-api/swagger-codegen
    cd swagger-codegen
    git checkout 2.3.0
    mvn clean package -DskipTests

    cd <folder with this README.md file>
    ./bin/generate-clients.sh ~/swagger-codegen/modules/swagger-codegen-cli/target/swagger-codegen-cli.jar


## Additional notes

This project is neither affiliated with nor endorsed by Paperspace, Co.
