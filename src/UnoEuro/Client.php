<?php

namespace UnoEuro;

class Client
{
    const baseuri = 'https://api.simply.com/1/';
    private $account;
    private $apikey;

    public function __construct($account, $apikey)
    {
        $this->account = trim($account);
        $this->apikey = trim($apikey);
    }

    public function request($method = 'GET', $uri, $parameters = array())
    {

        $uri = ltrim($uri, '/');
        $uri = self::baseuri . $this->account . '/' . $this->apikey . '/' . $uri;

        $options = array();
        $options['headers']['User-Agent'] = 'Simply.com API PHP-Client';
        $options['json'] = $parameters;

        $client = new \GuzzleHttp\Client();
        return json_decode($client->request($method, $uri, $options)->getBody());
    }

    public function put($uri, $parameters = array())
    {
        return $this->request('PUT', $uri, $parameters);
    }

    public function get($uri, $parameters = array())
    {
        return $this->request('GET', $uri, $parameters);
    }

    public function post($uri, $parameters = array())
    {
        return $this->request('POST', $uri, $parameters);
    }

    public function delete($uri, $parameters = array())
    {
        return $this->request('DELETE', $uri, $parameters);
    }
}
