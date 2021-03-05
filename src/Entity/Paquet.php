<?php

namespace App\Entity;

use App\Repository\PaquetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaquetRepository::class)
 */
class Paquet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idpaquet;

    /**
     * @ORM\Column(type="string", length=55, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="object")
     */
    private $activites;

    public function getidpaquet(): ?int
    {
        return $this->idpaquet;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getActivites()
    {
        return $this->activites;
    }

    public function setActivites($activites): self
    {
        $this->activites = $activites;

        return $this;
    }
}
