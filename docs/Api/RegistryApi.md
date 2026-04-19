# SimplyCom\RegistryApi

All URIs are relative to https://api.simply.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDnssecKeys()**](RegistryApi.md#getDnssecKeys) | **GET** /2/my/products/{object}/dnssec/ | Retrieve DNSSEC keys registered on a domain |
| [**getNameservers()**](RegistryApi.md#getNameservers) | **GET** /2/my/products/{object}/nameservers/ | Retrieve the current nameservers of a domain |


## `getDnssecKeys()`

```php
getDnssecKeys($object): \SimplyCom\SimplyCom\Model\GetDnssecKeys200Response
```

Retrieve DNSSEC keys registered on a domain

Returns the DNSSEC keys (DS or DNSKEY records) currently published at the registry for the product's domain. Each key includes the record type and its standard zone-file representation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\RegistryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object = example.com; // string | The product handle/UUID, as found in the /my/products/ endpoint.

try {
    $result = $apiInstance->getDnssecKeys($object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistryApi->getDnssecKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |

### Return type

[**\SimplyCom\SimplyCom\Model\GetDnssecKeys200Response**](../Model/GetDnssecKeys200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNameservers()`

```php
getNameservers($object): \SimplyCom\SimplyCom\Model\GetNameservers200Response
```

Retrieve the current nameservers of a domain

Returns the nameservers currently registered for the product's domain at its registry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\RegistryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object = example.com; // string | The product handle/UUID, as found in the /my/products/ endpoint.

try {
    $result = $apiInstance->getNameservers($object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistryApi->getNameservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |

### Return type

[**\SimplyCom\SimplyCom\Model\GetNameservers200Response**](../Model/GetNameservers200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
