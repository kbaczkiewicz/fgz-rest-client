<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 20.02.2017
 * Time: 13:18
 */

namespace Celtic\FGZRestClient\Response;


class ChangeCardEditionsResponse
{
    private $msg;
    public function __construct($data)
    {
        $this->msg = $data->msg;
    }
}