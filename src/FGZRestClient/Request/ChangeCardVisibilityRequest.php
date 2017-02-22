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

    public function setVisibility($visibility)
    {
        $this->postData['change_visibility[visible]'] = $visibility;
    }

}
