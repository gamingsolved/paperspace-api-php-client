# PHP Client Library for the Paperspace API

©2017 Manuel Kiessling


## About

This project maintains inofficial *Open API Specification* compatible specs of the
[Paperspace API](https://paperspace.github.io/paperspace-node/index.html), and uses these specs to auto-generate PHP
clients based on [Guzzle](https://github.com/guzzle/guzzle), which can be used to work with the API.

The resulting clients are provided as a library through the Composer ecosystem via this repository. 


## Installation

Add the following to your `composer.json`:

```
    ...
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/gamingsolved/paperspace-api-php-client.git"
        }
    ],
    "minimum-stability": "dev",
    ...
```

Then, run `composer require gamingsolved/paperspace-api-client`. This will pull the current `dev-master` version into
your project.


## Usage

In your own code, you can use the API client as shown below. The example assumes you want to use version 0.1.3 of the
Paperspace API.

```
<?php

require_once('<path-to-vendor-folder>/autoload.php');

use Gamingsolved\Paperspace\Api\Client\Version0_1_3 as PaperspaceApiClient;

$config = PaperspaceApiClient\Configuration::getDefaultConfiguration();
$config->setApiKey('X-API-Key', 'your-api-key-here');

$machineCreationParams = new PaperspaceApiClient\Model\MachineCreationParams();
$machineCreationParams->setRegion('East Coast (NY2)');
$machineCreationParams->setMachineType('Air');
$machineCreationParams->setSize(50);
$machineCreationParams->setBillingType('hourly');
$machineCreationParams->setMachineName('My first machine');
$machineCreationParams->setTemplateId('t123abc');

$machinesApiClient = new PaperspaceApiClient\Api\MachinesApi(null, $config);

try {
  $result = $machinesApi->createMachine($machineCreationParams);
  print_r($result);
} catch (\Exception $e) {
  echo 'Exception when calling MachinesApi->createMachine: ', $e->getMessage(), PHP_EOL;
}
```


## Matching project versions and Paperspace API versions

Use the following table as a reference to find out which version of this project supports what version of the Paperspace
API:

| Project version | Paperspace API version                       |
|-----------------|----------------------------------------------|
| dev-master      | 0.1.3 (only *machines/create* supported)     |


## How to modify and extend the API specifications

The PHP API clients provided by this project are generated automatically as far as possible (see below). To do so, this
project manages [Open API Specification / Swagger](https://swagger.io/specification/) based definition of the
Paperspace API in its different versions. As there is currently no (known) way to generated these definitions based on
the [Paperspace API client code](https://github.com/Paperspace/paperspace-node) directly, the Swagger definitions are
created and updated manually.

To do so, the code documentation for each API call is used as a reference - for example, the `create machine` API call
is defined in the official Node.js API client code at
https://github.com/Paperspace/paperspace-node/blob/v0.1.3_work/lib/machines/create.js, and its codedoc block serves as
the reference for the definitions in `api-definitions/0.1.3/paperspace-api-swagger-definition.yml`.

The API specs are defined per-API-version, that is, a spec exists for each Paperspace API version (one folder per
version below `api-definitions`).


## How to auto-generate the API clients

The PHP API clients are generated using [swagger-codegen](https://github.com/swagger-api/swagger-codegen) v2.3.0.

A definition file `api-definitions/<api-version>/paperspace-api-swagger-definition.yml` serves as the input
specification, and generated sources are placed in
`src-generated/paperspace-api-swagger-generated-client/<api-version>`.

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
