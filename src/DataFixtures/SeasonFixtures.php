<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture
{
    private const SEASON = [
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 1,
            'year' => 2007,
            'description' => "Saison 1",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 2,
            'year' => 2008,
            'description' => "Saison 2",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 3,
            'year' => 2009,
            'description' => "Saison 3",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 4,
            'year' => 2010,
            'description' => "Saison 4",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 5,
            'year' => 2011,
            'description' => "Saison 5",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 6,
            'year' => 2012,
            'description' => "Saison 6",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 7,
            'year' => 2013,
            'description' => "Saison 7",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 8,
            'year' => 2014,
            'description' => "Saison 8",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 9,
            'year' => 2015,
            'description' => "Saison 9",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 10,
            'year' => 2016,
            'description' => "Saison 10",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 11,
            'year' => 2017,
            'description' => "Saison 11",
        ],
        [
            'seriesName' => "The Big Bang Theory",
            'number' => 12,
            'year' => 2018,
            'description' => "Saison 12",
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::SEASON as $key => $season) {  
            
            $program = $manager
                ->getRepository(Program::class)
                ->findOneBy(array('title' => $season['seriesName']))
            ;
            $seasonClass = new Season();  
            $seasonClass->setNumber($season['number']);
            $seasonClass->setYear($season['year']);
            $seasonClass->setDescription($season['description']);
            $seasonClass->setProgramId($program);
    
            $manager->persist($seasonClass);
    
        }  
    
        $manager->flush();
    }
}
