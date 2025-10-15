# SimplyCom\Sdk\OrderApi

order

All URIs are relative to https://api.simply.com/2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**call3db09c5bcfacbbba537a8872997b010e()**](OrderApi.md#call3db09c5bcfacbbba537a8872997b010e) | **POST** /my/order/dnsservice |  |


## `call3db09c5bcfacbbba537a8872997b010e()`

```php
call3db09c5bcfacbbba537a8872997b010e($_3db09c5bcfacbbba537a8872997b010eRequest): object
```



Order a domain, requires working credit card on account if payment is needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Sdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Sdk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_3db09c5bcfacbbba537a8872997b010eRequest = new \SimplyCom\Sdk\Model\3db09c5bcfacbbba537a8872997b010eRequest(); // \SimplyCom\Sdk\Model\3db09c5bcfacbbba537a8872997b010eRequest

try {
    $result = $apiInstance->call3db09c5bcfacbbba537a8872997b010e($_3db09c5bcfacbbba537a8872997b010eRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->call3db09c5bcfacbbba537a8872997b010e: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_3db09c5bcfacbbba537a8872997b010eRequest** | [**\SimplyCom\Sdk\Model\3db09c5bcfacbbba537a8872997b010eRequest**](../Model/3db09c5bcfacbbba537a8872997b010eRequest.md)|  | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
