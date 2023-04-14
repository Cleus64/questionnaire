<?php

namespace App\DataFixtures;

use App\Entity\Questions;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class QuestionsFixtures extends Fixture implements DependentFixtureInterface
{
    const QUESTION_1 = 'question-1';
    const QUESTION_2 = 'question-2';
    const QUESTION_3 = 'question-3';
    const QUESTION_4 = 'question-4';
    const QUESTION_5 = 'question-5';
    const QUESTION_6 = 'question-6';
    const QUESTION_7 = 'question-7';
    const QUESTION_8 = 'question-8';
    const QUESTION_9 = 'question-9';
    const QUESTION_10 = 'question-10';
    const QUESTION_11 = 'question-11';
    const QUESTION_12 = 'question-12';
    const QUESTION_13 = 'question-13';
    const QUESTION_14 = 'question-14';
    const QUESTION_15 = 'question-15';
    const QUESTION_16 = 'question-16';
    const QUESTION_17 = 'question-17';
    const QUESTION_18 = 'question-18';
    const QUESTION_19 = 'question-19';
    const QUESTION_20 = 'question-20';
    const QUESTION_21 = 'question-21';
    const QUESTION_22 = 'question-22';
    const QUESTION_23 = 'question-23';
    const QUESTION_24 = 'question-24';
    const QUESTION_25 = 'question-25';
    const QUESTION_26 = 'question-26';
    const QUESTION_27 = 'question-27';
    const QUESTION_28 = 'question-28';
    const QUESTION_29 = 'question-29';
    const QUESTION_30 = 'question-30';
    const QUESTION_31 = 'question-31';
    const QUESTION_32 = 'question-32';
    const QUESTION_33 = 'question-33';
    const QUESTION_34 = 'question-34';
    const QUESTION_35 = 'question-35';
    const QUESTION_36 = 'question-36';
    const QUESTION_37 = 'question-37';
    const QUESTION_38 = 'question-38';
    const QUESTION_39 = 'question-39';
    const QUESTION_40 = 'question-40';
    const QUESTION_41 = 'question-41';
    const QUESTION_42 = 'question-42';
    const QUESTION_43 = 'question-43';
    const QUESTION_44 = 'question-44';
    const QUESTION_45 = 'question-45';
    const QUESTION_46 = 'question-46';
    const QUESTION_47 = 'question-47';
    const QUESTION_48 = 'question-48';
    const QUESTION_49 = 'question-49';
    const QUESTION_50 = 'question-50';
 
    public function load(ObjectManager $manager): void
    {
        $question = new Questions();
        $question->setIntitule('Connaissez-vous le calendrier d\'application des mesures de dématérialisation ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::PREAMBULE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_1, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous déjà engagé une démarche pour l\'échéance de juin 2024 ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::PREAMBULE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_2, $question);

        $question = new Questions();
        $question->setIntitule('Etes-vous confiant en votre capacité à assurer cette transition ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::PREAMBULE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_3, $question);

        $question = new Questions();
        $question->setIntitule('Etes-vous accompagné pour cette transformation ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::PREAMBULE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_4, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous les ressources internes pour mener à bien les chantiers de transformation ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::PREAMBULE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_5, $question);

        $question = new Questions();
        $question->setIntitule('Comprenez-vous la différence entre PPF, OD, PDP ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::PREAMBULE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_6, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous déjà procédé à une circularisation de vos clients et fournisseurs ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::PREAMBULE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_7, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous un expert-comptable ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::PREAMBULE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_8, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous connaissance des différentes alternatives disponibles ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::ANALYSE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_9, $question);

        $question = new Questions();
        $question->setIntitule('Etes-vous prêts à vous faire accompagner par un cabinet pour la mise en place du process ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::ANALYSE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_10, $question);

        $question = new Questions();
        $question->setIntitule('Etes-vous confiants dans votre éditeur de logiciel de gestion pour mener à bien cette mise en place ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::ANALYSE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_11, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous une idée des travaux préparatoires à effectuer avant cette date ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::ANALYSE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_12, $question);

        $question = new Questions();
        $question->setIntitule('Etes-vous certain que vos factures présentent les mentions légales obligatoires ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::ANALYSE));
        $manager->persist($question);
        $this->addReference(self::QUESTION_13, $question);

        $question = new Questions();
        $question->setIntitule('Quel logiciel de facturation utilisez-vous ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE3));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_14, $question);

        $question = new Questions();
        $question->setIntitule('Quel logiciel de comptabilité utilisez-vous ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE3));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_15, $question);

        $question = new Questions();
        $question->setIntitule('Emettez-vous des factures en B2B ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_16, $question);

        $question = new Questions();
        $question->setIntitule('Emettez-vous des factures en B2C ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_17, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous un logiciel de caisse ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_18, $question);

        $question = new Questions();
        $question->setIntitule('Etes-vous soumis à la TVA sur les encaissements ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_19, $question);

        $question = new Questions();
        $question->setIntitule('Etes-vous soumis à la déclaration de prorata de TVA, de TVA sur marge ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_20, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous mis en place un mécanisme de calcul de l\'auto-liquidation de TVA ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_21, $question);

        $question = new Questions();
        $question->setIntitule('Facturez-vous (hors de France) en Europe ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_22, $question);

        $question = new Questions();
        $question->setIntitule('Facturez-vous (hors de France) à l\'international ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_23, $question);

        $question = new Questions();
        $question->setIntitule('Emettez-vous des factures en mandat de facturation ? (pour le compte de …)');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_24, $question);

        $question = new Questions();
        $question->setIntitule('Faites vous appel à un factor ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_25, $question);

        $question = new Questions();
        $question->setIntitule('L\'intégralité de votre base clients dispose-t-elle du SIRET ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_26, $question);

        $question = new Questions();
        $question->setIntitule('L\'intégralité de votre base clients dispose-t-elle d\'un numero de TVA intracommunautaire ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_27, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous une base de données d\'articles vendus (produits / services) ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_28, $question);

        $question = new Questions();
        $question->setIntitule('Vous arrive-t-il de réémettre des factures (avec le même numéro) suite à un rejet du client / ou une erreur interne ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::CLIENTS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_29, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous mis en place une base fournisseurs ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_30, $question);

        $question = new Questions();
        $question->setIntitule('L\'intégralité de votre base fournisseurs dispose-t-elle du SIRET ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_31, $question);

        $question = new Questions();
        $question->setIntitule('L\'intégralité de votre base fournisseurs dispose-t-elle d\'un numero de TVA intracommunautaire ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_32, $question);

        $question = new Questions();
        $question->setIntitule('Gérez-vous une base de contrats fournisseurs ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_33, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous mis en place un circuit de gestion des commandes fournisseurs ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_34, $question);

        $question = new Questions();
        $question->setIntitule('Etes-vous amenés à payer des acomptes fournisseurs ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_35, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous un processus de validation des factures fournisseur ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_36, $question);

        $question = new Questions();
        $question->setIntitule('Etes-vous équipé d\'un outil de numérisation des factures (type OCR) ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_37, $question);

        $question = new Questions();
        $question->setIntitule('Qui gère les règlements ? (En interne / l\'expert comptable)');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE2));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_38, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous un processus de remboursement des Notes de Frais ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_39, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous mis en place des délais de règlements fournisseurs ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::FOURNISSEURS));
        $manager->persist($question);
        $this->addReference(self::QUESTION_40, $question);

        $question = new Questions();
        $question->setIntitule('A quelle échéance pensez-vous traiter cette obligation règlementaire ? (Q2, Q3, Q4)');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE2));
        $question->setCategorie($this->getReference(CategorieFixtures::PROJET));
        $manager->persist($question);
        $this->addReference(self::QUESTION_41, $question);

        $question = new Questions();
        $question->setIntitule('Quelle durée pensez-vous nécessaire à la réalisation de ce projet ? (1, 2, 3, 6 mois)');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE2));
        $question->setCategorie($this->getReference(CategorieFixtures::PROJET));
        $manager->persist($question);
        $this->addReference(self::QUESTION_42, $question);

        $question = new Questions();
        $question->setIntitule('Avez-vous une idée du budget à allouer à ce projet ?');
        $question->setQuiz($this->getReference(QuizFixtures::QUIZ1));
        $question->setType($this->getReference(TypeFixtures::TYPE1));
        $question->setCategorie($this->getReference(CategorieFixtures::PROJET));
        $manager->persist($question);
        $this->addReference(self::QUESTION_43, $question);

        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [
            QuizFixtures::class,
        ];
    }
}
