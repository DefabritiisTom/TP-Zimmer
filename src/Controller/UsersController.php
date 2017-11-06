<?php
/**
 * Created by PhpStorm.
 * User: tom.defabritiis
 * Date: 06/11/17
 * Time: 16:20
 */

Class UsersController
{
    function create()
    {
        $user = new Users();
        $user->setLogin("defab");
    }
}