# SimplyCom-php

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
      "url": "https://github.com/simplycom/api-php.git"
    }
  ],
  "require": {
    "simplycom/api-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/SimplyCom-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = SimplyCom\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SimplyCom\Api\BillingApi(
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

All URIs are relative to *https://api.simply.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BillingApi* | [**getInvoices**](docs/Api/BillingApi.md#getinvoices) | **GET** /2/my/invoices/ | Retrieve list of invoices
*DnszoneApi* | [**addDnsRecord**](docs/Api/DnszoneApi.md#adddnsrecord) | **POST** /2/my/products/{object}/dns/records/ | Add new DNS record to a product DNS zone
*DnszoneApi* | [**ddnsHelper**](docs/Api/DnszoneApi.md#ddnshelper) | **GET** /2/ddns/ | Dynamic DNS helper endpoint
*DnszoneApi* | [**deleteDnsRecord**](docs/Api/DnszoneApi.md#deletednsrecord) | **DELETE** /2/my/products/{object}/dns/records/{record_id}/ | Remove DNS record from a product DNS zone
*DnszoneApi* | [**dyndns**](docs/Api/DnszoneApi.md#dyndns) | **GET** /2/dyndns/ | DynDNS protocol-compatible endpoint
*DnszoneApi* | [**getDnsRecords**](docs/Api/DnszoneApi.md#getdnsrecords) | **GET** /2/my/products/{object}/dns/records/ | Retrieve all DNS records for a product
*DnszoneApi* | [**getDnsZone**](docs/Api/DnszoneApi.md#getdnszone) | **GET** /2/my/products/{object}/dns/ | Retrieve DNS zone metadata
*DnszoneApi* | [**reloadDnsZone**](docs/Api/DnszoneApi.md#reloaddnszone) | **POST** /2/my/products/{object}/dns/reload/ | Force-reload a DNS zone
*DnszoneApi* | [**updateDnsRecord**](docs/Api/DnszoneApi.md#updatednsrecord) | **PUT** /2/my/products/{object}/dns/records/{record_id}/ | Update a DNS record in a product DNS zone
*DomainsApi* | [**domaincheck**](docs/Api/DomainsApi.md#domaincheck) | **GET** /2/my/domaincheck/{domain}/ | Check domain availability
*MailApi* | [**addMailAccount**](docs/Api/MailApi.md#addmailaccount) | **POST** /2/my/products/{object}/mail/accounts/ | Add new mail account to a product
*OrderApi* | [**orderDnsService**](docs/Api/OrderApi.md#orderdnsservice) | **POST** /2/my/order/dnsservice/ | Order a DNS service with optional domain registration/transfer
*ProductsApi* | [**getProductList**](docs/Api/ProductsApi.md#getproductlist) | **GET** /2/my/products/ | Retrieve list of products
*RegistryApi* | [**addDnssecKey**](docs/Api/RegistryApi.md#adddnsseckey) | **POST** /2/my/products/{object}/registry/dnssec/ | Add a DNSSEC key to a domain
*RegistryApi* | [**getDnssecKeys**](docs/Api/RegistryApi.md#getdnsseckeys) | **GET** /2/my/products/{object}/registry/dnssec/ | Retrieve DNSSEC keys registered on a domain
*RegistryApi* | [**getNameservers**](docs/Api/RegistryApi.md#getnameservers) | **GET** /2/my/products/{object}/registry/nameservers/ | Retrieve the current nameservers of a domain
*RegistryApi* | [**removeDnssec**](docs/Api/RegistryApi.md#removednssec) | **DELETE** /2/my/products/{object}/registry/dnssec/ | Remove all DNSSEC keys from a domain
*RegistryApi* | [**setNameservers**](docs/Api/RegistryApi.md#setnameservers) | **PUT** /2/my/products/{object}/registry/nameservers/ | Set the nameservers of a domain at the registry
*ServerstatusApi* | [**getServerStatusMessages**](docs/Api/ServerstatusApi.md#getserverstatusmessages) | **GET** /2/my/serverstatus/messages/ | Retrieve server status messages

## Models

- [AddDnsRecord200Response](docs/Model/AddDnsRecord200Response.md)
- [AddDnsRecord200ResponseRecord](docs/Model/AddDnsRecord200ResponseRecord.md)
- [AddDnsRecord400Response](docs/Model/AddDnsRecord400Response.md)
- [AddDnsSecKeyPayload](docs/Model/AddDnsSecKeyPayload.md)
- [AddMailAccountPayload](docs/Model/AddMailAccountPayload.md)
- [DnsRecordPayload](docs/Model/DnsRecordPayload.md)
- [DnsRecordType](docs/Model/DnsRecordType.md)
- [Domaincheck200Response](docs/Model/Domaincheck200Response.md)
- [Domaincheck200ResponseDomain](docs/Model/Domaincheck200ResponseDomain.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [GetDnsRecords200Response](docs/Model/GetDnsRecords200Response.md)
- [GetDnsRecords200ResponseRecordsInner](docs/Model/GetDnsRecords200ResponseRecordsInner.md)
- [GetDnsRecords404Response](docs/Model/GetDnsRecords404Response.md)
- [GetDnsZone200Response](docs/Model/GetDnsZone200Response.md)
- [GetDnsZone200ResponseZone](docs/Model/GetDnsZone200ResponseZone.md)
- [GetDnssecKeys200Response](docs/Model/GetDnssecKeys200Response.md)
- [GetDnssecKeys200ResponseDnssecKeysInner](docs/Model/GetDnssecKeys200ResponseDnssecKeysInner.md)
- [GetInvoices200Response](docs/Model/GetInvoices200Response.md)
- [GetInvoices200ResponseInvoicesInner](docs/Model/GetInvoices200ResponseInvoicesInner.md)
- [GetNameservers200Response](docs/Model/GetNameservers200Response.md)
- [GetProductList200Response](docs/Model/GetProductList200Response.md)
- [GetProductList200ResponseProductsInner](docs/Model/GetProductList200ResponseProductsInner.md)
- [GetProductList200ResponseProductsInnerDomain](docs/Model/GetProductList200ResponseProductsInnerDomain.md)
- [GetProductList200ResponseProductsInnerProduct](docs/Model/GetProductList200ResponseProductsInnerProduct.md)
- [GetProductList200ResponseProductsInnerServers](docs/Model/GetProductList200ResponseProductsInnerServers.md)
- [GetProductList200ResponseProductsInnerServersFtpserver](docs/Model/GetProductList200ResponseProductsInnerServersFtpserver.md)
- [GetProductList200ResponseProductsInnerServersSshserver](docs/Model/GetProductList200ResponseProductsInnerServersSshserver.md)
- [GetProductList200ResponseProductsInnerServersWebserver](docs/Model/GetProductList200ResponseProductsInnerServersWebserver.md)
- [GetProductList200ResponseProductsInnerUsernames](docs/Model/GetProductList200ResponseProductsInnerUsernames.md)
- [GetServerStatusMessages200Response](docs/Model/GetServerStatusMessages200Response.md)
- [GetServerStatusMessages200ResponseMessagesInner](docs/Model/GetServerStatusMessages200ResponseMessagesInner.md)
- [OrderDnsService200Response](docs/Model/OrderDnsService200Response.md)
- [OrderDnsService200ResponseOrder](docs/Model/OrderDnsService200ResponseOrder.md)
- [OrderDnsService400Response](docs/Model/OrderDnsService400Response.md)
- [OrderDnsServicePayload](docs/Model/OrderDnsServicePayload.md)
- [SetNameserversPayload](docs/Model/SetNameserversPayload.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)

## Authorization

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

- API version: `2.3.0`
    - Generator version: `7.22.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
