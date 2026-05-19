# SimplyCom\DomainsApi

All URIs are relative to https://api.simply.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domaincheck()**](DomainsApi.md#domaincheck) | **GET** /2/my/domaincheck/{domain}/ | Check domain availability |


## `domaincheck()`

```php
domaincheck($domain): \SimplyCom\SimplyCom\Model\DomaincheckResponse
```

Check domain availability

Check if a domain is available for registration or can be transferred. Supports both ASCII and internationalized domain names (IDN). Note: This endpoint includes a 1-second delay to prevent abuse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = example.com; // string | The fully qualified domain name to check (e.g., example.com)

try {
    $result = $apiInstance->domaincheck($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domaincheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| The fully qualified domain name to check (e.g., example.com) | |

### Return type

[**\SimplyCom\SimplyCom\Model\DomaincheckResponse**](../Model/DomaincheckResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
