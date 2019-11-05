<?php


namespace App\Services;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class PythonService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => Config::get('app.ip') . ':5000',
            'headers'  => [
                'Content-Type' => 'application/json',
                'Accept'       => 'application/json'
            ]
        ]);
    }

    /**
     * @param $method
     * @return mixed
     */
    public function sendRequest($method)
    {
        try {
            $request = new Request($method, $this->url);
            $response = $this->client->send($request, [RequestOptions::JSON => $this->data]);
            $body = (string)$response->getBody();
            return json_decode($body);
        } catch (GuzzleException $exception) {
            Log::error($exception->getMessage());
            return abort(500);
        }
    }

}
