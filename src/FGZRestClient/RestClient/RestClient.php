<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 17.02.2017
 * Time: 10:11
 */

namespace KBatch\FGZRestClient\RestClient;

use KBatch\FGZRestClient\Request\RequestInterface;
use KBatch\FGZRestClient\Response\ResponseFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class RestClient
{

    private $client;
    private $apiKey;

    /**
     * RestClient constructor.
     * @param $baseUri
     * @param $apiKey
     */
    public function __construct($baseUri, $apiKey)
    {
        $this->client = new Client([
            'base_uri' => $baseUri
        ]);
        $this->apiKey = $apiKey;
    }

    /**
     * @param RequestInterface $request
     * @return mixed
     * @throws \Exception
     * Sends request of given type and returns response based on request type
     */
    public function sendRequest(RequestInterface $request)
    {
        $request->setAuthenticationHeader($this->apiKey);
        try {
            $res = $this->client->request($request->getMethod(), $request->getRoute(), [
                'query' => $request->getGetData(),
                'form_params' => $request->getPostData(),
                'headers' => $request->getHeaders(),
                'http_errors' => false
            ]);

            if ($res->getStatusCode() == 500)
                throw new \Exception('Internal Server Error. Route: ' . $request->getRoute());
            else if ($res->getStatusCode() > 206 || $res->getStatusCode() < 200)
                throw new \Exception('Code ' . $res->getStatusCode() . ': ' . \GuzzleHttp\json_decode($res->getBody()->getContents())->msg);

            $respContent = \GuzzleHttp\json_decode($res->getBody()->getContents());
            $resp = ResponseFactory::createResponse(get_class($request), $respContent);
            return $resp;
        } catch (RequestException $ex) {
            throw new \Exception('There was a problem while processing request. Route: ' . $request->getRoute());
        }
    }
}