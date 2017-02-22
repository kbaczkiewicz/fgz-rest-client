<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 22.02.2017
 * Time: 12:47
 */

namespace KBatch\FGZRestClient\Response;


class GetCityResponse
{
    private $cities;
    private $message;

    public function __construct($data)
    {
        $this->cities = $data->cities ? $data->cities : "No matches";
        $this->message = $data->message;
    }

    /**
     * @return mixed
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param mixed $cities
     */
    public function setCities($cities)
    {
        $this->cities = $cities;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}