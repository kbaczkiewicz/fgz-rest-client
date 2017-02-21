<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 17.02.2017
 * Time: 15:28
 */

namespace KBatch\FGZRestClient\Request;

class ChangeCardVisibilityRequest extends AbstractRequest
{

    private $id;

    /**
     * ChangeCardVisibilityRequest constructor.
     * @param $id
     * @param string $method
     */
    public function __construct($id, $method = 'POST')
    {
        $this->method = $method;
        $this->id = $id;
        $this->route = 'api/cards/'.$id.'/visibilities';
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
     * @return mixed
     */
    public function getPostData()
    {
        return $this->postData;
    }

    public function setVisibility(string $visibility)
    {
        $this->postData['change_visibility[visible]'] = $visibility;
    }

}
