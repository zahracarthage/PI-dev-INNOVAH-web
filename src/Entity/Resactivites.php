<?php

namespace App\Entity;

use App\Repository\ResactivitesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ResactivitesRepository::class)
 */
class Resactivites
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $idresactivites;

    /**
     *  @Assert\NotBlank
     * @ORM\Column(type="date")
     */
    private $date;

  

    /**

     * @Assert\Range(
     *      min=2,
     *      max=20,
     *      minMessage="vous avez dépasser le nombre max de personnes ",
     * )
     *  @Assert\NotBlank
     * @ORM\Column(type="integer")
     */
    private $nbpersonnes;

    /**
     * @ORM\ManyToOne(targetEntity=Activites::class)
     * @ORM\JoinColumn(name="ida", referencedColumnName="idact", nullable=false, onDelete="CASCADE")
     */
    private $ida;

    public function getidresactivites(): ?int
    {
        return $this->idresactivites;
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

    public function getIdact(): ?Activites
    {
        return $this->idact;
    }

    public function setIdact(?Activites $idact): self
    {
        $this->idact = $idact;

        return $this;
    }

    public function getNbpersonnes(): ?int
    {
        return $this->nbpersonnes;
    }

    public function setNbpersonnes(int $nbpersonnes): self
    {
        $this->nbpersonnes = $nbpersonnes;

        return $this;
    }

    public function getIda(): ?Activites
    {
        return $this->ida;
    }

    public function setIda(?Activites $ida): self
    {
        $this->ida = $ida;

        return $this;
    }
}
