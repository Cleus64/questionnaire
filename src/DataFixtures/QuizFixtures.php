<?php

namespace App\DataFixtures;

use App\Entity\Quiz;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class QuizFixtures extends Fixture
{
    //instance pour utiliser dans d'autres fixtures
    const QUIZ1 = 'quiz-1';

    public function load(ObjectManager $manager): void
    {
        $quiz = new Quiz();
        $quiz->setNom("Questionnaire maturité");
        $manager->persist($quiz);
        $this->addReference(self::QUIZ1, $quiz);

        $manager->flush();
    }
}
