<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 22.02.2017
 * Time: 12:56
 */

namespace KBatch\FGZRestClient\Request;


class GetVoivodeshipRequest extends AbstractRequest
{
    public function __construct($method = 'GET')
    {
        $this->method = $method;
        $this->route = 'api/voivodeships';
    }
}