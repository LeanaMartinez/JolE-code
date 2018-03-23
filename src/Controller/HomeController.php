<?php

namespace App\Controller;

use App\Repository\MatchRepository;
use App\Repository\PostRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homePost(PostRepository $postRepository, MatchRepository $matchRepository)
    {
        $post = $postRepository->LastPost();
        $match = $matchRepository->LastMatch();

        return $this->render('Content/home.html.twig', [
            'post' => $post,
            'match' => $match
        ]);
    }
}

