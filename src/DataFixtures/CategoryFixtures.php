<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    private const CATEGORIES = [
        "Action",
        "Adventure",
        "Comedy",
        "Crime and Mystery",
        "Fantasy",
        "Historical",
        "Horror",
        "Romance",
        "Satire",
        "Science Fiction",
        "Speculative",
        "Thriller",
        "Western",
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::CATEGORIES as $key => $categoryName) {  
            $slugify = new Slugify();

            $category = new Category();  
    
            $category->setName($categoryName);
            
            $category->setSlug($slugify->generate($categoryName));
    
            $manager->persist($category);  
    
        }  
    
        $manager->flush();
    }
}
