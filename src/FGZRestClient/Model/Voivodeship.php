<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 01.03.2017
 * Time: 11:11
 */

namespace KBatch\FGZRestClient\Model;


class Voivodeship
{
    /** @var int ID of voivodeship  */
    private $id;
    /** @var string Name of voivodeship   */
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
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
    public function getName()
    {
        return $this->name;
    }



}