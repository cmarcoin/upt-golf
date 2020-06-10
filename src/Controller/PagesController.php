<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * Page d'accueil site upt golf
     * 
     * @Route("/", name="homepage")
     *
     * @return void
     */
    public function home()
    {
        return $this->render("/home.html.twig");
    }
}
