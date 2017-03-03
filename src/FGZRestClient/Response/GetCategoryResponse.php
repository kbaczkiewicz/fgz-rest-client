<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 01.03.2017
 * Time: 09:30
 */

namespace KBatch\FGZRestClient\Response;


use KBatch\FGZRestClient\Model\Category;

class GetCategoryResponse implements ResponseInterface
{
    private $categories;

    /**
     * GetCategoryResponse constructor.
     * @param $data
     * @return array of Category class objects
     */
    public function __construct($data)
    {
        $this->categories = [];
        foreach($data->categories as $c) {
            $this->categories[] = new Category($c->id, $c->name);
        }
        return $this->categories;
    }

    /**
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }



}