<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    /**
     * 
     * Liste des utilisateurs
     * 
     * @Route("/admin/users_list", name="usersList")
     * 
     * @return void
     */

    public function usersList()
    {

        $usersRepo = $this->getDoctrine()->getRepository(User::class);
        $users = $usersRepo->findAll();

        return $this->render("admin/users_list.html.twig", array('users' => $users));
    }
}
