# BumbalCommunicationPortal\SettingsApi

All URIs are relative to *https://communication.bumbal.eu/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settingsRetrieve**](SettingsApi.md#settingsRetrieve) | **POST** /settings/retrieve | Retrieve Settings for Bumbal Instance
[**settingsUpdate**](SettingsApi.md#settingsUpdate) | **GET** /settings/update | Settings Update


# **settingsRetrieve**
> \BumbalCommunicationPortal\Model\ApiResponse settingsRetrieve()

Retrieve Settings for Bumbal Instance

Retrieve Settings for Bumbal Instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalCommunicationPortal\Api\SettingsApi();

try {
    $result = $api_instance->settingsRetrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsRetrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalCommunicationPortal\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsUpdate**
> \BumbalCommunicationPortal\Model\ApiResponse settingsUpdate($body)

Settings Update

Update Settings for a Bumbal Instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalCommunicationPortal\Api\SettingsApi();
$body = new \BumbalCommunicationPortal\Model\SettingsModel(); // \BumbalCommunicationPortal\Model\SettingsModel | Settings object

try {
    $result = $api_instance->settingsUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalCommunicationPortal\Model\SettingsModel**](../Model/\BumbalCommunicationPortal\Model\SettingsModel.md)| Settings object | [optional]

### Return type

[**\BumbalCommunicationPortal\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

