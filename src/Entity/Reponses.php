<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReponsesRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ReponsesRepository::class)]
class Reponses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups('quiz')]
    private ?string $texte = null;


    #[ORM\ManyToOne(inversedBy: 'reponses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups('quiz')]
    private ?Questions $question = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }


    public function getQuestion(): ?Questions
    {
        return $this->question;
    }

    public function setQuestion(?Questions $question): self
    {
        $this->question = $question;

        return $this;
    }
}
