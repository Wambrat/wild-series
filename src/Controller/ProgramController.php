<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Episode;
use App\Entity\Program;
use App\Entity\Season;
use App\Form\ProgramType;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

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

     * The controller for the category add form

     *

     * @Route("/new", name="new")

     */

    public function new(Request $request) : Response

    {

        // Create a new Category Object

        $program = new Program();

        // Create the associated Form

        $form = $this->createForm(ProgramType::class, $program);

         // Get data from HTTP request

         $form->handleRequest($request);

         // Was the form submitted ?
 
         if ($form->isSubmitted()) {
            // Deal with the submitted data

            // Get the Entity Manager

            $entityManager = $this->getDoctrine()->getManager();

            // Persist Category Object


            $entityManager->persist($program);

            // Flush the persisted object

            $entityManager->flush();

            // Finally redirect to categories list

            return $this->redirectToRoute('program_index');
 
         }

        // Render the form
        
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll(); 

        return $this->render('program/new.html.twig', [

            "form" => $form->createView(),
            "categories" => $categories

        ]);

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
     * @ParamConverter("programId", class="App\Entity\Program", options={"mapping": {"programId": "id"}})
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
        return $this->render('program/seasonShow.html.twig', [
            'seasonEpisodes' => $seasonEpisodes,
            'season' => $season,
            'program' => $program
        ]);
    }
    /**
     * @Route("/{programId}/season/{seasonId}/episode/{id<^[0-9]+$>}", name="show_season_show_episode_show")
     * @ParamConverter("programId", class="App\Entity\Program", options={"mapping": {"programId": "id"}})
     * @ParamConverter("seasonId", class="App\Entity\Season", options={"mapping": {"seasonId": "id"}})
     */
    public function episode(Episode $episode): Response
    {
        $season = $episode->getSeason();
        $program = $season->getProgramId();
        return $this->render('program/episodeShow.html.twig', [
            'episode' => $episode,
            'season' => $season,
            'program' => $program
        ]);
    }
}