# Gamingsolved\Paperspace\Api\Client\Version0_1_3\MachinesApi

All URIs are relative to *https://api.paperspace.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMachine**](MachinesApi.md#createMachine) | **POST** /machines/createSingleMachinePublic | Create and launch a new Paperspace virtual machine
[**destroyMachine**](MachinesApi.md#destroyMachine) | **POST** /machines/{machineId}/destroyMachine | Destroy a machine
[**listMachines**](MachinesApi.md#listMachines) | **GET** /machines/getMachines | List information about all machines available
[**restartMachine**](MachinesApi.md#restartMachine) | **POST** /machines/{machineId}/restart | Restart an individual machine
[**showMachine**](MachinesApi.md#showMachine) | **GET** /machines/getMachinePublic | Show machine information
[**startMachine**](MachinesApi.md#startMachine) | **POST** /machines/{machineId}/start | Start up an individual machine
[**stopMachine**](MachinesApi.md#stopMachine) | **POST** /machines/{machineId}/stop | Stop an individual machine


# **createMachine**
> \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Machine createMachine($createMachineParams)

Create and launch a new Paperspace virtual machine

Create a new Paperspace virtual machine. If you are using an individual account, you will be assigned as the owner of the machine. If you are a team administrator, you must specify who the machine should belong to, either by their user id, or their email address. If you pass a full set of user parameters, we will create a user within your team and assign them the machine. This action can only be performed by the account owner. (Team members cannot create machines themselves; only the team administrator may do so.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\MachinesApi(new \Http\Adapter\Guzzle6\Client());
$createMachineParams = new \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\CreateMachineParams(); // \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\CreateMachineParams | Machine creation parameters

try {
    $result = $api_instance->createMachine($createMachineParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->createMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createMachineParams** | [**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\CreateMachineParams**](../Model/CreateMachineParams.md)| Machine creation parameters |

### Return type

[**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Machine**](../Model/Machine.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destroyMachine**
> destroyMachine($machineId)

Destroy a machine

Destroy the machine with the given id. When this action is performed, the machine is immediately shut down and marked for deletion from the datacenter. Any snapshots that were derived from the machine are also deleted. Access to the machine is terminated immediately and billing for the machine is prorated to the hour. This action can only be performed by the user who owns the machine, or in the case of a team, the team administrator.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\MachinesApi(new \Http\Adapter\Guzzle6\Client());
$machineId = "machineId_example"; // string | The id of the machine to destroy

try {
    $api_instance->destroyMachine($machineId);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->destroyMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **machineId** | **string**| The id of the machine to destroy |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMachines**
> \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Machine[] listMachines($machineId, $name, $os, $ram, $cpus, $gpu, $storageTotal, $storageUsed, $usageRate, $shutdownTimeoutInHours, $performAutoSnapshot, $autoSnapshotFrequency, $autoSnapshotSaveCount, $agentType, $dtCreated, $state, $networkId, $privateIpAddress, $publicIpAddress, $region, $userId, $teamId, $scriptId, $dtLastRun)

List information about all machines available

List information about all machines available to either the current authenticated user or the team, if the user belongs to a team. Takes an optional argument to limit the returned machine objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\MachinesApi(new \Http\Adapter\Guzzle6\Client());
$machineId = "machineId_example"; // string | Optional machine id to match on
$name = "name_example"; // string | Optional name to match on
$os = "os_example"; // string | Optional os to match on
$ram = "ram_example"; // string | Optional ram value to match on
$cpus = 56; // int | Optional cpu count to match on
$gpu = "gpu_example"; // string | Optional gpu to match on
$storageTotal = "storageTotal_example"; // string | Optional storageTotal value to match on
$storageUsed = "storageUsed_example"; // string | Optional storageUsed value to match on
$usageRate = "usageRate_example"; // string | Optional usageRate value to match on
$shutdownTimeoutInHours = 56; // int | Optional shutdownTimeoutInHours value to match on
$performAutoSnapshot = true; // bool | Optional performAutoSnapshot value to match on, either true or false
$autoSnapshotFrequency = "autoSnapshotFrequency_example"; // string | Optional autoSnapshotFrequency value to match on
$autoSnapshotSaveCount = 56; // int | Optional autoSnapshotSaveCount value to match on
$agentType = "agentType_example"; // string | Optional agentType value to match on
$dtCreated = "dtCreated_example"; // string | Optional datatime value to match on (example: 2017-02-16T20:26:54.880Z)
$state = "state_example"; // string | Optional state value to match on
$networkId = "networkId_example"; // string | Optional networkId value to match on
$privateIpAddress = "privateIpAddress_example"; // string | Optional privateIpAddress value to match on
$publicIpAddress = "publicIpAddress_example"; // string | Optional publicIpAddress value to match on
$region = "region_example"; // string | Optional region to match on
$userId = "userId_example"; // string | Optional userId value to match on
$teamId = "teamId_example"; // string | Optional teamId value to match on
$scriptId = "scriptId_example"; // string | Optional scriptId value to match on
$dtLastRun = "dtLastRun_example"; // string | Optional script datatime last run value to match on (example: 2017-02-16T20:26:54.880Z)

try {
    $result = $api_instance->listMachines($machineId, $name, $os, $ram, $cpus, $gpu, $storageTotal, $storageUsed, $usageRate, $shutdownTimeoutInHours, $performAutoSnapshot, $autoSnapshotFrequency, $autoSnapshotSaveCount, $agentType, $dtCreated, $state, $networkId, $privateIpAddress, $publicIpAddress, $region, $userId, $teamId, $scriptId, $dtLastRun);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->listMachines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **machineId** | **string**| Optional machine id to match on | [optional]
 **name** | **string**| Optional name to match on | [optional]
 **os** | **string**| Optional os to match on | [optional]
 **ram** | **string**| Optional ram value to match on | [optional]
 **cpus** | **int**| Optional cpu count to match on | [optional]
 **gpu** | **string**| Optional gpu to match on | [optional]
 **storageTotal** | **string**| Optional storageTotal value to match on | [optional]
 **storageUsed** | **string**| Optional storageUsed value to match on | [optional]
 **usageRate** | **string**| Optional usageRate value to match on | [optional]
 **shutdownTimeoutInHours** | **int**| Optional shutdownTimeoutInHours value to match on | [optional]
 **performAutoSnapshot** | **bool**| Optional performAutoSnapshot value to match on, either true or false | [optional]
 **autoSnapshotFrequency** | **string**| Optional autoSnapshotFrequency value to match on | [optional]
 **autoSnapshotSaveCount** | **int**| Optional autoSnapshotSaveCount value to match on | [optional]
 **agentType** | **string**| Optional agentType value to match on | [optional]
 **dtCreated** | **string**| Optional datatime value to match on (example: 2017-02-16T20:26:54.880Z) | [optional]
 **state** | **string**| Optional state value to match on | [optional]
 **networkId** | **string**| Optional networkId value to match on | [optional]
 **privateIpAddress** | **string**| Optional privateIpAddress value to match on | [optional]
 **publicIpAddress** | **string**| Optional publicIpAddress value to match on | [optional]
 **region** | **string**| Optional region to match on | [optional]
 **userId** | **string**| Optional userId value to match on | [optional]
 **teamId** | **string**| Optional teamId value to match on | [optional]
 **scriptId** | **string**| Optional scriptId value to match on | [optional]
 **dtLastRun** | **string**| Optional script datatime last run value to match on (example: 2017-02-16T20:26:54.880Z) | [optional]

### Return type

[**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Machine[]**](../Model/Machine.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restartMachine**
> restartMachine($machineId)

Restart an individual machine

Restart an individual machine. If the machine is already restarting, this action will request the machine be restarted again. This action can only be performed by the user who owns the machine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\MachinesApi(new \Http\Adapter\Guzzle6\Client());
$machineId = "machineId_example"; // string | The id of the machine to restart

try {
    $api_instance->restartMachine($machineId);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->restartMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **machineId** | **string**| The id of the machine to restart |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showMachine**
> \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Machine showMachine($machineId)

Show machine information

Show machine information for the machine with the given id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\MachinesApi(new \Http\Adapter\Guzzle6\Client());
$machineId = "machineId_example"; // string | Id of the machine to show

try {
    $result = $api_instance->showMachine($machineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->showMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **machineId** | **string**| Id of the machine to show |

### Return type

[**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Machine**](../Model/Machine.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startMachine**
> startMachine($machineId)

Start up an individual machine

Start up an individual machine. If the machine is already started, this action is a no-op. If the machine is off, it will be booted up. This action can only be performed by the user who owns the machine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\MachinesApi(new \Http\Adapter\Guzzle6\Client());
$machineId = "machineId_example"; // string | The id of the machine to start

try {
    $api_instance->startMachine($machineId);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->startMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **machineId** | **string**| The id of the machine to start |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopMachine**
> stopMachine($machineId)

Stop an individual machine

Stop an individual machine. If the machine is already stopped or has been shut down, this action is a no-op. If the machine is running, it will be stopped and any users logged in will be immediately kicked out. This action can only be performed by the user who owns the machine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\MachinesApi(new \Http\Adapter\Guzzle6\Client());
$machineId = "machineId_example"; // string | The id of the machine to shut down

try {
    $api_instance->stopMachine($machineId);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->stopMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **machineId** | **string**| The id of the machine to shut down |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

