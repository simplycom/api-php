# SimplyCom\Sdk\DocumentationApi

documentation

All URIs are relative to https://api.simply.com/2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aa199985c8f25b391406c7aa6d0582e3()**](DocumentationApi.md#aa199985c8f25b391406c7aa6d0582e3) | **GET** /openapi.json | OpenAPI JSON file that describes the API |


## `aa199985c8f25b391406c7aa6d0582e3()`

```php
aa199985c8f25b391406c7aa6d0582e3(): object
```

OpenAPI JSON file that describes the API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SimplyCom\Sdk\Api\DocumentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aa199985c8f25b391406c7aa6d0582e3();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentationApi->aa199985c8f25b391406c7aa6d0582e3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
