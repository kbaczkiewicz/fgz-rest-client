<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 22.02.2017
 * Time: 12:44
 */

namespace KBatch\FGZRestClient\Request;


class GetCityRequest extends AbstractRequest
{

    public function __construct($method = 'GET')
    {
        $this->method = $method;
        $this->route = 'api/city/autocomplete';
    }
    public function setMatch($match)
    {
        $this->getData['str'] = $match;
    }

    public function setVoivodeship($voivodeshipId)
    {
        $this->getData['voivodeship'] = $voivodeshipId;
    }
}