<?php

namespace App\Http\Controllers\pagseguro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\pagseguro;

class index extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', pagseguro::getUrlSessions(). "?" .http_build_query(pagseguro::getAuthentication()));

        echo $response->getStatusCode(); # 200
        echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
        echo $response->getBody()->getContents(); # '{"id": 1420053, "name": "guzzle", ...}'

        # Send an asynchronous request.
        $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo 'I completed! ' . $response->getBody();
        });

        $promise->wait();
    }
}
