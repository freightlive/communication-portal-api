# BumbalCommunicationPortal\ActivityApi

All URIs are relative to *https://communication.bumbal.eu/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityRetrieve**](ActivityApi.md#activityRetrieve) | **GET** /activity/retrieve | Retrieve Activity
[**activityStatus**](ActivityApi.md#activityStatus) | **GET** /activity/status | Retrieve Activity Status


# **activityRetrieve**
> \BumbalCommunicationPortal\Model\ActivityModel activityRetrieve($token, $zipcode)

Retrieve Activity

Retrieve Activity based on token and zipcode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityStatus**
> \BumbalCommunicationPortal\Model\ApiResponse activityStatus($token)

Retrieve Activity Status

Retrieve Activity based on token and zipcode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalCommunicationPortal\Api\ActivityApi();
$token = "token_example"; // string | Token of the Requested Activity

try {
    $result = $api_instance->activityStatus($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->activityStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token of the Requested Activity |

### Return type

[**\BumbalCommunicationPortal\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

