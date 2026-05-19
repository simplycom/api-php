# SimplyCom\ProductsApi

All URIs are relative to https://api.simply.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProductList()**](ProductsApi.md#getProductList) | **GET** /2/my/products/ | Retrieve list of products |


## `getProductList()`

```php
getProductList(): \SimplyCom\Model\GetProductListResponse
```

Retrieve list of products

Retrieve list of all active products on the account, including hosting packages, domains, and DNS services. Products are ordered by handle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProductList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SimplyCom\Model\GetProductListResponse**](../Model/GetProductListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
