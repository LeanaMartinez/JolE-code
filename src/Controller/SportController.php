<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SportController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('Content/home.html.twig', [
            'controller_name' => 'SportController',
        ]);
    }

    /**
     * @Route("/team", name="team")
     */
    public function team()
    {
        return $this->render('Content/team.html.twig', [
            'controller_name' => 'SportController',
        ]);
    }

    /**
     * @Route("/game", name="game")
     */
    public function game()
    {
        return $this->render('Content/game.html.twig', [
            'controller_name' => 'SportController',
        ]);
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profile()
    {
        return $this->render('Content/profile.html.twig', [
            'controller_name' => 'SportController',
        ]);
    }
}

