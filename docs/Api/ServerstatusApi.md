# SimplyCom\ServerstatusApi

All URIs are relative to https://api.simply.com/2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getServerStatusMessages()**](ServerstatusApi.md#getServerStatusMessages) | **GET** /my/serverstatus/messages/ | Retrieve a list of current and past serverstatus messages |


## `getServerStatusMessages()`

```php
getServerStatusMessages(): \SimplyCom\SimplyCom\Model\GetServerStatusMessages200Response
```

Retrieve a list of current and past serverstatus messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\ServerstatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getServerStatusMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerstatusApi->getServerStatusMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SimplyCom\SimplyCom\Model\GetServerStatusMessages200Response**](../Model/GetServerStatusMessages200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
