# SimplyCom\DocumentationApi

All URIs are relative to https://api.simply.com/2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**call22ec05f39cd3b5c3f50243706718b55d()**](DocumentationApi.md#call22ec05f39cd3b5c3f50243706718b55d) | **GET** /openapi.json | OpenAPI JSON file that describes the API |


## `call22ec05f39cd3b5c3f50243706718b55d()`

```php
call22ec05f39cd3b5c3f50243706718b55d(): object
```

OpenAPI JSON file that describes the API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SimplyCom\Api\DocumentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->call22ec05f39cd3b5c3f50243706718b55d();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentationApi->call22ec05f39cd3b5c3f50243706718b55d: ', $e->getMessage(), PHP_EOL;
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
