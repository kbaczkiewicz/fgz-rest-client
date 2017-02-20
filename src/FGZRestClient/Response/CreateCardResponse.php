<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 20.02.2017
 * Time: 10:35
 */

namespace KBatch\FGZRestClient\Response;


class CreateCardResponse implements ResponseInterface
{
    private $id;
    private $username;
    private $password;

    public function __construct($data)
    {
        $this->id = $data->id;
        $this->username = $data->username;
        $this->password = $data->password;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }



}