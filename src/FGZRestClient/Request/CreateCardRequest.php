<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 17.02.2017
 * Time: 15:28
 */

namespace KBatch\FGZRestClient\Request;

class CreateCardRequest extends AbstractRequest
{

    protected $route = 'api/cards';

    /**
     * CreateCardRequest constructor.
     * @param string $method
     */
    public function __construct($method = 'POST')
    {
        $this->method = $method;
    }


    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * @return array
     */
    public function getGetData()
    {
        return $this->getData;
    }

    /**
     * @param array $getData
     */
    public function setGetData($getData)
    {
        $this->getData = $getData;
    }

    /**
     * @return mixed
     */
    public function getPostData()
    {
        return $this->postData;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->postData['api_card[name]'] = $name;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->postData['api_card[address]'] = $address;

    }

    /**
     * @param int $city
     */
    public function setCity(int $city)
    {
        $this->postData['api_card[city]'] = $city;
    }

    /**
     * @param int $city
     */
    public function setPhone(string $phone)
    {
        $this->postData['api_card[phone]'] = $phone;
    }

    /**
     * @param string $postal
     */
    public function setPostal(string $postal)
    {
        $this->postData['api_card[postal]'] = $postal;
    }

    /**
     * @param string $nip
     */
    public function setNip(string $nip)
    {
        $this->postData['api_card[nip]'] = $nip;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year)
    {
        $this->postData['api_card[editions][0][year]'] = $year;
    }

    /**
     * @param bool $isGold
     */
    public function setIsGold(bool $isGold)
    {
        $this->postData['api_card[editions][0][isGold]'] = $isGold;
    }

    public function getRoute()
    {
        return $this->route;
    }
}
