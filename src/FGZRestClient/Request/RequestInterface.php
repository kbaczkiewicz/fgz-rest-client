<?php
/**
 * Created by PhpStorm.
 * User: KBatch
 * Date: 17.02.2017
 * Time: 09:56
 */

namespace KBatch\FGZRestClient\Request;


interface RequestInterface
{
    public function setAuthenticationHeader($token);
}