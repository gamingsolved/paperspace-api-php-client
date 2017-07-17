# Swagger\Client\MachinesApi

All URIs are relative to *https://api.paperspace.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**machinesCreateSingleMachinePublicPost**](MachinesApi.md#machinesCreateSingleMachinePublicPost) | **POST** /machines/createSingleMachinePublic | Create and launch a new Paperspace virtual machine


# **machinesCreateSingleMachinePublicPost**
> \Swagger\Client\Model\CreatedMachineResponse machinesCreateSingleMachinePublicPost($machine_creation_params)

Create and launch a new Paperspace virtual machine

Create a new Paperspace virtual machine. If you are using an individual account, you will be assigned as the owner of the machine. If you are a team administrator, you must specify who the machine should belong to, either by their user id, or their email address. If you pass a full set of user parameters, we will create a user within your team and assign them the machine. This action can only be performed by the account owner. (Team members cannot create machines themselves; only the team administrator may do so.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\MachinesApi(new \Http\Adapter\Guzzle6\Client());
$machine_creation_params = new \Swagger\Client\Model\MachineCreationParams(); // \Swagger\Client\Model\MachineCreationParams | Machine creation parameters

try {
    $result = $api_instance->machinesCreateSingleMachinePublicPost($machine_creation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachinesApi->machinesCreateSingleMachinePublicPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **machine_creation_params** | [**\Swagger\Client\Model\MachineCreationParams**](../Model/MachineCreationParams.md)| Machine creation parameters |

### Return type

[**\Swagger\Client\Model\CreatedMachineResponse**](../Model/CreatedMachineResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

