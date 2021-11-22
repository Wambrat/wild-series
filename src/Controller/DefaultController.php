<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**

     * @Route("/", name="default_index")

     */
    public function index(): Response
    {
        return $this->render('homepage.html.twig', [
                'title' => 'Bienvenue !'
            ]
        );
    }
}