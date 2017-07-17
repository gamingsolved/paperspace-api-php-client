<?php

namespace GamingSolved\PaperspaceApiClient;

use Swagger\Client\Model\Params;

require_once('../src-generated/paperspace-api-swagger-generated-client/0.1.1/autoload.php');

class Client
{
    protected $swaggerApiClient;

    public function __construct(string $apiVersion, string $apiKey)
    {
        $config = \Swagger\Client\Configuration::getDefaultConfiguration()
            ->setApiKey('X-API-Key', $apiKey);

        $this->swaggerApiClient = new \Swagger\Client\ApiClient($config);

        $params = new \Swagger\Client\Model\Params();
        $params->setMachineType('Air');

        $resp = $mc->machinesCreateSingleMachinePublicPost($params);

        $resp->getId();

        return new Version_0_1\Client();
    }

    public function createSingleMachinePublic(Params $params) {
        $swaggerMachinesApiClient = new \Swagger\Client\Api\MachinesApi($this->swaggerApiClient);
        return $swaggerMachinesApiClient->machinesCreateSingleMachinePublicPost($params);
    }

}
