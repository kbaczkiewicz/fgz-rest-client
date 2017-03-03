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
    public function setName($name)
    {
        $this->postData['api_card[name]'] = $name;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->postData['api_card[address]'] = $address;
    }

    public function setCategory($categoryId)
    {
        $this->postData['api_card[category]'] = $categoryId;
    }

    /**
     * @param int $city
     */
    public function setCity($city)
    {
        $this->postData['api_card[city]'] = $city;
    }

    /**
     * @param int $city
     */
    public function setPhone($phone)
    {
        $this->postData['api_card[phone]'] = $phone;
    }

    /**
     * @param string $postal
     */
    public function setPostal($postal)
    {
        $this->postData['api_card[postal]'] = $postal;
    }

    /**
     * @param string $nip
     */
    public function setNip($nip)
    {
        $this->postData['api_card[nip]'] = $nip;
    }

    public function setOldId($id)
    {
        $this->postData['api_card[oldId]'] = $id;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->postData['api_card[editions][0][year]'] = $year;
    }

    /**
     * @param bool $isGold
     */
    public function setIsGold($isGold)
    {
        $this->postData['api_card[editions][0][isGold]'] = $isGold;
    }

    public function getRoute()
    {
        return $this->route;
    }
}
