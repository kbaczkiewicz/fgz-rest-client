<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 20.02.2017
 * Time: 11:21
 */

namespace KBatch\FGZRestClient\Request;


abstract class AbstractRequest implements RequestInterface
{
    protected $headers;
    protected $postData;
    protected $getData;
    protected $route;
    protected $method;

    public function setAuthenticationHeader($token)
    {
        $this->headers['Authorization'] = $token;
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param mixed $headers
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * @return mixed
     */
    public function getPostData()
    {
        return $this->postData;
    }

    /**
     * @param mixed $postData
     */
    public function setPostData($postData)
    {
        $this->postData = $postData;
    }

    /**
     * @return mixed
     */
    public function getGetData()
    {
        return $this->getData;
    }

    /**
     * @param mixed $getData
     */
    public function setGetData($getData)
    {
        $this->getData = $getData;
    }


}