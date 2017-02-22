<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 22.02.2017
 * Time: 10:11
 */

namespace KBatch\FGZRestClient\Request;


class ResetCredentialsRequest extends AbstractRequest
{
    private $id;
    public function __construct($id, $method = 'POST')
    {
        $this->method = $method;
        $this->id = $id;
        $this->route = 'api/cards/'.$id.'/resetcredentials';
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


}