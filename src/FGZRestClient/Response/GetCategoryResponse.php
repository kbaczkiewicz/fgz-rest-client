<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 01.03.2017
 * Time: 09:30
 */

namespace KBatch\FGZRestClient\Response;


class GetCategoryResponse implements ResponseInterface
{
    private $categories;

    /**
     * GetCategoryResponse constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->categories = $data->categories;
    }

    /**
     * Returns array of stdclass objects(id and name)
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }


}