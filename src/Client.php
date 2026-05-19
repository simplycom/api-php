<?php

namespace SimplyCom;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use SimplyCom\Api\BillingApi;
use SimplyCom\Api\DatabaseApi;
use SimplyCom\Api\DnsApi;
use SimplyCom\Api\DomainsApi;
use SimplyCom\Api\MailApi;
use SimplyCom\Api\OrderApi;
use SimplyCom\Api\ProductsApi;
use SimplyCom\Api\RegistryApi;
use SimplyCom\Api\ServerStatusApi;

/**
 * Single entry-point for the Simply.com API.
 *
 *     $simply = new SimplyCom\Client('S123456', 'your-api-key');
 *     $simply->dns()->getDnsRecords('example.com');
 */
final class Client
{
    private readonly Configuration $config;

    private readonly ClientInterface $http;

    public function __construct(
        string $accountName,
        string $apiKey,
        ?ClientInterface $http = null,
    ) {
        $this->config = Configuration::getDefaultConfiguration()
            ->setUsername($accountName)
            ->setPassword($apiKey);
        $this->http = $http ?? new GuzzleClient();
    }

    public function billing(): BillingApi
    {
        return new BillingApi($this->http, $this->config);
    }

    public function database(): DatabaseApi
    {
        return new DatabaseApi($this->http, $this->config);
    }

    public function dns(): DnsApi
    {
        return new DnsApi($this->http, $this->config);
    }

    public function domains(): DomainsApi
    {
        return new DomainsApi($this->http, $this->config);
    }

    public function mail(): MailApi
    {
        return new MailApi($this->http, $this->config);
    }

    public function order(): OrderApi
    {
        return new OrderApi($this->http, $this->config);
    }

    public function products(): ProductsApi
    {
        return new ProductsApi($this->http, $this->config);
    }

    public function registry(): RegistryApi
    {
        return new RegistryApi($this->http, $this->config);
    }

    public function serverStatus(): ServerStatusApi
    {
        return new ServerStatusApi($this->http, $this->config);
    }
}
