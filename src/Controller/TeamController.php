<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeamController extends Controller
{
    /**
     * @Route("/team", name="team")
     */
    public function team()
    {
        return $this->render('Content/team.html.twig', [
            'controller_name' => 'GameController',
        ]);
    }
}
