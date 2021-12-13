<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    private const ACTOR = [
        [
            'name' =>"Kaley Cuoco",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Jim Parsons",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Mayim Bialik",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Melissa Rauch",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Johny Galecki",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Simon Helberg",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Kunal Nayyar",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Aati Mann",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Margo Harshman",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Lauren Lapkus",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Will Wheaton",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Laura Spencer",
            'programTitle' => "The Big Bang Theory",
        ],
        [
            'name' =>"Kevin Sussman",
            'programTitle' => "The Big Bang Theory",
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::ACTOR as $key => $actor) {  
            $program = $manager->getRepository(Program::class)
                ->findOneBy(array("title" => $actor['programTitle']));  
            $actorManager = new Actor();
            $actorManager->setName($actor['name']);
            $actorManager->addProgram($program);
            $manager->persist($actorManager);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            ProgramFixtures::class,
            SeasonFixtures::class,
            EpisodeFixtures::class
        ];
    }
}
