<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function home(PostRepository $postRepository)
    {
        $post = $postRepository->LastPost();

        return $this->render('Content/home.html.twig', [
            'post' => $post
        ]);
    }
}

