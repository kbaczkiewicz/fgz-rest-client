<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 01.03.2017
 * Time: 09:28
 */

namespace KBatch\FGZRestClient\Request;


class GetCategoryRequest extends AbstractRequest
{
    protected $route = 'api/categories/autocomplete';

    private $match;

    public function __construct($method = 'GET')
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * String to match against
     * @param mixed $match
     */
    public function setMatch($match)
    {
        $this->getData['str'] = $match;
    }

}