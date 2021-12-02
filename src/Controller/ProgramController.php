<?php

namespace App\Controller;

use App\Entity\Episode;
use App\Entity\Program;
use App\Entity\Season;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**

 * @Route("/program", name="program_")

 */
class ProgramController extends AbstractController

{
    /**

     * Show all rows from Program’s entity

     *

     * @Route("/", name="index")

     * @return Response A response instance

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

     * @Route("/{id<^[0-9]+$>}", name="show")

     * @return Response

     */
    public function show( Program $program): Response
    {
        $programSeasons = $this->getDoctrine()
            ->getRepository(Season::class)
            ->findBy(
                ['program_id' => $program->getId()],
            );
        return $this->render('program/show.html.twig', [
                'program' => $program,
                'programSeasons' => $programSeasons
            ]
        );
    }

    /**
     * @Route("/{programId}/season/{id<^[0-9]+$>}", name="show_season_show")
     */
    public function season(Season $season): Response
    {
        $program = $season->getProgramId();

        if (!$program) {
            throw $this->createNotFoundException(
                'No program link with this id : ' . $season->getId() . 'found in season\'s table.'
            );
        }
        $seasonEpisodes = $this->getDoctrine()
            ->getRepository(Episode::class)
            ->findBy(
                ['season' => $season],
            );
        return $this->render('season/show.html.twig', [
            'seasonEpisodes' => $seasonEpisodes,
            'season' => $season,
            'program' => $program
        ]);
    }
    /**
     * @Route("/{programId}/season/{seasonId}/episode/{id<^[0-9]+$>}", name="show_season_show_episode_show")
     */
    public function episode(Episode $episode): Response
    {
        $season = $episode->getSeason();
        $program = $season->getProgramId();
        return $this->render('episode/show.html.twig', [
            'episode' => $episode,
            'season' => $season,
            'program' => $program
        ]);
    }
}