<?php

namespace App\Entity;

use App\Repository\ResmaisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ResmaisonRepository::class)
 */
class Resmaison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="date")
     * @Assert\GreaterThan("Today",message="Saisir la date à partir de la date d'aujourd'hui")
     */
    private $dateentre;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="date")
     * @Assert\Expression("this.getDateentre() < this.getDatesortie()", message="Veuillez vérifier la date")
     */
    private $datesortie;

    /**
     * @ORM\ManyToOne(targetEntity=Maisonhote::class)
     * @ORM\JoinColumn(nullable=false)
     * @ORM\JoinColumn(name="idmm", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $idmm;

 
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateentre(): ?\DateTimeInterface
    {
        return $this->dateentre;
    }

    public function setDateentre(\DateTimeInterface $dateentre): self
    {
        $this->dateentre = $dateentre;

        return $this;
    }

    public function getDatesortie(): ?\DateTimeInterface
    {
        return $this->datesortie;
    }

    public function setDatesortie(\DateTimeInterface $datesortie): self
    {
        $this->datesortie = $datesortie;

        return $this;
    }

    public function getIdmm(): ?maisonhote
    {
        return $this->idmm;
    }

    public function setIdmm(?maisonhote $idmm): self
    {
        $this->idmm = $idmm;

        return $this;
    }

    
  
}
