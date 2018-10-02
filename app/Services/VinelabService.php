<?php
namespace App\Services;

use Vinelab\Http\Client as HttpClient;

class VinelabService implements HttpClientServiceInterface
{
    public function getHttpClientInfo()
    {
        $response = HttpClient::get('http://example.org');

        // raw content
        $response->content();
    }
}