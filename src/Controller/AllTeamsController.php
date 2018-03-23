<?php

namespace App\Controller;

use App\Entity\Game;
use App\Repository\GameRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AllTeamsController extends Controller
{
    /**
     * @Route("/all-teams", name="all-teams")
     */
    public function allTeams()
    {
        return $this->render('Content/allTeams.html.twig', [
            'controller_name' => 'AllTeamsController',
        ]);
    }
}
