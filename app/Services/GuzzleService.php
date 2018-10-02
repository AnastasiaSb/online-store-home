<?php
namespace App\Services;

class GuzzleService implements HttpClientServiceInterface
{
    public function getHttpClientInfo()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        echo $res->getStatusCode();
        // 200
                echo $res->getHeaderLine('content-type');
        // 'application/json; charset=utf8'
                echo $res->getBody();
        // '{"id": 1420053, "name": "guzzle", ...}'
    }
}