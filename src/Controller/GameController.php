<?php

namespace App\Controller;

use App\Entity\Game;
use App\Repository\GameRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    /**
     * @Route("/game", name="game")
     */
    public function index()
    {
        return $this->render('Content/game.html.twig', [
            'controller_name' => 'GameController',
        ]);
    }

    /**
     * @Route("/game/{game_slug}", name="game_name")
     */
    public function gameSheet(GameRepository $gameRepository, $game_slug)
    {
        $game = $gameRepository->findOneBy(array('slug' => $game_slug));

        if (!$game instanceof Game) {
            throw $this->createNotFoundException('');
        }

        return $this->render('Content/game.html.twig', [
            'game'=>$game,
        ]);
    }
}
