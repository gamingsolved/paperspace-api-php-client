<?php

require_once(__DIR__ . '/../vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\MachinesApi();
$machineCreationParams = new \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachineCreationParams(); // \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachineCreationParams | Machine creation parameters

try {
    $result = $api_instance->machinesCreateSingleMachinePublicPost($machineCreationParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->machinesCreateSingleMachinePublicPost: ', $e->getMessage(), PHP_EOL;
}
