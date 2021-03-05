<?php

namespace App\Entity;

use App\Repository\ReservationrepasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationrepasRepository::class)
 */
class Reservationrepas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;


    /**
     * @ORM\ManyToOne(targetEntity="Repas")
     * @ORM\JoinColumn(name="idr", referencedColumnName="id", nullable=false)
     */
    private $idr;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdr(): ?Repas
    {
        return $this->idr;
    }

    public function setIdr(?Repas $idr): self
    {
        $this->idr = $idr;

        return $this;
    }
}
