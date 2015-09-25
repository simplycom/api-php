<?php

namespace UnoEuro;

class Client
{
    const uri = 'https://api.unoeuro.com/1/';
    private $account;
    private $apikey;

    public function __construct($account, $apikey)
    {
        $this->account = $account;
        $this->apikey = $apikey;
    }

    public function request($method = 'GET', $uri, $parameters = array())
    {

        $uri = self::uri . $this->account . '/' . $this->apikey . '/' . $uri;

        $options = array();
        $options['headers']['User-Agent'] = 'UnoEuro API PHP-Client';
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
        return $this->delete('POST', $uri, $parameters);
    }
}
