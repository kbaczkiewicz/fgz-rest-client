<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 20.02.2017
 * Time: 11:51
 */

namespace Celtic\FGZRestClient\Response;


class ResponseFactory
{
    public static function createResponse($requestType, $data)
    {
        $respClass = str_replace('Request', 'Response', $requestType);
        return new $respClass($data);
    }
}