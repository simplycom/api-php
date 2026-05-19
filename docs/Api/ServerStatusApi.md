# SimplyCom\ServerStatusApi

All URIs are relative to https://api.simply.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getServerStatusMessages()**](ServerStatusApi.md#getServerStatusMessages) | **GET** /2/my/serverstatus/messages/ | Retrieve server status messages |


## `getServerStatusMessages()`

```php
getServerStatusMessages(): \SimplyCom\Model\GetServerStatusMessagesResponse
```

Retrieve server status messages

Retrieve a list of current and past server status messages, including planned maintenance and incidents. Returns messages from the last 6 months.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\ServerStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getServerStatusMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerStatusApi->getServerStatusMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SimplyCom\Model\GetServerStatusMessagesResponse**](../Model/GetServerStatusMessagesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
