# SimplyCom\DatabaseApi

All URIs are relative to https://api.simply.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMysqlDatabases()**](DatabaseApi.md#getMysqlDatabases) | **GET** /2/my/products/{object}/databases/mysql/ | List MySQL databases for a product |


## `getMysqlDatabases()`

```php
getMysqlDatabases($object): \SimplyCom\SimplyCom\Model\GetMysqlDatabases200Response
```

List MySQL databases for a product

Returns all MySQL databases attached to the product. Passwords are not returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object = example.com; // string | The product handle/UUID, as found in the /my/products/ endpoint.

try {
    $result = $apiInstance->getMysqlDatabases($object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->getMysqlDatabases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |

### Return type

[**\SimplyCom\SimplyCom\Model\GetMysqlDatabases200Response**](../Model/GetMysqlDatabases200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
