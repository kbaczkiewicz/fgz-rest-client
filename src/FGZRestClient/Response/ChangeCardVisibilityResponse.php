<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 20.02.2017
 * Time: 12:40
 */

namespace Celtic\FGZRestClient\Response;


class ChangeCardVisibilityResponse
{
    private $msg;
    public function __construct($data)
    {
        $this->msg = $data->msg;
    }
}