<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 22.02.2017
 * Time: 12:47
 */

namespace KBatch\FGZRestClient\Response;


use KBatch\FGZRestClient\Model\City;

class GetCityResponse
{
    /** @var array */
    private $cities;

    /**
     * GetCityResponse constructor.
     * @param array $data
     * @return array of City class objects
     */
    public function __construct($data)
    {
        $this->cities = [];
        foreach ($data->cities as $c) {
            $this->cities[] = new City($c->id, $c->name);
        }
        return $this->cities;
    }

    /**
     * @return array
     */
    public function getCities()
    {
        return $this->cities;
    }



}