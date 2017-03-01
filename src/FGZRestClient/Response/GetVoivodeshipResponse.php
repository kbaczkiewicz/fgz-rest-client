<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 22.02.2017
 * Time: 12:57
 */

namespace KBatch\FGZRestClient\Response;


use KBatch\FGZRestClient\Model\Voivodeship;

class GetVoivodeshipResponse implements ResponseInterface
{
    private $voivodeships;

    /**
     * GetVoivodeshipResponse constructor.
     * @param $data
     * @return array of Voivodeship class objects
     */
    public function __construct($data)
    {
        $this->voivodeships = [];
        foreach($data->voivodeships as $v) {
            $this->voivodeships[] = new Voivodeship($v->id, $v->name);
        }
        return $this->voivodeships;
    }

    /**
     * @return array
     */
    public function getVoivodeships()
    {
        return $this->voivodeships;
    }




}