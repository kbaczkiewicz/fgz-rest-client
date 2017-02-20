<?php
/**
 * Created by PhpStorm.
 * User: celtic
 * Date: 17.02.2017
 * Time: 09:56
 */

namespace Celtic\FGZRestClient\Request;


interface RequestInterface
{
    public function setAuthenticationHeader($token);
}