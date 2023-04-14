<?php

namespace App\DataFixtures;

use App\Entity\Reponses;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ReponsesFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $reponse = new Reponses();
        $reponse->setTexte('yn');
        $reponse->setQuestion($this->getReference(QuestionsFixtures::QUESTION_1));
        $manager->persist($reponse);

        $manager->flush();
    }

    public function getDependencies() : array
    {
        return ([
            QuestionsFixtures::class,
        ]);
    }
}
