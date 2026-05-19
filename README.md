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
*DatabaseApi* | [**getMysqlDatabases**](docs/Api/DatabaseApi.md#getmysqldatabases) | **GET** /2/my/products/{object}/databases/mysql/ | List MySQL databases for a product
*DnsApi* | [**addDnsRecord**](docs/Api/DnsApi.md#adddnsrecord) | **POST** /2/my/products/{object}/dns/records/ | Add new DNS record to a product DNS zone
*DnsApi* | [**ddnsHelper**](docs/Api/DnsApi.md#ddnshelper) | **GET** /2/ddns/ | Dynamic DNS helper endpoint
*DnsApi* | [**deleteDnsRecord**](docs/Api/DnsApi.md#deletednsrecord) | **DELETE** /2/my/products/{object}/dns/records/{record_id}/ | Remove DNS record from a product DNS zone
*DnsApi* | [**dyndns**](docs/Api/DnsApi.md#dyndns) | **GET** /2/dyndns/ | DynDNS protocol-compatible endpoint
*DnsApi* | [**getDnsRecords**](docs/Api/DnsApi.md#getdnsrecords) | **GET** /2/my/products/{object}/dns/records/ | Retrieve all DNS records for a product
*DnsApi* | [**getDnsZone**](docs/Api/DnsApi.md#getdnszone) | **GET** /2/my/products/{object}/dns/ | Retrieve DNS zone metadata
*DnsApi* | [**reloadDnsZone**](docs/Api/DnsApi.md#reloaddnszone) | **POST** /2/my/products/{object}/dns/reload/ | Force-reload a DNS zone
*DnsApi* | [**updateDnsRecord**](docs/Api/DnsApi.md#updatednsrecord) | **PUT** /2/my/products/{object}/dns/records/{record_id}/ | Update a DNS record in a product DNS zone
*DomainsApi* | [**domaincheck**](docs/Api/DomainsApi.md#domaincheck) | **GET** /2/my/domaincheck/{domain}/ | Check domain availability
*MailApi* | [**addMailAccount**](docs/Api/MailApi.md#addmailaccount) | **POST** /2/my/products/{object}/mail/accounts/ | Add new mail account to a product
*OrderApi* | [**orderDnsService**](docs/Api/OrderApi.md#orderdnsservice) | **POST** /2/my/order/dnsservice/ | Order a DNS service with optional domain registration/transfer
*ProductsApi* | [**getProductList**](docs/Api/ProductsApi.md#getproductlist) | **GET** /2/my/products/ | Retrieve list of products
*RegistryApi* | [**addDnssecKey**](docs/Api/RegistryApi.md#adddnsseckey) | **POST** /2/my/products/{object}/registry/dnssec/ | Add a DNSSEC key to a domain
*RegistryApi* | [**getDnssecKeys**](docs/Api/RegistryApi.md#getdnsseckeys) | **GET** /2/my/products/{object}/registry/dnssec/ | Retrieve DNSSEC keys registered on a domain
*RegistryApi* | [**getNameservers**](docs/Api/RegistryApi.md#getnameservers) | **GET** /2/my/products/{object}/registry/nameservers/ | Retrieve the current nameservers of a domain
*RegistryApi* | [**removeDnssec**](docs/Api/RegistryApi.md#removednssec) | **DELETE** /2/my/products/{object}/registry/dnssec/ | Remove all DNSSEC keys from a domain
*RegistryApi* | [**setNameservers**](docs/Api/RegistryApi.md#setnameservers) | **PUT** /2/my/products/{object}/registry/nameservers/ | Set the nameservers of a domain at the registry
*ServerStatusApi* | [**getServerStatusMessages**](docs/Api/ServerStatusApi.md#getserverstatusmessages) | **GET** /2/my/serverstatus/messages/ | Retrieve server status messages

## Models

- [AddDnsRecordResponse](docs/Model/AddDnsRecordResponse.md)
- [AddDnsSecKeyPayload](docs/Model/AddDnsSecKeyPayload.md)
- [AddMailAccountPayload](docs/Model/AddMailAccountPayload.md)
- [DnsRecord](docs/Model/DnsRecord.md)
- [DnsRecordPayload](docs/Model/DnsRecordPayload.md)
- [DnsRecordType](docs/Model/DnsRecordType.md)
- [DnsZoneInfo](docs/Model/DnsZoneInfo.md)
- [DnssecKey](docs/Model/DnssecKey.md)
- [DomainAvailability](docs/Model/DomainAvailability.md)
- [DomaincheckResponse](docs/Model/DomaincheckResponse.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [FtpServer](docs/Model/FtpServer.md)
- [GetDnsRecordsResponse](docs/Model/GetDnsRecordsResponse.md)
- [GetDnsZoneResponse](docs/Model/GetDnsZoneResponse.md)
- [GetDnssecKeysResponse](docs/Model/GetDnssecKeysResponse.md)
- [GetInvoicesResponse](docs/Model/GetInvoicesResponse.md)
- [GetMysqlDatabasesResponse](docs/Model/GetMysqlDatabasesResponse.md)
- [GetNameserversResponse](docs/Model/GetNameserversResponse.md)
- [GetProductListResponse](docs/Model/GetProductListResponse.md)
- [GetServerStatusMessagesResponse](docs/Model/GetServerStatusMessagesResponse.md)
- [Invoice](docs/Model/Invoice.md)
- [MysqlDatabase](docs/Model/MysqlDatabase.md)
- [NewDnsRecord](docs/Model/NewDnsRecord.md)
- [OrderDnsServicePayload](docs/Model/OrderDnsServicePayload.md)
- [OrderDnsServiceResponse](docs/Model/OrderDnsServiceResponse.md)
- [OrderInfo](docs/Model/OrderInfo.md)
- [Product](docs/Model/Product.md)
- [ProductDomain](docs/Model/ProductDomain.md)
- [ProductServers](docs/Model/ProductServers.md)
- [ProductService](docs/Model/ProductService.md)
- [ProductUsernames](docs/Model/ProductUsernames.md)
- [ServerStatusMessage](docs/Model/ServerStatusMessage.md)
- [SetNameserversPayload](docs/Model/SetNameserversPayload.md)
- [SshServer](docs/Model/SshServer.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [WebServer](docs/Model/WebServer.md)

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
    - Generator version: `7.23.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
