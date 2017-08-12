# Gamingsolved\Paperspace\Api\Client\Version0_1_3\TemplatesApi

All URIs are relative to *https://api.paperspace.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTemplates**](TemplatesApi.md#listTemplates) | **GET** /templates/getTemplates | List information about all templates available


# **listTemplates**
> \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\ListTemplatesResponse listTemplates($listTemplatesParams)

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
$listTemplatesParams = new \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\ListTemplatesParams(); // \Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\ListTemplatesParams | An optional filter object to limit the returned template objects

try {
    $result = $api_instance->listTemplates($listTemplatesParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listTemplatesParams** | [**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\ListTemplatesParams**](../Model/ListTemplatesParams.md)| An optional filter object to limit the returned template objects | [optional]

### Return type

[**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\ListTemplatesResponse**](../Model/ListTemplatesResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

