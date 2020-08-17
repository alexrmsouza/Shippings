<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Component\HttpClient\Response\CurlResponse;

class HubController
{
    /**
     * @var CurlHttpClient $client
     */
    private $client;

    public function __construct()
    {
        $this->client = new CurlHttpClient();
    }


    public function index(): JsonResponse
    {
        $response = $this->client->request("GET", "https://webhook.site/a9b520bd-7356-469f-9a8c-c650baa64686");

        return new JsonResponse(json_decode($response->getContent()), 200);
    }
}
