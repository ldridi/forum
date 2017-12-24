<?php
/**
 * Created by PhpStorm.
 * User: lotfidev
 * Date: 24/12/17
 * Time: 17:33
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class PagesController
{
    public function index(Environment $twig){
        return new Response($twig->render('base.html.twig'));
    }
}