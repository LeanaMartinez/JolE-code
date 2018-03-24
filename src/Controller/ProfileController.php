<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    /**
     * @Route("/profile", name="profile")
     */
    public function profile()
    {
        return $this->render('Content/profile.html.twig', [
            'controller_name' => 'GameController',
        ]);
    }

}