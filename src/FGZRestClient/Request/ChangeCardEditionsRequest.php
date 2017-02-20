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
     * @return mixed
     */
    public function getPostData()
    {
        return $this->postData;
    }

    public function setEdition(string $year)
    {
        $this->postData['editions[year]'] = $year ;
    }

    public function setIsGold(bool $isGold)
    {
        $this->postData['editions[isGold]'] = $isGold;
    }

}
