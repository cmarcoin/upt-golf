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
     * @Route("/", name="homepage", methods={"GET"})
     *
     * @return void
     */
    public function home()
    {
        return $this->render("/home.html.twig");
    }

    /**
     * Liste des parties à venir
     * 
     * @Route("/games", name="games", methods={"GET"})
     *  
     * @return void
     */
    public function games()
    {
        $gamesList = ["Partie 1", "Partie 2", "Partie 3"];

        return $this->render("games.html.twig", ['gamesList' => $gamesList]);
    }
}
