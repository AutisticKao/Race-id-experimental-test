<?php

use GuzzleHttp\Client;

class ApiClient {
    private $client;

    public function __construct() {
        $this->client = new Client([
            'base_uri' => 'https://api.example.com',
            'timeout'  => 2.0,
        ]);
    }

    public function getData($endpoint) {
        $response = $this->client->request('GET', $endpoint);
        return json_decode($response->getBody()->getContents(), true);
    }
}
