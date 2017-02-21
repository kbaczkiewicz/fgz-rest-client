<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 17.02.2017
 * Time: 15:28
 */

namespace KBatch\FGZRestClient\Request;

class ChangeCardEditionsRequest extends AbstractRequest
{

    private $id;

    public function __construct($id, $method = 'POST')
    {
        $this->method = $method;
        $this->id = $id;
        $this->route = 'api/cards/'.$id.'/editions';
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setEdition(string $year)
    {
        $this->postData['editions[year]'] = $year;
    }

    public function setIsGold(bool $isGold)
    {
        $this->postData['editions[isGold]'] = $isGold;
    }

}
