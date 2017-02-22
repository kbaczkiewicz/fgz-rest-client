<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 22.02.2017
 * Time: 12:57
 */

namespace KBatch\FGZRestClient\Response;


class GetVoivodeshipResponse implements ResponseInterface 
{
    private $voivodeships;
    private $message;

    public function __construct($data)
    {
        $this->voivodeships = $data->voivodeships;
        $this->message = $data->message;
    }

    /**
     * @return mixed
     */
    public function getVoivodeships()
    {
        return $this->voivodeships;
    }

    /**
     * @param mixed $voivodeships
     */
    public function setVoivodeships($voivodeships)
    {
        $this->voivodeships = $voivodeships;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}