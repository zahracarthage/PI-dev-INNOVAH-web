<?php

namespace App\Entity;

use App\Repository\ActivitesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ActivitesRepository::class)
 */
class Activites
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $idact;

    /**
     * * @Assert\NotBlank
     * @ORM\Column(type="string", length=55, nullable=true)
     */
    private $nom;

    /**
     * * @Assert\NotBlank
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * * @Assert\NotBlank
     * @ORM\Column(type="string", length=55, nullable=true)
     */
    private $categorie;

    /**
     * * @Assert\NotBlank
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $image;

    /**
     *  @Assert\NotBlank
     * @Assert\Range(
     *      min = 5,
     *      max=100,
     *      minMessage = "Prix incorrecte ",
     * )
     * @ORM\Column(type="float")
     */
    private $prix;


    public function getIdact(): ?int
    {
        return $this->idact;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

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
}
