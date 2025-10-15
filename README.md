# SimplySDK

Documentation for this API can be found on https://www.simply.com/docs/api/


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/SimplySDK/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = SimplySDK\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplySDK\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.simply.com/2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BillingApi* | [**getInvoices**](docs/Api/BillingApi.md#getinvoices) | **GET** /my/invoices | 
*DNSApi* | [**getDnsRecords**](docs/Api/DNSApi.md#getdnsrecords) | **GET** /my/products/{object}/dns/records | Retrieve DNS records for a specific object
*DefaultApi* | [**domaincheck**](docs/Api/DefaultApi.md#domaincheck) | **GET** /my/domaincheck/{domain} | 
*DnsApi* | [**addDnsRecord**](docs/Api/DnsApi.md#adddnsrecord) | **POST** /my/products/{object}/dns/records | Add new DNS record to a product DNS zone
*DnsApi* | [**ddnsHelper**](docs/Api/DnsApi.md#ddnshelper) | **POST** /ddns/ | 
*DnsApi* | [**deleteDnsRecord**](docs/Api/DnsApi.md#deletednsrecord) | **DELETE** /my/products/{object}/dns/records/{record_id} | Removes DNS record from a product DNS zone
*DnsApi* | [**dyndns**](docs/Api/DnsApi.md#dyndns) | **GET** /dyndns/ | 
*DnsApi* | [**getDnsZone**](docs/Api/DnsApi.md#getdnszone) | **GET** /my/products/{object}/dns | 
*DnsApi* | [**reloadDnsZone**](docs/Api/DnsApi.md#reloaddnszone) | **POST** /my/products/{object}/dns/reload | Force-reload a DNS zone - Usually not necessary
*DnsApi* | [**updateDnsRecord**](docs/Api/DnsApi.md#updatednsrecord) | **PUT** /my/products/{object}/dns/records/{record_id} | Updates a DNS record in a product DNS zone
*DocumentationApi* | [**aa199985c8f25b391406c7aa6d0582e3**](docs/Api/DocumentationApi.md#aa199985c8f25b391406c7aa6d0582e3) | **GET** /openapi.json | OpenAPI JSON file that describes the API
*OrderApi* | [**call3db09c5bcfacbbba537a8872997b010e**](docs/Api/OrderApi.md#call3db09c5bcfacbbba537a8872997b010e) | **POST** /my/order/dnsservice | 
*ProductsApi* | [**getProductList**](docs/Api/ProductsApi.md#getproductlist) | **GET** /my/products | 
*ServerStatusApi* | [**getServerStatusMessages**](docs/Api/ServerStatusApi.md#getserverstatusmessages) | **GET** /my/serverstatus/messages/ | Retrieve a list of current and past serverstatus messages

## Models

- [3db09c5bcfacbbba537a8872997b010eRequest](docs/Model/3db09c5bcfacbbba537a8872997b010eRequest.md)
- [AddDnsRecord200Response](docs/Model/AddDnsRecord200Response.md)
- [AddDnsRecord200ResponseRecordInner](docs/Model/AddDnsRecord200ResponseRecordInner.md)
- [AddDnsRecordRequest](docs/Model/AddDnsRecordRequest.md)
- [DeleteDnsRecord200Response](docs/Model/DeleteDnsRecord200Response.md)
- [GetDnsRecords200Response](docs/Model/GetDnsRecords200Response.md)
- [GetDnsRecords200ResponseRecordsInner](docs/Model/GetDnsRecords200ResponseRecordsInner.md)
- [GetDnsRecords404Response](docs/Model/GetDnsRecords404Response.md)
- [GetInvoices200Response](docs/Model/GetInvoices200Response.md)
- [GetInvoices200ResponseInvoicesInner](docs/Model/GetInvoices200ResponseInvoicesInner.md)
- [GetProductList200Response](docs/Model/GetProductList200Response.md)
- [GetProductList200ResponseProductsInner](docs/Model/GetProductList200ResponseProductsInner.md)
- [GetProductList200ResponseProductsInnerDomain](docs/Model/GetProductList200ResponseProductsInnerDomain.md)
- [GetProductList200ResponseProductsInnerProduct](docs/Model/GetProductList200ResponseProductsInnerProduct.md)
- [GetProductList200ResponseProductsInnerServers](docs/Model/GetProductList200ResponseProductsInnerServers.md)
- [GetProductList200ResponseProductsInnerServersWebserver](docs/Model/GetProductList200ResponseProductsInnerServersWebserver.md)
- [GetProductList200ResponseProductsInnerUsernames](docs/Model/GetProductList200ResponseProductsInnerUsernames.md)
- [GetServerStatusMessages200Response](docs/Model/GetServerStatusMessages200Response.md)
- [GetServerStatusMessages200ResponseMessagesInner](docs/Model/GetServerStatusMessages200ResponseMessagesInner.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.1.1`
    - Generator version: `7.17.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
