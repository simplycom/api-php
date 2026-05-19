# simplycom/api-php

Official PHP client for the [Simply.com API](https://www.simply.com/docs/api/).

## Requirements

PHP 8.1 or higher.

## Installation

```bash
composer require simplycom/php-sdk
```

## Quickstart

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use SimplyCom\Client;

$simply = new Client('S123456', 'your-api-key');

$products = $simply->products()->getProductList();

foreach ($products->getProducts() as $product) {
    echo $product->getObject() . PHP_EOL;
}
```

Username is your Simply.com account name (e.g. `S123456`); password is the API key for that account. See [API authentication](https://www.simply.com/docs/api/#authentication).

## Available resources

```php
$simply->billing()       // invoices
$simply->database()      // MySQL databases on a product
$simply->dns()           // DNS zones, records, DDNS
$simply->domains()       // domain availability checks
$simply->mail()          // mail accounts on a product
$simply->order()         // place new orders
$simply->products()      // list products on the account
$simply->registry()      // registry-level data (nameservers, DNSSEC)
$simply->serverStatus()  // public server status messages
```

## Examples

### List DNS records

```php
use SimplyCom\Client;

$simply = new Client('S123456', 'your-api-key');

$response = $simply->dns()->getDnsRecords('example.com');

foreach ($response->getRecords() as $record) {
    printf("%-6s %-30s %s\n", $record->getType(), $record->getName(), $record->getData());
}
```

### Add a DNS record

```php
use SimplyCom\Client;
use SimplyCom\Model\DnsRecordPayload;
use SimplyCom\Model\DnsRecordType;

$simply = new Client('S123456', 'your-api-key');

$payload = new DnsRecordPayload([
    'type' => DnsRecordType::A,
    'name' => 'www',
    'data' => '1.2.3.4',
    'ttl'  => 3600,
]);

$result = $simply->dns()->addDnsRecord('example.com', $payload);

echo 'Created record id ' . $result->getRecord()->getId() . PHP_EOL;
```

### Check domain availability

```php
use SimplyCom\Client;

$simply = new Client('S123456', 'your-api-key');

$check = $simply->domains()->domaincheck('example.com')->getDomain();

if ($check->getAvailable()) {
    echo 'Available!' . PHP_EOL;
} elseif ($check->getCantransfer()) {
    echo 'Taken, but can be transferred.' . PHP_EOL;
} else {
    echo 'Taken.' . PHP_EOL;
}
```

### List invoices

```php
use SimplyCom\Client;

$simply = new Client('S123456', 'your-api-key');

foreach ($simply->billing()->getInvoices()->getInvoices() as $invoice) {
    printf("%s  %s %s  %s\n",
        $invoice->getDate(),
        number_format($invoice->getAmount(), 2),
        $invoice->getCurrency(),
        $invoice->getSubject(),
    );
}
```

## Error handling

API errors are thrown as `SimplyCom\ApiException`. The exception exposes the HTTP status code, response body, and response headers.

```php
use SimplyCom\Client;
use SimplyCom\ApiException;

$simply = new Client('S123456', 'your-api-key');

try {
    $simply->dns()->getDnsRecords('not-your-domain.com');
} catch (ApiException $e) {
    echo $e->getCode() . ': ' . $e->getMessage() . PHP_EOL;
    echo $e->getResponseBody();
}
```

## Custom HTTP client

Pass any `GuzzleHttp\ClientInterface` to the `Client` constructor, e.g. to set a custom timeout, proxy, or handler stack:

```php
use GuzzleHttp\Client as Guzzle;
use SimplyCom\Client;

$http = new Guzzle(['timeout' => 10.0]);
$simply = new Client('S123456', 'your-api-key', $http);
```

## License

See [LICENSE](LICENSE).
