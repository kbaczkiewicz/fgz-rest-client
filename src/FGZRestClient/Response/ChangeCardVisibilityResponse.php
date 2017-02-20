<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 20.02.2017
 * Time: 12:40
 */

namespace KBatch\FGZRestClient\Response;


class ChangeCardVisibilityResponse
{
    private $msg;
    public function __construct($data)
    {
        $this->msg = $data->msg;
    }
}