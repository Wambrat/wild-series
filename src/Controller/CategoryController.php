<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Program;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
