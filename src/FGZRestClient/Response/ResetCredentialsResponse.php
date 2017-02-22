<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 22.02.2017
 * Time: 10:20
 */

namespace KBatch\FGZRestClient\Response;


class ResetCredentialsResponse implements ResponseInterface
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
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


}