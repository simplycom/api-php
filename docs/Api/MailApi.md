# SimplyCom\MailApi

All URIs are relative to https://api.simply.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMailAccount()**](MailApi.md#addMailAccount) | **POST** /2/my/products/{object}/mail/accounts/ | Add new mail account to a product |


## `addMailAccount()`

```php
addMailAccount($object, $addMailAccountPayload): \SimplyCom\Model\SuccessResponse
```

Add new mail account to a product

Creates a new email account for the product. The email address will be username@domain. The account will be created with the product's default mail quota.

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
$addMailAccountPayload = new \SimplyCom\Model\AddMailAccountPayload(); // \SimplyCom\Model\AddMailAccountPayload

try {
    $result = $apiInstance->addMailAccount($object, $addMailAccountPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->addMailAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |
| **addMailAccountPayload** | [**\SimplyCom\Model\AddMailAccountPayload**](../Model/AddMailAccountPayload.md)|  | |

### Return type

[**\SimplyCom\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
