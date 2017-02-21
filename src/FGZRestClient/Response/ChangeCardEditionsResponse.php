<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 20.02.2017
 * Time: 13:18
 */

namespace KBatch\FGZRestClient\Response;


class ChangeCardEditionsResponse
{
    private $msg;

    /**
     * ChangeCardEditionsResponse constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->msg = $data->msg;
    }
}