# SimplyCom\DnsApi

All URIs are relative to https://api.simply.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDnsRecord()**](DnsApi.md#addDnsRecord) | **POST** /2/my/products/{object}/dns/records/ | Add new DNS record to a product DNS zone |
| [**ddnsHelper()**](DnsApi.md#ddnsHelper) | **GET** /2/ddns/ | Dynamic DNS helper endpoint |
| [**deleteDnsRecord()**](DnsApi.md#deleteDnsRecord) | **DELETE** /2/my/products/{object}/dns/records/{record_id}/ | Remove DNS record from a product DNS zone |
| [**dyndns()**](DnsApi.md#dyndns) | **GET** /2/dyndns/ | DynDNS protocol-compatible endpoint |
| [**getDnsRecords()**](DnsApi.md#getDnsRecords) | **GET** /2/my/products/{object}/dns/records/ | Retrieve all DNS records for a product |
| [**getDnsZone()**](DnsApi.md#getDnsZone) | **GET** /2/my/products/{object}/dns/ | Retrieve DNS zone metadata |
| [**reloadDnsZone()**](DnsApi.md#reloadDnsZone) | **POST** /2/my/products/{object}/dns/reload/ | Force-reload a DNS zone |
| [**updateDnsRecord()**](DnsApi.md#updateDnsRecord) | **PUT** /2/my/products/{object}/dns/records/{record_id}/ | Update a DNS record in a product DNS zone |


## `addDnsRecord()`

```php
addDnsRecord($object, $dnsRecordPayload): \SimplyCom\SimplyCom\Model\AddDnsRecord200Response
```

Add new DNS record to a product DNS zone

Creates a new DNS record in the DNS zone. Supports all common record types including A, AAAA, CNAME, MX, TXT, SRV, and more.

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
$dnsRecordPayload = new \SimplyCom\SimplyCom\Model\DnsRecordPayload(); // \SimplyCom\SimplyCom\Model\DnsRecordPayload

try {
    $result = $apiInstance->addDnsRecord($object, $dnsRecordPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->addDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |
| **dnsRecordPayload** | [**\SimplyCom\SimplyCom\Model\DnsRecordPayload**](../Model/DnsRecordPayload.md)|  | |

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
ddnsHelper($hostname, $domain, $record, $myip, $ttl): string
```

Dynamic DNS helper endpoint

User-friendly DDNS endpoint that provides human-readable responses. For DynDNS protocol compatibility, use the /dyndns/ endpoint instead.

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
$hostname = home.example.com; // string | The full hostname you wish to create/update. Domain and record will be inferred from this.
$domain = example.com; // string | The domain you wish to update. Overrides data from hostname parameter.
$record = home; // string | The name of the DNS record you wish to create/update on the domain. Overrides data inferred from hostname parameter.
$myip = 127.0.0.1; // string | The IP address to be set. Will automatically use the client IP (REMOTE_ADDR) if this parameter is not provided. We recommend leaving this parameter blank.
$ttl = 360; // int | The TTL (Time To Live) of the generated DNS record in seconds. Defaults to 3600.

try {
    $result = $apiInstance->ddnsHelper($hostname, $domain, $record, $myip, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->ddnsHelper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hostname** | **string**| The full hostname you wish to create/update. Domain and record will be inferred from this. | |
| **domain** | **string**| The domain you wish to update. Overrides data from hostname parameter. | [optional] |
| **record** | **string**| The name of the DNS record you wish to create/update on the domain. Overrides data inferred from hostname parameter. | [optional] |
| **myip** | **string**| The IP address to be set. Will automatically use the client IP (REMOTE_ADDR) if this parameter is not provided. We recommend leaving this parameter blank. | [optional] |
| **ttl** | **int**| The TTL (Time To Live) of the generated DNS record in seconds. Defaults to 3600. | [optional] [default to 3600] |

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

## `deleteDnsRecord()`

```php
deleteDnsRecord($object, $recordId): \SimplyCom\SimplyCom\Model\SuccessResponse
```

Remove DNS record from a product DNS zone

Deletes a specific DNS record by its ID. The DNS zone will be automatically reloaded after deletion.

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

[**\SimplyCom\SimplyCom\Model\SuccessResponse**](../Model/SuccessResponse.md)

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

DynDNS protocol-compatible endpoint

Dyndns-compatible endpoint that emulates DynDNS protocol responses and functionality. Supports both IPv4 and IPv6 addresses.

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
$hostname = home.example.com; // string | The full hostname you wish to create/update. Domain and record will be inferred from this.
$myip = 127.0.0.1; // string | The IP address to be set. Will automatically use the client IP (REMOTE_ADDR) if this parameter is not provided. We recommend leaving this parameter blank.
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
| **hostname** | **string**| The full hostname you wish to create/update. Domain and record will be inferred from this. | |
| **myip** | **string**| The IP address to be set. Will automatically use the client IP (REMOTE_ADDR) if this parameter is not provided. We recommend leaving this parameter blank. | [optional] |
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

## `getDnsRecords()`

```php
getDnsRecords($object): \SimplyCom\SimplyCom\Model\GetDnsRecords200Response
```

Retrieve all DNS records for a product

Returns a complete list of all DNS records in the zone, including A, AAAA, CNAME, MX, TXT, SRV, and other record types.

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
    $result = $apiInstance->getDnsRecords($object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->getDnsRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object** | **string**| The product handle/UUID, as found in the /my/products/ endpoint. | |

### Return type

[**\SimplyCom\SimplyCom\Model\GetDnsRecords200Response**](../Model/GetDnsRecords200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDnsZone()`

```php
getDnsZone($object): \SimplyCom\SimplyCom\Model\GetDnsZone200Response
```

Retrieve DNS zone metadata

Retrieve meta information about a DNS zone for a product, including zone name and configuration.

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

[**\SimplyCom\SimplyCom\Model\GetDnsZone200Response**](../Model/GetDnsZone200Response.md)

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
reloadDnsZone($object): \SimplyCom\SimplyCom\Model\SuccessResponse
```

Force-reload a DNS zone

Manually triggers a DNS zone reload. Usually not necessary as zone reloads happen automatically after record modifications.

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

[**\SimplyCom\SimplyCom\Model\SuccessResponse**](../Model/SuccessResponse.md)

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
updateDnsRecord($object, $recordId, $dnsRecordPayload): \SimplyCom\SimplyCom\Model\SuccessResponse
```

Update a DNS record in a product DNS zone

Updates an existing DNS record. All fields should be provided, as this is a full update operation. The DNS zone will be automatically reloaded if changes are detected.

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
$dnsRecordPayload = new \SimplyCom\SimplyCom\Model\DnsRecordPayload(); // \SimplyCom\SimplyCom\Model\DnsRecordPayload

try {
    $result = $apiInstance->updateDnsRecord($object, $recordId, $dnsRecordPayload);
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
| **dnsRecordPayload** | [**\SimplyCom\SimplyCom\Model\DnsRecordPayload**](../Model/DnsRecordPayload.md)|  | |

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
