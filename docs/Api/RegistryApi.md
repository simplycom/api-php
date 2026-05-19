# SimplyCom\RegistryApi

All URIs are relative to https://api.simply.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDnssecKey()**](RegistryApi.md#addDnssecKey) | **POST** /2/my/products/{object}/registry/dnssec/ | Add a DNSSEC key to a domain |
| [**getDnssecKeys()**](RegistryApi.md#getDnssecKeys) | **GET** /2/my/products/{object}/registry/dnssec/ | Retrieve DNSSEC keys registered on a domain |
| [**getNameservers()**](RegistryApi.md#getNameservers) | **GET** /2/my/products/{object}/registry/nameservers/ | Retrieve the current nameservers of a domain |
| [**removeDnssec()**](RegistryApi.md#removeDnssec) | **DELETE** /2/my/products/{object}/registry/dnssec/ | Remove all DNSSEC keys from a domain |
| [**setNameservers()**](RegistryApi.md#setNameservers) | **PUT** /2/my/products/{object}/registry/nameservers/ | Set the nameservers of a domain at the registry |


## `addDnssecKey()`

```php
addDnssecKey($object, $addDnsSecKeyPayload): \SimplyCom\SimplyCom\Model\SuccessResponse
```

Add a DNSSEC key to a domain

Publishes a new DS or DNSKEY record at the registry for the product's domain. Keys that already exist on the domain are a no-op.

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
$addDnsSecKeyPayload = new \SimplyCom\SimplyCom\Model\AddDnsSecKeyPayload(); // \SimplyCom\SimplyCom\Model\AddDnsSecKeyPayload

try {
    $result = $apiInstance->addDnssecKey($object, $addDnsSecKeyPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistryApi->addDnssecKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |
| **addDnsSecKeyPayload** | [**\SimplyCom\SimplyCom\Model\AddDnsSecKeyPayload**](../Model/AddDnsSecKeyPayload.md)|  | |

### Return type

[**\SimplyCom\SimplyCom\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDnssecKeys()`

```php
getDnssecKeys($object): \SimplyCom\SimplyCom\Model\GetDnssecKeysResponse
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

[**\SimplyCom\SimplyCom\Model\GetDnssecKeysResponse**](../Model/GetDnssecKeysResponse.md)

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
getNameservers($object): \SimplyCom\SimplyCom\Model\GetNameserversResponse
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

[**\SimplyCom\SimplyCom\Model\GetNameserversResponse**](../Model/GetNameserversResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeDnssec()`

```php
removeDnssec($object): \SimplyCom\SimplyCom\Model\SuccessResponse
```

Remove all DNSSEC keys from a domain

Disables DNSSEC by removing every DS and DNSKEY record at the registry for the product's domain.

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
    $result = $apiInstance->removeDnssec($object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistryApi->removeDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |

### Return type

[**\SimplyCom\SimplyCom\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setNameservers()`

```php
setNameservers($object, $setNameserversPayload): \SimplyCom\SimplyCom\Model\SuccessResponse
```

Set the nameservers of a domain at the registry

Replaces the nameserver set registered for the product's domain at its registry. The registry call may take a few seconds to propagate.

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
$setNameserversPayload = new \SimplyCom\SimplyCom\Model\SetNameserversPayload(); // \SimplyCom\SimplyCom\Model\SetNameserversPayload

try {
    $result = $apiInstance->setNameservers($object, $setNameserversPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistryApi->setNameservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |
| **setNameserversPayload** | [**\SimplyCom\SimplyCom\Model\SetNameserversPayload**](../Model/SetNameserversPayload.md)|  | |

### Return type

[**\SimplyCom\SimplyCom\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
