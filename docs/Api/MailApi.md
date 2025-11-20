# SimplyCom\MailApi

All URIs are relative to https://api.simply.com/2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMailAccount()**](MailApi.md#addMailAccount) | **POST** /my/products/{object}/mail/accounts/ | Add new Mail account to a product |


## `addMailAccount()`

```php
addMailAccount($object, $addMailAccountRequest)
```

Add new Mail account to a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object = example.com; // string | The product handle/UUID, as found in the /my/products/ endpoint.
$addMailAccountRequest = new \SimplyCom\SimplyCom\Model\AddMailAccountRequest(); // \SimplyCom\SimplyCom\Model\AddMailAccountRequest

try {
    $apiInstance->addMailAccount($object, $addMailAccountRequest);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->addMailAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |
| **addMailAccountRequest** | [**\SimplyCom\SimplyCom\Model\AddMailAccountRequest**](../Model/AddMailAccountRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
