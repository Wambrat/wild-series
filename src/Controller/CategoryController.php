<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Program;
use App\Form\CategoryType;
use App\Service\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/category", name="category_")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */ 
    public function index(): Response
    {
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();
        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**

     * The controller for the category add form

     *

     * @Route("/new", name="new")

     */

    public function new(Request $request, Slugify $slugify) : Response

    {

        // Create a new Category Object

        $category = new Category();

        // Create the associated Form

        $form = $this->createForm(CategoryType::class, $category);

         // Get data from HTTP request

         $form->handleRequest($request);

         // Was the form submitted ?
 
         if ($form->isSubmitted() && $form->isValid()) {
            // slug 
            $slug = $slugify->generate($category->getName());
            $category->setSlug($slug);
            // Get the Entity Manager

            $entityManager = $this->getDoctrine()->getManager();

            // Persist Category Object

            $entityManager->persist($category);

            // Flush the persisted object

            $entityManager->flush();

            // Finally redirect to categories list

            return $this->redirectToRoute('category_index');
 
         }

        // Render the form

        return $this->render('category/new.html.twig', [

            "form" => $form->createView(),

        ]);

    }

    /**
     * @Route("/show/{id<^[0-9]+$>}", name="show")
     */
    
    public function show(int $id): Response
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(["id" => $id]);
        if (!$category) {
            throw $this->createNotFoundException(
                'No category with id : '. $id . ' found in category\'s table.'
            );
        }
        $categoryPrograms = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findBy([
                'category' => $category,
                ],
            );
        return $this->render('category/show.html.twig', [ 
            'categoryPrograms' => $categoryPrograms,
            'categoryName' => $category->getName(),
        ]);
    }

}
