# Gamingsolved\Paperspace\Api\Client\Version0_1_3\MachinesApi

All URIs are relative to *https://api.paperspace.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMachine**](MachinesApi.md#createMachine) | **POST** /machines/createSingleMachinePublic | Create and launch a new Paperspace virtual machine
[**listMachines**](MachinesApi.md#listMachines) | **GET** /machines/getMachines | List information about all machines available


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

# **listMachines**
> \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Machine[] listMachines($listMachinesParams)

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
$listMachinesParams = new \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\ListMachinesParams(); // \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\ListMachinesParams | An optional filter object to limit the returned machine objects

try {
    $result = $api_instance->listMachines($listMachinesParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->listMachines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listMachinesParams** | [**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\ListMachinesParams**](../Model/ListMachinesParams.md)| An optional filter object to limit the returned machine objects | [optional]

### Return type

[**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Machine[]**](../Model/Machine.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

