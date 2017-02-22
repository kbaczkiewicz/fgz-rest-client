<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 22.02.2017
 * Time: 12:57
 */

namespace KBatch\FGZRestClient\Response;


class GetVoivodeshipResponse
{
    private $voivodeships;
    private $message;

    public function __construct($data)
    {
        $this->voivodeships = $data->voivodeships;
        $this->message = $data->message;
    }
}