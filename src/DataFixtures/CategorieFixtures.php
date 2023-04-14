<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    const PREAMBULE = "Préambule";
    const ANALYSE = "Analyse Préalable";
    const CLIENTS = "Facturation Client";
    const FOURNISSEURS ="Facturation Fournisseurs";
    const PROJET = "Le Projet";
    public function load(ObjectManager $manager): void
    {
        $categorie = new Categorie();
        $categorie->setNom("Préambule");
        $manager->persist($categorie);
        $this->addReference(self::PREAMBULE, $categorie);

        $categorie = new Categorie();
        $categorie->setNom("Votre analyse préalable");
        $manager->persist($categorie);
        $this->addReference(self::ANALYSE, $categorie);

        $categorie = new Categorie();
        $categorie->setNom("Facturation clients");
        $manager->persist($categorie);
        $this->addReference(self::CLIENTS, $categorie);

        $categorie = new Categorie();
        $categorie->setNom("Facturation fournisseurs");
        $manager->persist($categorie);
        $this->addReference(self::FOURNISSEURS, $categorie);

        $categorie = new Categorie();
        $categorie->setNom("Le projet");
        $manager->persist($categorie);
        $this->addReference(self::PROJET, $categorie);

        $manager->flush();
    }
}
