# SimplyCom\OrderApi

All URIs are relative to https://api.simply.com/2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderDnsService()**](OrderApi.md#orderDnsService) | **POST** /my/order/dnsservice/ |  |


## `orderDnsService()`

```php
orderDnsService($orderDnsServiceRequest): object
```



Order a domain, requires working credit card on account if payment is needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderDnsServiceRequest = new \SimplyCom\SimplyCom\Model\OrderDnsServiceRequest(); // \SimplyCom\SimplyCom\Model\OrderDnsServiceRequest

try {
    $result = $apiInstance->orderDnsService($orderDnsServiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDnsService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderDnsServiceRequest** | [**\SimplyCom\SimplyCom\Model\OrderDnsServiceRequest**](../Model/OrderDnsServiceRequest.md)|  | |

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
