<?php
/**
 * Created by PhpStorm.
 * User: tom.defabritiis
 * Date: 06/11/17
 * Time: 13:33
 */


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    function index()
    {
        return $this->render('Hello/Hello.html.twig');
    }
}