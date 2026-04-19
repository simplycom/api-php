# SimplyCom\OrderApi

All URIs are relative to https://api.simply.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderDnsService()**](OrderApi.md#orderDnsService) | **POST** /2/my/order/dnsservice/ | Order a DNS service with optional domain registration/transfer |


## `orderDnsService()`

```php
orderDnsService($orderDnsServicePayload): \SimplyCom\SimplyCom\Model\OrderDnsService200Response
```

Order a DNS service with optional domain registration/transfer

Order a DNS service, optionally registering or transferring a domain. If payment is required, a working credit card must be on file. The order will be processed immediately if payment succeeds.

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
$orderDnsServicePayload = new \SimplyCom\SimplyCom\Model\OrderDnsServicePayload(); // \SimplyCom\SimplyCom\Model\OrderDnsServicePayload

try {
    $result = $apiInstance->orderDnsService($orderDnsServicePayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDnsService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderDnsServicePayload** | [**\SimplyCom\SimplyCom\Model\OrderDnsServicePayload**](../Model/OrderDnsServicePayload.md)|  | |

### Return type

[**\SimplyCom\SimplyCom\Model\OrderDnsService200Response**](../Model/OrderDnsService200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
