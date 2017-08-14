# Gamingsolved\Paperspace\Api\Client\Version0_1_3\TemplatesApi

All URIs are relative to *https://api.paperspace.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTemplates**](TemplatesApi.md#listTemplates) | **GET** /templates/getTemplates | List information about all templates available


# **listTemplates**
> \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Template[] listTemplates($id, $name, $label, $os, $dtCreated, $teamId, $userId, $region)

List information about all templates available

List information about all templates available to either the current authenticated user or the team, if the user belongs to a team. Takes an optional argument to limit the returned template objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Gamingsolved\Paperspace\Api\Client\Version0_1_3\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$api_instance = new Gamingsolved\Paperspace\Api\Client\Version0_1_3\Api\TemplatesApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | Optional template id to match on
$name = "name_example"; // string | Optional name to match on
$label = "label_example"; // string | Optional label to match on
$os = "os_example"; // string | Optional os to match on
$dtCreated = "dtCreated_example"; // string | Optional datatime created value to match on (example: 2017-02-16T20:26:54.880Z)
$teamId = "teamId_example"; // string | Optional teamId to match on
$userId = "userId_example"; // string | Optional userId to match on
$region = "region_example"; // string | Optional region to match on

try {
    $result = $api_instance->listTemplates($id, $name, $label, $os, $dtCreated, $teamId, $userId, $region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Optional template id to match on | [optional]
 **name** | **string**| Optional name to match on | [optional]
 **label** | **string**| Optional label to match on | [optional]
 **os** | **string**| Optional os to match on | [optional]
 **dtCreated** | **string**| Optional datatime created value to match on (example: 2017-02-16T20:26:54.880Z) | [optional]
 **teamId** | **string**| Optional teamId to match on | [optional]
 **userId** | **string**| Optional userId to match on | [optional]
 **region** | **string**| Optional region to match on | [optional]

### Return type

[**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Template[]**](../Model/Template.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

