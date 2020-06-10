<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController
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
        return new Response("Bienvenue sur le site de l'upt golf");
    }
}
