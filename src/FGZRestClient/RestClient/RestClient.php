<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 17.02.2017
 * Time: 10:11
 */

namespace celtic\FGZRestClient\RestClient;

use celtic\FGZRestClient\Request\RequestInterface;
use celtic\FGZRestClient\Response\ResponseFactory;
use GuzzleHttp\Client;

class RestClient
{

    private $client;
    private $apiKey;

    public function __construct($baseUri, $apiKey)
    {
        $this->client = new Client([
            'base_uri' => $baseUri
        ]);
        $this->apiKey = $apiKey;
    }

    public function sendRequest($route, RequestInterface $request)
    {
        $request->setAuthenticationHeader($this->apiKey);
        $res = $this->client->request('POST', $route,  [
            'query' => $request->getGetData(),
            'form_params' => $request->getPostData(),
            'headers' => $request->getHeaders(),
            'http_errors' => false
        ]);

        if ($res->getStatusCode() == 500)
            throw new \Exception('Internal Server Error on creating a user');
        else if ($res->getStatusCode() > 206 || $res->getStatusCode() < 200)
            throw new \Exception('Code '.$res->getStatusCode() . ': '.$res->getBody());

        $respContent = \GuzzleHttp\json_decode($res->getBody()->getContents());
        $resp = ResponseFactory::createResponse(get_class($request), $respContent);
        return $resp;
    }
}