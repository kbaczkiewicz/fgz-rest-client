<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 01.03.2017
 * Time: 10:58
 */

namespace KBatch\FGZRestClient\Model;


class City
{
    /** @var  int ID of city */
    private $id;
    /** @var  string Name of city */
    private $city;

    public function __construct($id, $city)
    {
        $this->id = $id;
        $this->city = $city;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }



}