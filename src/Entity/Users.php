<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * * @UniqueEntity(
 * fields={"email"},message="L'émail que vous avez tapé est déjà utilisé !"
 * )
 */
class Users implements UserInterface

{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     *     message="l adresse  n est pas valide")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     * min = 2,
     * max = 20,
     * minMessage = "Votre nom doit contenir au moins {{limit }} caract`eres",
     * maxMessage = "Votre nom doit contenir au plus {{limit }} caract`eres",
     * allowEmptyString = false
     * )
     * @Assert\Type(
     * type={"alpha", "digit"},
     * message="Votre nom {{ value }} doit contenir
    seulement des lettres alphabétiques"
     * )

     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\Length(
     * min = 8,
     * minMessage = "Votre mot de passe doit comporter au minimum {{ limit }} caractères")
     */
    private $password;
    /**
     * @Assert\EqualTo(propertyPath = "password",
     * message="Vous n'avez pas saisi le même mot de passe !" )
     */

    private $confirm_password;

   /**
    * @ORM\Column(type="json")
    */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $activation_token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;
    public function getRoles(): array
    { $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }


    public function getConfirmPassword()
    {
        return $this->confirm_password;
    }
    public function setConfirmPassword($confirm_password)
    {
        $this->confirm_password = $confirm_password;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials() {}
    public function getSalt() {}

    public function getActivationToken(): ?string
    {
        return $this->activation_token;
    }

    public function setActivationToken(?string $activation_token): self
    {
        $this->activation_token = $activation_token;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
