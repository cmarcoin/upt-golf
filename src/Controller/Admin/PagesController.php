<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * Page d'accueil site upt golf
     * 
     * @Route("/admin/", name="adminHomepage")
     *
     * @return void
     */
    public function home()
    {
        return $this->render("admin/home.html.twig");
    }
}
