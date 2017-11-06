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
        $user->setNom("Defabritiis");
        $user->setPrenom("Tom");
        $user->setDiscord("BeeGrubz#8455");

        return $this->render('create/create.html.twig', ["nom"=> $user->getNom(), "prenom"=>$user->getPrenom()]);
    }
}