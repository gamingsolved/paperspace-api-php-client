# Gamingsolved\Paperspace\Api\Client\Version0_1_3\MachinesApi

All URIs are relative to *https://api.paperspace.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**machinesCreateSingleMachinePublicPost**](MachinesApi.md#machinesCreateSingleMachinePublicPost) | **POST** /machines/createSingleMachinePublic | Create and launch a new Paperspace virtual machine
[**machinesGetMachinesGet**](MachinesApi.md#machinesGetMachinesGet) | **GET** /machines/getMachines | List information about all machines available


# **machinesCreateSingleMachinePublicPost**
> \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\CreatedMachineResponse machinesCreateSingleMachinePublicPost($machineCreationParams)

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
$machineCreationParams = new \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachineCreationParams(); // \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachineCreationParams | Machine creation parameters

try {
    $result = $api_instance->machinesCreateSingleMachinePublicPost($machineCreationParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->machinesCreateSingleMachinePublicPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **machineCreationParams** | [**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachineCreationParams**](../Model/MachineCreationParams.md)| Machine creation parameters |

### Return type

[**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\CreatedMachineResponse**](../Model/CreatedMachineResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **machinesGetMachinesGet**
> \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachinesListResponse machinesGetMachinesGet($machineListFilterParams)

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
$machineListFilterParams = new \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachineListFilterParams(); // \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachineListFilterParams | An optional filter object to limit the returned machine objects

try {
    $result = $api_instance->machinesGetMachinesGet($machineListFilterParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->machinesGetMachinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **machineListFilterParams** | [**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachineListFilterParams**](../Model/MachineListFilterParams.md)| An optional filter object to limit the returned machine objects | [optional]

### Return type

[**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\MachinesListResponse**](../Model/MachinesListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

