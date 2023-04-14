<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TypeFixtures extends Fixture
{
    const TYPE1="bool";
    const TYPE2="multiple";
    const TYPE3="text";
    public function load(ObjectManager $manager): void
    {
        $type = new Type();
        $type->setType('bool');
        $manager->persist($type);
        $this->addReference(self::TYPE1, $type);

        $type = new Type();
        $type->setType('multiple');
        $manager->persist($type);
        $this->addReference(self::TYPE2, $type);

        $type = new Type();
        $type->setType('text');
        $manager->persist($type);
        $this->addReference(self::TYPE3, $type);

        $manager->flush();
    }
}
