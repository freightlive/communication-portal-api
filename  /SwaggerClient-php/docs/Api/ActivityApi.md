# BumbalCommunicationPortal\ActivityApi

All URIs are relative to *https://communication.bumbal.eu/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityRetrieve**](ActivityApi.md#activityRetrieve) | **GET** /activity/retrieve | Retrieve Activity
[**validateToken**](ActivityApi.md#validateToken) | **GET** /activity/validate-token | Validate Token


# **activityRetrieve**
> \BumbalCommunicationPortal\Model\ActivityModel activityRetrieve($token, $zipcode)

Retrieve Activity

Retrieve Activity based on token and zipcode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationPortal\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationPortal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationPortal\Api\ActivityApi();
$token = "token_example"; // string | Token of the Requested Activity
$zipcode = "zipcode_example"; // string | ZipCode of the Requested Activity

try {
    $result = $api_instance->activityRetrieve($token, $zipcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->activityRetrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token of the Requested Activity |
 **zipcode** | **string**| ZipCode of the Requested Activity |

### Return type

[**\BumbalCommunicationPortal\Model\ActivityModel**](../Model/ActivityModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateToken**
> \BumbalCommunicationPortal\Model\PortalParameterModel[] validateToken($token)

Validate Token

Validate a Token and return Portal Parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalCommunicationPortal\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalCommunicationPortal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalCommunicationPortal\Api\ActivityApi();
$token = "token_example"; // string | Token of the Requested Activity

try {
    $result = $api_instance->validateToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->validateToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token of the Requested Activity |

### Return type

[**\BumbalCommunicationPortal\Model\PortalParameterModel[]**](../Model/PortalParameterModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

