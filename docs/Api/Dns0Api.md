# SimplyCom\DnsApi

All URIs are relative to https://api.simply.com/2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDnsRecord()**](DnsApi.md#addDnsRecord) | **POST** /my/products/{object}/dns/records | Add new DNS record to a product DNS zone |
| [**ddnsHelper()**](DnsApi.md#ddnsHelper) | **POST** /ddns/ |  |
| [**deleteDnsRecord()**](DnsApi.md#deleteDnsRecord) | **DELETE** /my/products/{object}/dns/records/{record_id} | Removes DNS record from a product DNS zone |
| [**dyndns()**](DnsApi.md#dyndns) | **GET** /dyndns/ |  |
| [**getDnsZone()**](DnsApi.md#getDnsZone) | **GET** /my/products/{object}/dns |  |
| [**reloadDnsZone()**](DnsApi.md#reloadDnsZone) | **POST** /my/products/{object}/dns/reload | Force-reload a DNS zone - Usually not necessary |
| [**updateDnsRecord()**](DnsApi.md#updateDnsRecord) | **PUT** /my/products/{object}/dns/records/{record_id} | Updates a DNS record in a product DNS zone |


## `addDnsRecord()`

```php
addDnsRecord($object, $addDnsRecordRequest): \SimplyCom\SimplyCom\Model\AddDnsRecord200Response
```

Add new DNS record to a product DNS zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object = example.com; // string | The product handle/UUID, as found in the /my/products/ endpoint.
$addDnsRecordRequest = new \SimplyCom\SimplyCom\Model\AddDnsRecordRequest(); // \SimplyCom\SimplyCom\Model\AddDnsRecordRequest

try {
    $result = $apiInstance->addDnsRecord($object, $addDnsRecordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->addDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |
| **addDnsRecordRequest** | [**\SimplyCom\SimplyCom\Model\AddDnsRecordRequest**](../Model/AddDnsRecordRequest.md)|  | [optional] |

### Return type

[**\SimplyCom\SimplyCom\Model\AddDnsRecord200Response**](../Model/AddDnsRecord200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ddnsHelper()`

```php
ddnsHelper($hostname, $domain, $record, $myip, $ttl)
```



DDNS helper

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hostname = home.example.com; // string | The full hostname you wish to create/update. Domain and record will be inferred from this
$domain = example.com; // string | The domain you wish to update. Overrides data from hostname parameter.
$record = home; // string | The name of the generated DNS record you wish to create/update on the domain. Affects data from hostname parameter.
$myip = 127.0.0.1; // string | The IP address to be set. Will automatically use the client IP (REMOTE_ADDR) if this parameter is not provided. We recommend leaving this parameter blank
$ttl = 360; // int | The TTL of the generated DNS record

try {
    $apiInstance->ddnsHelper($hostname, $domain, $record, $myip, $ttl);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->ddnsHelper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hostname** | **string**| The full hostname you wish to create/update. Domain and record will be inferred from this | |
| **domain** | **string**| The domain you wish to update. Overrides data from hostname parameter. | [optional] |
| **record** | **string**| The name of the generated DNS record you wish to create/update on the domain. Affects data from hostname parameter. | [optional] |
| **myip** | **string**| The IP address to be set. Will automatically use the client IP (REMOTE_ADDR) if this parameter is not provided. We recommend leaving this parameter blank | [optional] |
| **ttl** | **int**| The TTL of the generated DNS record | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDnsRecord()`

```php
deleteDnsRecord($object, $recordId): \SimplyCom\SimplyCom\Model\DeleteDnsRecord200Response
```

Removes DNS record from a product DNS zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object = example.com; // string | The product handle/UUID, as found in the /my/products/ endpoint.
$recordId = 56; // int | The id of a DNS record in a DNS zone.

try {
    $result = $apiInstance->deleteDnsRecord($object, $recordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->deleteDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |
| **recordId** | **int**| The id of a DNS record in a DNS zone. | |

### Return type

[**\SimplyCom\SimplyCom\Model\DeleteDnsRecord200Response**](../Model/DeleteDnsRecord200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dyndns()`

```php
dyndns($hostname, $myip, $domain): string
```



Dyndns lookalike endpoint, directly emulates dyndns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hostname = home.example.com; // string | The full hostname you wish to create/update. Domain and record will be inferred from this
$myip = 127.0.0.1; // string | The IP address to be set. Will automatically use the client IP (REMOTE_ADDR) if this parameter is not provided.
$domain = example.com; // string | Domain to change records on, must be used if domain cannot be inferred from hostname or if incorrectly inferred. Overrides data from hostname parameter.

try {
    $result = $apiInstance->dyndns($hostname, $myip, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->dyndns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hostname** | **string**| The full hostname you wish to create/update. Domain and record will be inferred from this | |
| **myip** | **string**| The IP address to be set. Will automatically use the client IP (REMOTE_ADDR) if this parameter is not provided. | [optional] |
| **domain** | **string**| Domain to change records on, must be used if domain cannot be inferred from hostname or if incorrectly inferred. Overrides data from hostname parameter. | [optional] |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDnsZone()`

```php
getDnsZone($object): object
```



Retrieve meta information about a DNS zone for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object = example.com; // string | The product handle/UUID, as found in the /my/products/ endpoint.

try {
    $result = $apiInstance->getDnsZone($object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->getDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reloadDnsZone()`

```php
reloadDnsZone($object): object
```

Force-reload a DNS zone - Usually not necessary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object = example.com; // string | The product handle/UUID, as found in the /my/products/ endpoint.

try {
    $result = $apiInstance->reloadDnsZone($object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->reloadDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDnsRecord()`

```php
updateDnsRecord($object, $recordId, $addDnsRecordRequest): object
```

Updates a DNS record in a product DNS zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object = example.com; // string | The product handle/UUID, as found in the /my/products/ endpoint.
$recordId = 56; // int | The id of a DNS record in a DNS zone.
$addDnsRecordRequest = new \SimplyCom\SimplyCom\Model\AddDnsRecordRequest(); // \SimplyCom\SimplyCom\Model\AddDnsRecordRequest

try {
    $result = $apiInstance->updateDnsRecord($object, $recordId, $addDnsRecordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->updateDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |
| **recordId** | **int**| The id of a DNS record in a DNS zone. | |
| **addDnsRecordRequest** | [**\SimplyCom\SimplyCom\Model\AddDnsRecordRequest**](../Model/AddDnsRecordRequest.md)|  | [optional] |

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
