<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    /**
     * @Route("/game", name="blog")
     */
    public function postGame()
    {
        return $this->render('Content/game.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    /**
     * @Route("/team", name="blog")
     */
    public function postTeam()
    {
        return $this->render('Content/team.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}