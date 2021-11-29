<?php

namespace App\Controller;

use App\Entity\Program;
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
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();
        return $this->render('program/index.html.twig', [
                'programs' => $programs
            ]
        );
    }

    /**

     * Getting a program by id

     *

     * @Route("/show/{id<^[0-9]+$>}", name="program_show")

     * @return Response

     */
    public function show($id): Response
    {
        $program = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findOneBy(['id' => $id]);

        if (!$program) {
            throw $this->createNotFoundException(
                'No program with id : '. $id . ' found in program\'s table.'
            );
        }
        return $this->render('program/show.html.twig', [
                'program' => $program
            ]
        );
    }

}