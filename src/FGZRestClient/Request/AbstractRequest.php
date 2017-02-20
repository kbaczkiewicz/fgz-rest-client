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

    public function setAuthenticationHeader($token)
    {
        $this->headers['Authorization'] = $token;
    }
}