<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 20.02.2017
 * Time: 11:51
 */

namespace KBatch\FGZRestClient\Response;


class ResponseFactory
{
    /**
     * @param $requestType
     * @param $data
     * @return mixed
     * Creates response with type based on Response type
     */
    public static function createResponse($requestType, $data)
    {
        $respClass = str_replace('Request', 'Response', $requestType);
        return new $respClass($data);
    }
}