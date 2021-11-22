<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class ProgramController extends AbstractController

{
    /**

     * @Route("/program/", name="program_index")

     */
    public function index(): Response
    {
        return $this->render('program.html.twig', [
                'message' => 'Wild Series'
            ]
        );
    }

    /**
     * @Route("/program/{id}/", methods={"GET"}, requirements={"id"="\d+"}, name="program_show", )
     */
    public function show($id): Response
    {
        return $this->render('programShow.html.twig', [
                'message' => $id
            ]
        );
    }

}