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
    const HTTP_ERROR = 500;
    const ALLOWED_CODES = array(200, 201, 202);

    /** * @var Client Client */
    private $client;
    /** @var string apiKey */
    private $apiKey;

    /**
     * RestClient constructor.
     * @param string $baseUri
     * @param string $apiKey
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

            if (!in_array($res->getStatusCode(), self::ALLOWED_CODES)) {
                if ($res->getStatusCode() == self::HTTP_ERROR)
                    throw new \Exception('Internal Server Error. Route: ' . $request->getRoute());
                else {
                    throw new \Exception('!ERROR! HTTP code: ' . $res->getStatusCode() . ', route: ' . $request->getRoute());
                }
            }
            $respContent = \GuzzleHttp\json_decode($res->getBody()->getContents());
            $resp = ResponseFactory::createResponse(get_class($request), $respContent);
            return $resp;
        } catch (RequestException $ex) {
            throw new \Exception('There was a problem while processing request. Route: ' . $request->getRoute());
        }
    }
}