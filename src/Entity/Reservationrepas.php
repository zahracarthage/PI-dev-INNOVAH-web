<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;


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
     * @Assert\NotBlank
     * @Assert\GreaterThan("today")
     * ('la date est incorrecte')
     */
    
    private $date;


    /**
     * @ORM\ManyToOne(targetEntity="Repas")
     * @ORM\JoinColumn(name="idr", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * 
     */
    private $idr;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    private $nbrpersonnes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $message;

    /**
     * @ORM\Column(type="time")
     * @Assert\NotBlank
     */
    private $heure;

    /**
     * @ORM\Column(type="string", length=100)    
     * @Assert\NotBlank 
     * (message="veuillez remplir ce champ")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     *    @Assert\NotBlank
     * @Assert\Email(
     *    message = "l'adresse {{ value }} n'est pas valide." )
     */
    private $email;

    /**
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "Votre numero ne peux pas etre moins de 8 characteres",
     *      maxMessage= " Votre numero ne peux pas depasser les 8 characteres",
     * )
     *     @ORM\Column(type="string", length=20)
     * 
  
     */
    
    private $phone;

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

    public function getNbrpersonnes(): ?int
    {
        return $this->nbrpersonnes;
    }

    public function setNbrpersonnes(int $nbrpersonnes): self
    {
        $this->nbrpersonnes = $nbrpersonnes;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
