<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProgramFixture extends Fixture
{
    private const PROGRAM = [
        [
            'title' => "Walking Dead",
            'summary' => "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.",
            'poster' => "https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg",
            'year' => 2010,
            'country' => 'United-States'
        ],
        [
            'title' => "The Haunting Of Hill House",
            'summary' => "Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.",
            'poster' => "https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg",
            'year' => 2018,
            'country' => 'United-States'
        ],
        [
            'title' => "American Horror Story",
            'summary' => "A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.",
            'poster' => "https://m.media-amazon.com/images/M/MV5BODZlYzc2ODYtYmQyZS00ZTM4LTk4ZDQtMTMyZDdhMDgzZTU0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg",
            'year' => 2011,
            'country' => 'United-States'
        ],
        [
            'title' => "Love Death And Robots",
            'summary' => "Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.",
            'poster' => "https://m.media-amazon.com/images/M/MV5BMTc1MjIyNDI3Nl5BMl5BanBnXkFtZTgwMjQ1OTI0NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg",
            'year' => 2019,
            'country' => 'United-States'
        ],
        [
            'title' => "Penny Dreadful",
            'summary' => "Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles d Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables.  Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.",
            'poster' => "https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg",
            'year' => 2014,
            'country' => 'Ireland'
        ],
        [
            'title' => "Fear The Walking Dead",
            'summary' => "La série se déroule au tout début de l épidémie relatée dans la série-mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.",
            'poster' => "https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg",
            'year' => 2015,
            'country' => 'United-States'
        ]
    ];
    public function load(ObjectManager $manager): void
    {
        $category = $manager
            ->getRepository(Category::class)
            ->findOneBy(array('name' => 'Horror'))
        ;
        foreach (self::PROGRAM as $key => $program) {  
            
            $programClass = new Program();  
            $programClass->setTitle($program['title']);
            $programClass->setSynopsis($program['summary']);
            $programClass->setPoster($program['poster']);
            $programClass->setYear($program['year']);
            $programClass->setCountry($program['country']);
            $programClass->setCategory($category);
    
            $manager->persist($programClass);
    
        }  
    
        $manager->flush();
    }
}
